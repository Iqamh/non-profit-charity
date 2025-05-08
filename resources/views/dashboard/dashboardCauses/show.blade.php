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

      <h3 class="page-title"><i class=" icon-material-outline-money"></i>View Donates</h3>

    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="card card-small lo-stats h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Latest Cuases</h6>
          <div class="block-handle"></div>
        </div>
        <div class="card-body p-0">
          <div class="container-fluid px-0">
            <table class="table mb-0">
              <thead class="py-2 bg-light text-semibold border-bottom">
                <tr>
                  <th>Titles</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Amount</th>
                  <th class="text-right">Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($dons as $donate)
                  @if($donate->title == $cause->title)
                  <tr>
                    <td class="lo-stats__items"><span>{{ $donate->title }}</span></td>
                    <td class="lo-stats__order-details text-center"><span>{{ $donate->u_nama }}</span></td>
                    <td class="lo-stats__order-details text-center"><span>{{ $donate->donation_amount }}</span></td>
                    <td class="lo-stats__actions text-right"><span>{{ $donate->created_at }}</span></td>
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
              {{ $dons->links('pagination.custom') }}
            </div>
            <div class="col text-right view-report">
              @if($dons->total() > 0)
              <p>Showing {{ $dons->firstItem() }} to {{ $dons->lastItem() }} of {{ $dons->total() }} Donates</p>
              @else
              <p>No Donates Found</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection