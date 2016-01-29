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
<form name="enterpriseform" id="enterpriseform" action="<?php echo $form_submission_url; ?>" method="post" class="enterpriseform qcf placeholders-initialized steps-initialized" novalidate="novalidate">
	<div class="field-wrapper" data-field-name="LocationID" data-field-type="select">
		<div class="field placeholder-show">
			<div class="inner">
				<select name="LocationID" id="LocationID" title="Location" data-validate="required" data-placeholder="Select a Campus"></select>
			</div><!-- inner -->
		</div><!-- placeholder-show -->
	</div><!-- field-wrapper -->
	<div class="field-wrapper" data-field-name="CurriculumID" data-field-type="select">
		<div class="field placeholder-show">
			<div class="inner">
				<select name="CurriculumID" id="CurriculumID" title="Program" data-validate="required" data-placeholder="Select a Program" data-placeholder-alternate="Select a Campus First"><option value="" selected="selected">Select a Campus First</option></select>
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
	<div class="field-wrapper actions" data-field-name="submit" data-field-type="submit">
		<div class="field">
			<button name="submit" id="submit" title="Learn More" type="submit">Send Request</button>
		</div><!-- field -->
	</div><!-- field-wrapper -->
	<div class="field-wrapper" data-field-name="disclaimer" data-field-type="html">
		<div class="disclaimer">
			<p>By providing my contact information in this form and clicking the "Send Request" button, I provide my signature and consent to receive text messages and telephone calls from Concorde Career Colleges via automated technology at the mobile telephone number I have provided. I understand that I am not required to enter into this agreement as a condition of any purchase. I also understand that I may revoke my consent at any time.</p>
		</div><!-- disclaimer -->
	</div><!-- field-wrapper -->
	<input name="FormID" id="FormID" value="6724" type="hidden">
	<input name="SourceID" id="SourceID" value="<?php echo $SourceID ?>" type="hidden">
	<input name="ActualUrl" id="ActualUrl" value="<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" type="hidden">
</form>