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
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
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
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('contact.frontend.index') }}" style="padding: 10px 20px;">Contact</a>
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
          <div class="u-custom-menu u-nav-container-collapse">
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
          </div>
        </nav>
      </div></header>
    <section class="u-align-left u-clearfix u-palette-1-base u-section-1" id="carousel_574d">
      <div class="u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-sm u-align-center-xs u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-1" style="background-image: url({{ asset('images/zakibewok.jpg') }})" data-image-width="1600" data-image-height="1600">
              <div class="u-container-layout u-container-layout-1">
                <h1 class="u-text u-text-body-alt-color u-text-1">iT serviceS</h1>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-palette-1-dark-2 u-text-2"> IT professional specializing in PC installation &amp; troubleshooting, Network installation &amp; setting, Applications Development (web, mobile, Ai), Providing the best solutions for all problems in the IT field. Zaki is an IT-man who continues to focus on the development of the IT world.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-palette-1-base u-section-2" id="carousel_97f2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-palette-1-base u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-body-alt-color u-text-1"> where is the solution?</h1>
            <h3 class="u-text u-text-2">
              <span style="font-size: 1.5rem;">Information Technology is a Solutions</span> .
            </h3>
            <p class="u-text u-text-3">Information technology (IT) is the use of any computers, storage, networking and other physical devices, infrastructure and processes to create, process, store, secure and exchange all forms of electronic data. Typically, IT is used in the context of business operations, as opposed to technology used for personal or entertainment purposes. The commercial use of IT encompasses both computer technology and telecommunications.
The Harvard Business Review coined the term information technology to make a distinction between purpose-built machines designed to perform a limited scope of functions, and general-purpose computing machines that could be programmed for various tasks. As the IT industry evolved from the mid-20th century, computing capability increased, while device cost and energy consumption decreased, a cycle that continues today when new technologies emerge.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-dark-2 u-section-3" id="carousel_27a4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            @foreach($services::all() as $service)
            <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
              <div class="u-back-slide" data-image-width="175" data-image-height="174">
                <img class="u-back-image u-expanded" src="{{ asset('images/'.$service->image) }}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1" style="background: #478ac9ab;">
                <h3 class="u-gallery-heading"> {{ $service->name }}</h3>
                <p class="u-gallery-text"> {{ $service->description }} </p>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
        <a href="{{route('service.frontend.index')}}" class="u-align-center u-btn u-button-style u-hover-white u-palette-3-base u-btn-1">See More</a>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0f06"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright @ 2021 IT-MAN</p>
      </div></footer>
  </body>
</html>