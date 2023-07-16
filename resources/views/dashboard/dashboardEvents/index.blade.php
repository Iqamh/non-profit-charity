@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<!-- / .main-navbar -->
  <!-- ================================ links Events Content Start ========================================================================= -->
@if ($message = Session::get('success'))
<div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}
</div>
@endif
<!-- ================================ links Events Content Start ========================================================================= -->
@if ($message = Session::get('Delete'))
<div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> {{ $message }}
</div>
@endif
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Overview</span>
      <!-- ================================ links Events Content Start ========================================================================= -->
      <h3 class="page-title"><i class=" icon-line-awesome-tags"></i> Events 
        <a href="{{ Route('events.create') }}" class="mb-2 btn btn-success mr-2">
          <i class="icon-material-outline-add-circle-outline"></i>Add New
        </a>
      </h3>
        <!-- ================================ links Events Content Start ========================================================================= -->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="card card-small lo-stats h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Latest Events</h6>
          <div class="block-handle"></div>
        </div>
        <div class="card-body p-0">
          <div class="container-fluid px-0">
            <table class="table mb-0">
              <thead class="py-2 bg-light text-semibold border-bottom">
                <tr>
                  <th>Images</th>
                  <th>Titles</th>
                  <th class="text-center">Address</th>
                  <th class="text-center">Finish Time</th>
                  <th class="text-center">Start Time</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- ================================ links Events Content Start ========================================================================= -->
                @foreach($events as $event)
                <tr>
                  <td class="lo-stats__image">
                    <img class="border rounded" src="{!! asset($event->image) !!}">
                  </td>
                  <!-- ================================ links Events Content Start ========================================================================= -->
                  <td class="lo-stats__items text-center"><span>{{ $event->title }}</span></td>
                  <!-- ================================ links Events Content Start ========================================================================= -->
                  <td class="lo-stats__order-details text-center"><span>{{ $event->address }}</span></td>
                  <td class="lo-stats__order-details text-center"><span>{{ $event->start }}</span></td>
                  <td class="lo-stats__order-details text-center"><span>{{ $event->end }}</span></td>
                  <!-- ================================ links Events Content Start ========================================================================= -->
                  <td class="lo-stats__actions">
                    <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                      <!-- ====================== links Events Content Start =============================================== -->
                      <a href="" class="mb-2 btn btn-sm btn-success"><i class="icon-line-awesome-eye"></i> View</a>
                      <a href="{{ Route('events.edit', $event->id) }}" class="mb-2 btn btn-sm btn-primary"><i class="icon-feather-edit-2"></i> Edit</a>
                      <form action="{{ Route('events.destroy', $event->id) }}" method="POST" files="true" style="display: inline-block;">
                      @csrf
                      <!-- ====================== links Events Content Start =============================================== -->
                      @method('DELETE')
                      <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
                <!-- ================================ links Events Content Start ========================================================================= -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col small ">
              {{ $events->links('pagination.custom') }}
            </div>
            <div class="col text-right view-report">
              <!-- ====================== links Events Content Start =============================================== -->
              @if($events->total() > 0)
                <p>Showing {{ $events->firstItem() }} to {{ $events->lastItem() }} of {{ $events->total() }} Events</p>
              @else
                <p>No Events Found</p>
              @endif
              <!-- ====================== links Events Content Start =============================================== -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================================ links Events Content Start ========================================================================= -->
@endsection
