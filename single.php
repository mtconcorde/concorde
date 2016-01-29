<?php get_header(); ?>	
<?php include (TEMPLATEPATH . '/includes/social-share-buttons.php');?>
<div class="main">
	<section class="hero">
		<div class="content">
			<div class="hero-inner">
				<h2 class="h1">Concorde Blog</h2>
			</div><!-- hero-inner -->
		</div><!-- content -->
	</section><!-- hero -->
	<section class="main-content">
		<div class="content">
			<div class="row clearfix">
				<div class="col-8 col-sm-12">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div class="blog-post inner-col mod-inner">
							<h1 class="h4 alt"><?php the_title();?></h1>
							<h6 class="post-author alt">Written by <?php the_author(); ?></h6>
							<h6 class="post-date alt"><?php the_time('M. j, Y'); ?></h6>
							<ul class="post-categories">
								<?php
									$excludedcats = array(15);
									$count = 0;
									$categories = get_the_category();
									foreach($categories as $category) {
										$count++;
										if ( !in_array($category->cat_ID, $excludedcats) ) {
											echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Category - %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';
										}
									}
								?>
							</ul>
							<div class="post-photos row clearfix">
								<div class="col-6">
									<?php the_post_thumbnail(); ?>
								</div><!-- col-6 -->
							</div><!-- post-photos -->
							<?php the_content(); // Dynamic Content ?>
						</div><!-- blog-post -->
						<?php 
						$blog_image = get_field('blog_cta_image');
						if( !empty($blog_image) ): ?>
							<a href="<?php the_field('blog_cta_link'); ?>"><img src="<?php echo $blog_image['url']; ?>" alt="<?php echo $blog_image['alt']; ?>" /></a>
						<?php endif; ?>
						<div id="social-bottom">
							<h3>Follow Concorde on Social Media</h3>
							<ul>
								<li class="facebook"><a href="https://www.facebook.com/ConcordeCareerInc" target="_blank">Like Us</a></li>
								<li class="twitter"><a href="https://twitter.com/ConcordeCareer" target="_blank">Follow Us</a></li>
								<li class="rss"><a href="http://feeds.feedburner.com/concorde/mcbd" target="_blank">Subscribe</a></li>
							</ul>
						</div><!-- social-bottom -->
					<?php endwhile; ?>
					<?php else: ?>
						<!-- article -->
						<article>	
							<h1><?php _e( 'Sorry, nothing to display.', 'concorde' ); ?></h1>
						</article>
						<!-- /article -->
					<?php endif; ?>  
				</div><!-- col-8 -->
				<?php get_sidebar();?>
			</div><!-- row -->
		</div><!-- content -->
	</section><!-- main-content -->
</div><!-- main -->
<?php get_footer(); ?>
