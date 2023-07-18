@inject('services', 'App\Models\Service')

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="iT serviceS, ​where is the solution?, contact us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen">

    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{ asset('images/logo_itman.jpg') }}"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-ec64"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1280">
          <img src="{{ asset('images/logo_itman.jpg') }}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></symbol></defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('default') }}" style="padding: 10px 20px;">Home</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('service.frontend.index') }}" style="padding: 10px 20px;">Services</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('contact.frontend.index')}}" style="padding: 10px 20px;">Contact</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout ') }} ({{ auth()->user()->name }})
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
          </div>
          <!-- <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Services.html" style="padding: 10px 20px;">Services</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
                </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div> -->
        </nav>
      </div>
    </header>
    <section class="u-align-center u-clearfix u-palette-1-dark-2 u-section-3" id="carousel_27a4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1" style="height: 100%; margin: 93px 0 50px;">
          <div class="u-gallery-inner u-gallery-inner-1">
            <form action="{{ route('service.frontend.order') }}" method="post">
                @csrf
                <div class="row">
                    @foreach($services::all() as $service)
                    <div class="col-md-4">

                        <div class="card mb-3 m-2 h-100">
                            <img src="{{ asset('images/'.$service->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title" style="color: #425465;">{{ $service->name }}</p>
                            </div>
                            <div class="card-footer">
                                <p class="lead" style="color: #425465;"> Rp. {{ number_format($service->price, 2) }} </p>

                                <div class="btn-group" role="group">
                                    <input type="hidden" name="price[{{ $service->id }}]" value="{{ $service->price }}">
                                    <input type="checkbox" name="service_id[{{ $service->id }}]" class="btn-check" id="btncheck{{ $service->id }}" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck{{ $service->id }}">Pilih</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <br>
                </div>
                <button type="submit" class="mt-5 btn btn-primary"> Pesan</button>    
            </form>
            <br>
            <br>
            <br>
            
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0f06"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright @ 2021 IT-MAN</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section> -->
  </body>
</html>