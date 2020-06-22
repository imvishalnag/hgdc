
@extends('admin.template.admin_master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-users"></i> Total Members</span>
        <div class="count">878</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-briefcase"></i>Total Products</span>
        <div class="count">878</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-rupee"></i> Total Member Wallet Balance</span>
        <div class="count">87978</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-rupee"></i> Total Revenue</span>
        <div class="count">324</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-rupee"></i> Total TDS</span>
        <div class="count">35445</div>
      </div>
    </div>
    
    <!-- /top tiles -->
    <br />
    <div class="table-responsive">
      <table class="table table-striped jambo_table bulk_action">
          <thead>
              <tr class="headings">                
                  <th class="column-title">Sl No. </th>
                  <th class="column-title">Member ID</th>
                  <th class="column-title">Member Name</th>
                  <th class="column-title">Document Verify</th>
                  <th class="column-title">Document Status</th>
                  <th class="column-title">Status</th>
              </tr>
          </thead>

          <tbody>

          </tbody>
      </table>
  </div>
  </div>
  <!-- /page content -->
@endsection


