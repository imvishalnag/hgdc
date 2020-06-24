
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2" ></div>
        <div class="col-md-8" style="margin-top:50px;">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Notification</h2>
                   
                    <div class="clearfix"></div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>
                
                {{ Form::open(array('route' => 'admin.insert_notification', 'method' => 'post','enctype' => 'multipart/form-data')) }}
                <div class="panel-body table-responsive">

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="application_no">Notification Title</label>
                            <input type="text"  class="form-control" name="title" required>
                            @if($errors->has('title'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> 
                            @enderror
                        </div>                  
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="application_no">Select PDF</label>
                            <input type="file"  class="form-control" name="pdf" required>
                            @if($errors->has('pdf'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('pdf') }}</strong>
                                </span> 
                            @enderror
                        </div>                  
                    </div>

                    <div class="form-group row">                        
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>  
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection



