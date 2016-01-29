<?php /* Template Name: Careers Page Template */ get_header(); ?>
<main id="main">
	<div id="content_top" class="region top">
		<div class="content clearfix"></div><!-- content clearfix -->
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
											<div class="col-6 col-sm-12">
													<h1 class="h2 heading"><?php the_title(); ?></h1>
													<?php if( get_field('subheading') ): ?>
														<h5 class="subheading"><?php the_field('subheading'); ?></h5>
													<?php endif; ?>
													<?php if( get_field('hero_description') ): ?>
														<div class="hero-desc">
															<?php the_field('hero_description'); ?>
														</div><!-- hero-desc -->
													<?php endif; ?>
											</div><!-- col-6 -->
											<div class="col-6 hidden-xs hidden-sm">
												<?php 
												$image = get_field('hero_image');	
												if( !empty($image) ): ?>	
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												<?php endif; ?>
											</div><!-- col-6 -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section><!-- hero -->
							<section class="stripe-small bg-neutral-dark stripe-cta">
								<div class="content text-center">
									<span>Search All Job Opportunities</span> <a href="http://tbe.taleo.net/CH08/ats/careers/jobSearch.jsp?org=CCCI&amp;cws=1" class="btn-primary alt">Search Jobs</a>
								</div>
							</section>
							<section class="main-content">
								<div class="content">
									<div class="row clearfix">
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/careers1.jpg" alt="Concorde Careers" />
												<div class="inner-col-content">
													<h3>Our Mission</h3>
													<p>We are dedicated to preparing students for successful employment in a rewarding health care profession through high caliber training, real world experiences, and student centered support.</p>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/careers3.jpg" alt="Concorde Careers" />
												<div class="inner-col-content">
													<h3>Core Values</h3>
													<p>Our core values: Integrity, Respect for the Individual, Customer Service, Teamwork, and Achievement. By following these core values, we cannot fail in our promise to our students, and to each other.</p>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-12">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/careers2.jpg" alt="Concorde Careers" />
												<div class="inner-col-content">
													<h3>Join the Concorde Team.</h3>
													<p>We hold this fundamental belief – that no one of us can achieve as much as all of us together. Our goal is to maintain and enhance our reputation by employing industry professionals dedicated to serving others, and improving lives through education.</p>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
									</div><!-- company-jobs-team row clearfix -->
									<div class="contact-block bg-neutral-medium">
										<div class="row clearfix mod-inner">
											<div class="col-3 col-sm-12">
												<div class="inner-col">
													<h5 class="h3">Contact</h5>
												</div><!-- inner-col -->
											</div><!-- col-3 -->
											<div class="col-9 col-sm-12">
												<div class="row clearfix">
													<div class="col-6 col-xs-12">
														<div class="inner-col">
															<h6 class="h5 bold">Corporate Office</h6>
															<address>5800 Foxridge Driv, Suite 500<br>Mission, Kansas 66202<br>Phone: 913-831-9977<br>Fax: 913-831-6556<br></address>
														</div><!-- inner-col -->
													</div><!-- col-6 -->
													<div class="col-6 col-xs-12">
														<div class="inner-col">
															<h6 class="h5 bold">HUMAN RESOURCES RECRUITMENT</h6>
															<address>Phone: 877-866-2340<br>Fax: 877-866-2344<br>Email: jobs@concorde.edu<br></address>
														</div><!-- inner-col -->
													</div><!-- col-6 -->
												</div><!-- row -->
											</div><!-- col-9 -->
										</div><!-- row -->
									</div><!-- contact-block -->
								</div><!-- content -->
							</section><!-- main-content -->
							<?php 
								include (TEMPLATEPATH . '/includes/promos-horizontal.php');
							?>
						</div><!-- main -->
					</div><!-- content -->
				</div><!-- block-system-main -->
			</div><!-- content_main -->
		</div><!-- nxnwcontent -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div><!-- content clearfix -->
	</div><!-- content_bottom -->
</main>
<?php get_footer(); ?>
