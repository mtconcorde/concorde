<?php /* Template Name: Main Campus Page Template */ get_header(); ?>
<main id="main">
	<div id="content_top" class="region top">
		<div class="content clearfix"></div>
	</div><!-- content_top -->
	<div id="content">
		<div class="content clearfix">
			<aside id="sidebar_upper" class="region sidebar upper">
				<div class="content clearfix">
					<div id="block-block-2428" class="block block-block hidden-xs hidden-sm">
						<div class="content">
							<p>
								<?php 
								$image = get_field('hero_image');	
								if( !empty($image) ): ?>	
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</p>  
						</div><!-- content -->
					</div><!-- block -->
				</div><!-- content -->
			</aside><!-- sidebar_upper -->
			<div id="content_main" class="region main">
				<div class="content clearfix">
					<div id="block-system-main" class="block block-system">
						<div class="content">
							<article id="node-705" class="node node-pf-basic node-promoted  clearfix">
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
											<ul class="list-unstyled home-hero-links row clearfix">
												<li class="col-6 col-xs-12"><a class="btn-accent btn-block" href="<?php echo esc_url( home_url( '/' ) ); ?>request-info"><span class="icon-info">&nbsp;</span> Request Info</a></li>
												<li class="col-6 col-xs-12"><a class="btn-primary btn-block schedule" href="<?php echo esc_url( home_url( '/' ) ); ?>schedule-tour"><span class="icon-schedule">&nbsp;</span> Schedule A Tour</a></li>
											</ul>
										</div><!-- hero-desc -->
									<?php endif; ?>
								</div><!-- content -->
							</article>
						</div><!-- content -->
					</div><!-- block-system-main -->
				</div><!-- content -->
			</div><!-- content_main -->
			<aside id="sidebar_lower" class="region sidebar lower">
				<div class="content clearfix"></div>
			</aside><!-- sidebar_lower -->
		</div><!-- content -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix">
			<div id="block-block-2429" class="block block-block ">
				<div class="content">
					<div class="display-filter clearfix hidden-xs hidden-sm">
						Show:<br>
						<div class="clearfix">
							<div class="btn-primary-alt outline" data-view="map">Map</div>
							<div class="btn-primary-alt outline active" data-view="list">List</div>
						</div><!-- clearfix -->
					</div><!-- display-filter -->
				</div><!-- content -->
			</div><!-- block -->
			<div id="block-block-2430" class="block block-block ">
				<div class="content">
					<div class="campus-map hidden hidden-xs hidden-sm clearfix" data-view="map">
						<script>
							<!--//--><![CDATA[// ><!--
							var markers = [{"name":"Dallas, TX (Dallas Metroplex)","url":"campus\/dallas-texas","lat":"32.9183685","long":"-96.7415604"},{"name":"Denver Metro Area (Aurora, CO)","url":"campus\/aurora-colorado","lat":"39.718869","long":"-104.8671494"},{"name":"Garden Grove, CA","url":"campus\/garden-grove-california","lat":"33.774675","long":"-117.938405"},{"name":"Grand Prairie, TX (Dallas Metroplex)","url":"campus\/grand-prairie-tx-dallas-metroplex","lat":"32.6773186","long":"-97.0546802"},{"name":"Jacksonville, FL","url":"campus\/jacksonville-florida","lat":"30.3321838","long":"-81.655651"},{"name":"Kansas City, MO","url":"campus\/kansas-city-missouri","lat":"39.068035","long":"-94.589634"},{"name":"Memphis Metro Area (Memphis, TN)","url":"campus\/memphis-tennessee","lat":"35.112633","long":"-89.891818"},{"name":"Miramar, FL (Miami Metro Area)","url":"campus\/miramar-florida","lat":"25.9763772","long":"-80.2902164"},{"name":"North Hollywood, CA","url":"campus\/north-hollywood-california","lat":"34.1864494","long":"-118.4037644"},{"name":"Orlando, FL","url":"campus\/orlando-florida","lat":"28.5383355","long":"-81.3792365"},{"name":"Portland, OR","url":"campus\/portland-oregon","lat":"45.5281797","long":"-122.6500858"},{"name":"San Antonio, TX","url":"campus\/san-antonio-texas","lat":"29.4241219","long":"-98.4936282"},{"name":"San Bernardino, CA","url":"campus\/san-bernardino-california","lat":"34.1083449","long":"-117.2897652"},{"name":"San Diego, CA","url":"campus\/san-diego-california","lat":"32.702454","long":"-117.103173"},{"name":"Southaven, MS","url":"campus\/southaven-mississippi","lat":"34.976161","long":"-89.989099"},{"name":"Tampa, FL","url":"campus\/tampa-florida","lat":"27.959004","long":"-82.514696"}];
							//--><!]]>
						</script>
						<div class="row clearfix">
							<div class="col-12">
								<div class="iframe-wrapper">
									<div id="google-campus-map" style="height: 1200px;">Loading campus map...</div>
								</div><!-- iframe-wrapper -->
							</div><!-- col-12 -->
						</div><!-- row -->
					</div><!-- campus-map -->
				</div><!-- content -->
			</div><!-- block-block-2430 -->
		</div><!-- content -->
	</div><!-- content_bottom -->
</main>
<div id="lower" class="region">
	<div class="content clearfix">
		<div id="block-views-campus-hub-page-block" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>California</h2>
					<p><img src="<?php echo content_url(); ?>/img/campuses/Cali.jpg" alt="Concorde Career Colleges California" /></p>     
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/garden-grove-california">Garden Grove, CA &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/north-hollywood-california">North Hollywood, CA &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-bernardino-california">San Bernardino, CA &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-diego-california">San Diego, CA &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container -->
			</div><!-- content -->
		</div><!-- block-views -->
		<div id="block-views-campus-hub-page-block-1" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Colorado</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Col.jpg" alt="Concorde Career Colleges Colorado" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/aurora-colorado">Aurora, CO (Denver Metro Area) &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container -->
			</div><!-- content -->
		</div><!-- block-views -->
		<div id="block-views-campus-hub-page-block-2" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Florida</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Fl.jpg" alt="Concorde Career Colleges Florida" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/jacksonville-florida">Jacksonville, FL &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/miramar-florida">Miramar, FL (Miami Metro Area) &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/orlando-florida">Orlando, FL &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/tampa-florida">Tampa, FL &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- view-container -->
			</div><!-- content -->
		</div><!--block-views -->
		<div id="block-views-campus-hub-page-block-3" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Mississippi</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Mis.jpg" alt="Concorde Career Colleges Mississippi" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/southaven-mississippi">Southaven, MS &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container -->
			</div><!-- content -->
		</div><!--block-views -->
		<div id="block-views-campus-hub-page-block-4" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Missouri</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Mo_0.jpg" alt="Concorde Career Colleges Missouri" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/kansas-city-missouri">Kansas City, MO &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container --> 
			</div><!-- content -->
		</div><!--block-views -->
		<div id="block-views-campus-hub-page-block-6" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Oregon</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Or.jpg" alt="Concorde Career Colleges Oregon" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/portland-oregon">Portland, OR &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container -->
			</div><!-- content -->
		</div><!--block-views -->
		<div id="block-views-campus-hub-page-block-7" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Tennessee</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Ten.jpg" alt="Concorde Career Colleges Tennessee" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/memphis-tennessee">Memphis, TN (Memphis Metro Area) &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container -->
			</div><!-- content -->
		</div><!--block-views -->
		<div id="block-views-campus-hub-page-block-8" class="block block-views col-4 col-md-12 campus-list active">
			<div class="content">
				<div class="views-container clearfix inner-col equal-col">
					<h2>Texas</h2>
					<img src="<?php echo content_url(); ?>/img/campuses/Tx.jpg" alt="Concorde Career Colleges Texas" />    
					<ul>          
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/dallas-texas">Dallas, TX (Dallas Metroplex) &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/grand-prairie-texas">Grand Prairie, TX (Dallas Metroplex) &gt;</a></span>
							</div><!-- field-container -->
						</li>
						<li class="">
							<div class="field-container">
								<span class="field-content col-6 col-xs-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-antonio-texas">San Antonio, TX &gt;</a></span>
							</div><!-- field-container -->
						</li>
					</ul>
				</div><!-- views-container -->
			</div><!-- content -->
		</div><!--block-views -->
	</div>
</div>
<?php get_footer(); ?>