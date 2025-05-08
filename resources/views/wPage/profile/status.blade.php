@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
  .banner-area {
    background: url('../assets/img/images/36-charity-afpgt.jpg') no-repeat;
    background-size: cover
  }
</style>
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-lg-end align-items-center banner-content">
      <div class="col-lg-5">
        <h1 class="text-white">{{ $users->name }}</h1>
        <h5 class="pb-1 mb-0 text-nowrap text-white font-italic">{{ $users->email }}</h5>
      </div>
    </div>
  </div>
</section>
<section class="pt-3">
  <div class="container">
    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                @include('wPage.layouts.profile')
                <div class="tab-content pt-3">
                  <div class="tab-pane active">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="text-center">Tanggal Daftar</th>
                                      <th>Detail</th>
                                      <th class="text-center">Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($vols as $volunteer)
                                      @if($volunteer->u_nama == $users->name)
                                      <tr class="inner-box">
                                        <td class="text-center">
                                          <div class="event-date">
                                            <span>{{ $volunteer->created_at }}</span>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="event-wrap">
                                          @php
                                            $events = $event->where('title', $volunteer->title)->first();
                                          @endphp
                                          @if($events)
                                            <h4><a class="text-dark" href="{{ Route('view.eventDetail', $events->id) }}">{{ $volunteer->title }}</a></h4>
                                          @endif
                                          </div>
                                        </td>
                                        <td class="text-center">
                                          <div class="event-date">
                                            @if($volunteer->status == 0)
                                              <p class="font-italic text-warning">On Progres</p>
                                            @elseif($volunteer->status == 1)
                                              <p class="font-italic text-success">Accepted</p>
                                            @else
                                              <p class="font-italic text-danger">Declined</p>
                                            @endif
                                          </div>
                                        </td>
                                      </tr>
                                      @endif
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection