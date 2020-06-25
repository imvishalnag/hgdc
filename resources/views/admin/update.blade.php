
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{$user->name}} <small>Id: {{ $user->student_id }}</small> </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 student-bx about">
                            <!-- Vision & Mission -->
                            <div class="section-head text-center">
                                <h1 class="title">Online  Admission</h1>
                                <p>Three Year Degree Course (Arts) Admission Form</p>
                                <div class="dlab-separator bg-orange"></div>
                            </div>
                            @if (Session::has('message'))
                            <div class="alert alert-success" >{{ Session::get('message') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif

                            @if (isset($user) && !empty($user))

                                <div class="add-form">
                                    {{ Form::open(['method' => 'put','route'=>['admin.update',$user->id], 'enctype'=>'multipart/form-data']) }}
                                        <input type="hidden" value="Contact" name="dzToDo">
                                        <div class="row">
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <h5> Applicant basic information </h5>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="name">1. Name in Full <span style="color:red"><b> * </b></span> </label>
                                                        <input name="name" type="text" value="{{$user->name}}" class="form-control" required>
                                                        @if($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="dob">2. Date of Birth <span style="color:red"><b> * </b></span></label>
                                                        <input name="dob" type="date" value="{{$user->dob}}" class="form-control" required>
                                                        @if($errors->has('dob'))
                                                            <span class="invalid-feedback" role="alert" style="color:red" >
                                                                <strong>{{ $errors->first('dob') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="phone">3. Phone Number <span style="color:red"><b> * </b></span></label>
                                                        <input name="phone" type="text" value="{{$user->mobile}}" disabled class="form-control">
                                                        <input name="mobile" type="hidden" value="{{$user->mobile}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <label for="gender">4. Gender <span style="color:red"><b> * </b></span></label>
                                                        <select name="gender">
                                                            <option value="Male" {{$user->gender == 'Male'?'selected':''}}>Male</option>
                                                            <option value="Female" {{$user->gender == 'Female'?'selected':''}}>Female</option>
                                                        </select>
                                                        @if($errors->has('gender'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('gender') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="f_name">5.a. Father's Name <span style="color:red"><b> * </b></span></label>
                                                        <input name="f_name" value="{{$user->f_name}}" type="text" class="form-control" required>
                                                        @if($errors->has('f_name'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('f_name') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="f_occoupation">5.b. Father's Occoupation </label>
                                                        <input name="f_occupation" value="{{$user->f_occupation}}" type="text" class="form-control">
                                                        @if($errors->has('f_occupation'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('f_occupation') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="m_name">6.a. Mother's Name <span style="color:red"><b> * </b></span></label>
                                                        <input name="m_name" value="{{$user->m_name}}" type="text" class="form-control" required>
                                                        @if($errors->has('m_name'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('m_name') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="m_occoupation">6.b. Mother's Occoupation </label>
                                                        <input name="m_occupation" value="{{$user->m_occupation}}" type="text" class="form-control">
                                                        @if($errors->has('m_occupation'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('m_occupation') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="nationality">7. Nationality <span style="color:red"><b> * </b></span></label>
                                                        <input name="nationality" value="{{$user->nationality}}" type="text" class="form-control" required>
                                                        @if($errors->has('nationality'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('nationality') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="religion">8. Religion <span style="color:red"><b> * </b></span></label>
                                                        <input name="religion" value="{{$user->religion}}" type="text" class="form-control" required>
                                                        @if($errors->has('religion'))
                                                            <span class="invalid-feedback" role="alert" style="color:red" >
                                                                <strong>{{ $errors->first('religion') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="material">9. Marital Status <span style="color:red"><b> * </b></span></label>
                                                        <select name="material" required>
                                                            <option {{$user->material == 'Married'?'selected':''}}>Married</option>
                                                            <option {{$user->material == 'Unmarried'?'selected':''}}>Unmarried</option>
                                                        </select>
                                                        @if($errors->has('material'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('material') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="caste">10. Caste <span style="color:red"><b> * </b></span></label>
                                                        <select name="caste">
                                                            <option {{$user->caste == 'SC'?'selected':''}}>SC</option>
                                                            <option {{$user->caste == 'ST'?'selected':''}}>ST</option>
                                                            <option {{$user->caste == 'OBC'?'selected':''}}>OBC</option>
                                                            <option {{$user->caste == 'MOBC'?'selected':''}}>MOBC</option>
                                                        </select>
                                                        @if($errors->has('caste'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('caste') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <hr>
                                                    <h5> Applicant address information </h5>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="p_address">11.a. Permanent Address <span style="color:red"><b> * </b></span></label>
                                                        <textarea name="p_address" style="height:120px" class="form-control" placeholder="Your message here" required>{{$user->p_address}}</textarea>
                                                        @if($errors->has('p_address'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('p_address') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group m-0">
                                                        <label for="village">11.b. Village/Town <span style="color:red"><b> * </b></span></label>
                                                        <input name="village" value="{{$user->village}}" type="text" class="form-control" required>
                                                        @if($errors->has('village'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('village') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="po">11.c. P.O. <span style="color:red"><b> * </b></span></label>
                                                        <input name="po" value="{{$user->po}}" type="text" class="form-control" required>
                                                        @if($errors->has('po'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('po') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group m-0">
                                                        <label for="dist">11.d. District <span style="color:red"><b> * </b></span></label>
                                                        <input name="dist" value="{{$user->dist}}" type="text" class="form-control" required>
                                                        @if($errors->has('dist'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('dist') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pin">11.e. Pincode. <span style="color:red"><b> * </b></span></label>
                                                        <input name="pin" value="{{$user->pin}}" type="number" class="form-control" required>
                                                        @if($errors->has('pin'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('pin') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <hr>
                                                    <h5>If you have a legal guardian </h5>
                                                    <div class="form-group">
                                                        <span class="CKRD"><input name="l_guardian" type="radio" value="yes" {{$user->legal_guardian_status == '2'?'checked':''}}>Yes</span>
                                                        <span class="CKRD"><input name="l_guardian" type="radio"  value="no" {{$user->legal_guardian_status == '1'?'checked':''}}>No</span>
                                                    </div>
                                                </div>
                                                
                                                    @if ($user->legal_guardian_status == '2')
                                                    <div class="form-row col-md-12" id="l_guardian_div" >
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="name">12.a. Legal Guardian's Name <span style="color:red"><b> * </b></span></label>
                                                                <input name="g_name" value="{{$user->g_name}}" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="name">12.b. Legal Guardian's Relationship <span style="color:red"><b> * </b></span></label>
                                                                <input name="g_relation" value="{{$user->g_relation}}" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="name">12.b. Legal Guardian's Pincode <span style="color:red"><b> * </b></span></label>
                                                                <input name="l_pincode" value="{{$user->l_pincode}}" type="number" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    @else
                                                    <div class="form-row col-md-12" id="l_guardian_div" style="display:none">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <hr>
                                                    <h5> Applicant Education Data</h5>
                                                    <h6 class="mb-0">H.S.L.C</h6>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group mb-2">
                                                        <label for="hslc-div">13.a. Name of Board/University <span style="color:red"><b> * </b></span></label>
                                                        <input name="hslc_board" value="{{$user->hslc_board}}" type="text" class="form-control" required>
                                                        @if($errors->has('hslc_board'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hslc_board') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group mb-2">
                                                        <label for="hslc-div">13.b. Year of Passing <span style="color:red"><b> * </b></span></label>
                                                        <input name="hslc_yr" value="{{$user->hslc_yr}}" type="number" class="form-control" required>
                                                        @if($errors->has('hslc_yr'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hslc_yr') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group mb-2">
                                                        <label for="hslc-div">13.c. Exam Roll No. <span style="color:red"><b> * </b></span></label>
                                                        <input name="hslc_roll" value="{{$user->hslc_roll}}" type="text" class="form-control" required>
                                                        @if($errors->has('hslc_roll'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hslc_roll') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group mb-2">
                                                        <label for="hslc-div">13.d. Division <span style="color:red"><b> * </b></span></label>
                                                        <input name="hslc_div" value="{{$user->hslc_div}}" type="text" class="form-control" required>
                                                        @if($errors->has('hslc_div'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hslc_div') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group mb-2">
                                                        <label for="hslc-div">13.e. Name of School/College <span style="color:red"><b> * </b></span></label>
                                                        <input name="hslc_school" value="{{$user->hslc_school}}" type="text" class="form-control" required>
                                                        @if($errors->has('hslc_school'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hslc_school') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <h6 class="mb-0">H.S.</h6>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="hs-div">14.a. Name of Board/University <span style="color:red"><b> * </b></span></label>
                                                        <input name="hs_board" value="{{$user->hs_board}}" type="text" class="form-control" required>
                                                        @if($errors->has('hs_board'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_board') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <label for="hs-div">14.b. Year of Passing <span style="color:red"><b> * </b></span></label>
                                                        <input name="hs_year" value="{{$user->hs_year}}" type="text" class="form-control" required>
                                                        @if($errors->has('hs_year'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_year') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <label for="hs-div">14.c. Exam Roll No. <span style="color:red"><b> * </b></span></label>
                                                        <input name="hs_roll" value="{{$user->hs_roll}}" type="text" class="form-control" required>
                                                        @if($errors->has('hs_roll'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_roll') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="form-group">
                                                        <label for="hs-div">14.d. Division <span style="color:red"><b> * </b></span></label>
                                                        <input name="hs_div" value="{{$user->hs_div}}" type="text" class="form-control" required>
                                                        @if($errors->has('hs_div'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_div') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="hs_school">14.e. Name of School/College <span style="color:red"><b> * </b></span></label>
                                                        <input name="hs_school" value="{{$user->hs_school}}" type="text" class="form-control" required>
                                                        @if($errors->has('hs_school'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_school') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <hr>
                                                    <h5>Upload required documents</h5>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="name"> H.S. Marksheet<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
                                                        <input name="hs_marksheet" type="file" class="form-control" >
                                                        @if($errors->has('hs_marksheet'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_marksheet') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="name">H.S. Certificate<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
                                                        <input name="hs_certificate" type="file" class="form-control" >
                                                        @if($errors->has('hs_certificate'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('hs_certificate') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="name">Caste Certificate (if Applicable)<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
                                                        <input name="caste_certificate" type="file" class="form-control">
                                                        @if($errors->has('caste_certificate'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('caste_certificate') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name">23. Signature of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
                                                        <input name="sign" type="file" class="form-control" >
                                                        @if($errors->has('sign'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('sign') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name">23. Photo of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
                                                        <input name="photo" type="file" class="form-control" >
                                                        @if($errors->has('photo'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('photo') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12 mt-3 mb-2">
                                                    <button name="submit" type="submit" value="Submit" class="btn btn-primary btn-lg">Update<span></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script') 
    <style> input[type=checkbox], input[type=radio] {margin-right: 4px}select{width: 100%;padding: 8px;border-color: #ccc;}@media(max-width:425px){.col-md-6, .col-md-4, .col-md-3, .col-md-2{width:100%}}</style>
    @include('web.admsn_script.admsn_script')
@endsection


