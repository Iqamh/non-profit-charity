@extends('wPage.layouts.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
	<!--================ start banner Area =================-->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="assets/img/images/zJBXNbNoIqVPxTrCN2fz.png">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-begin">
				<div class="banner-content col-lg-7">
					<!-- ===============================  Home  ======================================== -->
					<h1>
						- <br>
						children
					</h1>
					<!-- ===============================  Home  ======================================== -->
					<h4>-</h4>
					<a href="{{ url('Contact')}}" class="primary-btn">
						Join us 
						<i class="fa-solid fa-angle-right"></i>
					</a>
					<!-- ===============================  Home  ======================================== -->
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
	<!--================ Start Features Area =================-->
    <section class="features-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="" class="d-block">
                            <img src="{{ asset('assets/img/images/hands.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="" class="d-block">
                            <img src="{{ asset('assets/img/images/heart.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center danger">
                        <a href="" class="d-block">
                            <img src="{{ asset('assets/img/images/receive.png') }}" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Make a <strong>Donation</strong></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
	<!--================ End Features Area =========================-->
	<!--================ Start Popular Causes Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title section_title">
						<span> Dignity, Opportunity, Hope </span>
						<h2><span>Our Causes</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home  ======================================== -->
                -
                <!-- ===============================  Home  ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Popular Causes Area =================-->

	<!--================ Start Volunter =================-->
	<section class="callto-area section-gap relative cta-section section-padding" data-parallax="scroll" data-image-src="assets/img/images/zJBXNbNoIqVPxTrCN2fz.png" id="volunter">
		<div class="overlay overlay-bg"></div>
		<div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="#" class="me-4">Make a donation</a>
                    <br>
                    <a href="#section_4" class="custom-btn genric-btn primary">Become a volunteer</a>
                </div>

            </div>
		</div>
	</section>
	<!--================ End Volunter ===========================-->
	<!--================ Start Upcoming Event Area =================-->
	<section class="upcoming_event_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Upcoming</span> Event</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home Event ======================================== -->
                
                <!-- ===============================  Home Event ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Upcoming Event Area =================-->

	<!--================ Start Gallery Area =================-->
	<section class="instagram-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Our Gallery</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="instagram-slider owl-carousel">
			<!--================ End Gallery Area =================-->
			
			<!--================ End Gallery Area =================-->
		</div>
	</section>
	<!--================ End Gallery Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection