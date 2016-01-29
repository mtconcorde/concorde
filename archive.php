<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/includes/social-share-buttons.php');?>
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
								<div class="content">
									<div class="hero-inner">
										<h1><?php _e( 'Archives', 'concorde' ); ?></h1>
									</div><!-- hero-inner -->
								</div><!-- content -->
							</section><!-- hero -->
							<section class="main-content">		
								<div class="content">
									<div class="row clearfix">
										<div class="col-8 col-sm-12">
											<div class="row clearfix">
												<!-- even posts -->
												<div class="col-6 col-xs-12">
													<?php global $query_string; // required
														$posts = query_posts($query_string.'&posts_per_page=-1'); ?>
														<?php while (have_posts()): the_post() ?>
														    <?php if ($wp_query->current_post % 2 != 0): ?>
														        <div class="blog-post inner-col mod-inner even">
																	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
																		<?php the_post_thumbnail(); ?>
																	<?php endif; ?>
																	<h5 class="alt"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
																	<h6 class="post-date alt"><?php the_time('M. j, Y'); ?></h6>
																	<p><?php html5wp_excerpt('concorde_index');?></p>
																</div><!-- blog-post -->
														    <?php endif ?>
														<?php endwhile ?>
													<?php wp_reset_query(); // reset the query ?>
												</div><!-- col-6 col-xs-12 -->
												<!-- odd posts -->
												<div class="col-6 col-xs-12">
													<?php global $query_string; // required
														$posts = query_posts($query_string.'&posts_per_page=-1'); ?>
														<?php while (have_posts()): the_post() ?>
														    <?php if ($wp_query->current_post % 2 == 0): ?>
														        <div class="blog-post inner-col mod-inner odd">
																	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
																		<?php the_post_thumbnail(); ?>
																	<?php endif; ?>
																	<h5 class="alt"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
																	<h6 class="post-date alt"><?php the_time('M. j, Y'); ?></h6>
																	<p><?php html5wp_excerpt('concorde_index');?></p>
																</div><!-- blog-post -->
														    <?php endif ?>
														<?php endwhile ?>
													<?php wp_reset_query(); // reset the query ?>
												</div><!-- col-6 col-xs-12 -->
											</div><!-- row -->
										</div><!-- col-8 -->
										<?php get_sidebar();?>
									</div><!-- row -->
								</div><!-- content -->
							</section><!-- main-content -->
						</div><!-- main -->
  					</div><!-- content -->
				</div><!-- blog-system -->
			</div><!-- content_main -->
		</div><!-- nxnwcontent -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div>
	</div><!-- content_bottom -->
</main>
<?php get_footer(); ?>
