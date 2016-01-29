<?php /* Template Name: Alumni Page Template */ get_header(); ?>
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
							<section class="main-content">
								<div class="content">
									<div class="row clearfix">
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/BachelorsPromo.jpg" alt="Concorde students, soon to be alumni, examine X-rays." />
												<div class="inner-col-content">
													<h5>Concorde Focuses on Your Future</h5>
													<p>Concorde’s support doesn’t stop at graduation! Concorde offers all alumni valuable assistance in preparing for and finding a job. And as an alumni, you’ll have access to this benefit throughout<br>
your career.</p>
													<p>Find more information <a href="<?php echo esc_url( home_url( '/' ) ); ?>graduate-employment/">here</a></p>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/MentorPromo.jpg" alt="A Concorde alumnus in the medical field." />
												<div class="inner-col-content">
													<h5>Be a Mentor. Change a Life.</h5>
													<p>You remember the people who helped you through school – at the toughest moments, they were there with encouragement and support and always knew just what to say.</p>
<p>Now it’s time for you to show your gratitude and be one of those people. Become a Concorde mentor.</p>
<p>Speak to Student Affairs about opportunities today.</p>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/Graduates.jpg" alt="Concorde graduates anticipate their future in the medical field." />
												<div class="inner-col-content">
													<h5>Be a Mentor. Change a Life.</h5>
													<p>You remember the people who helped you through school – at the toughest moments, they were there with encouragement and support and always knew just what to say.</p>
<p>Now it’s time for you to show your gratitude and be one of those people. Become a Concorde mentor.</p>
<p>Speak to Student Affairs about opportunities today.</p>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
									</div><!-- row -->
								</div><!-- content -->
							</section><!-- main-content -->
							<?php if(get_field('promos_location') == "bottom") {
								include (TEMPLATEPATH . '/includes/promos-horizontal.php');
							}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div><!-- content clearfix -->
	</div><!-- content_bottom -->
</main>
<?php get_footer(); ?>
