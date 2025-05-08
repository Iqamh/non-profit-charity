@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('assets/img/images/volunteers-preparing-food-donation-boxes_23-2148731613.jpg') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row  align-items-center banner-content">
            <div class="col-lg-5">
                <h1 class="text-white">Our Causes</h1>
                <p>To implement sustainable programs that improve access worldwide to investment, opportunity.</p>
            </div>
        </div>
    </div>
</section>
<section class="popular-cause-area section-gap-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2><span>Popular</span> Causes</h2>
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
                            <div class="tag">{{ $cause->title }}</div>
                            <h4 class="card-title">{{ $cause->title }}</h4>
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
        <div class="row">
            <div class="col small ">
                {{ $causes->links('pagination.custom') }}
            </div>
            <div class="col text-right view-report">
                @if($causes->total() > 0)
                <p>Showing {{ $causes->firstItem() }} to {{ $causes->lastItem() }} of {{ $causes->total() }} Events</p>
                @else
                <p>No causes Found</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection