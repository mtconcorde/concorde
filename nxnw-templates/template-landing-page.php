<?php /* Template Name: Landing Page Template */ get_header(); ?>
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
										<div class="col-8 col-sm-12">
											<div class="inner-col content-copy">
												<?php the_content(); ?>
											</div><!-- inner-col -->
										</div><!-- col-8 -->
										<?php if(get_field('promos_location') == "sidebar") {
											include (TEMPLATEPATH . '/includes/promos-vertical.php');
										} ?>
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
