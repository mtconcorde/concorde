<?php /* Template Name: Thank You Page Template */ get_header(); ?>
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
		<div class="content clearfix">
			<aside id="sidebar_upper" class="region sidebar upper">
				<div class="content clearfix">
					<div id="block-block-12" class="block block-block thank-you-video">
						<div class="content">
							<div class="video-wrapper">
								<video id="thankyouvideo" poster="<?php echo content_url(); ?>/img/thankyou-video-poster.jpg" preload="none">
									<source src="<?php echo content_url(); ?>/videos/CC-Student-Central-rev-3.mp4" type="video/mp4">
								</video>
								<div class="video-banner">
									<img id="thankyouplay" src="<?php echo content_url(); ?>/img/playty.png">
									<div class="video-text">
										<h5>Student Central</h5>
										<p>The key to success is...</p>
      								</div><!-- video-text -->
								</div><!-- video-banner -->
							</div><!-- video-wrapper -->
						</div><!-- content -->
					</div><!-- thank-you-video -->
					<div id="block-block-11" class="block block-block thank-you-quick-facts">   
						<div class="content">
							<div class="carousel" data-effect="slide">
								<div class="carousel-header">
									<h2>Concorde Quick Facts</h2>
								</div><!-- carousel-header -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="<?php echo content_url(); ?>/img/graduation.png">
										<div class="inner-col-content">
											<h6 class="alt">90,000 - graduates since 2000</h6>
										</div><!-- inner-col-content -->
	        						</div><!-- item -->
									<div class="item">
										<img src="<?php echo content_url(); ?>/img/completion.png">
										<div class="inner-col-content">
											<h6 class="alt">87% - average on-time program completion rate</h6>
										</div><!-- inner-col-content -->
	        						</div><!-- item -->
									<div class="item">
										<img src="<?php echo content_url(); ?>/img/placement.png">
										<div class="inner-col-content">
											<h6 class="alt">74% - average job placement rate</h6>
	            						</div><!-- inner-col-content -->
									</div><!-- item -->
								</div><!-- carousel-inner -->
								<span class="disclaimer">*As of Jan. 2015</span>
								<ul class="list-unstyled list-unformatted carousel-controls">
									<li class="carousel-control" data-control="prev"><a class="btn-primary-alt"><b class="chevron-left"></b></a></li>
									<li class="carousel-control" data-control="next"><a class="btn-primary-alt"><b class="chevron-right"></b></a></li>
	    						</ul>
	    					</div><!-- carousel -->
	    				</div><!-- content -->
					</div><!-- thank-you-quick-facts -->
				</div><!-- content -->
			</aside>
			<div id="content_main" class="region main">
				<div class="content clearfix">
					<div id="block-system-main" class="block block-system">
						<div class="content">
							<article id="node-716" class="node node-pf-basic node-promoted  clearfix">
								<header>
									<h1>Thank You - Schedule a Tour</h1>
								</header>
								<div class="content">
									<h2>Thank You, <span id="fnamecookie"></span></h2>
									<?php the_content(); ?>
									<p>Learn more about what Concorde and your potential fellow students are up to. Follow us on <a class="facebook-thankyou" href="https://www.facebook.com/concordecareerInc" target="_blank">Facebook</a> and <a href="https://twitter.com/ConcordeCareer" target="_blank">Twitter</a>, and <a href="http://feeds.feedburner.com/concorde/mcbd" target="_blank">subscribe to our blog</a> for regular updates!</p>	
								</div><!-- content -->
							</article><!-- node-promoted -->
						</div><!-- content -->
					</div><!-- block-system-main -->
					<div id="block-block-13" class="block block-block thankyou">
						<div class="content">
							<div id="social-bottom">
								<ul>
									<li class="facebook thankyou"><a href="https://www.facebook.com/concordecareerInc" target="_blank" class="facebook-thankyou">Like Us on Facebook</a></li>
									<li class="twitter thankyou"><a href="https://twitter.com/ConcordeCareer" target="_blank">Follow Us On Twitter</a></li>
									<li class="rss thankyou"><a href="http://feeds.feedburner.com/concorde/mcbd" target="_blank">Subscribe to Our Blog</a></li>
								</ul>
							</div><!-- social-bottom -->
						</div><!-- content -->
					</div><!-- thankyou -->
					<div id="block-block-2436" class="block block-block ">
						<div class="content">
							<p><strong>Have a family member or friend that is looking into going to school?</strong> Fill out the form below and we will contact them to discuss how we partner with our students to shape their unique success stories through real-world health care career training!</p>   
						</div><!-- content -->
					</div><!-- block-block -->
					<div id="block-block-14" class="block block-block thankyou">
						<div class="content">
						    <!--[if IE 9]>
								<style>
									body .refer [data-field-type="select"] .inner:after { display: none;}
								</style>
							<![endif]-->
							<!--[if IE 8]>
								<style>
									body .refer [data-field-type="select"] .inner:after {content: ' ';}
								</style>
							<![endif]-->
							<iframe style="display:none" name="hiddenFrame" id="hiddenFrame"></iframe>
							<p id="refer-thanks">Thanks!</p>
							<form name="enterpriseform" id="enterpriseform" action="<?php echo $form_submission_url; ?>" method="post" class="enterpriseform refer placeholders-initialized steps-initialized" novalidate="novalidate" target="hiddenFrame"> 
								<div class="field-wrapper" data-field-name="LocationID" data-field-type="select">
									<div class="field placeholder-show">
										<div class="inner">
											<select name="LocationID" id="LocationID" title="Location" data-validate="required" data-placeholder="Select a Campus"></select>
										</div><!-- inner -->
									</div><!-- field -->
                 				</div><!-- field-wrapper -->
				 				<div class="field-wrapper" data-field-name="CurriculumID" data-field-type="select" style="display:none">
				 					<div class="field placeholder-show">
				 						<div class="inner">
				 							<select name="CurriculumID" id="CurriculumID" title="Program" data-placeholder="Select a Program" data-placeholder-alternate="Select a Campus First">
					 							<option value="" selected="selected">Select a Campus First</option>
					 						</select>
				 						</div><!-- inner -->
   									</div><!-- field -->
								</div><!-- field-wrapper -->
								<div class="field-wrapper" data-field-name="firstname" data-field-type="text">
									<div class="field">
										<div class="inner">
											<input name="firstname" id="firstname" value="" placeholder="First Name" title="First Name" type="text" data-validate="required matchTitle matchPlaceholder">
										</div><!-- inner -->
                  					</div><!-- field -->
                 				</div><!-- field-wrapper -->
				 				<div class="field-wrapper" data-field-name="lastname" data-field-type="text">
				 					<div class="field">
				 						<div class="inner">
				 							<input name="lastname" id="lastname" value="" placeholder="Last Name" title="Last Name" type="text" data-validate="required matchTitle matchPlaceholder">
				 						</div><!-- inner -->
				 					</div><!-- field -->
                 				</div><!-- field-wrapper -->
				 				<div class="field-wrapper" data-field-name="email" data-field-type="email">
				 					<div class="field">
				 						<div class="inner">
				 							<input name="email" id="email" value="" placeholder="Email" title="Email" type="email" data-validate="required email">
				 						</div><!-- inner -->
                  					</div><!-- field -->
                 				</div><!-- field-wrapper -->
				 				<div class="field-wrapper" data-field-name="dayphone" data-field-type="tel">
				 					<div class="field">
				 						<div class="inner">
				 							<input name="dayphone" id="dayphone" value="" placeholder="Phone" title="Phone" type="tel" data-validate="required phoneUS">
				 						</div><!-- inner -->
                  					</div><!-- field -->
                 				</div><!-- field-wrapper -->
				 				<div class="field-wrapper" data-field-name="Referral" data-field-type="text">
				 					<div class="field">
				 						<div class="inner">
				 							<input name="Referral" id="Referral" value="" placeholder="Referred By" title="Referred By" type="text" data-validate="required matchTitle matchPlaceholder" data-validate-message="Please enter your name.">
				 						</div><!-- inner -->
                  					</div><!-- field -->
                 				</div><!-- field-wrapper -->
				 				<div class="field-wrapper actions" data-field-name="submit" data-field-type="submit">
				 					<div class="field">
				 						<button name="submit" id="submit" title="Refer Your Friend" type="submit">Refer Your Friend</button>
				 						<img src="<?php echo content_url(); ?>/img/large_arrow.png" class="submit-arrow">
				 					</div><!-- field -->
				 				</div><!-- field-wrapper -->
				 				<input name="FormID" id="FormID" value="6727" type="hidden">
				 				<input name="SourceID" id="SourceID" value="<?php echo $SourceID ?>" type="hidden">
				 				<input name="ActualUrl" id="ActualUrl" value="<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" type="hidden">
				 			</form>
				 		</div><!-- content -->
					</div><!-- thankyou -->
				</div><!-- content -->
			</div><!-- content_main -->
			<aside id="sidebar_lower" class="region sidebar lower">
				<div class="content clearfix"></div>
			</aside><!-- sidebar_lower -->
		</div><!-- content -->
	</div><!-- content -->
	<div id="content_bottom" class="region bottom">
		<div class="content clearfix"></div>
	</div><!-- content-bottom -->
</main>
<?php get_footer(); ?>