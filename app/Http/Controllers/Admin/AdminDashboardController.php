<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Gallery;
use App\Notification;
use DataTables;
use App\Subject;
use App\HonoursSujbect;
use App\Compulsory;
use App\RegularSubject;
class AdminDashboardController extends Controller
{
   

    public function index()
    {   
        $user_count = User::where('status', 2)->count();
        $gallery_count = Gallery::count();
        $notification_count = Notification::count();
        $user = User::where('status', 2)->orderBy('created_at', 'DESC')->limit(10)->get();
        return view('admin.dashboard',compact('user','user_count','gallery_count','notification_count'));
    }

    public function studentListTable()
    {   
        return view('admin.studentlist');
    }

    public function studentList()
    {
        return datatables()->of(User::where('status', 2)->orderBy('id', 'desc')->get())
        ->addIndexColumn()
        ->addColumn('action', function($row){
            $btn = '<a href="'.route('admin.show', ['id' => encrypt($row->id)]).'" class="btn btn-primary">View</a>
                    <a href="'.route('admin.edit', ['id' => encrypt($row->id)]).'" class="btn btn-warning" target="_blank">Edit</a> 
                    <a href="'.route('admin.student_hs_detail_edit', ['student_id' => encrypt($row->id)]).'" class="btn btn-warning" target="_blank">HS Detail Edit</a> 
                    <a href="'.route('admin.student_subject_selection_edit', ['student_id' => encrypt($row->id)]).'" class="btn btn-warning" target="_blank">Subject Selection Edit</a> 
            ';
            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function show($aId)
    {
        try {
            $id = decrypt($aId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $user = User::with(['subjects', 'honors'])->where('id', $id)->first();
        return view('admin.show', compact('user'));
    }

    public function edit($aId)
    {
        try {
            $id = decrypt($aId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        
        $user = User::where('id', $id)->first();
        return view('admin.update', compact('user'));
    }

    public function update(Request $request,$id)
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
            'hs_marksheet' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            'hs_certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'caste_certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            'sign' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if($request->input('course-type') == 'h_course'){
            if($request->input('honors') == $request->input('honors_other')){
                return back()->with('error', 'Honours Subject can\'t be same with Honours Generic Subjects!');
            }
        }

        $user = User::find($id);
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
        if($user->save()){
            return redirect()->back()->with('message','User Data Updated Successfully');;
        }else{
            return redirect()->back()->with('error','Something went wrong!');
        }
    }

    public function editHsDetail($student_id)
    {
        try {
            $student_id = decrypt($student_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $user = User::where('id', $student_id)->first();
        $subjects = Subject::where('user_id',$student_id)->get();
        return view('admin.hs_detail_edit',compact('subjects','user'));

    }

    public function deleteHsDetail($id)
    {
        Subject::where('id',$id)->delete();
        return redirect()->back();
    }

    public function updateHsDetail(Request $request)
    {
        $subject_name = $request->input('subject_name');
        $full_marks = $request->input('full_marks');
        $marks_scored = $request->input('marks_scored');
        $subject_id = $request->input('subject_id');

        $user_id = $request->input('user_id');
        $t_mark = $request->input('t_mark');

        if (isset($subject_name) && !empty($subject_name)) {
            for ($i=0; $i < count($subject_name); $i++) { 
                if (isset($subject_id[$i]) && !empty($subject_id[$i])) {
                    Subject::where('id',$subject_id[$i])->update([
                        'subject_name' => $subject_name[$i],
                        'full_marks' =>$full_marks[$i],
                        'marks_scored' =>$marks_scored[$i],
                    ]);
                }else{
                    Subject::create([
                        'user_id' => $user_id,
                        'subject_name' => $subject_name[$i],
                        'full_marks' =>$full_marks[$i],
                        'marks_scored' =>$marks_scored[$i],
                    ]);
                }
            }
        }

        User::where('id',$user_id)->update(['t_mark'=>$t_mark]);
        return redirect()->back()->with('message','Data Updated Successfully');
    }

    public function editSubjectSelection($student_id)
    {
        try {
            $student_id = decrypt($student_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $user = User::where('id', $student_id)->first();
        if ($user->course_status == '1') {
            $HonoursSujbect = HonoursSujbect::where('user_id',$student_id)->first();
            $Compulsory = Compulsory::where('user_id',$student_id)->get();
            return view('admin.subject_selection_edit',compact('user','HonoursSujbect','Compulsory'));
        }elseif ($user->course_status == '2') {
            
            $RegularSubject = RegularSubject::where('user_id',$student_id)->get();
            $Compulsory = Compulsory::where('user_id',$student_id)->get();
            return view('admin.subject_selection_edit',compact('user','RegularSubject','Compulsory'));
        }
    }
    
    public function updateSubjectSelection(Request $request)
    {
        if($request->input('course-type') == 'h_course'){
            if($request->input('honors') == $request->input('honors_other')){
                return back()->with('error', 'Honours Subject can\'t be same with Honours Generic Subjects!');
            }
        }

        $user = User::find($request->input('user_id'));
        if ($request->input('course-type') == 'h_course') {
            $user->course_status = '1';
        } elseif ($request->input('course-type') == 'r_course') {
            $user->course_status = '2';
        }
        $user->save();
        if($request->input('course-type') == 'h_course'){
            HonoursSujbect::where('user_id',$request->input('user_id'))->delete();
            $user_honors_subject = new HonoursSujbect;
            $user_honors_subject->user_id = $request->input('user_id');
            $user_honors_subject->honors = $request->input('honors');
            $user_honors_subject->honors_other = $request->input('honors_other');
            if($user_honors_subject->save()){
                // Compulsory
                
                Compulsory::where('user_id',$request->input('user_id'))->delete();
                $compulsory_subject = new Compulsory;
                $compulsory = $request->input('compulsory');
                $id = $request->input('user_id');
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
            
            RegularSubject::where('user_id',$request->input('user_id'))->delete();
            $user_regular_subject = new RegularSubject;
            $id = $request->input('user_id');
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
                $id = $request->input('user_id');

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
                
            
               Compulsory::where('user_id',$request->input('user_id'))->delete();
               Compulsory::insert($data);
        }
        return redirect()->back()->with('message','Data Updated_successfully');
    }
}
