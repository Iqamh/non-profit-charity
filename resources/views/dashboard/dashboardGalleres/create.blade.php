@extends('dashboard.layouts.main')
@section('dashboardcontent')
<div class="main-content-container container-fluid px-4" id="editor">
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle"> Galleries</span>
      <h3 class="page-title"><i class=" icon-feather-file-text"></i> Add Gallery</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-small mb-500">
        <div id="form-container" class="card-body">
          <form action="{{ route('galleries.store') }}" method="POST" role="form" enctype="multipart/form-data"
            class="add-new-post">
            @csrf
            <strong class="text-muted d-block mb-2">Gallery File Upload</strong>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="form-control-lg mb-3 custom-file-input" id="customFile2" name="image"
                  required>
                <label class="custom-file-label" for="customFile2">Choose Gallery...</label>
              </div>
            </div>
            <div class="form-control form-control-lg mb-3">
              <label for="Activity">Events Activity</label>
              <select class="custom-select" name="activity" required>
                <option value="" selected disabled>Events Activity</option>
                @foreach($events as $event)
                <option value="{{ $event->title }}">{{ $event->title }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Create New Gallery</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection