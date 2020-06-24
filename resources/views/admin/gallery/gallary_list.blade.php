
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3> Media Gallery </h3>
          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_content">

                <div class="row">
                    @if (isset($gallery) && !empty($gallery))
                        @foreach ($gallery as $item)
                        <div class="col-md-55">
                          <div class="thumbnail">
                            <div class="image view view-first" style="height: 177px;">
                              <img style="width: 100%; display: block;" src="{{asset('gallery/thumb/'.$item->image.'')}}" alt="image" />
                              <div class="mask" style="height: 177px;">
                                <div class="tools tools-bottom">
                                  <a href="{{route('admin.gallery_delete',['id'=>$item->id])}}"><i class="fa fa-times"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    @endif


                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 book-mobile">
                {!! $gallery->onEachSide(2)->links() !!}
        </div>

        </div>
      </div>
</div>
@endsection



