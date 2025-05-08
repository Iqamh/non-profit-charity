@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('../assets/img/images/36-charity-afpgt.jpg') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-lg-end align-items-center banner-content">
            <div class="col-lg-5">
                <h1 class="text-white">{{ $users->name }}</h1>
                <h5 class="pb-1 mb-0 text-nowrap text-white font-italic">{{ $users->email }}</h5>
            </div>
        </div>
    </div>
</section>
<section class="pt-3">
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                @include('wPage.layouts.profile')
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade active show">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Nama Donasi</th>
                                                                            <th>Jumlah</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dons as $donate)
                                                                        @if($donate->u_nama == $users->name)
                                                                        <tr class="inner-box">
                                                                            <td>
                                                                                <div class="event-date">
                                                                                    <span>{{ $donate->title }}</span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="event-wrap">
                                                                                    <p>Rp{{ $donate->donation_amount }}</p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        @endif
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
