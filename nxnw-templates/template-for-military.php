<?php /* Template Name: Military Page Template */ get_header(); ?>
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
													<h1 class="h2 heading"><?php the_title(); ?></h1>
													<?php if( get_field('subheading') ): ?>
														<h5 class="subheading"><?php the_field('subheading'); ?></h5>
													<?php endif; ?>
													<?php if( get_field('hero_description') ): ?>
														<div class="hero-desc">
															<?php the_field('hero_description'); ?>
															<div class="hero-actions">
																<a href="<?php echo esc_url( home_url( '/' ) ); ?>request-info" class="btn-accent">Request Info</a>
															</div><!-- hero-actions -->
														</div><!-- hero-desc -->
													<?php endif; ?>
											</div><!-- col-6 -->
											<div class="col-6 hidden-xs hidden-sm">
												<?php 
												$image = get_field('hero_image');	
												if( !empty($image) ): ?>	
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												<?php endif; ?>
											</div><!-- col-6 -->
										</div><!-- row -->
									</div><!-- content -->
								</div><!-- hero-inner -->
							</section><!-- hero -->
							<section class="main-content">
								<div class="content">
									<div class="row-wrapper">
										<div class="section-desc text-center">
											<?php the_content(); ?>
										</div><!-- section-desc -->
											<div class="row clearfix equal-heights">
												<div class="col-4 col-xs-12 col-sm-6">
													<div class="inner-col equal-col mod-inner-info mod-simple">
														<h6 class="extrabold">Educational Benefits</h6>
														<p>As a member of the military community, you are privileged to a variety of educational financing options. We can help you understand the various financing options available to you and determine which option is best for your situation. We can answer any questions you may have about the application process. In addition to the Federal Tuition Assistance and Top-Up Benefit programs, several tuition assistance resources are specific to the major military branches as well as to the National Guard and Reserves.</p>
													</div><!-- inner-col -->
												</div><!-- col-4 -->
												<div class="col-4 col-xs-12 col-sm-6">
													<div class="inner-col equal-col mod-inner-info mod-simple">
														<h6 class="extrabold">Industry Experienced</h6>
														<p>You were serious about your service.  We're serious about giving you a solid educational foundation to start the next phase of your life.  With high quality, industry experienced instructors - some of whom are veterans just like you - you will graduate from Concorde in a powerful position to launch a career in health care.  Our instructors are leaders and mentors, but most of all - dedicated to a positive experience for you and to your educational success.</p>
													</div><!-- inner-col -->
												</div><!-- col-4 -->
												<div class="col-4 col-xs-12 col-sm-6">
													<div class="inner-col equal-col mod-inner-info mod-simple">
														<h6 class="extrabold">Military Committed School</h6>
														<p>Concorde Career College is a Military Committed School. We know that a transition from military to civilian life can be challenging. Concorde works closely with you and your family to make sure the transition into school is as easy as possible. Our goal is to deliver the best experience for our military students.</p>
													</div><!-- inner-col -->
												</div><!-- col-4 -->
											</div><!-- row -->
										</div><!-- section-desc -->
										<div class="row clearfix">
											<div class="col-5 col-sm-12">
												<ul class="list-unstyled list-tabs">
													<li data-tab-id="1" class="active"><span></span>Tuition Assistance</li>
													<li data-tab-id="2" class=""><span></span>FAQ</li>
													<li data-tab-id="3" class=""><span></span>VA Benefits</li>
												</ul>
											</div><!-- col-5 -->
											<div class="col-7 col-sm-12">
												<div class="list-tabs-content">
													<div class="mod-inner bg-neutral-light active" data-content-id="1">
														<h3>Tuition Assistance</h3>
														<h5 class="alt">Concorde MTA Program</h5>
														<p></p>
														<p>In addition to the educational benefits that you receive, Concorde is now offering a Military Tuition Assistance (MTA) Program for military spouses and dependents. A good education is essential for a career, so we hope your family takes advantage of these education benefits.</p>
														<p></p>
														<h5 class="alt">What is the benefit and who is eligible?</h5>
														<p></p>
														<div>$1,000 military tuition assistance available, plus all registration fees waived for:</div>
														<ul>
															<li><span style="font-size: 13px;">Military spouses of active duty, active guard, reserves and veterans</span></li>
															<li>Children and step-children of active duty, active guard, reserves and veterans up to the age of 24</li>
														</ul>
														<p></p>
														<h5 class="alt">Required Documentation</h5>
														<p></p>
														<ul>
															<li>Active military: &nbsp;military ID</li>
															<li>Veterans: &nbsp;DD-214</li>
															<li>Spouses: &nbsp;Service Members military ID</li>
															<li>Children: &nbsp;Service Members military ID</li>
														</ul>
														<div>* It is unlawful to make copies of a military ID, only visual confirmation is needed.</div>
														<p></p>
														<h5 class="alt">Participating Campuses</h5>
														<p></p>
														<ul>
															<li>Aurora, Colorado</li>
															<li>Kansas City, Missouri</li>
															<li>San Diego, California</li>
														</ul>
														<p>* &nbsp;Online programs are not eligible for MTA program at this time.</p>
														<p></p>
													</div><!-- mod-inner 1 -->
													<div class="mod-inner bg-neutral-light hidden" data-content-id="2">
														<h3>FAQ</h3>
														<h5 class="alt">How Much is Tuition?</h5>
														<p></p>
														<p>Tuition cost can vary by program and location. Please select the campus where you are interested in attending on the <a href="http://www.concorde.edu/campus">Campuses</a> page&nbsp;and choose the program of interest. &nbsp;Each program page lists current tuition rates. &nbsp;If you prefer, you can contact an Admissions Representative for more details at 1-800-693-7010.</p>
														<p></p>
														<h5 class="alt">Is Concorde an Accredited School?</h5>
														<p></p>
														<p>Yes. Concorde Career Colleges are institutionally accredited by the Accrediting Commission of Career Schools and Colleges (ACCSC), which is recognized by the U.S. Department of Education as a national accrediting body. ACCSC is located in Arlington, Virginia. www.accsc.org. Our Memphis, Tennessee and Southaven, Mississippi campuses are accredited by the Council of Occupational Education (COE) www.council.org</p>
														<p></p>
														<h5 class="alt">Does Concorde Help Place Students After Graduation?</h5>
														<p></p>
														<p>Yes. Concorde offers valuable assistance to help you find that all-important health care job. We help with finding open positions within your field of study and assist with preparing and submitting your resume. Your advisor will also provide valuable information on a variety of job opportunities for the length of your career.</p>
														<p></p>
													</div><!-- mod-inner 2 -->
													<div class="mod-inner bg-neutral-light hidden" data-content-id="3">
														<h3>VA Benefits</h3>
														<h5 class="alt">Montgomery GI Bill</h5>
														<p></p>
														<div>The<a href="http://www.benefits.va.gov/gibill/montgomery_bill.asp"> </a>Montgomery GI Bill&nbsp;(MGIB) is available to those who enlist in the U.S. Armed Forces. There are two main programs:</div>
														<ul>
															<li>Montgomery GI Bill Active Duty (MGIB-AD) For active duty members who enroll and pay $100 per month for 12 months and are then entitled to receive a monthly education benefit once they have completed a minimum service obligation.</li>
															<li>Montgomery GI Bill Selected Reserve (MGIB-SR) For Reservists with a six-year obligation in the Selected Reserve who are actively drilling.</li>
														</ul>
														<p><a href="http://www.benefits.va.gov/gibill/montgomery_bill.asp">Montgomery GI Bill </a>details</p>
														<p></p>
														<h5 class="alt">Post-9/11 GI Bill</h5>
														<p></p>
														<p>If you have at least 90 days of aggregate active duty service after Sept. 10, 2001, and are still on active duty, or if you are an honorably discharged Veteran or were discharged with a service-connected disability after 30 days, you may be eligible for this VA-administered program.&nbsp;</p>
														<p><a href="http://www.benefits.va.gov/gibill/post911_gibill.asp">Post-9/11 GI Bill</a>&nbsp;details.</p>
														<p></p>
														<h5 class="alt">Yellow Ribbon Program</h5>
														<p></p>
														<div>A part of the Post-9/11 GI Bill, the Yellow Ribbon GI Education Enhancement Program makes additional tuition assistance available to eligible veterans whose tuition costs more than the highest in-state undergraduate tuition.<br>&nbsp;</div>
														<div><a href="http://www.benefits.va.gov/gibill/yellow_ribbon.asp">Yellow Ribbon Program</a>&nbsp;details.</div>
														<p></p>
													</div><!-- mod-inner 3 -->
												</div><!-- list-tabs-content -->
											</div><!-- col-7 -->
										</div><!-- row -->
									</div><!-- row-wrapper -->
								</div><!-- content -->
							</section><!-- main-content -->
						</div><!-- main -->
					</div><!-- content -->
				</div><!-- block-system-main -->
			</div><!-- content_main -->
		</div><!-- nxnwcontent -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div>
	</div><!-- content_bottom -->
</main>
<?php get_footer(); ?>
