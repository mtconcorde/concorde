<?php /* Template Name: Home Page Template */ get_header(); ?>
<main id="main">
	<div id="content_top" class="region top">
		<div class="content clearfix"></div>
	</div><!-- content_top -->
	<div id="content">
		<div class="nxnwcontent clearfix">
			<div id="content_main" class="region main">
				<div id="block-system-main" class="block block-system"> 
					<div class="content">
						<div class="main">
							<section class="hero">
								<div class="hero-inner">
									<div class="content">
										<div class="row clearfix">
											<div class="col-8 col-md-12">
												<div class="carousel" data-effect="slide">
													<div class="carousel-inner">	
														<div class="carousel-inner">
															<div class="item active">
																<img src="<?php echo content_url(); ?>/img/surgical-technology-career.jpg" alt="surgical technology career">
																<div class="carousel-caption">
																	<div class="row clearfix">
																		<div class="col-8 col-xs-12">
																			<h5>Your New Career Path Begins Here</h5>
																			<p>Open the door of possibilities at Concorde.</p>
																		</div><!-- col-8 -->
																	</div><!-- row -->
																	<a href="<?php echo esc_url( home_url( '/' ) ); ?>apply-online" class="btn-primary btn-block caption-btn">Start Now</a>
																</div><!-- carousel-caption -->
															</div><!-- item -->
															<div class="item ">
																<img src="<?php echo content_url(); ?>/img/slider2_grad_web.jpg" alt="A Concorde graduate receiving her certification at a graduation ceremony.">
																<div class="carousel-caption">
																	<div class="row clearfix">
																		<div class="col-8 col-xs-12">
																			<h5>Concorde Alumni</h5>
																			<p>Concorde graduates stay connected and informed through our Alumni Association</p>
																		</div><!-- col-8 -->
																	</div><!-- row -->
																	<a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni" class="btn-primary btn-block caption-btn">Learn More Today</a>
																</div><!-- carousel-caption -->
															</div><!-- item -->
															<div class="item ">
																<img src="<?php echo content_url(); ?>/img/slider3_group_web.jpg" alt="Concorde students anticipate their future in the health care field.">
																<div class="carousel-caption">
																	<div class="row clearfix">
																		<div class="col-8 col-xs-12">
																			<h5>Financial Aid</h5>
																			<p>Let Concorde help you get informed</p>
																		</div><!-- col-8 -->
																	</div><!-- row -->
																	<a href="<?php echo esc_url( home_url( '/' ) ); ?>financial-aid" class="btn-primary btn-block caption-btn">Explore Your Options</a>
																</div><!-- carousel-caption -->
															</div><!-- item -->
															<div class="item ">
																<img src="<?php echo content_url(); ?>/img/slider4_mia_web.jpg" alt="A Concorde student reflects proudly on her training.">
																<div class="carousel-caption">
																	<div class="row clearfix">
																		<div class="col-8 col-xs-12">
																			<h5>All Things Concorde</h5>
																			<p>Keep up to date on Concorde events, news and happenings.</p>
																		</div><!-- col-8 -->
																	</div><!-- row -->
																	<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" class="btn-primary btn-block caption-btn">Read our blog</a>
																</div><!-- carousel-caption -->
															</div><!-- item -->
														</div>
													</div><!-- carousel-inner -->
													<ul class="list-unstyled list-unformatted carousel-controls hidden-xs hidden-sm">
														<li class="carousel-control" data-control="prev"><a class="btn-primary-alt"><b class="icon-chevron-left"></b></a></li>
														<li class="carousel-control" data-control="next"><a class="btn-primary-alt"><b class="icon-chevron-right"></b></a></li>
													</ul>
												</div><!-- carousel -->
											</div><!-- col-8 -->
											<div class="col-4 col-md-12">
												<div class="matchheight">
													<section id="requestinfo" class="qcf">
														<header>Request Information</header>
														<div class="content">
															<?php include (TEMPLATEPATH . '/includes/request-information-form.php'); ?>
														</div><!-- content -->
													</section><!-- requestinfo -->
												</div><!-- matchheight -->
											</div><!-- col-4 -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section><!-- hero -->
							<section class="main-content">
								<div class="content welcome">
									<h1 class="heading text-center"><?php the_title(); ?></h1>
									<h5 class="subheading text-center"><?php if( get_field('subheading') ): ?><?php the_field('subheading'); ?><?php endif; ?></h5>
									<div class="row clearfix">
										<div class="col-6 col-sm-12">
											<div class="video-wrapper">
												<iframe style="border:none;" width="560" height="315" src="https://www.youtube.com/embed/Uc-4XrzYh9s?rel=0" allowfullscreen></iframe>
											</div><!-- video-wrapper -->
										</div><!-- col-6 -->
										<div class="col-6 col-sm-12">
											<?php the_content(); ?> 
											<a class="btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>apply-online">Apply Now</a>
										</div><!-- col-6 -->
									</div><!-- row -->
								</div><!-- content welcome -->
								<div class="home-blocks stripe">
									<div class="content">
										<div class="row equal-heights clearfix">
											<div class="home-news col-4 col-xs-12 col-sm-6">
												<div class="inner-col equal-col">
													<div class="inner-col-content">
														<h4>News</h4>
													</div><!-- inner-col-content -->
													<div class="carousel" data-effect="slide" data-interval="0">
														<div class="carousel-inner">	
															<?php
																$c = 0;
																$class = '';
																// The Query
																$args = array (
																    'meta_key'    => '_thumbnail_id',
																    'orderby'     => 'date',
																    'order'       => 'DESC'
																);
																query_posts( $args );
																while ( have_posts() ) : the_post();
																$c++;
																if ( $c == 1 ) {
																	$class = 'active';
																} else {
																	$class = '';
																}
															?>
																<div class="item <?=$class?>">
																	<?php if ( has_post_thumbnail()) : ?>
																		<?php the_post_thumbnail(); ?>
																	<?php endif; ?>
																	<div class="inner-col-content">
																		<h6 class="alt"><?php the_title(); ?></h6>
																	</div><!-- inner-col-content -->
																</div><!-- item -->
															<?php endwhile; wp_reset_query(); ?>
														</div><!-- carouse-inner -->
														<div class="news-actions clearfix">
															<a class="btn-secondary alt prev" data-control="prev"><b class="icon-chevron-left"></b></a>
															<a class="btn-secondary alt next" data-control="next"><b class="icon-chevron-right"></b></a>
															<a href="<?php echo get_site_url(); ?>/blog/" class="btn-secondary alt all-news">All News</a>
														</div><!-- news-actions -->
													</div><!-- carousel -->
												</div><!-- inner-col -->
											</div><!-- home-news -->
											<div class="home-testimonials col-4 col-xs-12 col-sm-6">
												<div class="inner-col equal-col">
													<div class="inner-col-content">
														<h4>Testimonials</h4>
													</div>
													<div class="inner-col-content">
														<div class="carousel" data-effect="slide">
															<div class="carousel-inner">	
																<div class="item active">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies4.png" alt="#">
																	<p>"I have accepted a position at a large resort and spa in Carefree, Arizona. I am super excited and cannot believe how much my life has been transformed over the past two years.”</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/SaraMcMahon_web_188x188_circle.jpg" alt="#">
																	<p>"Concorde helped develop my professional skills at a very young age by helping me expand my medical vocabulary and overall skill set. The externship was an awesome experience and I was able to put my skills I obtained to good use."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/AntoinettePender.jpg" alt="#">
																	<p>“I decided to come to Concorde because I was tired of working at jobs I didn't enjoy going to. I wanted get out of the daily grind and "just making it by" and Concorde seemed to have what I needed."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/JarielleWilson_web_188x188_circle.jpg" alt="#">
																	<p>"Concorde opened up doors for me and said you know you may not have taken the traditional route, but...I'm not a traditional person."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/ShelbieHunter_web_188x188_circle.jpg" alt="#">
																	<p>"I actually started working 3 days after I graduated."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/Elijah_web_188x188_circle.jpg" alt="#">
																	<p>"I’m a vocational nurse graduate. I visited about seven different schools and I was impressed with Concorde’s professionalism...pass rate...the actual clinical experience..."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies.png" alt="#">
																	<p>“Concorde gave me the tools I needed to succeed in this profession. Facility is accommodating. The instructors are amazing. They take an interest in you and want to see you succeed.”</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies3.png" alt="#">
																	<p>"I have a great job thanks to the hard work from everyone at Concorde, but especially me. When you work hard, put forth everything you can, Concorde will help you reach your goals and dreams.”</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies7.png" alt="#">
																	<p>“It was the fastest year of my life! I got my job the day after I finished. I wouldn't trade this experience for anything in the world. It was well worth my time, effort and money.”</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/Deborah_web_188x188_circle.jpg" alt="#">
																	<p>“I finished my internship in April and I started working in May…I actually started two days before my actual graduation. It encouraged you it made you want to learn it made you want to excell and do well. Never doubt yourself. Be all that you can be.”</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies8_0.png" alt="#">
																	<p>“Concorde has changed my life. My instructors were caring and supportive through the good times and bad. I WILL ALWAYS CARRY THE MEMORIES throughout my life.”</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/Justinn_web_188x188_circle.jpg" alt="#">
																	<p>"I always had this dream of being a doctor and I didn't want to go to school that long. Honestly, I can say music is my passion but I believe Respiratory Therapy is my calling. "</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/OliviaM_CASBN_188x188_circle.jpg" alt="#">
																	<p>"Because things are changing every so often in the medical field, I needed to update myself and what better school to come to. This was the best decision I ever made. Three days after I left Concorde I had 5 job offers."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/Robert_web_188x188_circle.jpg" alt="#">
																	<p>"Being a former student the wealth of knowledge from those clinical hours are so valuable and a reward you can see from the patients progress."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/Irma_web_188x188_circle.jpg" alt="#">
																	<p>"I'm not another person with a dead-end job. Living life and loving your job is the most amazing feeling."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies6_0.png" alt="#">
																	<p>"All of the instructors were amazing along with the program director. Every instructor was very knowledgeable in the field in different areas and when my externship began I was prepared."</p>
																</div><!-- item -->
																<div class="item">
																	<img src="<?php echo content_url(); ?>/img/testimonials/img_testimonies5.png" alt="#">
																	<p>“I attended Concorde Career Institute in the Medical Assistant program. I had a great experience at Concorde. The staff was great and they were very helpful throughout my entire training."</p>
																</div><!-- item -->
															</div><!-- carousel-inner -->
															<ul class="carousel-indicators">
																<li class="active" data-indicator="0"></li>
																<li class="" data-indicator="1"></li>
																<li class="" data-indicator="2"></li>
																<li class="" data-indicator="3"></li>
																<li class="" data-indicator="4"></li>
																<li class="" data-indicator="5"></li>
																<li class="" data-indicator="6"></li>
																<li class="" data-indicator="7"></li>
																<li class="" data-indicator="8"></li>
																<li class="" data-indicator="9"></li>
																<li class="" data-indicator="10"></li>
																<li class="" data-indicator="11"></li>
																<li class="" data-indicator="12"></li>
																<li class="" data-indicator="13"></li>
																<li class="" data-indicator="14"></li>
																<li class="" data-indicator="15"></li>
																<li class="" data-indicator="16"></li>
															</ul>
														</div><!-- carousel -->
													</div><!-- inner-col-content -->
												</div><!-- inner-col -->
											</div><!-- home-testimonials -->
											<div class="home-questions col-4 col-sm-12">
												<div class="inner-col equal-col">
													<div class="inner-col-content">
														<h4>Questions?</h4>
													</div><!-- inner-col -->
													<div class="wrapper">
														<div class="inner-col-content questions">
															<ul class="list-links-alt list-unformatted text-left">
																<li><a class="question-box" data-id="1">Am I eligible for financial aid?<b class="icon-chevron-right"></b></a></li>
																<li><a class="question-box" data-id="2">What is accreditation and why is it important?<b class="icon-chevron-right"></b></a></li>
																<li><a class="question-box" data-id="3">How do I get started?<b class="icon-chevron-right"></b></a></li>
																<li><a class="question-box" data-id="4">Will I get help in finding a job?<b class="icon-chevron-right"></b></a></li>
															</ul>
														</div><!-- questions -->
														<div class="inner-col-content answers">
															<div class="clearfix">
																<a class="btn-primary-alt answers-back"><b class="icon-chevron-left"></b></a>
															</div><!-- clearfix -->
															<div class="hidden" data-id="1">
																<h5>Am I eligible for financial aid?</h5>
																<p>If paying for your education is a concern for you, you’re not alone. Many students at Concorde require help in financing their education. Our financial aid team takes great pride in their ability to work with you in finding ways to finance your education.</p>
															</div><!-- answer -->
															<div class="hidden" data-id="2">
																<h5>What is accreditation and why is it important?</h5>
																<p>Accreditation ensures that schools and colleges comply with high standards of educational excellence. Our campuses and most programs, where required, are accredited by third party governing parties. See the accreditation page for more details.</p>
															</div><!-- answer -->
															<div class="hidden" data-id="3">
																<h5>How do I get started?</h5>
																<p>Getting started is easy. Simply fill out the request information form and a representative will be in contact to help find a program and campus that's right for you.</p>
															</div><!-- answer -->
															<div class="hidden" data-id="4">
																<h5>Will I get help in finding a job?</h5>
																<p>Once you graduate, Concorde offers placement assistance to help you find that all-important health care job - through connection to a network of employers that frequently hire Concorde graduates.</p>
															</div><!-- answer -->
														</div><!-- answers -->
													</div><!-- wrapper -->
												</div><!-- inner-col equal-col -->
											</div><!-- home-questions -->
										</div><!-- inner-col equal-col -->
									</div><!-- content -->
								</div><!-- home-blocks stripe -->
							</section><!-- main-content -->
							<?php include (TEMPLATEPATH . '/includes/promos-horizontal.php'); ?>
						</div><!-- main -->
					</div><!-- content -->
				</div><!-- block-system-main -->
			</div><!-- content_main -->
		</div><!-- nxnwcontent -->
	</div><!--content -->
</main>
<?php get_footer(); ?>