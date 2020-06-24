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
														<label for="name">1. Name in Full <span style="color:red"><b> * </b></span> </label>
														<input name="name" type="text" value="{{old("name")}}" class="form-control" required>
														@if($errors->has('name'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('name') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="dob">2. Date of Birth <span style="color:red"><b> * </b></span></label>
														<input name="dob" type="date" value="{{old("dob")}}" class="form-control" required>
														@if($errors->has('dob'))
															<span class="invalid-feedback" role="alert" style="color:red" >
																<strong>{{ $errors->first('dob') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="phone">3. Phone Number <span style="color:red"><b> * </b></span></label>
														<input name="phone" type="text" value="{{$user->mobile}}" disabled class="form-control">
														<input name="mobile" type="hidden" value="{{$user->mobile}}" class="form-control" required>
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="gender">4. Gender <span style="color:red"><b> * </b></span></label>
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
														<label for="f_name">5.a. Father's Name <span style="color:red"><b> * </b></span></label>
														<input name="f_name" value="{{old("f_name")}}" type="text" class="form-control" required>
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
														<label for="m_name">6.a. Mother's Name <span style="color:red"><b> * </b></span></label>
														<input name="m_name" value="{{old("m_name")}}" type="text" class="form-control" required>
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
														<label for="nationality">7. Nationality <span style="color:red"><b> * </b></span></label>
														<input name="nationality" value="{{old("nationality")}}" type="text" class="form-control" required>
														@if($errors->has('nationality'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('nationality') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="religion">8. Religion <span style="color:red"><b> * </b></span></label>
														<input name="religion" value="{{old("religion")}}" type="text" class="form-control" required>
														@if($errors->has('religion'))
															<span class="invalid-feedback" role="alert" style="color:red" >
																<strong>{{ $errors->first('religion') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="material">9. Marital Status <span style="color:red"><b> * </b></span></label>
														<select name="material" required>
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
														<label for="caste">10. Caste <span style="color:red"><b> * </b></span></label>
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
														<label for="p_address">11.a. Permanent Address <span style="color:red"><b> * </b></span></label>
														<textarea name="p_address" style="height:120px" class="form-control" placeholder="Your message here" required>{{old("p_address")}}</textarea>
														@if($errors->has('p_address'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('p_address') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="village">11.b. Village/Town <span style="color:red"><b> * </b></span></label>
														<input name="village" value="{{old("village")}}" type="text" class="form-control" required>
														@if($errors->has('village'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('village') }}</strong>
															</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="po">11.c. P.O. <span style="color:red"><b> * </b></span></label>
														<input name="po" value="{{old("po")}}" type="text" class="form-control" required>
														@if($errors->has('po'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('po') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="dist">11.d. District <span style="color:red"><b> * </b></span></label>
														<input name="dist" value="{{old("dist")}}" type="text" class="form-control" required>
														@if($errors->has('dist'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('dist') }}</strong>
															</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="pin">11.e. Pincode. <span style="color:red"><b> * </b></span></label>
														<input name="pin" value="{{old("pin")}}" type="number" class="form-control" required>
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
														<span class="CKRD"><input name="l_guardian" type="radio" value="yes">Yes</span>
														<span class="CKRD"><input name="l_guardian" type="radio" checked value="no">No</span>
													</div>
												</div>
												<div class="form-row col-md-12" id="l_guardian_div" style="display:none">
													
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
														<label for="hslc-div">13.a. Name of Board/University <span style="color:red"><b> * </b></span></label>
														<input name="hslc_board" value="{{old("hslc_board")}}"type="text" class="form-control" required>
														@if($errors->has('hslc_board'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_board') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.b. Year of Passing <span style="color:red"><b> * </b></span></label>
														<input name="hslc_yr" value="{{old("hslc_yr")}}"type="number" class="form-control" required>
														@if($errors->has('hslc_yr'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_yr') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.c. Exam Roll No. <span style="color:red"><b> * </b></span></label>
														<input name="hslc_roll" value="{{old("hslc_roll")}}"type="text" class="form-control" required>
														@if($errors->has('hslc_roll'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_roll') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.d. Division <span style="color:red"><b> * </b></span></label>
														<input name="hslc_div" value="{{old("hslc_div")}}"type="text" class="form-control" required>
														@if($errors->has('hslc_div'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hslc_div') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group mb-2">
														<label for="hslc-div">13.e. Name of School/College <span style="color:red"><b> * </b></span></label>
														<input name="hslc_school" value="{{old("hslc_school")}}"type="text" class="form-control" required>
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
														<label for="hs-div">14.a. Name of Board/University <span style="color:red"><b> * </b></span></label>
														<input name="hs_board" value="{{old("hs_board")}}"type="text" class="form-control" required>
														@if($errors->has('hs_board'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_board') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.b. Year of Passing <span style="color:red"><b> * </b></span></label>
														<input name="hs_year" value="{{old("hs_year")}}" type="text" class="form-control" required>
														@if($errors->has('hs_year'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_year') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.c. Exam Roll No. <span style="color:red"><b> * </b></span></label>
														<input name="hs_roll" value="{{old("hs_roll")}}" type="text" class="form-control" required>
														@if($errors->has('hs_roll'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_roll') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.d. Division <span style="color:red"><b> * </b></span></label>
														<input name="hs_div" value="{{old("hs_div")}}" type="text" class="form-control" required>
														@if($errors->has('hs_div'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_div') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="hs_school">14.e. Name of School/College <span style="color:red"><b> * </b></span></label>
														<input name="hs_school" value="{{old("hs_school")}}" type="text" class="form-control" required>
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
															<label for="hs-sub6-mark">20.a. Subject1 Name <span style="color:red"><b> * </b></span></label>
															<input name="subject_name[]" type="text" class="form-control" required>
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6--mark">20.b. Full Mark <span style="color:red"><b> * </b></span></label>
															<input name="full_marks[]" type="text" class="form-control" required>
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.c. Mark Scored <span style="color:red"><b> * </b></span></label>
															<input name="marks_scored[]" type="text" class="form-control" required>
														</div>
													</div>
													<button type="button" class="btn btn-primary btn-sm" id="add"> 
														<i class="fa fa-plus"></i>
													</button>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="t_mark">21. Total Marks Obtain <span style="color:red"><b> * </b></span></label>
															<input name="t_mark" type="text" class="form-control" required>
														</div>
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5> Subject selection </h5>
													<h6>In which course your are seeking admission for <span style="color:red"><b> * </b></span></h6>
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
															<label for="name">22.c. Compulsory Subject <span style="color:red"><b> * </b></span></label>													
															<div class="form-group mb-1">
																<span class="CKRD">
																	<input type="checkbox" name="compulsory[]" checked disabled>Enviromental Studies &nbsp;
																</span>
																<input type="hidden" name="compulsory[]" value="Enviromental Studies">
																<span class="CKRD">
																	<input class="h-comp-sub-s" name="compulsory[]" type="checkbox" value="English Communication" onclick="getCHonorsLang('English Communication')">English Communication  or, &nbsp;
																</span>
																<span class="CKRD">
																	<input class="h-comp-sub-s" type="checkbox" name="compulsory[]" value="MIL" onclick="getCHonorsLang('MIL')">MIL &nbsp;
																</span>
																
																<span class="CKRD" style="display: none" id="mil_div_honors">
																		
																</span>
															</div>																	
														</div>
													</div>
												</div>
												<div class="form-row col-md-12" id="r-course" style="display:none">
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.a. Elective Subject <b style="color:red; font-weight:500;">(Any Two)</b> <span style="color:red"><b> * </b></span></label>											
															<div class="form-group">
																<span class="CKRD"><input class="r-ele-sub" name="elective[]" value="Education" type="checkbox">Education &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Econonics/Elective Assamese (ASL)">Econonics/Elective Assamese (ASL) &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Pholisophy">Pholisophy &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Political Science">Political Science &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Computer Science">Computer Science &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="elective[]" type="checkbox" value="Mathematics">Mathematics &nbsp;</span>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.b. Compulsory Subject <span style="color:red"><b> * </b></span></label>											
															<div class="form-group">
																<span class="CKRD">
																	<input name="compulsory1[]" type="checkbox" checked disabled>English &nbsp;</span>
																	<input type="hidden" name="compulsory1[]" value="English">
																	<span class="CKRD"><input name="compulsory1[]" type="checkbox" checked disabled>Enviromental Studies &nbsp;</span>

																	<input type="hidden" name="compulsory1[]" value="Environmental Studies">
																	<span class="CKRD">
																		<input class="r-comp-sub-s" name="compulsory1[]" type="checkbox" value="English Communication" onclick="getCheckedGroupBoxes('English Communication')">English Communication &nbsp;
																	</span>

																	<span class="CKRD">
																		<input class="r-comp-sub-s" name="compulsory1[]" type="checkbox" value="MIL" onclick="getCheckedGroupBoxes('MIL')">MIL &nbsp;
																	</span>
																	<span class="CKRD" style="display: none" id="mil_div">
																		
																	</span>

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
														<label for="name"> H.S. Marksheet<b style="color:red; font-weight:500;">(less than 1MB)</b> <span style="color:red"><b> * </b></span></label>
														<input name="hs_marksheet" type="file" class="form-control" required>
														@if($errors->has('hs_marksheet'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_marksheet') }}</strong>
															</span>
														@enderror
													</div>
												</div>

												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">H.S. Certificate<b style="color:red; font-weight:500;">(less than 1MB)</b> <span style="color:red"><b> * </b></span></label>
														<input name="hs_certificate" type="file" class="form-control" required>
														@if($errors->has('hs_certificate'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('hs_certificate') }}</strong>
															</span>
														@enderror
													</div>
												</div>

												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">Caste Certificate (if Applicable)<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
														<input name="caste_certificate" type="file" class="form-control">
														@if($errors->has('caste_certificate'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('caste_certificate') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-6 col-sm-6"></div>

												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">23. Signature of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> <span style="color:red"><b> * </b></span></label>
														<input name="sign" type="file" class="form-control" required>
														@if($errors->has('sign'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('sign') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">23. Photo of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> <span style="color:red"><b> * </b></span></label>
														<input name="photo" type="file" class="form-control" required>
														@if($errors->has('photo'))
															<span class="invalid-feedback" role="alert" style="color:red">
																<strong>{{ $errors->first('photo') }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<input name="delecration" type="checkbox" required>I hereby declare that i shall abide by the rules and regulations of the College and also all the above information provided by me are true and in best of my knowledge
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
		@include('web.admsn_script.admsn_script');
	@endsection