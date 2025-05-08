@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('assets/img/images/volunteer-medical-student.jpg') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-lg-end align-items-center banner-content">
            <div class="col-lg-5">
                <h1 class="text-white">Our Events</h1>
                <p>To implement sustainable programs that improve access worldwide to investment, opportunity.</p>
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
                                    {{ $event->start }}
                                </div>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="content_wrapper">
                                <h3 class="title">
                                    <a href="{{ Route('view.eventDetail', $event->id) }}">{{ $event->title }}</a>
                                </h3>
                                <p>
                                    {{ ($event->description) }}
                                </p>
                                <div class="d-flex count_time justify-content-lg-start justify-content-center"
                                    id="clockdiv1">
                                    <div class="single_time">
                                        <h4 class="days">{{ $event->start }}</h4>
                                    </div>
                                    <div class="single_time">
                                        <h4 class="minutes">{{ $event->end }}</h4>
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
        <div class="row">
            <div class="col small ">
                {{ $events->links('pagination.custom') }}
            </div>
            <div class="col text-right view-report">
                @if($events->total() > 0)
                <p>Showing {{ $events->firstItem() }} to {{ $events->lastItem() }} of {{ $events->total() }} Events</p>
                @else
                <p>No Events Found</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection