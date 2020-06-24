<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Carbon\Carbon;
use Auth;
use Hash;
use App\Helper\SmsSend;

use App\Gallery;

class FrontendController extends Controller
{
    public function login()
    {
        return view('web.login');
    }
  
    public function sendOtp(Request $request)
    {
        
        if($request->ajax()){
            $mobile = $request->input('query');
            $otp = $this->generateNumericOTP(4);
            $password = $otp;
            if($otp){
                $mobile_check = User::where('mobile', $mobile)->count();
               if($mobile_check > 0){
                    $user = DB::table('users')
                    ->where('mobile', $mobile)
                    ->update([
                        'password' => Hash::make($password),
                        'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                    ]);
                    if($user){
                        $html = "Your OTP is ".$otp."";
                        SmsSend::smsSendTo($mobile,$html);
                        echo "Otp Send Successfully to Your Mobile Number";
                    }else{
                        return 1;
                    }
               }else{
                    $user = new User;
                    $user->mobile = $mobile;
                    $user->password = Hash::make($password);
                    $user->status = '1';
                    if($user->save()){
                        
                        $generatedID = $this->studentIDGeneration($user->id);
                        User::Where('id',$user->id)->update(['student_id'=>$generatedID]);
                        $html = "Your OTP is ".$otp."";
                        SmsSend::smsSendTo($mobile,$html);
                        echo "Otp Send Successfully to Your Mobile Number";
                    }else{
                       return 1;
                    }
               }
            }
        }
    }
    
    public function loginWithOtp(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|numeric|min:10',
            'password' => 'required|numeric|min:4'
        ]);
        
        $user = User::where('mobile', $request->input('mobile'))->first();
        if(!empty($user->mobile) && !empty($user->password)){
            $credentials = $request->only('mobile', 'password');
       
            if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
                return redirect()->intended('/web/admission');
            }else{
                return back()->with('error', "OTP is incorrect!");
            }
        }else{
            return back()->with('error', 'OTP is incorrect!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('web.login');
    }
    // Function to generate OTP 
    function generateNumericOTP($n) { 
        $generator = "1357902468"; 
        $result = ""; 
        for ($i = 1; $i <= $n; $i++) { 
            $result .= substr($generator, (rand()%(strlen($generator))), 1); 
        } 
        return $result; 
    } 

    function studentIDGeneration($id){
        $user = User::count();
        if($user > 0){
            $first_name = 'H';
            $last_name = 'G';
    
            $title_id = $first_name.$last_name;
            $l_id = 6 - strlen((string)$id);
            $generatedID = $title_id ;
            for ($i=0; $i < $l_id; $i++) { 
                $generatedID .= "0";
            }
            $generatedID .= $id;
            return $generatedID;
        }else{
            $generatedID = 'HG000001';
            return $generatedID;
        }
    }

}
