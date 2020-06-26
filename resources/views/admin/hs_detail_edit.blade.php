
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
                                <h1 class="title">H.S. Detail Edit Form</h1>
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
                                    {{ Form::open(['method' => 'post','route'=>'admin.student_hs_detail_update', 'enctype'=>'multipart/form-data']) }}
                                        <input type="hidden" value="{{$user->id}}" name="user_id">
                                        <div class="row">
                                            <div class="form-row col-md-12 subjects">

                                                @if (isset($subjects) && !empty($subjects))
                                                @php
                                                    $subject_count = 1;
                                                @endphp
                                                    @foreach ($subjects as $item)
                                                        <div class="col-md-12">
                                                            <input type="hidden" name="subject_id[]" value="{{$item->id}}">
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group mb-2">
                                                                    <label for="hs-sub6-mark">20.a. Subject1 Name <span style="color:red"><b> * </b></span></label>
                                                                    <input name="subject_name[]" type="text" value="{{$item->subject_name}}" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                                <div class="form-group mb-2">
                                                                    <label for="hs-sub6--mark">20.b. Full Mark <span style="color:red"><b> * </b></span></label>
                                                                    <input name="full_marks[]" type="text" value="{{$item->full_marks}}" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                                <div class="form-group mb-2">
                                                                    <label for="hs-sub6-mark">20.c. Mark Scored <span style="color:red"><b> * </b></span></label>
                                                                    <input name="marks_scored[]" value="{{$item->marks_scored}}" type="text" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                                <div class="form-group mb-2">
                                                                    <br>
                                                                    @if ($subject_count == '1')
                                                                    <button type="button" class="btn btn-primary btn-sm mt-3" id="add"> 
                                                                        <i class="fa fa-plus"></i>
                                                                        
                                                                    </button>
                                                                    @endif            
                                                                <a class="btn btn-danger btn-sm" href="{{route('admin.student_hs_detail_delete',['id'=>$item->id])}}"><i class="fa fa-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $subject_count++;
                                                        @endphp
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group mb-2">
                                                        <label for="t_mark">21. Total Marks Obtain <span style="color:red"><b> * </b></span></label>
                                                        <input name="t_mark" value="{{$user->t_mark}}" type="text" class="form-control" required>
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


