<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		
        <!-- TITLE OF SITE -->
        <title>PolyCertif</title>

        <!-- for title img -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/logo/favicon.png') }}"/>
       
        <!--font-awesome.min.css') }}-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
		
		<!--linear icon css-->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		
	
        <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
		
		<!--vedio player css-->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

		<!--owl.carousel.css'-->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>


        <!--bootstrap.min.css') }}-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- bootsnav -->
		<link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet"/>	
        
        <!--style.css'-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
        <!--responsive.css') }}-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		
		
		
		<!--header start-->
		<section class="header">
			<div class="container">	
				<div class="header-left">
					<ul class="pull-left">
						<li>
							<a >
								<i class="fa fa-phone" aria-hidden="true"></i> (+216) 99 277 877 - (+216) 96 277 877

							</a>
						</li><!--/li-->
						<li>
							<a >
								<i class="fa fa-envelope" aria-hidden="true"></i>contact@polytecsousse.tn
							</a>
						</li><!--/li-->
					</ul><!--/ul-->
				</div><!--/.header-left -->
				<div class="header-right pull-right">
					<ul>
						<li class="reg">
						@if(Auth::check())
						<form action="{{ route('logout') }}" method="POST">
							{{ csrf_field() }}
							<button type="submit" class="reg" style="    background: transparent; border: none;">Logout</button>
						</form>
						@else
						<a href="/register" >
								Register
							</a>
								/
							<a href="/login">
								Log in
							</a>
						@endif
							
							
							
						</li><!--/li -->
						<li>
							<div class="social-icon">
								<ul>
									<li><a href="https://www.facebook.com/EcolePolytechniqueSousse"><i class="fa fa-facebook"></i></a></li>
									
									<li><a href="https://www.linkedin.com/company/ecole-polytechnique-sousse/"><i class="fa fa-linkedin"></i></a></li>
									
								</ul><!--/.ul -->
							</div><!--/.social-icon -->
						</li><!--/li -->
					</ul><!--/ul -->
				</div><!--/.header-right -->
			</div><!--/.container -->	

		</section><!--/.header-->	
		<!--header end-->
		
		<!--menu start-->
		<section id="menu">
			<div class="container">
				<div class="menubar">
					<nav class="navbar navbar-default">
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/">
								<h1 style="color:#fff;margin-top: -10px;"> <b>PolyCertif</b> </h1>
							</a>
						</div><!--/.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="/">Acceuil</a></li>
								
								<li><a href="/categories">Categories</a></li>
								<li><a href="/certif">Certifications</a></li>
								@if(Auth::check())
								<li><a href="/profile">Profile</a></li>
								@endif								
								<li><a >Contact</a></li>
								
								
							</ul><!-- / ul -->
						</div><!-- /.navbar-collapse -->
					</nav><!--/nav -->
				</div><!--/.menubar -->
			</div><!-- /.container -->

		</section><!--/#menu-->
		<!--menu end-->
		
        @yield('content')
		
		<!--hm-footer start-->
		<section class="hm-footer">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title ">
									<div class="logo">
										<a href="/">
											
											<h1 style="color:#fff;margin-top: -10px;"> <b>PolyCertif</b> </h1>
										</a>
									</div><!-- /.logo-->
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
									c'est un espace dans lequel vous trouvez les différentes certifications de l'école Polytechnique de sousse.
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="https://www.facebook.com/EcolePolytechniqueSousse"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
										
										<li><a href="https://www.linkedin.com/company/ecole-polytechnique-sousse/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
										
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-2 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Liens utiles</h4>
								</div><!--/.hm-foot-title-->
								<div class="footer-menu ">	  
									<ul class="">
										<li><a href="/" >acceuil</a></li>
										
										<li><a href="/categories">Categories</a></li>
										<li><a href="/certif">Certifications</a></li>
										@if(Auth::check())
										<li><a href="/profile">Profile</a></li>
										@endif
										<li><a >Contact</a></li> 
									</ul>
								</div><!-- /.footer-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4></h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-para-news">
									<a href="">
										
									</a>
									<span></span>
								</div><!--/.hm-para-news-->
								<div class="footer-line">
									<div ></div>
								</div>
								<div class="hm-para-news">
									<a href="">
										
									</a>
									<span></span>
								</div><!--/.hm-para-news-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4> Notre Newsletter</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p class="para-news">
									Abonnez-vous à notre newsletter pour recevoir les dernières nouvelles et offres.
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Addresse Email">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<button type="button" >OK</button>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->
			</div><!--/.container-->

		</section><!--/.hm-footer-details-->
		<!--hm-footer end-->
		
		<!-- footer-copyright start -->
		<footer class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="foot-copyright pull-left">
							<p>
								&copy; All Rights Reserved. Developed by
							 	<a href="https://www.facebook.com/profile.php?id=100073964132304">Khouloud DIMASSI</a>
								 &
								<a href="https://www.facebook.com/houssem.dimassi.5"> Houssem DIMASSI</a>
							</p>
						</div><!--/.foot-copyright-->
					</div><!--/.col-->
					<div class="col-sm-5">
						<div class="foot-menu pull-right
						">	  
							
						</div><!-- /.foot-menu-->
					</div><!--/.col-->
				</div><!--/.row-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->



		<!-- jaquery link -->

		<script src="{{ asset('assets/js/jquery.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		
		<!--bootstrap.min.js-->
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		
		<!-- bootsnav js -->
		<script src="{{ asset('assets/js/bootsnav.js') }}"></script>
		
		<!-- for manu -->
		<script src="{{ asset('assets/js/jquery.hc-sticky.min.js') }}" type="text/javascript"></script>

		
		<!-- vedio player js -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js') }}"></script>

        <!--owl.carousel.js-->
        <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		
		<!-- counter js -->
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
		
        <!--Custom JS-->
        <script type="text/javascript" src="{{ asset('assets/js/jak-menusearch.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
		

    </body>
	
</html>



