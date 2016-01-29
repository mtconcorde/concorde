<?php /* Template Name: Corporate Page Template */ get_header(); ?>
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
							<section class="hero cover" style="background-image: url('<?php echo content_url(); ?>/img/MainPicture_0.jpg');">
								<div class="hero-inner alt">
									<div class="content">
										<div class="row clearfix">
											<div class="col-6 col-sm-12">
												<h1 class="h2 heading"><?php the_title(); ?></h1>
												<?php if( get_field('hero_description') ): ?>
													<div class="hero-desc">
														<?php the_field('hero_description'); ?>
													</div><!-- hero-desc -->
												<?php endif; ?>
											</div><!-- col-6 -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section><!-- hero -->
							<section class="main-content">
								<div class="content">
									<div class="company-jobs-team row clearfix">
										<div class="col-6 col-sm-12">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/MissionValues2.jpg" alt="Concorde's mission: We are committed to helping students successfully find employment in a rewarding health care profession." />
												<div class="inner-col-content">
													<h3>Mission and Values</h3>
													<p>We are committed to helping students successfully find employment in a rewarding health care profession.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>mission-and-values" class="btn-primary-alt">Mission &amp; Values</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col -->
										</div><!-- col-6 -->
										<div class="col-6 col-sm-12">
											<div class="inner-col text-center">
												<img src="<?php echo content_url(); ?>/img/Tim-Foster.jpg" alt="Tim Foster, CEO Concorde Career College" />
												<div class="inner-col-content">
													<h3>Management Team</h3>
													<p>Meet and learn more about the leadership team working hard to provide quality education at Concorde Career Colleges.</p>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>bios" class="btn-primary-alt">Management Team</a>
												</div><!-- inner-col-content -->
											</div><!-- inner-col text-center -->
										</div><!-- col-6 -->
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
															<div class="row clearfix">
																<div class="col-2">
																	<b class="icon-phone"></b>
																</div><!-- col-2 -->
																<div class="col-10">
																	<address>Phone<br>913-831-9977<br><br>Fax<br>913-273-0203<br><br></address>
																</div><!-- col-10 -->
															</div><!-- row -->
														</div><!-- inner-col -->
													</div><!-- col-6 -->
													<div class="col-6 col-xs-12">
														<div class="inner-col">
															<div class="row clearfix">
																<div class="col-2">
																	<b class="icon-marker alt"></b>
																</div><!-- col-2 -->
																<div class="col-10">
																	<address>Campus Support Center Headquarters<br>5800 Foxridge Drive Suite 500<br>Mission, KS 66202</address>
																</div><!-- col-10 -->
															</div><!-- row -->
														</div><!-- inner-col -->
													</div><!-- col-6 -->
												</div><!-- row -->
											</div><!-- col-9 -->
										</div><!-- row -->
									</div><!-- contact-block -->
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
