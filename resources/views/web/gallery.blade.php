    @extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Hari-Gayatri Das College">
    @endsection

    @section('content')
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url({{asset('web/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Gallery</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>Gallery</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- inner page banner END -->
        <div class="content-block">
			<div class="section-full content-inner bg-gray">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="title">Our Gallery</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="row">
						<div class="clearfix col-md-12 p-lr0" id="lightgallery">
							<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery">
								@if (isset($gallery) && !empty($gallery))
									@foreach ($gallery as $item)
									<li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
										<div class="dlab-box frame-box m-b30">
											<div class="dlab-thum dlab-img-overlay1"> 
												<a href="javascript:void(0);">
													<img src="{{asset('gallery/thumb/'.$item->image.'')}}" alt="">
												</a>
												<div class="overlay-bx">
													<div class="overlay-icon"> 
														<span data-exthumbimage="{{asset('gallery/thumb/'.$item->image.'')}}" data-src="{{asset('gallery/'.$item->image.'')}}" class="check-km" title="Image 3 Title will come here">
															<i class="fa fa-search icon-bx-xs"></i>
														</span> 
													</div>
												</div>
											</div>
										</div>
									</li>
									@endforeach
								@endif
							</ul>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 book-mobile">
							{!! $gallery->onEachSide(2)->links() !!}
					  </div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!-- Content END-->

	@endsection
	
	@section('script') 
	@endsection