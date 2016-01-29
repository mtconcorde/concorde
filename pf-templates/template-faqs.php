<?php /* Template Name: FAQs Page Template */ get_header(); ?>
<main id="main">
	<div id="content_top" class="region top">
		<div class="content clearfix"></div>
	</div><!-- content_top -->
	<div id="content">
		<div class="content clearfix">
			<aside id="sidebar_upper" class="region sidebar upper">
				<div class="content clearfix"></div>
			</aside><!-- sidebar_upper -->
			<div id="content_main" class="region main">
				<div class="content clearfix">
					<div id="block-system-main" class="block block-system">
						<div class="content">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<article class="clearfix">
									<header>
										<h1><?php the_title(); ?></h1>
									</header>
									<div class="content">
										<?php 
										// check for rows (parent repeater)
										if( have_rows('faqs_section') ): ?>
											<div id="accordion">
											<?php 
											// loop through rows (parent repeater)
											while( have_rows('faqs_section') ): the_row(); ?>
													<h3><?php the_sub_field('category'); ?></h3>
													<?php 
													// check for rows (sub repeater)
													if( have_rows('faqs') ): ?>
														<?php 
														// loop through rows (sub repeater)
														while( have_rows('faqs') ): the_row();
															// display each item as a list - with a class of completed ( if completed )
															?>
															<h4 class="accordion-toggle"><?php the_sub_field('question'); ?></h4>
															<div class="accordion-content">
																<?php the_sub_field('answer'); ?>
															</div><!-- accordion-content -->
														<?php endwhile; ?>
													<?php endif; //if( get_sub_field('faqs') ): ?>
											<?php endwhile; // while( has_sub_field('faqs_section') ): ?>
											</div>
										<?php endif; // if( get_field('faqs_section') ): ?> 	
									</div><!-- content -->
								</article>
							<?php endwhile; ?>
							<?php else: ?>
								<article>
									<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
								</article>
							<?php endif; ?>
						</div><!-- content -->
					</div><!-- block-system-main -->
				</div><!--content clearfix -->
			</div><!-- content_main -->
			<aside id="sidebar_lower" class="region sidebar lower">
				<div class="content clearfix">
					<div id="block-block-1" class="block block-block requestinfo onestepform">
						<h2>Request Information</h2>
						<div class="content">
							<?php include (TEMPLATEPATH . '/includes/request-information-form.php'); ?>
						</div><!-- content -->
					</div><!-- requestinfo -->
				</div><!-- content -->
			</aside>
		</div><!-- content -->
	</div><!-- content -->
</main>
<?php get_footer(); ?>