@extends('layout.blogapp')
@section('content')
<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8">Blog Description</h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
  @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif
				<div class="container py-4">
                  @foreach($view as $views)
					<div class="row">
						<div class="col">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post border-0 m-0 p-0">
<div class="post-image ml-0">
										<a href="blog-post.html">
											<img src="img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
										</a>
									</div>

									<div class="post-date ml-0">
										<span class="day">{{$views->created_at->format('d')}}</span>
                                    <?php
// PHP program to convert number to month name

// Declare month number and initialize it
$month_num =$views->created_at->format('m');

// Use mktime() and date() function to
// convert number to month name
$month_name = date("F", mktime(0, 0, 0, $month_num, 10));

// Display month name


?>
										<span class="month">{{$month_name}}</span>
									</div>

									<div class="post-content ml-0">

										<h2 class="font-weight-bold"><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>

										<div class="post-meta">
											<span><i class="far fa-user"></i> By <a href="#">Admin</a> </span>
											<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
											<span><i class="far fa-comments"></i> <a href="#">{{$wordCount}}</a></span>
										</div>

									<?php echo $views->body;?>




										<div class="post-block mt-4 pt-2 post-author">
											<h4 class="mb-3">Author</h4>
											<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
												<a href="blog-post.html">
													<img src="http://bootdey.com/img/Content/user_1.jpg" alt="">
												</a>
											</div>
											<p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
										</div>

<div id="comments" class="post-block mt-5 post-comments">
											<h4 class="mb-3">Comments ({{$wordCount}})</h4>

											<ul class="comments">
                                                @foreach($viewcomment as $viewcomments)

												<li>
													<div class="comment">
														<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
															<img class="avatar" alt="" src="http://bootdey.com/img/Content/user_1.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong style=" text-transform: uppercase;">{{$viewcomments->name_comment}}</strong>

															</span>
															<p>{{$viewcomments->comment_body}}</p>
															<span class="date float-right">{{$viewcomments->created_at->toFormattedDateString()}}</span>
														</div>
													</div>


												</li>

                                              @endforeach
											</ul>

										</div>

										<div class="post-block mt-5 post-leave-comment">
											<h4 class="mb-3">Leave a comment</h4>

											<form id="contactForm" class="contact-form p-4 rounded bg-color-grey" action="{{url('postcomment',$views->id)}}" method="POST">
                                                @csrf
												<div class="p-2">
													<div class="form-row">
														<div class="form-group col-lg-4">
															<label class="required font-weight-bold text-dark">Full Name</label>
															<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
														</div>
														<div class="form-group col-lg-4">
															<label class="required font-weight-bold text-dark">Email Address</label>
															<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
														</div>
                                                        		<div class="form-group col-lg-4">
															<label class="required font-weight-bold text-dark">Website Address</label>
															<input type="text" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="url" id="email" required="">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="required font-weight-bold text-dark">Comment</label>
															<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="comment_body" id="message" required=""></textarea>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col mb-0">
															<input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
														</div>
													</div>
												</div>
											</form>
										</div>

									</div>
								</article>

							</div>
						</div>
					</div>
@endforeach
				</div>

			</div>
@endsection
