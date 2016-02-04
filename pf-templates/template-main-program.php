<?php /* Template Name: Main Program Page Template */ get_header(); ?>
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
							<article id="node-641" class="node node-pf-basic node-promoted  clearfix">
								<header>
									<h1><?php the_title(); ?></h1>
								</header>
								<div class="content">
									<?php if( get_field('subheading') ): ?>
										<h5 class="subheading"><?php the_field('subheading'); ?></h5>
									<?php endif; ?>
									<?php if( get_field('hero_description') ): ?>
										<div class="hero-desc">
											<?php the_field('hero_description'); ?>
											<div class="hero-actions home-hero-links">
												<a class="btn-accent btn-block programs" href="<?php echo esc_url( home_url( '/' ) ); ?>request-info"><span class="icon-info">&nbsp;</span> Request Info</a>
											</div><!-- hero-actions -->
										</div><!-- hero-desc -->
									<?php endif; ?>
								</div><!-- content -->
							</article><!-- node-641 -->
						</div><!-- content -->
					</div><!-- block-system-main -->
				</div><!-- content -->
			</div><!-- content_main -->
			<aside id="sidebar_lower" class="region sidebar lower">
				<div class="content clearfix">
					<div id="block-block-2357" class="block block-block hidden-xs hidden-sm">
						<div class="content">
							<?php 
							$image = get_field('hero_image');	
							if( !empty($image) ): ?>	
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>  
						</div><!-- content -->
					</div><!-- block -->
				</div><!-- content -->
			</aside>
		</div><!-- content clearfix -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix">
			<?php
			// check for programs (parent repeater)
			$i = 0;
			if( have_rows('programs') ): ?>
				<?php 
				// loop through programs (parent repeater)
				while( have_rows('programs') ): the_row(); ?>
					<div id="block-views-programs-hub-page-block-<?=$i?>" class="block block-views">
						<h2><?php the_sub_field('program_category'); ?></h2>
							<div class="content">
								<div class="program-block ">
									<?php 
									// check for program (sub repeater)
									if( have_rows('program') ): ?>
										<ul class="clearfix">
											<?php 
											// loop through program (sub repeater)
											while( have_rows('program') ): the_row();
												// display each program
												$program_image = get_sub_field('program_image');
											?>
												<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
													<div class="field-container">
														<span class="field-content program-link">
															<a href="<?php the_sub_field('program_link'); ?>">
																<div class="program-container clearfix">
																	<div class="field-content menu-image clearfix">
																		<img src="<?php echo $program_image['url']; ?>" alt="<?php echo $program_image['alt'] ?>" />
																	</div><!-- field-content -->
																	<div class="inner-col-content">
																		<h6 class="field-content title"><?php the_sub_field('program_title'); ?></h6>
																		<div class="field-content degree-types"><?php the_sub_field('program_degree'); ?></div>
																		<div class="hub-page-subtext"></div>
																	</div><!-- inner-col-content -->
																</div><!-- program-container -->
															</a>
														</span>
													</div><!-- field-container -->
												</li>
											<?php endwhile; ?>
										</ul>
									<?php endif; //if( get_sub_field('program') ): ?>
								</div><!-- program-block -->
							</div><!-- content -->
					</div><!-- program-hub-page-block -->
				<?php $i++; endwhile; // while( has_sub_field('programs') ): ?>		
			<?php endif; // if( get_field('programs') ): ?>
		</div><!-- content -->
	</div><!-- content_bottom -->
</main>
<?php get_footer(); ?>