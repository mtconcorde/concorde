<?php get_header(); ?>
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
								<div class="hero-inner">
									<div class="content">
										<div class="row clearfix">
											<div class="col-6 col-sm-12">
												<h1 class="h2 heading">404 Page</h1>
												<h5 class="subheading">Sorry, the page you were looking for wasn't found. </h5>
												<div class="hero-desc">
													<form class="mod-inner1 clearfix" method="get" action="<?php echo home_url(); ?>" role="search">
														<div class="col-8 col-xs-12">
															<input type="search" name="s" class="outline" x-webkit-speech="" placeholder="<?php echo get_search_query(); ?>">
														</div><!-- col-8 -->
														<div class="col-4 col-xs-12">
															<input type="submit" class="btn-primary" value="Search">
														</div><!-- col-4 -->
													</form>
												</div><!-- hero-desc -->
											</div><!-- col-6 -->
											<div class="col-6 hidden-xs hidden-sm text-center">
												<img src="<?php echo content_url(); ?>/img/404-icon.svg" style="width: 50%">
											</div><!-- col-6 -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section>
						</div><!-- main -->
					</div><!-- content -->
				</div><!-- block-system-main -->
			</div><!-- content_main -->
		</div><!-- nxnwcontent -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div>
	</div><!-- content-bottom -->
</main>
<?php get_footer(); ?>
