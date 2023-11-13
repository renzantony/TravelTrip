document.addEventListener("DOMContentLoaded", function(){ window.addEventListener("DOMContentLoaded", function(){
	UAGBForms.init( {"block_id":"d95ed8f7","reCaptchaEnable":false,"reCaptchaType":"v2","reCaptchaSiteKeyV2":"","reCaptchaSecretKeyV2":"","reCaptchaSiteKeyV3":"","reCaptchaSecretKeyV3":"","afterSubmitToEmail":"rennyantony11@gmail.com","afterSubmitCcEmail":"","afterSubmitBccEmail":"","afterSubmitEmailSubject":"Form Submission","sendAfterSubmitEmail":true,"confirmationType":"message","hidereCaptchaBatch":false,"captchaMessage":"Please fill up the above captcha.","confirmationUrl":""}, '.uagb-block-d95ed8f7', 12 );
});
window.addEventListener( 'DOMContentLoaded', function() {
	UAGBLottie._run( {"block_id":"cd4e0287","lottieSource":"url","lottieURl":"https:\/\/lottie.host\/5fcc1bf3-50ce-413b-8954-c81db8386f6a\/wKY3Rvd8VS.json","jsonLottie":"","height":"","heightTablet":"","heightMob":"","width":"","widthTablet":"","widthMob":"","backgroundColor":"","backgroundHColor":"","loop":true,"speed":1,"reverse":false,"playOn":"none"}, 'uagb-block-cd4e0287' );
});
var ssLinksParent = document.querySelector( '.uagb-block-e0435393' );
ssLinksParent?.addEventListener( 'keyup', function ( e ) {
var link = e.target.closest( '.uagb-ss__link' );
if ( link && e.keyCode === 13 ) {
	handleSocialLinkClick( link );
}
});

ssLinksParent?.addEventListener( 'click', function ( e ) {
var link = e.target.closest( '.uagb-ss__link' );
if ( link ) {
	handleSocialLinkClick( link );
}
});

function handleSocialLinkClick( link ) {
var social_url = link.dataset.href;
var target = "";
if ( social_url == "mailto:?body=" ) {
	target = "_self";
}
var request_url = "";
if ( social_url.indexOf("/pin/create/link/?url=") !== -1 ) {
	request_url = social_url + encodeURIComponent( window.location.href ) + "&media=" + '';
} else {
	request_url = social_url + encodeURIComponent( window.location.href );
}
window.open( request_url, target );
}
 });