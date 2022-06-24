<?php
/*Template Name: Home*/
get_header();
 ?>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-featured-sec">
							<div class="new-slide-3">
								<img src="<?php echo get_field('banner_image'); ?>">
							</div>
							<div class="job-search-sec">
								<div class="job-search">
									<h3><?php echo get_field('title'); ?></h3>
									<span><?php echo get_field('content'); ?></span>
									
									<div class="or-browser">
										<span>Browse job offers by</span>
										<a href="#" title="">Category</a>
									</div>
								</div>
							</div>
							<div class="scroll-to">
								<a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="scroll-here">
		<div class="block">
			<div class="container">
				<div class="row my-4">
					<div class="col-md-6 card-space">
						<div class="card">
                       <div class="face front">
						<i class="fa fa-bullseye" aria-hidden="true"></i>
							<h1>Mission Statement</h1>
						</div>
						<div class="face back">
							<p>A mission statement is a short summary of an organization’s core purpose, focus, and aims. This usually includes a brief description of what the organization does and its key objectives.</p>
						</div>
						</div>
					</div>
					<div class="col-md-6 card-space">
						<div class="card">
                        <div class="face front">
							<i class="fa fa-low-vision" aria-hidden="true"></i>
							<h1>Vision Statement</h1>
						</div>
						<div class="face back">
							<p>A vision statement is a short description of an organization’s aspirations and the wider impact it aims to create. It should be a guiding beacon to everyone within the organization and something which underpins internal decision-making and determines the intended direction of the organization.</p>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mt-4">
						<div class="heading">
							<h2>Images</h2>
						</div><!-- Heading -->
					</div>
				</div>
				<div class="row mb-4 image-setion mb-5">



				<div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img class="d-block w-100" src="http://13.233.86.123/projects/wordpress/globhunter/wp-content/themes/globhunter/images/resource/b1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-100" src="http://13.233.86.123/projects/wordpress/globhunter/wp-content/themes/globhunter/images/resource/b2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-100" src="http://13.233.86.123/projects/wordpress/globhunter/wp-content/themes/globhunter/images/resource/b1.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
					<div class="col-md-6">
						<div class="manage-margin">
						<div class="heading text-left ml-4">
							<h2>Popular Categories</h2>
						</div>
						<ul class="sub-heading ml-4">
							<li>
								<b>Lorem, ipsum dolor.</b>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor.</p>
							</li>
							<li>
								<b>Lorem, ipsum dolor.</b>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor.</p>
							</li>
							<li>
								<b>Lorem, ipsum dolor.</b>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor.</p>
							</li>
						</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Popular Categories</h2>
							<span>37 jobs live - 0 added today.</span>
						</div><!-- Heading -->
						<div class="cat-sec">
							<div class="row no-gape">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-bullhorn"></i>
											<span>Design, Art & Multimedia</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-graduation-cap"></i>
											<span>Education Training</span>
											<p>(6 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-line-chart "></i>
											<span>Accounting / Finance</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-users"></i>
											<span>Human Resource</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="cat-sec">
							<div class="row no-gape">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-phone"></i>
											<span>Telecommunications</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-cutlery"></i>
											<span>Restaurant / Food Service</span>
											<p>(6 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-building"></i>
											<span>Construction / Facilities</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-user-md"></i>
											<span>Health</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Browse All Categories</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block double-gap-top double-gap-bottom">
			<div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text-block">
							<h3>Make a Difference with Your Online Resume!</h3>
							<span>Your resume in minutes with JobHunt resume assistant is ready!</span>
							<a href="#" title="">Create an Account</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					
				 	<div class="col-lg-12 column">
				
						 <div class="job-list-modern">
						 	<div class="job-listings-sec no-border">
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l1.png" alt="" /> </div>
										<h3><a href="#" title="">Web Designer / Developer</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is ft">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div>
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l2.png" alt="" /> </div>
										<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is pt ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l3.png" alt="" /> </div>
										<h3><a href="#" title="">Regional Sales Manager South</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is ft ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l4.png" alt="" /> </div>
										<h3><a href="#" title="">Marketing Dairector</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is ft ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l5.png" alt="" /> </div>
										<h3><a href="#" title="">Application Developer</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is pt ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l6.png" alt="" /> </div>
										<h3><a href="#" title="">Social Media and Public</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is fl ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l2.png" alt="" /> </div>
										<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is pt ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l3.png" alt="" /> </div>
										<h3><a href="#" title="">Regional Sales Manager South</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is ft ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l4.png" alt="" /> </div>
										<h3><a href="#" title="">Marketing Dairector</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is ft ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
								<div class="job-listing wtabs">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/resource/l5.png" alt="" /> </div>
										<h3><a href="#" title="">Application Developer</a></h3>
										
										<!-- <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div> -->
									</div>
									<div class="job-style-bx">
										<a href="#"><span class="job-is pt ">Apply Now</span></a>
										
										<i>5 months ago</i>
									</div>
								</div><!-- Job -->
							</div>
							<div class="pagination">
								<ul>
									<li class="prev"><a href="#"><i class="la la-long-arrow-left"></i> Prev</a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span class="delimeter">...</span></li>
									<li><a href="#">14</a></li>
									<li class="next"><a href="#">Next <i class="la la-long-arrow-right"></i></a></li>
								</ul>
							</div><!-- Pagination -->
						 </div>
					 </div>
				 </div>
				<!-- 	<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Load more listings</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(images/resource/parallax2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading light">
							<h2>Kind Words From Happy Candidates</h2>
							<span>What other people thought about the service provided by JobHunt</span>
						</div><!-- Heading -->
						<div class="reviews-sec" id="reviews-carousel">
							<div class="col-lg-6">
								<div class="reviews">
									<img src="<?php echo get_template_directory_uri(); ?>/images/resource/r1.jpg" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="<?php echo get_template_directory_uri(); ?>/images/resource/r2.jpg" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="<?php echo get_template_directory_uri(); ?>/images/resource/r1.jpg" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="<?php echo get_template_directory_uri(); ?>/images/resource/r2.jpg" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Companies We've Helped</h2>
							<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
						</div><!-- Heading -->
						<div class="comp-sec">
							<div class="company-img">
								<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/cc1.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/cc2.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/cc3.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/cc4.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/cc5.jpg" alt="" /></a>
							</div><!-- Client  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(images/resource/parallax3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Quick Career Tips</h2>
							<span>Found by employers communicate directly with hiring managers and recruiters.</span>
						</div><!-- Heading -->
						<div class="blog-sec">
							<div class="row">
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/b1.jpg" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/b2.jpg" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/resource/b3.jpg" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>Gat a question?</h3>
							<span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
	

	
