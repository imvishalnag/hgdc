<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use App\Compulsory;
use App\HonoursSujbect;
use App\RegularSubject;
use Intervention\Image\Facades\Image;
class StudentDashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        if(Auth::user()->status == "1"){
            return view('web.admission', compact('user'));
        }else if(Auth::user()->status == "2"){
            return view('web.thanks');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name'              => 'required',
        //     'dob'               => 'required',
        //     'gender'            => 'required',
        //     'f_name'            => 'required',
        //     'f_occupation'      => 'required',
        //     'm_name'            => 'required',
        //     'm_occupation'      => 'required',
        //     'nationality'       => 'required',
        //     'religion'          => 'required',
        //     'material'          => 'required',
        //     'cast'              => 'required',
        //     'p_address'         => 'required',
        //     'village'           => 'required',
        //     'po'                => 'required',
        //     'dist'              => 'required',
        //     'pin'               => 'required|numeric|min:6',
        //     'hslc_board'        => 'required',
        //     'hslc_yr'           => 'required',
        //     'hslc_roll'         => 'required',
        //     'hslc_div'          => 'required',
        //     'hslc_school'       => 'required',
        //     'hs_board'          => 'required',
        //     'hs_year'           => 'required',
        //     'hs_roll'           => 'required',
        //     'hs_div'            => 'required',
        //     'hs_school'         => 'required',
        //     'sign'              => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
        //     'photo'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $user = User::find(Auth::user()->id);
        $user->name = $request->input('name');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->f_name = $request->input('f_name');
        $user->f_occupation = $request->input('f_occupation');
        $user->m_name = $request->input('m_name');
        $user->m_occupation = $request->input('m_occupation');
        $user->nationality = $request->input('nationality');
        $user->religion = $request->input('religion');
        $user->material = $request->input('material');
        $user->caste = $request->input('caste');
        $user->p_address = $request->input('p_address');
        $user->village = $request->input('village');
        $user->po = $request->input('po');
        $user->pin = $request->input('pin');
        $user->g_name = $request->input('g_name');
        $user->g_relation = $request->input('g_relation');
        $user->l_pincode = $request->input('l_pincode');
        $user->hslc_board = $request->input('hslc_board');
        $user->hslc_yr = $request->input('hslc_yr');
        $user->hslc_roll = $request->input('hslc_roll');
        $user->hslc_div = $request->input('hslc_div');
        $user->hslc_school = $request->input('hslc_school');
        $user->hs_board = $request->input('hs_board');
        $user->hs_year = $request->input('hs_year');
        $user->hs_roll = $request->input('hs_roll');
        $user->hs_div = $request->input('hs_div');
        $user->hs_school = $request->input('hs_school');
        $user->t_mark = $request->input('t_mark');
     
        
        
        if($request->hasfile('photo'))
        {
            $image = $request->file('photo');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $photo = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$photo;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/student/'.$photo;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }

        if($request->hasfile('sign'))
        {
            $image = $request->file('sign');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $sign = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$sign;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/student/'.$sign;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }

        $user->photo = $photo;
        $user->sign = $sign;
        $user->status = "2";
        $validatedData = $request->validate([
            'subject_name.*' => 'required',
            'full_marks.*' => 'required',
            'marks_scored.*' => 'required',
        ]);
        for ($i = 0; $i < count($request->subject_name); $i++) {
            $subjects[] = [
                'user_id' => Auth::user()->id,
                'subject_name' => $request->subject_name[$i],
                'full_marks' => $request->full_marks[$i],
                'marks_scored' => $request->marks_scored[$i]
            ];
        }

        if($user->save()){
            $subjects = DB::table('subjects')
            ->insert($subjects);

                // Subject Selection in Honours
            if($request->input('course-type') == 'h_course'){
                if($request->input('honors') == $request->input('honors_other')){
                    return back()->with('error', 'Honours Subject can\'t be same with Honours Generic Subjects!');
                }else{
                $user_honors_subject = new HonoursSujbect;
                $user_honors_subject->user_id = Auth::user()->id;
                $user_honors_subject->honors = $request->input('honors');
                $user_honors_subject->honors_other = $request->input('honors_other');
                if($user_honors_subject->save()){
                        $compulsory_subject = new Compulsory;
                        $compulsory_subject->user_id = Auth::user()->id;
                        $compulsory_subject->environment = $request->input('env');
                        $compulsory_subject->engl_comm = $request->input('engl_comm');
                        if($request->input('mil')){
                            $compulsory_subject->mil = $request->input('assamese');
                        }else{
                            $compulsory_subject->mil = $request->input('hindi');
                        }

                        $compulsory_subject->save();
                }
                }
            }else if($request->input('course-type') == 'r_course'){
                $user_regular_subject = new RegularSubject;
                $user_regular_subject->user_id = Auth::user()->id;
                $user_regular_subject->educ =  $request->input('educ');
                $user_regular_subject->econ = $request->input('econ');
                $user_regular_subject->phil = $request->input('phil');
                $user_regular_subject->pol = $request->input('pol');
                $user_regular_subject->cs = $request->input('cs');
                $user_regular_subject->maths = $request->input('maths');
                if($user_regular_subject->save()){
                    $compulsory_subject = new Compulsory;
                    $compulsory_subject->user_id = Auth::user()->id;
                    $compulsory_subject->environment = $request->input('env');
                    $compulsory_subject->engl_comm = $request->input('engl_comm');
                    $compulsory_subject->engl = $request->input('engl');
                    if($request->input('mil')){
                        $compulsory_subject->mil = $request->input('assamese');
                    }else{
                        $compulsory_subject->mil = $request->input('hindi');
                    }

                    $compulsory_subject->save();
                }
            }
            return redirect()->route('');
        }else{
            return back()->with('error','Something went wrong!');
        }
    }
    
    public function thanks()
    {
        return view('web.thanks');
    }
}
