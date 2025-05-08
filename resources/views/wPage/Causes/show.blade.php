@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('../assets/img/images/volunteers-preparing-food-donation-boxes_23-2148731613.jpg') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row align-items-center banner-content">
            <div class="col-lg-8">
                <h1 class="text-white">{{ $causes->title }}</h1>
            </div>
        </div>
    </div>
</section>
<section class="event_details section-gap-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img src="{{ asset($causes->image) }}" class="img-fluid w-75">
            </div>
        </div>
        <div class="event_content mb-40">
            <div class="row justify-content-center">
                <div class="col-12">
                    @if(session('Messagge'))
                    <div class="alert alert-success" role="alert">
                        Congratulations. Your Donation has been Recorded
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="icon-material-outline-check mx-2"></i>
                    </div>
                    @endif
                </div>
                <div class="col-lg-8">
                    <div class="right_content">
                        <h2>{{ $causes->title }}</h2>
                        <p>
                            {{ $causes->description }}
                        </p>
                        <form class="form-contact contact_form" method="POST" id="payment-form"
                            action="{{ Route('causesDetail.store', $causes->id) }}">
                            @csrf
                            <input type="hidden" name="title" value="{{ $causes->title }}">
                            @if($causes->donation == $causes->goals)
                            <div class="form-group">
                                <input class="form-control" id="amount" type="text" name="amount"
                                    placeholder="Enter donation" disabled>
                            </div>
                            <div class="form-group mt-2 mb-5 mb-lg-0">
                                <button type="submit"
                                    class="button button-contactForm genric-btn disable">Donate</button>
                            </div>
                            @else
                            <div class="form-group">
                                <input class="form-control" id="amount" type="text" name="amount"
                                    placeholder="Enter donation">
                            </div>
                            <div class="form-group mt-2 mb-5 mb-lg-0">
                                <button type="submit" class="button button-contactForm primary-btn">Donate</button>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 mt-lg-0 mt-5">
                    <div class="left_content">
                        <div class="mb-40">
                            <h5>
                                <i class=" icon-material-outline-local-atm"></i>
                                Donation
                            </h5>
                            <div class="ml-30">
                                @if($causes->donation == null)
                                Rp0
                                @else
                                Rp{{ $causes->donation}}
                                @endif
                            </div>
                        </div>
                        <div class="mb-40">
                            <h5>
                                <i class="icon-feather-airplay"></i>
                                Goal
                            </h5>
                            <div class="ml-30">Rp{{ $causes->goals }}</div>
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
                <h1>Contribute on my charity work by your donation</h1>
            </div>
        </div>
    </div>
</div>
@endsection