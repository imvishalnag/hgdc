
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 student-bx about">
                            <!-- Vision & Mission -->
                            <div class="section-head text-center">
                                <h1 class="title">Subject Selection Edit</h1>
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
                                    {{ Form::open(['method' => 'post','route'=>'admin.student_subject_selection_update']) }}
                                        <input type="hidden" value="{{$user->id}}" name="user_id">
                                        <div class="row">
                                            <div class="form-row col-md-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <hr>
                                                    <h5> Subject selection </h5>
                                                    <h6>In which course your are seeking admission for <span style="color:red"><b> * </b></span></h6>
                                                    <div class="form-group">
                                                        <span class="CKRD"><input name="course-type" type="radio" value="h_course" {{$user->course_status == '1'?'checked':''}}>Honours Course &nbsp;</span>
                                                        <span class="CKRD"><input name="course-type" type="radio" value="r_course" {{$user->course_status == '2'?'checked':''}}>Regular Course &nbsp;</span>
                                                        @if($errors->has('course-type'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('course-type') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                @if ($user->course_status == '1')
                                                <div class="form-row col-md-12" id="h-course" >
                                                @else
                                                <div class="form-row col-md-12" id="h-course" style="display:none">
                                                @endif
                                                
                                                @if (isset($HonoursSujbect) && !empty($HonoursSujbect))
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="name">22.a. Honours Subject <br><br></label>
                                                        <select name="honors">
                                                            <option  value="Assamese" {{$HonoursSujbect->honors == 'Assamese'?'selected':''}}>Assamese</option>
                                                            <option value="Political Science" {{$HonoursSujbect->honors == 'Political Science'?'selected':''}}>Political Science</option>
                                                            <option value="Pholisophy" {{$HonoursSujbect->honors == 'Pholisophy'?'selected':''}}>Pholisophy</option>
                                                            <option value="Education" {{$HonoursSujbect->honors == 'Education'?'selected':''}}>Education</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="name">22.b. Honours Generic Subject (other than honours subject)</label>
                                                        <select name="honors_other">
                                                            <option value="Education" {{$HonoursSujbect->honors_other == 'Education'?'selected':''}}>Education</option>
                                                            <option value="Econonics/Elective Assamese (ASL)" {{$HonoursSujbect->honors_other == 'Econonics/Elective Assamese (ASL)'?'selected':''}}>Econonics/Elective Assamese (ASL)</option>
                                                            <option value="Pholisophy" {{$HonoursSujbect->honors_other == 'Pholisophy'?'selected':''}}>Pholisophy</option>
                                                            <option value="Political Science" {{$HonoursSujbect->honors_other == 'Political Science'?'selected':''}}>Political Science</option>
                                                            <option value="Computer Science" {{$HonoursSujbect->honors_other == 'Computer Science'?'selected':''}}>Computer Science</option>
                                                            <option value="Mathematics" {{$HonoursSujbect->honors_other == 'Mathematics'?'selected':''}}>Mathematics</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="name">22.a. Honours Subject <br><br></label>
                                                        <select name="honors">
                                                            <option  value="Assamese" >Assamese</option>
                                                            <option value="Political Science">Political Science</option>
                                                            <option value="Pholisophy">Pholisophy</option>
                                                            <option value="Education">Education</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="form-group">
                                                        <label for="name">22.b. Honours Generic Subject (other than honours subject)</label>
                                                        <select name="honors_other">
                                                            <option value="Education"}>Education</option>
                                                            <option value="Econonics/Elective Assamese (ASL)">Econonics/Elective Assamese (ASL)</option>
                                                            <option value="Pholisophy">Pholisophy</option>
                                                            <option value="Political Science">Political Science</option>
                                                            <option value="Computer Science">Computer Science</option>
                                                            <option value="Mathematics">Mathematics</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endif
                                                    

                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">22.c. Compulsory Subject <span style="color:red"><b> * </b></span></label>		 @php
                                                                    $eng_com_status =true;
                                                                    $MIL_status =true;
                                                                    $MIL__lang_status =true;
                                                                @endphp											
                                                            <div class="form-group mb-1">
                                                                <span class="CKRD">
                                                                    <input type="checkbox" name="compulsory[]" checked disabled>Enviromental Studies &nbsp;
                                                                </span>
                                                                <input type="hidden" name="compulsory[]" value="Enviromental Studies">

                                                                @if (isset($Compulsory) && !empty($Compulsory)  && $user->course_status == '1') 
                                                                    @foreach ($Compulsory as $item)
                                                                        @if ($item->compulsory_subject == 'English Communication')
                                                                        <span class="CKRD">
                                                                            <input class="h-comp-sub-s" name="compulsory[]" type="checkbox" value="English Communication" onclick="getCHonorsLang('English Communication')" checked>English Communication  or, &nbsp;
                                                                        </span>
                                                                        @php
                                                                            $eng_com_status =false;
                                                                        @endphp
                                                                    
                                                                        @elseif ($item->compulsory_subject == 'MIL')
                                                                            <span class="CKRD">
                                                                                <input class="h-comp-sub-s" type="checkbox" name="compulsory[]" value="MIL" onclick="getCHonorsLang('MIL')" checked>MIL &nbsp;
                                                                            </span>
                                                                            <span class="CKRD" id="mil_div_honors">
                                                                                <select name="mil_language" required>
                                                                                    <option value="">Select Language</option>
                                                                                    <option value="Assamese" {{$item->language == 'Assamese'?'selected':''}}>Assamese</option>
                                                                                    <option value="Hindi" {{$item->language == 'Hindi'?'selected':''}}>Hindi</option>
                                                                                </select>
                                                                            </span>
                                                                            @php
                                                                                $MIL_status =false;
                                                                                $MIL__lang_status =false;
                                                                            @endphp
                                                                        @endif
                                                                        @endforeach
                                                                @endif
                                                                @if ($eng_com_status)
                                                                <span class="CKRD">
                                                                    <input class="h-comp-sub-s" name="compulsory[]" type="checkbox" value="English Communication" onclick="getCHonorsLang('English Communication')">English Communication  or, &nbsp;
                                                                </span>
                                                                @endif

                                                                @if ($MIL_status)
                                                                <span class="CKRD">
                                                                    <input class="h-comp-sub-s" type="checkbox" name="compulsory[]" value="MIL" onclick="getCHonorsLang('MIL')">MIL &nbsp;
                                                                </span>                                                                
                                                                @endif
                                                                @if ($MIL__lang_status)
                                                                <span class="CKRD" style="display: none" id="mil_div_honors">
                                                                        
                                                                </span>                                                               
                                                                @endif
                                                            </div>																	
                                                        </div>
                                                    </div>
                                                </div>

                                                @if ($user->course_status == '2')
                                                <div class="form-row col-md-12" id="r-course">
                                                @else
                                                <div class="form-row col-md-12" id="r-course" style="display:none">
                                                @endif
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">22.a. Elective Subject <b style="color:red; font-weight:500;">(Any Two)</b> <span style="color:red"><b> * </b></span></label>											
                                                            <div class="form-group">
                                                                @php
                                                                    $education_status =true;
                                                                    $Econonics_status =true;
                                                                    $Pholisophy_status =true;
                                                                    $Political_status =true;
                                                                    $Computer_status =true;
                                                                    $Mathematics_status =true;
                                                                @endphp
                                                                @if (isset($RegularSubject) && !empty($RegularSubject))
                                                                    @foreach ($RegularSubject as $item)
                                                                        @if ($item->subjects == 'Education')
                                                                            <span class="CKRD"><input class="r-ele-sub" name="elective[]" value="Education" type="checkbox" checked>Education &nbsp;</span>
                                                                            @php
                                                                            $education_status =false;
                                                                            @endphp
                                                                        @elseif ($item->subjects == 'Econonics/Elective Assamese (ASL)')
                                                                            <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Econonics/Elective Assamese (ASL)" checked>Econonics/Elective Assamese (ASL) &nbsp;</span>
                                                                            @php
                                                                            $Econonics_status =false;
                                                                            @endphp
                                                                        @elseif ($item->subjects == 'Pholisophy')
                                                                        <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Pholisophy" checked>Pholisophy &nbsp;</span>
                                                                            @php
                                                                            $Pholisophy_status =false;
                                                                            @endphp
                                                                        @elseif ($item->subjects == 'Political Science')
                                                                        <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Political Science" checked>Political Science &nbsp;</span>
                                                                            @php
                                                                            $Political_status =false;
                                                                            @endphp
                                                                        @elseif ($item->subjects == 'Computer Science')
                                                                        <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Computer Science" checked>Computer Science &nbsp;</span>
                                                                            @php
                                                                            $Computer_status =false;
                                                                            @endphp
                                                                        @elseif ($item->subjects == 'Mathematics')
                                                                        <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Mathematics" checked>Mathematics &nbsp;</span>
                                                                            @php
                                                                            $Mathematics_status =false;
                                                                            @endphp
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if ($education_status)
                                                                    <span class="CKRD"><input class="r-ele-sub" name="elective[]" value="Education" type="checkbox">Education &nbsp;</span>
                                                                @endif
                                                                
                                                                @if ($Econonics_status)
                                                                <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Econonics/Elective Assamese (ASL)">Econonics/Elective Assamese (ASL) &nbsp;</span>
                                                                @endif
                                                                @if ($Pholisophy_status)
                                                                <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Pholisophy">Pholisophy &nbsp;</span>
                                                                @endif
                                                                @if ($Political_status)
                                                                <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Political Science">Political Science &nbsp;</span>
                                                                @endif
                                                                @if ($Computer_status)
                                                                <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Computer Science">Computer Science &nbsp;</span>
                                                                @endif
                                                                @if ($Mathematics_status)
                                                                <span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Mathematics">Mathematics &nbsp;</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">22.b. Compulsory Subject <span style="color:red"><b> * </b></span></label>											
                                                            <div class="form-group">
                                                                @php
                                                                    $eng_com_status =true;
                                                                    $MIL_status =true;
                                                                    $MIL__lang_status =true;
                                                                @endphp
                                                                
                                                                <span class="CKRD">
                                                                    <input name="compulsory1[]" type="checkbox" checked disabled>English &nbsp;
                                                                </span>
                                                                <input type="hidden" name="compulsory1[]" value="English">
    
                                                                <span class="CKRD">
                                                                    <input name="compulsory1[]" type="checkbox" checked disabled>Enviromental Studies &nbsp;
                                                                </span>
                                                                <input type="hidden" name="compulsory1[]" value="Environmental Studies">
                                                                
                                                                @if (isset($Compulsory) && !empty($Compulsory) && $user->course_status == '2')
                                                                    @foreach ($Compulsory as $item)
                                                                        @if ($item->compulsory_subject == 'English Communication')
                                                                        <span class="CKRD">
                                                                            <input class="r-comp-sub-s" name="compulsory1[]" type="checkbox" value="English Communication" onclick="getCheckedGroupBoxes('English Communication')" checked>English Communication &nbsp;
                                                                        </span>
                                                                        @php
                                                                            $eng_com_status =false;
                                                                        @endphp
                                                                        
                                                                        @elseif ($item->compulsory_subject == 'MIL')
                                                                        <span class="CKRD">
                                                                            <input class="r-comp-sub-s" name="compulsory1[]" type="checkbox" value="MIL" onclick="getCheckedGroupBoxes('MIL')" checked>MIL &nbsp;
                                                                        </span>
                                                                        
                                                                        <span class="CKRD" id="mil_div">
                                                                            <select name="mil_language" required>
                                                                                <option value="">Select Language</option>
                                                                                <option value="Assamese" {{$item->language == 'Assamese'?'selected':''}}>Assamese</option>
                                                                                <option value="Hindi" {{$item->language == 'Hindi'?'selected':''}}>Hindi</option>
                                                                            </select>
                                                                        </span>
                                                                        @php
                                                                            $MIL_status =false;
                                                                            $MIL__lang_status =false;
                                                                        @endphp
                                                                
                                                                        @endif
                                                                    @endforeach
                                                                @endif

                                                                @if ($eng_com_status)
                                                                <span class="CKRD">
                                                                    <input class="r-comp-sub-s" name="compulsory1[]" type="checkbox" value="English Communication" onclick="getCheckedGroupBoxes('English Communication')">English Communication &nbsp;
                                                                </span>
                                                                @endif
                                                                @if ($MIL_status)
                                                                <span class="CKRD">
                                                                    <input class="r-comp-sub-s" name="compulsory1[]" type="checkbox" value="MIL" onclick="getCheckedGroupBoxes('MIL')">MIL &nbsp;
                                                                </span>
                                                                @endif
                                                                @if ($MIL__lang_status)
                                                                <span class="CKRD" style="display: none" id="mil_div">
                                                                    
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
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


