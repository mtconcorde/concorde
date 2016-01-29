<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<script src="//cdn.optimizely.com/js/4323152489.js"></script>
		
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<meta name="msvalidate.01" content="9FC6D74952BFC826956EF5065AC9858F" />

    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo content_url(); ?>/img/icons/favicon.ico">
	<link rel="apple-touch-icon" type="image/png" href="<?php echo content_url(); ?>/img/icons/apple-touch-icon-precomposed.png"><!-- iPhone -->
	<link rel="apple-touch-icon" type="image/png" sizes="72x72" href="<?php echo content_url(); ?>/img/apple-touch-icon-precomposed.png"><!-- iPad -->
	<link rel="apple-touch-icon" type="image/png" sizes="114x114" href="<?php echo content_url(); ?>/img/apple-touch-icon-precomposed.png"><!-- iPhone4 -->
	<link rel="icon" type="image/png" href="<?php echo content_url(); ?>/img/icons/favicon.ico"><!-- Opera Speed Dial, at least 144×114 px -->

	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700,600' rel='stylesheet' type='text/css'>
	<meta name="google-site-verification" content="bn14IDesq1wlaX06bAdFis8KcsMuNrkZrmPNM4Q22nw" />
	<meta name="msvalidate.01" content="5705E8BB645D9CDFEC5FB57E38A25824" />		
	<script type='text/javascript'>
		window.__wtw_lucky_site_id = 25519;

		(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://cdn') + '.luckyorange.com/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
		})();
	</script>
	<?php wp_head(); ?>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDiwiiJnlEJWTVtHoC4PML983F8RmcQPXc&sensor=false"></script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "70cc964d-75bd-41cc-8700-2134fb9bdb24", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	
</head>
<?php 
if (empty($_SESSION['SourceID']) || empty($_SESSION['PhoneNum'])) {
    set_source_phone(); 
}
?>
	<body <?php body_class(); ?>>
		<nav id="offscreen-nav" class="visible-xs visible-sm">
			<div class="mod-inner-info">
				<div class="nav-separator">
					<form class="mobile-search" method="get" action="<?php echo home_url(); ?>" role="search">
						<div class="row clearfix">
							<div class="col-3">
								<div class="pull-left">
									<b class="icon-close mobile-menu"></b>
								</div><!-- pull-left -->
							</div><!-- col-3 -->
							<div class="col-7">
								<input type="search" name="s" class="searchfield" placeholder="Search" x-webkit-speech="" placeholder="<?php _e( 'Search', 'html5blank' ); ?>">
							</div><!-- col-7 -->
							<div class="col-2">
								<button type="submit" class="btn-primary"><b class="icon-search"></b></button>
							</div><!-- col-2 -->
						</div><!-- row clearfix -->
					</form>
				</div><!-- nav-separator -->
				<div class="nav-separator nav-action-btns">
					<div class="row clearfix">
						<div class="col-6">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>request-info" class="btn-primary">
								<b class="icon-info"></b>
								<span>Request Info</span>
							</a>
						</div><!-- col-6 -->
						<div class="col-6">
							<a href="tel:<?=$_SESSION['PhoneNum']?>" class="btn-primary">
								<b class="icon-phone"></b>
								<span>Call Us</span>
							</a>
						</div><!-- col-6 -->
					</div><!-- row -->
				</div><!-- nav-separator nav-action-btns -->
				<div class="nav-separator">
					<?php header_mobile_nav(); ?>
				</div><!-- nav-separator -->
				<div class="nav-separator clearfix">
					<ul class="social list-unformatted">
						<li><a href="http://www.youtube.com/user/Go2Concorde" class="icon-youtube-white"></a></li>
						<li><a href="http://twitter.com/ConcordeCareer" class="icon-twitter-white"></a></li>
						<li><a href="https://www.facebook.com/ConcordeCareerInc" class="icon-facebook-white"></a></li>
					</ul>
				</div><!-- nav-separator -->
			</div><!-- mod-inner -->
		</nav>
		<div id="container">
			<header id="header">
				<div class="header-top">
					<div class="content clearfix">
						<ul>
							<li>
								<?php get_template_part('searchform'); ?>
							</li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni"><b class="icon-cap-lt"></b> Alumni</a></li>
							<li><a class="student-login" data-content="students"><b class="icon-flame-lt"></b> Students</a></li>
							<li><a class="live-chat" onclick="_gaq.push(['_trackEvent', 'Live Chat', 'Clicks', 'Live Chat']);"><b class="icon-chat"></b> Live Chat</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>request-info"><b class="icon-info"></b> Request Info</a></li>
							<li><a href="tel:<?=$_SESSION['PhoneNum']?>" id="nav-phone" class="click-to-call" data-content="call" onclick="_gaq.push(['_trackPageview', '/ctc/call']);"><b class="icon-phone"></b> <?=$_SESSION['PhoneNum']?></a></li>
						</ul>
					</div><!-- content clearfix -->
					<div id="header-more">
						<div class="mod-inner hidden" data-id="students">
							<div class="row clearfix">
								<div class="col-6">
									<a href="https://concorde.instructure.com/login" class="btn-primary">Online Course</a>
								</div><!-- col-6 -->
								<div class="col-6">
									<a href="https://cv.myconcorde.edu/" class="btn-primary">My Concorde Account</a>
								</div><!-- col-6 -->
							</div><!-- row clearfix -->
						</div><!-- mod-inner hidden -->
						<form action="http://getcalls.getstarts.com/euinc/ctc/call" method="post" class="mod-inner hidden" data-id="call">
							<div class="row clearfix">
								<div class="col-9">
									<input type="hidden" name="cmp" id="cmp" value="CA6ph0yaSP8yIAHx">
									<input type="text" name="number" placeholder="Phone Number">
									<!-- Original site had a select tag with campuses listed. This handles that input requirement (will it confuse Concorde call backs?) -->
									<input type="hidden" name="campus" value="none">
								</div><!-- col-9 -->
								<div class="col-3">
									<input type="submit" class="btn-secondary" value="Call Me">
								</div><!-- col-9 -->
							</div><!-- row -->
							<p class="disclaimer">By providing my contact information in this form and clicking the "submit" button, I provide my signature and consent to receive text messages and telephone calls from Concorde Career Colleges via automated technology at the mobile telephone number I have provided. I understand that I am not required to enter into this agreement as a condition of any purchase. I also understand that I may revoke my consent at any time.</p>
						</form>
					</div><!-- header-more -->
				</div><!-- header-top -->
				<div class="header-inner">
					<div class="content clearfix">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="icon-logo"></a>
						<nav id="block-system-main-menu" class="block block-system block-menu">
							<div class="content">
								<ul class="menu">
									<li class="first expanded menu-1164 level-1">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>program">Programs</a>
										<ul class="menu">
											<li class="first expanded col-6 menu-1240 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first expanded menu-1242 level-3">
														<span class="nolink">Medical &amp; Nursing</span>
														<ul class="menu">
															<li class="first leaf menu-1260 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-assistant">Medical Assistant / Medical Assisting <span>(Diploma, Associate)</span></a></li>
															<li class="leaf menu-1261 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/nursing">Nursing <span>(Associate)</span></a></li>
															<li class="leaf menu-1262 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/nursing-bridge-program">Nursing, Bridge Program Option <span>(Associate)</span></a></li>
															<li class="leaf menu-1263 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/practical-nursing">Practical Nursing <span>(Diploma)</span></a></li>
															<li class="last leaf menu-1264 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/vocational-nurse">Vocational Nurse / Vocational Nursing <span>(Diploma)</span></a></li>
														</ul>
													</li>
													<li class="expanded menu-1243 level-3">
														<span class="nolink">Dental</span>
														<ul class="menu">
															<li class="first leaf menu-1265 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/dental-assistant">Dental Assistant/ Dental Assisting <span>(Diploma, Associate)</span></a></li>
															<li class="last leaf menu-1266 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/dental-hygiene">Dental Hygiene <span>(Associate)</span></a></li>
														</ul>
													</li>
													<li class="last expanded menu-1244 level-3">
														<span class="nolink">Allied Health</span>
														<ul class="menu">
															<li class="first leaf menu-1275 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/health-information-management">Health Information Management <span>(Associate)</span></a></li>
															<li class="leaf menu-1276 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-laboratory-technician">Medical Laboratory Technician <span>(Associate)</span></a></li>
															<li class="leaf menu-1277 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-office-administration">Medical Office Administration <span>(Diploma)</span></a></li>
															<li class="leaf menu-1278 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/medical-office-professional">Medical Office Professional <span>(Diploma, Associate)</span></a></li>
															<li class="leaf menu-1279 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/patient-care-technician">Patient Care Technician <span>(Diploma)</span></a></li>
															<li class="last leaf menu-1280 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/pharmacy-technician">Pharmacy Technician <span>(Diploma, Associate)</span></a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="last expanded col-6 menu-1241 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first expanded menu-1245 level-3">
														<span class="nolink">Ancillary Services</span>
														<ul class="menu">
															<li class="first leaf menu-1267 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/massage-therapy">Massage Therapy <span>(Diploma)</span></a></li>
															<li class="leaf menu-1268 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/neurodiagnostic-technology">Neurodiagnostic Technology <span>(Associate)</span></a></li>
															<li class="leaf menu-1269 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/occupational-therapy-assistant">Occupational Therapy Assistant <span>(Associate)</span></a></li>
															<li class="leaf menu-1270 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/physical-therapist-assistant">Physical Therapist Assistant <span>(Associate)</span></a></li>
															<li class="leaf menu-1271 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/polysomnographic-technology">Polysomnographic Technology <span>(Diploma)</span></a></li>
															<li class="leaf menu-1272 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/radiologic-technology">Radiologic Technology <span>(Associate)</span></a></li>
															<li class="leaf menu-1273 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/respiratory-therapy">Respiratory Therapy <span>(Associate)</span></a></li>
															<li class="last leaf menu-1274 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/surgical-technologist">Surgical Technologist/ Surgical Technology <span>(Diploma, Associate)</span></a></li>
														</ul>
													</li>
													<li class="last expanded menu-1246 level-3">
														<span class="nolink">Pathway Program</span>
														<ul class="menu">
															<li class="first last leaf menu-1281 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>program/high-school-completion-program">High School Completion Program <span>(Diploma)</span></a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="expanded menu-1165 level-1">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>campus">Campuses</a>
										<ul class="menu">
											<li class="first expanded col-6 menu-1247 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first expanded menu-1249 level-3">
														<span class="nolink">California</span>
														<ul class="menu">
															<li class="first leaf menu-1282 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/garden-grove-california">Garden Grove, CA</a></li>
															<li class="leaf menu-1283 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/north-hollywood-california">North Hollywood, CA</a></li>
															<li class="leaf menu-1284 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-bernardino-california">San Bernardino, CA</a></li>
															<li class="last leaf menu-1285 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-diego-california">San Diego, CA</a></li>
														</ul>
													</li>
													<li class="expanded menu-1250 level-3">
														<span class="nolink">Colorado</span>
														<ul class="menu">
															<li class="first last leaf menu-1286 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/aurora-colorado">Aurora, CO (Denver Metro Area)</a></li>
														</ul>
													</li>
													<li class="last expanded menu-1251 level-3">
														<span class="nolink">Florida</span>
														<ul class="menu">
															<li class="first leaf menu-1287 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/jacksonville-florida">Jacksonville, FL</a></li>
															<li class="leaf menu-1288 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/miramar-florida">Miramar, FL (Miami Metro Area)</a></li>
															<li class="leaf menu-1289 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/orlando-florida">Orlando, FL</a></li>
															<li class="last leaf menu-1290 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/tampa-florida">Tampa, FL</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="last expanded col-6 menu-1248 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first expanded menu-1252 level-3">
														<span class="nolink">Mississippi</span>
														<ul class="menu">
															<li class="first last leaf menu-1291 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/southaven-mississippi">Southaven, MS</a></li>
														</ul>
													</li>
													<li class="expanded menu-1253 level-3">
														<span class="nolink">Missouri</span>
														<ul class="menu">
															<li class="first last leaf menu-1292 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/kansas-city-missouri">Kansas City, MO</a></li>
														</ul>
													</li>
													<li class="expanded menu-1254 level-3">
														<span class="nolink">Oregon</span>
														<ul class="menu">
															<li class="first last leaf menu-1293 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/portland-oregon">Portland, OR</a></li>
														</ul>
													</li>
													<li class="expanded menu-1255 level-3">
														<span class="nolink">Tennessee</span>
														<ul class="menu">
															<li class="first last leaf menu-1294 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/memphis-tennessee">Memphis, TN (Memphis Metro Area)</a></li>
														</ul>
													</li>
													<li class="last expanded menu-1256 level-3">
														<span class="nolink">Texas</span>
														<ul class="menu">
															<li class="first leaf menu-1295 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/dallas-texas">Dallas, TX (Dallas Metroplex)</a></li>
															<li class="leaf menu-1296 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/grand-prairie-texas">Grand Prairie, TX (Dallas Metroplex)</a></li>
															<li class="last leaf menu-1297 level-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>campus/san-antonio-texas">San Antonio, TX</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="expanded menu-1298 level-1">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile">Career Profiles</a>
										<ul class="menu">
											<li class="first expanded col-4 menu-1315 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first leaf menu-1321 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/dental-assistant">Dental Assistant</a></li>
													<li class="leaf menu-1300 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/dental-hygienist">Dental Hygienist</a></li>
													<li class="leaf menu-1301 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/electroneurodiagnostic-technologist">Electroneurodiagnostic Technologist</a></li>
													<li class="leaf menu-1302 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/health-information-management">Health Information Management</a></li>
													<li class="leaf menu-1303 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/massage-therapist">Massage Therapist</a></li>
													<li class="last leaf menu-1299 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/medical-assistant">Medical Assistant</a></li>
												</ul>
											</li>
											<li class="expanded col-4 menu-1316 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first leaf menu-1304 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/medical-laboratory-technician">Medical Laboratory Technician</a></li>
													<li class="leaf menu-1305 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/medical-office-administrator">Medical Office Administrator</a></li>
													<li class="leaf menu-1306 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/occupational-therapy-assistant">Occupational Therapy Assistant</a></li>
													<li class="leaf menu-1307 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/pharmacy-technician">Pharmacy Technician</a></li>
													<li class="leaf menu-1308 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/physical-therapist-assistant">Physical Therapist Assistant</a></li>
													<li class="last leaf menu-1309 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/polysomnographic-technologist">Polysomnographic Technologist</a></li>
												</ul>
											</li>
											<li class="last expanded col-4 menu-1317 level-2">
												<span class="separator"><hr></span>
												<ul class="menu">
													<li class="first leaf menu-1310 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/practical-nursing">Practical Nurse (LPN/LVN)</a></li>
													<li class="leaf menu-1311 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/radiologic-technologist">Radiologic Technologist</a></li>
													<li class="leaf menu-1312 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/registered-nurse">Registered Nurse</a></li>
													<li class="leaf menu-1313 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/respiratory-therapist">Respiratory Therapist</a></li>
													<li class="last leaf menu-1314 level-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>career-profile/surgical-technologist">Surgical Technologist</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="expanded menu-1322 level-1">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions">Admissions</a>
										<ul class="menu">
											<li class="first leaf menu-1320 level-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>financial-aid">Financial Aid</a></li>
											<li class="leaf menu-798 level-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>scholarships">Scholarships</a></li>
											<li class="leaf menu-1318 level-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>apply-online">Apply Online</a></li>
											<li class="last leaf menu-1319 level-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>schedule-tour">Schedule a Tour</a></li>
										</ul>
									</li>
									<li class="leaf menu-598 level-1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>military">For Military</a></li>
									<li class="last leaf menu-1258 level-1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>
								</ul>		
							</div><!-- content -->
						</nav>
						<div class="visible-xs visible-sm pull-right">
							<div class="mod-inner2">
								<b class="icon-menu mobile-menu"></b>
							</div><!-- mod-inner2 -->
						</div><!-- visible-xs -->
					</div><!-- content -->
				</div><!-- header-inner -->
			</header>
			<div id="upper" class="region">
				<div class="content clearfix"></div>
			</div><!-- upper -->