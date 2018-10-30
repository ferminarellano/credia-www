@extends('layouts.layout')

@section('title', 'Blog -')

@section('welcomeblog')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url({{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('blogsection')
	<main class="xs-main">
		<!-- blog section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row xs-mb-50">
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal xs-mb-30">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_1.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_1.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">Por Cenaida Moncada</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										18 de mayo de 2019
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="{{ URL::route('blogdetalle') }}">Primera celebración internacional sobre la fascinación por las plantas.</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal  xs-mb-30">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_2.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_2.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Julian</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										02 May 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">South african pre primary school build for children</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal  xs-mb-30">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_3.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_3.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Evan</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										13 January 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Provide pure water for syrian poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal xs-mb-30">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_4.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_4.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Evan</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										27th August 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Brilliant After All, A New Album by Rebecca: Help poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal  xs-mb-30">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_5.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_5.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Revol</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										02 May 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">South african pre primary school build for children</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal  xs-mb-30">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_6.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_6.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Jocky</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										13 January 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Provide pure water for syrian poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_7.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_7.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Kalina</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										27th August 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Brilliant After All, A New Album by Rebecca: Help poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_8.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_8.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Killer</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										02 May 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">South african pre primary school build for children</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_9.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_9.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Miller</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										13 January 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Provide pure water for syrian poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta meta-style-color">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
			</div><!-- .row end -->

			<!-- pagination -->
			<ul class="pagination justify-content-center xs-pagination">
		<li class="page-item disabled">
			<a class="page-link" href="#" aria-label="Previous">
				<i class="fa fa-angle-left"></i>
			</a>
		</li>
		<li class="page-item"><a class="page-link active" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item disabled"><a class="page-link" href="#">...</a></li>
		<li class="page-item"><a class="page-link" href="#">12</a></li>
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<i class="fa fa-angle-right"></i>
			</a>
		</li>
	</ul>		<!-- End pagination -->
		</div><!-- .container end -->
	</section>	<!-- End blog section -->
	</main>
@endsection