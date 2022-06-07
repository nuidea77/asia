@extends('layout.main')
@section('content')
<section class="wrapper bg-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-10 col-xl-8 mx-auto ">
          <div class="post-header text-white">
            <h1 class="display-1 text-white mb-5">{{ $data->getTranslatedAttribute('name') }}</h1>
            <ul class="post-meta text-white fs-17 mb-5">
              <li><i class="uil uil-dollar-alt"></i> {{$data->salary}}</li>
              <li ><i class="uil uil-phone-alt"></i><a class="text-white" href="Tel:{{$data->phone}}">{{$data->phone}}</a> </li>
            </ul>
            <!-- /.post-meta -->
          </div>
          <!-- /.post-header -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="blog single mt-n17">
            <div class="card shadow-lg">
              <div class="card-body">
                <h2 class="h1 mb-3">@lang('texts.gui')</h2>
                <p>{!! $data->getTranslatedAttribute('uureg') !!}</p>
                <h3 class="h2 mb-3 mt-9">@lang('texts.req')</h3>
                <p>{!! $data->getTranslatedAttribute('shaardlaga') !!}</p>

                <!--/.row -->
                <h3 class="h2 mb-3 mt-9">@lang('texts.ainfo')</h3>
                <p>{!! $data->getTranslatedAttribute('nemelt') !!}</p>

                <!--/.row -->
                <a href="/jobs/{{$data->link}}" target="blank" class="btn btn-primary rounded-pill">@lang('texts.apply')</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.blog -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@stop
