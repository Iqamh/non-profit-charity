@extends('dashboard.layouts.main')

@section('dashboardcontent')
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

      <h3 class="page-title"><i class=" icon-line-awesome-street-view"></i>View Volunteers</h3>

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
                  <th>Titles</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Address</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Details</th>
                  <th class="text-center">File</th>
                  <th class="text-center">Status</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($vols as $volunteer)
                  @if($volunteer->title == $event->title)
                  <tr>
                    <td class="lo-stats__items" style="width: 250px;"><span>{{ $volunteer->title }}</span></td>
                    <td class="lo-stats__order-details text-center"><span>{{ $volunteer->nama }}</span></td>
                    <td class="lo-stats__order-details text-center" style="width: 100px;"><span>{{ $volunteer->address }}</span></td>
                    <td class="lo-stats__order-details text-center"><span>{{ $volunteer->email }}</span></td>
                    <td class="lo-stats__order-details text-center"><span>{{ $volunteer->phone }}</span></td>
                    <td class="lo-stats__order-details text-center" style="width: 150px;"><span>{{ $volunteer->reason }}</span></td>
                    <td class="lo-stats__order-details text-center">
                      <span>
                        <a href="{{ route('download.pdf', urlencode(basename($volunteer->file))) }}" class="mb-2 btn btn-sm btn-primary"><i class="icon-feather-download"></i></a>
                      </span>
                    </td>
                    <td class="lo-stats__order-details text-center" style="width: 200px;">
                      <form action="{{ Route('events.upStatus', $volunteer->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('PUT')
                        <select class="custom-select" name="activity" required onchange="this.form.submit()">
                          <option value="" selected disabled>Events Activity</option>
                          <option value="0" @if($volunteer->status == 0) selected @endif>On Progress</option>
                          <option value="1" @if($volunteer->status == 1) selected @endif>Accepted</option>
                          <option value="2" @if($volunteer->status == 2) selected @endif>Declined</option>
                        </select>
                      </form>
                    </td>
                    <td class="lo-stats__actions">
                      <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                        <form action="{{ Route('events.destroy2', $volunteer->id) }}" method="POST" files="true"
                          style="display: inline-block;">
                          @csrf
                          @method('DELETE')
                          <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col small ">
              {{ $vols->links('pagination.custom') }}
            </div>
            <div class="col text-right view-report">
              @if($vols->total() > 0)
              <p>Showing {{ $vols->firstItem() }} to {{ $vols->lastItem() }} of {{ $vols->total() }} Volunteers</p>
              @else
              <p>No Volunteers Found</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection