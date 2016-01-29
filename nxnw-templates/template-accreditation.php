<?php /* Template Name: Accreditation Page Template */ get_header(); ?>
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
								<div class="content privacy-policy">
									<div class="row-wrapper">
										<div class="row clearfix">
											<div class="col-8 col-sm-12">
												<div class="inner-col">
													<div class="inner-col-heading">
														<h5 class="text-primary">Accrediting Commission of Career Schools and Colleges (ACCSC)</h5>
														<p></p>
													</div><!-- inner-col-heading -->
													<div class="inner-col-content">
														<p>Accredited by the Accrediting Commission of Career Schools and Colleges (ACCSC), a nationally recognized accrediting agency.</p>
														<p>For individual programmatic accreditation, please visit the individual campus and program pages.</p>
														<ul class="">
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/sandiego">San Diego, CA – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/garden-grove">Garden Grove, CA – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/north-hollywood">North Hollywood, CA – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-bernardino">San Bernardino, CA – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/aurora">Denver Metro Area (Aurora, CO) – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/jacksonville">Jacksonville, FL – Concorde Career Institute</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/miramar">Miramar, FL (Miami Metro Area) – Concorde Career Institute</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/orlando">Orlando, FL – Concorde Career Institute</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/tampa">Tampa, FL – Concorde Career Institute</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/kansas-city">Kansas City, MO – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/portland">Portland, OR – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/grand-prairie">Grand Prairie, TX (Dallas Metroplex) – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/dallas">Dallas, TX (Dallas Metroplex) – Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-antonio">San Antonio, TX – Concorde Career College</a></li>
														</ul>
													</div><!-- inner-col -->
													<p></p>
												</div><!-- inner-col -->
												<p></p>
											</div><!-- col-8 -->
											<div class="col-4 hidden-xs hidden-sm">
												<div class="inner-col">
													<div class="inner-col-content">
														<img src="<?php echo content_url(); ?>/img/accsc_web_3.png" alt="">
													</div><!-- inner-col-content -->
													<p></p>
												</div><!-- inner-col -->
												<p></p>
											</div><!-- col-4 -->
											<p></p>
										</div><!-- row -->
										<div class="row clearfix">
											<div class="col-8 col-sm-12">
												<div class="inner-col">
													<div class="inner-col-heading">
														<h5 class="text-primary">Council on Occupational Education  (COE)</h5>
													</div><!-- inner-col-heading -->
													<div class="inner-col-content">
														<p>Accredited by the Accrediting Commission of the Council on Occupational Education (COE).
Concorde is authorized for operation as a postsecondary educational institution.</p>
														<p>For individual programmatic accreditation, please visit the individual campus and program pages.</p>
														<ul class="">
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/memphis">Memphis Metro Area (Memphis, TN) - Concorde Career College</a></li>
															<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/southaven">Southaven, MS - Concorde Career College</a></li>
														</ul>
													</div><!-- inner-col-content -->
												</div><!-- inner-col -->
											</div><!-- col-8 -->
											<div class="col-4 hidden-xs hidden-sm">
												<div class="inner-col">
													<div class="inner-col-content">
														<img src="<?php echo content_url(); ?>/img/coe_accred_web_standard_0.jpg" alt="">
													</div><!-- inner-col-content -->
												</div><!-- inner-col -->
											</div><!-- col-4 -->
										</div><!-- row -->
									</div><!-- row-wrapper -->
								</div><!-- content -->
							</section>
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
