<?php get_header('nxnw'); ?>
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
										<h1><?php _e( 'Search Results', 'html5blank' ); ?></h1>
									</div><!-- hero-inner -->
									<form class="search-form mod-inner1 clearfix" method="get" action="<?php echo home_url(); ?>" role="search">
										<label>Search results for</label>
										<input type="search" name="s" class="outline" x-webkit-speech="" placeholder="<?php echo get_search_query(); ?>">
										<input type="submit" class="btn-primary" value="Search">
									</form>
								</div><!-- content -->
							</section><!-- hero -->
							<section class="main-content search-results">		
								<div class="content">
									<?php get_template_part('loop'); ?>
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
