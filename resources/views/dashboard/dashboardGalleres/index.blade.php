@extends('dashboard.layouts.main')

@section('dashboardcontent')
@if ($message = Session::get('success'))
<div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}
</div>
@endif
@if ($message = Session::get('Delete'))
<div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> {{ $message }}
</div>
@endif
<div class="main-content-container container-fluid px-4">
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Overview</span>
      <h3 class="page-title"><i class=" icon-feather-file-text"></i> Galleries
        <a href="{{ Route('galleries.create') }}" class="mb-2 btn btn-success mr-2">
          <i class="icon-material-outline-add-circle-outline"></i> Add Galleries</a>
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="card card-small lo-stats h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Latest Galleries</h6>
          <div class="block-handle"></div>
        </div>
        <div class="card-body p-0">
          <div class="container-fluid px-0">
            <table class="table mb-0">
              <thead class="py-2 bg-light text-semibold border-bottom">
                <tr>
                  <th>Images</th>
                  <th>Activity</th>
                  <th>Created At</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($gallery as $Gallery)
                <tr>
                  <td class="lo-stats__image">
                    <img class="border rounded" src="{{ asset($Gallery->image) }}">
                  </td>
                  <td class="lo-stats__order-details">
                    <span>{{ $Gallery->activity }}</span>
                  </td>
                  <td class="lo-stats__order-details">
                    <span>{{ date('M j, Y', strtotime($Gallery->created_at)) }}</span>
                  </td>
                  <td class="lo-stats__actions">
                    <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                      <form action="{{ Route('galleries.destroy',$Gallery->id) }}" method="POST" files="true"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="mb-2 btn btn-sm btn-danger" type="submit"><i
                            class="icon-material-outline-delete"></i> Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col">
              {{ $gallery->links('pagination.custom') }}
            </div>
            <div class="col text-right view-report">
              @if($gallery->total() > 0)
              <p>Showing {{ $gallery->firstItem() }} to {{ $gallery->lastItem() }} of {{ $gallery->total() }} Galleries
              </p>
              @else
              <p>No Galleries Found</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection