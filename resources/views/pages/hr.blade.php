@extends('layout.main')
@section('content')
<section class="wrapper image-wrapper bg-image bg-full bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('assets/img/9.webp')}}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3 text-white">@lang('texts.human-resources')</h1>

          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light wrapper-border">
    <div class="container py-7 py-md-8">
      <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
        <div class="col-md-8 col-lg-6 position-relative">
          <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
          <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
          <figure class="rounded"><img src="{{asset('assets/img/5.webp')}}"  alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5 col-xl-4 offset-lg-1">
          <h2 class="display-6 mb-3">@lang('texts.human-resource-policy')</h2>
          <p class="display-6 fs-15 mb-3">@lang('texts.hr-info-title')</p>
          <p class="mb-6">@lang('texts.hr-info')</p>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-17 py-md-8">
      <h2 class="display-6 mb-3">@lang('texts.careers-selection')</h2>
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4"><span class="number">01</span></span>
          <h4 class="mb-1">@lang('texts.application')</h4>
          <p class="mb-0">@lang('texts.application-info')</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">02</span></span>
          <h4 class="mb-1">@lang('texts.job-interview')</h4>
          <p class="mb-0"> @lang('texts.job-interview-info')</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">03</span></span>
          <h4 class="mb-1">@lang('texts.proficiency-test')</h4>
          <p class="mb-0">@lang('texts.proficiency-test-info').</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">04</span></span>
          <h4 class="mb-1">@lang('texts.decisive-interview')</h4>
          <p class="mb-0">@lang('texts.decisive-interview-info')</p>
        </div>
        <div class="col-md-6 col-lg-2"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">05</span></span>
            <h4 class="mb-1">@lang('texts.job-offer')</h4>
            <p class="mb-0">@lang('texts.job-offer-info')</p>
          </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
	<div class="container py-7 py-md-7">
		<div class="row text-center">
			<div class="col-xl-10 mx-auto">
				<h2 class=" display-6 mb-3fs-15 text-uppercase  mb-3">@lang('texts.careers')</h2>
				<h3 class="fs-15 mb-9 px-xxl-15">@lang('texts.we-are-hiring')</h3>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
		<div class="row gy-6 gx-6 ">
            @if(isset($job))
              @foreach($job as $data)
			<div class="col-md-6 col-lg-4">
				<a href="/jobs/{{$data->id}}" class="card lift">
					<div class="card-body p-5 d-flex flex-row ">
						<div class="align-self-center">
							<span class="avatar bg-green text-white w-11 h-11 fs-20 me-4"><i class="uil uil-user"></i></span>
						</div>
						<div class="py-1">
							<span class="badge bg-pale-blue text-blue rounded py-1 mb-2">{{ $data->salary }}</span>
							<h4 class="mb-1">{{ $data->name }}</h4>
							<p class="mb-0 text-body">{{ date('Y-m-d', strtotime($data->created_at)) }}</p>
						</div>
					</div>
				</a>
			</div>
            @endforeach
            @endif

			<!--/column -->

			<!--/column -->
		</div>
		<!--/.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /section -->

@stop
