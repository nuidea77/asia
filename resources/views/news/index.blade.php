@extends('layout.main')
@section('content')
<section class="wrapper image-wrapper bg-image  bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('assets/img/7.webp')}}">
    <div class="container pt-20 pb-20 py-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3 text-white">@lang('texts.blog-information')</h1>

          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light wrapper-border">
    <div class="container inner py-8">
      <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
        <div class="col-lg-8 align-self-center">
          <div class="blog-filter filter">
            <p>@lang('texts.category'):</p>
            <ul id="navactive">
              <li><a class="" href="/blog">@lang('texts.all')</a></li>
              <li><a  href="/news/category/3">@lang('texts.information')</a></li>
              <li><a  href="/news/category/4">@lang('texts.blog-suggestions')</a></li>
              <li><a  href="/news/category/5">@lang('texts.social-responsibility')</a></li>
            </ul>
          </div>
          <!--/.filter -->
        </div>
        <!--/column -->

        <!-- /column .sidebar -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-12 mx-auto py-8">
          <div class="blog grid grid-view">
            <div class="row isotope gx-md-8 gy-8 mb-8">
                @if(isset($newslist))
                @foreach($newslist as $data)
              <article class="item post col-md-6 col-lg-4">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/news/{{ $data->id }}"> <img src="{{Voyager::image($data->image)}}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">@lang('texts.readmore')</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="/news/category/{{ $data->category_id }}" class="hover" rel="category">{{ $data->category->name }}</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title h3 mt-1 mb-3 text-limit-2-row"><a class="link-dark" href="/news/{{ $data->id }}">{{ $data->getTranslatedAttribute('title') }}</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p class="text-limit-2-row">{{ $data->getTranslatedAttribute('excerpt') }}</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d-m-Y', strtotime($data->created_at)) }}</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-eye"></i>{{$data->view_count}} <span> @lang('texts.views')</span></a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              @endforeach
                    @endif
              <!-- /.post -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.blog -->
          <nav class="d-flex" aria-label="pagination">

            {{ $newslist->render() }}
          </nav>

          <!-- /nav -->
          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

@stop
