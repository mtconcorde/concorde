<div class="col-4 col-sm-12 promos-sidebar">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>spanish" class="promo">
		<div class="promo-cover">
			<div>
				<h5><?php the_field('promo_one_title', 'option'); ?></h5>
				<p><?php the_field('promo_one_text', 'option'); ?></p>
				<span class="promo-link">Learn More <b class="icon-chevron-right"></b></span>
			</div><!-- div -->
		</div><!-- promo-cover -->
		<?php 
			$image = get_field('promo_one_image', 'option');
			if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</a>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>financial-aid" class="promo">
		<div class="promo-cover">
			<div>
				<h5><?php the_field('promo_two_title', 'option'); ?></h5>
				<p><?php the_field('promo_two_text', 'option'); ?></p>
				<span class="promo-link">Learn More <b class="icon-chevron-right"></b></span>
			</div><!-- div -->
		</div><!-- promo-cover -->
		<?php 
			$image = get_field('promo_two_image', 'option');
			if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</a>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>military" class="promo">
		<div class="promo-cover">
			<div>
				<h5><?php the_field('promo_three_title', 'option'); ?></h5>
				<p><?php the_field('promo_three_text', 'option'); ?></p>
				<span class="promo-link">Learn More <b class="icon-chevron-right"></b></span>
			</div><!-- div -->
		</div><!-- promo-cover -->
		<?php 
			$image = get_field('promo_three_image', 'option');
			if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</a>
</div><!-- promos-sidebar -->