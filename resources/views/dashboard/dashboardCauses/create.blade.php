@extends('dashboard.layouts.main')
@section('dashboardcontent')
<!-- ================================ links Causes Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Causes</span>
      <h3 class="page-title"><i class=" icon-material-outline-assignment"></i> Add Cause</h3>
    </div>
  </div>
  <!-- ================================ links Causes Content Start ========================================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ================================ dashboard Causes store ========================================================================= -->
          <form action="{{ route('causes.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Title" name="Title">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Goal" name="Goals">
            <input class="form-control form-control-lg mb-3" type="date" placeholder="Start Time" name="Start">
            <input class="form-control form-control-lg mb-3" type="date" placeholder="Finish Time" name="End">
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <textarea class="form-control form-control-lg mb-3" type="text" name="Description" rows="10"></textarea>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ dashboard Causes store ========================================================================= -->
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
                  <a class="btn btn-sm btn-outline-accent" href="{{ route('causes') }}"><i class="icon-material-outline-description"></i> Causes</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publish</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Causes Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="User Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
            </div>
            <!-- ================================ dashboard Causes store ========================================================================= -->
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
<!-- ================================ links Causes Content Start ========================================================================= -->
@endsection
