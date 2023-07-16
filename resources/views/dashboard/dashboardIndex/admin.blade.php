@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Dashboard Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Dashboard</span>
      <h3 class="page-title">Care4All</h3>
    </div>
  </div>
  <!-- ================================ links Dashboard Content Start ========================================================================= -->
  <!-- End Page Header -->
  <!-- Small Stats Blocks -->
  <div class="row">
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
      <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('{{ asset('dashboardassets/images/content-management/2.png') }}');border-radius: 10px">
          <a href="{{ Route('events') }}" class="card-post__category badge badge-pill badge-info">Events</a>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
      <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('{{ asset('dashboardassets/images/content-management/3.png') }}');border-radius: 10px">
          <a href="{{ Route('causes') }}" class="card-post__category badge badge-pill badge-dark">Causes</a>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Events</span>
              @if(count($events) != NULL)
              <h6 class="stats-small__value count my-3">{{ count($events) }}</h6>
              @else
              <h6 class="stats-small__value count my-3">0</h6>
              @endif
            </div>
          </div>
          <canvas height="129" class="blog-overview-stats-small-2"></canvas>
        </div>
      </div>
    </div>
    <!-- ================================ links Dashboard Content Start ========================================================================= -->
    <div class="col-lg-6 col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Causes</span>
              @if(count($causes) != NULL)
              <h6 class="stats-small__value count my-3">{{ count($causes) }}</h6>
              @else
              <h6 class="stats-small__value count my-3">0</h6>
              @endif
            </div>
          </div>
          <canvas height="159" class="blog-overview-stats-small-3"></canvas>
        </div>
      </div>
    </div>
  <!-- End Small Stats Blocks -->
</div>
<!-- End Top Referrals Component -->
</div>
</div>
<!-- ================================ links Message Content Start ========================================================================= -->
@endsection
