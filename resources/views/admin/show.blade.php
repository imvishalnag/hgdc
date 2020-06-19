
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
                    <a href="javascript:window.print()" class="btn btn-success pull-right mb-2">Print</a>
                    <div class="col-md-12">
                        {{-- <a href="{{ route('applicant.pdf', ['id' => $single_student->id])}}" class="btn btn-warning pull-right mb-2">Export PDF</a> --}}
                        <div class="panel panel-primary">
                            <div class="panel-body table-responsive">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/student/img/'.$single_student->photo)}}" width="120"/>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/student/img/'.$single_student->ds1)}}" width="100"/>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-responsive" cellspacing="0">
                                    <tr>
                                        <th>Student ID</th>
                                        <td>{{$single_student->student_id}}</td>
                                        <th>Name</th>
                                        <td>{{$single_student->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Father's Name</th>
                                        <td>{{$single_student->f_name}}</td>
                                        <th>Mother's Name</th>
                                        <td>{{$single_student->m_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Father's Occupation</th>
                                        <td>{{$single_student->f_occupation}}</td>
                                        <th>Mother's Occupation</th>
                                        <td>{{$single_student->m_occupation}}</td>
                                    </tr>
                                    <tr>
                                        <th>DOB</th>
                                        <td>{{$single_student->dob}}</td>
                                        <th>Gender</th>
                                        <td>{{$single_student->gender}}</td>
                                    </tr>
                                    <tr>
                                        <th>Religion</th>
                                        <td>{{$single_student->religion}}</td>
                                        <th>Cast</th>
                                        <td>{{$single_student->caste}}</td>
                                    </tr>
                                    <tr>
                                        <th>Permanent Address</th>
                                        <td>{{$single_student->p_address}}</td>
                                        <th>P.O</th>
                                        <td>{{$single_student->village}}</td>
                                    </tr>
                                    <tr>
                                        <th>P.S</th>
                                        <td>{{$single_student->po}}</td>
                                        <th>Dist</th>
                                        <td>{{$single_student->dist}}</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>{{$single_student->state}}</td>
                                        <th>Pin</th>
                                        <td>{{$single_student->pin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Legal Guardian Name</th>
                                        <td>{{$single_student->g_name}}</td>
                                        <th>Guardian relation</th>
                                        <td>{{$single_student->g_relation}}</td>
                                    </tr>
                                    <tr>
                                        <th>HSLC Board</th>
                                        <td>{{$single_student->hslc_board}}</td>
                                        <th>HSLC Year</th>
                                        <td>{{$single_student->hslc_yr}}</td>
                                    </tr>
                                    <tr>
                                        <th>HSLC Roll</th>
                                        <td>{{$single_student->hslc_roll}}</td>
                                        <th>HSLC Division</th>
                                        <td>{{$single_student->hslc_div}}</td>
                                    </tr>
                                    <tr>
                                        <th>HSLC School</th>
                                        <td>{{$single_student->hslc_school}}</td>
                                        <th>HS Board</th>
                                        <td>{{$single_student->hs_board}}</td>
                                    </tr>
                                    <tr>
                                        <th>HS Year</th>
                                        <td>{{$single_student->hs_year}}</td>
                                        <th>HS Roll</th>
                                        <td>{{$single_student->hs_roll}}</td>
                                    </tr>
                                    <tr>
                                        <th>HS Division</th>
                                        <td>{{$single_student->hs_div}}</td>
                                        <th>HS School</th>
                                        <td>{{$single_student->hs_school}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection



