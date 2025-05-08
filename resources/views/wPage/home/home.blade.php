@extends('wPage.layouts.main')

@section('content')
<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="assets/img/images/charity_water_pouring.jpg">
	<div class="overlay-bg overlay"></div>
	<div class="container">
		<div class="row fullscreen justify-content-lg-begin">
			<div class="banner-content col-lg-7">
				<h1>
					Make People Live <br>
					<span class="text-danger">Better</span>
				</h1>
				<h4>Small Step, Big Impact</h4>
			</div>
		</div>
	</div>
</section>
<section class="features-area section-gap-top">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
				<div class="featured-block d-flex justify-content-center align-items-center">
					<a href="{{ Route('view_e') }}" class="d-block">
						<img src="{{ asset('assets/img/images/hands.png') }}" class="featured-block-image img-fluid"
							alt="">

						<p class="featured-block-text">Become a <strong>volunteer</strong></p>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
				<div class="featured-block d-flex justify-content-center align-items-center danger">
					<a href="{{ Route('view_c') }}" class="d-block">
						<img src="{{ asset('assets/img/images/receive.png') }}" class="featured-block-image img-fluid" alt="">
						<p class="featured-block-text">Make a <strong>Donation</strong></p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
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
			@foreach($causes as $cause)
			<div class="col-lg-4 col-md-6">
				<div class="card single-popular-cause">
					<div class="card-body">
						<figure>
							<img class="card-img-top img-fluid" src="{{ asset($cause->image) }}" alt="Card image cap">
						</figure>
						<div class="card_inner_body">
							<h4 class="card-title">{{ ($cause->title) }}</h4>
							<div class="d-flex justify-content-between raised_goal">
								@if($cause->donation == null)
								<p>Donation: <span>Rp0</span></p>
								@else
								<p>Donation: <span>Rp{{ $cause->donation }}</span></p>
								@endif
								<p>Goal: <span>Rp{{ $cause->goals }}</span></p>
							</div>
							<div class="d-flex justify-content-between donation align-items-center">
								<a href="{{ Route('view.causesDetail', $cause->id) }}" class="primary-btn">Donate</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="justify-content-center text-center">
			<a href="{{ Route('view_c') }}" class="primary-btn mb-5">
				Read more
			</a>
		</div>
	</div>
</section>
<section class="callto-area section-gap relative cta-section section-padding" data-parallax="scroll" data-image-src="assets/img/images/charity-shutterstock-for-web.jpg" id="volunter">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row justify-content-center align-items-center">

			<div class="col-lg-5 col-12 ms-auto">
				<h2 class="mb-0">Make an impact. <br> Save lives.</h2>
			</div>

			<div class="col-lg-5 col-12">
				<a href="{{ Route('view_c') }}" class="me-4">Make a donation</a>
				<br>
				<a href="{{ Route('view_e') }}" class="custom-btn genric-btn primary">Become a volunteer</a>
			</div>
		</div>
	</div>
</section>
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
			@foreach($events as $event)
			<div class="col-lg-6">
				<div class="single_upcoming_event">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<figure>
								<img class="img-fluid w-100" src="{{ asset($event->image) }}" alt="">
								<div class="date">
									{{ ($event->start) }}
								</div>
							</figure>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="content_wrapper">
								<h3 class="title">
									<a href="">{{ $event->title }}</a>
								</h3>
								<p>
									{{ ($event->description) }}
								</p>
								<div class="d-flex count_time justify-content-lg-start justify-content-center">
									<div class="single_time">
										<h6 class="minutes">{{ $event->end }}</h6>
										<p>Finish</p>
									</div>
								</div>
								<a href="{{ Route('view.eventDetail', $event->id) }}" class="primary-btn2">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="justify-content-center text-center">
			<a href="{{ Route('view_e') }}" class="primary-btn mb-5">
				Read more
			</a>
		</div>
	</div>
</section>
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
		@foreach($gallery as $Gallery)
		<a href="{{ asset($Gallery->image) }}" class="single-instagram d-block img-pop-up">
			<div class="instagram-img">
				<img src="{{ asset($Gallery->image) }}" style="object-fit: cover; height: 300px">
				<div class="instagram-text">
					<i class=" icon-material-outline-add"></i>
				</div>
			</div>
		</a>
		@endforeach
	</div>
</section>
@endsection