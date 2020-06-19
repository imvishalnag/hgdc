	@extends('web.templet.master')

	{{-- @include('web.include.seo') --}}

	@section('seo')
		<meta name="description" content="Hari-Gayatri Das College">
		<style>input[type="radio"], input[type="checkbox"]{opacity: 1;height:15px;margin-right: 7px;position: relative;}input, textarea, select, .bootstrap-select .btn {border-color: #999!important;color: #495057;font-weight: 500;}h6 {font-weight: 500;text-decoration: underline;}</style>		
	@endsection

	@section('content')
		<!-- Content -->
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1 class="text-white">Admission</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
								<li>Admission</li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<div class="content-block">
				<!-- blog grid -->
				<div class="section-full content-inner bg-gray mb-3">
					<div class="container">
						<!-- Grid 1 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 student-bx about">
								<!-- Vision & Mission -->
								<div class="section-head text-center">
									<h2 class="title">Online  Admission</h2>
									<p>Three Year Degree Course (Arts) Admission Form</p>
									<div class="dlab-separator bg-orange"></div>
								</div>
								@if (Session::has('message'))
								<div class="alert alert-success" >{{ Session::get('message') }}</div>
								@endif
								@if (Session::has('error'))
									<div class="alert alert-danger">{{ Session::get('error') }}</div>
								@endif
							
								<div class="add-form">
									{{ Form::open(['method' => 'post','route'=>'student.store', 'enctype'=>'multipart/form-data']) }}
										<input type="hidden" value="Contact" name="dzToDo">
										<div class="row">
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<h5> Applicant basic information </h5>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="form-group">
														<label for="name">1. Name in Full </label>
														<input name="name" type="text" value="{{old("name")}}" class="form-control">
														@if($errors->has('name'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('name') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="dob">2. Date of Birth </label>
														<input name="dob" type="date" value="{{old("dob")}}" class="form-control">
														@if($errors->has('dob'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('dob') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="phone">3. Phone Number </label>
														<input name="phone" type="text" value="{{$user->mobile}}" disabled class="form-control">
														<input name="mobile" type="hidden" value="{{$user->mobile}}" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="gender">4. Gender</label>
														<select name="gender">
															<option value="Male" {{old('sex') == 'Male'?'selected':''}}>Male</option>
															<option value="Female" {{old('sex') == 'Female'?'selected':''}}>Female</option>
														</select>
														@if($errors->has('gender'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('gender') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="f_name">5.a. Father's Name </label>
														<input name="f_name" value="{{old("f_name")}}" type="text" class="form-control">
														@if($errors->has('f_name'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('f_name') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="f_occoupation">5.b. Father's Occoupation </label>
														<input name="f_occupation" value="{{old("f_occupation")}}" type="text" class="form-control">
														@if($errors->has('f_occupation'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('f_occupation') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="m_name">6.a. Mother's Name </label>
														<input name="m_name" value="{{old("m_name")}}" type="text" class="form-control">
														@if($errors->has('m_name'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('m_name') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="m_occoupation">6.b. Mother's Occoupation </label>
														<input name="m_occupation" value="{{old("m_occupation")}}" type="text" class="form-control">
														@if($errors->has('m_occupation'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('m_occupation') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="nationality">7. Nationality </label>
														<input name="nationality" value="{{old("nationality")}}" type="text" class="form-control">
														@if($errors->has('nationality'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('nationality') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="religion">8. Religion </label>
														<input name="religion" value="{{old("religion")}}" type="text" class="form-control">
														@if($errors->has('religion'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('religion') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="material">9. Material Status</label>
														<select name="material">
															<option {{old('material') == 'Married'?'selected':''}}>Married</option>
															<option {{old('material') == 'Unmarried'?'selected':''}}>Unmarried</option>
														</select>
														@if($errors->has('material'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('material') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="caste">10. Caste</label>
														<select name="caste">
															<option {{old('caste') == 'SC'?'selected':''}}>SC</option>
															<option {{old('caste') == 'ST'?'selected':''}}>ST</option>
															<option {{old('caste') == 'OBC'?'selected':''}}>OBC</option>
															<option {{old('caste') == 'MOBC'?'selected':''}}>MOBC</option>
														</select>
														@if($errors->has('caste'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('caste') }}</strong>
															</span>
														@enderror
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5> Applicant address information </h5>
												</div>
												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="p_address">11.a. Permanent Address </label>
														<textarea name="p_address" style="height:120px" class="form-control" placeholder="Your message here">{{old("p_address")}}</textarea>
														@if($errors->has('p_address'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('p_address') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="village">11.b. Village/Town</label>
														<input name="village" value="{{old("village")}}" type="text" class="form-control">
														@if($errors->has('village'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('village') }}</strong>
															</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="po">11.c. P.O.</label>
														<input name="po" value="{{old("po")}}" type="text" class="form-control">
														@if($errors->has('po'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('po') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="dist">11.d. District</label>
														<input name="dist" value="{{old("dist")}}" type="text" class="form-control">
														@if($errors->has('dist'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('dist') }}</strong>
															</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="pin">11.e. Pincode.</label>
														<input name="pin" value="{{old("pin")}}" type="text" class="form-control">
														@if($errors->has('pin'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('pin') }}</strong>
															</span>
														@enderror
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5>If you have a legal guardian </h5>
													<div class="form-group">
														<span class="CKRD"><input name="l_guardian" type="radio" value="l-gurdian-yes">Yes</span>
														<span class="CKRD"><input name="l_guardian" type="radio" checked value="l-gurdian-no">No</span>
													</div>
												</div>
												<div class="form-row col-md-12" id="l-gurdian-div" style="display:none">
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name">12.a. Legal Guardian's Name </label>
															<input name="g_name" value="{{old("g_name")}}" type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name">12.b. Legal Guardian's Relationship </label>
															<input name="g_relation" value="{{old("g_relation")}}" type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name">12.b. Legal Guardian's Pincode</label>
															<input name="l_pincode" value="{{old("l_pincode")}}" type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5> Applicant Education Data</h5>
													<h6 class="mb-0">H.S.L.C</h6>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group mb-2">
														<label for="hslc-div">13.a. Name of Board/University </label>
														<input name="hslc_board" value="{{old("hslc_board")}}"type="text" class="form-control">
														@if($errors->has('hslc_board'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_board') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.b. Year of Passing </label>
														<input name="hslc_yr" value="{{old("hslc_yr")}}"type="text" class="form-control">
														@if($errors->has('hslc_yr'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_yr') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.c. Exam Roll No.</label>
														<input name="hslc_roll" value="{{old("hslc_roll")}}"type="text" class="form-control">
														@if($errors->has('hslc_roll'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_roll') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.d. Division </label>
														<input name="hslc_div" value="{{old("hslc_div")}}"type="text" class="form-control">
														@if($errors->has('hslc_div'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_div') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group mb-2">
														<label for="hslc-div">13.e. Name of School/College</label>
														<input name="hslc_school" value="{{old("hslc_school")}}"type="text" class="form-control">
														@if($errors->has('hslc_school'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_school') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<h6 class="mb-0">H.S.</h6>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="hs-div">14.a. Name of Board/University </label>
														<input name="hs_board" value="{{old("hs_board")}}"type="text" class="form-control">
														@if($errors->has('hs_board'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_board') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.b. Year of Passing </label>
														<input name="hs_year" value="{{old("hs_year")}}" type="text" class="form-control">
														@if($errors->has('hs_year'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_year') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.c. Exam Roll No.</label>
														<input name="hs_roll" value="{{old("hs_roll")}}" type="text" class="form-control">
														@if($errors->has('hs_roll'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_roll') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.d. Division </label>
														<input name="hs_div" value="{{old("hs_div")}}" type="text" class="form-control">
														@if($errors->has('hs_div'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_div') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="hs_school">14.e. Name of School/College</label>
														<input name="hs_school" value="{{old("hs_school")}}" type="text" class="form-control">
														@if($errors->has('hs_school'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_school') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<h6 class="mb-0">H.S. Detail</h6>
												</div>
												<div class="form-row col-md-12 subjects">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.a. Subject1 Name</label>
															<input name="subject_name[]" type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6--mark">20.b. Full Mark </label>
															<input name="full_marks[]" type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.c. Mark Scrored</label>
															<input name="marks_scored[]" type="text" class="form-control">
														</div>
													</div>
													<button type="button" class="btn btn-primary btn-sm" id="add"> 
														<i class="fa fa-plus"></i>
													</button>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="t_mark">21. Total Marks Obtain</label>
															<input name="t_mark" type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5> Subject selection </h5>
													<h6>In which course your are seeking admission for</h6>
													<div class="form-group">
														<span class="CKRD"><input name="course-type" type="radio" value="h_course">Honours Course &nbsp;</span>
														<span class="CKRD"><input name="course-type" type="radio" value="r_course">Regular Course &nbsp;</span>
														@if($errors->has('course-type'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('course-type') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="form-row col-md-12" id="h-course" style="display:none">
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="name">22.a. Honours Subject <br><br></label>
															<select name="honors">
																<option {{old('honors') == 'Assamese'?'selected':''}}>Assamese</option>
																<option {{old('honors') == 'Political Science'?'selected':''}}>Political Science</option>
																<option {{old('honors') == 'Pholisophy'?'selected':''}}>Pholisophy</option>
																<option {{old('honors') == 'Education'?'selected':''}}>Education</option>
															</select>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="name">22.b. Honours Generic Subject (other than honours subject)</label>
															<select name="honors_other">
																<option {{old('honors_other') == 'Education'?'selected':''}}>Education</option>
																<option {{old('honors_other') == 'Econonics/Elective Assamese (ASL)'?'selected':''}}>Econonics/Elective Assamese (ASL)</option>
																<option {{old('honors_other') == 'Pholisophy'?'selected':''}}>Pholisophy</option>
																<option {{old('honors_other') == 'Political Science'?'selected':''}}>Political Science</option>
																<option {{old('honors_other') == 'Computer Science'?'selected':''}}>Computer Science</option>
																<option {{old('honors_other') == 'Mathematics'?'selected':''}}>Mathematics</option>
															</select>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.c. Compulsory Subject</label>													
															<div class="form-group mb-1">
																<span class="CKRD"><input name="environment" type="checkbox" value="Enviromental Studies" checked disabled>Enviromental Studies &nbsp;</span>
																<input type="hidden" name="env" value="Enviromental Studies">
																<span class="CKRD"><input class="h-comp-sub-s" name="engl_comm" type="checkbox" value="English Communication">English Communication  or, &nbsp;</span>
																<span class="CKRD"><input class="h-comp-sub-s" name="mil" type="checkbox">MIL (Assamese/Hindi) Communication &nbsp;</span>
															</div>																	
															<div class="form-group">									
																<label for="name">22.c.1. MIL</label>	<br>	
																<span class="CKRD"><input class="h-comp-sub-s" name="assamese" type="checkbox" value="Assamese">Assamese  or, &nbsp;</span>
																<span class="CKRD"><input class="h-comp-sub-s" name="hindi" type="checkbox" value="Hindi">Hindi &nbsp;</span>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row col-md-12" id="r-course" style="display:none">
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.a. Elective Subject <b style="color:red; font-weight:500;">(Any Two)</b></label>											
															<div class="form-group">
																<span class="CKRD"><input class="r-ele-sub" name="educ" value="Education" type="checkbox">Education &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="econ" type="checkbox" value="Econonics/Elective Assamese (ASL)">Econonics/Elective Assamese (ASL) &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="phil" type="checkbox" value="Pholisophy">Pholisophy &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="pol" type="checkbox" value="Political Science">Political Science &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="cs" type="checkbox" value="Computer Science">Computer Science &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="maths" type="checkbox" value="Mathematics">Mathematics &nbsp;</span>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.b. Compulsory Subject</label>											
															<div class="form-group">
																<span class="CKRD"><input name="comp-sub" type="checkbox" checked disabled>English &nbsp;</span>
																<input type="hidden" name="engl" value="English">
																<span class="CKRD"><input name="comp-sub" type="checkbox" checked disabled>Enviromental Studies &nbsp;</span>
																<input type="hidden" name="env" value="Environmental Studies">
																<span class="CKRD"><input class="r-comp-sub-s" name="comp-sub" type="checkbox">English Communication &nbsp;</span>
																<span class="CKRD"><input class="r-comp-sub-s" name="comp-sub" type="checkbox">MIL (Assamese/Hindi) Communication &nbsp;</span>
															</div>																	
															<div class="form-group" id="mil">								
																<label for="name">22.c.1. MIL</label> <br>		
																<span class="CKRD"><input class="h-comp-sub-s" name="h-comp-sub" type="checkbox">Assamese  or, &nbsp;</span>
																<span class="CKRD"><input class="h-comp-sub-s" name="h-comp-sub" type="checkbox">Hindi &nbsp;</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5>Upload required documents</h5>
												</div>
												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">23. Signature of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
														<input name="sign" type="file" class="form-control">
														@if($errors->has('sign'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('sign') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">23. Photo of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
														<input name="photo" type="file" class="form-control">
														@if($errors->has('photo'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('photo') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<input name="delecration" type="checkbox" >I hereby declare that i shall abide by the rules and regulations of the College and also all the above information provided by me are true and in best of my knowledge
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12 mt-3 mb-2">
													<button name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg">Submit Form<span></span></button>
												</div>
											</div>
										</div>
									</form>
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
		<script>
			$(document).ready(function(){
				// for Course Selection
				$("input[name='course-type']").click(function () {
					$('#h-course').css('display', ($(this).val() === 'h_course') ? 'inline-flex':'none');
					$('#r-course').css('display', ($(this).val() === 'r_course') ? 'inline-flex':'none');
				});
				
				// For Legal Gurdian
				$("input[name='l_guardian']").click(function () {
					$('#l-gurdian-div').css('display', ($(this).val() === 'l-gurdian-yes') ? 'inline-flex':'none');
				});
				
				// For Honours Course Compulsary Subject selection
				$(".h-comp-sub-s").change(function(){                                     		
					$(".h-comp-sub-s").prop('checked',false);    
					$(this).prop('checked',true);
				});
				
				$("input.r-ele-sub:checkbox").click(function() {
					var bol = $("input.r-ele-sub:checkbox:checked").length >= 2;     
					$("input.r-ele-sub:checkbox").not(":checked").attr("disabled",bol);
				});
	
	
				// For Regular Course Compulsary Subject selection
				$(".r-comp-sub-s").change(function(){                                     		
					$(".r-comp-sub-s").prop('checked',false);    
					$(this).prop('checked',true);
				});

				$("input[name='comp-sub']").click(function () {
					alert($(this).val())
					$('#mil').css('display', ($(this).val() === 'l-gurdian-yes') ? 'inline-flex':'none');
				});

				// Subject Adding Added By Saddam
				var max_fields      = 10; //maximum input boxes allowed
				var wrapper   		= $(".subjects"); //Fields wrapper
				var add_button      = $("#add"); //Add button ID
				
				var x = 1; //initlal text box count
				$(add_button).click(function(e){ 
					e.preventDefault();
					if(x < max_fields){ //max input box allowed
						x++; //text box increment
						$(wrapper).append(`<div class="form-row col-md-12 subjects">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.a. Subject${x} Name</label>
															<input name="subject_name[]" type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6--mark">20.b. Full Mark </label>
															<input name="full_marks[]" type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.c. Mark Scrored</label>
															<input name="marks_scored[]" type="text" class="form-control">
														</div>
													</div>
													<button class="remove_field btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
												</div>`); //add input box
					}
				});
				
				$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); x--;
				})

				// var i = 1;
				
			});
		</script>
	@endsection