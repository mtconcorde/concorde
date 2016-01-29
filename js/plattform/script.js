// jQuery version 1.5.2 included - (newest jQuery version that creates no problems with plugins.js)
// Available functions:
//          isDesktop()   isTablet()   isMobile()   toggleSection()
//          $.enterpriseFormInit()   $.enterprisePlaceholderInit()   $.enterpriseStepsInit()   $.mask()   $.validate()   $.responsiveSlides()
//
//          note: enterpriseFormInit automatically runs enterprisePlaceholderInit and enterpriseStepsInit

$(document).ready(function() {

	// Get all campus locations...
	var locations_url = 'http://webservices.concorde.edu/webservices/json/locations';
	$.ajax(locations_url,{
		type: 'get',
		dataType: 'jsonp',
		failure: function(transport) {
			console.log('Error: ' + transport);
		},
		success: function(transport) {
			formPopulateLocations('#LocationID',transport.data);
		}
	});

	$('#LocationID').on('change',function(){
		var programs_url = 'http://webservices.concorde.edu/webservices/json/programs';
		var program_id = $(this).val();
		$.ajax(programs_url,{
			type: 'get',
			dataType: 'jsonp',
			data: {
				location_vid: program_id
			},
			failure: function(transport) {
				console.log(transport);
			},
			success: function(transport) {
				//console.log(transport);
				formPopulatePrograms('#CurriculumID',transport.data);
			}
		});
	});

	jQuery('.new_ppc .icon-logo').click(function(e) { e.preventDefault(); });
	if (!jQuery('body').hasClass('twostepform')) {
		jQuery('.requestinfo.twostepform').detach().hide();
		//jQuery('.requestinfo.onestepform').detach().insertBefore('#block-block-availablecampuses');
	}
	if (jQuery('body').hasClass('twostepform')) {
		jQuery('.requestinfo.onestepform').detach().hide();
		//jQuery('.requestinfo.twostepform').detach().insertBefore('#block-block-availablecampuses');
	}
	if (jQuery('#display-desktop,#display-tablet').is(':visible')) {
		jQuery('.newland .hero-blocks').stick_in_parent({bottoming: false});
	}
	if (jQuery('#display-mobile').is(':visible')) {
		jQuery('.newland .hero-blocks').detach().insertAfter('.main-content .content');
		jQuery('body').addClass('mobile');
	}
	jQuery('body .newland #requestinfo.landing .actions .field').prepend('<img src="/sites/all/themes/nxnw/img/white-arrow.png" class="formarrow" />');
	//jQuery('body .newland #requestinfo.landing [data-field-name~="CurriculumID"]').append('<img src="/sites/all/themes/nxnw/img/white-arrow.png" class="formarrow" />');
	
/*
    jQuery('#enterpriseform').enterpriseFormInit({
	    'populateform':true,
	    'inlineErrors': false,
	    //'thankyoupage': 'rq_thanks'
	    'nextstep': 'Next',
	    'prevstep': 'Back'
    });
*/

	function getMobileFormID(form, desktopID, mobileID) {
		jQuery(form).find('#submit').click(function(){
			var FORMID = desktopID;
			if(jQuery('body').width() < 500){
				FORMID = mobileID;
			}
			jQuery(form).find('#FormID').val(FORMID);
		});
	}

	getMobileFormID('#requestinfo.apply', '6726', '6841');
	getMobileFormID('#requestinfo.request', '6686', '6728');
	getMobileFormID('#enterpriseform.qcf', '6724', '6844');
	getMobileFormID('.page-node-304 #requestinfo', '6723', '6843');
	getMobileFormID('#enterpriseform.refer', '6727', '6851');

	function mobilePhoneNumber(id,mobileNumber) {
		if(jQuery('body').width() < 450){
			$(id).attr('href', "tel:" + mobileNumber).html('<b class="icon-phone"></b>' + mobileNumber);
		}
	}
	mobilePhoneNumber('#nav-phone', '1-800-992-1928');

	navigator.sayswho = (function(){
	    var ua= navigator.userAgent, tem, 
	    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
	    if(/trident/i.test(M[1])){
	        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
	        return 'IE '+(tem[1] || '');
	    }
	    if(M[1]=== 'Chrome'){
	        tem= ua.match(/\bOPR\/(\d+)/);
	        if(tem!= null) return 'Opera '+tem[1];
	    }
	    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
	    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
	    return M;
	})();

	var browser;
	switch(navigator.sayswho[0]) {
		case "Firefox":
			browser = "FF";
			break;
		case "Safari":
			browser = "Safari";
			break;
		case "Chrome":
			browser = "Chrome";
			break;
	}

	version = navigator.sayswho[1];
	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1;
	var isIpad = ua.indexOf("ipad") > -1;
	var isIphone = ua.indexOf("iphone") > -1;
	if(jQuery('body').width() > 970 && !isAndroid) {
		if ( (browser == "FF" && version <= 30) || (browser == "Safari" && version <= 6 )) {
			jQuery('#oldbrowser').addClass('active');
		}
	}

	$("#hideOldBrowser").click(function(){
		jQuery('#oldbrowser').removeClass('active');
		return false;
	});


	if (isAndroid || isIpad) {
		$('.node-type-basic-landing .main').css('background-attachment','scroll');
	}

	if ( isIphone && (browser == "Safari") && (version <= 6)) {
		$('.rss').hide();
	}

	if(jQuery('#requestinfo').hasClass('schedule')){
		jQuery('#requestinfo.schedule #BestDayToContact').change(function(){
			if(jQuery(this).val().length == 0){
				jQuery('#requestinfo.schedule #BestPeriodToContact').val('');
				jQuery('#requestinfo.schedule #BestPeriodToContact').prop('disabled', true);
				return false;
			}else{
				jQuery('#requestinfo.schedule #BestPeriodToContact').prop('disabled', false);
				if(jQuery(this).val() == 'Saturday'){
					jQuery('#requestinfo.schedule #BestPeriodToContact').val('');
					jQuery('#requestinfo.schedule #BestPeriodToContact option[value="Afternoon"]').prop('disabled', true);
					jQuery('#requestinfo.schedule #BestPeriodToContact option[value="Evening"]').prop('disabled', true);
				}else{
					jQuery('#requestinfo.schedule #BestPeriodToContact option[value="Afternoon"]').prop('disabled', false);
					jQuery('#requestinfo.schedule #BestPeriodToContact option[value="Evening"]').prop('disabled', false);
				}
			}

		});
	}
	function showHideCampusMap() {
		var view = $(this).data('view');
		var campusMap = jQuery('.campus-map');
		var campusList = jQuery('.campus-list');

		if (view == 'map') {
			campusMap.addClass('active');
			campusMap.removeClass('hidden');
			campusList.removeClass('active');
			campusList.addClass('hidden');
		} else {
			campusList.addClass('active');
			campusList.removeClass('hidden');
			campusMap.removeClass('active');
			campusMap.addClass('hidden');
		}
	}
	jQuery('.page-id-131 [class*="btn-"]').click(showHideCampusMap);

// 	jQuery('#LocationID > option:gt(0)').sort(function(a,b) { return (a.innerHTML > b.innerHTML) ? 1 : -1 }).appendTo('#LocationID');
// 	jQuery('#LocationID').change(function(){
// 		var secondOpt = jQuery('#CurriculumID option:contains(Help Me Choose)').remove();
// 		var opts = jQuery('#CurriculumID option:gt(0)').remove();
// 		secondOpt.appendTo('#CurriculumID');
// 		opts.sort(function(a,b) { return (a.innerHTML > b.innerHTML) ? 1 : -1 }).appendTo('#CurriculumID');
// 	});
// 
// 	jQuery('#requestinfo.schedule #LocationID, #requestinfo.refer #LocationID ').change(function(){
// 		var UndVal = jQuery('#CurriculumID option:contains(Help Me Choose)').val();
// 		jQuery('#CurriculumID').val(UndVal);
// 	});

	/*Thank You Page*/
	var video = $('#thankyouvideo').get(0);
	var playbutton = $('#thankyouplay');
	var videobanner = $('.video-banner');
	playbutton.click(function(){
		video.play();
		videobanner.hide();
		$('#thankyouvideo').prop('controls', true);
	});
	var referForm = $('.thankyou #enterpriseform.refer');
	$( ".thankyou #enterpriseform.refer #submit" ).click(function() {
	  	if (referForm.valid() ) {
	  		$(referForm).hide();
	  		$('#refer-thanks').show();
	  	} else {
	  		return false;
	  	}
	});
	$("input[name=interest]").change(function(){
		var interestedIn = $("input[name=interest]:checked").val();
		var returnQuery;
		switch(interestedIn) {
			case "programs":
				returnQuery = "?interestedIn=program";
				break;
			case "employment":
				returnQuery = "-info?interestedIn=employer";
				break;
			case "other":
				returnQuery = "-info?interestedIn=other";
				break;
			default:
				returnQuery = "";
		}
		var returnURL = "http://www.concorde.edu/thank-you-request" + returnQuery;
		$("#requestinfo.request #returntourl").val(returnURL);
	});

	function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + "; " + expires + ";path=/;";
	}

	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	    }
	    return "";
	}
	$('#submit').click(function(){
		var firstname = $('#firstname').val();
		setCookie("fname", firstname, 7);
		var campusID = $('#LocationID').val();
		setCookie("fbCampusLink", campusID, 7);
		var campusName = $('#LocationID option:selected').text();
		setCookie("campusName", campusName, 7);
	});

	$('#enterpriseform.refer #submit').click(function(){
		var referrerName  = $('#Referral').val();
        setCookie("referrerName", referrerName, 7);
	});

	var firstNameCookie = getCookie("fname");
	if (firstNameCookie != undefined) {
		$("#fnamecookie").html(firstNameCookie);
	}

	var campusNameCookie = getCookie("campusName");
	if (campusNameCookie != undefined || campusNameCookie != "Select a Campus") {
		$("#campusNameCookie").html(campusNameCookie);
	} else {
		$("#campusNameCookie").html("Concorde Career College");
	}

	var referrerNameCookie = getCookie("referrerName");
    if (referrerNameCookie != undefined) {
        $("#referrerNameCookie").html(referrerNameCookie);
    }


	var fbCampusCookie = getCookie("fbCampusLink");
	var fbCity;
	switch(fbCampusCookie) {
		case '36464':
			fbCity = "aurora";
			break;
		case '36468':
			fbCity = "dallas";
			break;
		case '36491':
			fbCity = "gardengrove";
			break;
		case '36493':
			fbCity = "GrandPrairie";
			break;
		case '36492':
			fbCity = "kansascity";
			break;
		case '36485':
			fbCity = "memphis";
			break;
		case '36486':
			fbCity = "northhollywood";
			break;
		case '36487':
			fbCity = "collegeportland";
			break;
		case '36484':
			fbCity = "sanantonio";
			break;
		case '36488':
			fbCity = "sanbern";
			break;
		case '36489':
			fbCity = "sandiego";
			break;
		case '40545':
			fbCity = "Southaven";
			break;
		case '36494':
			fbCity = "jacksonville";
			break;
		case '36481':
			fbCity = "miramar";
			break;
		case '36483':
			fbCity = "orlando";
			break;
		case '36490':
			fbCity = "tampa";
			break;
		default:
			fbCity = "Inc";
	}

	var facebook = "https://www.facebook.com/concordecareer" + fbCity;
	$(".facebook-thankyou").attr('href', facebook);

	jQuery('form.request-form .request-btn').click(function(){
		if((jQuery(this).hasClass('request-next') && jQuery('#enterpriseform').valid()) || jQuery(this).hasClass('request-back')){
			jQuery(this).parents('.request-form').find('.request-step-1, .request-step-2').slideToggle();
			return false;
		}
	});

	if(jQuery('#subscribeblog') && jQuery('#subscribeblog').length > 0){
		//PROGRAM PAGE EXTRA FOM
		jQuery('#subscribeblog').enterpriseFormInit({
			'populateform': false,
			'inlineErrors': false
			//'thankyoupage': 'rq_thanks'
			//'nextstep': 'Continue',
			//'prevstep': 'Back'
		});
		jQuery("#subscribeblog #submit").click(function() {
			if (jQuery('#subscribeblog').valid() ) {
				jQuery('#subscribeblog').hide();
				jQuery('#refer-thanks').show();
				setTimeout(function(){ jQuery('#hiddenFrame').attr('data-url', document.getElementById("hiddenFrame").contentWindow.location.href); }, 3000);

			} else {
				return false;
			}
		});
	}

	if(jQuery('#enterpriseform2') && jQuery('#enterpriseform2').length > 0){
		//PROGRAM PAGE EXTRA FOM
		jQuery('#enterpriseform2').enterpriseFormInit({
			'populateform': false,
			'inlineErrors': false
			//'thankyoupage': 'rq_thanks'
			//'nextstep': 'Continue',
			//'prevstep': 'Back'
		});


		formPopulateLocations('LocationID2');
		formPopulatePrograms('LocationID2', 'CurriculumID2');
		jQuery('#LocationID2').change(function(){formPopulatePrograms('LocationID2', 'CurriculumID2');});
		jQuery('#LocationID2 > option:gt(0)').sort(function(a,b) { return (a.innerHTML > b.innerHTML) ? 1 : -1 }).appendTo('#LocationID2');
		jQuery('#LocationID2').change(function(){
			var secondOpt = jQuery('#CurriculumID2 option:contains(Help Me Choose)').remove();
			var opts = jQuery('#CurriculumID2 option:gt(0)').remove();
			secondOpt.appendTo('#CurriculumID2');
			opts.sort(function(a,b) { return (a.innerHTML > b.innerHTML) ? 1 : -1 }).appendTo('#CurriculumID2');
		});
	}

	if(jQuery('#webform-client-form-684').length > 0){
		jQuery('#webform-client-form-684').attr('novalidate','');
		jQuery('input[name="submitted[row][contact][row1][first_wrapper][first_name]"]').attr('title', 'First Name');
		jQuery('input[name="submitted[row][contact][row1][last_wrapper][last_name]"]').attr('title', 'Last Name');
		jQuery('#webform-client-form-684').validate({
			rules: {
				'submitted[row][contact][row1][first_wrapper][first_name]':{
					matchTitle: true,
					required: true
				},
				'submitted[row][contact][row1][last_wrapper][last_name]':{
					matchTitle: true,
					required: true
				},
				'submitted[row][contact][row2][phone_wrapper][phone]': {
					phoneUS: true,
					required: false
				},
				'submitted[row][contact][row2][email_wrapper][email]': {
					email: true
				}
			},
			messages: {
				"submitted[row][contact][row1][first_wrapper][first_name]": "Please enter your first name.",
				"submitted[row][contact][row1][last_wrapper][last_name]": "Please enter your last name.",
				"submitted[row][contact][row2][phone_wrapper][phone]": "Please enter a valid phone number.",
				"submitted[row][contact][row2][email_wrapper][email]": "Please enter a valid email address.",
				"submitted[row][sidebar][campus][campus_near_you]": "Please select a campus."
			},
			onclick: false,
			onfocusout: false,
			onkeydown: false,
			onkeyup: false,
			onsubmit: true,
			showErrors: function(errorMap, errorList){var error = ''; jQuery.each(errorList,function(i, a){error += a.message + "\n";}); if(error.length > 0){window.alert(error);}}
		});
	}
	
		
	
		
//Populting programs based on query string	
//  function getUrlParameter(sParam) {
//             var sPageURL = window.location.search.substring(1);
//             var sURLVariables = sPageURL.split('&');
//             for (var i = 0; i < sURLVariables.length; i++) {
//                 var sParameterName = sURLVariables[i].split('=');
//                 if (sParameterName[0] == sParam) {
//                     return sParameterName[1];
//                 }
//             }
//         }
// 
//         // Checking query string for PPC
//         var targetLocation = getUrlParameter('LocationID');
// 		var targetCurriculum = getUrlParameter('CurriculumID');
// 		if(targetLocation && targetCurriculum){
// 			$('#LocationID').val(targetLocation).trigger('change');
// 		}
// 		$('#CurriculumID').val(targetCurriculum);
// 		$('.page-node-361 .subheading').text('Your new career is just around the corner.');
// 	
});
