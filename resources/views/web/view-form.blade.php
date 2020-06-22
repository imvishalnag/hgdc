<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta property="og:title" content="Hari-Gayatri Das College">
	<meta property="og:image" content="{{asset('web/images/logo-black.png')}}">
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{asset('web/images/emblem.png')}}" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('web/images/emblem.png')}}">
	
	<!-- PAGE TITLE HERE -->
	<title>Hari-Gayatri Das College</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('web/css/plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('web/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('web/plugins/line-awesome/css/line-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('web/plugins/flaticon/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('web/plugins/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('web/css/style.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('web/css/skin/skin-1.min.css')}}">
	
	<meta name="description" content="Hari-Gayatri Das College">
	<style>input[type="radio"], input[type="checkbox"]{opacity: 1;height:15px;margin-right: 7px;position: relative;}input, textarea, select, .bootstrap-select .btn {border-color: #999!important;color: #495057;font-weight: 500;}h6 {font-weight: 500;text-decoration: underline;}p {margin-bottom: 0}h1{font-size: 47px;margin-bottom:0}.form-group {margin-bottom: 10px}label, th {font-weight: 700} .table td, .table th{padding: 1px 10px!important}</style>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap');
	</style>
	
</head>
<body id="bg">
	<div class="page-wraper">
		<!-- Content -->
		<div class="page-content">
			<!-- inner page banner -->
			<div class="content-block">
				<!-- blog grid -->
				<div class="section-full content-inner bg-gray pt-2  pb-2">
					<div class="container">
						<!-- Grid 1 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 student-bx about">
								<!-- Vision & Mission -->
								<div class="row">
									<div class="col-md-6 col-sm-6 mb-2">
										<p class="text-left"><strong>Submit Date :</strong> {{$user->updated_at}} </p>
									</div>
									<div class="col-md-6 col-sm-6 mb-2">
										<p class="text-right"><strong>Print Date :</strong> {{Carbon\Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()}} </p>
										<button class="btn btn-default pull-right" onclick="event.preventDefault();window.print()">Print</button>
									</div>
									<div class="col-md-1 col-sm-1"></div>
									<div class="col-md-2 col-sm-2">
										<img src="{{asset('web/images/emblem.png')}}">
									</div>
									<div class="col-md-8 col-sm-8 mt-4 mb-2">
										<h1 class="mb-1">হৰি-গায়ত্ৰী দাস মহাবিদ্যালয়</h1>
										<h1 class="mb-2">Hari-Gayatri DAS COLLEGE</h1>
										<p class="text-center">আজাৰা, গুৱাহাটী-১৭, কামৰূপ (অসম)</p>
										<p class="text-center">Azara, Guwahati-17, Kamrup (Aassam)</p>
										<p class="text-center">স্থাপিত - ইং ১৯৯৬ চন, Estd : 1996</p>
									</div>
								</div>
								<div class="add-form">
									<form method="post" class="dzForm col-md-12" action="#">
										<input type="hidden" value="Contact" name="dzToDo">
										<div class="row">
											<div class="form-row col-md-10">
												<div class="col-md-12 col-sm-12">
													<h4 class="text-center" style="text-decoration: underline"> Three Year Degree Course (Arts) Admission Form</h4>
													<h5> Applicant basic information </h5>
												</div>
												<div class="form-row col-md-10">
													<div class="col-md-5 col-sm-5">
														<div class="form-group">
															<label for="name"> Applicant Name </label>
															<p>{{$user->name}}</p>
														</div>
													</div>
													<div class="col-md-2 col-sm-2">
														<div class="form-group">
															<label for="dob"> Date of Birth </label>
															<p>{{$user->dob}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="phone"> Phone Number </label>
															<p>{{$user->mobile}}</p>
														</div>
													</div>
													<div class="col-md-2 col-sm-2">
														<div class="form-group">
															<label for="gender"> Gender</label>
															<p>{{$user->gender}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="f-name"> Father's Name </label>
															<p>{{$user->f_name}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="f-occoupation"> Father's Occoupation </label>
															<p>{{$user->f_occupation}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="m-name"> Mother's Name </label>	
															<p>{{$user->m_name}}</p>		
														</div>																										</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="m-occoupation"> Mother's Occoupation </label>
															<p>{{$user->m_occupation}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="nationality"> Nationality </label>
															<p>{{$user->nationality}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="religion"> Religion </label>
															<p>{{$user->religion}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="material"> Material Status</label>
															<p>{{$user->material}}</p>
														</div>
													</div>
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="caste"> Caste</label>
															<p>{{$user->caste}}</p>
														</div>
													</div>
												</div>
												<div class="form-row col-md-2">
													<div>
														<img src="{{asset('admin/student/'.$user->photo)}}" alt=""><br>
														<img class="pt-1" src="{{asset('admin/student/'.$user->sign)}}" alt="" >
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
														<label for="name"> Permanent Address </label>
														<p>{{$user->p_address}}</p>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="name"> Village/Town</label>
														<p>{{$user->village}}</p>
													</div>
													<div class="form-group">
														<label for="name">11.c. P.O.</label>
														<p>{{$user->po}}</p>
													</div>
												</div>
												<div class="col-md-3 col-sm-3">
													<div class="form-group m-0">
														<label for="name"> District</label>
														<p>{{$user->dist}}</p>
													</div>
													<div class="form-group">
														<label for="name"> Pincode.</label>
														<p>{{$user->pin}}</p>
													</div>
												</div>
											</div>
											<div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5>If you have a legal guardian </h5>
													<div class="form-group mb-0">
														<span class="CKRD"><input name="l-guardian" type="radio" checked value="l-gurdian-yes">Yes</span>
														<span class="CKRD"><input name="l-guardian" type="radio" value="l-gurdian-no">No</span>
													</div>
												</div>
												<div class="form-row col-md-12" style="display:">
													<div class="col-md-4 col-sm-4 mb-0">
														<div class="form-group">
															<label for="name">Legal Guardian's Name </label>
															<p>{{$user->g_name}}</p>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 mb-0">
														<div class="form-group">
															<label for="name"> Legal Guardian's Relationship </label>
															<p>{{$user->g_relation}}</p>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 mb-0">
														<div class="form-group">
															<label for="name"> Legal Guardian's Pincode</label>
															<p>{{$user->l_pincode}}</p>
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
												<div class="col-md-3 col-sm-3 mb-0">
													<div class="form-group mb-2">
														<label for="hslc-div"> Name of Board/University </label>
														<p>{{$user->hslc_board}}</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2 mb-0">
													<div class="form-group mb-2">
														<label for="hslc-div"> Year of Passing </label>
														<p>{{$user->hslc_yr}}</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2 mb-0">
													<div class="form-group mb-2">
														<label for="hslc-div"> Exam Roll No.</label>
														<p>{{$user->hslc_roll}}</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2 mb-0">
													<div class="form-group mb-2">
														<label for="hslc-div"> Division </label>
														<p>{{$user->hslc_div}}</p>
													</div>
												</div>
												<div class="col-md-3 col-sm-3 mb-0">
													<div class="form-group mb-2">
														<label for="hslc-div"> Name of School/College</label>
														<p>{{$user->hslc_school}}</p>
													</div>
												</div>
												<div class="col-md-12 col-sm-12 mb-0">
													<h6 class="mb-0">H.S.</h6>
												</div>
												<div class="col-md-3 col-sm-3 mb-0">
													<div class="form-group">
														<label for="hs-div"> Nane of Board/University </label>
														<p>{{$user->hs_board}}</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2 mb-0">
													<div class="form-group">
														<label for="hs-div"> Year of Passing </label>
														<p>{{$user->hs_year}}</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2 mb-0">
													<div class="form-group">
														<label for="hs-div"> Exam Roll No.</label>
														<p>{{$user->hs_roll}}</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2 mb-0">
													<div class="form-group">
														<label for="hs-div"> Division </label>
														<p>{{$user->hs_div}}</p>
													</div>
												</div>
												<div class="col-md-3 col-sm-3 mb-0">
													<div class="form-group">
														<label for="hs-div"> Name of School/College</label>
														<p>{{$user->hs_school}}</p>
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
                                                    <h6 class="mb-2">H.S. Detail</h6>
                                                    <table class="table table-bordered text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>Full Marks</th>
                                                                <th>Marks Scored</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
															@if(isset($user->subjects) && !empty($user->subjects))
																@foreach($user->subjects as $sub)
																	<tr>
																		<td>{{$sub->subject_name}}</td>
																		<td>{{$sub->full_marks}}</td>
																		<td>{{$sub->marks_scored}}</td>
																	</tr>
																@endforeach
															@endif
														</tbody>
														<tfoot>
															<tr>
																<th>Total</th>
																<td></td>
																<td colspan="2">{{$user->t_mark}}</td>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
											{{-- <div class="form-row col-md-12">
												<div class="col-md-12 col-sm-12">
													<hr>
													<h5> Subject selection </h5>
													<h6>In which course your are seeking admission for</h6>
													<div class="form-group">
														<p>Course</p>
													</div>
												</div>
												<div class="form-row col-md-12" id="h-course" style="">
													<div class="col-md-3 col-sm-3">
														<div class="form-group">
															<label for="name"> Honours Subject</label>
															<p>Education</p>
														</div>
													</div>
													<div class="col-md-5 col-sm-5">
														<div class="form-group">
															<label for="name"> Honours Generic Subject (other than honours subject)</label>
															<p>Economics</p>
														</div>
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<label for="name"> Compulsory Subject</label>
															<p>Enviromental Studies & Assamese</p>
														</div>
													</div>
												</div>
												<div class="form-row col-md-12" id="r-course" style="">
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<label for="name"> Elective Subject <b style="color:red; font-weight:500;">(Any Two)</b></label>	
															<p>Economics & Computer Science</p>
														</div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<label for="name"> Compulsory Subject</label>		
															<p>Enviromental Studies & Assamese</p>
														</div>
													</div>
												</div>
											</div> --}}
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
	</div>
	
</body>

</html>