@section('metaShare')
<meta property="og:url"           content="https://www.asiapharma.mn/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Ази-Фарма ХХК" />
<meta property="og:description"   content="Эмийн сан" />
@stop
<div class="basic-slider owl-carousel dots-over d-none d-lg-block" data-nav="true" data-margin="5">
    @if(isset($websliders))
            @foreach($websliders as $data)
    <div class="item"><img src="{{Voyager::image($data->image)}}"  alt="" /></div>
    @endforeach
            @endif
  </div>
  <div class="basic-slider owl-carousel dots-over d-lg-none" data-nav="true" data-margin="5">
    @if(isset($mobilesliders))
            @foreach($mobilesliders as $data)
    <div class="item"><img src="{{Voyager::image($data->image)}}"  alt="" /></div>
    @endforeach
            @endif
  </div>
  <!-- /.basic-slider -->

  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-7 py-md-8">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-6 position-relative order-lg-2">
            <figure class="rounded hover-scale"><img src="{{asset('assets/img/photos/about7.jpg')}}"  alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="fs-15 text-uppercase text-muted mb-3">@lang('texts.corporation-intro')</h2>
          <p class="mb-6">@lang('texts.corp1')</p>
          <div class="row gy-3 gx-xl-8">
            <div class="col-xl-6">
              <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>@lang('texts.value1')</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>@lang('texts.value2')</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>@lang('texts.value3')</span></li>
              </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
              <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>@lang('texts.value4')</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>@lang('texts.value5')</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>@lang('texts.value6')</span></li>
              </ul>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper  bg-light">
    <div class="container py-3 py-md-4 text-center">
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-green rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
        <div class="shape bg-dot green rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5 text-center d-flex">
          <div class="col-md-6 col-xl-4 ">
            <div class="card shadow-lg lift">
              <div class="card-body1 hover-scale">
                <img src="{{asset('assets/img/goal.png')}}" class="svg-inject icon-svg icon-svg-md hover-scale text-yellow mb-3" alt="" />
                <h4>@lang('texts.mission')</h4>
                <p class="mb-2">@lang('texts.mission1')</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-xl-4 ">
            <div class="card shadow-lg lift">
              <div class="card-body1 hover-scale">
                <img src="{{asset('assets/img/dart.png')}}" class="svg-inject icon-svg hover-scale icon-svg-md text-red mb-3" alt="" />
                <h4>@lang('texts.priority')</h4>
                <p class="mb-2">@lang('texts.priority1')</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-12 col-xl-4 ">
            <div class="card shadow-lg lift">
              <div class="card-body1 hover-scale">
                <img src="{{asset('assets/img/vision.png')}}" class="svg-inject hover-scale icon-svg icon-svg-md text-green mb-3" alt="" />
                <h4>@lang('texts.vision')</h4>
                <p class="mb-2">@lang('texts.vision1')</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->

          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper pt-10 bg-light mx-auto">
      <div class="row">
        <div class="col-xl-12 ">
          <div class=" image-wrapper bg-full bg-image bg-overlay" data-image-src="{{asset('assets/img/bg2.jpg')}}">
            <div class="card-body p-9 p-xl-10">
              <div class="row align-items-center counter-wrapper gy-4 text-center text-white">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="d-flex d-lg-block d-xl-flex flex-row">
                        <div class="float-start">
                          <div class="mx-auto py-3 me-4 "> <img src="{{asset('assets/img/office-building.png')}}" alt=""> </div>
                        </div>
                        <div>
                            <h3 class="counter counter-lg text-start text-white">4</h3>
                            <p class="text-start">@lang('texts.subsidiaries')</p>
                        </div>
                    </div>

                </div>
                <!--/column -->
                <div class=" col-md-6 col-lg-6 col-xl-3">
                    <div class="d-flex d-lg-block d-xl-flex flex-row">
                        <div class="float-start">
                          <div class="mx-auto py-3 me-4 "> <img src="{{asset('assets/img/certificate.png')}}" alt=""> </div>
                        </div>
                        <div>
                            <h3 class="counter counter-lg text-start text-white">20 +</h3>
                            <p class="text-start">@lang('texts.experience')</p>
                        </div>
                    </div>

                  </div>
                <!--/column -->

                <!--/column -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="d-flex d-lg-block d-xl-flex flex-row">
                        <div class="float-start">
                          <div class="mx-auto py-3 me-4 "> <img src="{{asset('assets/img/box.png')}}" alt=""> </div>
                        </div>
                        <div>
                            <h3 class="counter counter-lg text-start text-white">1.3K +</h3>
                            <p class="text-start">@lang('texts.type-product')</p>
                        </div>
                    </div>

                </div>
                <!--/column -->

                  <!--/column -->
                  <div class=" col-md-6 col-lg-6 col-xl-3">

                    <div class="d-flex d-lg-block d-xl-flex flex-row">
                        <div class="float-start">
                          <div class="mx-auto py-3 me-4  "> <img src="{{asset('assets/img/medicine.png')}}" alt=""> </div>
                        </div>
                        <div>
                            <h3 class="counter counter-lg text-start text-white">6.4M +</h3>
                            <p class="text-start">@lang('texts.number-product')</p>
                        </div>
                    </div>
                  </div>
              </div>
              <!--/.row -->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

    <!-- /.container -->
  </section>
  <!-- /section -->
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-7 py-md-8 text-center">
      <div class="row">
        <div class="col-md-12  col-lg-12">
          <h2 class="fs-15 py-7 text-uppercase text-muted text-start mb-3 ">@lang('texts.business-direction')</h2>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-green rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
        <div class="shape bg-dot green rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5 text-center">
          <div class="col-md-6 col-xl-6">
            <div class="card shadow-lg lift">
              <div class="card-body2">
                <h4>@lang('texts.asiapharmadist')</h4>
                <p class="mb-2">@lang('texts.dist-desc')</p>
                <a href="/company/1" class="more hover link-blue">@lang('texts.readmore')</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-xl-6">
            <div class="card shadow-lg lift">
              <div class="card-body2">
                <h4>@lang('texts.asiapharmainternational')</h4>
                <p class="mb-2">@lang('texts.international-desc')</p>
                <a href="/company/2" class="more hover link-blue">@lang('texts.readmore')</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-xl-6">
            <div class="card shadow-lg lift">
              <div class="card-body2">
                <h4>@lang('texts.asiapharmatrade')</h4>
                <p class="mb-2">@lang('texts.trade-desc')</p>
                <a href="/company/3" class="more hover link-blue">@lang('texts.readmore')</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-xl-6">
            <div class="card shadow-lg lift">
              <div class="card-body2">
                <h4>@lang('texts.asiapharmamed')</h4>
                <p class="mb-2">@lang('texts.med-desc')</p>
                <a href="/company/4" class="more hover link-blue">@lang('texts.readmore')</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <div class="basic-slider owl-carousel  dots-over py-7" >
    <div class="item container">
        <section class="wrapper bg-pale-green rounded">
        <div class="container pt-15 pb-15  position-relative ">
          <img id="banner-app" class="position-lg-absolute  col-12 col-lg-12 mt-lg-n50p mb-3 mb-md-10 mb-lg-0 mx-auto" src="{{asset('assets/img/apteka.png')}}"  data-cue="fadeIn" alt="" style="top: 50%;  animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;" data-show="true">
          <div class="row gx-lg-8 gx-xl-12 align-items-center">
            <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6  text-center text-lg-start" data-cues="slideInDown" data-group="download" data-disabled="true">
              <h3 class="display-7 mb-4 px-md-10 px-lg-0" data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">@lang('texts.apteka')</h3>
              <p class="lead mb-7 px-md-10 px-lg-0 pe-xxl-15" data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">@lang('texts.apteka-desc')</p>
              <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="download" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                <span data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;"><a href="https://apteka.mn/" class="btn  btn-green btn-icon btn-icon-start rounded me-2"><i class="uil uil-globe"></i> Website</a></span>
              </div>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
    </div>
      <div class="item container">
        <section class="wrapper bg-pale-green rounded">
        <div class="container pt-15 pb-15  position-relative ">
          <img id="banner-app" class="position-lg-absolute  col-12 col-lg-12 mt-lg-n50p mb-3 mb-md-10 mb-lg-0 mx-auto" src="{{asset('assets/img/eapteka.png')}}"  data-cue="fadeIn" alt="" style="top: 50%;  animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;" data-show="true">
          <div class="row gx-lg-8 gx-xl-12 align-items-center">
            <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6  text-center text-lg-start" data-cues="slideInDown" data-group="download" data-disabled="true">
              <h3 class="display-7 mb-4 px-md-10 px-lg-0" data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">@lang('texts.eapteka')</h3>
              <p class="lead  px-md-10 px-lg-0 pe-xxl-15" data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">@lang('texts.eapteka-desc')</p>
              <p class="py-0 fs-17" data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">@lang('texts.eapteka-desc')</p>
              <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="download" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                <span data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;"><a href="https://apps.apple.com/mn/app/b2bapteka/id1483031108" class="btn  btn-red btn-icon btn-icon-start rounded me-2"><i class="uil uil-apple"></i> App Store</a></span>
                <span data-cue="slideInDown" data-group="download" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a href="https://play.google.com/store/apps/details?id=mn.capps.eapteka.corp" class="btn btn-primary btn-icon btn-icon-start rounded"><i class="uil uil-google-play"></i> Google Play</a></span>
              </div>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
    </div>

  </div>

  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-7 py-md-8">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
        <div class="col-lg-4 mt-lg-2">
          <h2 class="fs-15 text-uppercase text-muted mb-3">@lang('texts.partners')</h2>
          <p class="lead fs-lg mb-6 pe-xxl-5">@lang('texts.partners-info')</p>
          <a href="/partners" class="btn btn-soft-primary rounded-pill">@lang('texts.readmore')</a>
        </div>
        <!-- /column -->
        <div class="col-lg-8">
          <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
              @if(isset($partners))
              @foreach($partners as $data)


            <div class="col">
              <figure class="hover-scale px-3 px-md-0 px-xxl-2">
                  <img src="{{Voyager::image($data->logo)}}" alt="" />

              </figure>
            </div>
            @endforeach
            @endif
            <!--/column -->

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
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-4 py-md-4">
      <div class="row">
        <div class="col-xl-12 mx-auto">
          <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="{{asset('assets/img/bg2.jpg')}}">
            <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
              <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">@lang('texts.we-are-hiring')</h3>
              <a href="/hr" class="btn btn-white rounded-pill mb-0 text-nowrap">@lang('texts.readmore')</a>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.basic-slider -->
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
        <div class="col-lg-4 mt-lg-2">
          <h2 class="fs-15 text-uppercase text-muted mb-3">@lang('texts.featurednews')</h2>
          <p class="lead fs-lg mb-6 pe-xxl-5">@lang('texts.blog-des')</p>
          <a href="/blog" class="btn btn-soft-primary rounded-pill">@lang('texts.readmore')</a>
        </div>
        <!-- /column -->
        <div class="col-lg-8">
          <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "2"}}'>
            @if(isset($featurenews))
            @foreach($featurenews as $data)
            <div class="item">
              <article>
                <figure class="overlay overlay-2 hover-scale rounded mb-5"><a href="/news/{{ $data->id }}"> <img src="{{Voyager::image($data->image)}}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">@lang('texts.readmore')</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="/news/category/{{ $data->category_id }}" class="hover" rel="category">{{ $data->category->name }}</a>
                  </div>
                  <!-- /.post-category -->
                  <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark" href="/news/{{ $data->id }}">{{ $data->getTranslatedAttribute('title') }}</a></h2>
                </div>
                <!-- /.post-header -->
                <div class="post-footer">
                  <ul class="post-meta mb-0">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d-m-Y', strtotime($data->created_at)) }}</span></li>
                    <li class="post-comments"><a href="#"><i class="uil uil-eye"></i>{{$data->view_count}}<span> @lang('texts.views')</span></a></li>
                  </ul>
                  <!-- /.post-meta -->
                </div>
                <!-- /.post-footer -->
              </article>
              <!-- /article -->
            </div>
            @endforeach
            @endif
            <!-- /.item -->
          </div>
          <!-- /.owl-carousel -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
