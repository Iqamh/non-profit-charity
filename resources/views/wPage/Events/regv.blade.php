@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('assets/img/images/zJBXNbNoIqVPxTrCN2fz.png') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-lg-end align-items-center banner-content">
            <div class="col-lg-5">
                <h1 class="text-white">Register</h1>
                <p>{{ $events->title }}</p>
            </div>
        </div>
    </div>
</section>
<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Form</h2>
                @if(session('Messagge'))
                <div class="alert alert-success" role="alert">
                    Congratulations. Your Message has been Send successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="icon-material-outline-check mx-2"></i>
                </div>
                @endif
            </div>
            <div class="col">
                <form class="form-contact contact_form" method="post"
                    action="{{ Route('eventDetail.store', $events->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="title" value="{{ $events->title }}">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="phone" id="phone" type="text" placeholder="Enter phone number" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="address" id="address" type="address" placeholder="Enter address" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="Content" id="Content" cols="30" rows="9" placeholder="Enter Registration Reason" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="file">Pilih File:</label>
                                <input type="file" class="form-control-file" name="file" id="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2 mb-5 mb-lg-0">
                        <button type="submit" class="button button-contactForm primary-btn">Send Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection