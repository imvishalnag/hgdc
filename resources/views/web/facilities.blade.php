    @extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Hari-Gayatri Das College">
    @endsection

    @section('content')
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Facilities</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
							<li>Facilities</li>
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
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 student-bx about">
							<!-- Vision & Mission -->
							<div class="section-head m-0">
								<h2 class="title">Facilities</h2>
								<div class="dlab-separator bg-orange"></div>
							</div>
							<div class="classes-details mb-5">
								<div class="dlab-post-text">
									<ul>
										<li class="m-3 text-justify"><p> <strong>Library : </strong> <br>
										The college has a library with a collection of more than 4000 books, a good number of Journals, Newspapers, Magazines for the benefit of the students. Computers & Internet facilities are available in the college library. Xerox facility is also available. </p></li>

										<li class="m-3 text-justify"><p> <strong>Audio-Visual Aids : </strong> <br>
										The college offers classes through Audio-Visual Aids like, Over Head Projector (OH P) and computers besides its conventional methods.</p></li>

										<li class="m-3 text-justify"><p> <strong>Sports Facilities : </strong> <br>
										The college has indoor and outdoor sports facilities and equipments for different out door and indoor games.</p></li>

										<li class="m-3 text-justify"><p> <strong>Drinking Water : </strong> <br>
										The College has a purified and cold frinking water system for staff and students.</p></li>

										<li class="m-3 text-justify"><p> <strong>Free Education : </strong> <br>
										A number of poor students are given free education on the basis of merit. Special coaching is also provided to needy students. This year the College decides to admit poor students for free education in BA 1st year class. They need not pay college admission fee, tution fee etc.</p></li>
									</ul>
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