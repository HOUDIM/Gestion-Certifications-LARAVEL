@extends('layouts.app2')
@section('content')
<!--about-part start-->
<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Categories</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.html"></a><span></span></li>
								  <li><a href="service.html"></a></li>
								</ol><!--/.breadcrumb-->
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		<!--service start-->
		<section  class="service">
				<div class="container">
					<div class="service-details">
						<div class="section-header text-center">
							<h2>Tous les categories</h2>
							
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
					</div><!--/.service-details-->
				</div><!--/.container-->
				
		</section><!--/.service-->
		<!--service end-->
@endsection