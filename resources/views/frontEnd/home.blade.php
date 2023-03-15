@extends('layouts.app2')
@section('content')
    		<!-- header-slider-area start -->
		<section class="header-slider-area">
			<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="single-slide-item slide-1">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="single-slide-item-content">
											<h2>obtenez vos certifications  <br> avec nous facilement</h2>
											<p>
											c'est un espace dans lequel vous trouvez les différentes certifications de l'école Polytechnique de sousse.										</p>
											<button  type="button" class="slide-btn">
												<a href="/categories">Categories</a>
											</button>
											<button  class="slide-btn">
												<a href="/certif">Certifications</a>
											</button>
											
										</div><!-- /.single-slide-item-content-->
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
					<div class="item">
						<div class="single-slide-item slide-2">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="single-slide-item-content">
											<h2>
											Découvrir  <br> nos différents domaines
											</h2>
											<p>
											IT Specialist,Microsoft Office Specialist,Adobe Certified Professional,FORTINET,... 
											</p>
											<button type="button"  class="slide-btn">
												<a href="/categories">Categories</a>
											</button>
											<button type="button"  class="slide-btn
											">
												<a href="/certif">Certifications</a>
											</button>
										</div><!-- /.single-slide-item-content-->
									
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="lnr lnr-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="lnr lnr-chevron-right"></span>
				</a>
			</div><!-- /.carousel-->

		</section><!-- /.header-slider-area-->
		<!-- header-slider-area end -->
		
		<!--we-do start -->
		<section  class="we-do">
			<div class="container">
				<div class="we-do-details">
					<div class="section-header text-center">
						<h2>Categories</h2>
						<p>
							Découvrez nos categories ! 
						</p>
					</div><!--/.section-header-->
					<div class="we-do-carousel">
						<div class="row">
						@foreach ($categories as $categorie)
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="{{ Voyager::image($categorie->image)}}" alt="image of consultency" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="\categories\{{$categorie->id}}">
													{{$categorie->nom}}
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
											{{$categorie->description}}
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
						@endforeach 
						</div><!--/.row-->
					</div><!--/.we-do-carousel-->
				</div><!--/.we-do-details-->
			</div><!--/.container-->

		</section><!--/.we-do-->
		<!--we-do end-->

		<!--about-us start -->
		<section class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>L'école Polytechnique de Sousse</h2>
									<p>
									Fondée en 2009, L’Ecole Polytechnique de Sousse est une grande école privée d’enseignement et de recherche à vocation internationale, accréditée EUR- ACE et qui a pour unique vocation de former des ingénieurs ayant un niveau technique et scientifique conforme  aux meilleurs  standards internationaux. Elle se fixe résolument comme mission de garantir une excellente insertion professionnelle à ses jeunes diplômés en les propulsant directement  à l’employabilité.
									</p>
									<div class="project-btn">
										<a href="https://www.polytecsousse.tn/"  class="project-view">Afficher plus
										</a>
									</div><!--/.project-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-6">
							<div class="single-about-us">
								<div class="about-us-img">
									<img src="img\Poly-campus.jpg" alt="about images">
								</div><!--/.about-us-img-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->


		<!--statistics start-->
		<section  class="statistics">
			<div class="container">
				<div class="statistics-counter "> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets\images\counter\counter1.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">{{$catesTotal}}</div>
								<h3>Categories</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets\images\counter\counter2.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">{{$cersTotal}}</div>
								<h3>Certifications</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets\images\counter\counter4.png" alt=" counter-icon " />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter"> {{$userTotal}}</div>
								<h3>Utilisateurs</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.statistics-->
		<!--statistics end-->


		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">
				<div class="section-header text-center">
					<h2>
						<span>
						Témoignage
						</span>
					</h2>
				</div><!--/.section-header-->
				<div class="owl-carousel owl-theme" id="testemonial-carousel">
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img\MayssaChebi.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
								Après l'école préparatoire, intégrer une telle école d'ingénieurs m'offrait non seulement une bonne qualité d'études mais aussi une très bonne voie parallèle d'activités sociales, culturelles et scientifiques, ce qui m'as appris l'esprit challengeur et manegeriale. J'étais quasiment certaine d'avoir trouvé un emploi à la hauteur de mes études et mes ambitions à la sortie. Si c'était à refaire, je n'hésiterais pas une seconde... 

								</p>
								<h3>
									<a href="#">
									Developpement and Design Engineer, automobile sector  
									</a>
								</h3>
								<h4>DRAXLMAIER</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img\khaledYoussef.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
								Une école dont je tiens beaucoup. Mes 3 ans au sein de polytechnique m'ont permis de découvrir des competences cachées et dévoiler une autre personne qui je suis aujourd'hui. Une équipe professionnelle et des enseignants qui sont dignes de respect. Je serai toujours reconnaissant et j'espère de tout cœur que le niveau de notre école ne cessera jamais de grimper en fleche. 


								</p>
								<h3>
									<a href="#">
									Gerant d'un nouveau projet qui s'intitule Smart and safe home 
									</a>
								</h3>
								
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img\SafaNaoui.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
								Je suis Safa NAOUI, J'ai étudié pendant 3 ans à l'Ecole Polytechnique de Sousse, où j'ai passé les meilleurs jours de ma vie, avec beaucoup de succès. J'ai assisté à plusieurs formations variées avec des clubs ainsi qu'une compétition internationale à Vienne et des compétitions nationales en Tunisie. Actuellement, juste après l'obtention de mon diplôme en Juin 2017, je travaille en tant qu'ingénieure Informatique dans une grande Société Internationale "Proxym-Group". 

								</p>
								<h3>
									<a href="#">
									Ingénieure Informatique dans une grande Societe Internationale  
									</a>
								</h3>
								<h4>Proxym-Group</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->


		<!--nwes start -->
		<section  class="news">
			<div class="container">
				<div class="news-details">
					<div class="section-header text-center">
						<h2>Nouveaux Certifications</h2>
						<p>
							Ne ratez pas nos nouveaux Certifications! Abonnez Vous!
						</p>
					</div><!--/.section-header-->
					<div class="news-card news-card-pb-25">
							<div class="row">
							@foreach ($certifs as $certif)
								<div class="col-md-4 col-sm-6">
									<div class="single-news-box">
										<div class="news-box-bg">
											<img src="{{ Voyager::image($certif->image)}}" alt="blog image" style="height: 250px;">
											<div class="isotope-overlay">
												<a href="{{url('certif/'.Str::slug($certif->title).'/'.$certif->id)}}">
													<span class="lnr lnr-link"></span>
													
												</a>
											</div>

										</div><!--/.team-box-bg-->
										<div class="news-box-inner">
											<h3>
												<a href="{{url('certif/'.Str::slug($certif->title).'/'.$certif->id)}}">
												{{$certif->title}}  
												</a>
											</h3>
											<p class="news-meta">
											Prix :  <span>{{$certif->price}} DT</span>  -  Depuis <span>{{$certif->created_at}}</span>
											</p>
											<!-- <a href="#" class="learn-btn">
												learn more
											</a> -->
										</div><!--/.news-box-inner-->
									</div><!--/.single-news-box-->
								</div><!--.col-->
							@endforeach 
							</div><!--/.row-->
							<div class="project-btn text-center">
								<a href="/certif"  class="project-view">Lire plus
								</a>
							</div><!--/.project-btn-->
					</div><!--/.news-card-->
					
				</div><!--/news-details-->
			</div><!--/.container-->

		</section><!--/news-->
		<!--news end-->

@endsection
