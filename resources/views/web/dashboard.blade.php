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
						<h1 class="text-white">Dashboard</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
								<li>Dashboard</li>
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
							DASHBOARD
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