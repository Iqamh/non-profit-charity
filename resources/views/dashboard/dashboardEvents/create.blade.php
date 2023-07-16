@extends('dashboard.layouts.main')
@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Events</span>
      <h3 class="page-title"><i class="icon-line-awesome-tags"></i> Add Event</h3>
    </div>
  </div>
  <!-- ================================ links Events Content Start ========================================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ================================ links Events Content Start ========================================================================= -->
          <form action="{{ route('events.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <!-- ================================ links Events Content Start ========================================================================= -->
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Title" name="Title" required>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Address" name="Address" required>
            <input class="form-control form-control-lg mb-3" type="date" placeholder="Start Days" name="Start" required>
            <input class="form-control form-control-lg mb-3" type="date" placeholder="End Days" name="End" required>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <textarea class="form-control form-control-lg mb-3" type="text" placeholder="Description" name="Description" rows="10" required></textarea>
            <!-- ================================ links Events Content Start ========================================================================= -->
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ links Events Content Start ========================================================================= -->
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Status:</strong> Draft
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                <a class="btn btn-sm btn-outline-accent" href="{{ route('events') }}"><i class="icon-line-awesome-tags"></i> Events</a>
                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                <i class="icon-feather-file-plus"></i> Publish</button>
              </li>
            </ul>
          </div>
        </div>
        <!-- ================================ links Events Content Start ========================================================================= -->
        <!-- / Post Overview -->
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0"><i class="icon-line-awesome-image"></i> Event Image</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <div class="edit-post-details__avatar m-auto">
                <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="Event Avatar">
                <label class="edit-post-details__avatar__change">
                  <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                  <input type="file" name="image" hidden="" required>
                </label>
              </div>
            </ul>
          </form>
        </div>
        <!-- ================================ links Events Content Start ========================================================================= -->
      </div>
      <!-- / Post Overview -->
    </div>
  </div>
</div>
<!-- ================================ links Events Content Start ========================================================================= -->
@endsection
