<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="row clearfix mod-inner1">
	<?php if ( has_post_thumbnail()) { // Check if thumbnail exists ?>
	
		<div class="col-2 col-sm-4">
			<?php the_post_thumbnail(); ?>
		</div><!-- col-2 col-sm-4 -->
		<div class="col-10 col-sm-8">
			<h5 class="alt"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
			<p><?php html5wp_excerpt('concorde_index'); // Build your custom callback length in functions.php ?></p>
		</div><!-- col-10 col-sm-8 -->
		
	<?php } 
		elseif ( get_field('campus_image') ) { 
		$image = get_field('campus_image');
	?>
	
		<div class="col-2 col-sm-4">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div><!-- col-2 col-sm-4 -->
		<div class="col-10 col-sm-8">
			<h5 class="alt"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
			<p><?php html5wp_excerpt('concorde_index'); // Build your custom callback length in functions.php ?></p>
		</div><!-- col-10 col-sm-8 -->
		
	<?php } else { ?>
	
		<div class="col-12">
			<h5 class="alt"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
			<p><?php html5wp_excerpt('concorde_index'); // Build your custom callback length in functions.php ?></p>
		</div><!-- col-12 -->
	
	<?php } ?>
</div><!-- row -->

<?php endwhile; ?>

<?php else: ?>

	<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

<?php endif; ?>