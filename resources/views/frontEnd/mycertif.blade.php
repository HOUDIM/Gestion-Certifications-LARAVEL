@extends('layouts.app2')
@section('content')


<!--about-part start-->
<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Profile</h2>
					
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

<!--about-history start-->
<div class="about-history" style="padding: 100px 0 90px;">
			<div class="container">
				<div class="about-history-content">
					<div class="row">
						<div class="about-vission-content"  style="padding:0;" >

							<div class="col-md-7 col-sm-12">
								<div class="single-about-history">
									<div class="about-history-txt">
										<h2>{{$me->name}}</h2>
										<p>
										{{$me->email}}
									</p>

										<div class="main-timeline  xtra-timeline">

											<div class="row">
												<div class="col-sm-12">
													<div class="timeline timeline-ml-20">
														
														
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-12">
													
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-12">
													
												</div><!--/.col-->
											</div><!--/.row-->
										</div><!--.main-timeline-->
									</div><!--/.about-history-txt-->
								</div><!--/.single-about-history-->
							</div><!--/.col-->

							<div class="col-md-offset-1 col-md-4 col-sm-12">
								<div class="single-about-history">
									<div class="about-history-img">
										<img src="{{ Voyager::image( $me->avatar ) }}" alt="about">
										
									</div><!--/.about-history-img-->
								</div><!--/.single-about-history-->
							</div><!--/.col-->
						</div><!--/.about-vission-content-->
					</div><!--/.row-->
				</div><!--/.about-history-content-->
			</div><!--/.container-->

		</div><!--/.about-history-->
		<!--about-history end-->

        <!--we-do start -->
		<section  class="we-do">
			<div class="container">
				<div class="we-do-details">
					<div class="section-header text-center">
						<h2>Mes certifications</h2>
					</div><!--/.section-header-->
					<div class="we-do-carousel">
						<div class="row">

						@foreach ($certifs as $certif) 
						<div class="col-md-4 col-sm-6">
							<div class="single-news-box">
								<div class="news-box-bg">
									<img src="{{ Voyager::image($certif->image)}}" alt="blog image">
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
					</div><!--/.we-do-carousel-->
				</div><!--/.we-do-details-->
			</div><!--/.container-->

		</section><!--/.we-do-->
		<!--we-do end-->
		
@endsection