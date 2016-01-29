<?php /* Template Name: Employers Page Template */ get_header(); ?>
<?php 
	session_start();
	if (!empty($_SESSION['SourceID'])) {
	    $SourceID = $_SESSION['SourceID'];
	} else if (!empty($_REQUEST['SourceID'])){
	    $SourceID = $_REQUEST['SourceID'];
	} else {
	    $SourceID = '704403';
	}
?>
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
								<div class="employers-overlay">
									<div class="row clearfix">
										<div class="col-3">
											<b class="icon-building"></b>
										</div><!-- col-3 -->
										<div class="col-9">
											<h1>Employers of Distinction</h1>
										</div><!-- col-9 -->
									</div><!-- row -->
								</div><!-- employers-overlay -->
								<div class="marquee hidden-xs animate" data-direction="left">
									<div class="marquee-inner">
										<div class="item" style="order: 32;">
											<img src="<?php echo content_url(); ?>/img/employers/MedSyn.jpg" alt="">
										</div>
										<div class="item" style="order: 33;">
											<img src="<?php echo content_url(); ?>/img/employers/HC.jpg" alt="">
										</div>
										<div class="item" style="order: 34;">
											<img src="<?php echo content_url(); ?>/img/employers/PVM.jpg" alt="">
										</div>
										<div class="item active" style="order: 1;">
											<img src="<?php echo content_url(); ?>/img/employers/PD.jpg" alt="">
										</div>
										<div class="item" style="order: 2;">
											<img src="<?php echo content_url(); ?>/img/employers/Jewish.jpg" alt="">
										</div>
										<div class="item" style="order: 3;">
											<img src="<?php echo content_url(); ?>/img/employers/oakhill.jpg" alt="">
										</div>
										<div class="item" style="order: 4;">
											<img src="<?php echo content_url(); ?>/img/employers/westchase.jpg" alt="">
										</div>
										<div class="item" style="order: 5;">
											<img src="<?php echo content_url(); ?>/img/employers/Jeff.jpg" alt="">
										</div>
										<div class="item" style="order: 6;">
											<img src="<?php echo content_url(); ?>/img/employers/operationpar.jpg" alt="">
										</div>
										<div class="item" style="order: 7;">
											<img src="<?php echo content_url(); ?>/img/employers/tampageneral.jpg" alt="">
										</div>
										<div class="item" style="order: 8;">
											<img src="<?php echo content_url(); ?>/img/employers/dentalimplant.jpg" alt="">
										</div>
										<div class="item" style="order: 9;">
											<img src="<?php echo content_url(); ?>/img/employers/locicero.jpg" alt="">
										</div>
										<div class="item" style="order: 10;">
											<img src="<?php echo content_url(); ?>/img/employers/rxoasis.jpg" alt="">
										</div>
										<div class="item" style="order: 11;">
											<img src="<?php echo content_url(); ?>/img/employers/visionhsm.jpg" alt="">
										</div>
										<div class="item" style="order: 12;">
											<img src="<?php echo content_url(); ?>/img/employers/lamaestra.jpg" alt="">
										</div>
										<div class="item" style="order: 13;">
											<img src="<?php echo content_url(); ?>/img/employers/acrendo.jpg" alt="">
										</div>
										<div class="item" style="order: 14;">
											<img src="<?php echo content_url(); ?>/img/employers/syhc.jpg" alt="">
										</div>
										<div class="item" style="order: 15;">
											<img src="<?php echo content_url(); ?>/img/employers/lamesa.jpg" alt="">
										</div>
										<div class="item" style="order: 16;">
											<img src="<?php echo content_url(); ?>/img/employers/highly.jpg" alt="">
										</div>
										<div class="item" style="order: 17;">
											<img src="<?php echo content_url(); ?>/img/employers/Bayl.jpg" alt="">
										</div>
										<div class="item" style="order: 18;">
											<img src="<?php echo content_url(); ?>/img/employers/senior.jpg" alt="">
										</div>
										<div class="item" style="order: 19;">
											<img src="<?php echo content_url(); ?>/img/employers/sandiegoendoscopy.jpg" alt="">
										</div>
										<div class="item" style="order: 20;">
											<img src="<?php echo content_url(); ?>/img/employers/VA.jpg" alt="">
										</div>
										<div class="item" style="order: 21;">
											<img src="<?php echo content_url(); ?>/img/employers/koe.jpg" alt="">
										</div>
										<div class="item" style="order: 22;">
											<img src="<?php echo content_url(); ?>/img/employers/Free.jpg" alt="">
										</div>
										<div class="item" style="order: 23;">
											<img src="<?php echo content_url(); ?>/img/employers/MedS.jpg" alt="">
										</div>
										<div class="item" style="order: 24;">
											<img src="<?php echo content_url(); ?>/img/employers/life-care.jpg" alt="">
										</div>
										<div class="item" style="order: 25;">
											<img src="<?php echo content_url(); ?>/img/employers/uc-irvine.jpg" alt="">
										</div>
										<div class="item" style="order: 26;">
											<img src="<?php echo content_url(); ?>/img/employers/vna.jpg" alt="">
										</div>
										<div class="item" style="order: 27;">
											<img src="<?php echo content_url(); ?>/img/employers/victor.jpg" alt="">
										</div>
										<div class="item" style="order: 28;">
											<img src="<?php echo content_url(); ?>/img/employers/reche.jpg" alt="">
										</div>
										<div class="item" style="order: 29;">
											<img src="<?php echo content_url(); ?>/img/employers/hi-desert.jpg" alt="">
										</div>
										<div class="item" style="order: 30;">
											<img src="<?php echo content_url(); ?>/img/employers/CODEN-Colorado-Hospital-Association-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 31;">
											<img src="<?php echo content_url(); ?>/img/employers/CODEN-Southwest-Dental-Care-Logo_web.jpg" alt="">
										</div>
									</div><!-- marquee-inner -->
								</div><!-- marquee hidden-xs animate -->
								<div class="marquee hidden-xs animate" data-direction="right">
									<div class="marquee-inner">
										<div class="item" style="order: 5;">
											<img src="<?php echo content_url(); ?>/img/employers/FLORL-Greenberg-Dental-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 6;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Bayview-Medical-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 7;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Dental-Implant-Center-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 8;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Locicero-Medical-Group-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 9;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Medical-Intuition-Tech-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 10;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Operation-PAR-Inc-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 11;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Pediatric-Health-Alliance-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 12;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Porro-Guillermo-Logo_web.jpg" alt="">
											</div>
										<div class="item" style="order: 13;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-Spectra-Healthcare-Management-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 14;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-The-Hospice-of-Florida-Suncoast-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 15;">
											<img src="<?php echo content_url(); ?>/img/employers/TNMEM-Center-for-Oral-Facial-Surgery-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 16;">
											<img src="<?php echo content_url(); ?>/img/employers/TNMEM-Dr-Marrio-Smiles-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 17;">
											<img src="<?php echo content_url(); ?>/img/employers/FLTPA-First-Light-Home-Care-Logo_web.jpg" alt="">
										</div>
										<div class="item" style="order: 18;">
											<img src="<?php echo content_url(); ?>/img/employers/TNMEM-Artistic-Smiles-Orthodontics_web.jpg" alt="">
										</div>
										<div class="item" style="order: 19;">
											<img src="<?php echo content_url(); ?>/img/employers/TXSAN%20YourFamilyMedicalHome_web.jpg" alt="">
										</div>
										<div class="item" style="order: 20;">
											<img src="<?php echo content_url(); ?>/img/employers/Silverado_web.jpg" alt="">
										</div>
										<div class="item" style="order: 21;">
											<img src="<?php echo content_url(); ?>/img/employers/Dr.Avilshaaya_web.jpg" alt="">
										</div>
										<div class="item" style="order: 22;">
											<img src="<?php echo content_url(); ?>/img/employers/IAmSleep_web.jpg" alt="">
										</div>
										<div class="item" style="order: 23;">
											<img src="<?php echo content_url(); ?>/img/employers/Midwaysleeplab_web.jpg" alt="">
										</div>
										<div class="item" style="order: 24;">
											<img src="<?php echo content_url(); ?>/img/employers/Lindero-Canyon-Dental-Group_web.jpg" alt="">
										</div>
										<div class="item" style="order: 25;">
											<img src="<?php echo content_url(); ?>/img/employers/VMS-SurgeryCenter_web.jpg" alt="">
										</div>
										<div class="item" style="order: 26;">
											<img src="<?php echo content_url(); ?>/img/employers/InterstateRehab_web.jpg" alt="">
										</div>
										<div class="item" style="order: 27;">
											<img src="<?php echo content_url(); ?>/img/employers/MCS_HollywoodWorkSource_web.jpg" alt="">
										</div>
										<div class="item" style="order: 28;">
											<img src="<?php echo content_url(); ?>/img/employers/WestCoastCorfs_web.jpg" alt="">
										</div>
										<div class="item" style="order: 29;">
											<img src="<?php echo content_url(); ?>/img/employers/Mend_web.jpg" alt="">
										</div>
										<div class="item" style="order: 30;">
											<img src="<?php echo content_url(); ?>/img/employers/CompleteHealthMedicalGroup_web.jpg" alt="">
										</div>
										<div class="item" style="order: 31;">
											<img src="<?php echo content_url(); ?>/img/employers/Zdenek_web.jpg" alt="">
										</div>
										<div class="item" style="order: 32;">
											<img src="<?php echo content_url(); ?>/img/employers/CriticalCareTrainingCenter_web.jpg" alt="">
										</div>
										<div class="item" style="order: 33;">
											<img src="<?php echo content_url(); ?>/img/employers/Masimo-Corp-Logo_web.jpg" alt="">
										</div>
										<div class="item active" style="order: 1;">
											<img src="<?php echo content_url(); ?>/img/employers/MehraVistaHealth_web.jpg" alt="">
										</div>
										<div class="item" style="order: 2;">
											<img src="<?php echo content_url(); ?>/img/employers/CostDentalOrthodontics_web.jpg" alt="">
										</div>
										<div class="item" style="order: 3;">
											<img src="<?php echo content_url(); ?>/img/employers/HealthOneSwedishMedicalCenter_web.jpg" alt="">
										</div>
										<div class="item" style="order: 4;">
											<img src="<?php echo content_url(); ?>/img/employers/HOME-CARE-SVCS_web.jpg" alt="">
										</div>
									</div><!-- marquee-inner -->
								</div><!-- marquee hidden-xs animate -->
							</section><!-- hero -->
							<section class="main-content">
								<div class="content">
									<div class="page-desc-center">
										<h3>Expect the Best From Our Graduates</h3>
										<p>Our Graduate Employment professionals are committed to providing the medical community with trained, qualified, "job ready" personnel. We have partnered with physicians, hospitals, insurance companies, and other medical providers for years to ensure that our graduates become valued members of the health care delivery system. We invite you to take advantage of our services and look forward to meeting your hiring needs.</p>			
									</div>
									<div class="row clearfix">
										<div class="col-5 col-sm-12">
											<ul class="list-unstyled list-tabs">
												<li data-tab-id="1" class="active"><span></span>Hire a graduate</li>
												<li data-tab-id="2" class=""><span></span>Externship &amp; Clinical Experience</li>
												<li data-tab-id="3" class=""><span></span>Advance Your Employees</li>
												<li data-tab-id="4" class=""><span></span>Join our Program Advisory Committee</li>
												<li data-tab-id="5" class=""><span></span>Our Valuable Community Partnerships</li>
											</ul>
										</div>
										<div class="col-7 col-sm-12">
											<div class="list-tabs-content">
												<div class="mod-inner bg-neutral-light active" data-content-id="1">
													<h3>Hire a graduate</h3>
													<h5 class="alt">Finding &amp; Hiring Employees</h5>
													<p></p><p>At Concorde - we understand that your employees are the lifeblood of your company, and should reflect the professional manner and high caliber expertise the public demands. Our graduates are sought after by many health care organizations, and are excited to take the next step in their pursuit of a rewarding health care career. We make it easy for you to fill your employment needs.</p><p></p>
													<h5 class="alt">Services</h5>
													<p></p><p>We provide services to make recruitment of employees a pleasant and effective experience. &nbsp;A few of the services provided are:</p><ul><li>Use of our facilities for on-site, multiple candidate interviewing.</li><li>On campus presentations to introduce your company and career opportunities.&nbsp;</li><li>No charges or fees for our placement services.</li><li>Pre-screening all candidates, personally assessing each candidate to ensure job readiness.</li><li>Coordinating specialty training for specific job descriptions.</li></ul><p></p>
												</div>
												<div class="mod-inner bg-neutral-light hidden" data-content-id="2">
													<h3>Externship &amp; Clinical Experience</h3>
													<h5 class="alt">The Externship/Clinical Experience</h5>
													<p></p><p>Our Extern Coordinators work with local employers to arrange externships for Dental Assistant, Medical Office Administration, and Medical Assistant students. The externship provides students with an opportunity to apply their classroom training in realistic, hands-on employment conditions. Program Directors and faculty in each of our allied health clinical and nursing programs work to establish clinical partnerships with local health care facilities. Students benefit from this practical hands-on training and mentorship, while at the same time our clinical affiliates gain added productivity through the students assistance.</p><p></p>
													<h5 class="alt">Benefits</h5>
													<p></p><ul><li>No cost to the employer.</li><li>No obligation to hire an extern.</li><li>Ability to accept or decline an extern.</li><li>Supervision by the training facility as well as Concorde school officials.</li><li>General liability and accident insurance on externship/clinical provided.</li><li>Opportunities to share your expertise and contribute to the future of your profession.</li><li>Cost-effective method of evaluating, screening, and training potential employees.</li></ul><p></p>
												</div>
												<div class="mod-inner bg-neutral-light hidden" data-content-id="3">
													<h3>Advance Your Employees</h3>
													<h5 class="alt">Benefits</h5>
													<p></p><p>Concorde Career Colleges helps health care employers nationwide advance the skills and professional knowledge of their workforce - leveraging nearly 50 years of experience in health care education and training. By partnering with us, you'll gain access to health care education curriculum and training programs developed by recognized industry professionals, as well as laboratory and training facilities that mirror the health care environments your employees are accustomed to.</p><p></p>
													<h5 class="alt">Flexible Learning Environments</h5>
													<p></p><p>Learning environments for your employees can be customized to meet the needs of your organization and your people. &nbsp;Concorde offers an online platform, campus-based training programs as well as programs conducted in classroom settings at your facility.&nbsp;</p><p></p>
													<h5 class="alt">Additional Benefits of a Partnership with Concorde</h5>
													<p></p><p>In addition to specialized health care education and training from an industry leader, as well as a choice of learning environments, you will benefit from:</p><ul><li>Provision of professional promotional materials to communicate your program.</li><li>Flexible financing of your program, including deferred payment plans.</li><li>Expanded enrollment availability for significant others and domestic partners, and dependant children.</li></ul><p></p>
												</div>
												<div class="mod-inner bg-neutral-light hidden" data-content-id="4">
													<h3>Join our Program Advisory Committee</h3>
													<h5 class="alt">Concorde's Mission</h5>
													<p></p><p>Concorde prepares committed students for successful employment in a rewarding health care profession through high-caliber training, real-world experience, and student-centered support.</p><p></p>
													<h5 class="alt">Your Role as a Committee Member</h5>
													<p></p><p>As a member of a Program Advisory Committee, you will provide us with insight and real-world experience related to the programs we currently offer. This experience will ensure that the students enrolled in our programs are receiving relevant training and opportunities for employment in their chosen fields of study</p><p></p>
													<h5 class="alt">Commitment to the Committee</h5>
													<p></p><p>Program Advisory Committees meet two times a year, usually in the spring and fall. The meetings typically last ninety minutes and include a meal. A minimum of one meeting a year will be held at the school campus and the second may be held at an offsite location.</p><p></p>
												</div>
												<div class="mod-inner bg-neutral-light hidden" data-content-id="5">
													<h3>Our Valuable Community Partnerships</h3>
													<h5 class="alt">Building a Workforce Within Our Communities</h5>
													<p></p><p>Community involvement and interaction between businesses, organizations and schools is critical to maintaining and building economic health and prosperity. &nbsp;Concorde holds strategic partnerships with many organizations that support this important mission.</p><p></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="stripe">
									<div class="content">
										<form class="webform-client-form" enctype="multipart/form-data" action="/request-info-employers" method="post" id="webform-client-form-684" accept-charset="UTF-8" novalidate="novalidate">
											<div>
												<div class="form-item webform-component webform-component-markup" id="webform-component-blurb">
													<div class="section-desc text-center">
														<h2>Request Info</h2>
														<p>Let us help solve your employment and staffing needs.  A Concorde representative will contact you shortly.</p>
													</div>
												</div>
												<fieldset class="webform-component-fieldset row clearfix request-form form-wrapper" placeholder="Row" id="webform-component-row">
													<div class="fieldset-wrapper">
														<fieldset class="webform-component-fieldset col-8 col-sm-12 form-wrapper" id="webform-component-row--contact">
															<div class="fieldset-wrapper">
																<fieldset class="webform-component-fieldset row clearfix form-wrapper" id="webform-component-row--contact--row1">
																	<div class="fieldset-wrapper">
																		<fieldset class="webform-component-fieldset col-6 col-xs-12 form-wrapper" id="webform-component-row--contact--row1--first-wrapper">
																			<div class="fieldset-wrapper">
																				<div class="form-item webform-component webform-component-textfield" id="webform-component-row--contact--row1--first-wrapper--first-name">
																					<label for="edit-submitted-row-contact-row1-first-wrapper-first-name">First Name <span class="form-required" title="This field is required.">*</span></label>
																					<input class=" form-text required" type="text" id="edit-submitted-row-contact-row1-first-wrapper-first-name" name="submitted[row][contact][row1][first_wrapper][first_name]" value="" size="60" maxlength="128" title="First Name">
																				</div>
																			</div>
																		</fieldset>
																		<fieldset class="webform-component-fieldset col-6 col-xs-12 form-wrapper" id="webform-component-row--contact--row1--last-wrapper">
																			<div class="fieldset-wrapper">
																				<div class="form-item webform-component webform-component-textfield" id="webform-component-row--contact--row1--last-wrapper--last-name">
																					<label for="edit-submitted-row-contact-row1-last-wrapper-last-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
																					<input class=" form-text required" type="text" id="edit-submitted-row-contact-row1-last-wrapper-last-name" name="submitted[row][contact][row1][last_wrapper][last_name]" value="" size="60" maxlength="128" title="Last Name">
																				</div>
																			</div>
																		</fieldset>
																	</div>
																</fieldset>
																<fieldset class="webform-component-fieldset row clearfix form-wrapper" id="webform-component-row--contact--row2">
																	<div class="fieldset-wrapper">
																		<fieldset class="webform-component-fieldset col-6 col-xs-12 form-wrapper" id="webform-component-row--contact--row2--phone-wrapper">
																			<div class="fieldset-wrapper">
																				<div class="form-item webform-component webform-component-textfield" id="webform-component-row--contact--row2--phone-wrapper--phone">
																					<label for="edit-submitted-row-contact-row2-phone-wrapper-phone">Phone <span class="form-required" title="This field is required.">*</span></label>
																					<input class=" form-text required" type="text" id="edit-submitted-row-contact-row2-phone-wrapper-phone" name="submitted[row][contact][row2][phone_wrapper][phone]" value="" size="60" maxlength="128">
																				</div>
																			</div>
																		</fieldset>
																		<fieldset class="webform-component-fieldset col-6 col-xs-12 form-wrapper" id="webform-component-row--contact--row2--email-wrapper">
																			<div class="fieldset-wrapper">
																				<div class="form-item webform-component webform-component-email" id="webform-component-row--contact--row2--email-wrapper--email">
																					<label for="edit-submitted-row-contact-row2-email-wrapper-email">Email <span class="form-required" title="This field is required.">*</span></label>
																					<input class="email col-12 form-text form-email required" type="email" id="edit-submitted-row-contact-row2-email-wrapper-email" name="submitted[row][contact][row2][email_wrapper][email]" size="60">
																				</div>
																			</div>
																		</fieldset>
																	</div>
																</fieldset>
																<fieldset class="webform-component-fieldset row clearfix form-wrapper" id="webform-component-row--contact--row3">
																	<div class="fieldset-wrapper">
																		<fieldset class="webform-component-fieldset col-6 col-xs-12 form-wrapper" id="webform-component-row--contact--row3--company-wrapper">
																			<div class="fieldset-wrapper">
																				<div class="form-item webform-component webform-component-textfield" id="webform-component-row--contact--row3--company-wrapper--company">
																					<label for="edit-submitted-row-contact-row3-company-wrapper-company">Company </label>
																					<input class=" form-text" type="text" id="edit-submitted-row-contact-row3-company-wrapper-company" name="submitted[row][contact][row3][company_wrapper][company]" value="" size="60" maxlength="128">
																				</div>
																				<div class="form-item webform-component webform-component-select" id="webform-component-row--contact--row3--company-wrapper--best-time-to-call">
																					<label for="edit-submitted-row-contact-row3-company-wrapper-best-time-to-call">Best Time to Call </label>
																					<select class="webform col-12 form-select" id="edit-submitted-row-contact-row3-company-wrapper-best-time-to-call" name="submitted[row][contact][row3][company_wrapper][best_time_to_call]">
																						<option value="" selected="selected">- None -</option>
																						<option value="Morning">Morning</option>
																						<option value="Afternoon">Afternoon</option>
																						<option value="Evening">Evening</option>
																					</select>
																				</div>
																			</div>
																		</fieldset>
																		<fieldset class="webform-component-fieldset col-6 col-xs-12 form-wrapper" id="webform-component-row--contact--row3--comments-wrapper">
																			<div class="fieldset-wrapper">
																				<div class="form-item webform-component webform-component-textarea" id="webform-component-row--contact--row3--comments-wrapper--comments">
																					<label for="edit-submitted-row-contact-row3-comments-wrapper-comments">Comments </label>
																					<div class="form-textarea-wrapper resizable">
																						<textarea class=" form-textarea" id="edit-submitted-row-contact-row3-comments-wrapper-comments" name="submitted[row][contact][row3][comments_wrapper][comments]" cols="60" rows="5"></textarea>
																					</div>
																				</div>
																			</div>
																		</fieldset>
																	</div>
																</fieldset>
															</div>
														</fieldset>
														<fieldset class="webform-component-fieldset col-4 col-sm-12 form-wrapper" id="webform-component-row--sidebar">
															<div class="fieldset-wrapper">
																<fieldset class="webform-component-fieldset bg-primary mod-inner-info form-wrapper" id="webform-component-row--sidebar--campus">
																	<div class="fieldset-wrapper">
																		<div class="form-item webform-component webform-component-select" id="webform-component-row--sidebar--campus--campus-near-you">
																			<label for="edit-submitted-row-sidebar-campus-campus-near-you">Campus near you <span class="form-required" title="This field is required.">*</span></label>
																			<select class="col-12 form-select required" id="edit-submitted-row-sidebar-campus-campus-near-you" name="submitted[row][sidebar][campus][campus_near_you]">
																				<option value="" selected="selected">- Select -</option>
																				<option value="Dallas, TX (Dallas Metroplex)">Dallas, TX (Dallas Metroplex)</option>
																				<option value="Denver Metro Area (Aurora, CO)">Denver Metro Area (Aurora, CO)</option>
																				<option value="Garden Grove, CA">Garden Grove, CA</option>
																				<option value="Grand Prairie, TX (Dallas Metroplex)">Grand Prairie, TX (Dallas Metroplex)</option>
																				<option value="Jacksonville, FL">Jacksonville, FL</option>
																				<option value="Kansas City, MO">Kansas City, MO</option>
																				<option value="Memphis Metro Area (Memphis, TN)">Memphis Metro Area (Memphis, TN)</option>
																				<option value="Miramar, FL (Miami Metro Area)">Miramar, FL (Miami Metro Area)</option>
																				<option value="North Hollywood, CA">North Hollywood, CA</option>
																				<option value="Online">Online</option>
																				<option value="Orlando, FL">Orlando, FL</option>
																				<option value="Portland, OR">Portland, OR</option>
																				<option value="San Antonio, TX">San Antonio, TX</option>
																				<option value="San Bernardino, CA">San Bernardino, CA</option>
																				<option value="San Diego, CA">San Diego, CA</option>
																				<option value="Southaven, MS">Southaven, MS</option>
																				<option value="Tampa, FL">Tampa, FL</option>
																			</select>
																		</div>
																	</div>
																</fieldset>
															</div>
														</fieldset>
													</div>
												</fieldset>
												<div class="form-item webform-component webform-component-checkboxes" id="webform-component-interests">
													<label class="element-invisible" for="edit-submitted-interests">Interests </label>
													<div id="edit-submitted-interests" class="form-checkboxes ">
														<div class="form-item form-type-checkbox form-item-submitted-interests-I-am-interested-in-hiring-a-Concorde-graduate">
															<input class=" form-checkbox" placeholder="Interests" type="checkbox" id="edit-submitted-interests-1" name="submitted[interests][I am interested in hiring a Concorde graduate]" value="I am interested in hiring a Concorde graduate">  
															<label class="option" for="edit-submitted-interests-1">I am interested in hiring a Concorde graduate </label>
														</div>
														<div class="form-item form-type-checkbox form-item-submitted-interests-I-am-interested-in-participating-in-Concorde's-extern/clinical-program">
															<input class=" form-checkbox" placeholder="Interests" type="checkbox" id="edit-submitted-interests-2" name="submitted[interests][I am interested in participating in Concorde's extern/clinical program]" value="I am interested in participating in Concorde's extern/clinical program"> 
															<label class="option" for="edit-submitted-interests-2">I am interested in participating in Concorde's extern/clinical program </label>
														</div>
														<div class="form-item form-type-checkbox form-item-submitted-interests-I-am-interested-in-participating-as-a-member-of-Concordes-health-care-Programs-Advisory-Committee">
															<input class=" form-checkbox" placeholder="Interests" type="checkbox" id="edit-submitted-interests-3" name="submitted[interests][I am interested in participating as a member of Concordes health care Programs Advisory Committee]" value="I am interested in participating as a member of Concordes health care Programs Advisory Committee">  
															<label class="option" for="edit-submitted-interests-3">I am interested in participating as a member of Concorde's health care Programs Advisory Committee </label>
														</div>
														<div class="form-item form-type-checkbox form-item-submitted-interests-I-am-interested-in-training-for-my-employees">
															<input class=" form-checkbox" placeholder="Interests" type="checkbox" id="edit-submitted-interests-4" name="submitted[interests][I am interested in training for my employees]" value="I am interested in training for my employees">  
															<label class="option" for="edit-submitted-interests-4">I am interested in training for my employees </label>
														</div>
													</div>
												</div>
												<input type="hidden" name="details[sid]">
												<input type="hidden" name="details[page_num]" value="1">
												<input type="hidden" name="details[page_count]" value="1">
												<input type="hidden" name="details[finished]" value="0">
												<input type="hidden" name="form_build_id" value="form-GD-rPoTbWfWL-YBCRFbhuQ7KjMagKuczO9veybmclI8">
												<input type="hidden" name="form_id" value="webform_client_form_684">
												<div class="form-actions form-wrapper" id="edit-actions">
													<input class="btn-accent form-submit" type="submit" id="edit-submit" name="op" value="Submit">
												</div>
											</div>
											<input name="SourceID" id="SourceID" value="<?php echo $SourceID ?>" type="hidden">
											<input name="ActualUrl" id="ActualUrl" value="<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" type="hidden">
										</form>			
									</div>
								</div>
							</section>
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
