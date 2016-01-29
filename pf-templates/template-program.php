<?php /* Template Name: Program Page Template */ get_header(); ?>
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
							<article class="clearfix">
								<header>
									<h1><?php the_title(); ?></h1>
								</header>
								<div class="content">
									<?php the_content(); ?> 	
								</div><!-- content -->
							</article>
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
					<?php if( get_field('available_campuses')):?>
						<div id="block-block-availablecampuses" class="block block-block blue locations">
							<h2>Available Campuses</h2>
							<div class="content">
								<ul class="program-campuses list-unstyled clearfix">
									<?php $post_objects = get_field('available_campuses');
									if( $post_objects ): ?>
									    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
									        <?php setup_postdata($post); ?>
									        <li>
									            <a href="<?php the_permalink(); ?>"><?php the_field('program_location'); ?></a>
									        </li>
									    <?php endforeach; ?>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif;?>
								</ul>
							</div><!-- content -->
						</div><!-- block-block-availablecampuses -->
					<?php endif; ?>
					<?php 
						//If there is a video
						//If there is a lab
						//If there is both
						$video = get_field('program_video');
						$lab = get_field('view_a_lab');
						$class = '';
						
						if( $video || $lab ): ?>
						<div id="block-block-viewer" class="block block-block viewer hidden-sm hidden-xs">
							<div class="content">
								<div id="detail-display">
									<?php 
										if ($video) {
											$class = ' class="active"';		
									?>		
									<div<?=$class?> data-content="video">
										<div class="video-wrapper">
											<?php the_field('program_video'); ?>
										</div><!-- video-wrapper -->
									</div><!-- video -->
									<?php 
										} 
										if ($lab) {	
											if($video) {
												$class = '';
											} else {
												$class = ' class="active"';	 
											}
									?>
									<div<?=$class?> data-content="tour">
										<div class="object-wrapper">
											<?php the_field('view_a_lab'); ?>
										</div><!--object-wrapper -->
									</div><!-- tour -->
									<?php 
										}
									?>
								</div><!-- detail-display -->
								<div class="row detail-switch clearfix">
									<?php 
										if($video && $lab) {
									?>
									<div class="col-6 col-md-12">
										<a class="btn-neutral-dark outline active" data-view="video">Program Video</a>
									</div><!-- col-6 -->
									<div class="col-6 col-md-12">
										<a class="btn-neutral-dark outline" data-view="tour">View a Lab</a>
									</div><!-- col-6 -->
									<?php
										}
									?>
								</div><!-- row -->
							</div><!-- content -->
						</div><!-- block-block-viewer -->
					<?php endif; ?>
				</div><!-- content -->
			</aside>
		</div><!-- content -->
	</div><!-- content -->
	<?php include (TEMPLATEPATH . '/includes/content-bottom.php'); ?>
</main>
<?php include (TEMPLATEPATH . '/includes/program-page-lower.php'); ?>
<?php get_footer(); ?>
