 <?php /* Template Name: Program Location Page Template */ get_header(); ?>
 <?php	
	//Get the URL of the page we are on
	$page_url = get_permalink();
	
	//Strip the current URL, look for a city name and assign it to the page id of the main campus page
	$program_location = '';
	if (strpos($page_url,'aurora-colorado')) {
	    $program_location = 202;
	} elseif (strpos($page_url,'dallas-texas')) {
	    $program_location = 211;
	} elseif (strpos($page_url,'garden-grove-california')) {
	    $program_location = 198;
	} elseif (strpos($page_url,'grand-prairie-texas')) {
	    $program_location = 212;
	} elseif (strpos($page_url,'jacksonville-florida')) {
	    $program_location = 203;
	} elseif (strpos($page_url,'kansas-city-missouri')) {
	    $program_location = 208;
	} elseif (strpos($page_url,'memphis-tennessee')) {
	    $program_location = 210;
	} elseif (strpos($page_url,'miramar-florida')) {
	    $program_location = 204;
	} elseif (strpos($page_url,'north-hollywood-california')) {
	    $program_location = 199;
	} elseif (strpos($page_url,'orlando-florida')) {
	    $program_location = 205;
	} elseif (strpos($page_url,'portland-oregon')) {
	    $program_location = 209;
	} elseif (strpos($page_url,'san-antonio-texas')) {
	    $program_location = 213;
	} elseif (strpos($page_url,'san-bernardino-california')) {
	    $program_location = 200;
	} elseif (strpos($page_url,'san-diego-california')) {
	    $program_location = 201;
	} elseif (strpos($page_url,'southaven-mississippi')) {
	    $program_location = 207;
	} elseif (strpos($page_url,'tampa-florida')) {
	    $program_location = 206;
	} 
	
	//Store certain post_meta from the main campus page so we can use it throughout all of the program location pages
	$campus_meta = array(
		'map' => get_post_meta($program_location, "google_map_code", true),
		'image' => get_post_meta($program_location, "campus_image", true),
		'widget_1_title' => get_post_meta($program_location, "widget_one_title", true),
		'widget_1_text' => get_post_meta($program_location, "widget_one_text", true),
		'widget_2_title' => get_post_meta($program_location, "widget_two_title", true),
		'widget_2_text' => get_post_meta($program_location, "widget_two_text", true),
	);
?>		 
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
							<article class="node node-pf-program-location node-promoted  clearfix">
								<header>
									<h1><?php the_title(); ?></h1>
								</header>
								<div class="content">
									<h1 class="required-fields"><?php the_field('program_name');?></h1>
									<div class="required-fields group-location field-group-html-element"><?php the_field('program_location');?></div> 
									<?php the_content(); ?>
								</div><!-- content -->
							</article>
						</div><!-- content -->
					</div><!-- block-system-main -->
				</div><!-- content -->
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
						$google_map = $campus_meta['map'];
						$campus_image = $campus_meta['image'];
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
												<?php echo $google_map; ?>
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
												
												if( !empty($campus_image) ){
													echo wp_get_attachment_image( $campus_image, 'full' );
												}
											?>
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
						<div id="block-block-resources621" class="block block-block resources">
							<h2>Resources</h2>
							<div class="content">
								<ul class="list-links-alt">
									<?php if( have_rows('resources') ): ?>
										<?php while( have_rows('resources') ): the_row(); 
											// vars
											$resource_title = get_sub_field('resource_title');
											$resource_link = get_sub_field('resource_link');
											?>
											<li><a href="<?php echo $resource_link; ?>" target="_blank" ><?php echo $resource_title; ?></a></li>
										<?php endwhile; ?>
									<?php endif; ?>
								</ul>  
							</div><!-- content -->
						</div><!-- resources -->
					<?php endif; ?>
				</div><!-- content -->
			</aside>
		</div><!-- content -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix">
			<?php if ( isset( $campus_meta['widget_1_title'] ) ): ?>
				<div id="block-block-hours" class="block block-block hours triple-one">
					<h2><?php echo $campus_meta['widget_1_title']; ?></h2>
					<div class="content">
						<?php echo wpautop($campus_meta['widget_1_text']); ?>
					</div><!-- content -->
				</div><!-- block-block-hours -->
			<?php endif; ?>
			<?php if( isset( $campus_meta['widget_2_title'] ) ): ?>
				<div id="block-block-address" class="block block-block address triple-one">
					<h2><?php echo $campus_meta['widget_2_title']; ?></h2>
					<div class="content">
						<?php echo wpautop($campus_meta['widget_2_text']); ?>
					</div><!-- content -->
				</div><!-- block-block-address -->
			<?php endif; ?>
			<?php if( get_field('accreditation_image') || get_field('accreditation_text') ): ?>
				<div id="block-block-5" class="block block-block triple-one">
					<h2>Accreditation</h2>
					<div class="content">
						<div>
							<?php 
							$accreditation_logo = get_field('accreditation_image');
							if( !empty($accreditation_logo) ): ?>
								<img src="<?php echo $accreditation_logo['url']; ?>" alt="<?php echo $$accreditation_logo['alt']; ?>" />
							<?php endif; ?>
						</div>
						<p><?php the_field('accreditation_text'); ?></p>
					</div><!-- content -->
				</div><!-- block-block-5 -->
			<?php endif; ?>
		</div><!-- content clearfix -->	
	</div><!-- content_bottom -->
</main>
<?php include (TEMPLATEPATH . '/includes/program-location-page-lower.php'); ?>
<?php get_footer(); ?>