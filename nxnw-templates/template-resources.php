<?php /* Template Name: Resources Page Template */ get_header(); ?>
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
								<div class="hero-inner centered">
									<div class="content">
										<div class="row clearfix">
											<div class="col-12 text-center">
													<h1 class="h2 heading"><?php the_title(); ?></h1>
													<?php if( get_field('subheading') ): ?>
														<h5 class="subheading"><?php the_field('subheading'); ?></h5>
													<?php endif; ?>
													<?php if( get_field('hero_description') ): ?>
														<div class="hero-desc">
															<?php the_field('hero_description'); ?>
														</div><!-- hero-desc -->
													<?php endif; ?>
											</div><!-- col12 text-center -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section><!-- hero -->
							<section class="main-content">
								<div class="content row-wrapper">
									<div class="row clearfix">
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Financial Aid </h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Have questions about funding your education? Our financial aid team can help guide you towards financial assistance.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>financial-aid" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Accreditation</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Concorde’s program and campus accreditations ensure you get the quality education employers value.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>accreditation" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-12">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Program Disclosures</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Check out details about graduation rates, median debt of graduates, and other important information.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>disclosures" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
									</div><!-- row -->
									<div class="row clearfix">
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Graduate Employment</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Once you graduate, Concorde offers valuable assistance to help you find that all-important health care job.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>graduate-employment" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>High School Students</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>We are committed to preparing students for a post-high school education, finding the right fit for long-term success.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>highschool" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-12">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Privacy Policy</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>We want to make sure you know how we collect, use, share and protect information about you. </p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
									</div><!-- row -->
									<div class="row clearfix">
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Consumer Information</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Click here for details about consumer information.</p>
													<a href="<?php echo content_url(); ?>/img/pdfs/Consumer-Information.pdf" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Transcripts and Diploma</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Click here to request a copy of your transcripts or diploma</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>transcripts" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
										<div class="col-4 col-xs-12 col-sm-12">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>Sexual Misconduct Policy and Procedures</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Sexual Misconduct Response and Prevention In Accordance with the Violence Against Women Act</p>
													<a href="<?php echo content_url(); ?>/img/pdfs/Sexual-Misconduct-Policy-and%20Procedures.pdf" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
									</div><!-- row -->
									<div class="row clearfix">
										<div class="col-4 col-xs-12 col-sm-6">
											<div class="inner-col mod-clear">
												<div class="inner-col-heading">
													<h5>VAWA Training</h5>
												</div><!-- inner-col-heading -->
												<div class="inner-col-content">
													<p>Concorde's Sexual Harassment, Violence, and Discrimination Prevention</p>
													<a href="<?php echo content_url(); ?>/img/pdfs/VAWA-training-06302015.pdf" class="btn-primary-alt">Learn More</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-4 -->
									</div><!-- row -->
								</div><!-- content -->
							</section><!-- main-content -->
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