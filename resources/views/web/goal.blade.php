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
                    <h1 class="text-white">Goals And Objectives</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
							<li>Goals And Objectives</li>
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
								<h2 class="title">Goals And Objectives</h2>
								<div class="dlab-separator bg-orange"></div>
							</div>
							<div class="classes-details mb-5">
								<div class="dlab-post-text">
									<p>The institution is established with the following distinct goals and objectives-</p>
									<ol>
										<li><p>	Dissemination of knowledge of different fields of modern science & humanities. </p></li>
										<li><p>	Comprehensive development of the socio-economic disadvantaged and backward people. </p></li>
										<li><p>	To make self-development and adapt in the modern competitive world. </p></li>
										<li><p>	To uplift a sense of social responsibility and scientific outlook of the students. </p></li>					
									</ol>
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