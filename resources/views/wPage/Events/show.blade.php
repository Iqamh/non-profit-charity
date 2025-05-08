@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('../assets/img/images/volunteer-medical-student.jpg') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row align-items-center banner-content">
            <div class="col-lg-8">
                <h1 class="text-white">{{ $events->title }}</h1>
            </div>
        </div>
    </div>
</section>
<section class="event_details section-gap-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img src="{{ asset($events->image) }}" alt="" class="img-fluid w-75">
            </div>
        </div>
        <div class="event_content mb-40">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="right_content">
                        <h2>{{ $events->title }}</h2>
                        <p>
                            {{ $events->description }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <div class="left_content">
                        <div class="mb-40">
                            <h5>
                                <i class="icon-material-outline-add-location"></i>
                                Address
                            </h5>
                            <div class="ml-30">{{ $events->address }}</div>
                        </div>

                        <div class="">
                            <h5>
                                <i class=" icon-material-outline-access-time"></i>
                                FinishTime & StartTime
                            </h5>
                            <div class="ml-30">{{ $events->end }}</div>
                            <div class="ml-30">{{ $events->start }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="cta-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="top_text">Thanks for your heart.</p>
                <h1>Contribute on my charity work by your attendance.</h1>
                <a href="{{ Route('eventDetail.reg', $events->id) }}" class="primary-btn">register</a>
            </div>
        </div>
    </div>
</div>
@endsection