    @extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Hari-Gayatri Das College">
    @endsection

    @section('content')
        <div class="page-content bg-white pb-0">
            <!-- Slider Banner -->
            <!-- Main Slider -->
            <div class="owl-slider owl-carousel owl-theme owl-btn-center-lr dots-none">
                <div class="item slide-item">
                    <div class="slide-item-img"><img src="{{asset('web/images/main-slider/slide1.jpg')}}" class="" alt=""/></div>
                    <div class="slide-content">
                        <div class="slide-content-box container">
                            <div class="slide-content-area">
                                <h2 class="slider-title">Inspiring Minds</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-item">
                    <div class="slide-item-img"><img src="{{asset('web/images/main-slider/slide2.jpg')}}" class="" alt=""/></div>
                    <div class="slide-content">
                        <div class="slide-content-box container">
                            <div class="slide-content-area">
                                <h2 class="slider-title">Ask, Learn & Lead It</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-item">
                    <div class="slide-item-img"><img src="{{asset('web/images/main-slider/slide3.jpg')}}" class="" alt=""/></div>
                    <div class="slide-content">
                        <div class="slide-content-box container">
                            <div class="slide-content-area">
                                <h2 class="slider-title">Education for an Inspired Life</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Slider Banner -->
            <div class="content-block">
                <div class="section-full bg-gray content-inner-2">
                    <div class="container-fluid">
                        <div class="section-head text-center mb-0">
                            <h2 class="title">DEPARTMENTS</h2>
                        </div>
                        <div class="row dedptd">
                            <div class="col-md-2">
                                <div class="courses-bx">
                                    <h5>Department</h5>
                                    <h2 class="title">Assamese</h2>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="courses-bx">
                                    <h5>Department</h5>
                                    <h2 class="title">Economics</h2>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="courses-bx">
                                    <h5>Department</h5>
                                    <h2 class="title">Education</h2>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="courses-bx">
                                    <h5>Department</h5>
                                    <h2 class="title">Political Science</h2>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="courses-bx">
                                    <h5>Department</h5>
                                    <h2 class="title">English</h2>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="courses-bx">
                                    <h5>Department</h5>
                                    <h2 class="title">Pholosophy</h2>
                                </div>
                            </div>
                        <div>
                    </div>
                </div>
                <!-- Principal -->
                <div class="section-full bg-white content-inner-2" style="background-image:url({{asset('web/images/pattern/pt1.png')}});">
                    <div class="container">
                        <div class="row align-items-center about-bx2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="about-box">
                                    <h3 class="title"> Principal Note</h3>
                                    <p class="ext"><img class="princ" src="{{asset('web/images/principal.jpg')}}"> Hari-Gayatri Das College is a degree college affiliated to the Gauhati University. It was a dream of our founding fathers to impart quality higher education among the people of greater Azara area and accordingly, they fulfilled their dream through establishment of this institution in the year 1996. Since then the college is striving for its development. Presently we have a good number of students with a brilliant academic staff.</p>
                                    <p class="ext">Dear Learner, present age is an age of quality higher education. Quality makes the knowledge relevant to individual and social needs. Quality education is required to enable persons, societies and nations to acquire the skills and competencies required for living meaningfully in a competitive, globalized world.There is no higher secondary classes in this College. The enrolment resonable. One to one contact is quite possible here which is a pre-condition for quality education. Therefore, thirst for knowledge and building a knowledge society has become a major concern of every institution of higher learning. Keeping in view, our institution intends to provide quality higher education for entire students, so that they can survive in the competitive job market and build moral character to make our society a peaceful, stable and civilized one. It is said that, knowledge without moral and ethical dimension is of no value. But there is a general view that higher education in India has deteriorated in terms of quality and social relevance. The quantitative expansion of higher education is accompanied by qualitative deterioration.<p>
                                    <p class="ext">Last, by this message I appeal all of you to co-operate with us in a new outlook to achieve self-sufficiency and make this institution a remarkable one. </p>
                                    <div class="princ-name">
                                        <h5 class="m-t0 m-b5">Prof. Arun Ch. Sarma</h5>
                                        <span>M.Sc (Physic), M.Phil</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event&wellcome -->
                <div class="section-full content-inner-2 bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="action-box">
                                    <div class="head">
                                        <h4 class="title">About HGDC</h4>
                                    </div>
                                    <div class="action-area">
                                        <img src="{{asset('web/images/emblem.png')}}" class="emblem">
                                        <p class="text-justify" style="color: #243529;">
                                            Hari-Gayatri Das College is a degree college affiliated to the Gauhati University. It was a dream of our founding fathers to impart quality higher education among the people of greater Azara area and accordingly, they fulfilled their dream through establishment of this institution in the year 1996. Since then the college is striving for its development. Presently we have a good number of students with a brilliant academic staff.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="action-box">
                                    <div class="head">
                                        <h4 class="title">Notification</h4>
                                    </div>
                                    <div class="action-area marquee1">
                                        <ul>
                                            <li><a href="courses-details.html">RESULT OF SSC CGL 2020 (TIER-3)<img src="{{asset('web/images/new-1.gif')}}" alt="" width="30" height="14"></a></li>
                                            <li><a href="courses-details.html">SSC CGL 2020 PRE Application Status<img src="{{asset('web/images/new-1.gif')}}" alt="" width="30" height="14"></a></li>
                                            <li><a href="courses-details.html">SSC CHSL 2020 Result Declared<img src="{{asset('web/images/new-1.gif')}}" alt="" width="30" height="14"></a></li>
                                            <li><a href="courses-details.html">RESULT OF SSC CGL 2020 (TIER-3)</a></li>
                                            <li><a href="courses-details.html">SSC CGL 2020 PRE Application Status</a></li>
                                            <li><a href="courses-details.html">SSC CHSL 2020 Result Declared</a></li>
                                            <li><a href="courses-details.html">RESULT OF SSC CGL 2020 (TIER-3)</a></li>
                                            <li><a href="courses-details.html">SSC CGL 2020 PRE Application Status</a></li>
                                            <li><a href="courses-details.html">SSC CHSL 2020 Result Declared</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="action-box">
                                    <div class="head">
                                        <h4 class="title">Our Emblem</h4>
                                    </div>
                                    <div class="action-area home-into">
                                        <img src="{{asset('web/images/emblem.png')}}" class="emblem">
                                        <p>
                                            The emblem of the college contains a wealth of meaning. The emblem of the college and its motto are mentioned in three significant Sanskrit words<strong> "धनात् विधा गरियषी" </strong>which implies "Knowledge is superior to wealth". The emblem contains a lighting lamp which means Knowledge. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full bg-white content-inner-2 enquiry-area" style="background-image:url({{asset('web/images/background/bg1.jpg')}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">							
                                <div class="enquiry-bx">
                                    <div class="head">
                                        <h2 class="title">Our Gallery</h2>
                                        <p>Events and programs</p>
                                    </div>
                                    <div class="row">
                                        <div class="clearfix col-md-12 p-lr0" id="lightgallery">
                                            <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery">
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1 "> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic1.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic1.jpg')}}" data-src="{{asset('web/images/gallery/pic1.jpg')}}" class="check-km" title="Webinfotech">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic2.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic2.jpg')}}" data-src="{{asset('web/images/gallery/pic2.jpg')}}" class="check-km" title="Image 2 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic3.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic3.jpg')}}" data-src="{{asset('web/images/gallery/pic3.jpg')}}" class="check-km" title="Image 3 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic4.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic4.jpg')}}" data-src="{{asset('web/images/gallery/pic4.jpg')}}" class="check-km" title="Image 4 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic5.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic5.jpg')}}" data-src="{{asset('web/images/gallery/pic5.jpg')}}" class="check-km" title="Image 5 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn " data-wow-delay="0.6s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic6.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic6.jpg')}}" data-src="{{asset('web/images/gallery/pic6.jpg')}}" class="check-km" title="Image 6 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1 "> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic1.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic1.jpg')}}" data-src="{{asset('web/images/gallery/pic1.jpg')}}" class="check-km" title="Image 7 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic2.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic2.jpg')}}" data-src="{{asset('web/images/gallery/pic2.jpg')}}" class="check-km" title="Image 8 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                                    <div class="dlab-box frame-box m-b30">
                                                        <div class="dlab-thum dlab-img-overlay1"> 
                                                            <a href="javascript:void(0);">
                                                                <img src="{{asset('web/images/gallery/pic3.jpg')}}" alt="">
                                                            </a>
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon"> 
                                                                    <span data-exthumbimage="{{asset('web/images/gallery/pic3.jpg')}}" data-src="{{asset('web/images/gallery/pic3.jpg')}}" class="check-km" title="Image 9 Title will come here">
                                                                        <i class="fa fa-search icon-bx-xs"></i>
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="enquiry-bx">
                                    <div class="head">
                                        <h2 class="title">Student FeedBack Form</h2>
                                        <p>Please fill the below form.</p>
                                    </div>
                                    <div class="dzFormMsg"></div>
                                    <form method="post" class="dzForm" action="https://smartclass.dexignzone.com/xhtml/script/contact.php">
                                        <input type="hidden" value="Contact" name="dzToDo" >
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group"> 
                                                        <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group recaptcha-box">
                                                    <div class="input-group">
                                                        <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                        <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button name="submit" type="submit" value="Submit" class="btn"> <span>Submit</span> </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
	@endsection
	
	@section('script') 
	@endsection
	