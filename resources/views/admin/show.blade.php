
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
                                   
<div class="row">
                                    <div class="form-row col-md-10">
                                        <div class="col-md-12 col-sm-12">
                                            <h4 class="text-center" style="text-decoration: underline"> Three Year Degree Course (Arts) Admission Form</h4>
                                            <h5> Applicant basic information </h5>
                                        </div>
                                        <div class="form-row col-md-12">
                                            <div class="col-md-5 col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> Applicant Name </label>
                                                    <p>{{$user->name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="dob"> Date of Birth </label>
                                                    <p>{{$user->dob}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-group">
                                                    <label for="phone"> Phone Number </label>
                                                    <p>{{$user->mobile}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-group">
                                                    <label for="gender"> Gender</label>
                                                    <p>{{$user->gender}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="f-name"> Father's Name </label>
                                                    <p>{{$user->f_name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="f-occoupation"> Father's Occoupation </label>
                                                    <p>{{$user->f_occupation}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="m-name"> Mother's Name </label>	
                                                    <p>{{$user->m_name}}</p>		
                                                </div>	
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="m-occoupation"> Mother's Occoupation </label>
                                                    <p>{{$user->m_occupation}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="nationality"> Nationality </label>
                                                    <p>{{$user->nationality}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="religion"> Religion </label>
                                                    <p>{{$user->religion}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="material"> Material Status</label>
                                                    <p>{{$user->material}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="caste"> Caste</label>
                                                    <p>{{$user->caste}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-row col-md-2">
                                            <div>
                                                <img src="{{asset('admin/student/'.$user->photo)}}" alt=""><br>
                                                <img class="pt-1" src="{{asset('admin/student/'.$user->sign)}}" alt="" >
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="col-md-12 col-sm-12">
                                            <hr>
                                            <h5> Applicant address information </h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="name"> Permanent Address </label>
                                                <p>{{$user->p_address}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="form-group m-0">
                                                <label for="name"> Village/Town</label>
                                                <p>{{$user->village}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">11.c. P.O.</label>
                                                <p>{{$user->po}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="form-group m-0">
                                                <label for="name"> District</label>
                                                <p>{{$user->dist}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="name"> Pincode.</label>
                                                <p>{{$user->pin}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="col-md-12 col-sm-12">
                                            <hr>
                                            <h5>If you have a legal guardian  
                                                @if ($user->legal_guardian_status == '1')
                                                <b>&emsp;&emsp; : &emsp;&emsp;No</b>
                                                @elseif($user->legal_guardian_status == '2')
                                                <b>&emsp;&emsp; : &emsp;&emsp;Yes</b>
                                                @endif
                                            </h5>
                                        </div>
                                        @if ($user->legal_guardian_status == '2')
                                        <div class="form-row col-md-12" style="display:">
                                            <div class="col-md-4 col-sm-4 mb-0">
                                                <div class="form-group">
                                                    <label for="name">Legal Guardian's Name </label>
                                                    <p>{{$user->g_name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 mb-0">
                                                <div class="form-group">
                                                    <label for="name"> Legal Guardian's Relationship </label>
                                                    <p>{{$user->g_relation}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 mb-0">
                                                <div class="form-group">
                                                    <label for="name"> Legal Guardian's Pincode</label>
                                                    <p>{{$user->l_pincode}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="col-md-12 col-sm-12">
                                            <hr>
                                            <h5> Applicant Education Data</h5>
                                            <h6 class="mb-0">H.S.L.C</h6>
                                        </div>
                                        <div class="col-md-3 col-sm-3 mb-0">
                                            <div class="form-group mb-2">
                                                <label for="hslc-div"> Name of Board/University </label>
                                                <p>{{$user->hslc_board}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mb-0">
                                            <div class="form-group mb-2">
                                                <label for="hslc-div"> Year of Passing </label>
                                                <p>{{$user->hslc_yr}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mb-0">
                                            <div class="form-group mb-2">
                                                <label for="hslc-div"> Exam Roll No.</label>
                                                <p>{{$user->hslc_roll}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mb-0">
                                            <div class="form-group mb-2">
                                                <label for="hslc-div"> Division </label>
                                                <p>{{$user->hslc_div}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 mb-0">
                                            <div class="form-group mb-2">
                                                <label for="hslc-div"> Name of School/College</label>
                                                <p>{{$user->hslc_school}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 mb-0">
                                            <h6 class="mb-0">H.S.</h6>
                                        </div>
                                        <div class="col-md-3 col-sm-3 mb-0">
                                            <div class="form-group">
                                                <label for="hs-div"> Nane of Board/University </label>
                                                <p>{{$user->hs_board}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mb-0">
                                            <div class="form-group">
                                                <label for="hs-div"> Year of Passing </label>
                                                <p>{{$user->hs_year}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mb-0">
                                            <div class="form-group">
                                                <label for="hs-div"> Exam Roll No.</label>
                                                <p>{{$user->hs_roll}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mb-0">
                                            <div class="form-group">
                                                <label for="hs-div"> Division </label>
                                                <p>{{$user->hs_div}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 mb-0">
                                            <div class="form-group">
                                                <label for="hs-div"> Name of School/College</label>
                                                <p>{{$user->hs_school}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <h6 class="mb-2">H.S. Detail</h6>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <th>Full Marks</th>
                                                        <th>Marks Scored</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($user->subjects) && !empty($user->subjects))
                                                        @foreach($user->subjects as $sub)
                                                            <tr>
                                                                <td>{{$sub->subject_name}}</td>
                                                                <td>{{$sub->full_marks}}</td>
                                                                <td>{{$sub->marks_scored}}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td></td>
                                                        <td colspan="2">{{$user->t_mark}}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-row col-md-12">
                                        <div class="col-md-12 col-sm-12">
                                            <hr>
                                            <h5> Subject selection </h5>
                                            <h6>course your are seeking admission for 
                                                @if ($user->course_status == '1')
                                                    &emsp;&emsp;:&emsp;&emsp;<b>Honours</b>
                                                @elseif ($user->course_status == '2')
                                                &emsp;&emsp;:&emsp;&emsp;<b>Regular</b>
                                                @endif
                                            </h6>
                                        </div>
                                        @if ($user->course_status == '1')
                                        <div class="form-row col-md-12" id="h-course" style="">
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <label for="name"> Honours Subject</label>
                                                    <p>{{$user->honors->honors}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> Honours Generic Subject (other than honours subject)</label>
                                                    <p>{{$user->honors->honors_other}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row col-md-12" id="r-course" style="">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="name"> Compulsory Subject </label>	
                                                    <p>
                                                        @if(isset($user->Compulsory) && !empty($user->Compulsory))
                                                            @foreach($user->Compulsory as $sub)
                                                                {{$sub->compulsory_subject}}
                                                                @if ($sub->compulsory_subject == 'MIL')
                                                                    &emsp;( {{$sub->language}} )
                                                                @endif
                                                                &emsp;&emsp;	
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if ($user->course_status == '2')
                                        <div class="form-row col-md-12" id="r-course" style="">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="name"> Elective Subject </label>	
                                                    <p>
                                                        @if(isset($user->regulatSubject) && !empty($user->regulatSubject))
                                                            @foreach($user->regulatSubject as $sub)
                                                                {{$sub->subjects}}
                                                                &emsp;&emsp;	
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="name"> Compulsory Subject </label>	
                                                    <p>
                                                        @if(isset($user->Compulsory) && !empty($user->Compulsory))
                                                            @foreach($user->Compulsory as $sub)
                                                                {{$sub->compulsory_subject}}
                                                                @if ($sub->compulsory_subject == 'MIL')
                                                                    &emsp;( {{$sub->language}} )
                                                                @endif
                                                                &emsp;&emsp;	
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <hr>
                                    <div class="form-row col-md-12">
                                        @if (!empty($user->hs_marksheet))	
                                            <div class="col-md-6">
                                                <div class="form-group" style="text-align: center;">
                                                    <p style="font-size: 26px;font-weight: 600;text-align: center;">Hs Marksheet</p>
                                                    <img src="{{asset('admin/student/'.$user->hs_marksheet.'')}}" alt="">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!empty($user->hs_certificate))	
                                            <div class="col-md-6">
                                                <div class="form-group" style="text-align: center;">
                                                    <p style="font-size: 26px;font-weight: 600;text-align: center;">Hs Certificate</p>
                                                    <img src="{{asset('admin/student/'.$user->hs_certificate.'')}}" alt="">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!empty($user->caste_certificate))	
                                            <div class="col-md-6">
                                                <div class="form-group" style="text-align: center;">
                                                    <p style="font-size: 26px;font-weight: 600;text-align: center;">Caste </p>
                                                    <img src="{{asset('admin/student/'.$user->caste_certificate.'')}}" alt="">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!empty($user->photo))	
                                            <div class="col-md-6">
                                                <div class="form-group" style="text-align: center;">
                                                    <p style="font-size: 26px;font-weight: 600;text-align: center;">Photo</p>
                                                    <img src="{{asset('admin/student/'.$user->photo.'')}}" alt="">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!empty($user->sign))	
                                            <div class="col-md-6">
                                                <div class="form-group" style="text-align: center;">
                                                    <p style="font-size: 26px;font-weight: 600;text-align: center;">Student Sign</p>
                                                    <img src="{{asset('admin/student/'.$user->sign.'')}}" alt="">
                                                </div>
                                            </div>
                                        @endif
            
                                    </div>



                                </div>
@endsection



