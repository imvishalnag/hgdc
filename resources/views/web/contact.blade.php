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
                    <h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- inner page banner END -->
        <div class="content-block">
			<div class="section-full bg-gray">
                <div class="container">
					<div class="row align-items-center content-inner">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-orange">
										<i class="ti-headphone-alt"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Phone</h4>
									<p>Phone 01: +91 9854489934 <br/> Phone 02: +91 9957948365</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-orange">
										<i class="ti-location-pin"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Address</h4>
									<p>Hari-Gayatri Das College, Azara, Guwahati-17</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-orange">
										<i class="ti-email"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Email</h4>
									<p>hgdcollegeazara@gmail.com</p><br>
								</div>
							</div>
						</div>
					</div>
					<div class="row contact-box content-inner-5"> 
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="section-head text-center col-md-12">
								<h2 class="title">Google Map</h2>
								<div class="dlab-separator bg-orange"></div>
							</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d20265.971754510352!2d91.61210261094685!3d26.11355491879119!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1591857486545!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>						
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="section-head text-center col-md-12">
								<h2 class="title">Contact Me</h2>
								<div class="dlab-separator bg-orange"></div>
							</div>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm col-md-12" action="https://smartclass.dexignzone.com/xhtml/script/contact.php">
								<input type="hidden" value="Contact" name="dzToDo">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input name="dzName" type="text" required class="form-control" placeholder="Your name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input name="dzEmail" type="email" class="form-control" required  placeholder="Email Address" >
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your message here"></textarea>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 text-center mt-4">
										<button name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg">Send Message<span></span></button>
									</div>
								</div>
							</form>
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