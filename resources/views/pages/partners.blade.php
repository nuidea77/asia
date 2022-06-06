@extends('layout.main')
@section('content')
<div class="container py-8">
<ul class="nav nav-tabs nav-pills">
    <li class="nav-item ">
      <a class="nav-link active" data-bs-toggle="tab" href="#all">
        @lang('texts.partnertype1')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#drugs">
        @lang('texts.partnertype2')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#medications">
        @lang('texts.partnertype3')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link " data-bs-toggle="tab" href="#Vaccines">
        @lang('texts.partnertype4')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#Orphan">
        @lang('texts.partnertype5')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#Vitamins">
        @lang('texts.partnertype6')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link " data-bs-toggle="tab" href="#Prosthesis">
        @lang('texts.partnertype7')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#uniforms">
        @lang('texts.partnertype8')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#infantfood">
        @lang('texts.partnertype9')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link " data-bs-toggle="tab" href="#baby">
        @lang('texts.partnertype10')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#food">
        @lang('texts.partnertype11')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#medical">
        @lang('texts.partnertype12')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link " data-bs-toggle="tab" href="#health">
        @lang('texts.partnertype13')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#abuse">
        @lang('texts.partnertype14')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#contrast">
        @lang('texts.partnertype15')
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-bs-toggle="tab" href="#parenteral">
        @lang('texts.partnertype16')
      </a>
    </li>
  </ul>
  <!-- /.nav-tabs -->

  <div class="tab-content">

    <div class="tab-pane fade show active" id="all">

    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-6 gx-lg-6 gy-6 justify-content-center">
                @if(isset($partners))
                @foreach($partners as $data)
                <div class="col">
                  <div class="card shadow-lg h-100 align-items-center lift">
                    <div class="card-body align-items-center d-flex px-3  ">
                      <figure class="px-md-3 mb-0 hover-scale"><img src="{{Voyager::image($data->logo)}}" alt="" /></figure>
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
