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
	<link rel="stylesheet" type="text/css" href="{{asset('web/css/templete.min.css')}}">
	@yield('seo')
	<style>
	@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap');
	</style>
	
</head>
<body id="bg">
<div class="page-wraper">
	<!-- header -->
    <header class="site-header header mo-left">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container-fluid clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index-2.html" class="dez-page"><img src="{{asset('web/images/logo/logo.png')}}" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header mostion">
							<a href="index-2.html" class="dez-page"><img src="{{asset('web/images/logo-black.png')}}" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li><a href="{{route('web.index')}}">Home </a></li>
							<li><a>About HGDC<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('web.about')}}">About HGDC</a></li>
									<li><a href="{{route('web.goal')}}">Goals and Objectives</a></li>
									<li><a href="{{route('web.rule')}}">Rules and Regulation</a></li>
									<li><a href="{{route('web.facilities')}}">Facilities</a></li>
								</ul>
							</li>
							<li><a>Curriculam <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('web.curricular')}}">Curriculam</a></li>
									<li><a href="{{route('web.xtcurricular')}}">Extra Curricular Activities</a></li>
								</ul>
							</li>
							<li><a href="{{route('web.teacher')}}">Faculty </a></li>
							<li><a href="{{route('web.result')}}">Results</a></li>
							<li><a href="{{route('web.gallery')}}">Gallery</a></li>
							<li><a href="{{route('web.contact')}}">Contact Us</a></li>
							<li>
								@if(Auth::user())
									<a href="{{ route('web.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
										Logout
									</a>     
									<form id="frm-logout" action="{{ route('web.logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								@else
									<a href="{{route('web.teacher')}}">Faculty </a>
								@endif
							</li>
							<li class="active spl" style="background: #fff;"><a href="{{Auth::user() ? route('web.admission') : route('web.login')}}">Online Admission</a></li>
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
	<!-- <div class="action-area marquee-head marquee">
		<ul>
			<li><a href="courses-details.html">RESULT OF SSC CGL 2020 (TIER-3)</a></li>
			<li><a href="courses-details.html">SSC CGL 2020 PRE Application Status</a></li>
			<li><a href="courses-details.html">SSC CHSL 2020 Result Declared</a></li>
			<li><a href="courses-details.html">RESULT OF SSC CGL 2020 (TIER-3)</a></li>
			<li><a href="courses-details.html">SSC CGL 2020 PRE Application Status</a></li>
			<li><a href="courses-details.html">SSC CHSL 2020 Result Declared</a></li>
			<li><a href="courses-details.html">RESULT OF SSC CGL 2020 (TIER-3)</a></li>
			<li><a href="courses-details.html">SSC CGL 2020 PRE Application Status</a></li>
			<li><a href="courses-details.html">SSC CHSL 2020 Result Declared</a></li>
		</ul>
	</div> -->