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
							<p><img alt="Concorde students work in a dental lab." src="<?php echo content_url(); ?>/img/Program_Dental.jpg"></p>  
						</div><!-- content -->
					</div><!-- block -->
				</div><!-- content -->
			</aside>
		</div><!-- content clearfix -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix">
			<div id="block-views-programs-hub-page-block" class="block block-views">
				<h2>Medical &amp; Nursing</h2>
				<div class="content">
					<div class="program-block ">
						<ul class="clearfix">          
							<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-assistant">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/medical-assistant-91x91_0.jpg" alt="">
												</div><!-- field-content -->
												<div class="inner-col-content">
													<h6 class="field-content title">Medical Assistant/ Medical Assisting</h6>
													<div class="field-content degree-types">Diploma, Associate</div>
													<div class="hub-page-subtext"></div>
												</div><!-- inner-col-content -->
											</div><!-- program-container -->
										</a>
									</span>
								</div><!-- field-container -->
							</li>
							<li class="views-row views-row-2 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/nursing"><div class="program-container clearfix">
											<div class="field-content menu-image clearfix">
												<img src="<?php echo content_url(); ?>/img/registered-nurse-91x91_0.jpg" alt="">
											</div>
											<div class="inner-col-content">
												<h6 class="field-content title">Nursing</h6>
												<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-3 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/nursing-bridge-program">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/BPO_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Nursing, Bridge Program Option</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-4 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/practical-nursing">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/PN_0.jpg" alt="">
												</div>
											<div class="inner-col-content">
												<h6 class="field-content title">Practical Nursing</h6>
												<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-5 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/vocational-nurse">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/VN_0_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Vocational Nurse / Vocational Nursing</h6>
													<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
						</ul>
					</div>  
				</div>
			</div>
			<div id="block-views-programs-hub-page-block-1" class="block block-views">
				<h2>Dental</h2>
				<div class="content">
					<div class="program-block ">    
						<ul class="clearfix">          
							<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/dental-assistant">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/DA_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Dental Assistant/ Dental Assisting</h6>
													<div class="field-content degree-types">Diploma, Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-2 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/dental-hygiene"><div class="program-container clearfix">
											<div class="field-content menu-image clearfix">
												<img src="<?php echo content_url(); ?>/img/DH_0_0.jpg" alt="">
											</div>
											<div class="inner-col-content">
												<h6 class="field-content title">Dental Hygiene</h6>
												<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
						</ul>
					</div>  
				</div>
			</div>
			<div id="block-views-programs-hub-page-block-2" class="block block-views">
				<h2>Ancillary Services</h2>
				<div class="content">
					<div class="program-block ">    
						<ul class="clearfix">          
							<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/massage-therapy">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/MT2_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Massage Therapy</h6>
													<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-2 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/neurodiagnostic-technology">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/NDT_0_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Neurodiagnostic Technology</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-3 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/occupational-therapy-assistant">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/HPT_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Occupational Therapy Assistant</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-4 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/physical-therapist-assistant">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/physical-therapist-assistant-91x91_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Physical Therapist Assistant </h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-5 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/polysomnographic-technology">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/PSG_0_0.JPG" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Polysomnographic Technology</h6>
													<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-6 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/radiologic-technology">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/RA_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Radiologic Technology</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-7 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/respiratory-therapy">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/respiratory-therapist-91x91_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Respiratory Therapy</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-8 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/surgical-technologist">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/surgical-technologist-91x91_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Surgical Technologist/ Surgical Technology</h6>
													<div class="field-content degree-types">Diploma, Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
						</ul>
					</div>  
				</div>
			</div>
			<div id="block-views-programs-hub-page-block-3" class="block block-views">
				<h2>Allied Health</h2>
				<div class="content">
					<div class="program-block ">    
						<ul class="clearfix">          
							<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/health-information-management">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/HIM_0_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Health Information Management</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-2 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-laboratory-technician">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/MLT_0_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Medical Laboratory Technician</h6>
													<div class="field-content degree-types">Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-3 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-office-administration">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/MOA_0_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Medical Office Administration</h6>
													<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-4 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-office-professional">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/Phone_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Medical Office Professional</h6>
													<div class="field-content degree-types">Diploma, Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-5 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/patient-care-technician">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/PC_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Patient Care Technician</h6>
													<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
							<li class="views-row views-row-6 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/pharmacy-technician">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/PT_1_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">Pharmacy Technician</h6>
													<div class="field-content degree-types">Diploma, Associate</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
						</ul>
					</div>  
				</div>
			</div>
			<div id="block-views-programs-hub-page-block-4" class="block block-views">
				<h2>Pathway Program</h2>
				<div class="content">
					<div class="program-block ">    
						<ul class="clearfix">          
							<li class="views-row views-row-1 col-4 col-sm-6 col-xs-12">
								<div class="field-container">
									<span class="field-content program-link">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program/high-school-completion-program">
											<div class="program-container clearfix">
												<div class="field-content menu-image clearfix">
													<img src="<?php echo content_url(); ?>/img/highschool_0_0.jpg" alt="">
												</div>
												<div class="inner-col-content">
													<h6 class="field-content title">High School Completion Program</h6>
													<div class="field-content degree-types">Diploma</div>
													<div class="hub-page-subtext"></div>
												</div>
											</div>
										</a>
									</span>
								</div>
							</li>
						</ul>
					</div>  
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
