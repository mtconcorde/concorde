<?php /* Template Name: Management Team Page Template */ get_header(); ?>
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
								<div class="hero-inner centered">
									<div class="content">
										<div class="row clearfix">
											<div class="col-12 text-center">
												<h1 class="heading"><?php the_title(); ?></h1>
												<?php if( get_field('subheading') ): ?>
													<h5 class="subheading"><?php the_field('subheading'); ?></h5>
												<?php endif; ?>
												<div class="hero-desc"></div>
											</div><!-- col-12 -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section><!-- hero -->
							<section class="main-content">
								<div class="content">
									<?php the_content(); ?>
								</div><!-- content -->
							</section><!-- main-content -->
						</div><!-- main -->
  					</div><!-- content -->
				</div><!-- block-system-main -->
			</div><!-- content_main -->
		</div><!-- nxnwcontent -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div>
	</div><!-- content_bottom -->
</main>
<?php get_footer(); ?>