<div id="content_bottom" class="region bottom">
	<div class="content clearfix">
		<?php if( get_field('widget_one_title') ): ?>
			<div id="block-block-hours" class="block block-block hours triple-one">
				<h2><?php the_field('widget_one_title'); ?></h2>
				<div class="content">
					<?php the_field('widget_one_text'); ?>
				</div><!-- content -->
			</div><!-- block-block-hours -->
		<?php endif; ?>
		<?php if( get_field('widget_two_title') ): ?>
			<div id="block-block-address" class="block block-block address triple-one">
				<h2><?php the_field('widget_two_title'); ?></h2>
				<div class="content">
					<?php the_field('widget_two_text'); ?>
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