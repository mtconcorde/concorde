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
	<script type="text/javascript">stLight.options({publisher: "dr-f076c7f3-b955-4859-a8e9-5b2fb220c67e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	
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
					<form class="mobile-search" method="get" action="<?php echo home_url(); ?>">
						<div class="row clearfix">
							<div class="col-3">
								<div class="pull-left">
									<b class="icon-close mobile-menu"></b>
								</div><!-- pull-left -->
							</div><!-- col-3 -->
							<div class="col-7">
								<input type="search" name="s" class="searchfield" placeholder="Search">
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
								<?php header_desktop_nav(); ?>
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