    @extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
		<meta name="description" content="Hari-Gayatri Das College">
		<style>#svgContainer{max-width:100%;max-height:100%;background-image:linear-gradient(70deg,#f0f0f0 10%,#fff 100%);position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;text-align:center}#svgContainer svg{width:20%!important}.btn-md {padding: 10px 25px;}</style>
    @endsection

    @section('content')
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner END -->
        <div class="content-block">
			<div class="section-full content-inner-2">
				<div class="container">
					<div class="error-page text-center">
						<div><img src="{{asset('web/images/checked.gif')}}" alt=""></div>
						<h2 class="error-head">Successful</h2>
						<p>Your Form Has been Submitted. Please Contact us for futher process</p>
						<a href="{{route('web.index')}}" class="btn radius-xl btn-md bg-secondary">Return to Home</a>
						<a href="index-2.html" class="btn radius-xl btn-md"><i class="fa fa-download" aria-hidden="true"></i> Download Form</a>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Content END-->

	@endsection
	
	@section('script') 
	<script>		
		/* Shapes */
		var svgContainer = document.getElementById('svgContainer');
			var animItem = bodymovin.loadAnimation({
			wrapper: svgContainer,
			animType: 'svg',
			loop: false,
			path: 'https://dev.anthonyfessy.com/check.json'
		});
	</script>
	@endsection