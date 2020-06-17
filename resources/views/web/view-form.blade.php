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
								<div class="add-form">
									<form method="post" class="dzForm col-md-12" action="#">
										<input type="hidden" value="Contact" name="dzToDo">
										<div class="row">
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<h5> Applicant basic information </h5>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="form-group">
														<label for="name">1. Name in Full </label>
														<input name="name" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="dob">2. Date of Birth </label>
														<input name="dob" type="date" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="phone">3. Phone Number </label>
														<input name="phone" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="gender">4. Gender</label>
														<select name="gender">
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="f-name">5.a. Father's Name </label>
														<input name="f-name" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="f-occoupation">5.b. Father's Occoupation </label>
														<input name="f-occoupation" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="m-name">6.a. Mother's Name </label>
														<input name="m-name" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="m-occoupation">6.b. Mother's Occoupation </label>
														<input name="m-occoupation" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="nationality">7. Nationality </label>
														<input name="nationality" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="religion">8. Religion </label>
														<input name="religion" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="material">9. Material Status</label>
														<select name="material">
															<option value="Married">Married</option>
															<option value="Unmarried">Unmarried</option>
														</select>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="caste">10. Caste</label>
														<select name="caste">
															<option value="SC">SC</option>
															<option value="ST">ST</option>
															<option value="OBC">OBC</option>
															<option value="MOBC">MOBC</option>
														</select>
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
														<label for="name">11.a. Permanent Address </label>
														<textarea name="dzMessage" style="height:120px" class="form-control" required="" placeholder="Your message here"></textarea>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="name">11.b. Village/Town</label>
														<input name="m-name" type="text" required="" class="form-control">
													</div>
													<div class="form-group">
														<label for="name">11.c. P.O.</label>
														<input name="m-name" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="name">11.d. District</label>
														<input name="m-name" type="text" required="" class="form-control">
													</div>
													<div class="form-group">
														<label for="name">11.e. Pincode.</label>
														<input name="m-name" type="text" required="" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5>If you have a legal guardian </h5>
													<div class="form-group">
														<span class="CKRD"><input name="l-guardian" type="radio" value="l-gurdian-yes">Yes</span>
														<span class="CKRD"><input name="l-guardian" type="radio" checked value="l-gurdian-no">No</span>
													</div>
												</div>
												<div class="form-row col-md-12" id="l-gurdian-div" style="display:none">
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name">12.a. Legal Guardian's Name </label>
															<input name="l-name" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name">12.b. Legal Guardian's Relationship </label>
															<input name="l-relation" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name">12.b. Legal Guardian's Pincode</label>
															<input name="l-pincode" type="text" required="" class="form-control">
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
														<label for="hslc-div">13.a. Nane of Board/University </label>
														<input name="hslc-board" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.b. Year of Passing </label>
														<input name="hslc-yr" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.c. Exam Roll No.</label>
														<input name="hslc-roll" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group mb-2">
														<label for="hslc-div">13.d. Division </label>
														<input name="hslc-div" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group mb-2">
														<label for="hslc-div">13.e. Name of School/College</label>
														<input name="hslc-school" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<h6 class="mb-0">H.S.</h6>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="hs-div">14.a. Nane of Board/University </label>
														<input name="hs-div" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.b. Year of Passing </label>
														<input name="hs-div" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.c. Exam Roll No.</label>
														<input name="hs-div" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-2 col-sm-2">
													<div class="form-group">
														<label for="hs-div">14.d. Division </label>
														<input name="hs-div" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group">
														<label for="hs-div">14.e. Name of School/College</label>
														<input name="hs-div" type="text" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<h6 class="mb-0">H.S. Detail</h6>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub1-name">15.a. Subject1 Name</label>
															<input name="hs-sub1-name" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub1-fmark">15.b. Full Mark </label>
															<input name="hs-sub1-fmark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub1-mark">15.c. Mark Scrored</label>
															<input name="hs-sub1-mark" type="text" required="" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub2-name">16.a. Subject2 Name</label>
															<input name="hs-sub2-name" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub2-fmark">16.b. Full Mark </label>
															<input name="hs-sub2-fmark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub2--mark">16.c. Mark Scrored</label>
															<input name="hs-sub2-mark" type="text" required="" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub3-name">17.a. Subject3 Name</label>
															<input name="hs-sub2-name" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub3-fmark">17.b. Full Mark </label>
															<input name="hs-sub2-fmark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub3-mark">17.c. Mark Scrored</label>
															<input name="hs-sub2-mark" type="text" required="" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub4-name">18.a. Subject4 Name</label>
															<input name="hs-sub4-name" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub4-fmark">18.b. Full Mark </label>
															<input name="hs-sub4-fmark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub4--mark">18.c. Mark Scrored</label>
															<input name="hs-sub4-mark" type="text" required="" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub5-mark">19.a. Subject5 Name</label>
															<input name="hs-sub5-mark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub5--mark">19.b. Full Mark </label>
															<input name="hs-sub5--mark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub5-mark">19.c. Mark Scrored</label>
															<input name="hs-sub5-mark" type="text" required="" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.a. Subject6 Name</label>
															<input name="hs-sub6-mark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6--mark">20.b. Full Mark </label>
															<input name="hs-sub6--mark" type="text" required="" class="form-control">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
														<div class="form-group mb-2">
															<label for="hs-sub6-mark">20.c. Mark Scrored</label>
															<input name="hs-sub6-mark" type="text" required="" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-row col-md-12">
													<div class="col-md-4 col-sm-4">
														<div class="form-group mb-2">
															<label for="t-mark">21. Total Marks Obtain</label>
															<input name="t-mark" type="text" required="" class="form-control">
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
														<span class="CKRD"><input name="course-type" type="radio" value="h-course">Honours Course &nbsp;</span>
														<span class="CKRD"><input name="course-type" type="radio" value="r-course">Regular Course &nbsp;</span>
													</div>
												</div>
												<div class="form-row col-md-12" id="h-course" style="display:none">
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="name">22.a. Honours Subject <br><br></label>
															<select>
																<option value="Assamese">Assamese</option>
																<option value="Political Science">Political Science</option>
																<option value="Pholisophy">Pholisophy</option>
																<option value="Education">Education</option>
															</select>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="name">22.b. Honours Generic Subject (other than honours subject)</label>
															<select>
																<option value="Education">Education</option>
																<option value="ASL">Econonics/Elective Assamese (ASL)</option>
																<option value="Pholisophy">Pholisophy</option>
																<option value="Political Science">Political Science</option>
																<option value="Political Science">Computer Science</option>
																<option value="Education">Mathematics</option>
															</select>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.c. Compulsory Subject</label>													
															<div class="form-group">
																<span class="CKRD"><input name="h-comp-sub" type="checkbox" checked disabled>Enviromental Studies &nbsp;</span>
																<span class="CKRD"><input class="h-comp-sub-s" name="h-comp-sub" type="checkbox">English Communication  or, &nbsp;</span>
																<span class="CKRD"><input class="h-comp-sub-s" name="h-comp-sub" type="checkbox">MIL (Assamese/Hindi) Communication &nbsp;</span>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row col-md-12" id="r-course" style="display:none">
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.a. Elective Subject <b style="color:red; font-weight:500;">(Any Two)</b></label>											
															<div class="form-group">
																<span class="CKRD"><input class="r-ele-sub" name="r-ele-sub" type="checkbox">Education &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="r-ele-sub" type="checkbox">Econonics/Elective Assamese (ASL) &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="r-ele-sub" type="checkbox">Pholisophy &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="r-ele-sub" type="checkbox">Political Science &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="r-ele-sub" type="checkbox">Computer Science &nbsp;</span>
																<span class="CKRD"><input class="r-ele-sub" name="r-ele-sub" type="checkbox">Mathematics &nbsp;</span>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label for="name">22.b. Compulsory Subject</label>											
															<div class="form-group">
																<span class="CKRD"><input name="comp-sub" type="checkbox" checked disabled>English &nbsp;</span>
																<span class="CKRD"><input name="comp-sub" type="checkbox" checked disabled>Enviromental Studies &nbsp;</span>
																<span class="CKRD"><input class="r-comp-sub-s" name="comp-sub" type="checkbox">English Communication &nbsp;</span>
																<span class="CKRD"><input class="r-comp-sub-s" name="comp-sub" type="checkbox">MIL (Assamese/Hindi) Communication &nbsp;</span>
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
														<input name="Sign" type="file" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-6 col-sm-6">
													<div class="form-group">
														<label for="name">23. Photo of applicant<b style="color:red; font-weight:500;">(less than 1MB)</b> </label>
														<input name="photo" type="file" required="" class="form-control">
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<input name="delecration" type="checkbox" required >I hereby declare that i shall abide by the rules and regulations of the College and also all the above information provided by me are true and in best of my knowledge
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
			// for Course Selection
			$("input[name='course-type']").click(function () {
				$('#h-course').css('display', ($(this).val() === 'h-course') ? 'inline-flex':'none');
				$('#r-course').css('display', ($(this).val() === 'r-course') ? 'inline-flex':'none');
			});
			
			// For Legal Gurdian
			$("input[name='l-guardian']").click(function () {
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
		</script>
	@endsection