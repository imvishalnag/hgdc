    @extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Hari-Gayatri Das College">
    @endsection

    @section('content')
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner END -->
        <div class="content-block">
			<div class="section-full content-inner-2">
				<div class="container">
					<div class="error-page text-center">
						<div class="m-b30">
							<div class="subscribe-form p-a0">
								<h2 class="error-head">LOGIN</h2>
								<form>
									<div class="input-group mb-3">
										<input name="text" class="form-control radius-no bg-black" placeholder="Enter Phone Number..." type="text">
										<button type="submit" class="btn radius-no white">Send OTP</button>
									</div>
									<h4>Your OTP is : 24515</h4>
									<div class="input-group mb-3">
										<input name="text" class="form-control radius-no bg-black" placeholder="Enter OTP..." type="text">
									</div>
									
									<button href="index-2.html" class="btn radius-xl btn-lg mt-3">Login</button>
								</form>
							</div>
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