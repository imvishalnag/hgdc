    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
             <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-3 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="footer-title">Contact Us</h4>
                            <div class="dlab-separator bg-primary"></div>
                            <ul class="info-contact">
								<li>
									<span>
										<i class="fa fa-map-marker"></i>Hari-Gayatri Das College, Azara, Guwahati-17
									</span>
								</li>

								<li>
									<span>
										<i class="fa fa-phone"></i> +91 9854489934 <br> +91 9957948365
									</span>
								</li>

								<li>
									<span>
										<i class="fa fa-envelope-o"></i> hgdcollegeazara@gmail.com
									</span>
								</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-2 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="footer-title">Useful Links</h4>
                            <div class="dlab-separator bg-primary"></div>
                            <ul>
                                <li><a href="{{route('web.index')}}">Home</a></li>
                                <li><a href="{{route('web.result')}}">Result</a></li>
                                <li><a href="{{route('web.gallery')}}">Gallery</a></li>
                                <li><a href="{{route('web.contact')}}">Contact Us</a></li>
                                <li><a href="{{Auth::user() ? route('web.admission') : route('web.login')}}">Online Admission</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-lg-7 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="footer-title">Google Map </h4>
                            <div class="dlab-separator bg-primary"></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14330.251002358287!2d91.6157406!3d26.1131883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc52c6a08f7c21c58!2sHari%20Gayatri%20Das%20Mahavidyalaya!5e0!3m2!1sen!2sin!4v1591874989117!5m2!1sen!2sin" height="230" frameborder="0" style="border:0;width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left">Copyright © 2020 Hari-Gayatri Das College. All right reserved </div>
                    <div class="col-md-6 col-sm-6 text-right "> 
						<ul class="fb-list">
							<li><a href="{{route('web.about')}}">About HGDC</a></li>
							<li><a href="{{route('web.facilities')}}">Facilities</a></li>
							<li><a href="{{route('web.teacher')}}">Teacher</a></li>
						</ul>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('web/js/combining.js')}}"></script><!-- Combining JS  -->
<script src="{{asset('web/js/jquery.marquee.js')}}"></script><!-- LOADING JS -->
<script>
	$(function(){
		$('.marquee').marquee({
			speed: 100,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true,
			pauseOnHover: true
		});	
		$('.marquee1').marquee({
			speed: 100,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'up',
			duplicated: false,
			pauseOnHover: true
		});	
	});
</script>
</body>

</html>
