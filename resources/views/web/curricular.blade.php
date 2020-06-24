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
                    <h1 class="text-white">Curricular </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
							<li>Curricular</li>
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
								<h2 class="title">Curricular</h2>
								<div class="dlab-separator bg-orange"></div>
							</div>
							<div class="classes-details mb-5">
								<div class="dlab-post-text">
									<p>The college offers the following subject in First Year TDC as per semester system introduction by the Gauhati University under Choice Based Credit System (CBCS)</p>
									<ul>
										<li class="m-3 text-justify"><p class="m-0"> <strong>Honours Courses <small style="font-weight:700">(Any one from the following)</small> : </strong> <br></p>
											<ol>
												<li> <p class="m-0">Assamese</p></li>
												<li> <p class="m-0">Political Science</p></li>
												<li> <p class="m-0">Philosophy</p></li>
												<li> <p class="m-0">Education</p></li>
											</ol>
										</li>

										<li class="m-3 text-justify"><p class="m-0"> <strong>Compulsory Subject for Sem I : </strong> <br></p>
											<ol>
												<li> <p class="m-0">English Communication</p></li>
												<li> <p class="m-0">MIL (Assamese/Hindi) Communication</p></li>
												<li> <p class="m-0">Enviromental Studies</p></li>
											</ol>
										</li>

										<li class="m-3 text-justify"><p class="m-0"> <strong>Honours Generic Subject <small style="font-weight:700">(Any one from the following other than honours)</small> : </strong> <br></p>
											<ol>
												<li> <p class="m-0">Education</p></li>
												<li> <p class="m-0">Economics/Elective (ASL)</p></li>
												<li> <p class="m-0">Philosophy</p></li>
												<li> <p class="m-0">Political Science</p></li>
												<li> <p class="m-0">Computer Science</p></li>
												<li> <p class="m-0">Mathematics</p></li>
											</ol>
										</li>

										<li class="m-3 text-justify"><p class="m-0"> <strong>Regular Courses  <small style="font-weight:700">(Compulsory Subject)</small> : </strong> <br></p>
											<ol>
												<li> <p class="m-0">English</p></li>
												<li> <p class="m-0">English Communication</p></li>
												<li> <p class="m-0">MIL (Assamese/Hindi) Communication</p></li>
												<li> <p class="m-0">Enviromental Studies</p></li>
											</ol>
										</li>

										<li class="m-3 text-justify"><p class="m-0"> <strong>Honours Courses  <small style="font-weight:700">(Any two from the following)</small> : </strong> <br></p>
											<ol>
												<li> <p class="m-0">Education</p></li>
												<li> <p class="m-0">Economics/Elective (ASL)</p></li>
												<li> <p class="m-0">Philosophy</p></li>
												<li> <p class="m-0">Political Science</p></li>
												<li> <p class="m-0">Computer Science</p></li>
												<li> <p class="m-0">Mathematics</p></li>
											</ol>
										</li>

										<li class="m-3 text-justify"><p class="m-0"> <strong>For 2nd year TDC (3rd & 4th Sem) under CBCS, subject will be as per GU instruction. </strong> </p></li>
										
										<li class="m-3 text-justify"><p class="m-0"> <strong>For 3rd year (5th & 6th Sem) under non CBCS, subject will be as per GU syllabus already notified. </strong> </p></li>
									</ul>
								</div>
							</div>
							<!-- Vision & Mission -->
							<div class="section-head m-0">
								<h2 class="title">Fee Structure</h2>
								<div class="dlab-separator bg-orange"></div>
							</div>
							<!-- <div class="classes-details mb-5">
								<div class="dlab-post-text">
									<table class="table fee">
										<thead>
											<tr>
												<td>Year</td>
												<td>Fee</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1st (Honours)</td>
												<td>Rs. 4020</td>
											</tr>
											<tr>
												<td>1st (Regular)</td>
												<td>Rs. 3900</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> -->
							<div class="classes-details mb-5">
								<div class="dlab-post-text"><p class="m-0"><strong>* Free Admission for all student : As per Govt. rule <img src="images/new-1.gif" alt="" width="30" height="14"></strong></p>
								</div>
								<a href="{{route('web.admission')}}" class="btn btn-sm">Click here to fill form</a>
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