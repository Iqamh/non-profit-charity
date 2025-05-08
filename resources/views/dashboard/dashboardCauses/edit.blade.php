@extends('dashboard.layouts.main')

@section('dashboardcontent')
<div class="main-content-container container-fluid px-4">
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Cause</span>
      <h3 class="page-title"><i class="icon-material-outline-assignment"></i> Add Cause</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <div class="card card-small mb-3">
        <div class="card-body">
          <form class="add-new-Cause" action="{{ route('causes.update', $causes->id) }}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Title" name="Title" value="{{ $causes->title }}">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Goal" name="Goals" value="{{ $causes->goals }}">
            <input class="form-control form-control-lg mb-3" type="date" placeholder="Start Time" name="Start" value="{{ $causes->start }}">
            <input class="form-control form-control-lg mb-3" type="date" placeholder="Finish Time" name="End" value="{{ $causes->end }}">
            <textarea value="{{ $causes->description }}" class="form-control form-control-lg mb-3" type="text" name="Description" rows="15">{{ $causes->description }}</textarea>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-12">
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
              <button class="btn btn-sm btn-accent ml-auto" type="submit"><i class="icon-feather-file-plus"></i> Publish</button>
            </li>
          </ul>
        </div>
      </div>
      <div class='card card-small mb-3'>
        <div class="card-header border-bottom">
          <h6 class="m-0"><i class="icon-line-awesome-image"></i> Cause Image</h6>
        </div>
        <div class='card-body p-0'>
          <ul class="list-group list-group-flush">
            <div class="edit-post-details__avatar m-auto">
              <img src="{{ asset($causes->image) }}" alt="Cause image">
              <label class="edit-post-details__avatar__change">
                <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                <input type="file" name="image" hidden="" value="{{ $causes->image }}">
              </label>
            </div>
          </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection