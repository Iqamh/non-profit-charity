@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Causes Content Start ========================================================================= -->
<!-- / .main-navbar -->
@if ($message = Session::get('success'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="icon-material-outline-check mx-2"></i>
    <strong>Success!</strong>
    {{ $message }}
  </div>
@endif
  <!-- ================================ dashboard Causes  ========================================================================= -->
@if ($message = Session::get('Delete'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="icon-material-outline-check mx-2"></i>
    <strong>Delete!</strong> 
    {{ $message }} 
  </div>
@endif
  <!-- ================================ dashboard Causes  ========================================================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Overview</span>
      <h3 class="page-title"><i class="icon-material-outline-assignment"></i> Causes 
        <a href="{{ Route('causes.create') }}" class="mb-2 btn btn-success mr-2">
          <i class="icon-material-outline-add-circle-outline"></i> 
          Add New
        </a>
      </h3>  
    </div>
  </div>
    <!-- ================================ dashboard Causes  ========================================================================= -->
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="card card-small lo-stats h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Latest Causes</h6>
          <div class="block-handle"></div>
        </div>
        <div class="card-body p-0">
          <div class="container-fluid px-0">
            <table class="table mb-0">
              <thead class="py-2 bg-light text-semibold border-bottom">
                <tr>
                  <th>Image</th>
                  <th>Details</th>
                  <th class="text-center">Created By</th>
                  <th class="text-center">Goals</th>
                  <th class="text-center">Donations</th>
                  <th class="text-center">Start Time</th>
                  <th class="text-center">Finish Time</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- ================================ dashboard Causes  ========================================================================= -->
                @foreach($causes as $cause)
                  <tr>
                    <td class="lo-stats__image">
                      <img class="border rounded" src="{!! asset($cause->image) !!}">
                    </td>
                    <td class="lo-stats__items">
                      <span>{{ $cause->title }}</span>
                    </td>
                    <!-- ================================ dashboard Causes  ========================================================================= -->
                    <td class="lo-stats__order-details text-center">
                    <span>{{ $cause->creator }}</span>
                    </td>
                    <!-- ================================ dashboard Causes  ========================================================================= -->
                    <td class="lo-stats__total text-center text-success"><span>Rp{{ $cause->goals }}</span></td>
                    <td class="lo-stats__total text-center text-danger">
                      @if($cause->donations == null)
                        <span>Rp0</span>
                      @else
                        <span>Rp{{ $cause->donations }}</span>
                      @endif
                    </td>
                    <td class="lo-stats__order-details text-center"><span>{{ $cause->start }}</span></td>
                    <td class="lo-stats__order-details text-center"><span>{{ $cause->end }}</span></td>
                    <td class="lo-stats__actions">
                      <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                        <a href="" class="mb-2 btn btn-sm btn-success"><i class="icon-line-awesome-eye"></i> View</a>
                        <a href="{{ Route('causes.edit', $cause->id) }}" class="mb-2 btn btn-sm btn-primary">
                        <i class="icon-feather-edit-2"></i> Edit</a>
                        <form action="{{ Route('causes.destroy', $cause->id) }}" method="POST" files="true" style="display: inline-block;">
                        @csrf
                        <!-- ================================ dashboard Causes  ========================================================================= -->
                        @method('DELETE')
                          <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
                <!-- ================================ dashboard Causes  ========================================================================= -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col">
                <!-- ================================ dashboard Causes  ========================================================================= -->
                {{ $causes->links('pagination.custom') }}
                <!-- ================================ dashboard Causes  ========================================================================= -->
            </div>
            <div class="col text-right view-report">
              <!-- ================================ dashboard Causes  ========================================================================= -->
              @if($causes->total() > 0)
                <p>Showing {{ $causes->firstItem() }} to {{ $causes->lastItem() }} of {{ $causes->total() }} Causes</p>
              @else
                <p>No Causes Found</p>
              @endif
              <!-- ================================ dashboard Causes  ========================================================================= -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- ================================ links Causes Content Start ========================================================================= -->
@endsection
