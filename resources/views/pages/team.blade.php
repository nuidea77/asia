@extends('layout.main')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('assets/img/4.webp')}}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="display-1 mb-3 text-white">@lang('texts.management-team')</h1>

          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
        <div class="col-md-12 col-lg-12 col-xl-10 col-xxl-12 mx-auto ">
            <h2 class=" fs-15 display-6 mb-3">@lang('texts.chairman')</h2>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
        @if(isset($team1))
        @foreach($team1 as $data)
        <div class="col-md-6 col-lg-3">
          <div class="position-relative">
            <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
            <div class="card">
              <figure class="card-img-top"><img class="img-fluid" src="{{Voyager::image($data->image)}}"  alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">{{$data->name}}</h4>
                <p class="mb-0">{{$data->position}}</p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /div -->
        </div>
        @endforeach
        @endif
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
        <div class="col-md-12 col-lg-12 col-xl-10 col-xxl-12 mx-auto ">
            <h2 class=" fs-15 display-6 mb-3">@lang('texts.executive')</h2>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
        @if(isset($team2))
        @foreach($team2 as $data)
        <div class="col-md-6 col-lg-3">
          <div class="position-relative">
            <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
            <div class="card">
              <figure class="card-img-top"><img class="img-fluid" src="{{Voyager::image($data->image)}}"  alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">{{$data->name}}</h4>
                <p class="mb-0">{{$data->position}}</p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /div -->
        </div>
        @endforeach
        @endif
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
        <div class="col-md-12 col-lg-12 col-xl-10 col-xxl-12 mx-auto ">
            <h2 class="display-6 fs-15 mb-3">@lang('texts.directors')</h2>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
        @if(isset($team3))
        @foreach($team3 as $data)
        <div class="col-md-6 col-lg-3">
          <div class="position-relative">
            <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
            <div class="card">
              <figure class="card-img-top"><img class="img-fluid" src="{{Voyager::image($data->image)}}"  alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">{{$data->name}}</h4>
                <p class="mb-0">{{$data->position}}</p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /div -->
        </div>
        @endforeach
        @endif
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  @stop
