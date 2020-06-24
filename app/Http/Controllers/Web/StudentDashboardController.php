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
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'material' => 'required',
            'caste' => 'required',
            'p_address' => 'required',
            'village' => 'required',
            'po' => 'required',
            'dist' => 'required',
            'pin' => 'required|numeric|min:6',
            'hslc_board' => 'required',
            'hslc_yr' => 'required',
            'hslc_roll' => 'required',
            'hslc_div'  => 'required',
            'hslc_school' => 'required',
            'hs_board' => 'required',
            'hs_year' => 'required',
            'hs_roll' => 'required',
            'hs_div' => 'required',
            'hs_school' => 'required',            
            'hs_marksheet' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            'hs_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'caste_certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            'sign' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if($request->input('course-type') == 'h_course'){
            if($request->input('honors') == $request->input('honors_other')){
                return back()->with('error', 'Honours Subject can\'t be same with Honours Generic Subjects!');
            }
        }

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
        $user->dist = $request->input('dist');
        $user->po = $request->input('po');
        $user->pin = $request->input('pin');
        if ($request->input('l_guardian') == 'yes') {            
            $user->legal_guardian_status = '2';
        } else {            
            $user->legal_guardian_status = '1';
        }
        
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
            
        if($request->hasfile('hs_certificate'))
        {
            $image = $request->file('hs_certificate');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $hs_certificate = md5(date('now').time()).uniqid().".".$image_extension;
            $original_path = $destination.$hs_certificate;
            Image::make($image)->save($original_path);
            $user->hs_certificate = $hs_certificate;
        }

        if($request->hasfile('hs_marksheet'))
        {
            $image = $request->file('hs_marksheet');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $hs_marksheet = md5(date('now').time()).uniqid().".".$image_extension;
            $original_path = $destination.$hs_marksheet;
            Image::make($image)->save($original_path);
            $user->hs_marksheet = $hs_marksheet;
        }

        if($request->hasfile('caste_certificate'))
        {
            $image = $request->file('caste_certificate');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $caste_certificate = md5(date('now').time()).uniqid().".".$image_extension;
            $original_path = $destination.$caste_certificate;
            Image::make($image)->save($original_path);
            $user->caste_certificate = $caste_certificate;
        }
        
        
        if($request->hasfile('photo'))
        {
            $image = $request->file('photo');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $photo = md5(date('now').time()).uniqid().".".$image_extension;
            $original_path = $destination.$photo;
            Image::make($image)->save($original_path);
           
            $user->photo = $photo;
        }
        if($request->hasfile('sign'))
        {
            $image = $request->file('sign');
            $destination = base_path().'/public/admin/student/';
            $image_extension = $image->getClientOriginalExtension();
            $sign = md5(date('now').time()).uniqid().".".$image_extension;
            $original_path = $destination.$sign;
            Image::make($image)->save($original_path);
            $user->sign = $sign;
        }
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

        if ($request->input('course-type') == 'h_course') {
            $user->course_status = '1';
        } elseif ($request->input('course-type') == 'r_course') {
            $user->course_status = '2';
        }
        

        if($user->save()){
            $subjects = DB::table('subjects')
            ->insert($subjects);
                // Subject Selection in Honours
            if($request->input('course-type') == 'h_course'){
                $user_honors_subject = new HonoursSujbect;
                $user_honors_subject->user_id = Auth::user()->id;
                $user_honors_subject->honors = $request->input('honors');
                $user_honors_subject->honors_other = $request->input('honors_other');
                if($user_honors_subject->save()){
                    // Compulsory
                    $compulsory_subject = new Compulsory;
                    $compulsory = $request->input('compulsory');
                    $id = Auth::user()->id;
                    for ($i = 0; $i < count($compulsory); $i++) {
                        if ($compulsory[$i] == 'MIL') {
                            $dataSet[] = [
                                'user_id' => $id,
                                'compulsory_subject' => $compulsory[$i],
                                'language' => $request->input('mil_language'),
                            ];
                        } else {
                            $dataSet[] = [
                                'user_id' => $id,
                                'compulsory_subject' => $compulsory[$i],
                                'language' =>null,
                            ];
                        }
                        
                        
                    }
                    Compulsory::insert($dataSet);
                }
            }else if($request->input('course-type') == 'r_course'){
                $user_regular_subject = new RegularSubject;
                $id = Auth::user()->id;
                $elective = $request->input('elective');
                $dataSet = [];
                for ($i = 0; $i < count($elective); $i++) {
                    $dataSet[] = [
                        'user_id' => $id,
                        'subjects' => $elective[$i],
                    ];
                }
                    RegularSubject::insert($dataSet);
                    $compulsory_subject = new Compulsory;
                    $id = Auth::user()->id;

                    $compulsory = $request->input('compulsory1');
                    $data = [];
                    for ($i = 0; $i < count($compulsory); $i++) {
                        if ($compulsory[$i] == 'MIL') {
                            $data[] = [
                                'user_id' => $id,
                                'compulsory_subject' => $compulsory[$i],
                                'language' => $request->input('mil_language'),
                            ];
                        } else {
                            $data[] = [
                                'user_id' => $id,
                                'compulsory_subject' => $compulsory[$i],
                                'language' =>null,
                            ];
                        } 
                    }
                   Compulsory::insert($data);
            }
            return redirect()->route('web.download');
        }else{
            return back()->with('error','Something went wrong!');
        }
    }
    
    public function thanks()
    {
        $user = User::where('id', Auth::user()->id)->first();
        if(Auth::user()->status == "1"){
            return view('web.admission', compact('user'));
        }else if(Auth::user()->status == "2"){
            return view('web.thanks');
        }
    }

    public function download()
    {
        $user = User::with(['subjects', 'honors'])->where('id', Auth::user()->id)->first();
        if(Auth::user()->status == "1"){
            return view('web.admission', compact('user'));
        }else if(Auth::user()->status == "2"){
            return view('web.view-form', compact('user'));
        }
    }
}
