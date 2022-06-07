@extends('layout.main')
@section('content')
<section class="wrapper image-wrapper bg-image bg-full bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('assets/img/9.webp')}}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3 text-white">@lang('texts.partners')</h1>

          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
<div class="container py-8">
<ul class="nav nav-tabs nav-pills">
    {{-- @foreach($types as $type)
    <li class="nav-item ">
        <a class="nav-link {{$active == $type ? 'active' : ''}}" href="{{route('partners', ['type' => $type])}}">
          @lang('texts.partnertype1')
        </a>
      </li>
    @endfor --}}
    <li class="nav-item ">
      <a class="nav-link {{$active == null ? 'active' : ''}}" href="{{route('partners')}}">
        @lang('texts.partnertype1')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'drugs' ? 'active' : ''}}" href="{{route('partners', ['type' => 'drugs'])}}">
        @lang('texts.partnertype2')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'drugs' ? 'active' : ''}}"  href="{{route('partners', ['type' => 'medications'])}}">
        @lang('texts.partnertype3')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'Vaccines' ? 'active' : ''}}"  href="{{route('partners', ['type' => 'Vaccines'])}}">
        @lang('texts.partnertype4')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'Orphan' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'Orphan'])}}">
        @lang('texts.partnertype5')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'Vitamins' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'Vitamins'])}}">
        @lang('texts.partnertype6')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'Prosthesis' ? 'active' : ''}}"  href="{{route('partners', ['type' => 'Prosthesis'])}}">
        @lang('texts.partnertype7')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'uniforms' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'uniforms'])}}">
        @lang('texts.partnertype8')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'infantfood' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'infantfood'])}}">
        @lang('texts.partnertype9')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'baby' ? 'active' : ''}} "  href="{{route('partners', ['type' => 'baby'])}}">
        @lang('texts.partnertype10')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'food' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'food'])}}">
        @lang('texts.partnertype11')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'medical' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'medical'])}}">
        @lang('texts.partnertype12')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'health' ? 'active' : ''}}"  href="{{route('partners', ['type' => 'health'])}}">
        @lang('texts.partnertype13')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'abuse' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'abuse'])}}">
        @lang('texts.partnertype14')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'contrast' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'contrast'])}}">
        @lang('texts.partnertype15')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{$active == 'parenteral' ? 'active' : ''}}"   href="{{route('partners', ['type' => 'parenteral'])}}">
        @lang('texts.partnertype16')
      </a>
    </li>
  </ul>
  <!-- /.nav-tabs -->

  <div class="tab-content">

    <div class="tab-pane fade show active" id="all">

    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-6 gx-6 gy-6 justify-content-center">
                @if(isset($partners))
                @foreach($partners as $data)
                <div class="col">
                  <div class="card shadow-lg h-100 align-items-center lift">
                    <div class="card-body align-items-center d-flex px-3">
                      <figure class=" mb-0 hover-scale"><img src="{{Voyager::image($data->logo)}}" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                    <p> <a href="{{ $data->link }}">{{ $data->name }}</a> </p>
                  </div>
                  <!--/.card -->
                </div>
                @endforeach
                @endif

    </div>


  </div>

</div>
  @stop
