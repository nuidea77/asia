@extends('layout.main')
@section('content')
<section class="wrapper image-wrapper bg-image bg-full bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('assets/img/9.webp')}}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3 text-white">@lang('texts.corporation-intro')</h1>

          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
<section class="wrapper bg-light">
    <div class="container py-7 py-md-8">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-6 position-relative order-lg-2">
            <figure class="rounded hover-scale"><img src="{{asset('assets/img/8.webp')}}"  alt=""></figure>
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
                <img src="{{asset('assets/img/zorilgo.svg')}}" class="svg-inject icon-svg icon-svg-md hover-scale text-yellow mb-3" alt="" />
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
                <img src="{{asset('assets/img/zorilt.svg')}}" class="svg-inject icon-svg hover-scale icon-svg-md text-red mb-3" alt="" />
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
                <img src="{{asset('assets/img/haraa.svg')}}" class="svg-inject hover-scale icon-svg icon-svg-md text-green mb-3" alt="" />
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
  <section class="cd-horizontal-timeline container">
    <div class="section-title">

      <h2 class="text-center pb-5 fs-15 text-uppercase text-muted mb-3">@lang('texts.our-history-achievement')</h2>
    </div>
    <div class="timeline">
      <div class="events-wrapper">
        <div class="events">
          <ol>
            <li><a href="#0" data-date="01/01/2002" class="selected">2002</a></li>
            <li><a href="#0" data-date="01/01/2003">2003</a></li>
            <li><a href="#0" data-date="01/01/2004">2004</a></li>
            <li><a href="#0" data-date="01/01/2005">2005</a></li>
            <li><a href="#0" data-date="01/01/2006">2006</a></li>
            <li><a href="#0" data-date="01/01/2007">2007</a></li>
            <li><a href="#0" data-date="01/01/2008">2008</a></li>
            <li><a href="#0" data-date="01/01/2009">2009</a></li>
            <li><a href="#0" data-date="01/01/2010">2010</a></li>
            <li><a href="#0" data-date="01/05/2010">2010</a></li>
            <li><a href="#0" data-date="01/01/2011">2011</a></li>
            <li><a href="#0" data-date="01/01/2012">2012</a></li>
            <li><a href="#0" data-date="01/05/2012">2012</a></li>
            <li><a href="#0" data-date="01/01/2013">2013</a></li>
            <li><a href="#0" data-date="01/05/2013">2013</a></li>
            <li><a href="#0" data-date="01/01/2014">2014</a></li>
            <li><a href="#0" data-date="01/05/2014">2014</a></li>
            <li><a href="#0" data-date="01/01/2015">2015</a></li>
            <li><a href="#0" data-date="01/05/2015">2015</a></li>
            <li><a href="#0" data-date="01/01/2016">2016</a></li>
            <li><a href="#0" data-date="01/05/2016">2016</a></li>
            <li><a href="#0" data-date="01/01/2017">2017</a></li>
            <li><a href="#0" data-date="01/01/2018">2018</a></li>
            <li><a href="#0" data-date="01/05/2018">2018</a></li>
            <li><a href="#0" data-date="01/01/2019">2019</a></li>
            <li><a href="#0" data-date="01/01/2020">2020</a></li>
          </ol>

          <span class="filling-line" aria-hidden="true"></span>
        </div> <!-- .events -->
      </div> <!-- .events-wrapper -->

      <ul class="cd-timeline-navigation">
        <li><a href="#0" class="prev1 inactive">Prev</a></li>
        <li><a href="#0" class="next1">Next</a></li>
      </ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->

    <div class="events-content">
      <ol>

        <li class="selected" data-date="01/01/2002">
            <h4>@lang('texts.our-history')</h4>
          <em>2002</em>
            <p>@lang('texts.2002h')</p>
        </li>

        <li data-date="01/01/2003">
            <h4>@lang('texts.our-history')</h4>
          <em>2003</em>
          <p>
           @lang('texts.2003h')
          </p>
        </li>

        <li data-date="01/01/2004">
            <h4>@lang('texts.our-history')</h4>
          <em>2004 он</em>
          <p>@lang('texts.2004h')</p>
        </li>

        <li data-date="01/01/2005">
            <h4>@lang('texts.our-history')</h4>
          <em>2005</em>
          <p>@lang('texts.2005h')	</p>
        </li>

        <li data-date="01/01/2006">
            <h4>@lang('texts.our-history')</h4>
          <em>2006</em>
          <p>
           @lang('texts.2006h')</p>
        </li>

        <li data-date="01/01/2007">
            <h4>@lang('texts.our-history')</h4>
          <em>2007</em>
          <p>@lang('texts.2007h')</p>
        </li>

        <li data-date="01/01/2008">
            <h4>@lang('texts.our-history')</h4>
          <em>2008</em>
          <p>	@lang('texts.2008h') </p>
        </li>
        <li data-date="01/01/2009">
            <h4>@lang('texts.our-history')</h4>
          <em>2009 </em>
          <p>	@lang('texts.2009h') </p>
        </li>
        <li data-date="01/01/2010">
            <h4>@lang('texts.our-history')</h4>
          <em>2010 </em>
          <p>@lang('texts.2010h')	</p>
        </li>
        <li data-date="01/01/2011">
            <h4>@lang('texts.our-history')</h4>
          <em>2011 </em>
          <p>	@lang('texts.2011h')</p>
        </li>
        <li data-date="01/01/2012">
            <h4>@lang('texts.our-history')</h4>
          <em>2012 </em>
          <p>	@lang('texts.2012h')</p>
        </li>
        <li data-date="01/01/2013">
            <h4>@lang('texts.our-history')</h4>
          <em>2013 </em>
          <p>	@lang('texts.2013h') </p>
        </li>
        <li data-date="01/01/2014">
            <h4>@lang('texts.our-history')</h4>
          <em>2014</em>
          <p>@lang('texts.2014h')	</p>
        </li>
        <li data-date="01/01/2015">
            <h4>@lang('texts.our-history')</h4>
          <em>2015</em>
          <p>@lang('texts.2015h')	</p>
        </li>
        <li data-date="01/01/2016">
            <h4>@lang('texts.our-history')</h4>
          <em>2016</em>
          <p>@lang('texts.2016h')	</p>
        </li>
        <li data-date="01/01/2017">
            <h4>@lang('texts.our-history')</h4>
          <em>2017</em>
          <p>	@lang('texts.2017h')</p>
        </li>
        <li data-date="01/01/2018">
            <h4>@lang('texts.our-history')</h4>
          <em>2018</em>
          <p>	@lang('texts.2018h') </p>
        </li>
        <li data-date="01/01/2019">
            <h4>@lang('texts.our-history')</h4>
          <em>2019</em>
          <p>	@lang('texts.2019h') </p>
        </li>
        <li data-date="01/01/2020">
            <h4>@lang('texts.our-history')</h4>
          <em>2020</em>
                        <p>@lang('texts.2020h')</p>
        </li>
        <li  data-date="01/05/2010">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2010</em>
          <p>@lang('texts.2010a')	</p>
        </li>

        <li data-date="01/05/2012">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2012</em>
          <p>	@lang('texts.2012a')</p>
        </li>

        <li data-date="01/05/2013">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2013</em>
          <p>@lang('texts.2013a')	</p>
        </li>

        <li data-date="01/05/2014">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2014</em>
          <p>
            @lang('texts.2014a') </p>
        </li>

        <li data-date="01/05/2015">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2015</em>
          <p>	@lang('texts.2015a')
           </p>
        </li>

        <li data-date="01/05/2016">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2016 </em>
          <p>	@lang('texts.2016a')
          </p>
        </li>

        <li data-date="01/05/2018">
            <h4>@lang('texts.our-achievement')</h4>
          <em>2018</em>

          <p>
            @lang('texts.2018a') </p>
        </li>


      </ol>
    </div> <!-- .events-content -->
  </section>

@stop
