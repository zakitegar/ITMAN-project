<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="contact us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Contact.css') }}" media="screen">
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
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="index.php" data-home-page-title="Home" class="u-body"><header class="u-clearfix u-header u-header" id="sec-ec64"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <a href="" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1280">
      <img src="images/logo_itman.jpg" class="u-logo-image u-logo-image-1">
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
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('default') }}" style="padding: 10px 20px;">Home</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('service.frontend.index') }}" style="padding: 10px 20px;">Services</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
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
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-palette-3-base u-section-1" id="sec-166b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-32">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
                      <div class="u-align-left u-form u-form-1">
                        <form action="{{ route('contact.frontend.send') }}" method="POST" name="form">
                            @csrf
                          <div class="u-form-group u-form-name u-form-group-1">
                              <label for="name-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
                              <input type="text" placeholder="Enter your Name" id="name-5a14" name="name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-3-base" required="">
                            </div>
                            <div class="u-form-email u-form-group u-form-group-2">
                              <label for="email-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
                              <input type="email" placeholder="Enter a valid email address" id="email-5a14" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-3-base" required="">
                            </div>
                            <div class="u-form-group u-form-message u-form-group-3">
                              <label for="message-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
                              <textarea placeholder="" rows="4" cols="50" id="message-5a14" name="message" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-3-base" required=""></textarea>
                            </div>
                            <div class="u-align-left u-form-group u-form-submit u-form-group-4">
                              <!-- <a href="contact.php" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Submit</a>
                              <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true"> -->
                              <input type="submit" value="submit">
  
                            </div>
                            <!-- <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                            <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                            <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true"> -->
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-28">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h1 class="u-text u-text-palette-1-base u-text-1">contact us</h1>
                      <div class="u-social-icons u-spacing-38 u-social-icons-1">
                        <a class="u-social-url" target="_blank" href="https://mail.google.com/mail/u/0/#inbox"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-93c3"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-93c3" style="enable-background:new 0 0 512 512;"><g id="_x31_12-gmail_x2C__email_x2C__mail"><g><g><g><rect height="358.87" style="fill:#F1F5F7;" width="357.904" x="77.045" y="76.565"></rect><path d="M256.002,293.738l178.947,141.697v-279.74L256.002,293.738z M256.002,293.738" style="fill:#DCE6EA;"></path><path d="M449.861,76.565h-14.912L256.002,218.26L77.045,76.565H62.134      c-24.693,0-44.737,20.094-44.737,44.858v269.152c0,24.759,20.044,44.859,44.737,44.859h14.911v-279.74l178.957,138.014      l178.947-138.047v279.773h14.912c24.699,0,44.742-20.101,44.742-44.859V121.424C494.604,96.66,474.561,76.565,449.861,76.565      L449.861,76.565z M449.861,76.565" style="fill:#F84437;"></path>
</g>
</g>
</g>
</g></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" title="Instagram" href="https://www.instagram.com/zakitegaralmsyh/"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 32 32" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1270"></use></svg><svg class="u-svg-content" viewBox="0 0 32 32" id="svg-1270" style="enable-background:new 0 0 32 32;"><style type="text/css"> .st0{fill:url(#SVGID_1_);}
	.st1{fill:currentColor;} </style><linearGradient gradientTransform="matrix(1 0 0 -1 0 32)" gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="5.8035" x2="26.1965" y1="-1.6608" y2="33.6608"><stop offset="0" style="stop-color:#FEC053"></stop><stop offset="0.327" style="stop-color:#F2203E"></stop><stop offset="0.648" style="stop-color:#B729A8"></stop><stop offset="1" style="stop-color:#5342D6"></stop>
</linearGradient><path class="st0" d="M4,0h24c2.2,0,4,1.8,4,4v24c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V4C0,1.8,1.8,0,4,0z"></path><path class="st1" d="M21.2,5H10.8C7.6,5,5,7.7,5,10.9v10.2c0,3.2,2.6,5.9,5.8,5.9h10.4c3.2,0,5.8-2.7,5.8-5.9V10.9  C27,7.7,24.4,5,21.2,5z M25,20.9c0,2.2-1.8,4.1-4,4.1H11c-2.2,0-4-1.9-4-4.1v-9.9C7,8.8,8.7,7,11,7h10c2.2,0,4,1.9,4,4.1L25,20.9z"></path><path class="st1" d="M16,10.4c-3.1-0.1-5.7,2.4-5.8,5.5c-0.1,3.1,2.4,5.7,5.5,5.8c3.1,0.1,5.7-2.4,5.8-5.5c0,0,0-0.1,0-0.1  C21.6,12.9,19.1,10.4,16,10.4z M16,19.6c-2,0-3.7-1.6-3.7-3.6s1.6-3.7,3.6-3.7c2,0,3.7,1.6,3.7,3.6c0,0,0,0.1,0,0.1  C19.6,18,18,19.6,16,19.6z"></path><ellipse class="st1" cx="21.8" cy="10" rx="1.2" ry="1.3"></ellipse></svg></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <h6 class="u-text u-text-2">+62 813 - 8668 - 7654&nbsp;</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0f06"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright @ 2021 IT-MAN</p>
      </div></footer>
  </body>
</html>