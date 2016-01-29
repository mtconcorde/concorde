<?php /* Template Name: Basic Landing Page Template */ get_header('landing-page'); ?>
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
<div id="block-system-main" class="block block-system">
	<div class="content">
   		<div class="node node-basic-landing node-promoted ">
   	 		<div class="main" style="background: #fff url('<?php echo content_url(); ?>/img/Miramar-Studetns_HDR.jpg') no-repeat top center; background-attachment:fixed; background-size:cover !important;">
   	 			<section class="hero cover" style="">
   	 				<div class="hero-inner alt">
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
										</div><!-- hero-desc -->
									<?php endif; ?>
								</div><!-- col-6 -->
								<div class="col-6 col-sm-12 hero-blocks">
									<div class="inner-col equal-col campus-hero-request bg-neutral-dark">
										<a name="requestinfo1"></a>
										<section id="requestinfo" class="landing">
											<header>
												Request Information
											</header>
											<div class="content">
												<form name="enterpriseform" id="enterpriseform" action="<?php echo $form_submission_url; ?>" method="post" class="enterpriseform  placeholders-initialized steps-added steps-initialized" novalidate="novalidate">				
													<fieldset class="step current">
														<?php if ( is_page(1313) ) {?>
															<input name="LocationID" id="LocationID" value="1144" type="hidden">
															<input name="CurriculumID" id="CurriculumID" value="1145" type="hidden"></input>
														<?php } else { ?>
															<div class="fields">
																<div class="field-wrapper" data-field-name="LocationID" data-field-type="select">
																	<label for="LocationID">Campus (required)</label>
																	<div class="field placeholder-show">
																		<div class="inner">
																			<select name="LocationID" id="LocationID" title="Location" data-validate="required" data-placeholder="Select a Location"></select>
																		</div><!-- inner -->
																	</div><!-- field -->
																</div><!-- field-wrapper -->
																<div class="field-wrapper" data-field-name="CurriculumID" data-field-type="select">
																	<label for="CurriculumID">Program (required)</label>
																	<div class="field placeholder-show">
																		<div class="inner">
																			<select name="CurriculumID" id="CurriculumID" title="Program" data-validate="required" data-placeholder="Select a Program" data-placeholder-alternate="Select a Location First">
																				<option value="" selected="selected">Select a Location First</option>
																			</select>
																		</div><!-- inner -->
																	</div><!-- field -->
																</div><!-- field-wrapper -->
																<div class="field-wrapper actions formnav"></div>
															</div><!-- fields -->
														<?php } ?>
														<div class="fields">
															<div class="field-wrapper" data-field-name="firstname" data-field-type="text">
																<label for="firstname">First Name (required)</label>
																<div class="field">
																	<div class="inner">
																		<input name="firstname" id="firstname" value="" placeholder="First Name" title="First Name" type="text" data-validate="required matchTitle matchPlaceholder">
																	</div><!-- inner -->
																</div><!-- field -->
															</div><!-- fields-wrapper -->
															<div class="field-wrapper" data-field-name="lastname" data-field-type="text">
																<label for="lastname">Last Name (required)</label>
																<div class="field">
																	<div class="inner">
																		<input name="lastname" id="lastname" value="" placeholder="Last Name" title="Last Name" type="text" data-validate="required matchTitle matchPlaceholder">
																	</div><!-- inner -->
																</div><!-- field -->
															</div><!-- field-wrapper -->
			                                                <div class="field-wrapper" data-field-name="zip" data-field-type="tel">
																<label for="zip">Zip Code (required)</label>
																<div class="field">
																	<div class="inner">
																		<input name="zip" id="zip" value="" placeholder="Zip Code" title="Zip Code" type="tel" data-validate="required matchPlaceholder zipUS">
																	</div><!-- inner -->
																</div><!-- field -->
															</div><!-- field-wrapper -->
															<div class="field-wrapper" data-field-name="phone" data-field-type="tel">
																<label for="phone">Phone (required)</label>
																<div class="field">
																	<div class="inner">
																		<input name="phone" id="phone" value="" placeholder="Phone" title="Phone" type="tel" data-validate="required phoneUS">
																	</div><!-- inner -->
																</div><!-- field -->
															</div><!-- field-wrapper -->
			                                                <div class="field-wrapper" data-field-name="email" data-field-type="email">
																<label for="email">Email (required)</label>
																<div class="field">
																	<div class="inner">
																		<input name="email" id="email" value="" placeholder="Email" title="Email" type="email" data-validate="required email">
																	</div><!-- inner -->
																</div><!-- field -->
															</div><!-- field-wrapper -->
															<div class="field-wrapper actions" data-field-name="submit" data-field-type="submit">
																<div class="field">
																	<button name="submit" id="submit" title="Send Request" type="submit">Request Info</button>
																</div><!-- field -->
															</div><!-- field-wrapper -->
															<div class="field-wrapper actions formnav"></div>
														</div><!-- fields -->
														<div class="field-wrapper" data-field-name="disclaimer" data-field-type="html">
															<div class="disclaimer">
																<p>By providing my contact information in this form and clicking the "Request Info" button, I provide my signature and consent to receive text messages and telephone calls from Concorde Career Colleges via automated technology at the mobile telephone number I have provided. I understand that I am not required to enter into this agreement as a condition of any purchase. I also understand that I may revoke my consent at any time.</p>
															</div><!-- disclaimer -->
														</div><!-- field-wrapper -->
													</fieldset>
													<input name="FormID" id="FormID" value="6690" type="hidden">
													<input name="SourceID" id="SourceID" value="<?php echo $SourceID ?>" type="hidden">
													<input name="ActualUrl" id="ActualUrl" value="<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" type="hidden">
												</form>
											</div><!-- content -->
										</section>
									</div><!-- inner-col -->
								</div><!-- col-6 -->
							</div><!-- row -->
						</div><!-- content -->
					</div><!-- hero-inner -->
				</section>
				<section class="main-content">
					<div class="content row-wrapper">
						<div class="row clearfix">
							<div class="col-12">
								<div class="inner-col equal-col">
									<div class="inner-col-content">                        
										<?php the_content(); ?>						
									</div><!-- inner-col-content -->
								</div><!--inner-col -->
							</div><!-- col-12 -->
						</div><!-- row -->
					</div><!-- content -->
				</section>
			</div><!-- main -->
		</div><!-- node-basic-landing -->
		<div id="display-desktop"></div>
		<div id="display-tablet"></div>
		<div id="display-mobile"></div>
  	</div><!-- content -->
</div><!-- block-system-main -->
<?php get_footer('landing-page'); ?>