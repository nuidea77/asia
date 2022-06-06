  <header class="wrapper bg-light">
    <div class="bg-primary d-none d-lg-block text-white fw-bold fs-15 ">
      <div class="container  d-md-flex flex-md-row">
        <div class="d-flex flex-row align-items-center">
          <div class="icon text-white fs-20 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
          <address class="mb-0 fs-15">БГД 4-р хороо Ази Товер</address>
        </div>
        <div class="d-flex flex-row align-items-center me-6  ms-auto float-right">
            <div class="icon text-white fs-20 mt-1 me-2"> <i class="uil uil-message"></i></div>
            <p class="mb-0 fs-15 "><a href="mailto:info@asiapharma.mn" class="link-white hover">info@asiapharma.mn</a></p>
          </div>
        <div class="d-flex flex-row align-items-center ">
          <div class="icon text-white fs-20 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
          <p class="text-white mb-0 fs-15"><a href="Tel:+97618001801" class="link-white hover">+976 1800 1801</a></p>
        </div>

      </div>
      <!-- /.container -->
    </div>
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
      <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
          <a href="/">
            <img src="/storage/{{ setting('site.logo') }}" srcset="/storage/{{ setting('site.logo') }}" class="w-20"  alt="" />
          </a>
        </div>
        <div class="navbar-collapse offcanvas-nav">
          <div class="offcanvas-header d-lg-none d-xl-none">
            <a href="/"><img src="/storage/{{ setting('site.logo') }}" srcset="/storage/{{ setting('site.logo') }}" alt="" /></a>
            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
          </div>
          <ul class="navbar-nav">


            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="">@lang('texts.about-us')</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/about">@lang('texts.corporation-intro')</a></li>
                <li class="nav-item"><a class="dropdown-item" href="/teams">@lang('texts.management-team')</a></li>
                <li class="nav-item"><a class="dropdown-item" href="/partners">@lang('texts.partners')</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="">@lang('texts.business-direction')</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="/company/1">@lang('texts.asiapharmadist')</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/company/2">@lang('texts.asiapharmainternational')</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/company/3">@lang('texts.asiapharmatrade')</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/company/4">@lang('texts.asiapharmamed')</a></li>
                </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="/hr">@lang('texts.human-resources')</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/blog">@lang('texts.blog-information')</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="/news/category/3">@lang('texts.information')</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/news/category/4">@lang('texts.blog-suggestions')</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="/news/category/5">@lang('texts.social-responsibility')</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="">@lang('texts.quality-medicine')</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/contact">@lang('texts.contact-us')</a></li>

          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
          <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">


              <li class="nav-item language-select text-uppercase lift">
                <a class="nav-link " href="/setlocale/mn" role="button" ><img class="w-5 hover-scale" src="{{asset('assets/img/mongolia.png')}}" alt=""></a>

              </li>
              <li class="nav-item language-select text-uppercase lift">
                <a class="nav-link " href="/setlocale/en" role="button" ><img class="w-5 hover-scale" src="{{asset('assets/img/united-kingdom.png')}}" alt=""></a>

              </li>

            <li class="nav-item d-lg-none">
              <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->
  </header>
