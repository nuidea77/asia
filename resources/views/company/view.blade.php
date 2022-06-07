@extends('layout.main')
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{Voyager::image($company->fimage)}}">
    <div class="container py-22 py-md-22">
        <h6 class="display-6 mb-0 text-center text-white">{{ $company->getTranslatedAttribute('name') }}</h6>
      </div>
</section>

<section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
          <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
              <h6 class="display-6 mb-7 px-lg-19 px-xl-18">{{ $company->getTranslatedAttribute('name') }}</h6>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            <div class="col-md-12 col-lg-3">
              <div class="position-relative">
                <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="{{Voyager::image($company->dpic)}}"  alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">{{ $company->getTranslatedAttribute('dname') }}</h4>
                    <p class="mb-0">{{ $company->getTranslatedAttribute('dposition') }}</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-12 col-lg-9">
              <div class="position-relative">
                <p class="mb-0"> {!! $company->getTranslatedAttribute('description') !!}</p>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>

          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-light">
        <div class="container py-4 py-md-4">
          <div class="row gx-10">
            <div class="col-xl-12 col-xxl-12 mx-auto">
              <div class="row align-items-center justify-content-center counter-wrapper gy-6">
                <div class="col-md-12 col-lg-4">
                    <div class="card shadow-lg">
                        <div class="card-body-3">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-leaf disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">@lang('texts.address')</h5>
                                <address>{{ $company->getTranslatedAttribute('address') }}</address>
                            </div>
                          </div>
                        </div>
                        <!--/.card-body -->
                      </div>
                  <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-12 col-lg-4">
                  <div class="card shadow-lg">
                    <div class="card-body-3">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <div class="icon btn btn-circle btn-lg btn-soft-leaf disabled mx-auto me-4 mb-lg-3 mb-xl-0">  <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">@lang('texts.phone')</h5>
                          <p><a href="tel:{{ $company->phone }}" class="link-body">{{ $company->phone }}</a> </p>
                        </div>
                      </div>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-12 col-lg-4">
                    <div class="card shadow-lg">
                        <div class="card-body-3">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-leaf disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">@lang('texts.email')</h5>
                                <p class="mb-0"><a href="mailto:{{ $company->email }}" class="link-body">{{ $company->email }}</a></p>
                            </div>
                          </div>
                        </div>
                        <!--/.card-body -->
                      </div>
                  <!--/.card -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
@stop
