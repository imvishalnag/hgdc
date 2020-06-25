
@extends('admin.template.admin_master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-users"></i> Total Students</span>
        <div class="count">{{$user_count}}</div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-briefcase"></i>Total Gallery Images</span>
        <div class="count">{{$gallery_count}}</div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-rupee"></i> Total Notifications</span>
        <div class="count">{{$notification_count}}</div>
      </div>
    </div>
    
    <!-- /top tiles -->
    <br />
    <div class="table-responsive">
      <h3>Last Ten Registered Students</h3>
      <table class="table table-striped jambo_table bulk_action">
          <thead>
              <tr class="headings">                
                  <th class="column-title">Sl No. </th>
                  <th class="column-title">Student ID</th>
                  <th class="column-title">Name</th>
                  <th class="column-title">Mobile Number</th>
                  <th class="column-title">Course Type</th>
                  <th class="column-title">Date</th>
              </tr>
          </thead>

          <tbody>
            @if (isset($user) && !empty($user))
            @php
                $count = 1;
            @endphp
                @foreach ($user as $item)
                    <tr>
                      <td>{{$count++}}</td>
                      <td>{{$item->student_id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->mobile}}</td>
                      <td>
                        @if ($item->course_status == '1')
                            Honours
                        @else
                            Regular
                        @endif
                      </td>
                      <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
            @endif
          </tbody>
      </table>
    </div>
  </div>
  <!-- /page content -->
@endsection


