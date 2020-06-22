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
								@if (Session::has('message'))
								<div class="alert alert-success" >{{ Session::get('message') }}</div>
								@endif
								@if (Session::has('error'))
									<div class="alert alert-danger">{{ Session::get('error') }}</div>
								@endif
								<h2 class="error-head">LOGIN</h2>
								{{ Form::open(['method' => 'post','route'=>'web.otp']) }}
									@if($errors->has('mobile'))
										<span class="invalid-feedback text-left" role="alert" style="color:red">
											<strong>{{ $errors->first('mobile') }}</strong>
										</span>
									@endif
									<div class="input-group mb-3">
										<input type="text" class="form-control radius-no bg-black" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter Phone Number..." >
										<button id="send_otp" class="btn radius-no white">Send OTP</button>
									</div>
									<img id="loading-image" src="{{asset('admin/production/images/ajax-loader.gif')}}" style="display:none;"/>
										<div id="otp"></div>
									@if($errors->has('password'))
										<span class="invalid-feedback text-left" role="alert" style="color:red">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
									<div class="input-group mb-3">
										<input type="text" name="password" class="form-control radius-no bg-black" placeholder="Enter OTP..." >
									</div>
									
									<button type="submit" class="btn radius-xl btn-lg mt-3">Login</button>
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
		<script>
			$(document).ready(function(){
				function sendOtp(query){
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
                    url: "{{route('web.send_otp')}}",
                    method: "GET",
                    data: {query:query},
                    beforeSend: function() {
                        $("#loading-image").show();
                    },
                    success: function(data){
                       if(data){
							$("#otp").html(data);
							$("#loading-image").hide();
					   }else if(data == 1){
							$("#otp").html("<h4 class='text-danger'>Something went wrong!</h4>");
							$("#loading-image").hide();
					   }
                    }
                });
				}
				$(document).on('click', '#send_otp', function (e) {
					e.preventDefault();
					var query = $("#mobile").val();
					if(query){
                    	sendOtp(query);
                	}
				});
			});
		</script>
	@endsection