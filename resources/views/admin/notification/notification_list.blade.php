
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3> Notification List </h3>
          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_content">

                
                <br />
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                      <thead>
                          <tr class="headings">                
                              <th class="column-title">Sl No. </th>
                              <th class="column-title">Title</th>
                              <th class="column-title">Date</th>
                              <th class="column-title">Action</th>
                          </tr>
                      </thead>

                      <tbody>
                        @if (isset($notifications) && !empty($notifications))
                        @php
                            $count = 1;
                        @endphp
                            @foreach ($notifications as $item)
                                <tr>
                                  <td>{{$count++}}</td>
                                  <td>{{$item->title}}</td>
                                  <td>{{$item->created_at}}</td>
                                  <td>
                                    <a target="blank" href="{{asset('notification/'.$item->pdf.'')}}" class="btn btn-info" >View PDF</a>
                                    <a href="{{route('admin.notification_delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                            @endforeach
                        @endif
                      </tbody>
                  </table>
                </div>

                
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 book-mobile">
                {!! $notifications->onEachSide(2)->links() !!}
          </div>

        </div>
      </div>
</div>
@endsection



