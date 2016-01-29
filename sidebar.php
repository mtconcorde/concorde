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
<div class="col-4 col-sm-12 blog-sidebar">
	<div class="inner-col">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-widget-area')) ?>
		<div class="subscribe">
			<section id="requestinfo" class="subscribe">
				<header>Subscribe to Blog Updates</header>
				<div class="content">
					<iframe style="display:none" name="hiddenFrame" id="hiddenFrame"></iframe>
					<p id="refer-thanks">Thanks!</p>
					<form name="enterpriseform" id="subscribeblog" action="<?php echo $form_submission_url; ?>" method="post" class="enterpriseform subscribeblog placeholders-initialized steps-initialized" novalidate="novalidate" target="hiddenFrame">
						<div class="field-wrapper" data-field-name="categories" data-field-type="select">
							<div class="field placeholder-show">
								<div class="inner">
									<select name="categories" id="categories" title="Categories" data-validate="required" data-validate-message="Please select a category.">
										<option value="">Categories</option>
										<option value="All">All</option>
										<option value="Career Opportunities">Career Opportunities</option>
										<option value="Health Care Technology">Health Care Technology</option>
										<option value="Military">Military</option>
										<option value="News &amp; Events">News &amp; Events</option>
										<option value="Ancillary Services Programs">Ancillary Services Programs</option>
										<option value="Allied Health Programs">Allied Health Programs</option>
										<option value="Dental Programs">Dental Programs</option>
										<option value="Medical &amp; Nursing Programs">Medical &amp; Nursing Programs</option>
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
						<div class="field-wrapper" data-field-name="frequency" data-field-type="select">
							<div class="field placeholder-show">
								<div class="inner">
									<select name="frequency" id="frequency" title="Frequency" data-validate="required" data-validate-message="Please select a frequency.">
										<option value="">Frequency</option>
										<option value="Instant">Instant</option>
										<option value="Weekly">Weekly</option>
										<option value="Monthly">Monthly</option>
									</select>
								</div><!-- inner -->
							</div><!-- field -->
						</div><!-- field-wrapper -->
						<div class="field-wrapper actions" data-field-name="submit" data-field-type="submit">
							<div class="field">
								<button name="submit" id="submit" title="Yes, sign me up!" type="submit">Yes, sign me up!</button>
							</div><!-- field -->
						</div><!-- field-wrapper -->
						<input name="FormID" id="FormID" value="7114" type="hidden">
						<input name="SourceID" id="SourceID" value="<?php echo $SourceID ?>" type="hidden">
						<input name="ActualUrl" id="ActualUrl" value="<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" type="hidden">
					</form>
				</div><!-- content -->
			</section>
		</div><!-- subscribe -->
	</div><!-- inner-col -->
</div><!-- col-4 -->