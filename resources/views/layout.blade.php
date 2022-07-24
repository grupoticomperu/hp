<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <!-- Site Title-->
    <title>@yield('title')</title>
  
  <META name="title" content="@yield('meta-title','Diseño de Páginas web, Desarrollo de páginas web') ">
	<META charset="utf-8" name="description" content="@yield('meta-description','Este es el Blog de TICOM')">
  <META name="keywords" content="@yield('keywords','Diseño de Páginas web, Desarrollo de páginas web')">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="{{ Storage::disk("s3")->url($configurations->icon) }}" type="/image/x-icon">
    <!-- Stylesheets-->
   {{--  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:300,400,700%7COpen+Sans:300,400,700,900%7CLato:900"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css">
	@stack('styles')
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page Loader-->
    
    <div id="page-loader">
      <div class="page-loader-body"><img src="{{ Storage::disk("s3")->url($configurations->logo) }}" alt="TICOM diseño de pagins web" width="178" height="46"/>
        <div class="cssload-wrapper">
          <div class="cssload-border">
            <div class="cssload-whitespace">
              <div class="cssload-line"></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="page">

      <!-- Page Header & menu-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="74px" data-lg-stick-up-offset="66px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside rd-navbar-content-outer">
                <div class="rd-navbar-content__toggle rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                <div class="rd-navbar-content">
                  <ul class="rd-navbar-content__list">
                    <li><span class="icon icon-sm icon-darker fl-bigmug-line-headphones32"></span>
                      <dl class="list-terms-inline">
                        <dt>24/7 soporte</dt>
                        <dd><a href="tel:#">{{$configurations->telephono }}</a></dd>
                      </dl>
                    </li>
                    <li><span class="icon icon-xs-2 icon-darker fl-bigmug-line-email64"></span>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a href="mailto:{{ $configurations->telephono }}">{{ $configurations->email }}</a></dd>
                      </dl>
                    </li>
                    <li><span class="icon icon-sm icon-darker fl-bigmug-line-chat55"></span>
                      <dl class="list-terms-inline">
                        <dt>Social Media</dt>
                        <dd>
                          <ul class="list-inline list-inline-xs">
                            <li><a class="icon icon-gray-dark icon-style-brand fa fa-facebook" href="{{ $configurations->facebook }}"></a></li>
                 {{--            <li><a class="icon icon-gray-dark icon-style-brand fa fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-gray-dark icon-style-brand fa fa-google-plus" href="#"></a></li>
                            <li><a class="icon icon-gray-dark icon-style-brand fa fa-pinterest-p" href="#"></a></li> --}}
                          </ul>
                        </dd>
                      </dl>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="/">
                      <div class="brand__name"><img class="brand-logo-dark" src="{{ Storage::disk("s3")->url($configurations->logo) }}" alt="Hosting Peru" width="178" height="46"/><img class="brand-logo-light" src="{{ Storage::url($configurations->logo) }}" alt="" width="178" height="46"/>
                      </div></a></div>
                </div>
                <!-- RD Navbar Nav Wrap-->
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
    
				          	<li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/">Inicio</a>
                    <li class="{{ request()->is('nosotros') ? 'active' : ''}}"><a href="{{ route('about.index') }}">Nosotros</a>
                    </li>
                    <li><a href="#">Soluciones Web</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        @foreach ( $subcategories as $subcategory)
                        <li><a href="{{ route('sucategoryservices.show', $subcategory)}}">{{ $subcategory->name}}</a></li>
                        @endforeach
                        
              
                      </ul>
                    </li>


            <li><a href="#">Hosting</a>
						<!-- RD Navbar Dropdown-->
              <ul class="rd-navbar-dropdown">
                @foreach ( $subcategoriesd as $subcategory)
                <li><a href="{{ route('sucategoryhosting.show', $subcategory)}}">{{ $subcategory->name}}</a></li>
                @endforeach
                
              </ul>
					  </li>

                    <li><a href="{{ route('pages.blog') }}">Blog</a>
                      <!-- RD Navbar Dropdown-->
         
                    </li>
          
           
                    <li class="{{ request()->is('contactenos') ? 'active' : ''}}"><a href="{{ route('pagecontacs.index') }}">Contactenos</a>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>


	  @yield('contenido')


	  <!-- Fin Page Header & menu-->

      <!-- Slider-->
   

	 

      <!-- Page Footer-->
      <footer class="section footer-modern context-dark">
        <div class="footer-modern__main bg-gray-3">
          <div class="container">



<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "310743828941718");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>





            <div class="row row-50 justify-content-sm-center justify-content-md-start justify-content-lg-between">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <p class="custom-heading-3">TICOM</p>
                <p class="ls-05">{{ $configurations->description }}</p><a class="button button-primary button-ujarak" href="{{ route('abouts.index')}}">ver más</a>
              </div>
              <div class="col-sm-6 col-md-4 col-xl-3">
                <p class="custom-heading-3">Contacte con Nosotros</p>
                <dl class="list-terms-block">
                  <dt>Soporte 24\7 </dt>
                  <dd><a class="link-md" href="tel:#">{{ $configurations->telephono }}</a></dd>
                </dl>
                <dl class="list-terms-block">
                  <dt>E-mail</dt>
                  <dd><a href="mailto:{{ $configurations->email }}">{{ $configurations->email }}</a></dd>
                </dl>
                <dl class="list-terms-block">
                  <dt>Socials</dt>
                  <dd>
                    <ul class="list-inline list-inline-xxs">
                      <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-facebook" href="{{ $configurations->facebook }}"></a></li>
          {{--             <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-instagram" href="#"></a></li> --}}
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-md-4">
                <p class="custom-heading-3">Nuestros Servicios</p>
                <div class="row row-5">
                  <div class="col-sm-6 col-md-12 col-lg-6">
                    <ul class="list-1">
                      <li><a href="about.html">Nosotros</a></li>
                      <li><a href="services.html">Dominios</a></li>
                      <li><a href="blog.html">Hosting Linux</a></li>
                      <li><a href="our-team.html">Hosting Windows</a></li>
                      <li><a href="single-service.html">Hosting Nube</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-12 col-lg-6">
                    <ul class="list-1">
                      <li><a href="grid-gallery.html">Diseño web</a></li>
                      <li><a href="faq.html">Ecommerce</a></li>
                      <li><a href="pricing-tables.html">Sistemas Web</a></li>
                      <li><a href="pricing-tables.html">Markrting</a></li>
                      <li><a href="contact-us.html">Posicionamiento</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-default__aside bg-gray-5">
          <div class="container">
            <div class="footer-default__aside-inner">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span> TICOM WEB</span><span>. Todos los derechos reservados</span></p><a href="#">Profesionales en Diseño Web</a>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="/js/core.min.js"></script>
    <script src="/js/script.js"></script>
	@stack('scripts')
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</body>
</html>
