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
                    <h1 class="text-white">Faculty </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
							<li>Faculty</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-block">
            <!-- blog grid -->
			<div class="section-full content-inner bg-gray">
				<div class="container">
                    <!-- Grid 1 -->
					<div class="section-head">
						<h2 class="title">Department of Assamese</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="dlab-blog-grid-3 row mb-3">
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/as/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Dr. Biju Baruah</a></h5>
										<span>M.A., Ph.D  (H.O.D.)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/as/2.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Dr. Swapna Sarma</a></h5>
										<span>M.A., M.Phil,  Ph.D </span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/as/3.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Dr. Anita Kalita</a></h5>
										<span>M.A., Ph.D  (NET)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/as/4.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Prof. Gitumani Mahanta</a></h5>
										<span>M.A., B.Ed  (SLET)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Grid 2 -->
					<div class="section-head">
						<h2 class="title">Department of English</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="dlab-blog-grid-3 row mb-3">
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/com/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Dr. Deluar Hussain</a></h5>
										<span>M.A., Ph.D  (H.O.D.)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/com/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>H. Rajbandshi</a></h5>
										<span>M.A., M.Phil</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/com/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Ms. Shamina P Ahmed</a></h5>
										<span>M.A.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Grid 3 -->
					<div class="section-head">
						<h2 class="title">Department of Economics</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="dlab-blog-grid-3 row mb-3">
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/eco/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Prof. Babita Sarmah</a></h5>
										<span>M.A. (H.O.D.)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/com/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>N. Ara</a></h5>
										<span>M.A. (SLET, PGDBFS)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Grid 4 -->
					<div class="section-head">
						<h2 class="title">Department of Education</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="dlab-blog-grid-3 row mb-3">
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/edu/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Ms. Nilakshi Goswami</a></h5>
										<span>M.A. (SLET) (H.O.D)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/edu/2.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Mrs. Bhaswati Das</a></h5>
										<span>M.A., B.Ed (SLET)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/edu/3.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Mrs. Dipshikha Das</a></h5>
										<span>M.A. (NET)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Grid 5 -->
					<div class="section-head">
						<h2 class="title">Department of Political Science</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="dlab-blog-grid-3 row mb-3">
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/com/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Dr. Chandan Thakuria</a></h5>
										<span>M.A., M.Phil, Ph.D  (H.O.D.)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/pol_sc/2.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Dr. Utpala Das</a></h5>
										<span>M.A., M.Phil, Ph.D </span>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Grid 6 -->
					<div class="section-head">
						<h2 class="title">Department of Philosophy</h2>
						<div class="dlab-separator bg-orange"></div>
					</div>
					<div class="dlab-blog-grid-3 row mb-3">
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/phil/1.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Mrs. Snigdha Nath</a></h5>
										<span>M.A. (H.O.D.)</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/phil/2.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Ms. Sangeeta Das</a></h5>
										<span>M.A.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="card-container col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="blog-post blog-grid style-2">
									<div class="dlab-info">
										<div class="dlab-post-media">
										<a><img src="{{asset('web/images/techer/phil/3.jpg')}}" alt=""></a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a>Mr. Rinku Deka</a></h5>
										<span>M.A.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- blog grid END -->
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->


	@endsection
	
	@section('script') 
	@endsection