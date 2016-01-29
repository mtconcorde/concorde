<?php /* Template Name: Campus Page Template */ get_header(); ?>
<?php 
$page_background_image = get_field('page_background_image');
if( !empty($page_background_image) ) {
	// vars
	$url = $page_background_image['url'];
};?>
<main id="main" style="background: url('<?php echo $url; ?>') no-repeat center; background-size: cover;">
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
					<?php if( have_rows('programs') ): ?>
						<div id="block-block-programsoffered" class="block block-block blue programs">
							<h2>Programs Offered</h2>
							<div class="content">
								<ul class="campus-programs list-unstyled clearfix">
									<?php while( have_rows('programs') ): the_row(); 
										// vars
										$program_title = get_sub_field('program_title');
										$program_link = get_sub_field('program_link');
									?>
										<li>
								            <a href="<?php echo $program_link; ?>"><?php echo $program_title; ?></a>
								        </li>
									<?php endwhile; ?>
								</ul>  
							</div><!-- content -->
						</div><!-- block-block-programsoffered -->
					<?php endif; ?>
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
					<?php
						//If there is a Google Map
						//If there is a Campus Image
						//If there is both
						$google_map = get_field('google_map_code');
						$campus_image = get_field('campus_image');
						$class = '';
						if($google_map || $campus_image): ?>
							<div id="block-block-viewer" class="block block-block viewer hidden-sm hidden-xs">
								<div class="content">
									<div id="detail-display">
										<?php 
											if ($google_map) {
												$class = ' class="active"';		
										?>
										<div<?=$class?> data-content="map">
											<div class="iframe-wrapper">
												<?php the_field('google_map_code');?>
											</div><!-- iframe-wrapper -->
										</div><!-- map -->
										<?php 
										} 
											if ($campus_image) {	
												if($google_map) {
													$class = '';
												} else {
													$class = ' class="active"';	 
												}
										?>
										<div<?=$class?> data-content="img">
											<?php 
												$image = get_field('campus_image');
												if( !empty($image) ): ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php endif; ?>
										</div><!-- campus-image -->
										<?php 
											}
										?>
									</div><!-- detail-display -->
									<div class="row detail-switch clearfix">
										<?php 
											if($google_map && $campus_image) {
										?>
											<div class="col-6 col-md-12">
												<a class="btn-neutral-dark outline active" data-view="map">Map View</a>
											</div><!-- col-6 col-md-12 -->
											<div class="col-6 col-md-12">
												<a class="btn-neutral-dark outline" data-view="img">Campus View</a>
											</div><!-- col-6 col-md-12 -->
										<?php
											}
										?>
									</div><!-- detail-switch -->
								</div><!-- content -->
							</div><!-- block-block-viewer -->
					<?php endif; ?>	
					<?php if( get_field('resources') ): ?>
						<div id="block-block-2223" class="block block-block ">
							<h2>Resource Links</h2>
							<div class="content">
								<p>
									<?php if( have_rows('resources') ): ?>
										<?php while( have_rows('resources') ): the_row(); 
											// vars
											$resource_title = get_sub_field('resource_title');
											$resource_link = get_sub_field('resource_link');
											?>
											<a target="_blank" href="<?php echo $resource_link; ?>"><?php echo $resource_title; ?></a>
											<br>
										<?php endwhile; ?>
									<?php endif; ?>
								</p>   
							</div><!-- content -->
						</div><!-- block-block -->
					<?php endif; ?>
				</div><!-- content -->
			</aside>
		</div><!-- content -->
	</div><!-- content -->
	<?php include (TEMPLATEPATH . '/includes/content-bottom.php'); ?>
</main>
<?php include (TEMPLATEPATH . '/includes/campus-page-lower.php'); ?>
<?php get_footer(); ?>
