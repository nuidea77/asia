@extends('layout.main')
@if(isset($data))
@section('metaShare')
<meta property="og:url"           content="http://www.asiapharma.mn/news/{{ $data->id }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $data->getTranslatedAttribute('title') }}" />
<meta property="og:description"   content="{{ $data->getTranslatedAttribute('excerpt') }}" />
<meta property="og:image"         content="{{ Voyager::image( $data->image ) }}" />
@stop
@section('content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-10 col-xl-8 mx-auto">
          <div class="post-header">
            <div class="post-category text-line">
              <a href="/news/category/{{ $data->category_id }}" class="hover" rel="category">{{ $data->category->name }}</a>
            </div>
            <!-- /.post-category -->
            <h1 class="display-1 mb-4">{{ $data->getTranslatedAttribute('title') }}</h1>
            <ul class="post-meta mb-5">
              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d-m-Y', strtotime($data->created_at)) }}</span></li>
              <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Asiapharma</span></a></li>
              <li class="post-comments"><a href=""><i class="uil uil-eye"></i></i>{{$data->view_count}}<span> @lang('texts.views')</span></a></li>
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
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="blog single mt-n17">
            <div class="card">
              <figure class="card-img-top"><img src="{{Voyager::image($data->image)}}" alt="" /></figure>
              <div class="card-body">
                <div class="classic-view">
                  <article class="post">
                    <div class="post-content mb-5">
                      <p> {!! $data->getTranslatedAttribute('body') !!}</p>
                    </div>
                    <!-- /.post-content -->
                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                      <div>

                      </div>
                      <div class="mb-0 mb-md-2">
                        <div class="dropdown share-dropdown btn-group">
                          <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-share-alt"></i> @lang('texts.share') </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://twitter.com/share?url=http://www.asiapharma.mn/news/{{ $data->id }}"><i class="uil uil-twitter"></i>Twitter</a>
                            <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=http://www.asiapharma.mn/news/{{ $data->id }}"><i class="uil uil-facebook-f"></i>Facebook</a>
                            <a class="dropdown-item" href="https://linkedin.com/shareArticle/?url=http://www.asiapharma.mn/news/{{ $data->id }}"><i class="uil uil-linkedin"></i>Linkedin</a>
                          </div>
                          <!--/.dropdown-menu -->
                        </div>
                        <!--/.share-dropdown -->
                      </div>
                    </div>
                    <!-- /.post-footer -->
                  </article>
                  <!-- /.post -->
                </div>
                <!-- /.classic-view -->


                <hr />
                <h3 class="mb-6">@lang('texts.other')</h3>
                <div class="carousel owl-carousel blog grid-view mb-16" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "2"}}'>
                    @if(isset($recentnews))
                    @foreach($recentnews as $data)
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
                          <h2 class="post-title h3 mt-1 mb-3 text-limit-2-row"><a class="link-dark" href="/news/{{ $data->id }}">{{ $data->getTranslatedAttribute('title') }}</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                          <ul class="post-meta mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d-m-Y', strtotime($data->created_at)) }}</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-eye"></i>{{$data->view_count}} <span> @lang('texts.views')</span></a></li>
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                      </article>
                      <!-- /article -->
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- /.owl-carousel -->
                <hr />


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
  @endif
