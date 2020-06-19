
@extends('admin.template.admin_master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
        <div class="row">
                {{-- <div class="col-md-2"></div> --}}
                <div class="col-md-12" style="margin-top:50px;">
                    <div class="x_panel">
    
                        <div class="x_title">
                            <h2>Student List</h2>
                            <div class="clearfix"></div>
                        </div>
                    <div>
                         @if (Session::has('message'))
                            <div class="alert alert-success" >{{ Session::get('message') }}</div>
                         @endif
                         @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                         @endif
    
                    </div>
                        <div>
                            <div class="x_content">
                                {{-- <a href="{{route('admin.mem_add_epin_form')}}" class="btn btn-primary">Add New EPIN</a> --}}
                                {{-- <a href="{{route('admin.mem_allot_epin_form')}}" class="btn btn-primary">Allot EPIN</a> --}}
                            </div>
                        </div>
                        <div>
                            <div class="x_content">
                                <table id="studentlist" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th>Sl. No</th>
                                      <th>StudentID</th>
                                      <th>Student Name</th>
                                      <th>Mobile No</th>
                                      <th>Father's Name</th>
                                      <th>Mother's Name</th>
                                      <th>Nationality</th>
                                      <th>Religion</th>
                                      <th>Action</th>
                                      <th>Created At</th>
                                    </tr>
                                  </thead>
                                  <tbody>                       
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-2"></div> --}}
        </div>
</div>
<!-- /page content -->
@endsection

@section('script')
     <script type="text/javascript">
         $(function () {
            var i = 1;
            var table = $('#studentlist').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: "50",
                ajax: "{{ route('admin.ajax.student_list') }}",
                columns: [
                    { "render": function(data, type, full, meta) {return i++;}},
                    {data: 'student_id', name: 'student_id',searchable: true},
                    {data: 'name', name: 'name',searchable: true},
                    {data: 'mobile', name: 'mobile',searchable: true},
                    {data: 'f_name', name: 'f_name',searchable: true},
                    {data: 'm_name', name: 'm_name',searchable: true},
                    {data: 'nationality', name: 'nationality',searchable: true},
                    {data: 'religion', name: 'religion',searchable: true},
                    {data: 'action', name: 'action',searchable: true},
                    {data: 'created_at', name: 'created_at',searchable: true}
                ]
            });
            
        });
     </script>
     @endsection




