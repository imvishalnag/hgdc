
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{$single_student->name}}</h2>
                        <div class="clearfix"></div>
                    </div>
         <div class="panel-body table-responsive">
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="application_no">StudentID</label>
                    <input type="text" disabled class="form-control" id="application_no" name="application_no" value="{{ $single_student->student_id }}">
                </div>
                <div class="col-md-4">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" value="{{$single_student->name}}">
                </div>
                <div class="col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$single_student->email}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="session">For the Session</label>
                    <select name="session" id="session" class="form-control">
                        <option value="" selected disabled>--SELECT SESSION--</option>
                        <option value="2018" {{$single_student->session == '2018'?'selected':''}}>2018</option>
                        <option value="2019" {{$single_student->session == '2019'?'selected':''}}>2019</option>
                        <option value="2020" {{$single_student->session == '2020'?'selected':''}}>2020</option>
                    </select>
                    @if($errors->has('session'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('session') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="class">Select Course</label>
                    <select name="class" id="class" class="form-control">
                        <option value="" selected disabled>--SELECT CLASS--</option>
                        <option {{$single_student->course == 'HS 1st Year'?'selected':''}}>HS 1st Year</option>
                        <option {{$single_student->course == 'HS 2nd Year'?'selected':''}}>HS 2nd Year</option>
                    </select>
                    @if($errors->has('class'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('class') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="sex">Sex(M/F)</label>
                    <select name="sex" id="sex" class="form-control">
                        <option value="" selected disabled>--SELECT SEX--</option>
                        <option {{$single_student->sex == 'Male'?'selected':''}}>Male</option>
                        <option {{$single_student->sex == 'Female'?'selected':''}}>Female</option>
                    </select>
                    @if($errors->has('sex'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" value="{{$single_student->dob}}" name="dob">
                    @if($errors->has('dob'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="fn">Father's Name</label>
                    <input type="text" class="form-control" id="fn" name="fn" value="{{ $single_student->fn }}">
                    @if($errors->has('fn'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('fn') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="mn">Mother's Name</label>
                    <input type="text" class="form-control" id="mn" name="mn" value="{{ $single_student->mn }}">
                    @if($errors->has('mn'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mn') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gname">Guardian's Name</label>
                        <input type="text" class="form-control" id="gname" name="gname" value="{{ $single_student->gname }}">
                        @if($errors->has('gname'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('gname') }}</strong>
                        </span>
                        @endif
                        </div>
                </div>
                <div class="col-md-4">
                    <label for="occupation">Occupation of Father/ Guardian</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $single_student->occupation }}">
                    @if($errors->has('occupation'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('occupation') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="income">Annual Income of Father/ Guardian(In Rs.)</label>
                        <input type="number" class="form-control" id="income" name="income" value="{{$single_student->income}}">
                        @if($errors->has('income'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('income') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $single_student->nationality }}">
                    @if($errors->has('nationality'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('nationality') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="religion">Religion</label>
                    <select name="religion" class="form-control">
                        <option value="" selected disabled>--SELECT RELIGION--</option>
                        <option {{$single_student->religion == 'Islam'?'selected':''}}>Islam</option>
                        <option {{$single_student->religion == 'Hindu'?'selected':''}}>Hindu</option>
                        <option {{$single_student->religion == 'Christian'?'selected':''}}>Christian</option>
                        <option {{$single_student->religion == 'Jain'?'selected':''}}>Jain</option>
                        <option {{$single_student->religion == 'Buddhism'?'selected':''}}>Buddhism</option>
                    </select>
                    @if($errors->has('religion'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('religion') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="cast-comm-group-tribe">Cast</label>
                    <select name="cast" class="form-control">
                        <option value="" selected disabled>--SELECT CASTE--</option>
                        <option {{$single_student->cast == 'General'?'selected':''}}>General</option>
                        <option {{$single_student->cast == 'EWS'?'selected':''}}>EWS</option>
                        <option {{$single_student->cast == 'OBC'?'selected':''}}>OBC</option>
                        <option {{$single_student->cast == 'MOBC'?'selected':''}}>MOBC</option>
                        <option {{$single_student->cast == 'SC'?'selected':''}}>SC</option>
                        <option {{$single_student->cast == 'ST(P)'?'selected':''}}>ST(P)</option>
                        <option {{$single_student->cast == 'ST(H)'?'selected':''}}>ST(H)</option>
                    </select>
                    @if($errors->has('cast'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('cast') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="mobile">Contact No</label>
                    <input type="number" name="mobile" class="form-control" id="mobile" value="{{$single_student->mobile}}">
                    @if($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <h2>Present Address</h2>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="village">Village/Town</label>
                    <input name="village" class="form-control" id="village" value="{{$single_student->vill}}">
                    @if($errors->has('village'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('village') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="po">Post Office</label>
                    <input name="po" class="form-control" id="po" value="{{$single_student->po}}">
                    @if($errors->has('po'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('po') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="ps">Police Station</label>
                    <input name="ps" class="form-control" id="ps" value="{{$single_student->ps}}">
                    @if($errors->has('ps'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('ps') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="dist">District</label>
                    <input name="dist" class="form-control" id="dist" value="{{$single_student->dist}}">
                    @if($errors->has('dist'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('dist') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="state">State</label>
                    <input name="state" class="form-control" id="state" value="{{$single_student->state}}">
                    @if($errors->has('state'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="pin">PIN</label>
                    <input type="number" name="pin" class="form-control" id="pin" value="{{$single_student->pin}}">
                    @if($errors->has('pin'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('pin') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <h2>Permanent Address</h2>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="p_village">Village/Town</label>
                    <input name="p_village" class="form-control" id="p_village" value="{{$single_student->p_vill}}">
                    @if($errors->has('p_village'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_village') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_po">Post Office</label>
                    <input name="p_po" class="form-control" id="p_po" value="{{$single_student->p_po}}">
                    @if($errors->has('p_po'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_po') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_ps">Police Station</label>
                    <input name="p_ps" class="form-control" id="p_ps" value="{{$single_student->p_ps}}">
                    @if($errors->has('p_ps'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_ps') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="p_dist">District</label>
                    <input name="p_dist" class="form-control" id="p_dist" value="{{$single_student->p_ps}}">
                    @if($errors->has('p_dist'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_dist') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_state">State</label>
                    <input name="p_state" class="form-control" id="p_state" value="{{$single_student->p_state}}">
                    @if($errors->has('p_state'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_state') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_pin">PIN</label>
                    <input type="number" name="p_pin" class="form-control" id="p_pin" value="{{$single_student->p_pin}}">
                    @if($errors->has('p_pin'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_pin') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <h2>Details of last School attended</h2>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="exam">Name of the Examination Passed</label>
                    <input type="text" class="form-control" id="exam" name="exam" value="{{ $single_student->exam }}">
                    @if($errors->has('exam'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('exam') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="registration">Board Registration No</label>
                    <input type="text" class="form-control" id="registration" name="registration" value="{{$single_student->registration }}">
                    @if($errors->has('registration'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('registration') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="last_attended_school">Name of the Institution attended last</label>
                    <input type="text" class="form-control" id="last_attended_school" name="last_attended_school" value="{{ $single_student->last_attended_school }}">
                    @if($errors->has('last_attended_school'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('last_attended_school') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="last_school_addr">Address of the above institution</label>
                    <textarea class="form-control" id="last_school_addr" name="last_school_addr">{{ $single_student->last_school_addr }}</textarea>
                    @if($errors->has('last_school_addr'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('last_school_addr') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-highlight">
                        <thead>
                            <th>Sl. No.</th>
                            <th>Subjects</th>
                            <th>Max Marks</th>
                            <th>Marks/Grade Obtained</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><textarea name="subject" class="form-control">{{$single_student->subject}}</textarea></td>
                                <td><input type="number" name="max_mark" value="{{$single_student->max_marks}}" class="form-control" /></td>
                                <td><input type="number" name="marks_obtained" value="{{$single_student->marks_obtained}}" class="form-control" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="ncc">Are you willing to join NCC?</label><br>
                    <select name="ncc" class="form-control">
                        <option value="">--SELECT ANY--</option>
                        <option {{$single_student->ncc == 'Yes'?'selected':''}}>Yes</option>
                        <option {{$single_student->ncc == 'No'?'selected':''}}>No</option>
                    </select>
                    @if($errors->has('ncc'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('ncc') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="bsg">Are you willing to join Bharat Scout & Guide?</label><br>
                    <select name="bsg" class="form-control">
                        <option value="">--SELECT ANY--</option>
                        <option  {{$single_student->bsg == 'Yes'?'selected':''}}>Yes</option>
                        <option  {{$single_student->bsg == 'No'?'selected':''}}>No</option>
                    </select>
                    @if($errors->has('bsg'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('bsg') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="">Are you willing to register as trainee in computer centre?</label>
                    <select name="computer" class="form-control">
                        <option value="">--SELECT ANY--</option>
                        <option  {{$single_student->computer == 'Yes'?'selected':''}}>Yes</option>
                        <option  {{$single_student->computer == 'No'?'selected':''}}>No</option>
                    </select>
                    @if($errors->has('computer'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('computer') }}</strong>
                    </span>
                    @endif
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="">Have you discontinoud study after passing the qualifying exam?</label>
                        <select name="gap" class="form-control">
                            <option value="">--SELECT ANY--</option>
                            <option  {{$single_student->gap == 'Yes'?'selected':''}}>Yes</option>
                            <option  {{$single_student->gap == 'No'?'selected':''}}>No</option>
                        </select>
                        @if($errors->has('gap'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('gap') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="">Will you reside in the college Hostel?</label>
                        <select name="hostel" class="form-control">
                            <option value="">--SELECT ANY--</option>
                            <option  {{$single_student->hostel == 'Yes'?'selected':''}}>Yes</option>
                            <option  {{$single_student->hostel == 'No'?'selected':''}}>No</option>
                        </select>
                        @if($errors->has('hostel'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('hostel') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="placed">Place</label>
                        <input type="text" id="placed1" class="form-control" name="placed1" value="{{ $single_student->placed1 }}">
                        @if($errors->has('placed1'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('placed1') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="dated1">Date</label>
                        <input type="date" id="dated1" class="form-control" name="dated1" value="{{ $single_student->dated1 }}">
                        @if($errors->has('dated1'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('dated1') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



