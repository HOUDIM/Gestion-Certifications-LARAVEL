@extends('layouts.app2')
@section('content')

		<!--about-part start-->
		<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>- {{$detail->title}} - </h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->
		<!--nwes start -->
		<section  class="news" style="padding: 0;">
			<div class="container">
				<div class="news-details">
					<div class="news-card">
						<div class="row">

							<div class="col-md-12">
								<div class="blog-left">

									<div class="bl-article-single-txt ">                       
                                        <div class="col-md-7">
                                                <div class="bl-single-head">
                                                    <h3>
                                                        <a href="#">
														{{$detail->title}}
                                                        </a>
                                                    </h3>
                                                    <p>
                                                        Prix :  <span>{{$detail->price}} DT</span>  -  Depuis <span>{{$detail->created_at}}</span>
                                                    </p>
                                                    <div class="project-btn">
										<a href="#"  class="project-view">S'abonner</a>
									</div>  
                                                </div><!--/.bl-single-head-->                                            
                                        </div>
                                        <div class="bl-article-post-img col-md-5">
                                            <a href="blogsinglesideber.html">
                                                <img src="{{ Voyager::image($detail->image)}}" alt="image" />
                                            </a>
                                        </div><!--/.bl-article-post-img-->

									</div><!--/.bl-article-single-txt-->
                                    <div class="col-md-12">
                                    <div class="bl-single-para">
										{!! $detail->description !!}
                                            </div><!--/.bl-single-para-->

                                            
                                    </div>
								</div><!--/.blog-left-->

							</div><!--/.col-->
							<div class="col-md-10" style="margin-top: 50px;">
                            <div  class="comments-area">
											<h3>{{$nbTotal}} comments</h3>
											<ol class="comment-list">
												<li  class="comment">
													@foreach ($comments as $comment)
														<div  class="comment-body xtra-comment-body">
														<div class="comment-meta">
														@foreach ($users as $user)
                                      					  @if($user->id == $comment->user_id)
															<div class="comment-author">
																<img src="{{ Voyager::image( $user->avatar ) }}" alt="image"/>											
															</div><!-- .comment-author -->
															</div><!-- .comment-meta -->
																
															<div class="comment-content">
															<b class="fn">
																<a id="userId" > 
																{{$user->name}}
																<span>{{$comment->created_at}}</span>	
																</a>
																
															</b>
															@endif
														@endforeach
															<div class="reply">
															<button  class="reply"  id="btnReply"  onclick="
                                                var button = document.getElementById('btnReply');
                                                var reply = document.getElementById('replyId');
                                                var comment = document.getElementById('comment');
                                                    comment.placeholder = 'Répondre à un commentaire ';
                                                    reply.value = {{$comment->id}}
                                            "><label for="comment">Repondre</label></button>
															</div>			
															<p>
															{{$comment->text}}
															</p>
														</div><!-- .comment-content -->
														</div><!-- .comment-body -->
													
														<ol class="children">
														<li class="comment">
														@foreach ($reps as $rep)
                                  							  @if($rep->reply == $comment->id)
																<div class="comment-body xtra-comment-body">
																<div class="comment-meta">
																	<div class="comment-author">
																	@foreach ($users as $user)
                                      									  @if($user->id == $rep->user_id)
																		<img src="{{ Voyager::image( $user->avatar ) }}" alt="image"/>
																		</div><!-- .comment-author -->
																		</div><!-- .comment-meta -->
																
																		<div class="comment-content">
																		<b class="fn">
																		<a href="#">
																		{{$user->name}}
																			<span>{{$rep->created_at}}</span>
																		</a>
																		</b>
																		@endif
																	@endforeach
																			
																	<p>
																	{{$rep->text}}
																	</p>
																</div><!-- .comment-content -->
																</div><!-- .comment-body -->
																@endif
															@endforeach
														</li><!-- #comment-## -->
														</ol><!-- .children -->
													@endforeach
												
												</li><!--/.comment-->
											</ol><!--/.comment-list-->

										</div><!--/.comments-area-->

										<div class="contact-form blog-single-form">
											<h3>Laissez-nous un commentaire ici</h3>
											@if(Auth::check())
											<form action="{{url('save-comment/'.Str::slug($detail->title).'/'.$detail->id)}}" method="post">
												@csrf
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<textarea class="form-control" rows="7" id="comment" name="comment" placeholder="Message" ></textarea>
														</div><!--/.form-group-->
													</div><!--/.col-->
												</div><!--/.row-->
												<input type="hidden" id="replyId" name="reply" value="">
												<div class="row">
													<div class="col-sm-12">
														<div class="single-contact-btn">
															<button class="contact-btn" type="submit" role="button">Commenter</button>
														</div><!--/.single-single-contact-btn-->
													</div><!--/.col-->
												</div><!--/.row-->
											</form><!--/form-->
											@endif
											@if(!(Auth::check()))
											<p>Pour Commenter incrivez-vous !!!</p>
											@endif
										</div><!--/.contact-form-->
                            </div>
						</div><!--/.row-->
					</div><!--/.news-card-->
				</div><!--/news-details-->
			</div><!--/.container-->

		</section><!--/news-->
		<!--news end-->
@endsection