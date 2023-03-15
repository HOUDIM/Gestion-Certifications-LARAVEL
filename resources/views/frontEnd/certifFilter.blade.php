@extends('layouts.app2')
@section('content')
		
		

		<!--nwes start -->
		<section  class="news">
			<div class="container">
				<div class="news-details">
                    <div class="section-header text-center">
                        
						<h2>{{$cat}} certifications</h2>
						<br><br>
					</div><!--/.section-header-->
                    
					
					<div class="news-card">
						<div class="row">

                        <div class="col-md-12">
								<div class="blog-left">

                                <div class="news-card news-card-pb-25">
                                    <div class="row">
                                    @foreach ($certifs as $certif)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-news-box">
                                                <div class="news-box-bg" style=" min-height: 0;">
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
					</div><!--/.news-card-->
							</div><!--/.col-->

						</div><!--/.row-->
                        <div class="row">

                        </div>
					</div><!--/.news-card-->
					
				</div><!--/news-details-->
			</div><!--/.container-->

		</section><!--/news-->
		<!--news end-->


@endsection