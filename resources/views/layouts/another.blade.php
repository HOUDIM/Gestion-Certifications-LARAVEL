<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Certify</title>
  
    
  
    

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
     //<link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
     integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
     crossorigin="anonymous">
     </script>
     <script defer
     src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-
     6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
     crossorigin="anonymous">
     </script>
  
</head>

<body>

  <div id="preloader">
    <div class="mosh-preloader"></div>
  </div>

  <header class="header_area clearfix">
    <div class="container-fluid h-100">
      <div class="row h-100">

        <div class="col-12 h-100">
          <div class="menu_area h-100">
            <nav class="navbar h-100 navbar-expand-lg align-items-center">

              <a class="navbar-brand" href={% url 'pages:home' %}><img src="{% static 'img/core-img/whitelogo2.png' %}" alt="logo"></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar"
                aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                  class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                <ul class="navbar-nav animated" id="nav">
                  <li class="nav-item"><a class="nav-link" href="{% url 'pages:home' %}">Accueil</a></li>
                  <li class="nav-item"><a class="nav-link" href="{% url 'pages:aboutus' %}">Mon profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="{% url 'pages:ourteam' %}">Mes certificats</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Catégories</a>
                    <div class="dropdown-menu" aria-labelledby="moshDropdown">
                      <a class="dropdown-item" href="index-2.html">Home</a>
                      <a class="dropdown-item" href="about.html">About Us</a>
                      <a class="dropdown-item" href="services.html">Services</a>
                      <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="contact.html">Contact</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="elements.html">Elements</a>
                    </div>
                  </li>

                </ul>
                
                <div class="login-register-btn">
                    <a href="#">Login</a>
                    <a href="#">/ s'inscrire</a>
                  </div>
                

            
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

    <main class="py-4">
        @yield('content')
    </main>

<footer class="footer-area clearfix">

    <div class="top-footer-area section_padding_100_0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-footer-widget mb-100">
              <a href="#" class="mb-50 d-block"><img src="{% static 'img/core-img/w.png' %}" alt=""></a>
              <p><b>Certify</b> est un site web educatif qui propose à ses abonnés des certifications bien reconnues
                dans plusieurs domaines pour les aider à booster leurs CV pour mieux 
                s'integrir dans la vie professionnelle. </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-footer-widget mb-100">
              <h5>Liens utiles</h5>
              <ul>
                <li><a href="/">Home</a></li>
                <li><a target="_blank" href="https://www.who.int/fr/news-room/fact-sheets/detail/cardiovascular-diseases-(cvds)">OMS</a></li>
                <li><a target="_blank" href="http://www.santetunisie.rns.tn/images/thes-rapport019.pdf">Minsitère de la santé tunisienne</a></li>
                <li><a target="_blank" href="https://fr.wikipedia.org/wiki/Maladie_cardiovasculaire#:~:text=Une%20maladie%20cardiovasculaire%2C%20ou%20maladie,poitrine%20ou%20encore%20des%20infarctus.">Wikipedia</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-footer-widget mb-100">
              <h5>Blog</h5>
              
                <div class="footer-single--blog-post">
                  <a href="" class="blog-post-date">
                    <p>time</p>
                  </a>
                  <a class="blog-post-title">
                    <h6>title</h6>
                  </a>
                </div>
              
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-footer-widget mb-100">
              <h5>Contact Info</h5>
              <div class="footer-single-contact-info d-flex">
                <div class="contact-icon">
                  <img src="{% static 'img/core-img/xmap.png.pagespeed.ic.UJ3m8aoIxQ.png' %}" alt="">
                </div>
                <p> <br> </p>
              </div>
              <div class="footer-single-contact-info d-flex">
                <div class="contact-icon">
                  <img src="{% static 'img/core-img/xcall.png.pagespeed.ic.vfATYava-H.png' %}" alt="">
                </div>
                <p> Mobile: +216 92 604 965 <br> </p>
              </div>
              <div class="footer-single-contact-info d-flex">
                <div class="contact-icon">
                  <img src="{{ asset('img/core-img/xmessage.png.pagespeed.ic.uIpaeT9HRg.png') }}" alt="">
                </div>
                <p>contact.coradash@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom-area">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 h-100">
            <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
              <div class="copyright-text">
                <p>
                  Copyright &copy;
                  
                  <script>document.write(new Date().getFullYear());</script> All rights reserved


                </p>
              </div>
              <div class="footer-social-info">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer> 

<script src="{% static 'js/jquery-2.2.4.min.js' %}"></script>

<script src="{% static 'js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.1Iw0nuDwWt.js' %}"></script>
<script>eval(mod_pagespeed_0MpG0ohpPO);</script>

<script>eval(mod_pagespeed_Z6hERLbsPa);</script>

<script src="{% static 'js/plugins.js' %}"></script>

<script src="{% static 'js/active.js' %}"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>





</html>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Certify</title>
  
    
  
    

     <!-- Scripts -->
     <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>

     <script src="{{ asset('js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.1Iw0nuDwWt.js') }}"></script>
     <script>eval(mod_pagespeed_0MpG0ohpPO);</script>
     
     <script>eval(mod_pagespeed_Z6hERLbsPa);</script>
     
     <script src="{{ asset('js/plugins.js') }}"></script>
     
     <script src="{{ asset('js/active.js') }}"></script>
     
     
     <script>
       window.dataLayer = window.dataLayer || [];
       function gtag() { dataLayer.push(arguments); }
       gtag('js', new Date());
     
       gtag('config', 'UA-23581568-13');
     </script>
     
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
    
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
     integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
     crossorigin="anonymous">
     </script>
     <script defer
     src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-
     6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
     crossorigin="anonymous">
     </script>
  
</head>
<body>
  
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
          <div class="row h-100">
    
            <div class="col-12 h-100">
              <div class="menu_area h-100">
                <nav class="navbar h-100 navbar-expand-lg align-items-center">
    
                  <a class="navbar-brand" href=""><img src="" alt="logo"></a>
    
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar"
                    aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                      class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                    <ul class="navbar-nav animated" id="nav">
                      <li class="nav-item"><a class="nav-link" href="">Accueil</a></li>
                      <li class="nav-item"><a class="nav-link" href="">Mon profil</a></li>
                      <li class="nav-item"><a class="nav-link" href="">Mes certificats</a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Catégories</a>
                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                          <a class="dropdown-item" href="index-2.html">Home</a>
                          <a class="dropdown-item" href="about.html">About Us</a>
                          <a class="dropdown-item" href="services.html">Services</a>
                          <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                          <a class="dropdown-item" href="blog.html">Blog</a>
                          <a class="dropdown-item" href="contact.html">Contact</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="elements.html">Elements</a>
                        </div>
                      </li>
    
                    </ul>
                    
                    <div class="login-register-btn">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="#">/ s'inscrire</a>
                            @endif

                        @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest


                    </div>
                    
    
                
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    </header>
    <section class="welcome_area clearfix" id="home" style="height:1200;background-image:url({{url('img/welcome-bg2.png')}});">

    </section>
</body>
</html>
