<?php
  require('admin/Inc/db_config.php');
  require('admin/Inc/essentials.php');


	// Start session
	session_start();

	// Check if user is logged in
	function isUserLoggedIn() {
		return isset($_SESSION['user_id']); // Replace 'user_id' with the session key for your logged-in users
	}


?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="https://triprex.egenslab.com/xmlrpc.php">
<title>ACROSS AFRICA JOURNEYS &#8211; Tour &amp; Travel Agency  </title>
<meta name="robots" content="max-image-preview:large" />
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="alternate" type="application/rss+xml" title="TripRex &raquo; Feed" href="https://triprex.egenslab.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="TripRex &raquo; Comments Feed" href="https://triprex.egenslab.com/comments/feed/" />
<link rel="stylesheet" href="css/style1.css">
<style>
	#gb-widget-9964 {
		bottom: 14px;
		left: 16px;
		opacity: 1;
		transition: opacity 0.5s;
		box-sizing: border-box;
		position: fixed !important;
		z-index: 16000160 !important;
		direction: ltr;
		text-align: left;
		display: flex;
		align-items: center;
		flex-direction: row-reverse;
	}


	.kwCIV {
    flex-shrink: 0;
    opacity: 1;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: block;
    order: 1;
    padding: 5px;
    box-sizing: border-box;
    cursor: pointer;
    overflow: hidden;
    box-shadow: rgba(136, 136, 136, 0.4) 0px 1px 7px;
    transition: all 0.5s ease 0s;
    position: relative;
    z-index: 200;
    text-decoration: none !important;
    background-color: rgb(77, 194, 71) !important;
  }

  .ijfSyc {
    opacity: 1;
    display: block;
    margin-top: 7px;
    white-space: nowrap;
    margin-right: auto;
    text-decoration: none;
    width: 64px;
    font-family: Roboto, "Helvetica Neue", sans-serif;
    font-size: 11px;
    line-height: 11px;
    border: 0px;
    max-width: inherit;
    color: rgb(175, 175, 175) !important;
  }

  svg {
  height: auto;
  }

  /* Basic modal styling */
	#loginModal {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.7); /* Darken the background */
		display: flex;
		justify-content: center;
		align-items: center;
		z-index: 1000; /* Ensure it stays on top */
	}

	/* Modal content with card-like styling */
	.modal-content {
		background-color: #1e1e1e; /* Dark background for the card */
		padding: 30px;
		border-radius: 15px; /* Rounded corners for a card-like appearance */
		width: 350px;
		text-align: center;
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Give the card some depth with shadow */
		color: white; /* Make the text white */
		display: flex;
		flex-direction: column;
		align-items: center; /* Center the buttons horizontally */
	}

	/* Paragraph text inside the modal */
	.modal-content p {
		color: white; /* Ensure the paragraph text is white */
		font-size: 16px;
		margin-bottom: 20px; /* Add space between text and buttons */
	}

	/* Scoped Button Styles (Only affects buttons inside modal) */
	#loginModal .modal-content button {
		margin: 10px 5px; /* Add margin between the buttons (horizontal and vertical) */
		padding: 10px 20px;
		border: none;
		background-color: #61CE70;
		color: white;
		border-radius: 5px;
		cursor: pointer;
		transition: background-color 0.3s;
		width: 100%; /* Make buttons full width for better appearance */
	}

	#loginModal .modal-content button:hover {
		background-color: #54595F; /* Darken on hover */
	}

	/* Optional: Add media query for responsiveness */
	@media (max-width: 600px) {
		.modal-content {
			width: 90%; /* Ensure the card doesn't overflow on smaller screens */
		}
	}




</style>


<script>
	function handleFormSubmit(event) {
		event.preventDefault();  // Prevent the default form submission
		
		// Check which form is being submitted using its id
		var formId = event.target.id;

		if (formId === 'tour-query-form') {
			// Redirect 'specialForm' to a different page
			window.location.href = "tours.php";
		} else {
			// Redirect all other forms to the default page
			window.location.href = "error.php";
		}
	}
</script>
 

<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/triprex.b-cdn.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="https://triprex.egenslab.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.3" type="text/css" media="all" />
<style id="egns-stylesheet-inline-css" type="text/css">

        #app .breadcrumb-section {
            padding: 120px 0px 130px 0px;
        }
    
        #app .breadcrumb-section {
            padding: px px px px;
        }
    
        footer.footer-section {
            background-image: url(https://triprex.egenslab.com/wp-content/plugins/triprex-core//inc/theme-options/images/footer/footer-bg.png), linear-gradient(180deg, #1d231f 0%, #1d231f 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: relative;
        }
    
        #app .right-sidebar-menu {
            background-image: url(https://triprex.egenslab.com/wp-content/plugins/triprex-core//inc/theme-options/images/sidebar/h-sidebar-bg.png);

        }
    
</style>
<link rel="stylesheet" id="woocommerce-layout-css" href="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=8.7.0" type="text/css" media="all" />
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=8.7.0" type="text/css" media="only screen and (max-width: 768px)" />
<link rel="stylesheet" id="woocommerce-general-css" href="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=8.7.0" type="text/css" media="all" />
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="reviewx-magnific-popup-css" href="https://triprex.egenslab.com/wp-content/plugins/reviewx/resources/assets/storefront/css/magnific-popup.css?ver=1.6.100" type="text/css" media="all" />
<link rel="stylesheet" id="reviewx-css" href="https://triprex.egenslab.com/wp-content/plugins/reviewx/resources/assets/storefront/css/reviewx-public.css?ver=1.6.100" type="text/css" media="all" />
<link rel="stylesheet" id="egns-fonts-css" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&#038;family=Rubik:wght@300;400;500;600;700;800;900&#038;family=Sansita&#038;family=Satisfy&#038;display=swap" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/bootstrap.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="jQuery-ui-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/jquery-ui.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-icons-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/bootstrap-icons.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="fontawesome-all-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/all.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="fontawesome-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/fontawesome.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="animate-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/animate.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="fancybox-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/jquery.fancybox.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-bundle-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/swiper-bundle.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="daterangepicker-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/daterangepicker.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="slick-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/slick.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="slick-theme-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/slick-theme.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="boxicons-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/boxicons.min.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="egns-select2-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/select2.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="egns-nice-select-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/nice-select.css?ver=1707203014" type="text/css" media="all" />
<link rel="stylesheet" id="blog-and-pages-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/blog-and-pages.css?ver=1711705681" type="text/css" media="all" />
<link rel="stylesheet" id="woocommerce-custom-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/woocommerce-custom.css?ver=1711802927" type="text/css" media="all" />
<link rel="stylesheet" id="egns-style-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/css/style.css?ver=1711959722" type="text/css" media="all" />
<link rel="stylesheet" id="egns-theme-css" href="https://triprex.b-cdn.net/wp-content/themes/triprex/style.css?ver=62" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="https://triprex.egenslab.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.20.3" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="https://triprex.egenslab.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-7-css" href="https://triprex.b-cdn.net/wp-content/uploads/elementor/css/post-7.css?ver=1711982887" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-global-css" href="https://triprex.b-cdn.net/wp-content/uploads/elementor/css/global.css?ver=1711982887" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-26-css" href="https://triprex.b-cdn.net/wp-content/uploads/elementor/css/post-26.css?ver=1711982887" type="text/css" media="all" />
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.5.2" type="text/css" media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type="text/javascript" src="https://triprex.b-cdn.net/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.7.0" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/triprex.egenslab.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.7.0" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.7.0" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.7.0" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<link rel="https://api.w.org/" href="https://triprex.egenslab.com/wp-json/" /><link rel="alternate" type="application/json" href="https://triprex.egenslab.com/wp-json/wp/v2/pages/26" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://triprex.egenslab.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.5.2" />
<meta name="generator" content="WooCommerce 8.7.0" />
<link rel="canonical" href="https://triprex.egenslab.com/" />
<link rel="shortlink" href="https://triprex.egenslab.com/" />
<link rel="alternate" type="application/json+oembed" href="https://triprex.egenslab.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftriprex.egenslab.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://triprex.egenslab.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftriprex.egenslab.com%2F&#038;format=xml" />
<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<meta name="generator" content="Elementor 3.20.3; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
<style type="text/css">.company-logo img,.header-logo img,.mobile-logo-wrap img{width:154px!important;}</style><link rel="icon" href="assets/images/logo.icon.jpg" sizes="32x32" />
<link rel="icon" href="https://triprex.b-cdn.net/wp-content/uploads/2024/03/favicon.svg" sizes="192x192" />
<link rel="apple-touch-icon" href="https://triprex.b-cdn.net/wp-content/uploads/2024/03/favicon.svg" />
<meta name="msapplication-TileImage" content="https://triprex.b-cdn.net/wp-content/uploads/2024/03/favicon.svg" />
</head>
<body class="home page-template page-template-elementor_header_footer page page-id-26 wp-embed-responsive theme-triprex woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-26" itemtype="https://schema.org/WebPage">
<div id="app">
<div class="right-sidebar-menu">
<div class="sidebar-logo-area d-flex justify-content-between align-items-center">
<div class="sidebar-logo-wrap">
<a href="#"><img alt="logo" src="assets/images/logo-md.jpg"></a>
</div>
<div class="right-sidebar-close-btn">
<i class="bi bi-x"></i>
</div>
</div>
<div class="sidebar-content-wrap">
<div class="category-wrapper">
<h4>Tour Type</h4>
<div class="row g-4">
<div class="col-sm-4 col-6">
<a href="https://triprex.egenslab.com/tour-type/adventure-tours/" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<path d="M4.46323 18.5007C4.54289 19.8917 4.88158 21.193 5.41733 22.1647C5.70003 22.6907 6.12301 23.1281 6.63928 23.4282C7.15555 23.7283 7.74491 23.8795 8.34189 23.8649C8.31354 25.3894 8.24997 27.8407 8.1136 30.0205C7.62343 30.2056 7.1986 30.5309 6.89212 30.9558C6.58563 31.3808 6.41108 31.8866 6.39022 32.4101C6.32347 34.0062 6.32952 36.2988 6.72636 38.2229C6.42456 38.6071 6.26282 39.0828 6.26786 39.5713C6.2729 40.0598 6.44442 40.5321 6.75408 40.9099L8.57018 43.1093L7.37298 44.2767C7.31176 44.3365 7.26541 44.4097 7.23769 44.4906C7.20996 44.5715 7.20163 44.6578 7.21336 44.7425C7.2251 44.8272 7.25657 44.908 7.30524 44.9783C7.35391 45.0486 7.41843 45.1065 7.49358 45.1474L13.1546 48.2185C13.1546 48.2185 13.2619 51 15.6696 51H30.7233C31.7077 51 32.5085 50.105 32.5085 49.0048V48.1564C32.5116 47.6693 32.3469 47.1961 32.0421 46.8163C32.2767 46.6351 32.4862 46.4234 32.6649 46.1868C32.9326 45.8188 33.0935 45.384 33.1299 44.9303C33.1662 44.4767 33.0766 44.0218 32.8709 43.6158L32.6452 43.1646C32.4451 42.7639 32.3407 42.3222 32.3403 41.8742V36.8387C32.9417 36.4533 34.1957 35.4092 34.503 33.2621C34.5749 32.7307 34.5806 32.1924 34.5198 31.6596C34.3259 29.801 33.6276 25.4807 31.2231 22.5431L36.6363 21.772L37.9097 28.3151L35.4453 29.4398C35.3796 29.4693 35.3204 29.5114 35.271 29.5639C35.2216 29.6163 35.1831 29.678 35.1577 29.7454C35.1323 29.8128 35.1204 29.8845 35.1229 29.9565C35.1253 30.0285 35.1419 30.0993 35.1718 30.1648C35.2018 30.2303 35.2443 30.2892 35.2971 30.3382C35.3499 30.3872 35.4119 30.4253 35.4794 30.4502C35.547 30.4752 35.6188 30.4865 35.6908 30.4836C35.7628 30.4806 35.8334 30.4635 35.8987 30.4331L38.7543 29.1298C38.8659 29.0789 38.957 28.992 39.0131 28.883C39.0692 28.774 39.087 28.6492 39.0635 28.5289L38.9214 27.7983L46.3012 23.3767C46.4118 23.3105 46.4953 23.2073 46.5371 23.0853C46.5788 22.9634 46.5761 22.8306 46.5293 22.7105C44.6871 17.9777 41.683 13.8792 40.4078 12.2555L41.5647 11.4187C41.6251 11.3749 41.676 11.3192 41.714 11.255C41.7521 11.1907 41.7766 11.1194 41.7861 11.0454C41.7955 10.9713 41.7897 10.8961 41.7689 10.8244C41.7481 10.7527 41.7129 10.686 41.6653 10.6285C40.0315 8.65212 37.9973 7.49491 36.5787 6.87218C35.8062 6.53412 34.9842 6.32334 34.1444 6.24801C34.3125 5.64768 34.4006 5.02775 34.4062 4.40435C34.4076 4.3262 34.3923 4.24865 34.3612 4.17693C34.3301 4.10522 34.284 4.04102 34.226 3.98867C34.1679 3.93632 34.0993 3.89705 34.0248 3.8735C33.9503 3.84995 33.8715 3.84269 33.794 3.85219L33.057 3.94236C33.5171 2.78568 33.5081 1.49516 33.0318 0.345035C32.9957 0.254073 32.9358 0.174472 32.8585 0.114537C32.7811 0.0546025 32.689 0.0165301 32.5919 0.00429229C32.4948 -0.00794556 32.3962 0.00609967 32.3064 0.0449625C32.2166 0.0838253 32.1388 0.146082 32.0812 0.225236C32.0704 0.240052 30.9833 1.70106 28.6012 2.30914C27.8114 2.50165 26.994 2.5538 26.1862 2.46319C24.8564 2.32159 23.5119 2.42921 22.2215 2.78053C19.0489 3.68444 17.0189 6.75859 17.4995 9.9312C17.7004 11.2696 18.3397 12.5035 19.3172 13.4395C19.2857 13.9462 19.3428 14.4546 19.4861 14.9417C19.8315 16.357 20.8966 16.8166 21.7299 16.8905V22.4262L19.795 22.7607C19.5512 22.5149 19.2218 22.3729 18.8758 22.3643C18.6497 22.3591 18.4235 22.3706 18.199 22.3988C18.5977 19.8817 18.3454 17.3045 17.4662 14.9126C17.616 14.9285 17.7649 14.9444 17.9174 14.9604C17.9364 14.9624 17.9556 14.9634 17.9747 14.9634C18.1144 14.963 18.2487 14.9091 18.3498 14.8128C18.451 14.7164 18.5113 14.585 18.5185 14.4455C18.5257 14.3059 18.4791 14.169 18.3883 14.0628C18.2976 13.9566 18.1696 13.8892 18.0307 13.8745C17.676 13.8374 17.3216 13.7988 16.9673 13.7587C16.8188 13.467 16.6035 13.2145 16.3389 13.0219C16.0743 12.8293 15.7678 12.702 15.4446 12.6504L13.9312 12.4102C13.6828 12.3693 13.428 12.3957 13.1934 12.4868C12.9587 12.5779 12.7528 12.7302 12.597 12.9279C12.5383 13.0029 12.4871 13.0836 12.4442 13.1686C12.1817 13.1298 11.9194 13.0898 11.6572 13.0488C11.1528 12.9656 10.6537 12.8525 10.1626 12.7102C8.51124 12.2509 7.28919 12.7219 6.92342 12.894C6.12688 12.9974 5.44489 13.6509 4.99293 14.7517C4.68595 15.5438 4.50844 16.3801 4.46722 17.2286V17.2313C4.42856 17.5485 4.42322 17.8688 4.45129 18.1871C4.45638 18.2913 4.45718 18.3949 4.46323 18.5007ZM13.8743 23.4812C14.0107 23.7162 14.199 23.9168 14.425 24.0677C14.6509 24.2185 14.9083 24.3156 15.1776 24.3515L15.9832 24.4596L15.995 24.6826L13.001 28.053C13.0129 26.5261 12.9302 24.9999 12.7534 23.4832C13.1282 23.4678 13.5019 23.4671 13.8743 23.4812ZM24.618 49.9083H18.066V48.0938C18.0655 47.812 18.0418 47.5308 17.9953 47.2529H24.618V49.9083ZM11.6 31.2741L16.0699 26.2424C16.1836 28.8378 16.3122 32.9651 16.1403 35.691L15.4712 36.2418L11.6 31.2741ZM15.7551 37.4211L16.2432 37.0198C16.3489 37.4805 16.6064 37.8923 16.9743 38.189V44.9196C15.935 43.4499 14.4803 41.5921 12.9801 40.3059L15.7551 37.4211ZM11.6639 23.5685C11.9188 25.5204 11.9317 27.7228 11.893 29.3003L11.4092 29.8449H9.21808C9.34553 27.6956 9.4067 25.3357 9.43394 23.8591C9.8909 23.8304 10.3459 23.7758 10.7967 23.6957C11.0852 23.6444 11.3743 23.602 11.6639 23.5685ZM7.481 32.455C7.4974 32.0461 7.6717 31.6594 7.96726 31.3762C8.26283 31.0931 8.65664 30.9355 9.06594 30.9367H10.4463C10.3783 31.032 10.3428 31.1467 10.3452 31.2638C10.3475 31.3809 10.3876 31.4941 10.4594 31.5866L11.23 32.5758L7.63903 37.0775C7.45615 35.5439 7.40328 33.9976 7.481 32.455ZM7.59586 40.2141C7.44398 40.0285 7.36009 39.7967 7.35809 39.5569C7.35609 39.3171 7.43611 39.0839 7.58486 38.8958L11.9201 33.4615L14.6627 36.9822L9.35397 42.3437L7.59586 40.2141ZM14.2455 48.485V47.8937C14.2455 47.7954 14.219 47.6989 14.1687 47.6145C14.1185 47.53 14.0464 47.4607 13.96 47.4138L8.66513 44.5402L12.2108 41.0833C13.8128 42.4399 15.4061 44.5775 16.2478 45.7848C16.7216 46.4618 16.9753 47.2684 16.9743 48.0947V49.9092H15.668C15.2906 49.9086 14.9289 49.7583 14.6622 49.4913C14.3955 49.2243 14.2457 48.8624 14.2455 48.485ZM25.7097 47.2529H28.5709V49.9083H25.7097V47.2529ZM31.416 49.0053C31.416 49.495 31.0983 49.9087 30.7225 49.9087H29.6626V47.2529H30.7225C31.0983 47.2529 31.416 47.6671 31.416 48.1564V49.0053ZM33.4215 33.108C33.3174 33.9998 32.923 34.8326 32.299 35.4782C31.9092 29.2077 28.9964 23.9617 28.1623 22.5761C28.4102 22.3626 28.7211 22.236 29.0476 22.2155C29.1476 22.207 29.2483 22.2196 29.3432 22.2524C29.4381 22.2852 29.5251 22.3375 29.5986 22.4059C32.5299 25.0926 33.2748 30.255 33.4331 31.7732C33.4844 32.2168 33.4805 32.665 33.4215 33.1076V33.108ZM26.921 25.1634L26.883 25.1911C26.3761 25.5619 26.0247 26.1076 25.8969 26.7225L25.5587 28.2769L25.1335 26.0324C25.1188 25.9546 25.0873 25.8809 25.0412 25.8165C24.9951 25.752 24.9356 25.6984 24.8667 25.6593C23.3071 24.7742 22.8977 23.7879 22.8217 23.5631V18.8817C24.0232 19.5783 25.3247 20.0859 26.6806 20.3869C26.5936 21.3156 26.6933 22.0894 26.9732 22.7019C26.9851 22.7362 27.0004 22.7692 27.0188 22.8005C27.0822 22.9299 27.156 23.0539 27.2394 23.1714C27.2573 23.1958 27.2724 23.2213 27.2882 23.2463L27.3412 23.3371C27.4999 23.6416 27.5448 23.9928 27.4677 24.3275C27.3907 24.6621 27.1968 24.9584 26.921 25.1629V25.1634ZM37.7846 20.506L36.9954 20.6185L33.2568 21.1509C33.7028 17.6085 32.0797 15.444 31.4114 14.7211L31.6118 10.9103C35.5043 13.6246 37.3975 19.4661 37.7846 20.5055V20.506ZM30.8547 17.9539C31.0444 17.4321 31.1836 16.8933 31.2705 16.3449C31.8746 17.3355 32.5012 18.9912 32.1319 21.3113L30.3016 21.5721C30.1174 21.4104 29.9023 21.2877 29.6694 21.2115C29.4364 21.1353 29.1904 21.1071 28.9462 21.1286C28.5291 21.1632 28.1259 21.2954 27.7691 21.5144C27.7339 21.1997 27.7307 20.8821 27.7596 20.5667C27.7979 20.5683 27.8365 20.5718 27.8747 20.5718C28.3396 20.5737 28.7973 20.4577 29.2051 20.2345C29.6129 20.0114 29.9574 19.6885 30.2064 19.2959C30.4693 18.8726 30.6865 18.4226 30.8544 17.9534L30.8547 17.9539ZM45.341 22.6795L38.699 26.6591L37.7182 21.6183L38.6042 21.4921L40.4285 21.2323C40.5001 21.2229 40.5691 21.1994 40.6316 21.1632C40.694 21.1269 40.7487 21.0787 40.7923 21.0212C40.836 20.9636 40.8678 20.898 40.886 20.8281C40.9041 20.7582 40.9082 20.6854 40.898 20.614C40.8879 20.5425 40.8636 20.4737 40.8266 20.4117C40.7897 20.3496 40.7408 20.2955 40.6828 20.2525C40.6248 20.2095 40.5588 20.1784 40.4887 20.161C40.4186 20.1437 40.3458 20.1404 40.2744 20.1514L38.8905 20.3486C38.2218 18.5294 37.4594 16.7459 36.6064 15.0055L39.5217 12.8964C40.7095 14.4042 43.5256 18.2255 45.3407 22.679L45.341 22.6795ZM40.4395 10.8845L36.0185 14.0824C35.0796 12.8713 34.0774 11.7104 33.0162 10.6047C32.6791 10.2643 32.278 9.99378 31.8361 9.80875C31.3941 9.62372 30.92 9.52782 30.4409 9.52656H30.1197C29.7162 9.52614 29.3294 9.36566 29.044 9.08035C28.7587 8.79503 28.5982 8.40819 28.5978 8.00469C28.598 7.81864 28.672 7.64027 28.8036 7.50871C28.9352 7.37716 29.1135 7.30315 29.2996 7.30294H33.3815C34.3302 7.29838 35.2694 7.49193 36.139 7.87119C37.7628 8.57214 39.2262 9.59755 40.4395 10.8845ZM20.5428 14.6671C20.5385 14.6494 20.5335 14.6319 20.5276 14.6147C20.4115 14.2124 20.3737 13.7915 20.4161 13.3749C20.4293 13.1837 20.5101 13.0034 20.644 12.8663C20.7779 12.7291 20.9562 12.644 21.147 12.6262C21.3302 12.5965 21.5179 12.6328 21.6767 12.7288C21.8355 12.8248 21.9549 12.9742 22.0137 13.1502C22.061 13.2809 22.0983 13.4151 22.1252 13.5516C22.1418 13.6346 22.1775 13.7127 22.2294 13.7795C22.2814 13.8463 22.3482 13.9002 22.4246 13.9368C22.5009 13.9733 22.5847 13.9917 22.6694 13.9903C22.754 13.9889 22.8372 13.9678 22.9123 13.9287C23.0549 13.8505 23.1905 13.7602 23.3176 13.6588C23.735 13.3261 24.0718 12.9034 24.3028 12.4222C24.5338 11.941 24.653 11.4138 24.6515 10.88V10.4822C24.6515 10.267 24.6953 10.0539 24.78 9.85604C24.8648 9.65815 24.9889 9.47952 25.1447 9.33097C25.3005 9.18241 25.4848 9.06701 25.6865 8.99176C25.8882 8.9165 26.1031 8.88296 26.3181 8.89315C26.3901 8.89718 26.4622 8.88693 26.5301 8.86297C26.5981 8.83901 26.6607 8.80183 26.7142 8.75357C26.7678 8.70531 26.8112 8.64692 26.8421 8.58178C26.8729 8.51664 26.8906 8.44603 26.894 8.37403C26.8975 8.30203 26.8866 8.23006 26.8621 8.16228C26.8375 8.0945 26.7998 8.03225 26.7511 7.97912C26.7024 7.92599 26.6437 7.88303 26.5783 7.85272C26.5129 7.82241 26.4421 7.80536 26.3701 7.80253C26.0075 7.78535 25.6452 7.84193 25.3051 7.96885C24.9651 8.09577 24.6543 8.29038 24.3916 8.54091C24.129 8.79144 23.9199 9.09267 23.777 9.42636C23.6342 9.76005 23.5605 10.1193 23.5605 10.4822V10.8796C23.5621 11.4891 23.3384 12.0777 22.9324 12.5324C22.7541 12.1885 22.4732 11.9085 22.1287 11.7313C21.7842 11.5542 21.3932 11.4885 21.0097 11.5434C20.7578 11.5729 20.5144 11.6521 20.2934 11.7765C20.0725 11.9009 19.8784 12.068 19.7227 12.2681C19.1145 11.5587 18.7181 10.6925 18.579 9.76855C18.1807 7.13742 19.8753 4.585 22.5214 3.83116C23.6793 3.52128 24.8842 3.42599 26.0765 3.54998C27.0117 3.65384 27.958 3.59209 28.8718 3.36757C30.1233 3.06163 31.2836 2.46135 32.2563 1.61663C32.3339 2.07695 32.3198 2.54806 32.2148 3.00292C32.1098 3.45777 31.916 3.88742 31.6446 4.26718C31.5752 4.35143 31.5326 4.45456 31.5224 4.56325C31.5121 4.67194 31.5347 4.7812 31.5872 4.87691C31.6397 4.97263 31.7197 5.05041 31.8169 5.10021C31.914 5.15001 32.0239 5.16954 32.1322 5.15628L33.2762 5.01625C33.2354 5.42439 33.145 5.82605 33.007 6.21233H29.2996C28.8241 6.21287 28.3682 6.40203 28.0319 6.73829C27.6957 7.07455 27.5066 7.53045 27.5061 8.00597C27.507 8.69881 27.7827 9.363 28.2727 9.85287C28.7626 10.3427 29.4269 10.6183 30.1197 10.6191C30.1197 10.6191 30.502 10.6226 30.5339 10.6237L30.2909 15.2422C30.2541 16.0395 30.0984 16.8268 29.829 17.5781C29.6875 17.9742 29.5046 18.3542 29.2832 18.7117C29.1034 18.9919 28.8442 19.2121 28.5386 19.3441C28.233 19.4761 27.8949 19.5139 27.5677 19.4527C26.0304 19.1906 24.5549 18.6461 23.2159 17.8467C23.096 17.773 22.9969 17.67 22.9279 17.5473C22.8588 17.4247 22.8222 17.2865 22.8213 17.1458V16.3333C22.8209 16.2549 22.8036 16.1774 22.7707 16.1063C22.7378 16.0351 22.69 15.9718 22.6305 15.9206C22.5711 15.8695 22.5013 15.8317 22.426 15.8097C22.3507 15.7878 22.2716 15.7823 22.194 15.7935C21.971 15.8272 20.8404 15.9235 20.5428 14.6671ZM21.7441 23.7635C21.7588 23.8261 22.1137 25.261 24.107 26.4773L24.9851 31.1146C25.0085 31.2383 25.074 31.3501 25.1704 31.4311C25.2668 31.512 25.3882 31.5572 25.5141 31.5589H25.5216C25.6463 31.5589 25.7671 31.5162 25.8642 31.438C25.9612 31.3597 26.0285 31.2506 26.055 31.1288L26.963 26.953C27.0337 26.6022 27.2319 26.2901 27.5193 26.0768L27.5714 26.0386C27.8804 25.8082 28.1325 25.51 28.3084 25.167C29.5224 27.6682 31.1732 31.8973 31.247 36.5269V41.8742C31.2477 42.4916 31.3915 43.1005 31.6672 43.6529L31.8931 44.1039C32.0089 44.3284 32.0605 44.5804 32.0423 44.8323C32.024 45.0842 31.9366 45.3262 31.7897 45.5316C31.5908 45.789 31.3414 46.0031 31.0569 46.1607H18.066V38.1026C18.8079 37.3015 21.1566 33.9095 20.2062 23.7968L21.7299 23.5338C21.7299 23.5338 21.7347 23.7237 21.7441 23.7635ZM19.0996 23.6936C19.9847 32.762 18.1685 36.1693 17.4556 37.1286C17.2367 36.7874 17.2027 36.2191 17.2131 36.0011C17.4648 32.5066 17.1949 26.6497 17.067 24.2947C17.0584 24.1733 17.088 24.0523 17.1517 23.9486C17.2154 23.8449 17.3099 23.7638 17.4221 23.7167C17.8752 23.5334 18.3609 23.4442 18.8496 23.4545C18.9135 23.4569 18.9743 23.4826 19.0205 23.5268C19.0667 23.5711 19.0951 23.6307 19.1002 23.6944L19.0996 23.6936ZM13.4509 13.609C13.4869 13.5628 13.5348 13.5271 13.5894 13.5059C13.6441 13.4847 13.7034 13.4786 13.7612 13.4884L15.2738 13.7286C15.4308 13.7534 15.5795 13.8158 15.7071 13.9105C15.8347 14.0052 15.9375 14.1294 16.0066 14.2725C17.6356 17.6508 17.3724 20.9449 17.0412 22.6951C17.0332 22.6982 17.0253 22.7008 17.0173 22.704C16.6826 22.8385 16.4013 23.0792 16.2166 23.389L15.3229 23.269C15.1425 23.2449 14.9788 23.1505 14.8675 23.0065C14.7561 22.8624 14.706 22.6803 14.728 22.4996C15.1478 18.9677 14.0781 15.6154 13.4031 13.9316C13.3813 13.8785 13.3742 13.8205 13.3826 13.7637C13.391 13.7069 13.4146 13.6534 13.4509 13.609ZM9.87061 13.7619C10.4024 13.916 10.943 14.0384 11.4893 14.1283C11.7394 14.1675 12.0334 14.2124 12.3641 14.2613C12.3727 14.2871 12.3792 14.3134 12.3894 14.3389C13.0257 15.9263 14.0347 19.0805 13.6435 22.372C13.6435 22.3757 13.6435 22.3792 13.6427 22.3828C12.625 22.3633 11.6079 22.4434 10.6058 22.6218C10.1645 22.7008 9.71878 22.7525 9.27113 22.7768C9.9783 21.7714 10.3672 20.1054 10.2564 18.1706C10.1417 16.1649 9.52666 14.5065 8.66162 13.6079C9.07002 13.599 9.47747 13.6509 9.87061 13.7619ZM6.00342 15.1664C6.30148 14.4406 6.7152 13.9939 7.11029 13.9716C7.1216 13.9716 7.13275 13.9706 7.14406 13.9706C7.99078 13.9706 9.02564 15.7674 9.16726 18.2321C9.30984 20.7297 8.46281 22.6505 7.61003 22.6992C7.21415 22.7231 6.75296 22.325 6.37397 21.6379C6.29512 21.4921 6.22329 21.3426 6.15874 21.1899C6.36423 21.2779 6.58537 21.3234 6.80888 21.3237C6.98281 21.3233 7.15567 21.2965 7.32153 21.2441C7.60866 21.1565 7.86706 20.9936 8.06983 20.7723C8.2726 20.5509 8.41232 20.2792 8.47444 19.9856C8.57169 19.5103 8.60385 19.024 8.57002 18.54C8.55151 18.1002 8.4304 17.6708 8.21636 17.2861C7.88866 16.7153 7.42269 16.3828 6.86846 16.3247C6.79666 16.3162 6.72388 16.322 6.65436 16.3419C6.58484 16.3618 6.51995 16.3952 6.46347 16.4404C6.40699 16.4855 6.36004 16.5414 6.32534 16.6049C6.29064 16.6683 6.26889 16.738 6.26135 16.8099C6.25381 16.8818 6.26062 16.9545 6.2814 17.0237C6.30218 17.093 6.33651 17.1574 6.38239 17.2133C6.42827 17.2692 6.4848 17.3154 6.54869 17.3492C6.61258 17.3831 6.68255 17.4039 6.75455 17.4105C6.94811 17.4308 7.12096 17.5719 7.26943 17.8295C7.39868 18.0676 7.47078 18.3325 7.48004 18.6033C7.50811 18.9877 7.48388 19.3741 7.40803 19.752C7.38529 19.8565 7.33525 19.9532 7.26301 20.0321C7.19078 20.111 7.09892 20.1693 6.9968 20.2012C6.89469 20.233 6.78595 20.2373 6.68166 20.2134C6.57738 20.1896 6.48127 20.1386 6.40312 20.0655C5.76892 19.4739 5.58524 18.6531 5.54159 18.0766C5.50009 17.0854 5.65711 16.096 6.00342 15.1664Z"></path>
<path d="M26.3612 14.0052C26.4789 14.0052 26.5938 13.9704 26.6916 13.905C26.7894 13.8397 26.8657 13.7468 26.9107 13.6381C26.9557 13.5295 26.9675 13.4099 26.9445 13.2945C26.9216 13.1792 26.8649 13.0732 26.7818 12.99C26.6986 12.9069 26.5926 12.8502 26.4773 12.8273C26.3619 12.8043 26.2423 12.8161 26.1337 12.8611C26.025 12.9061 25.9321 12.9824 25.8668 13.0802C25.8014 13.178 25.7665 13.2929 25.7665 13.4106C25.7665 13.4887 25.7819 13.566 25.8118 13.6382C25.8416 13.7103 25.8855 13.7759 25.9407 13.8311C25.9959 13.8863 26.0615 13.9301 26.1336 13.96C26.2058 13.9899 26.2831 14.0053 26.3612 14.0052ZM28.7951 14.0052C28.9128 14.0053 29.0278 13.9704 29.1256 13.9051C29.2234 13.8398 29.2996 13.7469 29.3447 13.6382C29.3897 13.5296 29.4015 13.41 29.3786 13.2946C29.3557 13.1793 29.299 13.0733 29.2159 12.9901C29.1327 12.9069 29.0267 12.8503 28.9114 12.8273C28.796 12.8043 28.6764 12.8161 28.5678 12.8611C28.4591 12.9061 28.3662 12.9823 28.3008 13.0801C28.2355 13.1779 28.2006 13.2929 28.2006 13.4106C28.2006 13.5682 28.2632 13.7195 28.3747 13.831C28.4862 13.9425 28.6374 14.0052 28.7951 14.0052ZM22.5439 28.4165C22.6615 28.4165 22.7765 28.3816 22.8743 28.3163C22.9721 28.2509 23.0483 28.158 23.0934 28.0494C23.1384 27.9407 23.1501 27.8211 23.1272 27.7057C23.1042 27.5904 23.0476 27.4844 22.9644 27.4012C22.8812 27.3181 22.7752 27.2615 22.6598 27.2385C22.5445 27.2156 22.4249 27.2274 22.3162 27.2724C22.2076 27.3175 22.1147 27.3937 22.0494 27.4915C21.984 27.5894 21.9492 27.7043 21.9492 27.822C21.9492 27.9001 21.9646 27.9774 21.9945 28.0495C22.0244 28.1217 22.0682 28.1872 22.1234 28.2424C22.1786 28.2976 22.2442 28.3414 22.3163 28.3713C22.3885 28.4012 22.4658 28.4165 22.5439 28.4165ZM22.3911 29.9366C22.3911 30.0542 22.426 30.1692 22.4914 30.267C22.5567 30.3648 22.6496 30.441 22.7583 30.486C22.8669 30.5311 22.9865 30.5428 23.1019 30.5199C23.2172 30.4969 23.3232 30.4403 23.4063 30.3571C23.4895 30.274 23.5462 30.168 23.5691 30.0526C23.592 29.9373 23.5803 29.8177 23.5353 29.709C23.4902 29.6004 23.414 29.5075 23.3162 29.4422C23.2184 29.3768 23.1035 29.3419 22.9858 29.3419C22.8281 29.3419 22.6768 29.4046 22.5653 29.5161C22.4538 29.6276 22.3911 29.7789 22.3911 29.9366Z"></path>
</svg>
</div>
<h6>Adventure Tours</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="https://triprex.egenslab.com/tour-type/cultural-tours/" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<g>
<path d="M15.944 6.69113C16.1658 6.69113 16.3786 6.60301 16.5354 6.44615C16.6923 6.28929 16.7804 6.07655 16.7804 5.85473C16.7804 5.6329 16.6923 5.42016 16.5354 5.2633C16.3786 5.10645 16.1658 5.01833 15.944 5.01833C15.7222 5.01833 15.5094 5.10645 15.3526 5.2633C15.1957 5.42016 15.1076 5.6329 15.1076 5.85473C15.1076 6.07655 15.1957 6.28929 15.3526 6.44615C15.5094 6.60301 15.7222 6.69113 15.944 6.69113ZM44.2694 10.4396C44.4912 10.4396 44.704 10.3515 44.8608 10.1946C45.0177 10.0378 45.1058 9.82505 45.1058 9.60323C45.1058 9.14127 44.7314 8.76683 44.2694 8.76683C43.8075 8.76683 43.433 9.14127 43.433 9.60323C43.433 9.82505 43.5211 10.0378 43.678 10.1946C43.8348 10.3515 44.0476 10.4396 44.2694 10.4396ZM3.96921 28.3865C3.50725 28.3865 3.13281 28.761 3.13281 29.2229C3.13281 29.6849 3.50725 30.0593 3.96921 30.0593C4.43117 30.0593 4.80561 29.6849 4.80561 29.2229C4.80561 28.761 4.43117 28.3865 3.96921 28.3865ZM44.2694 15.9578C44.7314 15.9578 45.1058 15.5834 45.1058 15.1214C45.1058 14.6595 44.7314 14.285 44.2694 14.285C43.8075 14.285 43.433 14.6595 43.433 15.1214C43.433 15.5834 43.8075 15.9578 44.2694 15.9578ZM41.5103 13.1987C41.7321 13.1987 41.9449 13.1106 42.1017 12.9538C42.2586 12.7969 42.3467 12.5842 42.3467 12.3623C42.3467 11.9004 41.9723 11.5259 41.5103 11.5259C41.0484 11.5259 40.6739 11.9004 40.6739 12.3623C40.6739 12.5842 40.762 12.7969 40.9189 12.9538C41.0757 13.1106 41.2885 13.1987 41.5103 13.1987ZM6.72831 31.1456C6.26635 31.1456 5.89191 31.5201 5.89191 31.982C5.89191 32.444 6.26635 32.8184 6.72831 32.8184C7.19027 32.8184 7.56471 32.444 7.56471 31.982C7.56471 31.5201 7.19027 31.1456 6.72831 31.1456ZM6.72831 25.6274C6.50649 25.6274 6.29374 25.7155 6.13689 25.8724C5.98003 26.0293 5.89191 26.242 5.89191 26.4638C5.89191 26.9258 6.26635 27.3002 6.72831 27.3002C7.19027 27.3002 7.56471 26.9258 7.56471 26.4638C7.56471 26.354 7.54308 26.2452 7.50105 26.1437C7.45901 26.0423 7.3974 25.9501 7.31974 25.8724C7.24207 25.7947 7.14987 25.7331 7.04839 25.6911C6.94691 25.6491 6.83815 25.6274 6.72831 25.6274ZM44.7896 21.9197L36.5072 21.5423L33.5186 18.5435C33.0698 18.0947 32.5496 17.7173 31.9784 17.4215L28.8062 15.8201L29.0204 15.0959C29.4488 14.9123 29.8772 14.6573 30.2546 14.3105C30.4484 14.1371 30.632 13.9433 30.7952 13.7189V14.9735C30.7952 15.3203 31.0706 15.5957 31.4174 15.5957C31.7642 15.5957 32.0396 15.3203 32.0396 14.9735V10.8833L32.8964 9.65933C32.9678 9.55733 33.0086 9.42473 33.0086 9.30233C33.0086 9.21053 32.9882 8.70053 32.6108 7.91513C32.3762 7.43573 32.0192 6.85433 31.448 6.19133L31.9172 5.11013C31.958 5.01833 31.9784 4.91633 31.9682 4.81433L31.6214 0.550726C31.601 0.285526 31.4174 0.0713257 31.1624 -7.43177e-05C30.9074 -0.0714743 30.6422 0.0305257 30.4892 0.244726L28.0922 3.66173C28.031 3.75353 27.9902 3.86573 27.98 3.97793L27.8984 5.08973C26.9906 5.34473 26.3174 5.67113 25.8278 5.98733C25.0628 6.47693 24.7466 6.91553 24.7058 6.98693C24.6344 7.09913 24.5936 7.22153 24.6038 7.35413L24.6956 9.23093L24.3386 10.5569C24.2672 10.8323 24.2468 11.1077 24.2468 11.4545C24.2468 11.5565 24.2468 11.6585 24.257 11.7503L24.2571 11.7508C24.208 11.7386 24.1577 11.7324 24.1071 11.7322C23.9396 11.7322 23.779 11.7987 23.6605 11.9171C23.5421 12.0356 23.4756 12.1962 23.4756 12.3637C23.4756 12.5311 23.5421 12.6918 23.6605 12.8102C23.779 12.9286 23.9396 12.9951 24.1071 12.9951C24.2431 12.9952 24.3755 12.951 24.4843 12.8693C24.6206 13.2593 24.812 13.6279 25.0527 13.9637C25.0731 13.9943 25.0935 14.0147 25.1139 14.0453L24.9609 14.8103L21.3705 14.9327C20.7177 14.9531 20.0649 15.0755 19.4325 15.2999L15.2301 16.8605L11.3439 15.1367C11.2725 14.8715 11.1603 14.3717 11.1603 13.7291C11.1603 12.9029 11.3337 11.8523 11.9661 10.6793C12.0477 10.5365 12.0681 10.3631 12.0171 10.1999C11.9661 10.0367 11.8641 9.90413 11.7213 9.83273L11.2113 9.55733C11.0481 9.46553 10.8543 9.45533 10.6911 9.52673C10.1709 9.73073 9.70171 10.0265 9.29371 10.3835C8.68171 10.9139 8.22271 11.5769 7.89631 12.2909C7.66171 12.8315 7.49851 13.3925 7.43731 13.9637C7.21291 14.0147 7.00891 14.0963 6.82531 14.1881C6.60091 14.3105 6.40711 14.4635 6.26431 14.6267C6.03991 14.8613 5.88691 15.1061 5.78491 15.2897C5.68291 15.4733 5.64211 15.6059 5.63191 15.6365C5.54011 15.9221 5.66251 16.2281 5.91751 16.3811L9.34471 18.2783L9.11012 19.0433C9.00811 19.3697 9.19171 19.7165 9.51812 19.8185C9.84451 19.9205 10.1913 19.7369 10.2933 19.4105L10.4565 18.8903L14.8629 21.3281C15.0159 21.4097 15.1995 21.4301 15.3627 21.3791L16.3623 21.0425L14.4854 43.2581C14.465 43.5437 14.6384 43.8191 14.924 43.9007C14.9546 43.9109 16.658 44.4413 19.0958 44.7269C19.4528 45.3899 19.8812 46.0223 20.3708 46.6241C20.432 46.6955 20.5034 46.7567 20.585 46.7873C20.6054 46.7975 21.0746 47.0117 21.8294 47.2259C22.064 47.2871 22.319 47.3585 22.5944 47.4197L22.6964 47.6543L21.2276 48.7355C21.0644 48.8579 20.9318 49.0211 20.84 49.1945C20.7584 49.3679 20.7176 49.5617 20.7176 49.7351C20.7176 50.0513 20.84 50.3573 21.0542 50.6021C21.1664 50.7245 21.299 50.8265 21.4622 50.8979C21.6152 50.9693 21.7988 51.0101 21.9824 51.0101H25.2566C25.736 51.0101 26.1848 50.8163 26.501 50.4899C26.8172 50.1737 27.0212 49.7249 27.0212 49.2455V48.9293C27.0212 48.8681 27.011 48.7967 26.9906 48.7355L26.5928 47.5217C27.2864 47.3993 28.0106 47.1851 28.7348 46.8587H28.796L28.7144 48.3581L28.2962 48.7865C28.1738 48.9089 28.082 49.0619 28.0208 49.2149C27.9596 49.3679 27.929 49.5311 27.929 49.6943C27.929 50.0309 28.0616 50.3573 28.286 50.6021C28.3982 50.7245 28.541 50.8265 28.7042 50.8979C28.8674 50.9693 29.051 51.0101 29.2448 51.0101H30.6626C31.4378 51.0101 31.8623 50.5463 32.0192 50.1635L33.335 46.4405C33.4064 46.2467 33.3554 46.0427 33.2738 45.8795C33.1718 45.6755 32.7842 44.9309 32.2538 43.8803L33.8552 24.9695L34.61 25.4999C34.712 25.5713 34.8446 25.6121 34.9772 25.6121L39.1184 25.5917V26.0711C39.1184 26.4179 39.3938 26.6933 39.7406 26.6933C40.0874 26.6933 40.3628 26.4179 40.3628 26.0711V25.5917H40.5872C40.7504 25.7651 41.036 26.0813 41.3114 26.5403C41.5256 26.8973 41.7398 27.3461 41.903 27.8867C42.0662 28.4273 42.1682 29.0495 42.1682 29.7737C42.1682 30.1377 42.3466 30.4469 42.7904 30.4469H43.3616C43.5452 30.4469 43.7186 30.3653 43.841 30.2225C44.249 29.7431 44.5346 29.2025 44.7284 28.6313C44.9222 28.0601 45.0038 27.4787 45.0038 26.8871C45.0038 26.1527 44.861 25.4285 44.606 24.7655C44.6774 24.7043 44.7386 24.6431 44.7998 24.5819C45.0752 24.2759 45.2384 23.9393 45.3302 23.6333C45.422 23.3273 45.4424 23.0417 45.4424 22.8275C45.4424 22.4746 45.3383 21.9473 44.7896 21.9197ZM9.91581 13.7291C9.91581 14.6165 10.079 15.2693 10.181 15.5957L9.73221 17.0543L7.08021 15.5855C7.21281 15.3509 7.55961 15.1265 7.99821 15.1571C8.17161 15.1673 8.33481 15.1061 8.45721 14.9837C8.57961 14.8715 8.65101 14.7083 8.65101 14.5349C8.66121 13.7699 8.89581 12.9437 9.33441 12.2501C9.54861 11.9033 9.81381 11.5871 10.1198 11.3117C10.2116 11.2301 10.3136 11.1485 10.4258 11.0771C10.0382 12.0767 9.91581 12.9845 9.91581 13.7291ZM29.204 4.26353L30.5096 2.39693L30.7034 4.78373L30.4994 5.24273C30.377 5.13053 30.2546 5.01833 30.122 4.89593C29.9588 4.76333 29.816 4.74293 29.6324 4.76333C29.4692 4.78373 29.3162 4.81433 29.1632 4.83473L29.204 4.26353ZM26.5826 6.99713C27.164 6.65033 28.0922 6.24233 29.5304 6.02813C30.6626 7.04813 31.2134 7.89473 31.499 8.46593C31.6418 8.77193 31.7132 8.99633 31.7438 9.14933V9.15953L31.142 10.0265C30.989 9.91433 30.8156 9.77153 30.632 9.59813C30.1934 9.20033 29.7242 8.62913 29.459 7.95593C29.306 7.55813 28.8674 7.44593 28.5206 7.72133C28.235 7.95593 27.9009 8.14554 27.5516 8.28233C27.1052 8.45726 26.4841 8.6178 25.9808 8.66993L25.9196 7.57853C25.9808 7.42553 26.2154 7.22153 26.5826 6.99713ZM25.5524 10.8629L25.8176 9.90413C26.0522 9.88373 26.3582 9.84293 26.705 9.78173C27.0926 9.70013 27.521 9.58793 27.9596 9.41453C28.184 9.32273 28.4084 9.22073 28.6226 9.09833C28.7552 9.31253 28.8878 9.51653 29.0408 9.71033C29.4692 10.2611 29.9384 10.6691 30.2954 10.9547C30.377 11.0159 30.4586 11.0771 30.53 11.1281L30.2444 12.1787C29.9894 12.8621 29.5508 13.3517 29.0612 13.6883C28.8164 13.8515 28.5512 13.9739 28.2962 14.0555C28.0412 14.1371 27.7964 14.1779 27.5822 14.1779C27.2528 14.1779 26.8172 13.9841 26.6234 13.8413C26.3276 13.6271 26.042 13.2905 25.838 12.8927C25.634 12.4847 25.5014 12.0155 25.5014 11.4851C25.4912 11.2709 25.5116 11.0669 25.5524 10.8629ZM27.623 15.4019L27.47 15.9017C27.3578 16.1057 27.2252 16.2383 27.113 16.3097C26.9906 16.3913 26.8682 16.4219 26.756 16.4219C26.5928 16.4219 26.4296 16.3505 26.3072 16.2281C26.246 16.1669 26.1929 16.0861 26.1542 15.9833C26.0995 15.8377 26.0743 15.6319 26.1032 15.5039L26.195 15.0245C26.399 15.1469 26.6234 15.2387 26.8478 15.3101C27.1204 15.3846 27.4833 15.4019 27.623 15.4019ZM24.8792 16.0649C24.8996 16.1975 24.9404 16.3301 24.9914 16.4423C25.1342 16.8197 25.3892 17.1257 25.6952 17.3399C26.0012 17.5541 26.3684 17.6663 26.756 17.6663C27.113 17.6663 27.4802 17.5643 27.7964 17.3501C27.9596 17.2379 28.1126 17.1053 28.2554 16.9421L30.9482 18.2987C30.4586 18.7985 29.9078 19.1759 29.3264 19.4615C28.541 19.8389 27.7046 20.0225 26.8784 20.0225C25.634 20.0225 24.4202 19.6145 23.4308 18.8597C22.931 18.4823 22.5026 18.0029 22.1456 17.4521C21.9008 17.0747 21.6968 16.6463 21.5438 16.1873L24.8792 16.0649ZM25.8176 22.1951L24.8282 22.7459L24.1448 21.8891L25.1342 21.3383L25.8176 22.1951ZM20.2892 16.3301C20.483 16.9727 20.7584 17.5643 21.095 18.0947C21.7478 19.1147 22.625 19.9103 23.6348 20.4407C23.7266 20.4917 23.8184 20.5325 23.9102 20.5733L22.8902 21.1343C22.727 21.2261 22.6148 21.3791 22.5842 21.5525C22.5536 21.7361 22.5944 21.9197 22.7066 22.0625L24.1754 23.9087C24.3692 24.1433 24.6956 24.2147 24.9608 24.0617L27.062 22.8989C27.2252 22.8071 27.3374 22.6541 27.368 22.4705C27.4088 22.2869 27.3578 22.1033 27.2456 21.9605L26.654 21.2261H26.8886C27.8984 21.2261 28.9286 21.0017 29.8772 20.5427C30.6728 20.1653 31.4174 19.6145 32.0702 18.9005C32.2742 19.0433 32.4578 19.2065 32.6312 19.3799L33.7226 20.4713C32.3966 21.5219 31.0298 22.4195 29.969 23.0621C29.3672 23.4293 28.847 23.7251 28.49 23.9189C28.3064 24.0209 28.1738 24.0923 28.0718 24.1433C27.9392 24.2147 27.8066 24.2657 27.7046 24.3983L27.0314 25.3061C26.8172 25.4081 26.246 25.6529 25.3586 25.7957C25.3178 25.7447 25.2668 25.6937 25.226 25.6427C24.8588 25.2653 24.3284 25.0409 23.7674 25.0409C23.4213 25.0406 23.0808 25.1284 22.778 25.2959C22.3292 25.0409 22.013 24.7553 21.7988 24.5207C21.6764 24.3779 21.5846 24.2555 21.5336 24.1739V23.2355C21.5336 23.1029 21.4928 22.9805 21.4214 22.8785L21.4112 22.8683C21.3398 22.7663 20.7176 21.8891 19.9526 20.6753C19.4443 19.8842 18.5372 18.4229 17.9432 17.1563L20.2892 16.3301ZM25.8176 27.0299C26.4194 26.9177 26.8886 26.7545 27.215 26.6321C27.3272 26.8259 27.4292 27.0299 27.521 27.2543C27.5924 27.4175 27.6536 27.6011 27.7046 27.7847C27.317 27.9683 26.8886 28.1315 26.4602 28.2539C26.1236 28.3559 25.7972 28.4273 25.4912 28.4681V28.2743C25.7054 27.9989 25.8584 27.5501 25.8176 27.0299ZM23.7623 27.9989C23.5418 27.9989 23.3304 27.9113 23.1745 27.7554C23.0186 27.5995 22.931 27.3881 22.931 27.1676C22.931 26.9472 23.0186 26.7357 23.1745 26.5798C23.3304 26.4239 23.5418 26.3363 23.7623 26.3363C23.9828 26.3363 24.1942 26.4239 24.3501 26.5798C24.506 26.7357 24.5936 26.9472 24.5936 27.1676C24.5936 27.3881 24.506 27.5995 24.3501 27.7554C24.1942 27.9113 23.9828 27.9989 23.7623 27.9989ZM24.2366 29.1719L24.0836 36.1793H22.4924L23.0738 29.1107C23.288 29.1923 23.5226 29.2331 23.7674 29.2331C23.9204 29.2229 24.0836 29.2025 24.2366 29.1719ZM21.7478 27.6317C21.6254 27.5603 21.503 27.4889 21.3908 27.4073C21.2072 27.2747 21.044 27.1421 20.9114 27.0095C20.8502 26.9381 20.789 26.8769 20.738 26.8055L21.1154 25.6529C21.3296 25.8569 21.5846 26.0609 21.8906 26.2649C21.758 26.5301 21.6866 26.8361 21.6866 27.1523C21.6968 27.3257 21.7172 27.4787 21.7478 27.6317ZM15.2402 20.1143L10.844 17.6765L11.2316 16.4423L14.9648 18.0947C15.1076 18.1559 15.281 18.1661 15.434 18.1049L16.76 17.6153C17.0354 18.1763 17.3414 18.7475 17.6474 19.2983L15.2402 20.1143ZM16.4744 43.0235C16.1888 42.9623 15.9542 42.9011 15.7706 42.8501L17.6576 20.6141L18.29 20.4101C18.5246 20.7977 18.749 21.1547 18.9632 21.5015C19.5548 22.4399 20.0648 23.1641 20.279 23.4803V24.2861C20.1464 24.6635 19.6568 26.0915 19.1162 27.8357C18.8 28.8557 18.4634 29.9777 18.1778 31.0691C17.882 32.1605 17.6372 33.2009 17.4944 34.0781C17.3516 34.9349 17.27 35.9039 17.27 36.9239C17.27 38.4947 17.4638 40.2083 17.9534 41.8811C18.0962 42.3911 18.2798 42.8909 18.4736 43.3907C17.678 43.2785 17.0048 43.1357 16.4744 43.0235ZM25.7666 49.2455C25.7666 49.5069 25.6575 49.7657 25.2566 49.7657H21.9314L23.8286 48.3581C24.053 48.1949 24.1448 47.8889 24.0326 47.6237C24.2978 47.6441 24.5732 47.6543 24.869 47.6543C25.0118 47.6543 25.1648 47.6543 25.3178 47.6441L25.7666 49.0211V49.2455ZM28.3268 45.6653C27.1436 46.2263 25.9502 46.4201 24.8792 46.4201C23.4171 46.4201 21.9574 46.0714 21.2378 45.7163C20.8263 45.2137 19.7351 43.5887 19.1264 41.5343C18.6776 39.9941 18.494 38.3927 18.494 36.9137C18.494 35.9651 18.5756 35.0573 18.698 34.2719C18.8306 33.4661 19.0652 32.4461 19.3508 31.3751C19.6364 30.2939 19.973 29.1617 20.2994 28.1417C20.534 28.3355 20.789 28.5089 21.0542 28.6619C21.299 28.8047 21.554 28.9271 21.809 29.0393L21.1766 36.7301C21.1664 36.9035 21.2174 37.0769 21.3398 37.1993C21.4622 37.3217 21.6254 37.4033 21.7988 37.4033H24.6854C25.022 37.4033 25.2974 37.1279 25.3076 36.7913L25.4606 29.7023C25.8992 29.6513 26.348 29.5493 26.807 29.4167C27.2048 29.3045 27.6026 29.1515 27.9902 28.9883C28.0004 29.0597 28.0106 29.1413 28.0208 29.2127C28.1228 29.9369 28.1636 30.7019 28.1636 31.4567C28.1636 32.8439 28.0208 34.2005 27.878 35.2001C27.8066 35.6999 27.7352 36.1079 27.6842 36.3935C27.6536 36.5363 27.6332 36.6485 27.623 36.7199C27.5822 36.9239 27.5822 37.0871 27.6434 37.2095C29.0918 40.3715 30.8768 43.9211 31.7132 45.5531H28.8062C28.5716 45.5531 28.4798 45.5939 28.3268 45.6653ZM30.8666 49.6637C30.8156 49.7249 30.7442 49.7555 30.6626 49.7555H29.0612L29.765 49.0313C29.867 48.9191 29.9282 48.7865 29.9384 48.6335L30.0404 46.8383H31.8662L30.8666 49.6637ZM28.1942 25.8569L28.6022 25.3061C28.8878 25.1531 29.6222 24.7655 30.5912 24.1739C30.938 23.9597 31.3154 23.7251 31.7132 23.4701L32.6516 24.1331L31.1726 41.7383C30.4382 40.2491 29.612 38.5355 28.8674 36.9239C28.9184 36.6485 29.0204 36.1079 29.1224 35.4041C29.2754 34.3637 29.4182 32.9561 29.4182 31.4873C29.4182 30.4163 29.3407 29.3139 29.1224 28.2743C28.9477 27.4423 28.5019 26.3745 28.1942 25.8569ZM35.1506 24.3677L32.825 22.7255C33.4064 22.3175 34.0082 21.8789 34.5998 21.3995L35.783 22.5929C35.8952 22.7051 36.038 22.7663 36.191 22.7765L39.0878 22.9091V24.3473H39.098L35.1506 24.3677ZM44.0348 23.4701C43.994 23.5721 43.9328 23.6741 43.8512 23.7557C43.7696 23.8475 43.6676 23.9291 43.5248 24.0005C43.3718 24.0719 43.2596 24.2045 43.2086 24.3677C43.1576 24.5309 43.1678 24.7043 43.2494 24.8573C43.5656 25.4489 43.739 26.1833 43.739 26.9075C43.739 27.3665 43.6676 27.8255 43.5248 28.2539C43.4636 28.4171 43.4024 28.5803 43.3208 28.7435C43.2596 28.2947 43.1678 27.8765 43.0556 27.4991C42.7598 26.5097 42.311 25.7753 41.9234 25.2755C41.546 24.7757 41.24 24.5207 41.2094 24.5003C41.0972 24.4085 40.9544 24.3575 40.8116 24.3575H40.3526V22.9805L44.1368 23.1539C44.1164 23.2457 44.0858 23.3579 44.0348 23.4701ZM9.48741 28.3865C9.02545 28.3865 8.65101 28.761 8.65101 29.2229C8.65101 29.6849 9.02545 30.0593 9.48741 30.0593C9.94937 30.0593 10.3238 29.6849 10.3238 29.2229C10.3238 28.761 9.94937 28.3865 9.48741 28.3865ZM47.0285 11.5259C46.9187 11.5259 46.8099 11.5476 46.7084 11.5896C46.607 11.6316 46.5148 11.6932 46.4371 11.7709C46.3594 11.8486 46.2978 11.9408 46.2558 12.0422C46.2137 12.1437 46.1921 12.2525 46.1921 12.3623C46.1921 12.8243 46.5666 13.1987 47.0285 13.1987C47.4905 13.1987 47.8649 12.8243 47.8649 12.3623C47.8649 12.2525 47.8433 12.1437 47.8012 12.0422C47.7592 11.9408 47.6976 11.8486 47.6199 11.7709C47.5423 11.6932 47.4501 11.6316 47.3486 11.5896C47.2471 11.5476 47.1384 11.5259 47.0285 11.5259ZM41.5154 33.0785C41.2936 33.0785 41.0808 33.1666 40.924 33.3235C40.7671 33.4804 40.679 33.6931 40.679 33.9149C40.679 34.3769 41.0535 34.7513 41.5154 34.7513C41.9774 34.7513 42.3518 34.3769 42.3518 33.9149C42.3518 33.6931 42.2637 33.4804 42.1068 33.3235C41.95 33.1666 41.7372 33.0785 41.5154 33.0785Z"></path>
</g>
</svg>
</div>
<h6>Historical Cultural Tours</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="https://triprex.egenslab.com/tour-type/group-tour/" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.8564 34.4958C45.8564 35.7619 46.8834 36.7871 48.1488 36.7871H50.2528C50.5289 36.7871 50.7528 36.5633 50.7528 36.2871V31.249C50.7528 30.9728 50.5289 30.749 50.2528 30.749H48.1488C46.883 30.749 45.8564 31.7757 45.8564 33.0413V34.4958ZM48.1488 35.7871C47.435 35.7871 46.8564 35.2088 46.8564 34.4958V33.0413C46.8564 32.328 47.4354 31.749 48.1488 31.749H49.7528V35.7871H48.1488Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.578816 36.5923C0.673478 36.7152 0.819779 36.7871 0.974858 36.7871H3.80037C5.06692 36.7871 6.09273 35.7617 6.09273 34.4958V33.0413C6.09273 31.7758 5.0673 30.749 3.80037 30.749H2.30235C2.07527 30.749 1.87671 30.902 1.81885 31.1216L0.49136 36.1597C0.451847 36.3097 0.484154 36.4695 0.578816 36.5923ZM1.62367 35.7871L2.68767 31.749H3.80037C4.51466 31.749 5.09273 32.3277 5.09273 33.0413V34.4958C5.09273 35.209 4.51504 35.7871 3.80037 35.7871H1.62367Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.26435 27.315C8.26436 27.3149 8.26435 27.315 8.26435 27.315L10.3466 19.4132C10.3639 19.3473 10.4026 19.2887 10.4565 19.247C10.5105 19.2054 10.5767 19.1828 10.6448 19.1827H18.1558C18.6207 19.1827 18.9975 19.5595 18.9975 20.0243V27.5296C18.9975 27.9943 18.6207 28.3711 18.1558 28.3711H9.07815C8.52629 28.3711 8.12377 27.8488 8.26435 27.315ZM7.29734 27.0602C6.98972 28.2281 7.87034 29.3711 9.07815 29.3711H18.1558C19.1729 29.3711 19.9975 28.5466 19.9975 27.5296V20.0243C19.9975 19.0073 19.173 18.1827 18.1558 18.1827H10.6442C10.3553 18.183 10.0741 18.2789 9.84539 18.4555C9.61672 18.6321 9.4529 18.8793 9.37949 19.1587L7.29734 27.0602Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M25.2215 28.3711C24.7567 28.3711 24.3799 27.9943 24.3799 27.5295V20.0243C24.3799 19.5596 24.7566 19.1828 25.2215 19.1828H32.4557C32.5237 19.1828 32.5898 19.2054 32.6436 19.2469C32.6974 19.2884 32.736 19.3466 32.7533 19.4123L33.3161 21.5481C33.3864 21.8151 33.6599 21.9746 33.9269 21.9042C34.194 21.8339 34.3534 21.5604 34.2831 21.2933L33.7204 19.1577C33.6469 18.8785 33.483 18.6314 33.2543 18.455C33.0257 18.2787 32.7451 18.1829 32.4563 18.1828H25.2215C24.2044 18.1828 23.3799 19.0073 23.3799 20.0243V27.5295C23.3799 28.5466 24.2044 29.3711 25.2215 29.3711H34.0221C35.2493 29.3711 36.1076 28.2048 35.7966 27.0381L35.792 27.0209L35.7916 27.0191L35.0628 24.2527C34.9924 23.9857 34.719 23.8263 34.4519 23.8966C34.1849 23.967 34.0254 24.2405 34.0958 24.5075L34.825 27.2756L34.8255 27.2774L34.8304 27.2957C34.9772 27.8466 34.5727 28.3711 34.0221 28.3711H25.2215Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0698 41.0047C11.0698 42.687 12.4336 44.0508 14.1159 44.0508C15.7983 44.0508 17.162 42.687 17.162 41.0047C17.162 39.3224 15.7983 37.9586 14.1159 37.9586C12.4336 37.9586 11.0698 39.3224 11.0698 41.0047ZM14.1159 43.0508C12.9859 43.0508 12.0698 42.1347 12.0698 41.0047C12.0698 39.8746 12.9859 38.9586 14.1159 38.9586C15.246 38.9586 16.162 39.8746 16.162 41.0047C16.162 42.1347 15.246 43.0508 14.1159 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M32.3147 41.0047C32.3147 42.687 33.6785 44.0508 35.3608 44.0508C37.0431 44.0508 38.4069 42.687 38.4069 41.0047C38.4069 39.3224 37.0431 37.9586 35.3608 37.9586C33.6785 37.9586 32.3147 39.3224 32.3147 41.0047ZM35.3608 43.0508C34.2308 43.0508 33.3147 42.1347 33.3147 41.0047C33.3147 39.8746 34.2308 38.9586 35.3608 38.9586C36.4908 38.9586 37.4069 39.8746 37.4069 41.0047C37.4069 42.1347 36.4908 43.0508 35.3608 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.52888 13.9199C6.44663 13.9199 5.56934 13.0427 5.56934 11.9605V8.40513C5.56934 7.32301 6.44664 6.44568 7.52888 6.44568H12.0994V13.9199H7.52888ZM4.56934 11.9605C4.56934 13.595 5.8944 14.9199 7.52888 14.9199H12.5994C12.8755 14.9199 13.0994 14.6961 13.0994 14.4199V5.94568C13.0994 5.66954 12.8755 5.44568 12.5994 5.44568H7.52888C5.89439 5.44568 4.56934 6.7707 4.56934 8.40513V11.9605Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 14.4199C12.0996 14.6961 12.3235 14.9199 12.5996 14.9199H17.2592C17.5354 14.9199 17.7592 14.6961 17.7592 14.4199V5.94568C17.7592 4.38279 16.4923 3.11582 14.9294 3.11582C13.3666 3.11582 12.0996 4.3828 12.0996 5.94568V14.4199ZM13.0996 13.9199V5.94568C13.0996 4.93506 13.9189 4.11582 14.9294 4.11582C15.94 4.11582 16.7592 4.93507 16.7592 5.94568V13.9199H13.0996Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.759 14.4199C16.759 14.6961 16.9829 14.9199 17.259 14.9199H25.1014C25.3775 14.9199 25.6014 14.6961 25.6014 14.4199V5.94568C25.6014 5.66954 25.3775 5.44568 25.1014 5.44568H17.259C16.9829 5.44568 16.759 5.66954 16.759 5.94568V14.4199ZM17.759 13.9199V6.44568H24.6014V13.9199H17.759Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.6016 14.4199C24.6016 14.6961 24.8254 14.9199 25.1016 14.9199H29.7612C30.0373 14.9199 30.2612 14.6961 30.2612 14.4199V5.94568C30.2612 4.38279 28.9942 3.11582 27.4313 3.11582C25.8684 3.11582 24.6016 4.38282 24.6016 5.94568V14.4199ZM25.6016 13.9199V5.94568C25.6016 4.93504 26.4207 4.11582 27.4313 4.11582C28.4419 4.11582 29.2612 4.93507 29.2612 5.94568V13.9199H25.6016Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M36.791 11.9609C36.791 12.2371 37.0149 12.4609 37.291 12.4609H40.6825C41.9404 12.4609 42.9601 11.4412 42.9601 10.1833C42.9601 8.92542 41.9404 7.90569 40.6825 7.90569H37.291C37.0149 7.90569 36.791 8.12955 36.791 8.40569V11.9609ZM37.791 11.4609V8.90569H40.6825C41.3881 8.90569 41.9601 9.47771 41.9601 10.1833C41.9601 10.8889 41.3881 11.4609 40.6825 11.4609H37.791Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M29.261 14.4199C29.261 14.6961 29.4848 14.9199 29.761 14.9199H34.8315C36.466 14.9199 37.791 13.595 37.791 11.9605V8.40513C37.791 6.7707 36.466 5.44568 34.8315 5.44568H29.761C29.4848 5.44568 29.261 5.66954 29.261 5.94568V14.4199ZM30.261 13.9199V6.44568H34.8315C35.9137 6.44568 36.791 7.32301 36.791 8.40513V11.9605C36.791 13.0427 35.9137 13.9199 34.8315 13.9199H30.261Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.23584 41.0046C7.23584 44.8044 10.3162 47.8848 14.116 47.8848C17.9158 47.8848 20.9962 44.8044 20.9962 41.0046C20.9962 37.2048 17.9158 34.1244 14.116 34.1244C10.3162 34.1244 7.23584 37.2048 7.23584 41.0046ZM14.116 46.8848C10.8685 46.8848 8.23584 44.2521 8.23584 41.0046C8.23584 37.7571 10.8685 35.1244 14.116 35.1244C17.3635 35.1244 19.9962 37.7571 19.9962 41.0046C19.9962 44.2521 17.3635 46.8848 14.116 46.8848Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34781 36.8327C1.34784 36.8326 1.34778 36.8328 1.34781 36.8327L1.45832 36.4151L2.78595 31.3765L3.76729 27.6525C3.83766 27.3855 3.67824 27.112 3.41121 27.0416C3.14418 26.9712 2.87067 27.1306 2.80031 27.3977L1.81896 31.1217L0.380936 36.5774C-0.286037 39.1098 1.62328 41.5898 4.24304 41.5898H7.73792C7.87144 41.5898 7.99942 41.5364 8.09334 41.4415C8.18725 41.3466 8.2393 41.2181 8.23789 41.0846C8.23769 41.0652 8.23702 41.0463 8.2366 41.0341L8.23647 41.0303C8.23598 41.0161 8.23583 41.0097 8.23583 41.0051C8.23583 37.7575 10.8685 35.1249 14.116 35.1249C17.3635 35.1249 19.9961 37.7575 19.9961 41.0051C19.9961 41.0248 19.996 41.0263 19.9956 41.0287C19.9953 41.0318 19.9947 41.0365 19.994 41.0828C19.9921 41.2166 20.044 41.3456 20.1379 41.4409C20.2319 41.5362 20.3601 41.5898 20.494 41.5898H28.9827C29.1166 41.5898 29.2448 41.5362 29.3388 41.4409C29.4327 41.3456 29.4846 41.2166 29.4827 41.0828C29.4821 41.0402 29.4815 41.0338 29.4811 41.0294C29.4808 41.0258 29.4806 41.0236 29.4806 41.0051C29.4806 37.7575 32.1132 35.1249 35.3607 35.1249C38.6082 35.1249 41.2409 37.7575 41.2409 41.0051C41.2409 41.0097 41.2407 41.0161 41.2402 41.0303L41.2401 41.0341C41.2397 41.0462 41.239 41.0652 41.2388 41.0846C41.2374 41.2181 41.2894 41.3466 41.3834 41.4415C41.4773 41.5364 41.6053 41.5898 41.7388 41.5898H46.7595C48.9651 41.5898 50.7529 39.8019 50.7529 37.5955V31.2491C50.7529 29.0436 48.9651 27.2556 46.7595 27.2556H41.6271C41.2359 27.2555 40.8556 27.126 40.5458 26.8872C40.2359 26.6483 40.0138 26.3136 39.9141 25.9353L37.8427 18.0728C37.1983 15.6254 34.9851 13.9204 32.4561 13.9204H10.6442C8.11412 13.9204 5.90196 15.6254 5.25754 18.0728L3.58772 24.4094C3.51735 24.6764 3.67677 24.9499 3.9438 25.0203C4.21083 25.0907 4.48434 24.9312 4.5547 24.6642L6.22455 18.3275C6.75333 16.3193 8.56839 14.9204 10.6442 14.9204H32.4561C34.5309 14.9204 36.3469 16.3193 36.8757 18.3274L38.9471 26.1901C39.1031 26.782 39.4505 27.3056 39.9353 27.6792C40.4201 28.0528 41.0149 28.2555 41.627 28.2556H46.7595C48.4127 28.2556 49.7529 29.5959 49.7529 31.2491V37.5955C49.7529 39.2498 48.4127 40.5898 46.7595 40.5898H42.2285C42.0139 36.9834 39.0211 34.1249 35.3607 34.1249C31.7003 34.1249 28.7077 36.9834 28.493 40.5898H20.9838C20.7691 36.9834 17.7764 34.1249 14.116 34.1249C10.4556 34.1249 7.46284 36.9834 7.24815 40.5898H4.24304C2.2795 40.5898 0.848019 38.7312 1.34781 36.8327Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M28.4805 41.0046C28.4805 44.8044 31.5608 47.8848 35.3606 47.8848C39.1604 47.8848 42.2408 44.8044 42.2408 41.0046C42.2408 37.2048 39.1604 34.1244 35.3606 34.1244C31.5608 34.1244 28.4805 37.2048 28.4805 41.0046ZM35.3606 46.8848C32.1131 46.8848 29.4805 44.2521 29.4805 41.0046C29.4805 37.7571 32.1131 35.1244 35.3606 35.1244C38.6082 35.1244 41.2408 37.7571 41.2408 41.0046C41.2408 44.2521 38.6082 46.8848 35.3606 46.8848Z"></path>
</svg>
</div>
<h6>Group Tour</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="https://triprex.egenslab.com/tour-type/historical-tours/" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<g>
<path d="M41.0158 10.1468C41.4585 10.1469 41.8913 10.0157 42.2594 9.76983C42.6275 9.52394 42.9145 9.1744 43.084 8.7654C43.2534 8.35641 43.2978 7.90635 43.2115 7.47214C43.1251 7.03793 42.9119 6.63908 42.5989 6.32604C42.2859 6.01299 41.887 5.79982 41.4528 5.71348C41.0186 5.62713 40.5685 5.6715 40.1595 5.84097C39.7505 6.01043 39.401 6.29739 39.1551 6.66553C38.9092 7.03368 38.778 7.46647 38.7781 7.90918C38.7788 8.50242 39.0148 9.07116 39.4343 9.49065C39.8538 9.91013 40.4225 10.1461 41.0158 10.1468ZM41.0158 6.73353C41.2483 6.73342 41.4757 6.80228 41.6691 6.9314C41.8625 7.06052 42.0132 7.2441 42.1023 7.45891C42.1914 7.67373 42.2147 7.91013 42.1694 8.13822C42.1241 8.36631 42.0122 8.57584 41.8478 8.74031C41.6834 8.90478 41.4739 9.01681 41.2458 9.06221C41.0178 9.10762 40.7814 9.08437 40.5665 8.9954C40.3517 8.90643 40.168 8.75575 40.0388 8.5624C39.9096 8.36905 39.8406 8.14173 39.8406 7.90918C39.8405 7.59728 39.9642 7.29808 40.1845 7.07734C40.4049 6.85659 40.7038 6.73236 41.0158 6.73193V6.73353ZM4.91785 5.66943C4.47518 5.66943 4.04245 5.8007 3.67439 6.04663C3.30633 6.29256 3.01946 6.64212 2.85006 7.05108C2.68066 7.46005 2.63633 7.91007 2.72269 8.34423C2.80905 8.77839 3.02222 9.17719 3.33523 9.49021C3.64824 9.80322 4.04704 10.0164 4.4812 10.1027C4.91536 10.1891 5.36538 10.1448 5.77435 9.97538C6.18332 9.80598 6.53287 9.51911 6.7788 9.15104C7.02474 8.78298 7.156 8.35026 7.156 7.90759C7.1553 7.31421 6.91927 6.74533 6.49968 6.32575C6.0801 5.90617 5.51123 5.67014 4.91785 5.66943ZM4.91785 9.08272C4.6853 9.08272 4.45798 9.01375 4.26463 8.88454C4.07128 8.75534 3.9206 8.57169 3.83163 8.35684C3.74266 8.14199 3.71941 7.90557 3.76482 7.6775C3.81022 7.44943 3.92225 7.23995 4.08672 7.07556C4.25119 6.91116 4.46072 6.79923 4.68881 6.75393C4.9169 6.70862 5.1533 6.73198 5.36812 6.82105C5.58293 6.91011 5.76651 7.06088 5.89563 7.25429C6.02474 7.44769 6.09361 7.67504 6.0935 7.90759C6.0935 8.21949 5.96967 8.51863 5.74922 8.73928C5.52878 8.95993 5.22975 9.08403 4.91785 9.08431V9.08272ZM16.4587 7.61434H23.9786C24.1195 7.61434 24.2546 7.55837 24.3542 7.45874C24.4538 7.35911 24.5098 7.22399 24.5098 7.08309C24.5098 6.94219 24.4538 6.80707 24.3542 6.70744C24.2546 6.60781 24.1195 6.55184 23.9786 6.55184H16.4587C16.3178 6.55184 16.1827 6.60781 16.0831 6.70744C15.9834 6.80707 15.9275 6.94219 15.9275 7.08309C15.9275 7.22399 15.9834 7.35911 16.0831 7.45874C16.1827 7.55837 16.3178 7.61434 16.4587 7.61434Z"></path>
<path d="M49.0668 43.5042H47.7971C47.702 43.3406 47.5716 43.2004 47.4153 43.0938C47.2591 42.9871 47.0809 42.9168 46.894 42.8879V24.5067C47.0809 24.4757 47.2587 24.404 47.4148 24.2966C47.5709 24.1891 47.7014 24.0487 47.7971 23.8851H49.0668C49.5796 23.8851 50.0715 23.6814 50.4342 23.3187C50.7968 22.9561 51.0005 22.4642 51.0005 21.9514C51.0005 21.4385 50.7968 20.9466 50.4342 20.584C50.0715 20.2213 49.5796 20.0176 49.0668 20.0176H47.7971C47.6813 19.8251 47.5177 19.6658 47.3223 19.5551C47.1268 19.4443 46.9061 19.3859 46.6815 19.3854H33.8199V7.61292H36.1043C36.0454 8.59582 36.2831 9.57375 36.7866 10.42C37.29 11.2662 38.036 11.9418 38.9279 12.3591C39.8197 12.7764 40.8164 12.9162 41.7886 12.7605C42.7609 12.6047 43.664 12.1606 44.3809 11.4856C45.0978 10.8106 45.5954 9.93585 45.8094 8.97471C46.0233 8.01356 45.9437 7.01032 45.5808 6.09497C45.2178 5.17962 44.5884 4.39436 43.774 3.84093C42.9596 3.2875 41.9977 2.99142 41.013 2.99104H4.9199C3.93546 2.99066 2.97359 3.28596 2.15895 3.83868C1.34432 4.3914 0.714468 5.17606 0.351036 6.09096C-0.0123956 7.00587 -0.0926565 8.00884 0.120655 8.96989C0.333967 9.93095 0.831016 10.8058 1.54739 11.481C2.26376 12.1563 3.16643 12.6008 4.13841 12.7569C5.11038 12.9131 6.10686 12.7737 6.9987 12.3569C7.89054 11.9401 8.63663 11.265 9.14026 10.4191C9.6439 9.57325 9.88187 8.59562 9.82334 7.61292H12.1077V41.427C12.1077 41.5679 12.1637 41.703 12.2633 41.8026C12.3629 41.9023 12.4981 41.9582 12.639 41.9582H25.6121V42.8879C25.4251 42.9168 25.247 42.9871 25.0907 43.0938C24.9345 43.2004 24.804 43.3406 24.709 43.5042H23.4393C22.9264 43.5042 22.4346 43.7079 22.0719 44.0706C21.7093 44.4332 21.5055 44.9251 21.5055 45.4379C21.5055 45.9508 21.7093 46.4426 22.0719 46.8053C22.4346 47.1679 22.9264 47.3717 23.4393 47.3717H24.7037C24.819 47.5662 24.983 47.7273 25.1796 47.8391C25.3762 47.9509 25.5985 48.0095 25.8246 48.0092H46.6815C46.9076 48.0095 47.1299 47.9509 47.3265 47.8391C47.523 47.7273 47.6871 47.5662 47.8024 47.3717H49.0668C49.5796 47.3717 50.0715 47.1679 50.4342 46.8053C50.7968 46.4426 51.0005 45.9508 51.0005 45.4379C51.0005 44.9251 50.7968 44.4332 50.4342 44.0706C50.0715 43.7079 49.5796 43.5042 49.0668 43.5042ZM46.894 46.3092V46.8085C46.8754 46.8494 46.8456 46.8842 46.8079 46.9087C46.7702 46.9331 46.7264 46.9463 46.6815 46.9467H25.8246C25.7797 46.9463 25.7358 46.9331 25.6982 46.9087C25.6605 46.8842 25.6306 46.8494 25.6121 46.8085V46.3092H25.5908V44.5667H25.6121V44.0673C25.6306 44.0264 25.6605 43.9917 25.6982 43.9672C25.7358 43.9427 25.7797 43.9295 25.8246 43.9292H46.6815C46.7264 43.9295 46.7702 43.9427 46.8079 43.9672C46.8456 43.9917 46.8754 44.0264 46.894 44.0673V44.5667H46.9152V46.3092H46.894ZM23.4393 21.0801H24.5283V22.8226H23.4393C23.2082 22.8226 22.9866 22.7308 22.8232 22.5674C22.6598 22.404 22.568 22.1824 22.568 21.9514C22.568 21.7203 22.6598 21.4987 22.8232 21.3353C22.9866 21.1719 23.2082 21.0801 23.4393 21.0801ZM25.6121 21.0801V20.5807C25.6309 20.5405 25.661 20.5065 25.6987 20.4829C25.7364 20.4594 25.7801 20.4472 25.8246 20.4479H46.6815C46.7259 20.4472 46.7696 20.4594 46.8073 20.4829C46.845 20.5065 46.8751 20.5405 46.894 20.5807V21.0801H46.9152V22.8226H46.894V23.322C46.8763 23.3635 46.8467 23.3989 46.8088 23.4235C46.771 23.4481 46.7266 23.4608 46.6815 23.4601H25.8299C25.7839 23.4619 25.7384 23.4497 25.6995 23.425C25.6605 23.4003 25.6301 23.3644 25.6121 23.322V22.8226H25.5908V21.0801H25.6121ZM23.4924 23.8851H24.709C24.8046 24.0487 24.9352 24.1891 25.0912 24.2966C25.2473 24.404 25.4252 24.4757 25.6121 24.5067V35.7745H23.4924V23.8851ZM49.938 21.9514C49.9379 22.1824 49.8461 22.4039 49.6827 22.5673C49.5193 22.7306 49.2978 22.8225 49.0668 22.8226H47.9777V21.0801H49.0668C49.2976 21.0811 49.5186 21.1732 49.6818 21.3364C49.8449 21.4995 49.9371 21.7206 49.938 21.9514ZM9.21771 6.55042C9.13838 6.55024 9.06001 6.56783 8.98835 6.6019C8.91671 6.63597 8.8536 6.68565 8.80366 6.74731C8.75373 6.80896 8.71824 6.88102 8.69979 6.95818C8.68135 7.03535 8.68043 7.11566 8.69709 7.19323C8.84324 7.97182 8.74565 8.77653 8.41764 9.49762C8.08963 10.2187 7.54717 10.8211 6.86424 11.2225C6.18131 11.624 5.39116 11.805 4.60158 11.7408C3.81199 11.6767 3.06141 11.3706 2.4522 10.8642C1.843 10.3578 1.40483 9.67583 1.19747 8.91127C0.990112 8.14671 1.02365 7.33679 1.29351 6.59199C1.56338 5.84719 2.05643 5.20376 2.70541 4.74948C3.3544 4.29519 4.12772 4.05217 4.9199 4.05354H41.013C41.7746 4.05354 42.519 4.2793 43.1523 4.70228C43.7856 5.12526 44.2792 5.72648 44.5709 6.42995C44.8626 7.13342 44.9392 7.90757 44.791 8.65456C44.6428 9.40154 44.2765 10.0878 43.7384 10.6267C43.2002 11.1656 42.5145 11.5328 41.7677 11.682C41.0209 11.8312 40.2467 11.7557 39.5428 11.465C38.8389 11.1743 38.237 10.6815 37.8132 10.0488C37.3893 9.4161 37.1625 8.67196 37.1615 7.91042C37.1615 7.17464 37.3623 7.04767 37.1243 6.74698C37.0737 6.68597 37.0104 6.63675 36.9389 6.6028C36.8673 6.56884 36.7891 6.55096 36.7099 6.55042H28.2567C28.1158 6.55042 27.9806 6.60639 27.881 6.70602C27.7814 6.80565 27.7254 6.94077 27.7254 7.08167C27.7254 7.22256 27.7814 7.35769 27.881 7.45732C27.9806 7.55695 28.1158 7.61292 28.2567 7.61292H32.7574V19.3854H30.2924V12.3782C30.2924 12.2373 30.2364 12.1022 30.1368 12.0026C30.0372 11.903 29.9021 11.847 29.7612 11.847C29.6203 11.847 29.4851 11.903 29.3855 12.0026C29.2859 12.1022 29.2299 12.2373 29.2299 12.3782V19.3854H26.8924V12.3782C26.8924 12.2373 26.8364 12.1022 26.7368 12.0026C26.6372 11.903 26.5021 11.847 26.3612 11.847C26.2203 11.847 26.0851 11.903 25.9855 12.0026C25.8859 12.1022 25.8299 12.2373 25.8299 12.3782V19.3854C25.6043 19.3848 25.3825 19.4427 25.186 19.5536C24.9895 19.6644 24.8251 19.8243 24.709 20.0176H23.4924V12.3782C23.4924 12.2373 23.4364 12.1022 23.3368 12.0026C23.2372 11.903 23.1021 11.847 22.9612 11.847C22.8203 11.847 22.6851 11.903 22.5855 12.0026C22.4859 12.1022 22.4299 12.2373 22.4299 12.3782V20.3045C22.1479 20.477 21.9149 20.719 21.7533 21.0074C21.5916 21.2957 21.5068 21.6208 21.5068 21.9514C21.5068 22.2819 21.5916 22.607 21.7533 22.8953C21.9149 23.1837 22.1479 23.4257 22.4299 23.5982V35.7745H20.0961V12.3782C20.0961 12.2373 20.0402 12.1022 19.9405 12.0026C19.8409 11.903 19.7058 11.847 19.5649 11.847C19.424 11.847 19.2888 11.903 19.1892 12.0026C19.0896 12.1022 19.0336 12.2373 19.0336 12.3782V35.7745H16.6961V12.3782C16.6961 12.2373 16.6402 12.1022 16.5405 12.0026C16.4409 11.903 16.3058 11.847 16.1649 11.847C16.024 11.847 15.8888 11.903 15.7892 12.0026C15.6896 12.1022 15.6336 12.2373 15.6336 12.3782V35.7745H13.1702V7.08167C13.1702 6.94077 13.1142 6.80565 13.0146 6.70602C12.915 6.60639 12.7799 6.55042 12.639 6.55042H9.21771ZM13.1702 40.8957V36.837H25.6121V40.8957H13.1702ZM26.6746 24.5226H45.8315V42.8667H26.6746V24.5226ZM22.568 45.4379C22.569 45.2071 22.6611 44.9861 22.8243 44.8229C22.9875 44.6598 23.2085 44.5676 23.4393 44.5667H24.5283V46.3092H23.4393C23.2083 46.309 22.9867 46.2172 22.8234 46.0538C22.66 45.8905 22.5682 45.6689 22.568 45.4379ZM49.0668 46.3092H47.9777V44.5667H49.0668C49.2979 44.5667 49.5195 44.6585 49.6828 44.8219C49.8462 44.9852 49.938 45.2068 49.938 45.4379C49.938 45.669 49.8462 45.8906 49.6828 46.054C49.5195 46.2174 49.2979 46.3092 49.0668 46.3092Z"></path>
<path d="M29.2274 28.4645C29.4075 28.5846 28.4379 28.5495 42.9921 28.5495C43.133 28.5495 43.2681 28.4935 43.3677 28.3939C43.4673 28.2943 43.5233 28.1592 43.5233 28.0183C43.5233 27.8774 43.4673 27.7422 43.3677 27.6426C43.2681 27.543 43.133 27.487 42.9921 27.487C28.499 27.487 29.4138 27.4477 29.2274 27.572C29.1528 27.6202 29.0915 27.6862 29.0491 27.7642C29.0066 27.8422 28.9844 27.9295 28.9844 28.0183C28.9844 28.107 29.0066 28.1944 29.0491 28.2723C29.0915 28.3503 29.1528 28.4164 29.2274 28.4645ZM29.2274 32.1992C29.4075 32.3193 28.4379 32.2842 42.9921 32.2842C43.133 32.2842 43.2681 32.2282 43.3677 32.1286C43.4673 32.029 43.5233 31.8938 43.5233 31.7529C43.5233 31.6121 43.4673 31.4769 43.3677 31.3773C43.2681 31.2777 43.133 31.2217 42.9921 31.2217C28.499 31.2217 29.4138 31.1824 29.2274 31.3067C29.1528 31.3549 29.0915 31.4209 29.0491 31.4989C29.0066 31.5768 28.9844 31.6642 28.9844 31.7529C28.9844 31.8417 29.0066 31.9291 29.0491 32.007C29.0915 32.085 29.1528 32.151 29.2274 32.1992ZM29.2274 35.9286C29.4138 36.0529 28.4666 36.0136 42.9921 36.0136C43.133 36.0136 43.2681 35.9576 43.3677 35.858C43.4673 35.7583 43.5233 35.6232 43.5233 35.4823C43.5233 35.3414 43.4673 35.2063 43.3677 35.1067C43.2681 35.007 43.133 34.9511 42.9921 34.9511C28.499 34.9511 29.4138 34.9118 29.2274 35.0361C29.1528 35.0842 29.0915 35.1503 29.0491 35.2283C29.0066 35.3062 28.9844 35.3936 28.9844 35.4823C28.9844 35.5711 29.0066 35.6584 29.0491 35.7364C29.0915 35.8143 29.1528 35.8804 29.2274 35.9286ZM38.8696 38.6804H33.6314C33.4905 38.6804 33.3554 38.7364 33.2558 38.836C33.1562 38.9357 33.1002 39.0708 33.1002 39.2117C33.1002 39.3526 33.1562 39.4877 33.2558 39.5873C33.3554 39.687 33.4905 39.7429 33.6314 39.7429H38.8696C39.0105 39.7429 39.1456 39.687 39.2452 39.5873C39.3448 39.4877 39.4008 39.3526 39.4008 39.2117C39.4008 39.0708 39.3448 38.9357 39.2452 38.836C39.1456 38.7364 39.0105 38.6804 38.8696 38.6804Z"></path>
</g>
</svg>
</div>
<h6>Individual Tours</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="https://triprex.egenslab.com/tour-type/honey-moon-tour/" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<g>
<path d="M15.944 6.69113C16.1658 6.69113 16.3786 6.60301 16.5354 6.44615C16.6923 6.28929 16.7804 6.07655 16.7804 5.85473C16.7804 5.6329 16.6923 5.42016 16.5354 5.2633C16.3786 5.10645 16.1658 5.01833 15.944 5.01833C15.7222 5.01833 15.5094 5.10645 15.3526 5.2633C15.1957 5.42016 15.1076 5.6329 15.1076 5.85473C15.1076 6.07655 15.1957 6.28929 15.3526 6.44615C15.5094 6.60301 15.7222 6.69113 15.944 6.69113ZM44.2694 10.4396C44.4912 10.4396 44.704 10.3515 44.8608 10.1946C45.0177 10.0378 45.1058 9.82505 45.1058 9.60323C45.1058 9.14127 44.7314 8.76683 44.2694 8.76683C43.8075 8.76683 43.433 9.14127 43.433 9.60323C43.433 9.82505 43.5211 10.0378 43.678 10.1946C43.8348 10.3515 44.0476 10.4396 44.2694 10.4396ZM3.96921 28.3865C3.50725 28.3865 3.13281 28.761 3.13281 29.2229C3.13281 29.6849 3.50725 30.0593 3.96921 30.0593C4.43117 30.0593 4.80561 29.6849 4.80561 29.2229C4.80561 28.761 4.43117 28.3865 3.96921 28.3865ZM44.2694 15.9578C44.7314 15.9578 45.1058 15.5834 45.1058 15.1214C45.1058 14.6595 44.7314 14.285 44.2694 14.285C43.8075 14.285 43.433 14.6595 43.433 15.1214C43.433 15.5834 43.8075 15.9578 44.2694 15.9578ZM41.5103 13.1987C41.7321 13.1987 41.9449 13.1106 42.1017 12.9538C42.2586 12.7969 42.3467 12.5842 42.3467 12.3623C42.3467 11.9004 41.9723 11.5259 41.5103 11.5259C41.0484 11.5259 40.6739 11.9004 40.6739 12.3623C40.6739 12.5842 40.762 12.7969 40.9189 12.9538C41.0757 13.1106 41.2885 13.1987 41.5103 13.1987ZM6.72831 31.1456C6.26635 31.1456 5.89191 31.5201 5.89191 31.982C5.89191 32.444 6.26635 32.8184 6.72831 32.8184C7.19027 32.8184 7.56471 32.444 7.56471 31.982C7.56471 31.5201 7.19027 31.1456 6.72831 31.1456ZM6.72831 25.6274C6.50649 25.6274 6.29374 25.7155 6.13689 25.8724C5.98003 26.0293 5.89191 26.242 5.89191 26.4638C5.89191 26.9258 6.26635 27.3002 6.72831 27.3002C7.19027 27.3002 7.56471 26.9258 7.56471 26.4638C7.56471 26.354 7.54308 26.2452 7.50105 26.1437C7.45901 26.0423 7.3974 25.9501 7.31974 25.8724C7.24207 25.7947 7.14987 25.7331 7.04839 25.6911C6.94691 25.6491 6.83815 25.6274 6.72831 25.6274ZM44.7896 21.9197L36.5072 21.5423L33.5186 18.5435C33.0698 18.0947 32.5496 17.7173 31.9784 17.4215L28.8062 15.8201L29.0204 15.0959C29.4488 14.9123 29.8772 14.6573 30.2546 14.3105C30.4484 14.1371 30.632 13.9433 30.7952 13.7189V14.9735C30.7952 15.3203 31.0706 15.5957 31.4174 15.5957C31.7642 15.5957 32.0396 15.3203 32.0396 14.9735V10.8833L32.8964 9.65933C32.9678 9.55733 33.0086 9.42473 33.0086 9.30233C33.0086 9.21053 32.9882 8.70053 32.6108 7.91513C32.3762 7.43573 32.0192 6.85433 31.448 6.19133L31.9172 5.11013C31.958 5.01833 31.9784 4.91633 31.9682 4.81433L31.6214 0.550726C31.601 0.285526 31.4174 0.0713257 31.1624 -7.43177e-05C30.9074 -0.0714743 30.6422 0.0305257 30.4892 0.244726L28.0922 3.66173C28.031 3.75353 27.9902 3.86573 27.98 3.97793L27.8984 5.08973C26.9906 5.34473 26.3174 5.67113 25.8278 5.98733C25.0628 6.47693 24.7466 6.91553 24.7058 6.98693C24.6344 7.09913 24.5936 7.22153 24.6038 7.35413L24.6956 9.23093L24.3386 10.5569C24.2672 10.8323 24.2468 11.1077 24.2468 11.4545C24.2468 11.5565 24.2468 11.6585 24.257 11.7503L24.2571 11.7508C24.208 11.7386 24.1577 11.7324 24.1071 11.7322C23.9396 11.7322 23.779 11.7987 23.6605 11.9171C23.5421 12.0356 23.4756 12.1962 23.4756 12.3637C23.4756 12.5311 23.5421 12.6918 23.6605 12.8102C23.779 12.9286 23.9396 12.9951 24.1071 12.9951C24.2431 12.9952 24.3755 12.951 24.4843 12.8693C24.6206 13.2593 24.812 13.6279 25.0527 13.9637C25.0731 13.9943 25.0935 14.0147 25.1139 14.0453L24.9609 14.8103L21.3705 14.9327C20.7177 14.9531 20.0649 15.0755 19.4325 15.2999L15.2301 16.8605L11.3439 15.1367C11.2725 14.8715 11.1603 14.3717 11.1603 13.7291C11.1603 12.9029 11.3337 11.8523 11.9661 10.6793C12.0477 10.5365 12.0681 10.3631 12.0171 10.1999C11.9661 10.0367 11.8641 9.90413 11.7213 9.83273L11.2113 9.55733C11.0481 9.46553 10.8543 9.45533 10.6911 9.52673C10.1709 9.73073 9.70171 10.0265 9.29371 10.3835C8.68171 10.9139 8.22271 11.5769 7.89631 12.2909C7.66171 12.8315 7.49851 13.3925 7.43731 13.9637C7.21291 14.0147 7.00891 14.0963 6.82531 14.1881C6.60091 14.3105 6.40711 14.4635 6.26431 14.6267C6.03991 14.8613 5.88691 15.1061 5.78491 15.2897C5.68291 15.4733 5.64211 15.6059 5.63191 15.6365C5.54011 15.9221 5.66251 16.2281 5.91751 16.3811L9.34471 18.2783L9.11012 19.0433C9.00811 19.3697 9.19171 19.7165 9.51812 19.8185C9.84451 19.9205 10.1913 19.7369 10.2933 19.4105L10.4565 18.8903L14.8629 21.3281C15.0159 21.4097 15.1995 21.4301 15.3627 21.3791L16.3623 21.0425L14.4854 43.2581C14.465 43.5437 14.6384 43.8191 14.924 43.9007C14.9546 43.9109 16.658 44.4413 19.0958 44.7269C19.4528 45.3899 19.8812 46.0223 20.3708 46.6241C20.432 46.6955 20.5034 46.7567 20.585 46.7873C20.6054 46.7975 21.0746 47.0117 21.8294 47.2259C22.064 47.2871 22.319 47.3585 22.5944 47.4197L22.6964 47.6543L21.2276 48.7355C21.0644 48.8579 20.9318 49.0211 20.84 49.1945C20.7584 49.3679 20.7176 49.5617 20.7176 49.7351C20.7176 50.0513 20.84 50.3573 21.0542 50.6021C21.1664 50.7245 21.299 50.8265 21.4622 50.8979C21.6152 50.9693 21.7988 51.0101 21.9824 51.0101H25.2566C25.736 51.0101 26.1848 50.8163 26.501 50.4899C26.8172 50.1737 27.0212 49.7249 27.0212 49.2455V48.9293C27.0212 48.8681 27.011 48.7967 26.9906 48.7355L26.5928 47.5217C27.2864 47.3993 28.0106 47.1851 28.7348 46.8587H28.796L28.7144 48.3581L28.2962 48.7865C28.1738 48.9089 28.082 49.0619 28.0208 49.2149C27.9596 49.3679 27.929 49.5311 27.929 49.6943C27.929 50.0309 28.0616 50.3573 28.286 50.6021C28.3982 50.7245 28.541 50.8265 28.7042 50.8979C28.8674 50.9693 29.051 51.0101 29.2448 51.0101H30.6626C31.4378 51.0101 31.8623 50.5463 32.0192 50.1635L33.335 46.4405C33.4064 46.2467 33.3554 46.0427 33.2738 45.8795C33.1718 45.6755 32.7842 44.9309 32.2538 43.8803L33.8552 24.9695L34.61 25.4999C34.712 25.5713 34.8446 25.6121 34.9772 25.6121L39.1184 25.5917V26.0711C39.1184 26.4179 39.3938 26.6933 39.7406 26.6933C40.0874 26.6933 40.3628 26.4179 40.3628 26.0711V25.5917H40.5872C40.7504 25.7651 41.036 26.0813 41.3114 26.5403C41.5256 26.8973 41.7398 27.3461 41.903 27.8867C42.0662 28.4273 42.1682 29.0495 42.1682 29.7737C42.1682 30.1377 42.3466 30.4469 42.7904 30.4469H43.3616C43.5452 30.4469 43.7186 30.3653 43.841 30.2225C44.249 29.7431 44.5346 29.2025 44.7284 28.6313C44.9222 28.0601 45.0038 27.4787 45.0038 26.8871C45.0038 26.1527 44.861 25.4285 44.606 24.7655C44.6774 24.7043 44.7386 24.6431 44.7998 24.5819C45.0752 24.2759 45.2384 23.9393 45.3302 23.6333C45.422 23.3273 45.4424 23.0417 45.4424 22.8275C45.4424 22.4746 45.3383 21.9473 44.7896 21.9197ZM9.91581 13.7291C9.91581 14.6165 10.079 15.2693 10.181 15.5957L9.73221 17.0543L7.08021 15.5855C7.21281 15.3509 7.55961 15.1265 7.99821 15.1571C8.17161 15.1673 8.33481 15.1061 8.45721 14.9837C8.57961 14.8715 8.65101 14.7083 8.65101 14.5349C8.66121 13.7699 8.89581 12.9437 9.33441 12.2501C9.54861 11.9033 9.81381 11.5871 10.1198 11.3117C10.2116 11.2301 10.3136 11.1485 10.4258 11.0771C10.0382 12.0767 9.91581 12.9845 9.91581 13.7291ZM29.204 4.26353L30.5096 2.39693L30.7034 4.78373L30.4994 5.24273C30.377 5.13053 30.2546 5.01833 30.122 4.89593C29.9588 4.76333 29.816 4.74293 29.6324 4.76333C29.4692 4.78373 29.3162 4.81433 29.1632 4.83473L29.204 4.26353ZM26.5826 6.99713C27.164 6.65033 28.0922 6.24233 29.5304 6.02813C30.6626 7.04813 31.2134 7.89473 31.499 8.46593C31.6418 8.77193 31.7132 8.99633 31.7438 9.14933V9.15953L31.142 10.0265C30.989 9.91433 30.8156 9.77153 30.632 9.59813C30.1934 9.20033 29.7242 8.62913 29.459 7.95593C29.306 7.55813 28.8674 7.44593 28.5206 7.72133C28.235 7.95593 27.9009 8.14554 27.5516 8.28233C27.1052 8.45726 26.4841 8.6178 25.9808 8.66993L25.9196 7.57853C25.9808 7.42553 26.2154 7.22153 26.5826 6.99713ZM25.5524 10.8629L25.8176 9.90413C26.0522 9.88373 26.3582 9.84293 26.705 9.78173C27.0926 9.70013 27.521 9.58793 27.9596 9.41453C28.184 9.32273 28.4084 9.22073 28.6226 9.09833C28.7552 9.31253 28.8878 9.51653 29.0408 9.71033C29.4692 10.2611 29.9384 10.6691 30.2954 10.9547C30.377 11.0159 30.4586 11.0771 30.53 11.1281L30.2444 12.1787C29.9894 12.8621 29.5508 13.3517 29.0612 13.6883C28.8164 13.8515 28.5512 13.9739 28.2962 14.0555C28.0412 14.1371 27.7964 14.1779 27.5822 14.1779C27.2528 14.1779 26.8172 13.9841 26.6234 13.8413C26.3276 13.6271 26.042 13.2905 25.838 12.8927C25.634 12.4847 25.5014 12.0155 25.5014 11.4851C25.4912 11.2709 25.5116 11.0669 25.5524 10.8629ZM27.623 15.4019L27.47 15.9017C27.3578 16.1057 27.2252 16.2383 27.113 16.3097C26.9906 16.3913 26.8682 16.4219 26.756 16.4219C26.5928 16.4219 26.4296 16.3505 26.3072 16.2281C26.246 16.1669 26.1929 16.0861 26.1542 15.9833C26.0995 15.8377 26.0743 15.6319 26.1032 15.5039L26.195 15.0245C26.399 15.1469 26.6234 15.2387 26.8478 15.3101C27.1204 15.3846 27.4833 15.4019 27.623 15.4019ZM24.8792 16.0649C24.8996 16.1975 24.9404 16.3301 24.9914 16.4423C25.1342 16.8197 25.3892 17.1257 25.6952 17.3399C26.0012 17.5541 26.3684 17.6663 26.756 17.6663C27.113 17.6663 27.4802 17.5643 27.7964 17.3501C27.9596 17.2379 28.1126 17.1053 28.2554 16.9421L30.9482 18.2987C30.4586 18.7985 29.9078 19.1759 29.3264 19.4615C28.541 19.8389 27.7046 20.0225 26.8784 20.0225C25.634 20.0225 24.4202 19.6145 23.4308 18.8597C22.931 18.4823 22.5026 18.0029 22.1456 17.4521C21.9008 17.0747 21.6968 16.6463 21.5438 16.1873L24.8792 16.0649ZM25.8176 22.1951L24.8282 22.7459L24.1448 21.8891L25.1342 21.3383L25.8176 22.1951ZM20.2892 16.3301C20.483 16.9727 20.7584 17.5643 21.095 18.0947C21.7478 19.1147 22.625 19.9103 23.6348 20.4407C23.7266 20.4917 23.8184 20.5325 23.9102 20.5733L22.8902 21.1343C22.727 21.2261 22.6148 21.3791 22.5842 21.5525C22.5536 21.7361 22.5944 21.9197 22.7066 22.0625L24.1754 23.9087C24.3692 24.1433 24.6956 24.2147 24.9608 24.0617L27.062 22.8989C27.2252 22.8071 27.3374 22.6541 27.368 22.4705C27.4088 22.2869 27.3578 22.1033 27.2456 21.9605L26.654 21.2261H26.8886C27.8984 21.2261 28.9286 21.0017 29.8772 20.5427C30.6728 20.1653 31.4174 19.6145 32.0702 18.9005C32.2742 19.0433 32.4578 19.2065 32.6312 19.3799L33.7226 20.4713C32.3966 21.5219 31.0298 22.4195 29.969 23.0621C29.3672 23.4293 28.847 23.7251 28.49 23.9189C28.3064 24.0209 28.1738 24.0923 28.0718 24.1433C27.9392 24.2147 27.8066 24.2657 27.7046 24.3983L27.0314 25.3061C26.8172 25.4081 26.246 25.6529 25.3586 25.7957C25.3178 25.7447 25.2668 25.6937 25.226 25.6427C24.8588 25.2653 24.3284 25.0409 23.7674 25.0409C23.4213 25.0406 23.0808 25.1284 22.778 25.2959C22.3292 25.0409 22.013 24.7553 21.7988 24.5207C21.6764 24.3779 21.5846 24.2555 21.5336 24.1739V23.2355C21.5336 23.1029 21.4928 22.9805 21.4214 22.8785L21.4112 22.8683C21.3398 22.7663 20.7176 21.8891 19.9526 20.6753C19.4443 19.8842 18.5372 18.4229 17.9432 17.1563L20.2892 16.3301ZM25.8176 27.0299C26.4194 26.9177 26.8886 26.7545 27.215 26.6321C27.3272 26.8259 27.4292 27.0299 27.521 27.2543C27.5924 27.4175 27.6536 27.6011 27.7046 27.7847C27.317 27.9683 26.8886 28.1315 26.4602 28.2539C26.1236 28.3559 25.7972 28.4273 25.4912 28.4681V28.2743C25.7054 27.9989 25.8584 27.5501 25.8176 27.0299ZM23.7623 27.9989C23.5418 27.9989 23.3304 27.9113 23.1745 27.7554C23.0186 27.5995 22.931 27.3881 22.931 27.1676C22.931 26.9472 23.0186 26.7357 23.1745 26.5798C23.3304 26.4239 23.5418 26.3363 23.7623 26.3363C23.9828 26.3363 24.1942 26.4239 24.3501 26.5798C24.506 26.7357 24.5936 26.9472 24.5936 27.1676C24.5936 27.3881 24.506 27.5995 24.3501 27.7554C24.1942 27.9113 23.9828 27.9989 23.7623 27.9989ZM24.2366 29.1719L24.0836 36.1793H22.4924L23.0738 29.1107C23.288 29.1923 23.5226 29.2331 23.7674 29.2331C23.9204 29.2229 24.0836 29.2025 24.2366 29.1719ZM21.7478 27.6317C21.6254 27.5603 21.503 27.4889 21.3908 27.4073C21.2072 27.2747 21.044 27.1421 20.9114 27.0095C20.8502 26.9381 20.789 26.8769 20.738 26.8055L21.1154 25.6529C21.3296 25.8569 21.5846 26.0609 21.8906 26.2649C21.758 26.5301 21.6866 26.8361 21.6866 27.1523C21.6968 27.3257 21.7172 27.4787 21.7478 27.6317ZM15.2402 20.1143L10.844 17.6765L11.2316 16.4423L14.9648 18.0947C15.1076 18.1559 15.281 18.1661 15.434 18.1049L16.76 17.6153C17.0354 18.1763 17.3414 18.7475 17.6474 19.2983L15.2402 20.1143ZM16.4744 43.0235C16.1888 42.9623 15.9542 42.9011 15.7706 42.8501L17.6576 20.6141L18.29 20.4101C18.5246 20.7977 18.749 21.1547 18.9632 21.5015C19.5548 22.4399 20.0648 23.1641 20.279 23.4803V24.2861C20.1464 24.6635 19.6568 26.0915 19.1162 27.8357C18.8 28.8557 18.4634 29.9777 18.1778 31.0691C17.882 32.1605 17.6372 33.2009 17.4944 34.0781C17.3516 34.9349 17.27 35.9039 17.27 36.9239C17.27 38.4947 17.4638 40.2083 17.9534 41.8811C18.0962 42.3911 18.2798 42.8909 18.4736 43.3907C17.678 43.2785 17.0048 43.1357 16.4744 43.0235ZM25.7666 49.2455C25.7666 49.5069 25.6575 49.7657 25.2566 49.7657H21.9314L23.8286 48.3581C24.053 48.1949 24.1448 47.8889 24.0326 47.6237C24.2978 47.6441 24.5732 47.6543 24.869 47.6543C25.0118 47.6543 25.1648 47.6543 25.3178 47.6441L25.7666 49.0211V49.2455ZM28.3268 45.6653C27.1436 46.2263 25.9502 46.4201 24.8792 46.4201C23.4171 46.4201 21.9574 46.0714 21.2378 45.7163C20.8263 45.2137 19.7351 43.5887 19.1264 41.5343C18.6776 39.9941 18.494 38.3927 18.494 36.9137C18.494 35.9651 18.5756 35.0573 18.698 34.2719C18.8306 33.4661 19.0652 32.4461 19.3508 31.3751C19.6364 30.2939 19.973 29.1617 20.2994 28.1417C20.534 28.3355 20.789 28.5089 21.0542 28.6619C21.299 28.8047 21.554 28.9271 21.809 29.0393L21.1766 36.7301C21.1664 36.9035 21.2174 37.0769 21.3398 37.1993C21.4622 37.3217 21.6254 37.4033 21.7988 37.4033H24.6854C25.022 37.4033 25.2974 37.1279 25.3076 36.7913L25.4606 29.7023C25.8992 29.6513 26.348 29.5493 26.807 29.4167C27.2048 29.3045 27.6026 29.1515 27.9902 28.9883C28.0004 29.0597 28.0106 29.1413 28.0208 29.2127C28.1228 29.9369 28.1636 30.7019 28.1636 31.4567C28.1636 32.8439 28.0208 34.2005 27.878 35.2001C27.8066 35.6999 27.7352 36.1079 27.6842 36.3935C27.6536 36.5363 27.6332 36.6485 27.623 36.7199C27.5822 36.9239 27.5822 37.0871 27.6434 37.2095C29.0918 40.3715 30.8768 43.9211 31.7132 45.5531H28.8062C28.5716 45.5531 28.4798 45.5939 28.3268 45.6653ZM30.8666 49.6637C30.8156 49.7249 30.7442 49.7555 30.6626 49.7555H29.0612L29.765 49.0313C29.867 48.9191 29.9282 48.7865 29.9384 48.6335L30.0404 46.8383H31.8662L30.8666 49.6637ZM28.1942 25.8569L28.6022 25.3061C28.8878 25.1531 29.6222 24.7655 30.5912 24.1739C30.938 23.9597 31.3154 23.7251 31.7132 23.4701L32.6516 24.1331L31.1726 41.7383C30.4382 40.2491 29.612 38.5355 28.8674 36.9239C28.9184 36.6485 29.0204 36.1079 29.1224 35.4041C29.2754 34.3637 29.4182 32.9561 29.4182 31.4873C29.4182 30.4163 29.3407 29.3139 29.1224 28.2743C28.9477 27.4423 28.5019 26.3745 28.1942 25.8569ZM35.1506 24.3677L32.825 22.7255C33.4064 22.3175 34.0082 21.8789 34.5998 21.3995L35.783 22.5929C35.8952 22.7051 36.038 22.7663 36.191 22.7765L39.0878 22.9091V24.3473H39.098L35.1506 24.3677ZM44.0348 23.4701C43.994 23.5721 43.9328 23.6741 43.8512 23.7557C43.7696 23.8475 43.6676 23.9291 43.5248 24.0005C43.3718 24.0719 43.2596 24.2045 43.2086 24.3677C43.1576 24.5309 43.1678 24.7043 43.2494 24.8573C43.5656 25.4489 43.739 26.1833 43.739 26.9075C43.739 27.3665 43.6676 27.8255 43.5248 28.2539C43.4636 28.4171 43.4024 28.5803 43.3208 28.7435C43.2596 28.2947 43.1678 27.8765 43.0556 27.4991C42.7598 26.5097 42.311 25.7753 41.9234 25.2755C41.546 24.7757 41.24 24.5207 41.2094 24.5003C41.0972 24.4085 40.9544 24.3575 40.8116 24.3575H40.3526V22.9805L44.1368 23.1539C44.1164 23.2457 44.0858 23.3579 44.0348 23.4701ZM9.48741 28.3865C9.02545 28.3865 8.65101 28.761 8.65101 29.2229C8.65101 29.6849 9.02545 30.0593 9.48741 30.0593C9.94937 30.0593 10.3238 29.6849 10.3238 29.2229C10.3238 28.761 9.94937 28.3865 9.48741 28.3865ZM47.0285 11.5259C46.9187 11.5259 46.8099 11.5476 46.7084 11.5896C46.607 11.6316 46.5148 11.6932 46.4371 11.7709C46.3594 11.8486 46.2978 11.9408 46.2558 12.0422C46.2137 12.1437 46.1921 12.2525 46.1921 12.3623C46.1921 12.8243 46.5666 13.1987 47.0285 13.1987C47.4905 13.1987 47.8649 12.8243 47.8649 12.3623C47.8649 12.2525 47.8433 12.1437 47.8012 12.0422C47.7592 11.9408 47.6976 11.8486 47.6199 11.7709C47.5423 11.6932 47.4501 11.6316 47.3486 11.5896C47.2471 11.5476 47.1384 11.5259 47.0285 11.5259ZM41.5154 33.0785C41.2936 33.0785 41.0808 33.1666 40.924 33.3235C40.7671 33.4804 40.679 33.6931 40.679 33.9149C40.679 34.3769 41.0535 34.7513 41.5154 34.7513C41.9774 34.7513 42.3518 34.3769 42.3518 33.9149C42.3518 33.6931 42.2637 33.4804 42.1068 33.3235C41.95 33.1666 41.7372 33.0785 41.5154 33.0785Z"></path>
</g>
</svg>
</div>
<h6>Honey moon Tour</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="https://triprex.egenslab.com/tour-type/luxury-tour/" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<path fill-rule="evenodd" clip-rule="evenodd" d="M34.9652 42.4275C34.9653 42.529 34.9453 42.6295 34.9065 42.7233C34.8677 42.8171 34.8108 42.9023 34.739 42.974C34.6672 43.0458 34.582 43.1027 34.4883 43.1415C34.3945 43.1803 34.294 43.2003 34.1925 43.2002H16.249C16.1475 43.2003 16.047 43.1803 15.9532 43.1415C15.8594 43.1027 15.7742 43.0458 15.7025 42.974C15.6307 42.9023 15.5738 42.8171 15.535 42.7233C15.4962 42.6295 15.4762 42.529 15.4763 42.4275C15.4763 42.326 15.4962 42.2256 15.5351 42.1318C15.5739 42.038 15.6308 41.9529 15.7026 41.8811C15.7743 41.8093 15.8595 41.7524 15.9533 41.7136C16.047 41.6748 16.1475 41.6548 16.249 41.6548H34.1926C34.2941 41.6548 34.3946 41.6748 34.4883 41.7136C34.582 41.7525 34.6672 41.8094 34.739 41.8811C34.8107 41.9529 34.8676 42.0381 34.9064 42.1318C34.9452 42.2256 34.9652 42.3261 34.9652 42.4275ZM30.4793 46.7411C30.4794 46.9461 30.398 47.1428 30.2531 47.2878C30.1082 47.4328 29.9116 47.5143 29.7066 47.5144H20.7348C20.5326 47.5102 20.3401 47.4268 20.1986 47.2823C20.0571 47.1378 19.9778 46.9437 19.9778 46.7414C19.9778 46.5392 20.0571 46.345 20.1986 46.2005C20.3401 46.056 20.5326 45.9727 20.7348 45.9684H29.7066C29.9115 45.9685 30.108 46.05 30.2528 46.1949C30.3977 46.3398 30.4792 46.5362 30.4793 46.7411ZM41.172 32.0638C41.8345 30.912 43.5731 31.1331 43.9195 32.4253C44.2647 33.7141 42.8758 34.7798 41.7208 34.1135C41.0037 33.6998 40.7576 32.7803 41.172 32.0638ZM39.8336 31.2911C38.6544 33.3334 40.1555 35.8605 42.4661 35.8605C44.4622 35.8605 45.9342 33.9711 45.4126 32.0258C44.7104 29.4076 41.184 28.95 39.8336 31.2911ZM43.7354 38.1217L47.6998 31.2552L41.206 27.5061L37.2415 34.3726L43.7354 38.1217ZM36.0152 37.8986C35.9996 37.8888 35.9833 37.8796 35.9676 37.8705L37.0281 36.0335L42.4028 39.1379L40.8483 41.8311C39.4426 40.2962 37.8151 38.9668 36.0152 37.8986ZM21.4553 35.2823C22.0126 33.4035 22.5308 31.7949 24.5394 31.2715C24.9997 31.1519 25.483 31.1523 25.9431 31.2727C28.0444 31.8183 28.7897 33.8361 29.2008 35.3215C26.6406 34.835 24.0212 34.8195 21.4553 35.2823ZM8.07266 43.6955L4.16042 36.9197C4.03195 36.6965 4.11057 36.4054 4.33329 36.2756L11.3127 32.2465C11.5339 32.1186 11.8289 32.1976 11.9568 32.4181L14.9189 37.5482L14.8582 37.65C14.7133 37.7312 14.5693 37.8141 14.4263 37.8987C11.9333 39.378 9.76941 41.3593 8.07266 43.6955ZM3.72903 29.9396L5.85128 33.6157L8.25017 32.2295L6.12724 28.5548L4.00499 27.6478L3.72903 29.9396ZM20.4059 30.2783C19.6469 32.2328 18.6739 34.2135 17.374 36.4485C18.142 36.1433 18.9271 35.8829 19.7253 35.6687C20.4447 33.3353 20.9703 30.6045 24.1505 29.7765C24.866 29.5905 25.6173 29.5905 26.3328 29.7765C29.6827 30.648 30.4638 34.0561 30.9048 35.7202C31.6803 35.9357 32.4429 36.1952 33.1889 36.4975C31.237 32.8084 30.2876 31.4074 29.0195 27.2007H21.4625C21.1502 28.2398 20.7978 29.2665 20.4059 30.2783ZM22.4466 23.3589C22.7657 21.8651 23.0189 20.3636 23.2238 18.9545H27.2575C27.5848 21.1977 27.9943 23.4203 28.5849 25.6554H21.8984C22.0982 24.894 22.281 24.1284 22.4466 23.3589ZM23.6898 15.3217C24.0055 12.5733 24.2501 9.91272 24.5616 7.16368H25.9216C26.3091 10.6135 26.5988 13.9559 27.0453 17.4094H23.4365C23.5331 16.6672 23.6167 15.9644 23.6898 15.3217ZM44.9048 24.9897L48.0294 26.7941L48.0665 29.3281L47.9131 29.5931L42.5378 26.49L42.6912 26.2251L44.9048 24.9897ZM49.4514 20.7237L46.9083 22.1881L45.9666 23.8182L48.5137 25.2885L49.4547 23.659L49.4514 20.7237ZM51 23.8647L50.9955 19.3859C50.9951 18.7932 50.3513 18.4211 49.8378 18.7177L45.9569 20.9527C45.8391 21.0205 45.7412 21.1179 45.673 21.2354L44.3495 23.5299L41.7521 24.9793C41.4918 25.125 41.3606 25.4391 41.1942 25.7277C40.8464 25.5966 40.4456 25.7317 40.2538 26.0632L35.5167 34.2689C35.4252 34.4274 35.3931 34.6132 35.426 34.7932C35.4588 34.9732 35.5546 35.1357 35.6961 35.2517L34.9529 36.5374C33.7888 34.2093 32.4793 32.1955 31.517 29.7191C31.1953 28.8897 30.9014 28.0498 30.636 27.2008H31.3512C31.7774 27.2008 32.1239 26.8549 32.1239 26.4281C32.1239 26.0012 31.7774 25.6555 31.3512 25.6555H30.1831C29.5747 23.4283 29.1564 21.2145 28.8198 18.9547H29.3895C29.5944 18.9547 29.791 18.8732 29.9359 18.7283C30.0808 18.5835 30.1622 18.3869 30.1622 18.182C30.1622 17.9771 30.0808 17.7806 29.9359 17.6357C29.791 17.4908 29.5944 17.4094 29.3895 17.4094H28.6031C28.1116 13.6758 27.8136 10.039 27.3782 6.30227C27.3325 5.91337 27.0023 5.61838 26.6108 5.61838H25.9934V4.25762C25.9934 4.0527 25.912 3.85617 25.7671 3.71127C25.6222 3.56637 25.4257 3.48497 25.2207 3.48497C25.0158 3.48497 24.8193 3.56637 24.6744 3.71127C24.5295 3.85617 24.4481 4.0527 24.4481 4.25762V5.61826H23.8718C23.6823 5.61836 23.4994 5.68807 23.3579 5.81415C23.2164 5.94024 23.1262 6.1139 23.1043 6.30216C22.6752 10.0413 22.3669 13.6795 21.8787 17.4092H21.0519C20.847 17.4093 20.6505 17.4908 20.5056 17.6356C20.3607 17.7805 20.2793 17.9769 20.2792 18.1818C20.2794 18.3867 20.3608 18.5831 20.5057 18.728C20.6506 18.8729 20.847 18.9543 21.0519 18.9545H21.662C21.3293 21.2028 20.9037 23.439 20.3 25.6554H19.0901C18.8852 25.6555 18.6888 25.7369 18.5439 25.8817C18.399 26.0266 18.3175 26.2231 18.3174 26.428C18.3175 26.6329 18.399 26.8293 18.5438 26.9742C18.6887 27.1191 18.8852 27.2006 19.0901 27.2007H19.8458C18.8631 30.3316 17.6883 32.88 15.8272 36.0314L13.2951 31.6453C12.7398 30.6834 11.5031 30.3513 10.5399 30.908L9.58771 31.4568L7.33688 27.5595C7.25375 27.4145 7.12572 27.3004 6.97211 27.2345L3.90168 25.9235L1.44207 21.6641C1.22933 21.2941 0.756141 21.1674 0.386157 21.3808C0.298224 21.4316 0.221161 21.4992 0.159382 21.5797C0.0976038 21.6603 0.0523226 21.7522 0.0261314 21.8503C-5.9698e-05 21.9484 -0.00664613 22.0507 0.00674925 22.1513C0.0201446 22.2519 0.0532586 22.3489 0.104195 22.4368L2.56312 26.6962L2.16312 30.0107C2.1441 30.1766 2.17838 30.3444 2.261 30.4896L4.51239 34.3883L3.56092 34.9371C2.59745 35.4936 2.26507 36.7296 2.82152 37.6923L7.11496 45.1298C7.01255 45.3002 6.91003 45.4697 6.81079 45.6427C6.59997 46.0141 6.72855 46.4859 7.09989 46.6966C7.4692 46.9093 7.94113 46.7795 8.15377 46.4094C11.6452 40.2915 18.1841 36.4907 25.2202 36.4907C32.2564 36.4907 38.7954 40.2913 42.2867 46.4094C42.337 46.4976 42.4043 46.5749 42.4845 46.6371C42.5648 46.6992 42.6565 46.7449 42.7545 46.7716C42.8524 46.7983 42.9546 46.8054 43.0553 46.7925C43.156 46.7796 43.2532 46.7471 43.3413 46.6966C43.7119 46.4858 43.8405 46.014 43.6297 45.6427C43.1187 44.748 42.5405 43.8937 41.9081 43.0846L43.7471 39.8999C44.1041 40.0324 44.4965 39.8935 44.6862 39.5645L49.424 31.3582C49.6138 31.0305 49.5379 30.6186 49.2458 30.376C49.412 30.0871 49.6187 29.815 49.6145 29.5191L49.5715 26.5453L50.8962 24.2508C50.9644 24.1335 51.0002 24.0003 51 23.8647Z"></path>
</svg>
</div>
<h6>Luxury Tour</h6>
</a>
</div>
</div>
</div>
<div class="destination-wrapper">
<h4>Our Destinations</h4>
<div class="row">
<div class="col-lg-12">
<div class="swiper destination-sidebar-slider mb-35">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="destination-card2">
<a href="https://triprex.egenslab.com/destination/sweden/" class="destination-card-img">
<img fetchpriority="high" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="https://triprex.egenslab.com/destination/sweden/">Sweden</a></h4>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="destination-card2">
<a href="https://triprex.egenslab.com/destination/japan/" class="destination-card-img">
<img width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="https://triprex.egenslab.com/destination/japan/">Japan</a></h4>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="destination-card2">
<a href="https://triprex.egenslab.com/destination/india/" class="destination-card-img">
<img width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="https://triprex.egenslab.com/destination/india/">India</a></h4>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="destination-card2">
<a href="https://triprex.egenslab.com/destination/brazil/" class="destination-card-img">
<img loading="lazy" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="https://triprex.egenslab.com/destination/brazil/">Brazil</a></h4>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="destination-card2">
<a href="https://triprex.egenslab.com/destination/australia/" class="destination-card-img">
<img loading="lazy" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="https://triprex.egenslab.com/destination/australia/">Australia</a></h4>
</div>
</div>
</div>
</div>
</div>
<div class="slide-and-view-btn-grp">
<div class="destination-sidebar-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
<path d="M53 6.5L1 6.5M1 6.5L7 12M1 6.5L7 0.999996"></path>
</svg>
</div>
<a href="/destination.html" class="secondary-btn2">View All</a>
<div class="destination-sidebar-next">
<svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
<path d="M0 6.5H52M52 6.5L46 1M52 6.5L46 12"></path>
</svg>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sidebar-bottom">
<div class="hotline-area">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
<path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z"></path>
<path d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z"></path>
<path d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z"></path>
</svg> </div>
<div class="content">
<span>To More Inquiry</span>
<h6><a href="tel:250788465231">+250-788 465 231</a></h6>
</div>
</div>
<div class="hotline-area">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g>
<path d="M9.84497 19.8136V25.0313C9.84583 25.2087 9.90247 25.3812 10.0069 25.5246C10.1112 25.6679 10.2581 25.7748 10.4266 25.8301C10.5951 25.8853 10.7767 25.8861 10.9457 25.8324C11.1147 25.7787 11.2625 25.6732 11.3682 25.5308L14.4203 21.3773L9.84497 19.8136ZM26.6468 0.156459C26.5201 0.0661815 26.3708 0.0127263 26.2155 0.00200482C26.0603 -0.00871662 25.9051 0.0237135 25.7671 0.0957086L0.454599 13.3145C0.308959 13.3914 0.188959 13.5092 0.109326 13.6535C0.0296936 13.7977 -0.00610776 13.962 0.00631628 14.1262C0.0187403 14.2905 0.0788492 14.4475 0.179266 14.5781C0.279683 14.7087 0.416039 14.8071 0.571599 14.8613L7.60847 17.2666L22.5946 4.45283L10.9981 18.4242L22.7915 22.4551C22.9085 22.4944 23.0327 22.5077 23.1554 22.4939C23.2781 22.4802 23.3963 22.4399 23.5017 22.3757C23.6072 22.3115 23.6973 22.225 23.7659 22.1223C23.8344 22.0196 23.8797 21.9032 23.8985 21.7812L26.9922 0.968709C27.0151 0.81464 26.995 0.657239 26.934 0.513898C26.8731 0.370556 26.7737 0.246854 26.6468 0.156459Z"></path>
</g>
</svg> </div>
<div class="content">
<span>Email:</span>
<h6><a href="/cdn-cgi/l/email-protection#3d54535b527d58455c504d5158135e5250"><span class="__cf_email__" data-cfemail="6900070f06290c11080419050c470a0604">acrossafricajourney@gmail.com</span></a></h6>
</div>
</div>
</div>
</div>



<style type="text/css">.company-logo img,.header-logo img,.mobile-logo-wrap img{width:154px!important;}</style><link rel="icon" href="assets/images/logo.icon.jpg" sizes="32x32">
<link rel="icon" href="https://triprex.b-cdn.net/wp-content/uploads/2024/03/favicon.svg" sizes="192x192">
<link rel="apple-touch-icon" href="https://triprex.b-cdn.net/wp-content/uploads/2024/03/favicon.svg">
<meta name="msapplication-TileImage" content="https://triprex.b-cdn.net/wp-content/uploads/2024/03/favicon.svg">
<script src="https://triprex.b-cdn.net/wp-includes/js/wp-emoji-release.min.js?ver=6.5.2" defer=""></script></head>
<body class="archive post-type-archive post-type-archive-destination wp-embed-responsive theme-triprex woocommerce-js elementor-default elementor-kit-7" itemtype="https://schema.org/WebPage">

<div id="app">
<div class="right-sidebar-menu">
<div class="sidebar-logo-area d-flex justify-content-between align-items-center">
<div class="sidebar-logo-wrap">
<a href=""><img alt="sidaber logo" src="assets/images/logo-md.jpg"></a>
</div>
<div class="right-sidebar-close-btn">
<i class="bi bi-x"></i>
</div>
</div>
<div class="sidebar-content-wrap">
<div class="category-wrapper">
<h4>Tour Type</h4>
<div class="row g-4">
<div class="col-sm-4 col-6">
<a href="#" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<path d="M4.46323 18.5007C4.54289 19.8917 4.88158 21.193 5.41733 22.1647C5.70003 22.6907 6.12301 23.1281 6.63928 23.4282C7.15555 23.7283 7.74491 23.8795 8.34189 23.8649C8.31354 25.3894 8.24997 27.8407 8.1136 30.0205C7.62343 30.2056 7.1986 30.5309 6.89212 30.9558C6.58563 31.3808 6.41108 31.8866 6.39022 32.4101C6.32347 34.0062 6.32952 36.2988 6.72636 38.2229C6.42456 38.6071 6.26282 39.0828 6.26786 39.5713C6.2729 40.0598 6.44442 40.5321 6.75408 40.9099L8.57018 43.1093L7.37298 44.2767C7.31176 44.3365 7.26541 44.4097 7.23769 44.4906C7.20996 44.5715 7.20163 44.6578 7.21336 44.7425C7.2251 44.8272 7.25657 44.908 7.30524 44.9783C7.35391 45.0486 7.41843 45.1065 7.49358 45.1474L13.1546 48.2185C13.1546 48.2185 13.2619 51 15.6696 51H30.7233C31.7077 51 32.5085 50.105 32.5085 49.0048V48.1564C32.5116 47.6693 32.3469 47.1961 32.0421 46.8163C32.2767 46.6351 32.4862 46.4234 32.6649 46.1868C32.9326 45.8188 33.0935 45.384 33.1299 44.9303C33.1662 44.4767 33.0766 44.0218 32.8709 43.6158L32.6452 43.1646C32.4451 42.7639 32.3407 42.3222 32.3403 41.8742V36.8387C32.9417 36.4533 34.1957 35.4092 34.503 33.2621C34.5749 32.7307 34.5806 32.1924 34.5198 31.6596C34.3259 29.801 33.6276 25.4807 31.2231 22.5431L36.6363 21.772L37.9097 28.3151L35.4453 29.4398C35.3796 29.4693 35.3204 29.5114 35.271 29.5639C35.2216 29.6163 35.1831 29.678 35.1577 29.7454C35.1323 29.8128 35.1204 29.8845 35.1229 29.9565C35.1253 30.0285 35.1419 30.0993 35.1718 30.1648C35.2018 30.2303 35.2443 30.2892 35.2971 30.3382C35.3499 30.3872 35.4119 30.4253 35.4794 30.4502C35.547 30.4752 35.6188 30.4865 35.6908 30.4836C35.7628 30.4806 35.8334 30.4635 35.8987 30.4331L38.7543 29.1298C38.8659 29.0789 38.957 28.992 39.0131 28.883C39.0692 28.774 39.087 28.6492 39.0635 28.5289L38.9214 27.7983L46.3012 23.3767C46.4118 23.3105 46.4953 23.2073 46.5371 23.0853C46.5788 22.9634 46.5761 22.8306 46.5293 22.7105C44.6871 17.9777 41.683 13.8792 40.4078 12.2555L41.5647 11.4187C41.6251 11.3749 41.676 11.3192 41.714 11.255C41.7521 11.1907 41.7766 11.1194 41.7861 11.0454C41.7955 10.9713 41.7897 10.8961 41.7689 10.8244C41.7481 10.7527 41.7129 10.686 41.6653 10.6285C40.0315 8.65212 37.9973 7.49491 36.5787 6.87218C35.8062 6.53412 34.9842 6.32334 34.1444 6.24801C34.3125 5.64768 34.4006 5.02775 34.4062 4.40435C34.4076 4.3262 34.3923 4.24865 34.3612 4.17693C34.3301 4.10522 34.284 4.04102 34.226 3.98867C34.1679 3.93632 34.0993 3.89705 34.0248 3.8735C33.9503 3.84995 33.8715 3.84269 33.794 3.85219L33.057 3.94236C33.5171 2.78568 33.5081 1.49516 33.0318 0.345035C32.9957 0.254073 32.9358 0.174472 32.8585 0.114537C32.7811 0.0546025 32.689 0.0165301 32.5919 0.00429229C32.4948 -0.00794556 32.3962 0.00609967 32.3064 0.0449625C32.2166 0.0838253 32.1388 0.146082 32.0812 0.225236C32.0704 0.240052 30.9833 1.70106 28.6012 2.30914C27.8114 2.50165 26.994 2.5538 26.1862 2.46319C24.8564 2.32159 23.5119 2.42921 22.2215 2.78053C19.0489 3.68444 17.0189 6.75859 17.4995 9.9312C17.7004 11.2696 18.3397 12.5035 19.3172 13.4395C19.2857 13.9462 19.3428 14.4546 19.4861 14.9417C19.8315 16.357 20.8966 16.8166 21.7299 16.8905V22.4262L19.795 22.7607C19.5512 22.5149 19.2218 22.3729 18.8758 22.3643C18.6497 22.3591 18.4235 22.3706 18.199 22.3988C18.5977 19.8817 18.3454 17.3045 17.4662 14.9126C17.616 14.9285 17.7649 14.9444 17.9174 14.9604C17.9364 14.9624 17.9556 14.9634 17.9747 14.9634C18.1144 14.963 18.2487 14.9091 18.3498 14.8128C18.451 14.7164 18.5113 14.585 18.5185 14.4455C18.5257 14.3059 18.4791 14.169 18.3883 14.0628C18.2976 13.9566 18.1696 13.8892 18.0307 13.8745C17.676 13.8374 17.3216 13.7988 16.9673 13.7587C16.8188 13.467 16.6035 13.2145 16.3389 13.0219C16.0743 12.8293 15.7678 12.702 15.4446 12.6504L13.9312 12.4102C13.6828 12.3693 13.428 12.3957 13.1934 12.4868C12.9587 12.5779 12.7528 12.7302 12.597 12.9279C12.5383 13.0029 12.4871 13.0836 12.4442 13.1686C12.1817 13.1298 11.9194 13.0898 11.6572 13.0488C11.1528 12.9656 10.6537 12.8525 10.1626 12.7102C8.51124 12.2509 7.28919 12.7219 6.92342 12.894C6.12688 12.9974 5.44489 13.6509 4.99293 14.7517C4.68595 15.5438 4.50844 16.3801 4.46722 17.2286V17.2313C4.42856 17.5485 4.42322 17.8688 4.45129 18.1871C4.45638 18.2913 4.45718 18.3949 4.46323 18.5007ZM13.8743 23.4812C14.0107 23.7162 14.199 23.9168 14.425 24.0677C14.6509 24.2185 14.9083 24.3156 15.1776 24.3515L15.9832 24.4596L15.995 24.6826L13.001 28.053C13.0129 26.5261 12.9302 24.9999 12.7534 23.4832C13.1282 23.4678 13.5019 23.4671 13.8743 23.4812ZM24.618 49.9083H18.066V48.0938C18.0655 47.812 18.0418 47.5308 17.9953 47.2529H24.618V49.9083ZM11.6 31.2741L16.0699 26.2424C16.1836 28.8378 16.3122 32.9651 16.1403 35.691L15.4712 36.2418L11.6 31.2741ZM15.7551 37.4211L16.2432 37.0198C16.3489 37.4805 16.6064 37.8923 16.9743 38.189V44.9196C15.935 43.4499 14.4803 41.5921 12.9801 40.3059L15.7551 37.4211ZM11.6639 23.5685C11.9188 25.5204 11.9317 27.7228 11.893 29.3003L11.4092 29.8449H9.21808C9.34553 27.6956 9.4067 25.3357 9.43394 23.8591C9.8909 23.8304 10.3459 23.7758 10.7967 23.6957C11.0852 23.6444 11.3743 23.602 11.6639 23.5685ZM7.481 32.455C7.4974 32.0461 7.6717 31.6594 7.96726 31.3762C8.26283 31.0931 8.65664 30.9355 9.06594 30.9367H10.4463C10.3783 31.032 10.3428 31.1467 10.3452 31.2638C10.3475 31.3809 10.3876 31.4941 10.4594 31.5866L11.23 32.5758L7.63903 37.0775C7.45615 35.5439 7.40328 33.9976 7.481 32.455ZM7.59586 40.2141C7.44398 40.0285 7.36009 39.7967 7.35809 39.5569C7.35609 39.3171 7.43611 39.0839 7.58486 38.8958L11.9201 33.4615L14.6627 36.9822L9.35397 42.3437L7.59586 40.2141ZM14.2455 48.485V47.8937C14.2455 47.7954 14.219 47.6989 14.1687 47.6145C14.1185 47.53 14.0464 47.4607 13.96 47.4138L8.66513 44.5402L12.2108 41.0833C13.8128 42.4399 15.4061 44.5775 16.2478 45.7848C16.7216 46.4618 16.9753 47.2684 16.9743 48.0947V49.9092H15.668C15.2906 49.9086 14.9289 49.7583 14.6622 49.4913C14.3955 49.2243 14.2457 48.8624 14.2455 48.485ZM25.7097 47.2529H28.5709V49.9083H25.7097V47.2529ZM31.416 49.0053C31.416 49.495 31.0983 49.9087 30.7225 49.9087H29.6626V47.2529H30.7225C31.0983 47.2529 31.416 47.6671 31.416 48.1564V49.0053ZM33.4215 33.108C33.3174 33.9998 32.923 34.8326 32.299 35.4782C31.9092 29.2077 28.9964 23.9617 28.1623 22.5761C28.4102 22.3626 28.7211 22.236 29.0476 22.2155C29.1476 22.207 29.2483 22.2196 29.3432 22.2524C29.4381 22.2852 29.5251 22.3375 29.5986 22.4059C32.5299 25.0926 33.2748 30.255 33.4331 31.7732C33.4844 32.2168 33.4805 32.665 33.4215 33.1076V33.108ZM26.921 25.1634L26.883 25.1911C26.3761 25.5619 26.0247 26.1076 25.8969 26.7225L25.5587 28.2769L25.1335 26.0324C25.1188 25.9546 25.0873 25.8809 25.0412 25.8165C24.9951 25.752 24.9356 25.6984 24.8667 25.6593C23.3071 24.7742 22.8977 23.7879 22.8217 23.5631V18.8817C24.0232 19.5783 25.3247 20.0859 26.6806 20.3869C26.5936 21.3156 26.6933 22.0894 26.9732 22.7019C26.9851 22.7362 27.0004 22.7692 27.0188 22.8005C27.0822 22.9299 27.156 23.0539 27.2394 23.1714C27.2573 23.1958 27.2724 23.2213 27.2882 23.2463L27.3412 23.3371C27.4999 23.6416 27.5448 23.9928 27.4677 24.3275C27.3907 24.6621 27.1968 24.9584 26.921 25.1629V25.1634ZM37.7846 20.506L36.9954 20.6185L33.2568 21.1509C33.7028 17.6085 32.0797 15.444 31.4114 14.7211L31.6118 10.9103C35.5043 13.6246 37.3975 19.4661 37.7846 20.5055V20.506ZM30.8547 17.9539C31.0444 17.4321 31.1836 16.8933 31.2705 16.3449C31.8746 17.3355 32.5012 18.9912 32.1319 21.3113L30.3016 21.5721C30.1174 21.4104 29.9023 21.2877 29.6694 21.2115C29.4364 21.1353 29.1904 21.1071 28.9462 21.1286C28.5291 21.1632 28.1259 21.2954 27.7691 21.5144C27.7339 21.1997 27.7307 20.8821 27.7596 20.5667C27.7979 20.5683 27.8365 20.5718 27.8747 20.5718C28.3396 20.5737 28.7973 20.4577 29.2051 20.2345C29.6129 20.0114 29.9574 19.6885 30.2064 19.2959C30.4693 18.8726 30.6865 18.4226 30.8544 17.9534L30.8547 17.9539ZM45.341 22.6795L38.699 26.6591L37.7182 21.6183L38.6042 21.4921L40.4285 21.2323C40.5001 21.2229 40.5691 21.1994 40.6316 21.1632C40.694 21.1269 40.7487 21.0787 40.7923 21.0212C40.836 20.9636 40.8678 20.898 40.886 20.8281C40.9041 20.7582 40.9082 20.6854 40.898 20.614C40.8879 20.5425 40.8636 20.4737 40.8266 20.4117C40.7897 20.3496 40.7408 20.2955 40.6828 20.2525C40.6248 20.2095 40.5588 20.1784 40.4887 20.161C40.4186 20.1437 40.3458 20.1404 40.2744 20.1514L38.8905 20.3486C38.2218 18.5294 37.4594 16.7459 36.6064 15.0055L39.5217 12.8964C40.7095 14.4042 43.5256 18.2255 45.3407 22.679L45.341 22.6795ZM40.4395 10.8845L36.0185 14.0824C35.0796 12.8713 34.0774 11.7104 33.0162 10.6047C32.6791 10.2643 32.278 9.99378 31.8361 9.80875C31.3941 9.62372 30.92 9.52782 30.4409 9.52656H30.1197C29.7162 9.52614 29.3294 9.36566 29.044 9.08035C28.7587 8.79503 28.5982 8.40819 28.5978 8.00469C28.598 7.81864 28.672 7.64027 28.8036 7.50871C28.9352 7.37716 29.1135 7.30315 29.2996 7.30294H33.3815C34.3302 7.29838 35.2694 7.49193 36.139 7.87119C37.7628 8.57214 39.2262 9.59755 40.4395 10.8845ZM20.5428 14.6671C20.5385 14.6494 20.5335 14.6319 20.5276 14.6147C20.4115 14.2124 20.3737 13.7915 20.4161 13.3749C20.4293 13.1837 20.5101 13.0034 20.644 12.8663C20.7779 12.7291 20.9562 12.644 21.147 12.6262C21.3302 12.5965 21.5179 12.6328 21.6767 12.7288C21.8355 12.8248 21.9549 12.9742 22.0137 13.1502C22.061 13.2809 22.0983 13.4151 22.1252 13.5516C22.1418 13.6346 22.1775 13.7127 22.2294 13.7795C22.2814 13.8463 22.3482 13.9002 22.4246 13.9368C22.5009 13.9733 22.5847 13.9917 22.6694 13.9903C22.754 13.9889 22.8372 13.9678 22.9123 13.9287C23.0549 13.8505 23.1905 13.7602 23.3176 13.6588C23.735 13.3261 24.0718 12.9034 24.3028 12.4222C24.5338 11.941 24.653 11.4138 24.6515 10.88V10.4822C24.6515 10.267 24.6953 10.0539 24.78 9.85604C24.8648 9.65815 24.9889 9.47952 25.1447 9.33097C25.3005 9.18241 25.4848 9.06701 25.6865 8.99176C25.8882 8.9165 26.1031 8.88296 26.3181 8.89315C26.3901 8.89718 26.4622 8.88693 26.5301 8.86297C26.5981 8.83901 26.6607 8.80183 26.7142 8.75357C26.7678 8.70531 26.8112 8.64692 26.8421 8.58178C26.8729 8.51664 26.8906 8.44603 26.894 8.37403C26.8975 8.30203 26.8866 8.23006 26.8621 8.16228C26.8375 8.0945 26.7998 8.03225 26.7511 7.97912C26.7024 7.92599 26.6437 7.88303 26.5783 7.85272C26.5129 7.82241 26.4421 7.80536 26.3701 7.80253C26.0075 7.78535 25.6452 7.84193 25.3051 7.96885C24.9651 8.09577 24.6543 8.29038 24.3916 8.54091C24.129 8.79144 23.9199 9.09267 23.777 9.42636C23.6342 9.76005 23.5605 10.1193 23.5605 10.4822V10.8796C23.5621 11.4891 23.3384 12.0777 22.9324 12.5324C22.7541 12.1885 22.4732 11.9085 22.1287 11.7313C21.7842 11.5542 21.3932 11.4885 21.0097 11.5434C20.7578 11.5729 20.5144 11.6521 20.2934 11.7765C20.0725 11.9009 19.8784 12.068 19.7227 12.2681C19.1145 11.5587 18.7181 10.6925 18.579 9.76855C18.1807 7.13742 19.8753 4.585 22.5214 3.83116C23.6793 3.52128 24.8842 3.42599 26.0765 3.54998C27.0117 3.65384 27.958 3.59209 28.8718 3.36757C30.1233 3.06163 31.2836 2.46135 32.2563 1.61663C32.3339 2.07695 32.3198 2.54806 32.2148 3.00292C32.1098 3.45777 31.916 3.88742 31.6446 4.26718C31.5752 4.35143 31.5326 4.45456 31.5224 4.56325C31.5121 4.67194 31.5347 4.7812 31.5872 4.87691C31.6397 4.97263 31.7197 5.05041 31.8169 5.10021C31.914 5.15001 32.0239 5.16954 32.1322 5.15628L33.2762 5.01625C33.2354 5.42439 33.145 5.82605 33.007 6.21233H29.2996C28.8241 6.21287 28.3682 6.40203 28.0319 6.73829C27.6957 7.07455 27.5066 7.53045 27.5061 8.00597C27.507 8.69881 27.7827 9.363 28.2727 9.85287C28.7626 10.3427 29.4269 10.6183 30.1197 10.6191C30.1197 10.6191 30.502 10.6226 30.5339 10.6237L30.2909 15.2422C30.2541 16.0395 30.0984 16.8268 29.829 17.5781C29.6875 17.9742 29.5046 18.3542 29.2832 18.7117C29.1034 18.9919 28.8442 19.2121 28.5386 19.3441C28.233 19.4761 27.8949 19.5139 27.5677 19.4527C26.0304 19.1906 24.5549 18.6461 23.2159 17.8467C23.096 17.773 22.9969 17.67 22.9279 17.5473C22.8588 17.4247 22.8222 17.2865 22.8213 17.1458V16.3333C22.8209 16.2549 22.8036 16.1774 22.7707 16.1063C22.7378 16.0351 22.69 15.9718 22.6305 15.9206C22.5711 15.8695 22.5013 15.8317 22.426 15.8097C22.3507 15.7878 22.2716 15.7823 22.194 15.7935C21.971 15.8272 20.8404 15.9235 20.5428 14.6671ZM21.7441 23.7635C21.7588 23.8261 22.1137 25.261 24.107 26.4773L24.9851 31.1146C25.0085 31.2383 25.074 31.3501 25.1704 31.4311C25.2668 31.512 25.3882 31.5572 25.5141 31.5589H25.5216C25.6463 31.5589 25.7671 31.5162 25.8642 31.438C25.9612 31.3597 26.0285 31.2506 26.055 31.1288L26.963 26.953C27.0337 26.6022 27.2319 26.2901 27.5193 26.0768L27.5714 26.0386C27.8804 25.8082 28.1325 25.51 28.3084 25.167C29.5224 27.6682 31.1732 31.8973 31.247 36.5269V41.8742C31.2477 42.4916 31.3915 43.1005 31.6672 43.6529L31.8931 44.1039C32.0089 44.3284 32.0605 44.5804 32.0423 44.8323C32.024 45.0842 31.9366 45.3262 31.7897 45.5316C31.5908 45.789 31.3414 46.0031 31.0569 46.1607H18.066V38.1026C18.8079 37.3015 21.1566 33.9095 20.2062 23.7968L21.7299 23.5338C21.7299 23.5338 21.7347 23.7237 21.7441 23.7635ZM19.0996 23.6936C19.9847 32.762 18.1685 36.1693 17.4556 37.1286C17.2367 36.7874 17.2027 36.2191 17.2131 36.0011C17.4648 32.5066 17.1949 26.6497 17.067 24.2947C17.0584 24.1733 17.088 24.0523 17.1517 23.9486C17.2154 23.8449 17.3099 23.7638 17.4221 23.7167C17.8752 23.5334 18.3609 23.4442 18.8496 23.4545C18.9135 23.4569 18.9743 23.4826 19.0205 23.5268C19.0667 23.5711 19.0951 23.6307 19.1002 23.6944L19.0996 23.6936ZM13.4509 13.609C13.4869 13.5628 13.5348 13.5271 13.5894 13.5059C13.6441 13.4847 13.7034 13.4786 13.7612 13.4884L15.2738 13.7286C15.4308 13.7534 15.5795 13.8158 15.7071 13.9105C15.8347 14.0052 15.9375 14.1294 16.0066 14.2725C17.6356 17.6508 17.3724 20.9449 17.0412 22.6951C17.0332 22.6982 17.0253 22.7008 17.0173 22.704C16.6826 22.8385 16.4013 23.0792 16.2166 23.389L15.3229 23.269C15.1425 23.2449 14.9788 23.1505 14.8675 23.0065C14.7561 22.8624 14.706 22.6803 14.728 22.4996C15.1478 18.9677 14.0781 15.6154 13.4031 13.9316C13.3813 13.8785 13.3742 13.8205 13.3826 13.7637C13.391 13.7069 13.4146 13.6534 13.4509 13.609ZM9.87061 13.7619C10.4024 13.916 10.943 14.0384 11.4893 14.1283C11.7394 14.1675 12.0334 14.2124 12.3641 14.2613C12.3727 14.2871 12.3792 14.3134 12.3894 14.3389C13.0257 15.9263 14.0347 19.0805 13.6435 22.372C13.6435 22.3757 13.6435 22.3792 13.6427 22.3828C12.625 22.3633 11.6079 22.4434 10.6058 22.6218C10.1645 22.7008 9.71878 22.7525 9.27113 22.7768C9.9783 21.7714 10.3672 20.1054 10.2564 18.1706C10.1417 16.1649 9.52666 14.5065 8.66162 13.6079C9.07002 13.599 9.47747 13.6509 9.87061 13.7619ZM6.00342 15.1664C6.30148 14.4406 6.7152 13.9939 7.11029 13.9716C7.1216 13.9716 7.13275 13.9706 7.14406 13.9706C7.99078 13.9706 9.02564 15.7674 9.16726 18.2321C9.30984 20.7297 8.46281 22.6505 7.61003 22.6992C7.21415 22.7231 6.75296 22.325 6.37397 21.6379C6.29512 21.4921 6.22329 21.3426 6.15874 21.1899C6.36423 21.2779 6.58537 21.3234 6.80888 21.3237C6.98281 21.3233 7.15567 21.2965 7.32153 21.2441C7.60866 21.1565 7.86706 20.9936 8.06983 20.7723C8.2726 20.5509 8.41232 20.2792 8.47444 19.9856C8.57169 19.5103 8.60385 19.024 8.57002 18.54C8.55151 18.1002 8.4304 17.6708 8.21636 17.2861C7.88866 16.7153 7.42269 16.3828 6.86846 16.3247C6.79666 16.3162 6.72388 16.322 6.65436 16.3419C6.58484 16.3618 6.51995 16.3952 6.46347 16.4404C6.40699 16.4855 6.36004 16.5414 6.32534 16.6049C6.29064 16.6683 6.26889 16.738 6.26135 16.8099C6.25381 16.8818 6.26062 16.9545 6.2814 17.0237C6.30218 17.093 6.33651 17.1574 6.38239 17.2133C6.42827 17.2692 6.4848 17.3154 6.54869 17.3492C6.61258 17.3831 6.68255 17.4039 6.75455 17.4105C6.94811 17.4308 7.12096 17.5719 7.26943 17.8295C7.39868 18.0676 7.47078 18.3325 7.48004 18.6033C7.50811 18.9877 7.48388 19.3741 7.40803 19.752C7.38529 19.8565 7.33525 19.9532 7.26301 20.0321C7.19078 20.111 7.09892 20.1693 6.9968 20.2012C6.89469 20.233 6.78595 20.2373 6.68166 20.2134C6.57738 20.1896 6.48127 20.1386 6.40312 20.0655C5.76892 19.4739 5.58524 18.6531 5.54159 18.0766C5.50009 17.0854 5.65711 16.096 6.00342 15.1664Z"></path>
<path d="M26.3612 14.0052C26.4789 14.0052 26.5938 13.9704 26.6916 13.905C26.7894 13.8397 26.8657 13.7468 26.9107 13.6381C26.9557 13.5295 26.9675 13.4099 26.9445 13.2945C26.9216 13.1792 26.8649 13.0732 26.7818 12.99C26.6986 12.9069 26.5926 12.8502 26.4773 12.8273C26.3619 12.8043 26.2423 12.8161 26.1337 12.8611C26.025 12.9061 25.9321 12.9824 25.8668 13.0802C25.8014 13.178 25.7665 13.2929 25.7665 13.4106C25.7665 13.4887 25.7819 13.566 25.8118 13.6382C25.8416 13.7103 25.8855 13.7759 25.9407 13.8311C25.9959 13.8863 26.0615 13.9301 26.1336 13.96C26.2058 13.9899 26.2831 14.0053 26.3612 14.0052ZM28.7951 14.0052C28.9128 14.0053 29.0278 13.9704 29.1256 13.9051C29.2234 13.8398 29.2996 13.7469 29.3447 13.6382C29.3897 13.5296 29.4015 13.41 29.3786 13.2946C29.3557 13.1793 29.299 13.0733 29.2159 12.9901C29.1327 12.9069 29.0267 12.8503 28.9114 12.8273C28.796 12.8043 28.6764 12.8161 28.5678 12.8611C28.4591 12.9061 28.3662 12.9823 28.3008 13.0801C28.2355 13.1779 28.2006 13.2929 28.2006 13.4106C28.2006 13.5682 28.2632 13.7195 28.3747 13.831C28.4862 13.9425 28.6374 14.0052 28.7951 14.0052ZM22.5439 28.4165C22.6615 28.4165 22.7765 28.3816 22.8743 28.3163C22.9721 28.2509 23.0483 28.158 23.0934 28.0494C23.1384 27.9407 23.1501 27.8211 23.1272 27.7057C23.1042 27.5904 23.0476 27.4844 22.9644 27.4012C22.8812 27.3181 22.7752 27.2615 22.6598 27.2385C22.5445 27.2156 22.4249 27.2274 22.3162 27.2724C22.2076 27.3175 22.1147 27.3937 22.0494 27.4915C21.984 27.5894 21.9492 27.7043 21.9492 27.822C21.9492 27.9001 21.9646 27.9774 21.9945 28.0495C22.0244 28.1217 22.0682 28.1872 22.1234 28.2424C22.1786 28.2976 22.2442 28.3414 22.3163 28.3713C22.3885 28.4012 22.4658 28.4165 22.5439 28.4165ZM22.3911 29.9366C22.3911 30.0542 22.426 30.1692 22.4914 30.267C22.5567 30.3648 22.6496 30.441 22.7583 30.486C22.8669 30.5311 22.9865 30.5428 23.1019 30.5199C23.2172 30.4969 23.3232 30.4403 23.4063 30.3571C23.4895 30.274 23.5462 30.168 23.5691 30.0526C23.592 29.9373 23.5803 29.8177 23.5353 29.709C23.4902 29.6004 23.414 29.5075 23.3162 29.4422C23.2184 29.3768 23.1035 29.3419 22.9858 29.3419C22.8281 29.3419 22.6768 29.4046 22.5653 29.5161C22.4538 29.6276 22.3911 29.7789 22.3911 29.9366Z"></path>
</svg>
</div>
<h6>Adventure Tours</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="#" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<g>
<path d="M15.944 6.69113C16.1658 6.69113 16.3786 6.60301 16.5354 6.44615C16.6923 6.28929 16.7804 6.07655 16.7804 5.85473C16.7804 5.6329 16.6923 5.42016 16.5354 5.2633C16.3786 5.10645 16.1658 5.01833 15.944 5.01833C15.7222 5.01833 15.5094 5.10645 15.3526 5.2633C15.1957 5.42016 15.1076 5.6329 15.1076 5.85473C15.1076 6.07655 15.1957 6.28929 15.3526 6.44615C15.5094 6.60301 15.7222 6.69113 15.944 6.69113ZM44.2694 10.4396C44.4912 10.4396 44.704 10.3515 44.8608 10.1946C45.0177 10.0378 45.1058 9.82505 45.1058 9.60323C45.1058 9.14127 44.7314 8.76683 44.2694 8.76683C43.8075 8.76683 43.433 9.14127 43.433 9.60323C43.433 9.82505 43.5211 10.0378 43.678 10.1946C43.8348 10.3515 44.0476 10.4396 44.2694 10.4396ZM3.96921 28.3865C3.50725 28.3865 3.13281 28.761 3.13281 29.2229C3.13281 29.6849 3.50725 30.0593 3.96921 30.0593C4.43117 30.0593 4.80561 29.6849 4.80561 29.2229C4.80561 28.761 4.43117 28.3865 3.96921 28.3865ZM44.2694 15.9578C44.7314 15.9578 45.1058 15.5834 45.1058 15.1214C45.1058 14.6595 44.7314 14.285 44.2694 14.285C43.8075 14.285 43.433 14.6595 43.433 15.1214C43.433 15.5834 43.8075 15.9578 44.2694 15.9578ZM41.5103 13.1987C41.7321 13.1987 41.9449 13.1106 42.1017 12.9538C42.2586 12.7969 42.3467 12.5842 42.3467 12.3623C42.3467 11.9004 41.9723 11.5259 41.5103 11.5259C41.0484 11.5259 40.6739 11.9004 40.6739 12.3623C40.6739 12.5842 40.762 12.7969 40.9189 12.9538C41.0757 13.1106 41.2885 13.1987 41.5103 13.1987ZM6.72831 31.1456C6.26635 31.1456 5.89191 31.5201 5.89191 31.982C5.89191 32.444 6.26635 32.8184 6.72831 32.8184C7.19027 32.8184 7.56471 32.444 7.56471 31.982C7.56471 31.5201 7.19027 31.1456 6.72831 31.1456ZM6.72831 25.6274C6.50649 25.6274 6.29374 25.7155 6.13689 25.8724C5.98003 26.0293 5.89191 26.242 5.89191 26.4638C5.89191 26.9258 6.26635 27.3002 6.72831 27.3002C7.19027 27.3002 7.56471 26.9258 7.56471 26.4638C7.56471 26.354 7.54308 26.2452 7.50105 26.1437C7.45901 26.0423 7.3974 25.9501 7.31974 25.8724C7.24207 25.7947 7.14987 25.7331 7.04839 25.6911C6.94691 25.6491 6.83815 25.6274 6.72831 25.6274ZM44.7896 21.9197L36.5072 21.5423L33.5186 18.5435C33.0698 18.0947 32.5496 17.7173 31.9784 17.4215L28.8062 15.8201L29.0204 15.0959C29.4488 14.9123 29.8772 14.6573 30.2546 14.3105C30.4484 14.1371 30.632 13.9433 30.7952 13.7189V14.9735C30.7952 15.3203 31.0706 15.5957 31.4174 15.5957C31.7642 15.5957 32.0396 15.3203 32.0396 14.9735V10.8833L32.8964 9.65933C32.9678 9.55733 33.0086 9.42473 33.0086 9.30233C33.0086 9.21053 32.9882 8.70053 32.6108 7.91513C32.3762 7.43573 32.0192 6.85433 31.448 6.19133L31.9172 5.11013C31.958 5.01833 31.9784 4.91633 31.9682 4.81433L31.6214 0.550726C31.601 0.285526 31.4174 0.0713257 31.1624 -7.43177e-05C30.9074 -0.0714743 30.6422 0.0305257 30.4892 0.244726L28.0922 3.66173C28.031 3.75353 27.9902 3.86573 27.98 3.97793L27.8984 5.08973C26.9906 5.34473 26.3174 5.67113 25.8278 5.98733C25.0628 6.47693 24.7466 6.91553 24.7058 6.98693C24.6344 7.09913 24.5936 7.22153 24.6038 7.35413L24.6956 9.23093L24.3386 10.5569C24.2672 10.8323 24.2468 11.1077 24.2468 11.4545C24.2468 11.5565 24.2468 11.6585 24.257 11.7503L24.2571 11.7508C24.208 11.7386 24.1577 11.7324 24.1071 11.7322C23.9396 11.7322 23.779 11.7987 23.6605 11.9171C23.5421 12.0356 23.4756 12.1962 23.4756 12.3637C23.4756 12.5311 23.5421 12.6918 23.6605 12.8102C23.779 12.9286 23.9396 12.9951 24.1071 12.9951C24.2431 12.9952 24.3755 12.951 24.4843 12.8693C24.6206 13.2593 24.812 13.6279 25.0527 13.9637C25.0731 13.9943 25.0935 14.0147 25.1139 14.0453L24.9609 14.8103L21.3705 14.9327C20.7177 14.9531 20.0649 15.0755 19.4325 15.2999L15.2301 16.8605L11.3439 15.1367C11.2725 14.8715 11.1603 14.3717 11.1603 13.7291C11.1603 12.9029 11.3337 11.8523 11.9661 10.6793C12.0477 10.5365 12.0681 10.3631 12.0171 10.1999C11.9661 10.0367 11.8641 9.90413 11.7213 9.83273L11.2113 9.55733C11.0481 9.46553 10.8543 9.45533 10.6911 9.52673C10.1709 9.73073 9.70171 10.0265 9.29371 10.3835C8.68171 10.9139 8.22271 11.5769 7.89631 12.2909C7.66171 12.8315 7.49851 13.3925 7.43731 13.9637C7.21291 14.0147 7.00891 14.0963 6.82531 14.1881C6.60091 14.3105 6.40711 14.4635 6.26431 14.6267C6.03991 14.8613 5.88691 15.1061 5.78491 15.2897C5.68291 15.4733 5.64211 15.6059 5.63191 15.6365C5.54011 15.9221 5.66251 16.2281 5.91751 16.3811L9.34471 18.2783L9.11012 19.0433C9.00811 19.3697 9.19171 19.7165 9.51812 19.8185C9.84451 19.9205 10.1913 19.7369 10.2933 19.4105L10.4565 18.8903L14.8629 21.3281C15.0159 21.4097 15.1995 21.4301 15.3627 21.3791L16.3623 21.0425L14.4854 43.2581C14.465 43.5437 14.6384 43.8191 14.924 43.9007C14.9546 43.9109 16.658 44.4413 19.0958 44.7269C19.4528 45.3899 19.8812 46.0223 20.3708 46.6241C20.432 46.6955 20.5034 46.7567 20.585 46.7873C20.6054 46.7975 21.0746 47.0117 21.8294 47.2259C22.064 47.2871 22.319 47.3585 22.5944 47.4197L22.6964 47.6543L21.2276 48.7355C21.0644 48.8579 20.9318 49.0211 20.84 49.1945C20.7584 49.3679 20.7176 49.5617 20.7176 49.7351C20.7176 50.0513 20.84 50.3573 21.0542 50.6021C21.1664 50.7245 21.299 50.8265 21.4622 50.8979C21.6152 50.9693 21.7988 51.0101 21.9824 51.0101H25.2566C25.736 51.0101 26.1848 50.8163 26.501 50.4899C26.8172 50.1737 27.0212 49.7249 27.0212 49.2455V48.9293C27.0212 48.8681 27.011 48.7967 26.9906 48.7355L26.5928 47.5217C27.2864 47.3993 28.0106 47.1851 28.7348 46.8587H28.796L28.7144 48.3581L28.2962 48.7865C28.1738 48.9089 28.082 49.0619 28.0208 49.2149C27.9596 49.3679 27.929 49.5311 27.929 49.6943C27.929 50.0309 28.0616 50.3573 28.286 50.6021C28.3982 50.7245 28.541 50.8265 28.7042 50.8979C28.8674 50.9693 29.051 51.0101 29.2448 51.0101H30.6626C31.4378 51.0101 31.8623 50.5463 32.0192 50.1635L33.335 46.4405C33.4064 46.2467 33.3554 46.0427 33.2738 45.8795C33.1718 45.6755 32.7842 44.9309 32.2538 43.8803L33.8552 24.9695L34.61 25.4999C34.712 25.5713 34.8446 25.6121 34.9772 25.6121L39.1184 25.5917V26.0711C39.1184 26.4179 39.3938 26.6933 39.7406 26.6933C40.0874 26.6933 40.3628 26.4179 40.3628 26.0711V25.5917H40.5872C40.7504 25.7651 41.036 26.0813 41.3114 26.5403C41.5256 26.8973 41.7398 27.3461 41.903 27.8867C42.0662 28.4273 42.1682 29.0495 42.1682 29.7737C42.1682 30.1377 42.3466 30.4469 42.7904 30.4469H43.3616C43.5452 30.4469 43.7186 30.3653 43.841 30.2225C44.249 29.7431 44.5346 29.2025 44.7284 28.6313C44.9222 28.0601 45.0038 27.4787 45.0038 26.8871C45.0038 26.1527 44.861 25.4285 44.606 24.7655C44.6774 24.7043 44.7386 24.6431 44.7998 24.5819C45.0752 24.2759 45.2384 23.9393 45.3302 23.6333C45.422 23.3273 45.4424 23.0417 45.4424 22.8275C45.4424 22.4746 45.3383 21.9473 44.7896 21.9197ZM9.91581 13.7291C9.91581 14.6165 10.079 15.2693 10.181 15.5957L9.73221 17.0543L7.08021 15.5855C7.21281 15.3509 7.55961 15.1265 7.99821 15.1571C8.17161 15.1673 8.33481 15.1061 8.45721 14.9837C8.57961 14.8715 8.65101 14.7083 8.65101 14.5349C8.66121 13.7699 8.89581 12.9437 9.33441 12.2501C9.54861 11.9033 9.81381 11.5871 10.1198 11.3117C10.2116 11.2301 10.3136 11.1485 10.4258 11.0771C10.0382 12.0767 9.91581 12.9845 9.91581 13.7291ZM29.204 4.26353L30.5096 2.39693L30.7034 4.78373L30.4994 5.24273C30.377 5.13053 30.2546 5.01833 30.122 4.89593C29.9588 4.76333 29.816 4.74293 29.6324 4.76333C29.4692 4.78373 29.3162 4.81433 29.1632 4.83473L29.204 4.26353ZM26.5826 6.99713C27.164 6.65033 28.0922 6.24233 29.5304 6.02813C30.6626 7.04813 31.2134 7.89473 31.499 8.46593C31.6418 8.77193 31.7132 8.99633 31.7438 9.14933V9.15953L31.142 10.0265C30.989 9.91433 30.8156 9.77153 30.632 9.59813C30.1934 9.20033 29.7242 8.62913 29.459 7.95593C29.306 7.55813 28.8674 7.44593 28.5206 7.72133C28.235 7.95593 27.9009 8.14554 27.5516 8.28233C27.1052 8.45726 26.4841 8.6178 25.9808 8.66993L25.9196 7.57853C25.9808 7.42553 26.2154 7.22153 26.5826 6.99713ZM25.5524 10.8629L25.8176 9.90413C26.0522 9.88373 26.3582 9.84293 26.705 9.78173C27.0926 9.70013 27.521 9.58793 27.9596 9.41453C28.184 9.32273 28.4084 9.22073 28.6226 9.09833C28.7552 9.31253 28.8878 9.51653 29.0408 9.71033C29.4692 10.2611 29.9384 10.6691 30.2954 10.9547C30.377 11.0159 30.4586 11.0771 30.53 11.1281L30.2444 12.1787C29.9894 12.8621 29.5508 13.3517 29.0612 13.6883C28.8164 13.8515 28.5512 13.9739 28.2962 14.0555C28.0412 14.1371 27.7964 14.1779 27.5822 14.1779C27.2528 14.1779 26.8172 13.9841 26.6234 13.8413C26.3276 13.6271 26.042 13.2905 25.838 12.8927C25.634 12.4847 25.5014 12.0155 25.5014 11.4851C25.4912 11.2709 25.5116 11.0669 25.5524 10.8629ZM27.623 15.4019L27.47 15.9017C27.3578 16.1057 27.2252 16.2383 27.113 16.3097C26.9906 16.3913 26.8682 16.4219 26.756 16.4219C26.5928 16.4219 26.4296 16.3505 26.3072 16.2281C26.246 16.1669 26.1929 16.0861 26.1542 15.9833C26.0995 15.8377 26.0743 15.6319 26.1032 15.5039L26.195 15.0245C26.399 15.1469 26.6234 15.2387 26.8478 15.3101C27.1204 15.3846 27.4833 15.4019 27.623 15.4019ZM24.8792 16.0649C24.8996 16.1975 24.9404 16.3301 24.9914 16.4423C25.1342 16.8197 25.3892 17.1257 25.6952 17.3399C26.0012 17.5541 26.3684 17.6663 26.756 17.6663C27.113 17.6663 27.4802 17.5643 27.7964 17.3501C27.9596 17.2379 28.1126 17.1053 28.2554 16.9421L30.9482 18.2987C30.4586 18.7985 29.9078 19.1759 29.3264 19.4615C28.541 19.8389 27.7046 20.0225 26.8784 20.0225C25.634 20.0225 24.4202 19.6145 23.4308 18.8597C22.931 18.4823 22.5026 18.0029 22.1456 17.4521C21.9008 17.0747 21.6968 16.6463 21.5438 16.1873L24.8792 16.0649ZM25.8176 22.1951L24.8282 22.7459L24.1448 21.8891L25.1342 21.3383L25.8176 22.1951ZM20.2892 16.3301C20.483 16.9727 20.7584 17.5643 21.095 18.0947C21.7478 19.1147 22.625 19.9103 23.6348 20.4407C23.7266 20.4917 23.8184 20.5325 23.9102 20.5733L22.8902 21.1343C22.727 21.2261 22.6148 21.3791 22.5842 21.5525C22.5536 21.7361 22.5944 21.9197 22.7066 22.0625L24.1754 23.9087C24.3692 24.1433 24.6956 24.2147 24.9608 24.0617L27.062 22.8989C27.2252 22.8071 27.3374 22.6541 27.368 22.4705C27.4088 22.2869 27.3578 22.1033 27.2456 21.9605L26.654 21.2261H26.8886C27.8984 21.2261 28.9286 21.0017 29.8772 20.5427C30.6728 20.1653 31.4174 19.6145 32.0702 18.9005C32.2742 19.0433 32.4578 19.2065 32.6312 19.3799L33.7226 20.4713C32.3966 21.5219 31.0298 22.4195 29.969 23.0621C29.3672 23.4293 28.847 23.7251 28.49 23.9189C28.3064 24.0209 28.1738 24.0923 28.0718 24.1433C27.9392 24.2147 27.8066 24.2657 27.7046 24.3983L27.0314 25.3061C26.8172 25.4081 26.246 25.6529 25.3586 25.7957C25.3178 25.7447 25.2668 25.6937 25.226 25.6427C24.8588 25.2653 24.3284 25.0409 23.7674 25.0409C23.4213 25.0406 23.0808 25.1284 22.778 25.2959C22.3292 25.0409 22.013 24.7553 21.7988 24.5207C21.6764 24.3779 21.5846 24.2555 21.5336 24.1739V23.2355C21.5336 23.1029 21.4928 22.9805 21.4214 22.8785L21.4112 22.8683C21.3398 22.7663 20.7176 21.8891 19.9526 20.6753C19.4443 19.8842 18.5372 18.4229 17.9432 17.1563L20.2892 16.3301ZM25.8176 27.0299C26.4194 26.9177 26.8886 26.7545 27.215 26.6321C27.3272 26.8259 27.4292 27.0299 27.521 27.2543C27.5924 27.4175 27.6536 27.6011 27.7046 27.7847C27.317 27.9683 26.8886 28.1315 26.4602 28.2539C26.1236 28.3559 25.7972 28.4273 25.4912 28.4681V28.2743C25.7054 27.9989 25.8584 27.5501 25.8176 27.0299ZM23.7623 27.9989C23.5418 27.9989 23.3304 27.9113 23.1745 27.7554C23.0186 27.5995 22.931 27.3881 22.931 27.1676C22.931 26.9472 23.0186 26.7357 23.1745 26.5798C23.3304 26.4239 23.5418 26.3363 23.7623 26.3363C23.9828 26.3363 24.1942 26.4239 24.3501 26.5798C24.506 26.7357 24.5936 26.9472 24.5936 27.1676C24.5936 27.3881 24.506 27.5995 24.3501 27.7554C24.1942 27.9113 23.9828 27.9989 23.7623 27.9989ZM24.2366 29.1719L24.0836 36.1793H22.4924L23.0738 29.1107C23.288 29.1923 23.5226 29.2331 23.7674 29.2331C23.9204 29.2229 24.0836 29.2025 24.2366 29.1719ZM21.7478 27.6317C21.6254 27.5603 21.503 27.4889 21.3908 27.4073C21.2072 27.2747 21.044 27.1421 20.9114 27.0095C20.8502 26.9381 20.789 26.8769 20.738 26.8055L21.1154 25.6529C21.3296 25.8569 21.5846 26.0609 21.8906 26.2649C21.758 26.5301 21.6866 26.8361 21.6866 27.1523C21.6968 27.3257 21.7172 27.4787 21.7478 27.6317ZM15.2402 20.1143L10.844 17.6765L11.2316 16.4423L14.9648 18.0947C15.1076 18.1559 15.281 18.1661 15.434 18.1049L16.76 17.6153C17.0354 18.1763 17.3414 18.7475 17.6474 19.2983L15.2402 20.1143ZM16.4744 43.0235C16.1888 42.9623 15.9542 42.9011 15.7706 42.8501L17.6576 20.6141L18.29 20.4101C18.5246 20.7977 18.749 21.1547 18.9632 21.5015C19.5548 22.4399 20.0648 23.1641 20.279 23.4803V24.2861C20.1464 24.6635 19.6568 26.0915 19.1162 27.8357C18.8 28.8557 18.4634 29.9777 18.1778 31.0691C17.882 32.1605 17.6372 33.2009 17.4944 34.0781C17.3516 34.9349 17.27 35.9039 17.27 36.9239C17.27 38.4947 17.4638 40.2083 17.9534 41.8811C18.0962 42.3911 18.2798 42.8909 18.4736 43.3907C17.678 43.2785 17.0048 43.1357 16.4744 43.0235ZM25.7666 49.2455C25.7666 49.5069 25.6575 49.7657 25.2566 49.7657H21.9314L23.8286 48.3581C24.053 48.1949 24.1448 47.8889 24.0326 47.6237C24.2978 47.6441 24.5732 47.6543 24.869 47.6543C25.0118 47.6543 25.1648 47.6543 25.3178 47.6441L25.7666 49.0211V49.2455ZM28.3268 45.6653C27.1436 46.2263 25.9502 46.4201 24.8792 46.4201C23.4171 46.4201 21.9574 46.0714 21.2378 45.7163C20.8263 45.2137 19.7351 43.5887 19.1264 41.5343C18.6776 39.9941 18.494 38.3927 18.494 36.9137C18.494 35.9651 18.5756 35.0573 18.698 34.2719C18.8306 33.4661 19.0652 32.4461 19.3508 31.3751C19.6364 30.2939 19.973 29.1617 20.2994 28.1417C20.534 28.3355 20.789 28.5089 21.0542 28.6619C21.299 28.8047 21.554 28.9271 21.809 29.0393L21.1766 36.7301C21.1664 36.9035 21.2174 37.0769 21.3398 37.1993C21.4622 37.3217 21.6254 37.4033 21.7988 37.4033H24.6854C25.022 37.4033 25.2974 37.1279 25.3076 36.7913L25.4606 29.7023C25.8992 29.6513 26.348 29.5493 26.807 29.4167C27.2048 29.3045 27.6026 29.1515 27.9902 28.9883C28.0004 29.0597 28.0106 29.1413 28.0208 29.2127C28.1228 29.9369 28.1636 30.7019 28.1636 31.4567C28.1636 32.8439 28.0208 34.2005 27.878 35.2001C27.8066 35.6999 27.7352 36.1079 27.6842 36.3935C27.6536 36.5363 27.6332 36.6485 27.623 36.7199C27.5822 36.9239 27.5822 37.0871 27.6434 37.2095C29.0918 40.3715 30.8768 43.9211 31.7132 45.5531H28.8062C28.5716 45.5531 28.4798 45.5939 28.3268 45.6653ZM30.8666 49.6637C30.8156 49.7249 30.7442 49.7555 30.6626 49.7555H29.0612L29.765 49.0313C29.867 48.9191 29.9282 48.7865 29.9384 48.6335L30.0404 46.8383H31.8662L30.8666 49.6637ZM28.1942 25.8569L28.6022 25.3061C28.8878 25.1531 29.6222 24.7655 30.5912 24.1739C30.938 23.9597 31.3154 23.7251 31.7132 23.4701L32.6516 24.1331L31.1726 41.7383C30.4382 40.2491 29.612 38.5355 28.8674 36.9239C28.9184 36.6485 29.0204 36.1079 29.1224 35.4041C29.2754 34.3637 29.4182 32.9561 29.4182 31.4873C29.4182 30.4163 29.3407 29.3139 29.1224 28.2743C28.9477 27.4423 28.5019 26.3745 28.1942 25.8569ZM35.1506 24.3677L32.825 22.7255C33.4064 22.3175 34.0082 21.8789 34.5998 21.3995L35.783 22.5929C35.8952 22.7051 36.038 22.7663 36.191 22.7765L39.0878 22.9091V24.3473H39.098L35.1506 24.3677ZM44.0348 23.4701C43.994 23.5721 43.9328 23.6741 43.8512 23.7557C43.7696 23.8475 43.6676 23.9291 43.5248 24.0005C43.3718 24.0719 43.2596 24.2045 43.2086 24.3677C43.1576 24.5309 43.1678 24.7043 43.2494 24.8573C43.5656 25.4489 43.739 26.1833 43.739 26.9075C43.739 27.3665 43.6676 27.8255 43.5248 28.2539C43.4636 28.4171 43.4024 28.5803 43.3208 28.7435C43.2596 28.2947 43.1678 27.8765 43.0556 27.4991C42.7598 26.5097 42.311 25.7753 41.9234 25.2755C41.546 24.7757 41.24 24.5207 41.2094 24.5003C41.0972 24.4085 40.9544 24.3575 40.8116 24.3575H40.3526V22.9805L44.1368 23.1539C44.1164 23.2457 44.0858 23.3579 44.0348 23.4701ZM9.48741 28.3865C9.02545 28.3865 8.65101 28.761 8.65101 29.2229C8.65101 29.6849 9.02545 30.0593 9.48741 30.0593C9.94937 30.0593 10.3238 29.6849 10.3238 29.2229C10.3238 28.761 9.94937 28.3865 9.48741 28.3865ZM47.0285 11.5259C46.9187 11.5259 46.8099 11.5476 46.7084 11.5896C46.607 11.6316 46.5148 11.6932 46.4371 11.7709C46.3594 11.8486 46.2978 11.9408 46.2558 12.0422C46.2137 12.1437 46.1921 12.2525 46.1921 12.3623C46.1921 12.8243 46.5666 13.1987 47.0285 13.1987C47.4905 13.1987 47.8649 12.8243 47.8649 12.3623C47.8649 12.2525 47.8433 12.1437 47.8012 12.0422C47.7592 11.9408 47.6976 11.8486 47.6199 11.7709C47.5423 11.6932 47.4501 11.6316 47.3486 11.5896C47.2471 11.5476 47.1384 11.5259 47.0285 11.5259ZM41.5154 33.0785C41.2936 33.0785 41.0808 33.1666 40.924 33.3235C40.7671 33.4804 40.679 33.6931 40.679 33.9149C40.679 34.3769 41.0535 34.7513 41.5154 34.7513C41.9774 34.7513 42.3518 34.3769 42.3518 33.9149C42.3518 33.6931 42.2637 33.4804 42.1068 33.3235C41.95 33.1666 41.7372 33.0785 41.5154 33.0785Z"></path>
</g>
</svg>
</div>
<h6>Historical Cultural Tours</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="#" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.8564 34.4958C45.8564 35.7619 46.8834 36.7871 48.1488 36.7871H50.2528C50.5289 36.7871 50.7528 36.5633 50.7528 36.2871V31.249C50.7528 30.9728 50.5289 30.749 50.2528 30.749H48.1488C46.883 30.749 45.8564 31.7757 45.8564 33.0413V34.4958ZM48.1488 35.7871C47.435 35.7871 46.8564 35.2088 46.8564 34.4958V33.0413C46.8564 32.328 47.4354 31.749 48.1488 31.749H49.7528V35.7871H48.1488Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.578816 36.5923C0.673478 36.7152 0.819779 36.7871 0.974858 36.7871H3.80037C5.06692 36.7871 6.09273 35.7617 6.09273 34.4958V33.0413C6.09273 31.7758 5.0673 30.749 3.80037 30.749H2.30235C2.07527 30.749 1.87671 30.902 1.81885 31.1216L0.49136 36.1597C0.451847 36.3097 0.484154 36.4695 0.578816 36.5923ZM1.62367 35.7871L2.68767 31.749H3.80037C4.51466 31.749 5.09273 32.3277 5.09273 33.0413V34.4958C5.09273 35.209 4.51504 35.7871 3.80037 35.7871H1.62367Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.26435 27.315C8.26436 27.3149 8.26435 27.315 8.26435 27.315L10.3466 19.4132C10.3639 19.3473 10.4026 19.2887 10.4565 19.247C10.5105 19.2054 10.5767 19.1828 10.6448 19.1827H18.1558C18.6207 19.1827 18.9975 19.5595 18.9975 20.0243V27.5296C18.9975 27.9943 18.6207 28.3711 18.1558 28.3711H9.07815C8.52629 28.3711 8.12377 27.8488 8.26435 27.315ZM7.29734 27.0602C6.98972 28.2281 7.87034 29.3711 9.07815 29.3711H18.1558C19.1729 29.3711 19.9975 28.5466 19.9975 27.5296V20.0243C19.9975 19.0073 19.173 18.1827 18.1558 18.1827H10.6442C10.3553 18.183 10.0741 18.2789 9.84539 18.4555C9.61672 18.6321 9.4529 18.8793 9.37949 19.1587L7.29734 27.0602Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M25.2215 28.3711C24.7567 28.3711 24.3799 27.9943 24.3799 27.5295V20.0243C24.3799 19.5596 24.7566 19.1828 25.2215 19.1828H32.4557C32.5237 19.1828 32.5898 19.2054 32.6436 19.2469C32.6974 19.2884 32.736 19.3466 32.7533 19.4123L33.3161 21.5481C33.3864 21.8151 33.6599 21.9746 33.9269 21.9042C34.194 21.8339 34.3534 21.5604 34.2831 21.2933L33.7204 19.1577C33.6469 18.8785 33.483 18.6314 33.2543 18.455C33.0257 18.2787 32.7451 18.1829 32.4563 18.1828H25.2215C24.2044 18.1828 23.3799 19.0073 23.3799 20.0243V27.5295C23.3799 28.5466 24.2044 29.3711 25.2215 29.3711H34.0221C35.2493 29.3711 36.1076 28.2048 35.7966 27.0381L35.792 27.0209L35.7916 27.0191L35.0628 24.2527C34.9924 23.9857 34.719 23.8263 34.4519 23.8966C34.1849 23.967 34.0254 24.2405 34.0958 24.5075L34.825 27.2756L34.8255 27.2774L34.8304 27.2957C34.9772 27.8466 34.5727 28.3711 34.0221 28.3711H25.2215Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0698 41.0047C11.0698 42.687 12.4336 44.0508 14.1159 44.0508C15.7983 44.0508 17.162 42.687 17.162 41.0047C17.162 39.3224 15.7983 37.9586 14.1159 37.9586C12.4336 37.9586 11.0698 39.3224 11.0698 41.0047ZM14.1159 43.0508C12.9859 43.0508 12.0698 42.1347 12.0698 41.0047C12.0698 39.8746 12.9859 38.9586 14.1159 38.9586C15.246 38.9586 16.162 39.8746 16.162 41.0047C16.162 42.1347 15.246 43.0508 14.1159 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M32.3147 41.0047C32.3147 42.687 33.6785 44.0508 35.3608 44.0508C37.0431 44.0508 38.4069 42.687 38.4069 41.0047C38.4069 39.3224 37.0431 37.9586 35.3608 37.9586C33.6785 37.9586 32.3147 39.3224 32.3147 41.0047ZM35.3608 43.0508C34.2308 43.0508 33.3147 42.1347 33.3147 41.0047C33.3147 39.8746 34.2308 38.9586 35.3608 38.9586C36.4908 38.9586 37.4069 39.8746 37.4069 41.0047C37.4069 42.1347 36.4908 43.0508 35.3608 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.52888 13.9199C6.44663 13.9199 5.56934 13.0427 5.56934 11.9605V8.40513C5.56934 7.32301 6.44664 6.44568 7.52888 6.44568H12.0994V13.9199H7.52888ZM4.56934 11.9605C4.56934 13.595 5.8944 14.9199 7.52888 14.9199H12.5994C12.8755 14.9199 13.0994 14.6961 13.0994 14.4199V5.94568C13.0994 5.66954 12.8755 5.44568 12.5994 5.44568H7.52888C5.89439 5.44568 4.56934 6.7707 4.56934 8.40513V11.9605Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 14.4199C12.0996 14.6961 12.3235 14.9199 12.5996 14.9199H17.2592C17.5354 14.9199 17.7592 14.6961 17.7592 14.4199V5.94568C17.7592 4.38279 16.4923 3.11582 14.9294 3.11582C13.3666 3.11582 12.0996 4.3828 12.0996 5.94568V14.4199ZM13.0996 13.9199V5.94568C13.0996 4.93506 13.9189 4.11582 14.9294 4.11582C15.94 4.11582 16.7592 4.93507 16.7592 5.94568V13.9199H13.0996Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.759 14.4199C16.759 14.6961 16.9829 14.9199 17.259 14.9199H25.1014C25.3775 14.9199 25.6014 14.6961 25.6014 14.4199V5.94568C25.6014 5.66954 25.3775 5.44568 25.1014 5.44568H17.259C16.9829 5.44568 16.759 5.66954 16.759 5.94568V14.4199ZM17.759 13.9199V6.44568H24.6014V13.9199H17.759Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.6016 14.4199C24.6016 14.6961 24.8254 14.9199 25.1016 14.9199H29.7612C30.0373 14.9199 30.2612 14.6961 30.2612 14.4199V5.94568C30.2612 4.38279 28.9942 3.11582 27.4313 3.11582C25.8684 3.11582 24.6016 4.38282 24.6016 5.94568V14.4199ZM25.6016 13.9199V5.94568C25.6016 4.93504 26.4207 4.11582 27.4313 4.11582C28.4419 4.11582 29.2612 4.93507 29.2612 5.94568V13.9199H25.6016Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M36.791 11.9609C36.791 12.2371 37.0149 12.4609 37.291 12.4609H40.6825C41.9404 12.4609 42.9601 11.4412 42.9601 10.1833C42.9601 8.92542 41.9404 7.90569 40.6825 7.90569H37.291C37.0149 7.90569 36.791 8.12955 36.791 8.40569V11.9609ZM37.791 11.4609V8.90569H40.6825C41.3881 8.90569 41.9601 9.47771 41.9601 10.1833C41.9601 10.8889 41.3881 11.4609 40.6825 11.4609H37.791Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M29.261 14.4199C29.261 14.6961 29.4848 14.9199 29.761 14.9199H34.8315C36.466 14.9199 37.791 13.595 37.791 11.9605V8.40513C37.791 6.7707 36.466 5.44568 34.8315 5.44568H29.761C29.4848 5.44568 29.261 5.66954 29.261 5.94568V14.4199ZM30.261 13.9199V6.44568H34.8315C35.9137 6.44568 36.791 7.32301 36.791 8.40513V11.9605C36.791 13.0427 35.9137 13.9199 34.8315 13.9199H30.261Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.23584 41.0046C7.23584 44.8044 10.3162 47.8848 14.116 47.8848C17.9158 47.8848 20.9962 44.8044 20.9962 41.0046C20.9962 37.2048 17.9158 34.1244 14.116 34.1244C10.3162 34.1244 7.23584 37.2048 7.23584 41.0046ZM14.116 46.8848C10.8685 46.8848 8.23584 44.2521 8.23584 41.0046C8.23584 37.7571 10.8685 35.1244 14.116 35.1244C17.3635 35.1244 19.9962 37.7571 19.9962 41.0046C19.9962 44.2521 17.3635 46.8848 14.116 46.8848Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34781 36.8327C1.34784 36.8326 1.34778 36.8328 1.34781 36.8327L1.45832 36.4151L2.78595 31.3765L3.76729 27.6525C3.83766 27.3855 3.67824 27.112 3.41121 27.0416C3.14418 26.9712 2.87067 27.1306 2.80031 27.3977L1.81896 31.1217L0.380936 36.5774C-0.286037 39.1098 1.62328 41.5898 4.24304 41.5898H7.73792C7.87144 41.5898 7.99942 41.5364 8.09334 41.4415C8.18725 41.3466 8.2393 41.2181 8.23789 41.0846C8.23769 41.0652 8.23702 41.0463 8.2366 41.0341L8.23647 41.0303C8.23598 41.0161 8.23583 41.0097 8.23583 41.0051C8.23583 37.7575 10.8685 35.1249 14.116 35.1249C17.3635 35.1249 19.9961 37.7575 19.9961 41.0051C19.9961 41.0248 19.996 41.0263 19.9956 41.0287C19.9953 41.0318 19.9947 41.0365 19.994 41.0828C19.9921 41.2166 20.044 41.3456 20.1379 41.4409C20.2319 41.5362 20.3601 41.5898 20.494 41.5898H28.9827C29.1166 41.5898 29.2448 41.5362 29.3388 41.4409C29.4327 41.3456 29.4846 41.2166 29.4827 41.0828C29.4821 41.0402 29.4815 41.0338 29.4811 41.0294C29.4808 41.0258 29.4806 41.0236 29.4806 41.0051C29.4806 37.7575 32.1132 35.1249 35.3607 35.1249C38.6082 35.1249 41.2409 37.7575 41.2409 41.0051C41.2409 41.0097 41.2407 41.0161 41.2402 41.0303L41.2401 41.0341C41.2397 41.0462 41.239 41.0652 41.2388 41.0846C41.2374 41.2181 41.2894 41.3466 41.3834 41.4415C41.4773 41.5364 41.6053 41.5898 41.7388 41.5898H46.7595C48.9651 41.5898 50.7529 39.8019 50.7529 37.5955V31.2491C50.7529 29.0436 48.9651 27.2556 46.7595 27.2556H41.6271C41.2359 27.2555 40.8556 27.126 40.5458 26.8872C40.2359 26.6483 40.0138 26.3136 39.9141 25.9353L37.8427 18.0728C37.1983 15.6254 34.9851 13.9204 32.4561 13.9204H10.6442C8.11412 13.9204 5.90196 15.6254 5.25754 18.0728L3.58772 24.4094C3.51735 24.6764 3.67677 24.9499 3.9438 25.0203C4.21083 25.0907 4.48434 24.9312 4.5547 24.6642L6.22455 18.3275C6.75333 16.3193 8.56839 14.9204 10.6442 14.9204H32.4561C34.5309 14.9204 36.3469 16.3193 36.8757 18.3274L38.9471 26.1901C39.1031 26.782 39.4505 27.3056 39.9353 27.6792C40.4201 28.0528 41.0149 28.2555 41.627 28.2556H46.7595C48.4127 28.2556 49.7529 29.5959 49.7529 31.2491V37.5955C49.7529 39.2498 48.4127 40.5898 46.7595 40.5898H42.2285C42.0139 36.9834 39.0211 34.1249 35.3607 34.1249C31.7003 34.1249 28.7077 36.9834 28.493 40.5898H20.9838C20.7691 36.9834 17.7764 34.1249 14.116 34.1249C10.4556 34.1249 7.46284 36.9834 7.24815 40.5898H4.24304C2.2795 40.5898 0.848019 38.7312 1.34781 36.8327Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M28.4805 41.0046C28.4805 44.8044 31.5608 47.8848 35.3606 47.8848C39.1604 47.8848 42.2408 44.8044 42.2408 41.0046C42.2408 37.2048 39.1604 34.1244 35.3606 34.1244C31.5608 34.1244 28.4805 37.2048 28.4805 41.0046ZM35.3606 46.8848C32.1131 46.8848 29.4805 44.2521 29.4805 41.0046C29.4805 37.7571 32.1131 35.1244 35.3606 35.1244C38.6082 35.1244 41.2408 37.7571 41.2408 41.0046C41.2408 44.2521 38.6082 46.8848 35.3606 46.8848Z"></path>
</svg>
</div>
<h6>Group Tour</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="#" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<g>
<path d="M41.0158 10.1468C41.4585 10.1469 41.8913 10.0157 42.2594 9.76983C42.6275 9.52394 42.9145 9.1744 43.084 8.7654C43.2534 8.35641 43.2978 7.90635 43.2115 7.47214C43.1251 7.03793 42.9119 6.63908 42.5989 6.32604C42.2859 6.01299 41.887 5.79982 41.4528 5.71348C41.0186 5.62713 40.5685 5.6715 40.1595 5.84097C39.7505 6.01043 39.401 6.29739 39.1551 6.66553C38.9092 7.03368 38.778 7.46647 38.7781 7.90918C38.7788 8.50242 39.0148 9.07116 39.4343 9.49065C39.8538 9.91013 40.4225 10.1461 41.0158 10.1468ZM41.0158 6.73353C41.2483 6.73342 41.4757 6.80228 41.6691 6.9314C41.8625 7.06052 42.0132 7.2441 42.1023 7.45891C42.1914 7.67373 42.2147 7.91013 42.1694 8.13822C42.1241 8.36631 42.0122 8.57584 41.8478 8.74031C41.6834 8.90478 41.4739 9.01681 41.2458 9.06221C41.0178 9.10762 40.7814 9.08437 40.5665 8.9954C40.3517 8.90643 40.168 8.75575 40.0388 8.5624C39.9096 8.36905 39.8406 8.14173 39.8406 7.90918C39.8405 7.59728 39.9642 7.29808 40.1845 7.07734C40.4049 6.85659 40.7038 6.73236 41.0158 6.73193V6.73353ZM4.91785 5.66943C4.47518 5.66943 4.04245 5.8007 3.67439 6.04663C3.30633 6.29256 3.01946 6.64212 2.85006 7.05108C2.68066 7.46005 2.63633 7.91007 2.72269 8.34423C2.80905 8.77839 3.02222 9.17719 3.33523 9.49021C3.64824 9.80322 4.04704 10.0164 4.4812 10.1027C4.91536 10.1891 5.36538 10.1448 5.77435 9.97538C6.18332 9.80598 6.53287 9.51911 6.7788 9.15104C7.02474 8.78298 7.156 8.35026 7.156 7.90759C7.1553 7.31421 6.91927 6.74533 6.49968 6.32575C6.0801 5.90617 5.51123 5.67014 4.91785 5.66943ZM4.91785 9.08272C4.6853 9.08272 4.45798 9.01375 4.26463 8.88454C4.07128 8.75534 3.9206 8.57169 3.83163 8.35684C3.74266 8.14199 3.71941 7.90557 3.76482 7.6775C3.81022 7.44943 3.92225 7.23995 4.08672 7.07556C4.25119 6.91116 4.46072 6.79923 4.68881 6.75393C4.9169 6.70862 5.1533 6.73198 5.36812 6.82105C5.58293 6.91011 5.76651 7.06088 5.89563 7.25429C6.02474 7.44769 6.09361 7.67504 6.0935 7.90759C6.0935 8.21949 5.96967 8.51863 5.74922 8.73928C5.52878 8.95993 5.22975 9.08403 4.91785 9.08431V9.08272ZM16.4587 7.61434H23.9786C24.1195 7.61434 24.2546 7.55837 24.3542 7.45874C24.4538 7.35911 24.5098 7.22399 24.5098 7.08309C24.5098 6.94219 24.4538 6.80707 24.3542 6.70744C24.2546 6.60781 24.1195 6.55184 23.9786 6.55184H16.4587C16.3178 6.55184 16.1827 6.60781 16.0831 6.70744C15.9834 6.80707 15.9275 6.94219 15.9275 7.08309C15.9275 7.22399 15.9834 7.35911 16.0831 7.45874C16.1827 7.55837 16.3178 7.61434 16.4587 7.61434Z"></path>
<path d="M49.0668 43.5042H47.7971C47.702 43.3406 47.5716 43.2004 47.4153 43.0938C47.2591 42.9871 47.0809 42.9168 46.894 42.8879V24.5067C47.0809 24.4757 47.2587 24.404 47.4148 24.2966C47.5709 24.1891 47.7014 24.0487 47.7971 23.8851H49.0668C49.5796 23.8851 50.0715 23.6814 50.4342 23.3187C50.7968 22.9561 51.0005 22.4642 51.0005 21.9514C51.0005 21.4385 50.7968 20.9466 50.4342 20.584C50.0715 20.2213 49.5796 20.0176 49.0668 20.0176H47.7971C47.6813 19.8251 47.5177 19.6658 47.3223 19.5551C47.1268 19.4443 46.9061 19.3859 46.6815 19.3854H33.8199V7.61292H36.1043C36.0454 8.59582 36.2831 9.57375 36.7866 10.42C37.29 11.2662 38.036 11.9418 38.9279 12.3591C39.8197 12.7764 40.8164 12.9162 41.7886 12.7605C42.7609 12.6047 43.664 12.1606 44.3809 11.4856C45.0978 10.8106 45.5954 9.93585 45.8094 8.97471C46.0233 8.01356 45.9437 7.01032 45.5808 6.09497C45.2178 5.17962 44.5884 4.39436 43.774 3.84093C42.9596 3.2875 41.9977 2.99142 41.013 2.99104H4.9199C3.93546 2.99066 2.97359 3.28596 2.15895 3.83868C1.34432 4.3914 0.714468 5.17606 0.351036 6.09096C-0.0123956 7.00587 -0.0926565 8.00884 0.120655 8.96989C0.333967 9.93095 0.831016 10.8058 1.54739 11.481C2.26376 12.1563 3.16643 12.6008 4.13841 12.7569C5.11038 12.9131 6.10686 12.7737 6.9987 12.3569C7.89054 11.9401 8.63663 11.265 9.14026 10.4191C9.6439 9.57325 9.88187 8.59562 9.82334 7.61292H12.1077V41.427C12.1077 41.5679 12.1637 41.703 12.2633 41.8026C12.3629 41.9023 12.4981 41.9582 12.639 41.9582H25.6121V42.8879C25.4251 42.9168 25.247 42.9871 25.0907 43.0938C24.9345 43.2004 24.804 43.3406 24.709 43.5042H23.4393C22.9264 43.5042 22.4346 43.7079 22.0719 44.0706C21.7093 44.4332 21.5055 44.9251 21.5055 45.4379C21.5055 45.9508 21.7093 46.4426 22.0719 46.8053C22.4346 47.1679 22.9264 47.3717 23.4393 47.3717H24.7037C24.819 47.5662 24.983 47.7273 25.1796 47.8391C25.3762 47.9509 25.5985 48.0095 25.8246 48.0092H46.6815C46.9076 48.0095 47.1299 47.9509 47.3265 47.8391C47.523 47.7273 47.6871 47.5662 47.8024 47.3717H49.0668C49.5796 47.3717 50.0715 47.1679 50.4342 46.8053C50.7968 46.4426 51.0005 45.9508 51.0005 45.4379C51.0005 44.9251 50.7968 44.4332 50.4342 44.0706C50.0715 43.7079 49.5796 43.5042 49.0668 43.5042ZM46.894 46.3092V46.8085C46.8754 46.8494 46.8456 46.8842 46.8079 46.9087C46.7702 46.9331 46.7264 46.9463 46.6815 46.9467H25.8246C25.7797 46.9463 25.7358 46.9331 25.6982 46.9087C25.6605 46.8842 25.6306 46.8494 25.6121 46.8085V46.3092H25.5908V44.5667H25.6121V44.0673C25.6306 44.0264 25.6605 43.9917 25.6982 43.9672C25.7358 43.9427 25.7797 43.9295 25.8246 43.9292H46.6815C46.7264 43.9295 46.7702 43.9427 46.8079 43.9672C46.8456 43.9917 46.8754 44.0264 46.894 44.0673V44.5667H46.9152V46.3092H46.894ZM23.4393 21.0801H24.5283V22.8226H23.4393C23.2082 22.8226 22.9866 22.7308 22.8232 22.5674C22.6598 22.404 22.568 22.1824 22.568 21.9514C22.568 21.7203 22.6598 21.4987 22.8232 21.3353C22.9866 21.1719 23.2082 21.0801 23.4393 21.0801ZM25.6121 21.0801V20.5807C25.6309 20.5405 25.661 20.5065 25.6987 20.4829C25.7364 20.4594 25.7801 20.4472 25.8246 20.4479H46.6815C46.7259 20.4472 46.7696 20.4594 46.8073 20.4829C46.845 20.5065 46.8751 20.5405 46.894 20.5807V21.0801H46.9152V22.8226H46.894V23.322C46.8763 23.3635 46.8467 23.3989 46.8088 23.4235C46.771 23.4481 46.7266 23.4608 46.6815 23.4601H25.8299C25.7839 23.4619 25.7384 23.4497 25.6995 23.425C25.6605 23.4003 25.6301 23.3644 25.6121 23.322V22.8226H25.5908V21.0801H25.6121ZM23.4924 23.8851H24.709C24.8046 24.0487 24.9352 24.1891 25.0912 24.2966C25.2473 24.404 25.4252 24.4757 25.6121 24.5067V35.7745H23.4924V23.8851ZM49.938 21.9514C49.9379 22.1824 49.8461 22.4039 49.6827 22.5673C49.5193 22.7306 49.2978 22.8225 49.0668 22.8226H47.9777V21.0801H49.0668C49.2976 21.0811 49.5186 21.1732 49.6818 21.3364C49.8449 21.4995 49.9371 21.7206 49.938 21.9514ZM9.21771 6.55042C9.13838 6.55024 9.06001 6.56783 8.98835 6.6019C8.91671 6.63597 8.8536 6.68565 8.80366 6.74731C8.75373 6.80896 8.71824 6.88102 8.69979 6.95818C8.68135 7.03535 8.68043 7.11566 8.69709 7.19323C8.84324 7.97182 8.74565 8.77653 8.41764 9.49762C8.08963 10.2187 7.54717 10.8211 6.86424 11.2225C6.18131 11.624 5.39116 11.805 4.60158 11.7408C3.81199 11.6767 3.06141 11.3706 2.4522 10.8642C1.843 10.3578 1.40483 9.67583 1.19747 8.91127C0.990112 8.14671 1.02365 7.33679 1.29351 6.59199C1.56338 5.84719 2.05643 5.20376 2.70541 4.74948C3.3544 4.29519 4.12772 4.05217 4.9199 4.05354H41.013C41.7746 4.05354 42.519 4.2793 43.1523 4.70228C43.7856 5.12526 44.2792 5.72648 44.5709 6.42995C44.8626 7.13342 44.9392 7.90757 44.791 8.65456C44.6428 9.40154 44.2765 10.0878 43.7384 10.6267C43.2002 11.1656 42.5145 11.5328 41.7677 11.682C41.0209 11.8312 40.2467 11.7557 39.5428 11.465C38.8389 11.1743 38.237 10.6815 37.8132 10.0488C37.3893 9.4161 37.1625 8.67196 37.1615 7.91042C37.1615 7.17464 37.3623 7.04767 37.1243 6.74698C37.0737 6.68597 37.0104 6.63675 36.9389 6.6028C36.8673 6.56884 36.7891 6.55096 36.7099 6.55042H28.2567C28.1158 6.55042 27.9806 6.60639 27.881 6.70602C27.7814 6.80565 27.7254 6.94077 27.7254 7.08167C27.7254 7.22256 27.7814 7.35769 27.881 7.45732C27.9806 7.55695 28.1158 7.61292 28.2567 7.61292H32.7574V19.3854H30.2924V12.3782C30.2924 12.2373 30.2364 12.1022 30.1368 12.0026C30.0372 11.903 29.9021 11.847 29.7612 11.847C29.6203 11.847 29.4851 11.903 29.3855 12.0026C29.2859 12.1022 29.2299 12.2373 29.2299 12.3782V19.3854H26.8924V12.3782C26.8924 12.2373 26.8364 12.1022 26.7368 12.0026C26.6372 11.903 26.5021 11.847 26.3612 11.847C26.2203 11.847 26.0851 11.903 25.9855 12.0026C25.8859 12.1022 25.8299 12.2373 25.8299 12.3782V19.3854C25.6043 19.3848 25.3825 19.4427 25.186 19.5536C24.9895 19.6644 24.8251 19.8243 24.709 20.0176H23.4924V12.3782C23.4924 12.2373 23.4364 12.1022 23.3368 12.0026C23.2372 11.903 23.1021 11.847 22.9612 11.847C22.8203 11.847 22.6851 11.903 22.5855 12.0026C22.4859 12.1022 22.4299 12.2373 22.4299 12.3782V20.3045C22.1479 20.477 21.9149 20.719 21.7533 21.0074C21.5916 21.2957 21.5068 21.6208 21.5068 21.9514C21.5068 22.2819 21.5916 22.607 21.7533 22.8953C21.9149 23.1837 22.1479 23.4257 22.4299 23.5982V35.7745H20.0961V12.3782C20.0961 12.2373 20.0402 12.1022 19.9405 12.0026C19.8409 11.903 19.7058 11.847 19.5649 11.847C19.424 11.847 19.2888 11.903 19.1892 12.0026C19.0896 12.1022 19.0336 12.2373 19.0336 12.3782V35.7745H16.6961V12.3782C16.6961 12.2373 16.6402 12.1022 16.5405 12.0026C16.4409 11.903 16.3058 11.847 16.1649 11.847C16.024 11.847 15.8888 11.903 15.7892 12.0026C15.6896 12.1022 15.6336 12.2373 15.6336 12.3782V35.7745H13.1702V7.08167C13.1702 6.94077 13.1142 6.80565 13.0146 6.70602C12.915 6.60639 12.7799 6.55042 12.639 6.55042H9.21771ZM13.1702 40.8957V36.837H25.6121V40.8957H13.1702ZM26.6746 24.5226H45.8315V42.8667H26.6746V24.5226ZM22.568 45.4379C22.569 45.2071 22.6611 44.9861 22.8243 44.8229C22.9875 44.6598 23.2085 44.5676 23.4393 44.5667H24.5283V46.3092H23.4393C23.2083 46.309 22.9867 46.2172 22.8234 46.0538C22.66 45.8905 22.5682 45.6689 22.568 45.4379ZM49.0668 46.3092H47.9777V44.5667H49.0668C49.2979 44.5667 49.5195 44.6585 49.6828 44.8219C49.8462 44.9852 49.938 45.2068 49.938 45.4379C49.938 45.669 49.8462 45.8906 49.6828 46.054C49.5195 46.2174 49.2979 46.3092 49.0668 46.3092Z"></path>
<path d="M29.2274 28.4645C29.4075 28.5846 28.4379 28.5495 42.9921 28.5495C43.133 28.5495 43.2681 28.4935 43.3677 28.3939C43.4673 28.2943 43.5233 28.1592 43.5233 28.0183C43.5233 27.8774 43.4673 27.7422 43.3677 27.6426C43.2681 27.543 43.133 27.487 42.9921 27.487C28.499 27.487 29.4138 27.4477 29.2274 27.572C29.1528 27.6202 29.0915 27.6862 29.0491 27.7642C29.0066 27.8422 28.9844 27.9295 28.9844 28.0183C28.9844 28.107 29.0066 28.1944 29.0491 28.2723C29.0915 28.3503 29.1528 28.4164 29.2274 28.4645ZM29.2274 32.1992C29.4075 32.3193 28.4379 32.2842 42.9921 32.2842C43.133 32.2842 43.2681 32.2282 43.3677 32.1286C43.4673 32.029 43.5233 31.8938 43.5233 31.7529C43.5233 31.6121 43.4673 31.4769 43.3677 31.3773C43.2681 31.2777 43.133 31.2217 42.9921 31.2217C28.499 31.2217 29.4138 31.1824 29.2274 31.3067C29.1528 31.3549 29.0915 31.4209 29.0491 31.4989C29.0066 31.5768 28.9844 31.6642 28.9844 31.7529C28.9844 31.8417 29.0066 31.9291 29.0491 32.007C29.0915 32.085 29.1528 32.151 29.2274 32.1992ZM29.2274 35.9286C29.4138 36.0529 28.4666 36.0136 42.9921 36.0136C43.133 36.0136 43.2681 35.9576 43.3677 35.858C43.4673 35.7583 43.5233 35.6232 43.5233 35.4823C43.5233 35.3414 43.4673 35.2063 43.3677 35.1067C43.2681 35.007 43.133 34.9511 42.9921 34.9511C28.499 34.9511 29.4138 34.9118 29.2274 35.0361C29.1528 35.0842 29.0915 35.1503 29.0491 35.2283C29.0066 35.3062 28.9844 35.3936 28.9844 35.4823C28.9844 35.5711 29.0066 35.6584 29.0491 35.7364C29.0915 35.8143 29.1528 35.8804 29.2274 35.9286ZM38.8696 38.6804H33.6314C33.4905 38.6804 33.3554 38.7364 33.2558 38.836C33.1562 38.9357 33.1002 39.0708 33.1002 39.2117C33.1002 39.3526 33.1562 39.4877 33.2558 39.5873C33.3554 39.687 33.4905 39.7429 33.6314 39.7429H38.8696C39.0105 39.7429 39.1456 39.687 39.2452 39.5873C39.3448 39.4877 39.4008 39.3526 39.4008 39.2117C39.4008 39.0708 39.3448 38.9357 39.2452 38.836C39.1456 38.7364 39.0105 38.6804 38.8696 38.6804Z"></path>
</g>
</svg>
</div>
<h6>Individual Tours</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="#" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<g>
<path d="M15.944 6.69113C16.1658 6.69113 16.3786 6.60301 16.5354 6.44615C16.6923 6.28929 16.7804 6.07655 16.7804 5.85473C16.7804 5.6329 16.6923 5.42016 16.5354 5.2633C16.3786 5.10645 16.1658 5.01833 15.944 5.01833C15.7222 5.01833 15.5094 5.10645 15.3526 5.2633C15.1957 5.42016 15.1076 5.6329 15.1076 5.85473C15.1076 6.07655 15.1957 6.28929 15.3526 6.44615C15.5094 6.60301 15.7222 6.69113 15.944 6.69113ZM44.2694 10.4396C44.4912 10.4396 44.704 10.3515 44.8608 10.1946C45.0177 10.0378 45.1058 9.82505 45.1058 9.60323C45.1058 9.14127 44.7314 8.76683 44.2694 8.76683C43.8075 8.76683 43.433 9.14127 43.433 9.60323C43.433 9.82505 43.5211 10.0378 43.678 10.1946C43.8348 10.3515 44.0476 10.4396 44.2694 10.4396ZM3.96921 28.3865C3.50725 28.3865 3.13281 28.761 3.13281 29.2229C3.13281 29.6849 3.50725 30.0593 3.96921 30.0593C4.43117 30.0593 4.80561 29.6849 4.80561 29.2229C4.80561 28.761 4.43117 28.3865 3.96921 28.3865ZM44.2694 15.9578C44.7314 15.9578 45.1058 15.5834 45.1058 15.1214C45.1058 14.6595 44.7314 14.285 44.2694 14.285C43.8075 14.285 43.433 14.6595 43.433 15.1214C43.433 15.5834 43.8075 15.9578 44.2694 15.9578ZM41.5103 13.1987C41.7321 13.1987 41.9449 13.1106 42.1017 12.9538C42.2586 12.7969 42.3467 12.5842 42.3467 12.3623C42.3467 11.9004 41.9723 11.5259 41.5103 11.5259C41.0484 11.5259 40.6739 11.9004 40.6739 12.3623C40.6739 12.5842 40.762 12.7969 40.9189 12.9538C41.0757 13.1106 41.2885 13.1987 41.5103 13.1987ZM6.72831 31.1456C6.26635 31.1456 5.89191 31.5201 5.89191 31.982C5.89191 32.444 6.26635 32.8184 6.72831 32.8184C7.19027 32.8184 7.56471 32.444 7.56471 31.982C7.56471 31.5201 7.19027 31.1456 6.72831 31.1456ZM6.72831 25.6274C6.50649 25.6274 6.29374 25.7155 6.13689 25.8724C5.98003 26.0293 5.89191 26.242 5.89191 26.4638C5.89191 26.9258 6.26635 27.3002 6.72831 27.3002C7.19027 27.3002 7.56471 26.9258 7.56471 26.4638C7.56471 26.354 7.54308 26.2452 7.50105 26.1437C7.45901 26.0423 7.3974 25.9501 7.31974 25.8724C7.24207 25.7947 7.14987 25.7331 7.04839 25.6911C6.94691 25.6491 6.83815 25.6274 6.72831 25.6274ZM44.7896 21.9197L36.5072 21.5423L33.5186 18.5435C33.0698 18.0947 32.5496 17.7173 31.9784 17.4215L28.8062 15.8201L29.0204 15.0959C29.4488 14.9123 29.8772 14.6573 30.2546 14.3105C30.4484 14.1371 30.632 13.9433 30.7952 13.7189V14.9735C30.7952 15.3203 31.0706 15.5957 31.4174 15.5957C31.7642 15.5957 32.0396 15.3203 32.0396 14.9735V10.8833L32.8964 9.65933C32.9678 9.55733 33.0086 9.42473 33.0086 9.30233C33.0086 9.21053 32.9882 8.70053 32.6108 7.91513C32.3762 7.43573 32.0192 6.85433 31.448 6.19133L31.9172 5.11013C31.958 5.01833 31.9784 4.91633 31.9682 4.81433L31.6214 0.550726C31.601 0.285526 31.4174 0.0713257 31.1624 -7.43177e-05C30.9074 -0.0714743 30.6422 0.0305257 30.4892 0.244726L28.0922 3.66173C28.031 3.75353 27.9902 3.86573 27.98 3.97793L27.8984 5.08973C26.9906 5.34473 26.3174 5.67113 25.8278 5.98733C25.0628 6.47693 24.7466 6.91553 24.7058 6.98693C24.6344 7.09913 24.5936 7.22153 24.6038 7.35413L24.6956 9.23093L24.3386 10.5569C24.2672 10.8323 24.2468 11.1077 24.2468 11.4545C24.2468 11.5565 24.2468 11.6585 24.257 11.7503L24.2571 11.7508C24.208 11.7386 24.1577 11.7324 24.1071 11.7322C23.9396 11.7322 23.779 11.7987 23.6605 11.9171C23.5421 12.0356 23.4756 12.1962 23.4756 12.3637C23.4756 12.5311 23.5421 12.6918 23.6605 12.8102C23.779 12.9286 23.9396 12.9951 24.1071 12.9951C24.2431 12.9952 24.3755 12.951 24.4843 12.8693C24.6206 13.2593 24.812 13.6279 25.0527 13.9637C25.0731 13.9943 25.0935 14.0147 25.1139 14.0453L24.9609 14.8103L21.3705 14.9327C20.7177 14.9531 20.0649 15.0755 19.4325 15.2999L15.2301 16.8605L11.3439 15.1367C11.2725 14.8715 11.1603 14.3717 11.1603 13.7291C11.1603 12.9029 11.3337 11.8523 11.9661 10.6793C12.0477 10.5365 12.0681 10.3631 12.0171 10.1999C11.9661 10.0367 11.8641 9.90413 11.7213 9.83273L11.2113 9.55733C11.0481 9.46553 10.8543 9.45533 10.6911 9.52673C10.1709 9.73073 9.70171 10.0265 9.29371 10.3835C8.68171 10.9139 8.22271 11.5769 7.89631 12.2909C7.66171 12.8315 7.49851 13.3925 7.43731 13.9637C7.21291 14.0147 7.00891 14.0963 6.82531 14.1881C6.60091 14.3105 6.40711 14.4635 6.26431 14.6267C6.03991 14.8613 5.88691 15.1061 5.78491 15.2897C5.68291 15.4733 5.64211 15.6059 5.63191 15.6365C5.54011 15.9221 5.66251 16.2281 5.91751 16.3811L9.34471 18.2783L9.11012 19.0433C9.00811 19.3697 9.19171 19.7165 9.51812 19.8185C9.84451 19.9205 10.1913 19.7369 10.2933 19.4105L10.4565 18.8903L14.8629 21.3281C15.0159 21.4097 15.1995 21.4301 15.3627 21.3791L16.3623 21.0425L14.4854 43.2581C14.465 43.5437 14.6384 43.8191 14.924 43.9007C14.9546 43.9109 16.658 44.4413 19.0958 44.7269C19.4528 45.3899 19.8812 46.0223 20.3708 46.6241C20.432 46.6955 20.5034 46.7567 20.585 46.7873C20.6054 46.7975 21.0746 47.0117 21.8294 47.2259C22.064 47.2871 22.319 47.3585 22.5944 47.4197L22.6964 47.6543L21.2276 48.7355C21.0644 48.8579 20.9318 49.0211 20.84 49.1945C20.7584 49.3679 20.7176 49.5617 20.7176 49.7351C20.7176 50.0513 20.84 50.3573 21.0542 50.6021C21.1664 50.7245 21.299 50.8265 21.4622 50.8979C21.6152 50.9693 21.7988 51.0101 21.9824 51.0101H25.2566C25.736 51.0101 26.1848 50.8163 26.501 50.4899C26.8172 50.1737 27.0212 49.7249 27.0212 49.2455V48.9293C27.0212 48.8681 27.011 48.7967 26.9906 48.7355L26.5928 47.5217C27.2864 47.3993 28.0106 47.1851 28.7348 46.8587H28.796L28.7144 48.3581L28.2962 48.7865C28.1738 48.9089 28.082 49.0619 28.0208 49.2149C27.9596 49.3679 27.929 49.5311 27.929 49.6943C27.929 50.0309 28.0616 50.3573 28.286 50.6021C28.3982 50.7245 28.541 50.8265 28.7042 50.8979C28.8674 50.9693 29.051 51.0101 29.2448 51.0101H30.6626C31.4378 51.0101 31.8623 50.5463 32.0192 50.1635L33.335 46.4405C33.4064 46.2467 33.3554 46.0427 33.2738 45.8795C33.1718 45.6755 32.7842 44.9309 32.2538 43.8803L33.8552 24.9695L34.61 25.4999C34.712 25.5713 34.8446 25.6121 34.9772 25.6121L39.1184 25.5917V26.0711C39.1184 26.4179 39.3938 26.6933 39.7406 26.6933C40.0874 26.6933 40.3628 26.4179 40.3628 26.0711V25.5917H40.5872C40.7504 25.7651 41.036 26.0813 41.3114 26.5403C41.5256 26.8973 41.7398 27.3461 41.903 27.8867C42.0662 28.4273 42.1682 29.0495 42.1682 29.7737C42.1682 30.1377 42.3466 30.4469 42.7904 30.4469H43.3616C43.5452 30.4469 43.7186 30.3653 43.841 30.2225C44.249 29.7431 44.5346 29.2025 44.7284 28.6313C44.9222 28.0601 45.0038 27.4787 45.0038 26.8871C45.0038 26.1527 44.861 25.4285 44.606 24.7655C44.6774 24.7043 44.7386 24.6431 44.7998 24.5819C45.0752 24.2759 45.2384 23.9393 45.3302 23.6333C45.422 23.3273 45.4424 23.0417 45.4424 22.8275C45.4424 22.4746 45.3383 21.9473 44.7896 21.9197ZM9.91581 13.7291C9.91581 14.6165 10.079 15.2693 10.181 15.5957L9.73221 17.0543L7.08021 15.5855C7.21281 15.3509 7.55961 15.1265 7.99821 15.1571C8.17161 15.1673 8.33481 15.1061 8.45721 14.9837C8.57961 14.8715 8.65101 14.7083 8.65101 14.5349C8.66121 13.7699 8.89581 12.9437 9.33441 12.2501C9.54861 11.9033 9.81381 11.5871 10.1198 11.3117C10.2116 11.2301 10.3136 11.1485 10.4258 11.0771C10.0382 12.0767 9.91581 12.9845 9.91581 13.7291ZM29.204 4.26353L30.5096 2.39693L30.7034 4.78373L30.4994 5.24273C30.377 5.13053 30.2546 5.01833 30.122 4.89593C29.9588 4.76333 29.816 4.74293 29.6324 4.76333C29.4692 4.78373 29.3162 4.81433 29.1632 4.83473L29.204 4.26353ZM26.5826 6.99713C27.164 6.65033 28.0922 6.24233 29.5304 6.02813C30.6626 7.04813 31.2134 7.89473 31.499 8.46593C31.6418 8.77193 31.7132 8.99633 31.7438 9.14933V9.15953L31.142 10.0265C30.989 9.91433 30.8156 9.77153 30.632 9.59813C30.1934 9.20033 29.7242 8.62913 29.459 7.95593C29.306 7.55813 28.8674 7.44593 28.5206 7.72133C28.235 7.95593 27.9009 8.14554 27.5516 8.28233C27.1052 8.45726 26.4841 8.6178 25.9808 8.66993L25.9196 7.57853C25.9808 7.42553 26.2154 7.22153 26.5826 6.99713ZM25.5524 10.8629L25.8176 9.90413C26.0522 9.88373 26.3582 9.84293 26.705 9.78173C27.0926 9.70013 27.521 9.58793 27.9596 9.41453C28.184 9.32273 28.4084 9.22073 28.6226 9.09833C28.7552 9.31253 28.8878 9.51653 29.0408 9.71033C29.4692 10.2611 29.9384 10.6691 30.2954 10.9547C30.377 11.0159 30.4586 11.0771 30.53 11.1281L30.2444 12.1787C29.9894 12.8621 29.5508 13.3517 29.0612 13.6883C28.8164 13.8515 28.5512 13.9739 28.2962 14.0555C28.0412 14.1371 27.7964 14.1779 27.5822 14.1779C27.2528 14.1779 26.8172 13.9841 26.6234 13.8413C26.3276 13.6271 26.042 13.2905 25.838 12.8927C25.634 12.4847 25.5014 12.0155 25.5014 11.4851C25.4912 11.2709 25.5116 11.0669 25.5524 10.8629ZM27.623 15.4019L27.47 15.9017C27.3578 16.1057 27.2252 16.2383 27.113 16.3097C26.9906 16.3913 26.8682 16.4219 26.756 16.4219C26.5928 16.4219 26.4296 16.3505 26.3072 16.2281C26.246 16.1669 26.1929 16.0861 26.1542 15.9833C26.0995 15.8377 26.0743 15.6319 26.1032 15.5039L26.195 15.0245C26.399 15.1469 26.6234 15.2387 26.8478 15.3101C27.1204 15.3846 27.4833 15.4019 27.623 15.4019ZM24.8792 16.0649C24.8996 16.1975 24.9404 16.3301 24.9914 16.4423C25.1342 16.8197 25.3892 17.1257 25.6952 17.3399C26.0012 17.5541 26.3684 17.6663 26.756 17.6663C27.113 17.6663 27.4802 17.5643 27.7964 17.3501C27.9596 17.2379 28.1126 17.1053 28.2554 16.9421L30.9482 18.2987C30.4586 18.7985 29.9078 19.1759 29.3264 19.4615C28.541 19.8389 27.7046 20.0225 26.8784 20.0225C25.634 20.0225 24.4202 19.6145 23.4308 18.8597C22.931 18.4823 22.5026 18.0029 22.1456 17.4521C21.9008 17.0747 21.6968 16.6463 21.5438 16.1873L24.8792 16.0649ZM25.8176 22.1951L24.8282 22.7459L24.1448 21.8891L25.1342 21.3383L25.8176 22.1951ZM20.2892 16.3301C20.483 16.9727 20.7584 17.5643 21.095 18.0947C21.7478 19.1147 22.625 19.9103 23.6348 20.4407C23.7266 20.4917 23.8184 20.5325 23.9102 20.5733L22.8902 21.1343C22.727 21.2261 22.6148 21.3791 22.5842 21.5525C22.5536 21.7361 22.5944 21.9197 22.7066 22.0625L24.1754 23.9087C24.3692 24.1433 24.6956 24.2147 24.9608 24.0617L27.062 22.8989C27.2252 22.8071 27.3374 22.6541 27.368 22.4705C27.4088 22.2869 27.3578 22.1033 27.2456 21.9605L26.654 21.2261H26.8886C27.8984 21.2261 28.9286 21.0017 29.8772 20.5427C30.6728 20.1653 31.4174 19.6145 32.0702 18.9005C32.2742 19.0433 32.4578 19.2065 32.6312 19.3799L33.7226 20.4713C32.3966 21.5219 31.0298 22.4195 29.969 23.0621C29.3672 23.4293 28.847 23.7251 28.49 23.9189C28.3064 24.0209 28.1738 24.0923 28.0718 24.1433C27.9392 24.2147 27.8066 24.2657 27.7046 24.3983L27.0314 25.3061C26.8172 25.4081 26.246 25.6529 25.3586 25.7957C25.3178 25.7447 25.2668 25.6937 25.226 25.6427C24.8588 25.2653 24.3284 25.0409 23.7674 25.0409C23.4213 25.0406 23.0808 25.1284 22.778 25.2959C22.3292 25.0409 22.013 24.7553 21.7988 24.5207C21.6764 24.3779 21.5846 24.2555 21.5336 24.1739V23.2355C21.5336 23.1029 21.4928 22.9805 21.4214 22.8785L21.4112 22.8683C21.3398 22.7663 20.7176 21.8891 19.9526 20.6753C19.4443 19.8842 18.5372 18.4229 17.9432 17.1563L20.2892 16.3301ZM25.8176 27.0299C26.4194 26.9177 26.8886 26.7545 27.215 26.6321C27.3272 26.8259 27.4292 27.0299 27.521 27.2543C27.5924 27.4175 27.6536 27.6011 27.7046 27.7847C27.317 27.9683 26.8886 28.1315 26.4602 28.2539C26.1236 28.3559 25.7972 28.4273 25.4912 28.4681V28.2743C25.7054 27.9989 25.8584 27.5501 25.8176 27.0299ZM23.7623 27.9989C23.5418 27.9989 23.3304 27.9113 23.1745 27.7554C23.0186 27.5995 22.931 27.3881 22.931 27.1676C22.931 26.9472 23.0186 26.7357 23.1745 26.5798C23.3304 26.4239 23.5418 26.3363 23.7623 26.3363C23.9828 26.3363 24.1942 26.4239 24.3501 26.5798C24.506 26.7357 24.5936 26.9472 24.5936 27.1676C24.5936 27.3881 24.506 27.5995 24.3501 27.7554C24.1942 27.9113 23.9828 27.9989 23.7623 27.9989ZM24.2366 29.1719L24.0836 36.1793H22.4924L23.0738 29.1107C23.288 29.1923 23.5226 29.2331 23.7674 29.2331C23.9204 29.2229 24.0836 29.2025 24.2366 29.1719ZM21.7478 27.6317C21.6254 27.5603 21.503 27.4889 21.3908 27.4073C21.2072 27.2747 21.044 27.1421 20.9114 27.0095C20.8502 26.9381 20.789 26.8769 20.738 26.8055L21.1154 25.6529C21.3296 25.8569 21.5846 26.0609 21.8906 26.2649C21.758 26.5301 21.6866 26.8361 21.6866 27.1523C21.6968 27.3257 21.7172 27.4787 21.7478 27.6317ZM15.2402 20.1143L10.844 17.6765L11.2316 16.4423L14.9648 18.0947C15.1076 18.1559 15.281 18.1661 15.434 18.1049L16.76 17.6153C17.0354 18.1763 17.3414 18.7475 17.6474 19.2983L15.2402 20.1143ZM16.4744 43.0235C16.1888 42.9623 15.9542 42.9011 15.7706 42.8501L17.6576 20.6141L18.29 20.4101C18.5246 20.7977 18.749 21.1547 18.9632 21.5015C19.5548 22.4399 20.0648 23.1641 20.279 23.4803V24.2861C20.1464 24.6635 19.6568 26.0915 19.1162 27.8357C18.8 28.8557 18.4634 29.9777 18.1778 31.0691C17.882 32.1605 17.6372 33.2009 17.4944 34.0781C17.3516 34.9349 17.27 35.9039 17.27 36.9239C17.27 38.4947 17.4638 40.2083 17.9534 41.8811C18.0962 42.3911 18.2798 42.8909 18.4736 43.3907C17.678 43.2785 17.0048 43.1357 16.4744 43.0235ZM25.7666 49.2455C25.7666 49.5069 25.6575 49.7657 25.2566 49.7657H21.9314L23.8286 48.3581C24.053 48.1949 24.1448 47.8889 24.0326 47.6237C24.2978 47.6441 24.5732 47.6543 24.869 47.6543C25.0118 47.6543 25.1648 47.6543 25.3178 47.6441L25.7666 49.0211V49.2455ZM28.3268 45.6653C27.1436 46.2263 25.9502 46.4201 24.8792 46.4201C23.4171 46.4201 21.9574 46.0714 21.2378 45.7163C20.8263 45.2137 19.7351 43.5887 19.1264 41.5343C18.6776 39.9941 18.494 38.3927 18.494 36.9137C18.494 35.9651 18.5756 35.0573 18.698 34.2719C18.8306 33.4661 19.0652 32.4461 19.3508 31.3751C19.6364 30.2939 19.973 29.1617 20.2994 28.1417C20.534 28.3355 20.789 28.5089 21.0542 28.6619C21.299 28.8047 21.554 28.9271 21.809 29.0393L21.1766 36.7301C21.1664 36.9035 21.2174 37.0769 21.3398 37.1993C21.4622 37.3217 21.6254 37.4033 21.7988 37.4033H24.6854C25.022 37.4033 25.2974 37.1279 25.3076 36.7913L25.4606 29.7023C25.8992 29.6513 26.348 29.5493 26.807 29.4167C27.2048 29.3045 27.6026 29.1515 27.9902 28.9883C28.0004 29.0597 28.0106 29.1413 28.0208 29.2127C28.1228 29.9369 28.1636 30.7019 28.1636 31.4567C28.1636 32.8439 28.0208 34.2005 27.878 35.2001C27.8066 35.6999 27.7352 36.1079 27.6842 36.3935C27.6536 36.5363 27.6332 36.6485 27.623 36.7199C27.5822 36.9239 27.5822 37.0871 27.6434 37.2095C29.0918 40.3715 30.8768 43.9211 31.7132 45.5531H28.8062C28.5716 45.5531 28.4798 45.5939 28.3268 45.6653ZM30.8666 49.6637C30.8156 49.7249 30.7442 49.7555 30.6626 49.7555H29.0612L29.765 49.0313C29.867 48.9191 29.9282 48.7865 29.9384 48.6335L30.0404 46.8383H31.8662L30.8666 49.6637ZM28.1942 25.8569L28.6022 25.3061C28.8878 25.1531 29.6222 24.7655 30.5912 24.1739C30.938 23.9597 31.3154 23.7251 31.7132 23.4701L32.6516 24.1331L31.1726 41.7383C30.4382 40.2491 29.612 38.5355 28.8674 36.9239C28.9184 36.6485 29.0204 36.1079 29.1224 35.4041C29.2754 34.3637 29.4182 32.9561 29.4182 31.4873C29.4182 30.4163 29.3407 29.3139 29.1224 28.2743C28.9477 27.4423 28.5019 26.3745 28.1942 25.8569ZM35.1506 24.3677L32.825 22.7255C33.4064 22.3175 34.0082 21.8789 34.5998 21.3995L35.783 22.5929C35.8952 22.7051 36.038 22.7663 36.191 22.7765L39.0878 22.9091V24.3473H39.098L35.1506 24.3677ZM44.0348 23.4701C43.994 23.5721 43.9328 23.6741 43.8512 23.7557C43.7696 23.8475 43.6676 23.9291 43.5248 24.0005C43.3718 24.0719 43.2596 24.2045 43.2086 24.3677C43.1576 24.5309 43.1678 24.7043 43.2494 24.8573C43.5656 25.4489 43.739 26.1833 43.739 26.9075C43.739 27.3665 43.6676 27.8255 43.5248 28.2539C43.4636 28.4171 43.4024 28.5803 43.3208 28.7435C43.2596 28.2947 43.1678 27.8765 43.0556 27.4991C42.7598 26.5097 42.311 25.7753 41.9234 25.2755C41.546 24.7757 41.24 24.5207 41.2094 24.5003C41.0972 24.4085 40.9544 24.3575 40.8116 24.3575H40.3526V22.9805L44.1368 23.1539C44.1164 23.2457 44.0858 23.3579 44.0348 23.4701ZM9.48741 28.3865C9.02545 28.3865 8.65101 28.761 8.65101 29.2229C8.65101 29.6849 9.02545 30.0593 9.48741 30.0593C9.94937 30.0593 10.3238 29.6849 10.3238 29.2229C10.3238 28.761 9.94937 28.3865 9.48741 28.3865ZM47.0285 11.5259C46.9187 11.5259 46.8099 11.5476 46.7084 11.5896C46.607 11.6316 46.5148 11.6932 46.4371 11.7709C46.3594 11.8486 46.2978 11.9408 46.2558 12.0422C46.2137 12.1437 46.1921 12.2525 46.1921 12.3623C46.1921 12.8243 46.5666 13.1987 47.0285 13.1987C47.4905 13.1987 47.8649 12.8243 47.8649 12.3623C47.8649 12.2525 47.8433 12.1437 47.8012 12.0422C47.7592 11.9408 47.6976 11.8486 47.6199 11.7709C47.5423 11.6932 47.4501 11.6316 47.3486 11.5896C47.2471 11.5476 47.1384 11.5259 47.0285 11.5259ZM41.5154 33.0785C41.2936 33.0785 41.0808 33.1666 40.924 33.3235C40.7671 33.4804 40.679 33.6931 40.679 33.9149C40.679 34.3769 41.0535 34.7513 41.5154 34.7513C41.9774 34.7513 42.3518 34.3769 42.3518 33.9149C42.3518 33.6931 42.2637 33.4804 42.1068 33.3235C41.95 33.1666 41.7372 33.0785 41.5154 33.0785Z"></path>
</g>
</svg>
</div>
<h6>Honey moon Tour</h6>
</a>
</div>
<div class="col-sm-4 col-6">
<a href="#" class="single-category">
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
<path fill-rule="evenodd" clip-rule="evenodd" d="M34.9652 42.4275C34.9653 42.529 34.9453 42.6295 34.9065 42.7233C34.8677 42.8171 34.8108 42.9023 34.739 42.974C34.6672 43.0458 34.582 43.1027 34.4883 43.1415C34.3945 43.1803 34.294 43.2003 34.1925 43.2002H16.249C16.1475 43.2003 16.047 43.1803 15.9532 43.1415C15.8594 43.1027 15.7742 43.0458 15.7025 42.974C15.6307 42.9023 15.5738 42.8171 15.535 42.7233C15.4962 42.6295 15.4762 42.529 15.4763 42.4275C15.4763 42.326 15.4962 42.2256 15.5351 42.1318C15.5739 42.038 15.6308 41.9529 15.7026 41.8811C15.7743 41.8093 15.8595 41.7524 15.9533 41.7136C16.047 41.6748 16.1475 41.6548 16.249 41.6548H34.1926C34.2941 41.6548 34.3946 41.6748 34.4883 41.7136C34.582 41.7525 34.6672 41.8094 34.739 41.8811C34.8107 41.9529 34.8676 42.0381 34.9064 42.1318C34.9452 42.2256 34.9652 42.3261 34.9652 42.4275ZM30.4793 46.7411C30.4794 46.9461 30.398 47.1428 30.2531 47.2878C30.1082 47.4328 29.9116 47.5143 29.7066 47.5144H20.7348C20.5326 47.5102 20.3401 47.4268 20.1986 47.2823C20.0571 47.1378 19.9778 46.9437 19.9778 46.7414C19.9778 46.5392 20.0571 46.345 20.1986 46.2005C20.3401 46.056 20.5326 45.9727 20.7348 45.9684H29.7066C29.9115 45.9685 30.108 46.05 30.2528 46.1949C30.3977 46.3398 30.4792 46.5362 30.4793 46.7411ZM41.172 32.0638C41.8345 30.912 43.5731 31.1331 43.9195 32.4253C44.2647 33.7141 42.8758 34.7798 41.7208 34.1135C41.0037 33.6998 40.7576 32.7803 41.172 32.0638ZM39.8336 31.2911C38.6544 33.3334 40.1555 35.8605 42.4661 35.8605C44.4622 35.8605 45.9342 33.9711 45.4126 32.0258C44.7104 29.4076 41.184 28.95 39.8336 31.2911ZM43.7354 38.1217L47.6998 31.2552L41.206 27.5061L37.2415 34.3726L43.7354 38.1217ZM36.0152 37.8986C35.9996 37.8888 35.9833 37.8796 35.9676 37.8705L37.0281 36.0335L42.4028 39.1379L40.8483 41.8311C39.4426 40.2962 37.8151 38.9668 36.0152 37.8986ZM21.4553 35.2823C22.0126 33.4035 22.5308 31.7949 24.5394 31.2715C24.9997 31.1519 25.483 31.1523 25.9431 31.2727C28.0444 31.8183 28.7897 33.8361 29.2008 35.3215C26.6406 34.835 24.0212 34.8195 21.4553 35.2823ZM8.07266 43.6955L4.16042 36.9197C4.03195 36.6965 4.11057 36.4054 4.33329 36.2756L11.3127 32.2465C11.5339 32.1186 11.8289 32.1976 11.9568 32.4181L14.9189 37.5482L14.8582 37.65C14.7133 37.7312 14.5693 37.8141 14.4263 37.8987C11.9333 39.378 9.76941 41.3593 8.07266 43.6955ZM3.72903 29.9396L5.85128 33.6157L8.25017 32.2295L6.12724 28.5548L4.00499 27.6478L3.72903 29.9396ZM20.4059 30.2783C19.6469 32.2328 18.6739 34.2135 17.374 36.4485C18.142 36.1433 18.9271 35.8829 19.7253 35.6687C20.4447 33.3353 20.9703 30.6045 24.1505 29.7765C24.866 29.5905 25.6173 29.5905 26.3328 29.7765C29.6827 30.648 30.4638 34.0561 30.9048 35.7202C31.6803 35.9357 32.4429 36.1952 33.1889 36.4975C31.237 32.8084 30.2876 31.4074 29.0195 27.2007H21.4625C21.1502 28.2398 20.7978 29.2665 20.4059 30.2783ZM22.4466 23.3589C22.7657 21.8651 23.0189 20.3636 23.2238 18.9545H27.2575C27.5848 21.1977 27.9943 23.4203 28.5849 25.6554H21.8984C22.0982 24.894 22.281 24.1284 22.4466 23.3589ZM23.6898 15.3217C24.0055 12.5733 24.2501 9.91272 24.5616 7.16368H25.9216C26.3091 10.6135 26.5988 13.9559 27.0453 17.4094H23.4365C23.5331 16.6672 23.6167 15.9644 23.6898 15.3217ZM44.9048 24.9897L48.0294 26.7941L48.0665 29.3281L47.9131 29.5931L42.5378 26.49L42.6912 26.2251L44.9048 24.9897ZM49.4514 20.7237L46.9083 22.1881L45.9666 23.8182L48.5137 25.2885L49.4547 23.659L49.4514 20.7237ZM51 23.8647L50.9955 19.3859C50.9951 18.7932 50.3513 18.4211 49.8378 18.7177L45.9569 20.9527C45.8391 21.0205 45.7412 21.1179 45.673 21.2354L44.3495 23.5299L41.7521 24.9793C41.4918 25.125 41.3606 25.4391 41.1942 25.7277C40.8464 25.5966 40.4456 25.7317 40.2538 26.0632L35.5167 34.2689C35.4252 34.4274 35.3931 34.6132 35.426 34.7932C35.4588 34.9732 35.5546 35.1357 35.6961 35.2517L34.9529 36.5374C33.7888 34.2093 32.4793 32.1955 31.517 29.7191C31.1953 28.8897 30.9014 28.0498 30.636 27.2008H31.3512C31.7774 27.2008 32.1239 26.8549 32.1239 26.4281C32.1239 26.0012 31.7774 25.6555 31.3512 25.6555H30.1831C29.5747 23.4283 29.1564 21.2145 28.8198 18.9547H29.3895C29.5944 18.9547 29.791 18.8732 29.9359 18.7283C30.0808 18.5835 30.1622 18.3869 30.1622 18.182C30.1622 17.9771 30.0808 17.7806 29.9359 17.6357C29.791 17.4908 29.5944 17.4094 29.3895 17.4094H28.6031C28.1116 13.6758 27.8136 10.039 27.3782 6.30227C27.3325 5.91337 27.0023 5.61838 26.6108 5.61838H25.9934V4.25762C25.9934 4.0527 25.912 3.85617 25.7671 3.71127C25.6222 3.56637 25.4257 3.48497 25.2207 3.48497C25.0158 3.48497 24.8193 3.56637 24.6744 3.71127C24.5295 3.85617 24.4481 4.0527 24.4481 4.25762V5.61826H23.8718C23.6823 5.61836 23.4994 5.68807 23.3579 5.81415C23.2164 5.94024 23.1262 6.1139 23.1043 6.30216C22.6752 10.0413 22.3669 13.6795 21.8787 17.4092H21.0519C20.847 17.4093 20.6505 17.4908 20.5056 17.6356C20.3607 17.7805 20.2793 17.9769 20.2792 18.1818C20.2794 18.3867 20.3608 18.5831 20.5057 18.728C20.6506 18.8729 20.847 18.9543 21.0519 18.9545H21.662C21.3293 21.2028 20.9037 23.439 20.3 25.6554H19.0901C18.8852 25.6555 18.6888 25.7369 18.5439 25.8817C18.399 26.0266 18.3175 26.2231 18.3174 26.428C18.3175 26.6329 18.399 26.8293 18.5438 26.9742C18.6887 27.1191 18.8852 27.2006 19.0901 27.2007H19.8458C18.8631 30.3316 17.6883 32.88 15.8272 36.0314L13.2951 31.6453C12.7398 30.6834 11.5031 30.3513 10.5399 30.908L9.58771 31.4568L7.33688 27.5595C7.25375 27.4145 7.12572 27.3004 6.97211 27.2345L3.90168 25.9235L1.44207 21.6641C1.22933 21.2941 0.756141 21.1674 0.386157 21.3808C0.298224 21.4316 0.221161 21.4992 0.159382 21.5797C0.0976038 21.6603 0.0523226 21.7522 0.0261314 21.8503C-5.9698e-05 21.9484 -0.00664613 22.0507 0.00674925 22.1513C0.0201446 22.2519 0.0532586 22.3489 0.104195 22.4368L2.56312 26.6962L2.16312 30.0107C2.1441 30.1766 2.17838 30.3444 2.261 30.4896L4.51239 34.3883L3.56092 34.9371C2.59745 35.4936 2.26507 36.7296 2.82152 37.6923L7.11496 45.1298C7.01255 45.3002 6.91003 45.4697 6.81079 45.6427C6.59997 46.0141 6.72855 46.4859 7.09989 46.6966C7.4692 46.9093 7.94113 46.7795 8.15377 46.4094C11.6452 40.2915 18.1841 36.4907 25.2202 36.4907C32.2564 36.4907 38.7954 40.2913 42.2867 46.4094C42.337 46.4976 42.4043 46.5749 42.4845 46.6371C42.5648 46.6992 42.6565 46.7449 42.7545 46.7716C42.8524 46.7983 42.9546 46.8054 43.0553 46.7925C43.156 46.7796 43.2532 46.7471 43.3413 46.6966C43.7119 46.4858 43.8405 46.014 43.6297 45.6427C43.1187 44.748 42.5405 43.8937 41.9081 43.0846L43.7471 39.8999C44.1041 40.0324 44.4965 39.8935 44.6862 39.5645L49.424 31.3582C49.6138 31.0305 49.5379 30.6186 49.2458 30.376C49.412 30.0871 49.6187 29.815 49.6145 29.5191L49.5715 26.5453L50.8962 24.2508C50.9644 24.1335 51.0002 24.0003 51 23.8647Z"></path>
</svg>
</div>
<h6>Luxury Tour</h6>
</a>
</div>
</div>
</div>
<div class="destination-wrapper">
<h4>Our Destinations</h4>
<div class="row">
<div class="col-lg-12">
<div class="swiper destination-sidebar-slider mb-35 swiper-initialized swiper-horizontal swiper-backface-hidden">
<div class="swiper-wrapper" id="swiper-wrapper-46ac35dc0a3252a6" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-494px, 0px, 0px); transition-delay: 0ms;">





<div class="swiper-slide" role="group" aria-label="5 / 5" data-swiper-slide-index="4" style="width: 232px; margin-right: 15px;">
<div class="destination-card2">
<a href="#" class="destination-card-img">
<img loading="lazy" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px"> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="#">Australia</a></h4>
</div>
</div>
</div><div class="swiper-slide swiper-slide-prev" style="width: 232px; margin-right: 15px;" role="group" aria-label="1 / 5" data-swiper-slide-index="0">
<div class="destination-card2">
<a href="#" class="destination-card-img">
<img fetchpriority="high" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px"> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="#">Sweden</a></h4>
</div>
</div>
</div><div class="swiper-slide swiper-slide-active" style="width: 232px; margin-right: 15px;" role="group" aria-label="2 / 5" data-swiper-slide-index="1">
<div class="destination-card2">
<a href="#" class="destination-card-img">
<img width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px"> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="#">Japan</a></h4>
</div>
</div>
</div><div class="swiper-slide swiper-slide-next" style="width: 232px; margin-right: 15px;" role="group" aria-label="3 / 5" data-swiper-slide-index="2">
<div class="destination-card2">
<a href="#" class="destination-card-img">
<img width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-09-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px"> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="#">India</a></h4>
</div>
</div>
</div><div class="swiper-slide" style="width: 232px; margin-right: 15px;" role="group" aria-label="4 / 5" data-swiper-slide-index="3">
<div class="destination-card2">
<a href="#" class="destination-card-img">
<img loading="lazy" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-08-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px"> </a>
<div class="batch">
<span>5 Tour</span>
</div>
<div class="destination-card2-content">
<span>Travel To</span>
<h4><a href="#">Brazil</a></h4>
</div>
</div>
</div></div>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
<div class="slide-and-view-btn-grp">
<div class="destination-sidebar-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-46ac35dc0a3252a6">
<svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
<path d="M53 6.5L1 6.5M1 6.5L7 12M1 6.5L7 0.999996"></path>
</svg>
</div>
<a href="/destination" class="secondary-btn2">View All</a>
<div class="destination-sidebar-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-46ac35dc0a3252a6">
<svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
<path d="M0 6.5H52M52 6.5L46 1M52 6.5L46 12"></path>
</svg>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sidebar-bottom">
<div class="hotline-area">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
<path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z"></path>
<path d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z"></path>
<path d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z"></path>
</svg> </div>
<div class="content">
<span>To More Inquiry</span>
<h6><a href="tel:250788465231">+250-788 465 231</a></h6>
</div>
</div>
<div class="hotline-area">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g>
<path d="M9.84497 19.8136V25.0313C9.84583 25.2087 9.90247 25.3812 10.0069 25.5246C10.1112 25.6679 10.2581 25.7748 10.4266 25.8301C10.5951 25.8853 10.7767 25.8861 10.9457 25.8324C11.1147 25.7787 11.2625 25.6732 11.3682 25.5308L14.4203 21.3773L9.84497 19.8136ZM26.6468 0.156459C26.5201 0.0661815 26.3708 0.0127263 26.2155 0.00200482C26.0603 -0.00871662 25.9051 0.0237135 25.7671 0.0957086L0.454599 13.3145C0.308959 13.3914 0.188959 13.5092 0.109326 13.6535C0.0296936 13.7977 -0.00610776 13.962 0.00631628 14.1262C0.0187403 14.2905 0.0788492 14.4475 0.179266 14.5781C0.279683 14.7087 0.416039 14.8071 0.571599 14.8613L7.60847 17.2666L22.5946 4.45283L10.9981 18.4242L22.7915 22.4551C22.9085 22.4944 23.0327 22.5077 23.1554 22.4939C23.2781 22.4802 23.3963 22.4399 23.5017 22.3757C23.6072 22.3115 23.6973 22.225 23.7659 22.1223C23.8344 22.0196 23.8797 21.9032 23.8985 21.7812L26.9922 0.968709C27.0151 0.81464 26.995 0.657239 26.934 0.513898C26.8731 0.370556 26.7737 0.246854 26.6468 0.156459Z"></path>
</g>
</svg> </div>
<div class="content">
<span>Email:</span>
<h6><a href="mailto:info@example.com">info@example.com</a></h6>
</div>
</div>
</div>
</div>





<div class="top-bar style-2"><div class="topbar-left two"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g>
<path d="M9.84497 19.8136V25.0313C9.84583 25.2087 9.90247 25.3812 10.0069 25.5246C10.1112 25.6679 10.2581 25.7748 10.4266 25.8301C10.5951 25.8853 10.7767 25.8861 10.9457 25.8324C11.1147 25.7787 11.2625 25.6732 11.3682 25.5308L14.4203 21.3773L9.84497 19.8136ZM26.6468 0.156459C26.5201 0.0661815 26.3708 0.0127263 26.2155 0.00200482C26.0603 -0.00871662 25.9051 0.0237135 25.7671 0.0957086L0.454599 13.3145C0.308959 13.3914 0.188959 13.5092 0.109326 13.6535C0.0296936 13.7977 -0.00610776 13.962 0.00631628 14.1262C0.0187403 14.2905 0.0788492 14.4475 0.179266 14.5781C0.279683 14.7087 0.416039 14.8071 0.571599 14.8613L7.60847 17.2666L22.5946 4.45283L10.9981 18.4242L22.7915 22.4551C22.9085 22.4944 23.0327 22.5077 23.1554 22.4939C23.2781 22.4802 23.3963 22.4399 23.5017 22.3757C23.6072 22.3115 23.6973 22.225 23.7659 22.1223C23.8344 22.0196 23.8797 21.9032 23.8985 21.7812L26.9922 0.968709C27.0151 0.81464 26.995 0.657239 26.934 0.513898C26.8731 0.370556 26.7737 0.246854 26.6468 0.156459Z"></path>
</g>
</svg></div><div class="content"><span>Email:</span><a href="/cdn-cgi/l/email-protection#335a5d555c73564b525e435f561d505c5e"><span class="__cf_email__" data-cfemail="bfd6d1d9d0ffdac7ded2cfd3da91dcd0d2">acrossafricajourney@gmail.com</span></a></div></div><p>50% Off Your Next Trip. Hurry Up For your new Tour! <a href="/tours.html">Book Your Tour</a></p><div class="topbar-right"><div class="social-icon-area"><ul><li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li><li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li><li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li><li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li></ul></div></div></div>
<header class="header-area style-1">
<div class="header-logo d-lg-none d-flex">
<a href="index.html" title="TripRex">
<img class="img-fluid" src="assets/images/logo-md.jpg" alt="TripRex"></a>
</div>
<div class="company-logo d-lg-flex d-none">
<a href="index.html" title="TripRex">
<img class="img-fluid" src="assets/images/logo-md.jpg" alt="TripRex"></a>
</div>
<div class="main-menu">
<div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
<div class="mobile-logo-wrap">
<a href="index.html" title="TripRex">
<img class="img-fluid" src="assets/images/logo-md.jpg" alt="TripRex"></a>
</div>
<div class="menu-close-btn">
<i class="bi bi-x"></i>
</div>
</div>

<div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu-list"><li id="menu-item-68" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-68"><a href="index.php" aria-current="page">Home</a></i></li>
<li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="about.php">About</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93"><a href="tours.php">Tours</a><!--<i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a href="https://triprex.egenslab.com/package-grid/">Package Grid</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2460" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2460"><a href="/tour">Package Sidebar</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a href="https://triprex.egenslab.com/package-category/">Package Category</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2447" class="menu-item menu-item-type-post_type menu-item-object-tours menu-item-2447"><a href="https://triprex.egenslab.com/tour/immersive-cultural-expirees-local-cuisine/">Package Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>-->
</li>
<li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-94"><a href="destination.php">Destination</a><!--<i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-2470" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2470"><a href="/destination">Destination Style 01</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="https://triprex.egenslab.com/destination-style-02/">Destination Style 02</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="https://triprex.egenslab.com/destination-style-03/">Destination Style 03</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76"><a href="https://triprex.egenslab.com/destination-style-04/">Destination Style 04</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a href="https://triprex.egenslab.com/destination-style-05/">Destination Style 05</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2448" class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-2448"><a href="https://triprex.egenslab.com/destination/brazil/">Destination Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>-->
</li>
<li id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-91"><a href="pages.html">Pages</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-2435" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2435"><a href="#">Hotel</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-2436" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2436"><a href="#">Hotel</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2437" class="menu-item menu-item-type-post_type menu-item-object-hotel menu-item-2437"><a href="#">Hotel Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>
</li>
<li id="menu-item-2438" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2438"><a href="#">Activities</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-2439" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2439"><a href="#">Activities</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2440" class="menu-item menu-item-type-post_type menu-item-object-activities menu-item-2440"><a href="#">Activities Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>
</li>
<li id="menu-item-112" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-112"><a href="/blog">Education Activities</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="intern.php">Internship Program</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="Trainning.php">Training Program</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a href="workshop.php">Workshop</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="bootcamp.php">BootCamp program</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>
</li>
<li id="menu-item-2441" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2441"><a href="#">Transport</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-2442" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2442"><a href="#">Transport</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2443" class="menu-item menu-item-type-post_type menu-item-object-transport menu-item-2443"><a href="#">Transport Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>
</li>
<li id="menu-item-2444" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2444"><a href="#">Visa</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-2445" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2445"><a href="#">Visa</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-2446" class="menu-item menu-item-type-post_type menu-item-object-visa menu-item-2446"><a href="#">Visa Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>
</li>
<li id="menu-item-112" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-112"><a href="#">Blog</a><!--<i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="https://triprex.egenslab.com/blog-grid/">Blog Grid</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="https://triprex.egenslab.com/blog-standard/">Blog Standard</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a href="https://triprex.egenslab.com/blog-standard-no-sidebar/">Blog Standard No Sidebar</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="https://triprex.egenslab.com/blog-grid-right-sidebar/">Blog Grid Right Sidebar</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172"><a href="https://triprex.egenslab.com/blog-grid-left-sidebar/">Blog Grid Left Sidebar</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-161"><a href="https://triprex.egenslab.com/into-the-wild-eco-adventure-tours-for-nature-enthusiasts/">Blog Details</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>-->
</li>
<li id="menu-item-1304" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1304"><a href="#">Tour Guide</a><!--<i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-1303" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1303"><a href="https://triprex.egenslab.com/tour-guide-style-01/">Tour Guide Style 01</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-299" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-299"><a href="https://triprex.egenslab.com/tour-guide-style-02/">Tour Guide Style 02</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-1313" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1313"><a href="https://triprex.egenslab.com/tour-guide-style-03/">Tour Guide Style 03</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-1312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1312"><a href="https://triprex.egenslab.com/tour-guide-style-04/">Tour Guide Style 04</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-1311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1311"><a href="https://triprex.egenslab.com/tour-guide-style-05/">Tour Guide Style 05</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>-->
</li>
<li id="menu-item-2433" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2433"><a href="#">Shop</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="#">Shop</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="cart.php">Cart</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="checkout.php">Checkout</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a href="Login/dashboard.php">My account</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul>
</li>
<li id="menu-item-2432" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2432"><a href="gallery.php">Gallery</a><i class="bi bi-plus dropdown-icon"></i></li>
<li id="menu-item-294" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-294"><a href="faqs.php">Faqs</a><i class="bi bi-plus dropdown-icon"></i></li>
<!--<li id="menu-item-296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296"><a href="/error">Error</a><i class="bi bi-plus dropdown-icon"></i></li>-->
</ul>
</li>
<li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a href="contact.php">Contact</a><i class="bi bi-plus dropdown-icon"></i></li>
</ul></div> <div class="topbar-right d-lg-none d-block">
<a href="Login/dashboard.php" class="modal-btn header-cart-btn" title="Login / Register">
<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z">
</path>
</svg>
REGISTER/ LOGIN </a>
</div>
<div class="hotline-area d-lg-none d-flex">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
<path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z"></path>
<path d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z"></path>
<path d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z"></path>
</svg> </div>
<div class="content">
<span>To More Inquiry</span>
<h6><a href="tel:250788465231">+250-788 465 231</a></h6>
</div>
</div>
</div>
<div class="nav-right d-flex jsutify-content-end align-items-center">
<ul class="icon-list">
<li class="d-lg-flex d-none">
<a href="Login/dashboard.php" title="Login / Register">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
<path d="M26 13.5C26 20.4036 20.4035 26 13.5 26C6.59632 26 1 20.4036 1 13.5C1 6.59632 6.59632 1 13.5 1C20.4035 1 26 6.59632 26 13.5Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
<path d="M18.5001 11.8333C18.5001 14.5947 16.2616 16.8333 13.5001 16.8333C10.7384 16.8333 8.5 14.5947 8.5 11.8333C8.5 9.07189 10.7384 6.8333 13.5001 6.8333C16.2616 6.8333 18.5001 9.07189 18.5001 11.8333Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
<path d="M6.04297 23.5324C6.44287 19.7667 9.62917 16.8333 13.5008 16.8333C17.3725 16.8333 20.5588 19.7669 20.9585 23.5325" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</a>
</li>
<li class="right-sidebar-button">
<svg class="sidebar-toggle-button" width="25" height="25" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
<path d="M1.29608 0.0658336C0.609639 0.31147 0.139209 0.899069 0.0432028 1.63598C-0.0144009 2.09353 -0.0144009 5.4939 0.0432028 5.95146C0.129608 6.59686 0.489632 7.11703 1.07047 7.42046L1.36329 7.57458H3.83545H6.30761L6.59563 7.42046C6.96525 7.2278 7.25807 6.93401 7.45008 6.56314L7.60369 6.27416V3.79372V1.31328L7.45008 1.02429C7.25807 0.653433 6.96525 0.359633 6.59563 0.166978L6.30761 0.0128531L3.90745 0.00322056C1.83372 -0.00641251 1.4785 0.00322056 1.29608 0.0658336ZM6.2356 0.802741C6.52842 0.956866 6.65803 1.08209 6.79244 1.34699L6.90765 1.57336V3.80817V6.03816L6.74924 6.29824C6.53322 6.66429 6.2068 6.85694 5.74117 6.90029C5.54916 6.91956 4.55549 6.92437 3.52343 6.91474L1.65131 6.90029L1.41129 6.77025C1.12807 6.62094 1.00807 6.49571 0.854455 6.20191L0.739248 5.98518V3.79372V1.60226L0.854455 1.38552C1.05607 0.995397 1.33929 0.778659 1.74731 0.706413C1.85292 0.687148 2.85618 0.677515 3.97946 0.677515L6.01959 0.687148L6.2356 0.802741Z"></path>
<path d="M11.6647 0.0658336C10.9783 0.31147 10.5079 0.899069 10.4119 1.63598C10.3879 1.82863 10.3687 2.80154 10.3687 3.79372C10.3687 4.7859 10.3879 5.75881 10.4119 5.95146C10.4983 6.59686 10.8583 7.11703 11.4391 7.42046L11.7319 7.57458H14.2041H16.6763L16.9643 7.42046C17.3339 7.2278 17.6267 6.93401 17.8187 6.56314L17.9723 6.27416V3.79372V1.31328L17.8187 1.02429C17.6267 0.653433 17.3339 0.359633 16.9643 0.166978L16.6763 0.0128531L14.2761 0.00322056C12.2024 -0.00641251 11.8471 0.00322056 11.6647 0.0658336ZM16.6043 0.802741C16.9019 0.956866 17.0267 1.08209 17.1611 1.35181L17.2811 1.583L17.2763 3.79854C17.2763 5.73472 17.2667 6.03816 17.1995 6.1682C17.0555 6.45237 16.9067 6.61131 16.6475 6.7558L16.3882 6.90029H14.2041H12.02L11.7799 6.77025C11.4967 6.62094 11.3767 6.49571 11.2231 6.20191L11.1079 5.98518V3.79372V1.60226L11.2231 1.38552C11.4247 0.995397 11.7079 0.778659 12.116 0.706413C12.2216 0.687148 13.2248 0.677515 14.3481 0.677515L16.3882 0.687148L16.6043 0.802741Z"></path>
<path d="M1.29608 10.4693C0.609639 10.7149 0.139209 11.3025 0.0432028 12.0394C-0.0144009 12.497 -0.0144009 15.8973 0.0432028 16.3549C0.129608 17.0003 0.489632 17.5205 1.07047 17.8239L1.36329 17.978H3.83545H6.30761L6.59563 17.8239C6.96525 17.6312 7.25807 17.3374 7.45008 16.9666L7.60369 16.6776V14.1972V11.7167L7.45008 11.4277C7.25807 11.0569 6.96525 10.7631 6.59563 10.5704L6.30761 10.4163L3.90745 10.4067C1.83372 10.397 1.4785 10.4067 1.29608 10.4693ZM6.2356 11.2062C6.52842 11.3603 6.65803 11.4855 6.79244 11.7504L6.90765 11.9768V14.2116V16.4416L6.74924 16.7017C6.53322 17.0677 6.2068 17.2604 5.74117 17.3037C5.54916 17.323 4.55549 17.3278 3.52343 17.3182L1.65131 17.3037L1.41129 17.1737C1.12807 17.0244 1.00807 16.8992 0.854455 16.6054L0.739248 16.3886V14.1972V12.0057L0.854455 11.789C1.05607 11.3988 1.33929 11.1821 1.74731 11.1099C1.85292 11.0906 2.85618 11.081 3.97946 11.081L6.01959 11.0906L6.2356 11.2062Z"></path>
<path d="M13.2441 10.4934C11.8856 10.8498 10.8583 11.8853 10.5079 13.2531C10.3735 13.7781 10.3735 14.6162 10.5079 15.1412C10.8343 16.4127 11.732 17.3808 12.9945 17.8239C13.3593 17.9491 13.4937 17.9732 14.0601 17.9925C14.617 18.0117 14.7754 17.9973 15.1162 17.9106C16.5179 17.5542 17.5452 16.5283 17.9052 15.1219C18.0348 14.6162 18.03 13.7685 17.9004 13.2531C17.55 11.8757 16.5179 10.8401 15.145 10.4885C14.6314 10.3585 13.7529 10.3585 13.2441 10.4934ZM15.2314 11.2784C15.7066 11.4518 16.0475 11.6782 16.4363 12.0828C17.0075 12.6848 17.2763 13.3639 17.2763 14.2068C17.2763 15.0882 17.0075 15.7288 16.3691 16.3645C15.721 17.0099 15.0826 17.2796 14.2186 17.2845C13.7001 17.2845 13.3113 17.193 12.8121 16.957C12.5336 16.8221 12.3608 16.692 12.0392 16.3694C11.396 15.724 11.132 15.0882 11.132 14.1972C11.132 13.3495 11.396 12.6896 11.972 12.0828C12.3608 11.6782 12.7017 11.4518 13.1817 11.2736C13.7913 11.0521 14.6218 11.0521 15.2314 11.2784Z"></path>
</svg>
</li>
</ul>
<div class="hotline-area d-xl-flex d-none">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
<path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z"></path>
<path d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z"></path>
<path d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z"></path>
</svg> </div>
<div class="content">
<span>To More Inquiry</span>
<h6><a href="tel:250788465231">+250-788 465 231</a></h6>
</div>
</div>
<div class="sidebar-button mobile-menu-btn">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
<path d="M0 4.46439C0 4.70119 0.0940685 4.92829 0.261511 5.09574C0.428955 5.26318 0.656057 5.35725 0.892857 5.35725H24.1071C24.3439 5.35725 24.571 5.26318 24.7385 5.09574C24.9059 4.92829 25 4.70119 25 4.46439C25 4.22759 24.9059 4.00049 24.7385 3.83305C24.571 3.6656 24.3439 3.57153 24.1071 3.57153H0.892857C0.656057 3.57153 0.428955 3.6656 0.261511 3.83305C0.0940685 4.00049 0 4.22759 0 4.46439ZM4.46429 11.6072H24.1071C24.3439 11.6072 24.571 11.7013 24.7385 11.8688C24.9059 12.0362 25 12.2633 25 12.5001C25 12.7369 24.9059 12.964 24.7385 13.1315C24.571 13.2989 24.3439 13.393 24.1071 13.393H4.46429C4.22749 13.393 4.00038 13.2989 3.83294 13.1315C3.6655 12.964 3.57143 12.7369 3.57143 12.5001C3.57143 12.2633 3.6655 12.0362 3.83294 11.8688C4.00038 11.7013 4.22749 11.6072 4.46429 11.6072ZM12.5 19.643H24.1071C24.3439 19.643 24.571 19.737 24.7385 19.9045C24.9059 20.0719 25 20.299 25 20.5358C25 20.7726 24.9059 20.9997 24.7385 21.1672C24.571 21.3346 24.3439 21.4287 24.1071 21.4287H12.5C12.2632 21.4287 12.0361 21.3346 11.8687 21.1672C11.7012 20.9997 11.6071 20.7726 11.6071 20.5358C11.6071 20.299 11.7012 20.0719 11.8687 19.9045C12.0361 19.737 12.2632 19.643 12.5 19.643Z" />
</svg>
</div>
</div>
</header>
<div data-elementor-type="wp-page" data-elementor-id="26" class="elementor elementor-26">
<div class="elementor-element elementor-element-8349556 e-con-full e-flex e-con e-parent" data-id="8349556" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-228d820 elementor-widget elementor-widget-triprex_hero_banner" data-id="228d820" data-element_type="widget" data-widget_type="triprex_hero_banner.default">
<div class="elementor-widget-container">
<div class="home1-banner-area">
<div class="container-fluid">
<div class="swiper home1-banner-slider">
<div class="swiper-wrapper">




<?php 
  $res = selectAll('carousel');
  while($row = mysqli_fetch_assoc($res))
  {
    $path = CAROUSEL_IMG_PATH;
    echo <<<data
	<div class="swiper-slide">
		<div class="home1-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%),url('$path$row[picture]')">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="home1-banner-content">
							<div class="eg-tag">
								<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M12.005 11.8928C13.9204 8.88722 13.6796 9.2622 13.7348 9.18383C14.4322 8.20023 14.8008 7.04257 14.8008 5.83594C14.8008 2.63602 12.2041 0 9 0C5.80634 0 3.19922 2.63081 3.19922 5.83594C3.19922 7.0418 3.57553 8.22976 4.29574 9.22662L5.99491 11.8929C4.17822 12.172 1.08984 13.004 1.08984 14.8359C1.08984 15.5037 1.52571 16.4554 3.60218 17.197C5.05209 17.7148 6.96906 18 9 18C12.7978 18 16.9102 16.9287 16.9102 14.8359C16.9102 13.0037 13.8254 12.1726 12.005 11.8928ZM5.17672 8.6465C5.17093 8.63744 5.16487 8.62856 5.15855 8.61985C4.55924 7.79537 4.25391 6.81824 4.25391 5.83594C4.25391 3.19859 6.37755 1.05469 9 1.05469C11.617 1.05469 13.7461 3.19954 13.7461 5.83594C13.7461 6.81982 13.4465 7.7638 12.8796 8.56656C12.8288 8.63357 13.0939 8.22182 9 14.6457L5.17672 8.6465ZM9 16.9453C4.85177 16.9453 2.14453 15.726 2.14453 14.8359C2.14453 14.2377 3.53559 13.2541 6.61809 12.8707L8.55527 15.9104C8.60291 15.9852 8.66863 16.0467 8.74636 16.0893C8.82408 16.132 8.91131 16.1543 8.99996 16.1543C9.08862 16.1543 9.17584 16.132 9.25357 16.0893C9.3313 16.0467 9.39702 15.9852 9.44466 15.9104L11.3818 12.8707C14.4644 13.2541 15.8555 14.2377 15.8555 14.8359C15.8555 15.7184 13.1726 16.9453 9 16.9453Z"></path><path d="M9 3.19922C7.54611 3.19922 6.36328 4.38205 6.36328 5.83594C6.36328 7.28982 7.54611 8.47266 9 8.47266C10.4539 8.47266 11.6367 7.28982 11.6367 5.83594C11.6367 4.38205 10.4539 3.19922 9 3.19922ZM9 7.41797C8.12767 7.41797 7.41797 6.70827 7.41797 5.83594C7.41797 4.96361 8.12767 4.25391 9 4.25391C9.87233 4.25391 10.582 4.96361 10.582 5.83594C10.582 6.70827 9.87233 7.41797 9 7.41797Z"></path></svg> $row[name] </span>
							</div>
							<h2>$row[quote]</h2>
							<p>Life is unpredictable, and we understand that plans might change. Enjoy flexible booking options, so you can reschedule or modify your trip with ease.</p>
							<div class="banner-content-bottom">
								<a href="tours.php" class="primary-btn1">Book A Trip </a>
								<a href="https://www.tripadvisor.com/">
									<div class="rating-area">
									<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="46" height="45" viewBox="0 0 46 45" fill="none"><path d="M22.7613 45C35.3321 45 45.5227 34.9264 45.5227 22.5C45.5227 10.0736 35.3321 0 22.7613 0C10.1906 0 0 10.0736 0 22.5C0 34.9264 10.1906 45 22.7613 45Z" fill="#34E0A1"></path><path d="M36.8197 18.1105L39.5664 15.1566H33.4755C30.4262 13.0976 26.7437 11.8984 22.7611 11.8984C18.7835 11.8984 15.1113 13.1002 12.0671 15.1566H5.96094L8.70756 18.1105C7.02401 19.6289 5.96859 21.8161 5.96859 24.2446C5.96859 28.8276 9.72744 32.5432 14.3636 32.5432C16.566 32.5432 18.5725 31.7035 20.0705 30.3309L22.7612 33.227L25.4518 30.3334C26.9498 31.7061 28.9538 32.5432 31.1561 32.5432C35.7923 32.5432 39.5562 28.8276 39.5562 24.2446C39.5587 21.8136 38.5034 19.6264 36.8197 18.1105ZM14.3661 29.8608C11.2278 29.8608 8.68472 27.3469 8.68472 24.2446C8.68472 21.1423 11.2279 18.6284 14.3661 18.6284C17.5044 18.6284 20.0475 21.1423 20.0475 24.2446C20.0475 27.3469 17.5044 29.8608 14.3661 29.8608ZM22.7637 24.0812C22.7637 20.3856 20.045 17.213 16.4566 15.858C18.397 15.056 20.5257 14.611 22.7611 14.611C24.9965 14.611 27.1277 15.056 29.0682 15.858C25.4823 17.2155 22.7637 20.3857 22.7637 24.0812ZM31.1587 29.8608C28.0204 29.8608 25.4772 27.3469 25.4772 24.2446C25.4772 21.1423 28.0204 18.6284 31.1587 18.6284C34.297 18.6284 36.8401 21.1423 36.8401 24.2446C36.8401 27.3469 34.2969 29.8608 31.1587 29.8608ZM31.1587 21.2982C29.5132 21.2982 28.1806 22.6155 28.1806 24.2421C28.1806 25.8686 29.5132 27.1859 31.1587 27.1859C32.8041 27.1859 34.1367 25.8686 34.1367 24.2421C34.1367 22.618 32.8041 21.2982 31.1587 21.2982ZM17.3442 24.2446C17.3442 25.8711 16.0115 27.1884 14.3661 27.1884C12.7207 27.1884 11.3881 25.8711 11.3881 24.2446C11.3881 22.618 12.7207 21.3007 14.3661 21.3007C16.0115 21.2982 17.3442 22.618 17.3442 24.2446Z" fill="black"></path></svg> </div>
									<div class="content">
									<div class="text-logo">
									<svg xmlns="http://www.w3.org/2000/svg" width="110" height="19" viewBox="0 0 110 19"><path d="M109.2 14.2516C108.759 14.2516 108.401 14.602 108.401 15.0334C108.401 15.4648 108.759 15.8151 109.2 15.8151C109.642 15.8151 110 15.4648 110 15.0334C110 14.602 109.642 14.2516 109.2 14.2516ZM109.2 15.6912C108.829 15.6912 108.528 15.3953 108.528 15.0334C108.528 14.6697 108.83 14.3756 109.2 14.3756C109.572 14.3756 109.875 14.6714 109.875 15.0334C109.875 15.3953 109.572 15.6912 109.2 15.6912ZM109.461 14.8995C109.461 14.7574 109.358 14.6731 109.205 14.6731H108.95V15.3854H109.075V15.1276H109.212L109.344 15.3854H109.479L109.334 15.1012C109.412 15.0664 109.461 14.997 109.461 14.8995ZM109.2 15.0168H109.077V14.7805H109.2C109.285 14.7805 109.336 14.8218 109.336 14.8979C109.336 14.9755 109.283 15.0168 109.2 15.0168ZM12.8619 6.33991V4.44917H9.89707V15.6978H12.8619V8.95295C12.8619 7.73156 13.6632 7.13158 14.9124 7.13158H16.5351V4.44921H15.149C14.0638 4.44917 13.1206 5.00283 12.8619 6.33991ZM19.3124 0C18.2981 0 17.5206 0.783414 17.5206 1.77506C17.5206 2.74357 18.2981 3.52698 19.3124 3.52698C20.3266 3.52698 21.1041 2.74357 21.1041 1.77506C21.1041 0.783373 20.3266 0 19.3124 0ZM17.8333 15.6978H20.7914V4.44917H17.8333V15.6978ZM34.8822 10.0735C34.8822 13.2847 32.2199 15.8879 28.9355 15.8879C27.6103 15.8879 26.4084 15.4631 25.4449 14.7458V19H22.4868V4.44917H25.4449V5.40113C26.4084 4.68386 27.6103 4.2591 28.9355 4.2591C32.2199 4.2591 34.8822 6.86219 34.8822 10.0735ZM31.9055 10.0735C31.9055 8.32983 30.4586 6.91505 28.6752 6.91505C26.8919 6.91505 25.445 8.32983 25.445 10.0735C25.445 11.8171 26.8919 13.2319 28.6752 13.2319C30.4586 13.2319 31.9055 11.8188 31.9055 10.0735ZM86.2961 9.08679L84.5702 8.62402C83.4344 8.33477 82.9932 7.99431 82.9932 7.4076C82.9932 6.83573 83.6152 6.43578 84.5043 6.43578C85.3512 6.43578 86.0155 6.97787 86.0155 7.67201V7.73645H88.7421V7.67201C88.7421 5.63084 87.0399 4.25906 84.5043 4.25906C81.9942 4.25906 80.1703 5.62918 80.1703 7.51827C80.1703 8.98757 81.1659 10.0949 82.9035 10.5544L84.5567 10.9957C85.8126 11.3361 86.2792 11.713 86.2792 12.389C86.2792 13.1013 85.6048 13.5806 84.6006 13.5806C83.5543 13.5806 82.8494 12.9327 82.8494 11.9708V11.9063H79.9556V11.9708C79.9556 14.278 81.8555 15.8911 84.5771 15.8911C87.1988 15.8911 89.1021 14.3161 89.1021 12.1476C89.1021 11.0833 88.6152 9.69171 86.2961 9.08679ZM45.376 4.44917H48.3341V15.6978H45.376V14.7457C44.4125 15.4631 43.2106 15.8878 41.8854 15.8878C38.6011 15.8878 35.9387 13.2847 35.9387 10.0734C35.9387 6.8621 38.6011 4.25906 41.8854 4.25906C43.2106 4.25906 44.4125 4.68381 45.376 5.40109V4.44917ZM45.376 10.0735C45.376 8.32818 43.929 6.91505 42.1457 6.91505C40.3623 6.91505 38.9154 8.32983 38.9154 10.0735C38.9154 11.8171 40.3623 13.2319 42.1457 13.2319C43.9307 13.2319 45.376 11.8188 45.376 10.0735ZM59.0155 0.446232H61.9736V15.6994H59.0155V14.7474C58.0519 15.4647 56.8501 15.8895 55.5249 15.8895C52.2405 15.8895 49.5782 13.2864 49.5782 10.0751C49.5782 6.86376 52.2404 4.26072 55.5249 4.26072C56.8501 4.26072 58.0519 4.68547 59.0155 5.40275V0.446232ZM59.0155 10.0735C59.0155 8.32983 57.5685 6.91505 55.7851 6.91505C54.0019 6.91505 52.5549 8.32983 52.5549 10.0735C52.5549 11.8171 54.0001 13.2319 55.7851 13.2319C57.5685 13.2319 59.0155 11.8188 59.0155 10.0735ZM75.7077 15.6978H78.6658V4.44917H75.7077V15.6978ZM77.1868 0C76.1725 0 75.395 0.783414 75.395 1.77506C75.395 2.74357 76.1725 3.52698 77.1868 3.52698C78.201 3.52698 78.9785 2.74357 78.9785 1.77506C78.9785 0.783373 78.201 0 77.1868 0ZM101.888 10.0735C101.888 13.2847 99.2256 15.8879 95.9412 15.8879C92.6569 15.8879 89.9946 13.2848 89.9946 10.0735C89.9946 6.86215 92.6569 4.2591 95.9412 4.2591C99.2256 4.2591 101.888 6.86219 101.888 10.0735ZM99.1716 10.0735C99.1716 8.32983 97.7246 6.91505 95.9413 6.91505C94.1579 6.91505 92.711 8.32983 92.711 10.0735C92.711 11.8171 94.1562 13.2319 95.9413 13.2319C97.7246 13.2319 99.1716 11.8188 99.1716 10.0735ZM11.3474 0.446232H0V3.02618H4.20056V15.6978H7.14854V3.02618H11.3491V0.446232H11.3474ZM68.7333 12.617L66.1014 4.44921H62.9945L66.9415 15.6978H70.5014L74.472 4.44921H71.3651L68.7333 12.617ZM106.222 6.33991V4.44917H103.257V15.6978H106.222V8.95295C106.222 7.73156 107.023 7.13158 108.272 7.13158H109.895V4.44921H108.509C107.424 4.44917 106.482 5.00283 106.222 6.33991Z"></path></svg> </div>
									<div class="rating">
									<ul>
									<li><i class="bi bi-circle-fill"></i></li>
									<li><i class="bi bi-circle-fill"></i></li>
									<li><i class="bi bi-circle-fill"></i></li>
									<li><i class="bi bi-circle-fill"></i></li>
									<li><i class="bi bi-circle-fill"></i></li>
									</ul>
									<span> 5.0 /5.0</span>
									</div>
									</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	data;

  }

?>


</div>
</div>
<div class="slider-btn-grp">
<div class="slider-btn home1-banner-prev">
<i class="bi bi-arrow-left"></i>
</div>
<div class="slider-btn home1-banner-next">
<i class="bi bi-arrow-right"></i>
</div>
</div>
</div>
</div>
<div class="home1-banner-bottom mb-120">
<div class="container-fluid">
<div class="filter-wrapper">
<div class="nav-buttons">
<ul class="nav nav-pills" id="pills-tab2" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="tour-tab" data-bs-toggle="pill" data-bs-target="#tour" type="button" role="tab" aria-controls="tour" aria-selected="true">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g>
<path d="M5.64903 6.91357C2.53954 6.91357 0.00976562 9.44335 0.00976562 12.5528C0.00976562 14.4834 0.928148 16.5592 2.73944 18.7225C2.9952 19.0275 3.26021 19.3246 3.53411 19.6134C2.36462 19.9327 1.66244 20.5062 1.66244 21.1756C1.66244 22.3605 3.71636 23 5.64885 23C7.58139 23 9.63527 22.3605 9.63527 21.1756C9.63527 20.5067 8.93332 19.9331 7.76458 19.6137C8.2315 19.1208 8.73391 18.5408 9.21062 17.894C9.23746 17.8583 9.25696 17.8178 9.26801 17.7746C9.27906 17.7314 9.28143 17.6864 9.27499 17.6423C9.26854 17.5981 9.25341 17.5557 9.23047 17.5175C9.20753 17.4792 9.17723 17.4459 9.14132 17.4195C9.10542 17.393 9.06463 17.3739 9.02131 17.3634C8.97799 17.3528 8.933 17.3509 8.88894 17.3578C8.84489 17.3647 8.80264 17.3803 8.76465 17.4037C8.72666 17.427 8.69367 17.4577 8.6676 17.4938C8.09206 18.2749 7.46909 18.9613 6.92549 19.5065C6.86236 19.5385 6.8109 19.5896 6.77841 19.6525C6.29146 20.131 5.88168 20.486 5.64917 20.68C5.41921 20.4879 5.01568 20.1377 4.53497 19.6654C4.50093 19.5907 4.44083 19.531 4.36593 19.4974C2.83827 17.9609 0.684268 15.3062 0.684268 12.5529C0.684268 9.81539 2.91145 7.58821 5.64899 7.58821C8.38653 7.58821 10.6137 9.81539 10.6137 12.5529C10.6137 13.7484 10.2064 15.0395 9.40297 16.3902C9.38033 16.4283 9.36541 16.4705 9.35906 16.5143C9.35271 16.5581 9.35506 16.6028 9.36597 16.6457C9.37687 16.6887 9.39613 16.729 9.42264 16.7645C9.44914 16.8 9.48238 16.8299 9.52045 16.8525C9.55851 16.8752 9.60067 16.8901 9.6445 16.8965C9.68834 16.9028 9.73299 16.9005 9.77592 16.8895C9.81885 16.8786 9.85921 16.8594 9.89469 16.8329C9.93018 16.8064 9.9601 16.7731 9.98274 16.7351C10.849 15.2785 11.2883 13.8715 11.2883 12.5529C11.2883 9.44335 8.75852 6.91357 5.64903 6.91357ZM5.44262 21.3815C5.50169 21.4273 5.57431 21.4521 5.64903 21.452C5.72376 21.4521 5.79638 21.4273 5.85545 21.3815C5.89682 21.3495 6.46041 20.91 7.21164 20.1755C8.34915 20.4074 8.96081 20.8541 8.96081 21.1756C8.96081 21.4157 8.63171 21.699 8.10195 21.9148C7.4522 22.1796 6.58103 22.3255 5.6489 22.3255C3.62714 22.3255 2.33699 21.6444 2.33699 21.1756C2.33699 20.8536 2.94882 20.4072 4.08697 20.1752C4.84237 20.9141 5.40677 21.3538 5.44262 21.3815Z" />
<path d="M5.64915 10.1009C5.1157 10.1009 4.60844 10.2693 4.18222 10.5879C4.1106 10.6415 4.06318 10.7213 4.05039 10.8098C4.0376 10.8984 4.06049 10.9883 4.11403 11.06C4.16761 11.1316 4.24744 11.179 4.33596 11.1918C4.42448 11.2046 4.51446 11.1817 4.58612 11.1282C4.89477 10.8974 5.26237 10.7754 5.6491 10.7754C6.62916 10.7754 7.42648 11.5727 7.42648 12.5528C7.42648 13.5329 6.62916 14.3302 5.6491 14.3302C4.66904 14.3302 3.87172 13.5329 3.87172 12.5528C3.87172 12.3856 3.89486 12.2202 3.94045 12.0615C3.96513 11.9755 3.95465 11.8833 3.91132 11.805C3.86799 11.7268 3.79534 11.6689 3.70938 11.6442C3.6234 11.6196 3.53117 11.6301 3.45294 11.6735C3.37471 11.7168 3.31687 11.7894 3.29214 11.8754C3.22906 12.0957 3.19713 12.3237 3.19727 12.5528C3.19727 13.9048 4.29718 15.0048 5.64919 15.0048C7.00116 15.0048 8.10112 13.9048 8.10112 12.5528C8.10107 11.2008 7.00112 10.1009 5.64915 10.1009ZM20.3471 9.7984C20.5276 9.60501 20.7029 9.40685 20.8728 9.20413C22.2769 7.52706 22.9889 5.91486 22.9889 4.41218C22.9889 1.97935 21.0096 0 18.5767 0C16.7995 0 15.2037 1.05773 14.5114 2.69468C14.4942 2.73547 14.4851 2.77926 14.4848 2.82354C14.4844 2.86783 14.4928 2.91175 14.5095 2.95279C14.5261 2.99383 14.5507 3.0312 14.5818 3.06275C14.6128 3.0943 14.6498 3.11942 14.6906 3.13667C14.773 3.1715 14.8658 3.17218 14.9487 3.13858C15.0316 3.10498 15.0977 3.03984 15.1326 2.95748C15.7192 1.57065 17.0711 0.674502 18.5767 0.674502C20.6377 0.674502 22.3144 2.35126 22.3144 4.41223C22.3144 7.19931 19.3883 9.86952 18.5766 10.5564C18.3977 10.4053 18.1161 10.1578 17.786 9.83421C17.7533 9.76971 17.7007 9.71745 17.636 9.68516C16.4715 8.51265 14.839 6.49714 14.839 4.41223C14.839 4.32278 14.8035 4.23699 14.7403 4.17374C14.677 4.11049 14.5912 4.07495 14.5018 4.07495C14.4123 4.07495 14.3265 4.11049 14.2633 4.17374C14.2 4.23699 14.1645 4.32278 14.1645 4.41223C14.1645 5.91486 14.8765 7.52706 16.2807 9.20418C16.4505 9.40677 16.6257 9.60484 16.806 9.79818C15.9366 10.0594 15.4347 10.504 15.4347 11.0395C15.4347 11.491 15.801 11.889 16.4662 12.16C17.0354 12.3919 17.7849 12.5197 18.5767 12.5197C19.3684 12.5197 20.1179 12.3919 20.6871 12.16C21.3522 11.8889 21.7185 11.491 21.7185 11.0394C21.7185 10.505 21.2162 10.0599 20.3471 9.7984ZM18.5766 11.8451C16.9802 11.8451 16.1093 11.3129 16.1093 11.0394C16.1093 10.8612 16.5054 10.5352 17.3514 10.3553C17.9206 10.9091 18.3431 11.2382 18.3703 11.2594C18.4294 11.3052 18.502 11.33 18.5768 11.3299C18.6515 11.33 18.7241 11.3052 18.7832 11.2594C18.8104 11.2383 19.2328 10.9092 19.8021 10.3554C20.1789 10.4358 20.5054 10.5535 20.7339 10.6926C20.9281 10.8109 21.0441 10.9405 21.0441 11.0394C21.044 11.3129 20.1731 11.8451 18.5766 11.8451Z" />
<path d="M18.576 2.44968C17.4939 2.44968 16.6135 3.33006 16.6135 4.41227C16.6135 5.49439 17.4939 6.37477 18.576 6.37477C19.6582 6.37477 20.5386 5.49444 20.5386 4.41227C20.5386 3.3301 19.6582 2.44968 18.576 2.44968ZM18.5761 5.70022C17.8658 5.70022 17.288 5.12244 17.288 4.41222C17.288 3.70201 17.8658 3.12418 18.5761 3.12418C19.2863 3.12418 19.8641 3.70196 19.8641 4.41222C19.8641 5.12244 19.2863 5.70022 18.5761 5.70022ZM14.2011 10.7021H14.0471C13.935 10.7021 13.8223 10.7096 13.7121 10.7242C13.6241 10.7369 13.5446 10.7837 13.491 10.8545C13.4374 10.9254 13.4138 11.0145 13.4256 11.1026C13.4373 11.1907 13.4833 11.2706 13.5536 11.325C13.6239 11.3794 13.7128 11.4038 13.8011 11.3929C13.8826 11.3822 13.9648 11.3768 14.0471 11.3768H14.2011V11.3767C14.3874 11.3767 14.5384 11.2258 14.5384 11.0395C14.5384 10.8531 14.3874 10.7021 14.2011 10.7021ZM13.0861 20.8211H13.0845L12.6391 20.8231C12.5496 20.8233 12.4639 20.859 12.4008 20.9224C12.3377 20.9858 12.3023 21.0717 12.3025 21.1611C12.3027 21.2506 12.3384 21.3363 12.4018 21.3994C12.4652 21.4625 12.5511 21.4979 12.6405 21.4977H12.6421L13.0876 21.4957C13.177 21.4952 13.2626 21.4593 13.3256 21.3958C13.3885 21.3322 13.4237 21.2463 13.4233 21.1569C13.4229 21.0677 13.3872 20.9823 13.324 20.9193C13.2608 20.8564 13.1753 20.8211 13.0861 20.8211ZM14.6013 15.0708H14.1558C14.0664 15.0708 13.9806 15.1063 13.9174 15.1696C13.8541 15.2328 13.8186 15.3186 13.8186 15.4081C13.8186 15.4975 13.8541 15.5833 13.9174 15.6466C13.9806 15.7098 14.0664 15.7453 14.1558 15.7453H14.6013C14.6456 15.7453 14.6894 15.7366 14.7304 15.7197C14.7713 15.7027 14.8085 15.6779 14.8398 15.6466C14.8711 15.6152 14.896 15.5781 14.9129 15.5371C14.9299 15.4962 14.9386 15.4524 14.9386 15.4081C14.9386 15.3638 14.9299 15.3199 14.9129 15.279C14.896 15.2381 14.8711 15.2009 14.8398 15.1696C14.8085 15.1382 14.7713 15.1134 14.7304 15.0965C14.6894 15.0795 14.6456 15.0708 14.6013 15.0708ZM12.8142 11.3893C12.7535 11.3236 12.6693 11.2846 12.5799 11.281C12.4905 11.2774 12.4034 11.3095 12.3376 11.3701C12.2116 11.4863 12.0977 11.615 11.9977 11.7543C11.9477 11.827 11.9282 11.9164 11.9434 12.0034C11.9586 12.0903 12.0072 12.1679 12.0789 12.2194C12.1506 12.2709 12.2396 12.2922 12.3269 12.2788C12.4141 12.2654 12.4927 12.2184 12.5456 12.1478C12.619 12.0456 12.7026 11.9512 12.795 11.8659C12.8607 11.8052 12.8997 11.721 12.9033 11.6316C12.9069 11.5422 12.8749 11.4551 12.8142 11.3893ZM14.8679 20.8129H14.8664L14.421 20.815C14.3325 20.8166 14.2482 20.8529 14.1862 20.9162C14.1243 20.9794 14.0897 21.0644 14.0899 21.153C14.09 21.2415 14.125 21.3264 14.1873 21.3893C14.2495 21.4523 14.3339 21.4883 14.4225 21.4895H14.424L14.8694 21.4875C14.9579 21.4858 15.0423 21.4495 15.1042 21.3863C15.1661 21.323 15.2007 21.238 15.2006 21.1495C15.2004 21.061 15.1654 20.9761 15.1032 20.9131C15.0409 20.8501 14.9565 20.8142 14.8679 20.8129ZM11.3043 20.8291H11.3027L10.8572 20.8312C10.7678 20.8316 10.6822 20.8675 10.6192 20.9311C10.5563 20.9946 10.5211 21.0805 10.5215 21.17C10.5219 21.2591 10.5576 21.3445 10.6208 21.4075C10.684 21.4704 10.7695 21.5057 10.8587 21.5057H10.8603L11.3057 21.5037C11.3952 21.5033 11.4808 21.4673 11.5437 21.4038C11.6067 21.3403 11.6419 21.2543 11.6415 21.1649C11.6411 21.0757 11.6054 20.9903 11.5422 20.9274C11.479 20.8645 11.3934 20.8291 11.3043 20.8291ZM13.0633 14.7873C12.957 14.7202 12.8578 14.6425 12.7671 14.5554C12.7027 14.4934 12.6162 14.4595 12.5268 14.4613C12.4373 14.463 12.3523 14.5002 12.2902 14.5646C12.2595 14.5965 12.2354 14.6342 12.2193 14.6754C12.2031 14.7167 12.1952 14.7607 12.1961 14.805C12.197 14.8492 12.2065 14.8929 12.2243 14.9335C12.242 14.9741 12.2676 15.0108 12.2995 15.0415C12.4231 15.1603 12.5584 15.2663 12.7034 15.3578C12.7408 15.3815 12.7826 15.3975 12.8263 15.405C12.8699 15.4126 12.9146 15.4114 12.9579 15.4016C13.0011 15.3918 13.0419 15.3736 13.0781 15.348C13.1143 15.3224 13.145 15.29 13.1686 15.2525C13.1923 15.215 13.2083 15.1732 13.2158 15.1296C13.2233 15.0859 13.2221 15.0412 13.2123 14.9981C13.2025 14.9549 13.1843 14.914 13.1588 14.8778C13.1332 14.8417 13.1008 14.8109 13.0633 14.7873ZM12.2342 13.5793C12.2115 13.4622 12.2001 13.3431 12.2001 13.2238L12.2002 13.2051C12.2007 13.1608 12.1925 13.1168 12.176 13.0757C12.1595 13.0346 12.1351 12.9971 12.1042 12.9654C12.0732 12.9338 12.0363 12.9085 11.9956 12.8911C11.9549 12.8736 11.9111 12.8644 11.8669 12.8639L11.8629 12.8639C11.7741 12.8639 11.6889 12.8989 11.6258 12.9613C11.5627 13.0237 11.5267 13.1085 11.5257 13.1972L11.5255 13.2238C11.5255 13.3867 11.5412 13.5497 11.5721 13.7084C11.5806 13.7518 11.5975 13.7932 11.622 13.8301C11.6465 13.8671 11.678 13.8988 11.7147 13.9235C11.7514 13.9483 11.7927 13.9656 11.8361 13.9744C11.8795 13.9832 11.9242 13.9834 11.9677 13.9749C12.0112 13.9664 12.0526 13.9494 12.0895 13.925C12.1264 13.9005 12.1581 13.869 12.1829 13.8323C12.2076 13.7956 12.2249 13.7543 12.2337 13.7109C12.2425 13.6675 12.2427 13.6228 12.2342 13.5793ZM16.3832 15.0708H15.9378C15.8483 15.0708 15.7625 15.1063 15.6993 15.1696C15.636 15.2328 15.6005 15.3186 15.6005 15.4081C15.6005 15.4975 15.636 15.5833 15.6993 15.6466C15.7625 15.7098 15.8483 15.7453 15.9378 15.7453H16.3832C16.4727 15.7453 16.5584 15.7098 16.6217 15.6466C16.6849 15.5833 16.7205 15.4975 16.7205 15.4081C16.7205 15.3186 16.6849 15.2328 16.6217 15.1696C16.5584 15.1063 16.4727 15.0708 16.3832 15.0708ZM21.7981 15.7575C21.6679 15.6547 21.5298 15.5621 21.3852 15.4807C21.2231 15.3892 21.0173 15.4467 20.9258 15.609C20.9041 15.6475 20.8902 15.69 20.8849 15.734C20.8795 15.778 20.8829 15.8226 20.8948 15.8652C20.9068 15.9079 20.927 15.9478 20.9543 15.9826C20.9816 16.0175 21.0156 16.0466 21.0541 16.0683C21.1682 16.1327 21.2772 16.2058 21.38 16.2869C21.4395 16.334 21.513 16.3596 21.5888 16.3595C21.659 16.3596 21.7273 16.3378 21.7845 16.2972C21.8417 16.2566 21.8848 16.1992 21.9078 16.133C21.9308 16.0668 21.9326 15.995 21.913 15.9277C21.8933 15.8604 21.8532 15.8009 21.7981 15.7575ZM20.5462 21.0546C20.5206 20.8701 20.3501 20.741 20.1659 20.7667C20.0555 20.7819 19.9424 20.79 19.8296 20.7904L19.7665 20.7907C19.6783 20.793 19.5946 20.8296 19.5332 20.8928C19.4717 20.9559 19.4374 21.0406 19.4376 21.1288C19.4378 21.2169 19.4725 21.3015 19.5343 21.3644C19.596 21.4272 19.6799 21.4635 19.768 21.4653H19.7697L19.8327 21.465C19.975 21.4644 20.1172 21.4543 20.2583 21.4349C20.3021 21.4288 20.3444 21.4142 20.3826 21.3918C20.4208 21.3694 20.4543 21.3397 20.481 21.3044C20.5077 21.2691 20.5273 21.2288 20.5384 21.186C20.5496 21.1431 20.5523 21.0985 20.5462 21.0546ZM22.0347 20.1062C22.0042 20.0741 21.9676 20.0483 21.9271 20.0304C21.8866 20.0125 21.843 20.0027 21.7987 20.0016C21.7544 20.0005 21.7104 20.0082 21.669 20.0241C21.6277 20.0401 21.59 20.064 21.5579 20.0946C21.4629 20.185 21.3611 20.2679 21.2534 20.3427C21.1799 20.3937 21.1297 20.4718 21.1137 20.5598C21.0978 20.6478 21.1174 20.7385 21.1684 20.8121C21.1994 20.8569 21.2409 20.8936 21.2892 20.9188C21.3376 20.9441 21.3913 20.9573 21.4459 20.9572C21.5144 20.9572 21.5814 20.9363 21.6377 20.8971C21.7741 20.8025 21.9029 20.6975 22.0231 20.583C22.0552 20.5525 22.081 20.5159 22.0989 20.4754C22.1168 20.4349 22.1266 20.3913 22.1277 20.347C22.1288 20.3027 22.1211 20.2587 22.1051 20.2173C22.0892 20.176 22.0652 20.1382 22.0347 20.1062ZM22.6911 18.4682C22.6032 18.4517 22.5123 18.4707 22.4385 18.5212C22.3646 18.5716 22.3138 18.6493 22.2973 18.7372C22.273 18.8658 22.2387 18.9924 22.1948 19.1158C22.1659 19.1998 22.1713 19.2918 22.2098 19.3718C22.2483 19.4518 22.3169 19.5135 22.4005 19.5433C22.4842 19.5731 22.5762 19.5687 22.6567 19.5311C22.7371 19.4935 22.7995 19.4256 22.8303 19.3423C22.886 19.1858 22.9294 19.0253 22.9602 18.862C22.9767 18.7741 22.9577 18.6832 22.9072 18.6094C22.8567 18.5355 22.779 18.4847 22.6911 18.4682ZM22.8914 17.384C22.8455 17.2242 22.7872 17.0683 22.7169 16.9176C22.6782 16.8379 22.6097 16.7766 22.5263 16.747C22.4428 16.7173 22.3511 16.7217 22.2708 16.7592C22.1905 16.7966 22.1282 16.8641 22.0973 16.9471C22.0664 17.0301 22.0694 17.122 22.1056 17.2028C22.1609 17.3214 22.2069 17.4443 22.2431 17.5701C22.2633 17.6405 22.3058 17.7024 22.3643 17.7464C22.4227 17.7905 22.4939 17.8144 22.5671 17.8144C22.6194 17.8144 22.6709 17.8023 22.7177 17.779C22.7644 17.7557 22.8051 17.7218 22.8366 17.6801C22.868 17.6384 22.8894 17.5899 22.8989 17.5385C22.9084 17.4872 22.9059 17.4343 22.8914 17.384ZM18.1651 15.0708H17.7196C17.6302 15.0708 17.5444 15.1063 17.4811 15.1696C17.4179 15.2328 17.3824 15.3186 17.3824 15.4081C17.3824 15.4975 17.4179 15.5833 17.4811 15.6466C17.5444 15.7098 17.6302 15.7453 17.7196 15.7453H18.1651C18.2545 15.7453 18.3403 15.7098 18.4036 15.6466C18.4668 15.5833 18.5024 15.4975 18.5024 15.4081C18.5024 15.3186 18.4668 15.2328 18.4036 15.1696C18.3403 15.1063 18.2545 15.0708 18.1651 15.0708ZM16.6498 20.8048H16.6482L16.2028 20.8069C16.1143 20.8085 16.03 20.8448 15.968 20.9081C15.9061 20.9713 15.8715 21.0564 15.8717 21.1449C15.8719 21.2334 15.9069 21.3183 15.9691 21.3812C16.0313 21.4442 16.1158 21.4802 16.2043 21.4814H16.2059L16.6513 21.4794C16.7408 21.4792 16.8265 21.4435 16.8896 21.3801C16.9527 21.3167 16.988 21.2308 16.9878 21.1414C16.9876 21.0519 16.9519 20.9662 16.8885 20.9031C16.8251 20.84 16.7393 20.8046 16.6498 20.8048ZM19.9618 15.074C19.9139 15.0719 19.8661 15.0708 19.8182 15.0708H19.5015C19.412 15.0708 19.3262 15.1064 19.263 15.1696C19.1997 15.2329 19.1642 15.3187 19.1642 15.4081C19.1642 15.4976 19.1997 15.5833 19.263 15.6466C19.3262 15.7098 19.412 15.7454 19.5015 15.7454H19.8182V15.7453C19.8563 15.7453 19.8943 15.7462 19.9319 15.7479C19.9762 15.7498 20.0204 15.7431 20.062 15.7279C20.1036 15.7128 20.1419 15.6897 20.1746 15.6598C20.2072 15.6299 20.2337 15.5938 20.2524 15.5537C20.2712 15.5136 20.2818 15.4701 20.2838 15.4259C20.2857 15.3817 20.279 15.3374 20.2639 15.2958C20.2487 15.2542 20.2256 15.2159 20.1957 15.1833C20.1658 15.1506 20.1297 15.1241 20.0896 15.1054C20.0495 15.0866 20.006 15.076 19.9618 15.074ZM18.4316 20.7968H18.4301L17.9846 20.7988C17.8961 20.8004 17.8118 20.8368 17.7499 20.9C17.6879 20.9633 17.6533 21.0483 17.6535 21.1368C17.6537 21.2253 17.6887 21.3102 17.7509 21.3732C17.8131 21.4362 17.8976 21.4721 17.9861 21.4734H17.9877L18.4331 21.4713C18.5226 21.4709 18.6082 21.435 18.6711 21.3715C18.7341 21.3079 18.7693 21.222 18.7689 21.1325C18.7685 21.0434 18.7328 20.958 18.6696 20.895C18.6064 20.8321 18.5208 20.7968 18.4316 20.7968Z" />
</g>
</svg>
Tour </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="hotel-tab" data-bs-toggle="pill" data-bs-target="#hotel" type="button" role="tab" aria-controls="hotel" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g>
<path d="M19.5496 12.2665H16.0038C15.9021 12.2665 15.8046 12.3069 15.7327 12.3788C15.6608 12.4506 15.6204 12.5481 15.6204 12.6498V22.2333H13.6079V18.2562C13.6079 18.1545 13.5675 18.057 13.4956 17.9851C13.4237 17.9132 13.3262 17.8728 13.2245 17.8728H9.77448C9.67281 17.8728 9.57531 17.9132 9.50342 17.9851C9.43153 18.057 9.39114 18.1545 9.39114 18.2562V22.2333H7.37861V8.33724C7.37861 7.91452 7.72256 7.57056 8.14529 7.57056H14.8537C15.2765 7.57056 15.6204 7.91452 15.6204 8.33724V10.4696C15.6204 10.5712 15.6608 10.6687 15.7327 10.7406C15.8046 10.8125 15.9021 10.8529 16.0038 10.8529C16.1054 10.8529 16.2029 10.8125 16.2748 10.7406C16.3467 10.6687 16.3871 10.5712 16.3871 10.4696V8.33724C16.3871 7.49174 15.6992 6.80389 14.8537 6.80389H8.14529C7.29978 6.80389 6.61193 7.49174 6.61193 8.33724V22.2333H3.44937C3.02665 22.2333 2.6827 21.8894 2.6827 21.4666V13.7998C2.6827 13.3771 3.02665 13.0332 3.44937 13.0332H4.79106C4.89273 13.0332 4.99024 12.9928 5.06213 12.9209C5.13402 12.849 5.1744 12.7515 5.1744 12.6498C5.1744 12.5481 5.13402 12.4506 5.06213 12.3788C4.99024 12.3069 4.89273 12.2665 4.79106 12.2665H3.44937C2.60387 12.2665 1.91602 12.9543 1.91602 13.7998V21.4666C1.91602 22.3121 2.60387 23 3.44937 23H16.0038C16.1054 23 16.2029 22.9596 16.2748 22.8877C16.3467 22.8158 16.3871 22.7183 16.3871 22.6166V13.0332H19.5496C19.9724 13.0332 20.3163 13.3771 20.3163 13.7998V21.4666C20.3163 21.8894 19.9724 22.2333 19.5496 22.2333H17.9205C17.8188 22.2333 17.7213 22.2737 17.6494 22.3456C17.5775 22.4175 17.5371 22.515 17.5371 22.6166C17.5371 22.7183 17.5775 22.8158 17.6494 22.8877C17.7213 22.9596 17.8188 23 17.9205 23H19.5496C20.3951 23 21.083 22.3121 21.083 21.4666V13.7998C21.083 12.9543 20.3951 12.2665 19.5496 12.2665ZM10.1578 18.6395H12.8412V22.2333H10.1578V18.6395ZM9.91047 3.38493L9.66638 4.81306C9.61295 5.12577 9.94233 5.36473 10.2231 5.21667L11.4995 4.54323L12.7759 5.21667C13.0564 5.36473 13.3861 5.12591 13.3326 4.81306L13.0885 3.38493L14.1222 2.37377C14.3485 2.15239 14.2231 1.76613 13.9095 1.72042L12.4821 1.51226L11.8435 0.213796C11.7034 -0.0712652 11.2957 -0.0712652 11.1556 0.213796L10.517 1.51226L9.0896 1.72042C8.77631 1.76603 8.65029 2.15215 8.87684 2.37377L9.91047 3.38493ZM10.8272 2.24181C10.8888 2.23283 10.9472 2.209 10.9975 2.17239C11.0478 2.13577 11.0884 2.08747 11.1159 2.03164L11.4995 1.25159L11.8831 2.03164C11.9106 2.08746 11.9512 2.13577 12.0015 2.17238C12.0518 2.209 12.1102 2.23283 12.1718 2.24181L13.0324 2.36735L12.4087 2.97739C12.3644 3.02074 12.3313 3.07419 12.3122 3.13316C12.293 3.19213 12.2885 3.25486 12.2989 3.31597L12.4458 4.17571C11.6045 3.73185 11.6245 3.72648 11.4995 3.72648C11.3729 3.72648 11.3843 3.73717 10.5531 4.17571L10.7 3.31597C10.7105 3.25486 10.7059 3.19213 10.6868 3.13316C10.6677 3.07418 10.6345 3.02073 10.5902 2.97739L9.96653 2.36735L10.8272 2.24181ZM5.66953 3.49173C5.75655 3.22397 6.00088 3.22766 6.24406 3.1923C6.35365 2.9702 6.42462 2.73842 6.70633 2.73842C6.98784 2.73842 7.05986 2.97193 7.16863 3.1923L7.43371 3.23082C7.74748 3.27644 7.87335 3.66323 7.64618 3.8847L7.45436 4.07168C7.4962 4.31577 7.57507 4.54506 7.34713 4.71061C7.11937 4.87612 6.92387 4.72949 6.70633 4.61511C6.48715 4.73035 6.29347 4.87621 6.06552 4.71061C5.83772 4.54515 5.91674 4.3139 5.95829 4.07168C5.78113 3.89889 5.58247 3.75964 5.66953 3.49173ZM2.31531 5.40843C2.40233 5.14067 2.64666 5.14436 2.88984 5.109L3.00839 4.86879C3.14874 4.58449 3.55546 4.58425 3.69591 4.86879L3.81446 5.109C4.05951 5.1446 4.30192 5.14048 4.38899 5.40843C4.47601 5.6762 4.27614 5.81683 4.10019 5.98838L4.14547 6.2524C4.18577 6.48729 4.00426 6.70053 3.76759 6.70053C3.64943 6.70053 3.60271 6.66358 3.3522 6.53181L3.11515 6.65649C2.8345 6.80398 2.5053 6.56516 2.55892 6.2524L2.60421 5.98838C2.42691 5.81559 2.22825 5.67634 2.31531 5.40843ZM15.2559 3.49173C15.3429 3.22397 15.5872 3.22766 15.8304 3.1923L15.9489 2.95209C16.0893 2.66775 16.496 2.6676 16.6365 2.95209L16.755 3.1923C17 3.2279 17.2425 3.22378 17.3295 3.49173C17.4165 3.7595 17.2167 3.90013 17.0407 4.07168L17.086 4.3357C17.1263 4.5706 16.9448 4.78383 16.7081 4.78383C16.59 4.78383 16.5433 4.74688 16.2927 4.61511L16.0557 4.73979C15.775 4.88728 15.4458 4.64846 15.4995 4.3357L15.5447 4.07168C15.3674 3.89889 15.1688 3.75964 15.2559 3.49173ZM18.6101 5.40843C18.6971 5.14067 18.9414 5.14436 19.1846 5.109L19.3032 4.86879C19.4435 4.58444 19.8502 4.5843 19.9907 4.86879L20.1092 5.109C20.3542 5.1446 20.5967 5.14048 20.6838 5.40843C20.7708 5.6762 20.5709 5.81683 20.395 5.98838L20.4402 6.2524C20.4805 6.48729 20.299 6.70053 20.0624 6.70053C19.9442 6.70053 19.8975 6.66358 19.647 6.53181L19.4099 6.65649C19.1293 6.80398 18.8001 6.56516 18.8537 6.2524L18.899 5.98838C18.7216 5.81559 18.523 5.67634 18.6101 5.40843ZM4.64731 15.7165C4.74898 15.7165 4.84648 15.7569 4.91837 15.8288C4.99026 15.9007 5.03065 15.9982 5.03065 16.0999V17.7291C5.03065 17.8307 4.99026 17.9282 4.91837 18.0001C4.84648 18.072 4.74898 18.1124 4.64731 18.1124C4.54564 18.1124 4.44814 18.072 4.37625 18.0001C4.30436 17.9282 4.26397 17.8307 4.26397 17.7291V16.0999C4.26397 15.9982 4.30436 15.9007 4.37625 15.8288C4.44814 15.7569 4.54564 15.7165 4.64731 15.7165ZM18.3517 18.1124C18.25 18.1124 18.1525 18.072 18.0806 18.0001C18.0088 17.9282 17.9684 17.8307 17.9684 17.7291V16.0999C17.9684 15.9982 18.0088 15.9007 18.0806 15.8288C18.1525 15.7569 18.25 15.7165 18.3517 15.7165C18.4534 15.7165 18.5509 15.7569 18.6228 15.8288C18.6947 15.9007 18.735 15.9982 18.735 16.0999V17.7291C18.735 17.8307 18.6947 17.9282 18.6228 18.0001C18.5509 18.072 18.4534 18.1124 18.3517 18.1124ZM13.7037 11.4519H9.29531C9.19364 11.4519 9.09613 11.4115 9.02424 11.3396C8.95235 11.2677 8.91197 11.1702 8.91197 11.0685C8.91197 10.9669 8.95235 10.8694 9.02424 10.7975C9.09613 10.7256 9.19364 10.6852 9.29531 10.6852H13.7037C13.8054 10.6852 13.9029 10.7256 13.9748 10.7975C14.0467 10.8694 14.0871 10.9669 14.0871 11.0685C14.0871 11.1702 14.0467 11.2677 13.9748 11.3396C13.9029 11.4115 13.8054 11.4519 13.7037 11.4519ZM13.0329 14.3748C13.1345 14.3748 13.232 14.4152 13.3039 14.4871C13.3758 14.559 13.4162 14.6565 13.4162 14.7582C13.4162 14.8599 13.3758 14.9574 13.3039 15.0292C13.232 15.1011 13.1345 15.1415 13.0329 15.1415H9.96615C9.86448 15.1415 9.76698 15.1011 9.69509 15.0292C9.6232 14.9574 9.58281 14.8599 9.58281 14.7582C9.58281 14.6565 9.6232 14.559 9.69509 14.4871C9.76698 14.4152 9.86448 14.3748 9.96615 14.3748H13.0329Z" />
</g>
</svg>
Hotel </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="visa-tab" data-bs-toggle="pill" data-bs-target="#visa" type="button" role="tab" aria-controls="visa" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<path d="M9.33914 13.9644C9.34058 13.9645 9.34192 13.9649 9.34332 13.965C9.34619 13.9651 9.34907 13.9662 9.35194 13.9662L9.35225 13.9661L9.35257 13.9662C9.35441 13.9662 9.35621 13.9654 9.35805 13.9654C9.3656 13.9655 9.37287 13.9666 9.38042 13.9666H9.3806C11.6686 13.9666 13.53 12.1052 13.53 9.81708C13.53 7.52898 11.6686 5.6676 9.3806 5.6676C9.37629 5.6676 9.37211 5.66823 9.3678 5.66827C9.36263 5.668 9.35742 5.66877 9.35221 5.66877C9.34225 5.6688 9.3323 5.66931 9.32238 5.6703C9.31668 5.67083 9.31093 5.67057 9.30522 5.67142C7.05221 5.71221 5.23112 7.55441 5.23112 9.81708C5.23112 12.0912 7.07036 13.9418 9.33914 13.9644ZM6.15292 11.2357H7.09569C7.31469 11.9507 7.69706 12.6037 8.21969 13.1447C7.29533 12.8211 6.54558 12.1255 6.15292 11.2357ZM12.9084 9.81703C12.9084 10.0915 12.8737 10.3575 12.8142 10.6141H11.7527C11.7963 10.3513 11.821 10.0828 11.821 9.80935C11.821 9.54153 11.7968 9.27829 11.7543 9.02021H12.8142C12.8738 9.27676 12.9084 9.5427 12.9084 9.81703ZM11.1994 9.82476C11.1994 10.0933 11.1736 10.3572 11.1246 10.6141H9.69128V9.02025H11.1233C11.174 9.28542 11.1994 9.55479 11.1994 9.82476ZM7.75236 11.2357H9.0697V13.0789C8.46074 12.5924 8.00999 11.9556 7.75236 11.2357ZM9.69128 13.031V11.2357H10.9538C10.7046 11.9311 10.2725 12.5499 9.69128 13.031ZM9.69128 8.39863V6.60319C10.2713 7.08336 10.7028 7.70153 10.9522 8.39863H9.69128ZM9.0697 6.55526V8.39863H7.75066C8.00797 7.68041 8.45934 7.04266 9.0697 6.55526ZM9.0697 9.02021V10.6141H7.58117C7.53049 10.3488 7.50503 10.0794 7.50511 9.80935C7.50511 9.54094 7.53085 9.27707 7.57977 9.02021H9.0697ZM6.95028 10.6141H5.94691C5.88734 10.3575 5.85271 10.0915 5.85271 9.81703C5.85271 9.54265 5.8873 9.27671 5.94686 9.02021H6.95177C6.90828 9.28291 6.88357 9.55132 6.88357 9.82472C6.88357 10.0926 6.90779 10.356 6.95028 10.6141ZM10.4502 13.1781C10.987 12.6335 11.3839 11.967 11.6071 11.2357H12.6081C12.2025 12.1549 11.4169 12.8697 10.4502 13.1781ZM12.6082 8.39863H11.6089C11.3852 7.66716 10.9878 7.00071 10.4506 6.45616C11.4172 6.76464 12.2027 7.47939 12.6082 8.39863ZM8.22 6.48936C7.6985 7.02945 7.31662 7.68199 7.09731 8.39863H6.15283C6.54549 7.50863 7.29542 6.81288 8.22 6.48936ZM20.322 4.08038C20.109 3.66759 19.7494 3.36306 19.3095 3.22264L9.47548 0.0826881C9.03578 -0.058142 8.56612 -0.0180717 8.15338 0.195172C7.74068 0.408057 7.43607 0.767612 7.29564 1.20749L6.64297 3.25139H4.21899C3.26251 3.25139 2.48438 4.02961 2.48438 4.98609V21.2655C2.48438 22.222 3.26251 23 4.21899 23H14.5421C15.4986 23 16.2767 22.222 16.2767 21.2655V18.4241L20.4343 5.40252C20.5748 4.96282 20.5349 4.49316 20.322 4.08038ZM15.6551 21.2655C15.6551 21.8792 15.1558 22.3784 14.5421 22.3784H4.21899C3.60527 22.3784 3.106 21.8792 3.106 21.2655V4.98609C3.106 4.37237 3.60531 3.87302 4.21899 3.87302H14.5421C15.1558 3.87302 15.6551 4.37241 15.6551 4.98609V21.2655ZM19.8423 5.21353L16.2767 16.3807V4.98609C16.2767 4.02961 15.4986 3.25139 14.5421 3.25139H7.29533L7.88767 1.39652C7.9776 1.11486 8.17319 0.884364 8.43836 0.747397C8.70345 0.61061 9.00452 0.584915 9.28649 0.674758L19.1205 3.81475C19.4022 3.90478 19.6328 4.10028 19.7695 4.36554C19.9063 4.63058 19.9322 4.93187 19.8423 5.21353ZM13.5729 16.3694C13.5729 16.4518 13.5402 16.5309 13.4819 16.5891C13.4236 16.6474 13.3446 16.6802 13.2621 16.6802H5.49881C5.41729 16.6788 5.33958 16.6455 5.28243 16.5873C5.22527 16.5292 5.19324 16.4509 5.19324 16.3694C5.19324 16.2879 5.22527 16.2096 5.28243 16.1514C5.33958 16.0933 5.41729 16.06 5.49881 16.0586H13.2622C13.303 16.0586 13.3434 16.0666 13.3811 16.0822C13.4188 16.0978 13.4531 16.1207 13.4819 16.1496C13.5108 16.1785 13.5337 16.2127 13.5493 16.2504C13.5649 16.2882 13.5729 16.3286 13.5729 16.3694ZM13.5729 18.5634C13.5729 18.6458 13.5402 18.7248 13.4819 18.7831C13.4236 18.8414 13.3446 18.8742 13.2621 18.8742H5.49881C5.41729 18.8728 5.33958 18.8394 5.28243 18.7813C5.22527 18.7232 5.19324 18.6449 5.19324 18.5634C5.19324 18.4818 5.22527 18.4036 5.28243 18.3454C5.33958 18.2873 5.41729 18.2539 5.49881 18.2526H13.2622C13.3446 18.2526 13.4236 18.2853 13.4819 18.3436C13.5402 18.4019 13.5729 18.4809 13.5729 18.5634ZM11.8121 20.7574C11.8121 20.8398 11.7794 20.9189 11.7211 20.9772C11.6628 21.0354 11.5837 21.0682 11.5013 21.0682H7.25966C7.17814 21.0668 7.10043 21.0335 7.04327 20.9753C6.98611 20.9172 6.95408 20.8389 6.95408 20.7574C6.95408 20.6759 6.98611 20.5976 7.04327 20.5395C7.10043 20.4813 7.17814 20.448 7.25966 20.4466H11.5013C11.5838 20.4466 11.6628 20.4793 11.7211 20.5376C11.7794 20.5959 11.8121 20.675 11.8121 20.7574Z" />
</svg>
Visa </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="activities-tab" data-bs-toggle="pill" data-bs-target="#activities" type="button" role="tab" aria-controls="activities" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<path d="M16.7611 10.0896L15.946 9.90118L15.7703 9.02653C15.7562 8.95659 15.7249 8.89201 15.6795 8.83957C15.6341 8.78713 15.5764 8.74879 15.5125 8.72857C15.4485 8.70835 15.3806 8.707 15.316 8.72467C15.2514 8.74233 15.1924 8.77836 15.1453 8.82896L13.6465 10.4371C13.6026 10.4842 13.5705 10.5423 13.553 10.6061C13.5354 10.6699 13.5331 10.7374 13.5462 10.8025L13.7297 11.7162L13.1228 12.3674C12.6046 11.9319 11.953 11.6713 11.2453 11.6713C9.56304 11.6713 8.1944 13.1398 8.1944 14.9449C8.1944 16.7499 9.56304 18.2184 11.2453 18.2184C12.9276 18.2184 14.2962 16.7499 14.2962 14.9449C14.2962 14.1855 14.0533 13.4864 13.6475 12.9304L14.2544 12.2792L15.1059 12.4761C15.1666 12.4902 15.2295 12.4877 15.289 12.4689C15.3485 12.4501 15.4026 12.4156 15.4464 12.3685L16.9453 10.7603C16.9924 10.7097 17.0259 10.6464 17.0424 10.5771C17.0588 10.5078 17.0575 10.435 17.0387 10.3663C17.0198 10.2977 16.9841 10.2358 16.9353 10.1871C16.8864 10.1384 16.8262 10.1048 16.7611 10.0896ZM13.5543 14.9448C13.5543 16.3109 12.5185 17.4223 11.2453 17.4223C9.97217 17.4223 8.93633 16.3109 8.93633 14.9448C8.93633 13.5788 9.97217 12.4673 11.2453 12.4673C11.7483 12.4673 12.2138 12.6413 12.5935 12.9354L11.8476 13.7356C11.8255 13.6807 11.792 13.6318 11.7498 13.5927C11.7075 13.5536 11.6576 13.5252 11.6037 13.5097C11.5087 13.4825 11.4074 13.4968 11.3222 13.5496C11.237 13.6024 11.1749 13.6893 11.1493 13.7912L10.887 14.8418C10.8702 14.9093 10.8702 14.9803 10.887 15.0478C10.9039 15.1153 10.937 15.1768 10.9831 15.2262C11.0291 15.2756 11.0864 15.3111 11.1493 15.3292C11.2122 15.3473 11.2784 15.3474 11.3413 15.3293L12.3204 15.0479C12.3675 15.0343 12.4116 15.011 12.4502 14.9792C12.4889 14.9474 12.5213 14.9077 12.5457 14.8624C12.57 14.8171 12.5858 14.7672 12.5922 14.7154C12.5985 14.6635 12.5953 14.6109 12.5827 14.5604C12.5683 14.5025 12.5419 14.449 12.5054 14.4036C12.469 14.3583 12.4234 14.3224 12.3722 14.2986L13.1181 13.4984C13.3922 13.9057 13.5543 14.4052 13.5543 14.9448ZM15.0647 11.6522L14.4472 11.5094L14.314 10.8468L15.1884 9.90854L15.2711 10.3201C15.2862 10.3949 15.321 10.4635 15.3714 10.5177C15.4219 10.5718 15.4858 10.6092 15.5556 10.6253L15.9391 10.714L15.0647 11.6522ZM16.468 13.979C16.5188 14.298 16.5444 14.6211 16.5445 14.9448C16.5445 18.0801 14.1673 20.6307 11.2453 20.6307C8.32331 20.6307 5.94615 18.08 5.94615 14.9448C5.94615 11.8096 8.32336 9.25894 11.2453 9.25894C11.546 9.25894 11.8488 9.28655 12.1454 9.34098C12.2424 9.35882 12.3288 9.41724 12.3856 9.5034C12.4425 9.58956 12.4651 9.69642 12.4485 9.80047C12.4319 9.90452 12.3775 9.99722 12.2971 10.0582C12.2168 10.1192 12.1173 10.1435 12.0203 10.1257C11.7643 10.0787 11.505 10.055 11.2453 10.055C8.73244 10.055 6.68808 12.2486 6.68808 14.9448C6.68808 17.641 8.73244 19.8346 11.2453 19.8346C13.7582 19.8346 15.8026 17.641 15.8026 14.9448C15.8025 14.6661 15.7804 14.388 15.7367 14.1133C15.7201 14.0093 15.7427 13.9024 15.7995 13.8163C15.8563 13.7301 15.9427 13.6717 16.0397 13.6538C16.0877 13.645 16.1369 13.6464 16.1844 13.658C16.2319 13.6695 16.2768 13.691 16.3166 13.7212C16.3564 13.7514 16.3902 13.7897 16.4162 13.8339C16.4421 13.8782 16.4597 13.9275 16.468 13.979ZM20.834 2.12563H20.249V0.879517C20.249 0.394556 19.8813 0 19.4293 0H18.5395C18.0875 0 17.7197 0.394556 17.7197 0.879517V2.12563H16.5068V0.879517C16.5068 0.394556 16.139 0 15.6871 0H14.7973C14.3453 0 13.9776 0.394556 13.9776 0.879517V2.12563H12.7646V0.879517C12.7646 0.394556 12.3969 0 11.9449 0H11.0551C10.6031 0 10.2354 0.394556 10.2354 0.879517V2.12563H9.0224V0.879517C9.0224 0.394556 8.65463 0 8.20265 0H7.31284C6.86086 0 6.49314 0.394556 6.49314 0.879517V2.12563H5.28017V0.879517C5.28017 0.394556 4.91245 0 4.46047 0H3.5707C3.11873 0 2.75096 0.394556 2.75096 0.879517V2.12563H2.16599C0.971657 2.12563 0 3.16814 0 4.44963V20.676C0 21.9575 0.971657 23 2.16599 23H18.116C18.7113 23 19.2266 22.771 19.6476 22.3194L22.3656 19.403C22.7866 18.9513 23 18.3984 23 17.7597V4.44963C23 3.16814 22.0283 2.12563 20.834 2.12563ZM18.4617 0.879517C18.462 0.857472 18.4702 0.836413 18.4848 0.820827C18.4993 0.805242 18.5189 0.796362 18.5395 0.796078H19.4293C19.4498 0.796375 19.4695 0.805261 19.484 0.820845C19.4985 0.836429 19.5068 0.85748 19.5071 0.879517V3.80018C19.5068 3.82223 19.4985 3.84329 19.484 3.85888C19.4695 3.87448 19.4498 3.88337 19.4293 3.88367H18.5395C18.5189 3.88337 18.4993 3.87448 18.4848 3.85889C18.4702 3.84329 18.4619 3.82223 18.4617 3.80018V0.879517ZM14.7195 0.879517C14.7198 0.857472 14.7281 0.836413 14.7426 0.820827C14.7571 0.805242 14.7768 0.796362 14.7973 0.796078H15.6871C15.7076 0.796362 15.7272 0.805242 15.7418 0.820827C15.7563 0.836413 15.7646 0.857472 15.7649 0.879517V3.80018C15.7649 3.84541 15.7292 3.88367 15.6871 3.88367H14.7973C14.7767 3.88337 14.7571 3.87448 14.7426 3.85889C14.7281 3.84329 14.7198 3.82223 14.7195 3.80018V0.879517ZM10.9773 0.879517C10.9776 0.857472 10.9859 0.836413 11.0004 0.820827C11.0149 0.805242 11.0346 0.796362 11.0551 0.796078H11.9449C11.9654 0.796362 11.9851 0.805242 11.9996 0.820827C12.0141 0.836413 12.0224 0.857472 12.0227 0.879517V3.80018C12.0227 3.84541 11.987 3.88367 11.9449 3.88367H11.0551C11.0346 3.88337 11.0149 3.87448 11.0004 3.85889C10.9859 3.84329 10.9776 3.82223 10.9773 3.80018V0.879517ZM7.23508 0.879517C7.23535 0.85748 7.24363 0.836429 7.25816 0.820845C7.27268 0.805261 7.2923 0.796375 7.31284 0.796078H8.20265C8.2232 0.796362 8.24283 0.805242 8.25737 0.820827C8.2719 0.836413 8.28019 0.857472 8.28046 0.879517V3.80018C8.28046 3.84541 8.2448 3.88367 8.20265 3.88367H7.31284C7.29229 3.88337 7.27267 3.87448 7.25814 3.85888C7.24362 3.84329 7.23534 3.82223 7.23508 3.80018V0.879517ZM3.49289 0.879517C3.49317 0.857472 3.50146 0.836413 3.51599 0.820827C3.53053 0.805242 3.55016 0.796362 3.5707 0.796078H4.46047C4.48101 0.796375 4.50063 0.805261 4.51515 0.820845C4.52968 0.836429 4.53796 0.85748 4.53823 0.879517V3.80018C4.53797 3.82223 4.52969 3.84329 4.51517 3.85888C4.50064 3.87448 4.48102 3.88337 4.46047 3.88367H3.5707C3.55015 3.88337 3.53052 3.87448 3.51599 3.85889C3.50146 3.84329 3.49317 3.82223 3.49289 3.80018V0.879517ZM2.16599 2.92171H2.75096V3.80018C2.75096 4.28514 3.11873 4.67975 3.5707 4.67975H4.46047C4.91245 4.67975 5.28017 4.28514 5.28017 3.80018V2.92171H6.49314V3.80018C6.49314 4.28514 6.86086 4.67975 7.31284 4.67975H8.20265C8.65463 4.67975 9.0224 4.28514 9.0224 3.80018V2.92171H10.2353V3.80018C10.2353 4.28514 10.6031 4.67975 11.0551 4.67975H11.9448C12.3968 4.67975 12.7646 4.28514 12.7646 3.80018V2.92171H13.9775V3.80018C13.9775 4.28514 14.3453 4.67975 14.7973 4.67975H15.687C16.139 4.67975 16.5068 4.28514 16.5068 3.80018V2.92171H17.7197V3.80018C17.7197 4.28514 18.0875 4.67975 18.5394 4.67975H19.4293C19.8812 4.67975 20.2489 4.28514 20.2489 3.80018V2.92171H20.834C21.6192 2.92171 22.258 3.60713 22.258 4.44963V6.32887H0.741935V4.44963C0.741935 3.60713 1.38074 2.92171 2.16599 2.92171ZM2.16599 22.2039C1.38074 22.2039 0.741935 21.5185 0.741935 20.676V7.1249H22.2581V17.7597C22.2581 17.9007 22.2428 18.0336 22.2126 18.1594H19.3083C18.8563 18.1594 18.4886 18.554 18.4886 19.039V22.1551C18.3713 22.1875 18.2474 22.2039 18.116 22.2039H2.16599ZM19.2305 21.6409V19.0389C19.2308 19.0169 19.239 18.9958 19.2536 18.9802C19.2681 18.9646 19.2877 18.9557 19.3083 18.9554H21.7334L19.2305 21.6409Z" />
</svg>
Activities </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="transport-tab" data-bs-toggle="pill" data-bs-target="#transport" type="button" role="tab" aria-controls="transport" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 51 51">
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.8564 34.4958C45.8564 35.7619 46.8834 36.7871 48.1488 36.7871H50.2528C50.5289 36.7871 50.7528 36.5633 50.7528 36.2871V31.249C50.7528 30.9728 50.5289 30.749 50.2528 30.749H48.1488C46.883 30.749 45.8564 31.7757 45.8564 33.0413V34.4958ZM48.1488 35.7871C47.435 35.7871 46.8564 35.2088 46.8564 34.4958V33.0413C46.8564 32.328 47.4354 31.749 48.1488 31.749H49.7528V35.7871H48.1488Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.578816 36.5923C0.673478 36.7152 0.819779 36.7871 0.974858 36.7871H3.80037C5.06692 36.7871 6.09273 35.7617 6.09273 34.4958V33.0413C6.09273 31.7758 5.0673 30.749 3.80037 30.749H2.30235C2.07527 30.749 1.87671 30.902 1.81885 31.1216L0.49136 36.1597C0.451847 36.3097 0.484154 36.4695 0.578816 36.5923ZM1.62367 35.7871L2.68767 31.749H3.80037C4.51466 31.749 5.09273 32.3277 5.09273 33.0413V34.4958C5.09273 35.209 4.51504 35.7871 3.80037 35.7871H1.62367Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.26435 27.315C8.26436 27.3149 8.26435 27.315 8.26435 27.315L10.3466 19.4132C10.3639 19.3473 10.4026 19.2887 10.4565 19.247C10.5105 19.2054 10.5767 19.1828 10.6448 19.1827H18.1558C18.6207 19.1827 18.9975 19.5595 18.9975 20.0243V27.5296C18.9975 27.9943 18.6207 28.3711 18.1558 28.3711H9.07815C8.52629 28.3711 8.12377 27.8488 8.26435 27.315ZM7.29734 27.0602C6.98972 28.2281 7.87034 29.3711 9.07815 29.3711H18.1558C19.1729 29.3711 19.9975 28.5466 19.9975 27.5296V20.0243C19.9975 19.0073 19.173 18.1827 18.1558 18.1827H10.6442C10.3553 18.183 10.0741 18.2789 9.84539 18.4555C9.61672 18.6321 9.4529 18.8793 9.37949 19.1587L7.29734 27.0602Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M25.2215 28.3711C24.7567 28.3711 24.3799 27.9943 24.3799 27.5295V20.0243C24.3799 19.5596 24.7566 19.1828 25.2215 19.1828H32.4557C32.5237 19.1828 32.5898 19.2054 32.6436 19.2469C32.6974 19.2884 32.736 19.3466 32.7533 19.4123L33.3161 21.5481C33.3864 21.8151 33.6599 21.9746 33.9269 21.9042C34.194 21.8339 34.3534 21.5604 34.2831 21.2933L33.7204 19.1577C33.6469 18.8785 33.483 18.6314 33.2543 18.455C33.0257 18.2787 32.7451 18.1829 32.4563 18.1828H25.2215C24.2044 18.1828 23.3799 19.0073 23.3799 20.0243V27.5295C23.3799 28.5466 24.2044 29.3711 25.2215 29.3711H34.0221C35.2493 29.3711 36.1076 28.2048 35.7966 27.0381L35.792 27.0209L35.7916 27.0191L35.0628 24.2527C34.9924 23.9857 34.719 23.8263 34.4519 23.8966C34.1849 23.967 34.0254 24.2405 34.0958 24.5075L34.825 27.2756L34.8255 27.2774L34.8304 27.2957C34.9772 27.8466 34.5727 28.3711 34.0221 28.3711H25.2215Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0698 41.0047C11.0698 42.687 12.4336 44.0508 14.1159 44.0508C15.7983 44.0508 17.162 42.687 17.162 41.0047C17.162 39.3224 15.7983 37.9586 14.1159 37.9586C12.4336 37.9586 11.0698 39.3224 11.0698 41.0047ZM14.1159 43.0508C12.9859 43.0508 12.0698 42.1347 12.0698 41.0047C12.0698 39.8746 12.9859 38.9586 14.1159 38.9586C15.246 38.9586 16.162 39.8746 16.162 41.0047C16.162 42.1347 15.246 43.0508 14.1159 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M32.3147 41.0047C32.3147 42.687 33.6785 44.0508 35.3608 44.0508C37.0431 44.0508 38.4069 42.687 38.4069 41.0047C38.4069 39.3224 37.0431 37.9586 35.3608 37.9586C33.6785 37.9586 32.3147 39.3224 32.3147 41.0047ZM35.3608 43.0508C34.2308 43.0508 33.3147 42.1347 33.3147 41.0047C33.3147 39.8746 34.2308 38.9586 35.3608 38.9586C36.4908 38.9586 37.4069 39.8746 37.4069 41.0047C37.4069 42.1347 36.4908 43.0508 35.3608 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.52888 13.9199C6.44663 13.9199 5.56934 13.0427 5.56934 11.9605V8.40513C5.56934 7.32301 6.44664 6.44568 7.52888 6.44568H12.0994V13.9199H7.52888ZM4.56934 11.9605C4.56934 13.595 5.8944 14.9199 7.52888 14.9199H12.5994C12.8755 14.9199 13.0994 14.6961 13.0994 14.4199V5.94568C13.0994 5.66954 12.8755 5.44568 12.5994 5.44568H7.52888C5.89439 5.44568 4.56934 6.7707 4.56934 8.40513V11.9605Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 14.4199C12.0996 14.6961 12.3235 14.9199 12.5996 14.9199H17.2592C17.5354 14.9199 17.7592 14.6961 17.7592 14.4199V5.94568C17.7592 4.38279 16.4923 3.11582 14.9294 3.11582C13.3666 3.11582 12.0996 4.3828 12.0996 5.94568V14.4199ZM13.0996 13.9199V5.94568C13.0996 4.93506 13.9189 4.11582 14.9294 4.11582C15.94 4.11582 16.7592 4.93507 16.7592 5.94568V13.9199H13.0996Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.759 14.4199C16.759 14.6961 16.9829 14.9199 17.259 14.9199H25.1014C25.3775 14.9199 25.6014 14.6961 25.6014 14.4199V5.94568C25.6014 5.66954 25.3775 5.44568 25.1014 5.44568H17.259C16.9829 5.44568 16.759 5.66954 16.759 5.94568V14.4199ZM17.759 13.9199V6.44568H24.6014V13.9199H17.759Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.6016 14.4199C24.6016 14.6961 24.8254 14.9199 25.1016 14.9199H29.7612C30.0373 14.9199 30.2612 14.6961 30.2612 14.4199V5.94568C30.2612 4.38279 28.9942 3.11582 27.4313 3.11582C25.8684 3.11582 24.6016 4.38282 24.6016 5.94568V14.4199ZM25.6016 13.9199V5.94568C25.6016 4.93504 26.4207 4.11582 27.4313 4.11582C28.4419 4.11582 29.2612 4.93507 29.2612 5.94568V13.9199H25.6016Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M36.791 11.9609C36.791 12.2371 37.0149 12.4609 37.291 12.4609H40.6825C41.9404 12.4609 42.9601 11.4412 42.9601 10.1833C42.9601 8.92542 41.9404 7.90569 40.6825 7.90569H37.291C37.0149 7.90569 36.791 8.12955 36.791 8.40569V11.9609ZM37.791 11.4609V8.90569H40.6825C41.3881 8.90569 41.9601 9.47771 41.9601 10.1833C41.9601 10.8889 41.3881 11.4609 40.6825 11.4609H37.791Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M29.261 14.4199C29.261 14.6961 29.4848 14.9199 29.761 14.9199H34.8315C36.466 14.9199 37.791 13.595 37.791 11.9605V8.40513C37.791 6.7707 36.466 5.44568 34.8315 5.44568H29.761C29.4848 5.44568 29.261 5.66954 29.261 5.94568V14.4199ZM30.261 13.9199V6.44568H34.8315C35.9137 6.44568 36.791 7.32301 36.791 8.40513V11.9605C36.791 13.0427 35.9137 13.9199 34.8315 13.9199H30.261Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.23584 41.0046C7.23584 44.8044 10.3162 47.8848 14.116 47.8848C17.9158 47.8848 20.9962 44.8044 20.9962 41.0046C20.9962 37.2048 17.9158 34.1244 14.116 34.1244C10.3162 34.1244 7.23584 37.2048 7.23584 41.0046ZM14.116 46.8848C10.8685 46.8848 8.23584 44.2521 8.23584 41.0046C8.23584 37.7571 10.8685 35.1244 14.116 35.1244C17.3635 35.1244 19.9962 37.7571 19.9962 41.0046C19.9962 44.2521 17.3635 46.8848 14.116 46.8848Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34781 36.8327C1.34784 36.8326 1.34778 36.8328 1.34781 36.8327L1.45832 36.4151L2.78595 31.3765L3.76729 27.6525C3.83766 27.3855 3.67824 27.112 3.41121 27.0416C3.14418 26.9712 2.87067 27.1306 2.80031 27.3977L1.81896 31.1217L0.380936 36.5774C-0.286037 39.1098 1.62328 41.5898 4.24304 41.5898H7.73792C7.87144 41.5898 7.99942 41.5364 8.09334 41.4415C8.18725 41.3466 8.2393 41.2181 8.23789 41.0846C8.23769 41.0652 8.23702 41.0463 8.2366 41.0341L8.23647 41.0303C8.23598 41.0161 8.23583 41.0097 8.23583 41.0051C8.23583 37.7575 10.8685 35.1249 14.116 35.1249C17.3635 35.1249 19.9961 37.7575 19.9961 41.0051C19.9961 41.0248 19.996 41.0263 19.9956 41.0287C19.9953 41.0318 19.9947 41.0365 19.994 41.0828C19.9921 41.2166 20.044 41.3456 20.1379 41.4409C20.2319 41.5362 20.3601 41.5898 20.494 41.5898H28.9827C29.1166 41.5898 29.2448 41.5362 29.3388 41.4409C29.4327 41.3456 29.4846 41.2166 29.4827 41.0828C29.4821 41.0402 29.4815 41.0338 29.4811 41.0294C29.4808 41.0258 29.4806 41.0236 29.4806 41.0051C29.4806 37.7575 32.1132 35.1249 35.3607 35.1249C38.6082 35.1249 41.2409 37.7575 41.2409 41.0051C41.2409 41.0097 41.2407 41.0161 41.2402 41.0303L41.2401 41.0341C41.2397 41.0462 41.239 41.0652 41.2388 41.0846C41.2374 41.2181 41.2894 41.3466 41.3834 41.4415C41.4773 41.5364 41.6053 41.5898 41.7388 41.5898H46.7595C48.9651 41.5898 50.7529 39.8019 50.7529 37.5955V31.2491C50.7529 29.0436 48.9651 27.2556 46.7595 27.2556H41.6271C41.2359 27.2555 40.8556 27.126 40.5458 26.8872C40.2359 26.6483 40.0138 26.3136 39.9141 25.9353L37.8427 18.0728C37.1983 15.6254 34.9851 13.9204 32.4561 13.9204H10.6442C8.11412 13.9204 5.90196 15.6254 5.25754 18.0728L3.58772 24.4094C3.51735 24.6764 3.67677 24.9499 3.9438 25.0203C4.21083 25.0907 4.48434 24.9312 4.5547 24.6642L6.22455 18.3275C6.75333 16.3193 8.56839 14.9204 10.6442 14.9204H32.4561C34.5309 14.9204 36.3469 16.3193 36.8757 18.3274L38.9471 26.1901C39.1031 26.782 39.4505 27.3056 39.9353 27.6792C40.4201 28.0528 41.0149 28.2555 41.627 28.2556H46.7595C48.4127 28.2556 49.7529 29.5959 49.7529 31.2491V37.5955C49.7529 39.2498 48.4127 40.5898 46.7595 40.5898H42.2285C42.0139 36.9834 39.0211 34.1249 35.3607 34.1249C31.7003 34.1249 28.7077 36.9834 28.493 40.5898H20.9838C20.7691 36.9834 17.7764 34.1249 14.116 34.1249C10.4556 34.1249 7.46284 36.9834 7.24815 40.5898H4.24304C2.2795 40.5898 0.848019 38.7312 1.34781 36.8327Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M28.4805 41.0046C28.4805 44.8044 31.5608 47.8848 35.3606 47.8848C39.1604 47.8848 42.2408 44.8044 42.2408 41.0046C42.2408 37.2048 39.1604 34.1244 35.3606 34.1244C31.5608 34.1244 28.4805 37.2048 28.4805 41.0046ZM35.3606 46.8848C32.1131 46.8848 29.4805 44.2521 29.4805 41.0046C29.4805 37.7571 32.1131 35.1244 35.3606 35.1244C38.6082 35.1244 41.2408 37.7571 41.2408 41.0046C41.2408 44.2521 38.6082 46.8848 35.3606 46.8848Z"></path>
</svg>
Transport </button>
</li>
</ul>
</div>
<div class="filter-group">
<div class="tab-content" id="pills-tab2Content">
<div class="tab-pane fade show active" id="tour" role="tabpanel">
<form method="get" action="https://triprex.egenslab.com/tour/" id="tour-query-form" onsubmit="handleFormSubmit(event)">
<div class="filter-area">
<div class="row g-xl-4 gy-4">
<div class="col-xl-3 col-sm-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<path d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
<path d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
</svg>
</div>
<div class="searchbox-input">
<label>Destination</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="des" readonly value="Select Destination">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Type Your Destination">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>KIGALI</h6>
<p> Busly city , Full of energy and purpose </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>MUSANZE</h6>
<p> Chimpanze and Gorillas Nest  </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>NYANZA</h6>
<p> Rwanda's Kings Palace </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>KIBUYE</h6>
<p> Swelling Mountains, Twin lakes </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>GISENYI</h6>
<p> Gisenyi Beach , amashyuza lake  </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<!--<div class="destination">
<h6>Spain</h6>
<p> Bandar ban,Sajek Vally,Sea Beach </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>Italy</h6>
<p> Bandar ban,Cox’s Bazar,Khagrachori,Sea Beach </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>Indonesia</h6>
<p> Khagrachori,Saint Martin,Sea Beach </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>Saudi Arab</h6>
<p> Cox’s Bazar,Khagrachori,Saint Martin,Sea Beach </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>Switzerland</h6>
<p> Bandar ban,Khagrachori,Sajek Vally,Sea Beach </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>New York</h6>
<p> Cox’s Bazar,Saint Martin,Sajek Vally </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>
</li>
<li>
<div class="destination">
<h6>Egypt</h6>
<p> Bandar ban,Cox’s Bazar,Khagrachori,Saint Martin,Sajek Vally,Sea Beach </p> </div>
<div class="tour">
<span> 5<br> Tour</span>
</div>-->
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1731)">
<path d="M26.4727 15.0783C26.334 15.0783 26.1981 15.1348 26.0998 15.2328C26.0013 15.332 25.9458 15.4659 25.9453 15.6057C25.9453 15.7443 26.0017 15.8804 26.0998 15.9785C26.199 16.077 26.3329 16.1325 26.4727 16.133C26.6115 16.133 26.7474 16.0766 26.8455 15.9785C26.944 15.8794 26.9995 15.7454 27 15.6057C27 15.4665 26.9436 15.3309 26.8455 15.2328C26.7464 15.1343 26.6124 15.0788 26.4727 15.0783Z" />
<path d="M22.9027 6.15386H22.4775V2.97002H23.0675C23.3588 2.97002 23.5949 2.73399 23.5949 2.44268V1.60226C23.5949 0.718746 22.8761 3.05176e-05 21.9926 3.05176e-05H16.4811C15.5978 3.05176e-05 14.879 0.718746 14.879 1.60226V2.44268C14.879 2.73399 15.1151 2.97002 15.4064 2.97002H15.9962V6.15386H15.571C15.0486 6.1537 14.531 6.2534 14.046 6.44759V2.63674C14.046 2.41283 13.9045 2.21324 13.6932 2.13904C13.5665 2.09478 13.4277 2.10045 13.305 2.15491C13.3042 2.15533 13.3034 2.15533 13.3024 2.15575L7.45469 4.78688C7.18912 4.90637 7.07068 5.21867 7.19018 5.48418C7.30962 5.7497 7.62191 5.86835 7.88743 5.7487L10.7903 4.44268L5.2822 9.53855L1.96553 8.41341L3.98451 7.50496C4.25003 7.38552 4.36842 7.07323 4.24898 6.80771C4.12953 6.54219 3.81724 6.42354 3.55167 6.54319L0.31099 8.00124C0.214435 8.0447 0.133195 8.11622 0.077836 8.20648C0.0224775 8.29674 -0.00443615 8.40157 0.000596289 8.50733C0.00562422 8.6131 0.0423852 8.7149 0.106091 8.79948C0.169797 8.88406 0.257496 8.94749 0.357766 8.98152L5.01505 10.5617L6.58452 14.3201C6.63148 14.4325 6.71594 14.5253 6.82353 14.5825C6.93113 14.6397 7.05523 14.6579 7.17473 14.634C7.30092 14.6086 7.41346 14.5379 7.49113 14.4352C7.49234 14.4336 7.49377 14.4321 7.49524 14.4303L9.2851 12.0086L11.474 12.7522V20.7903C11.474 22.9282 13.1203 24.6877 15.2115 24.8706V25.5749C15.2115 26.3606 15.8509 27 16.6366 27C17.4225 27 18.0617 26.3606 18.0617 25.5749V24.8873H20.412V25.5749C20.412 26.3606 21.0512 27 21.8371 27C22.6228 27 23.2622 26.3606 23.2622 25.5749V24.8706C25.3534 24.6877 26.9997 22.9281 26.9997 20.7903V17.7196C26.9997 17.4283 26.7636 17.1922 26.4724 17.1922C26.1811 17.1922 25.945 17.4283 25.945 17.7196V20.7903C25.945 22.4679 24.5803 23.8326 22.9027 23.8326H15.571C13.8934 23.8326 12.5287 22.4677 12.5287 20.7904V13.1104L13.3492 13.3894C13.4285 13.4163 13.5132 13.4239 13.5961 13.4116C13.679 13.3993 13.7577 13.3675 13.8259 13.3187C13.894 13.2699 13.9495 13.2055 13.9878 13.1309C14.026 13.0564 14.046 12.9738 14.046 12.89V7.61802C14.5093 7.3494 15.0354 7.20811 15.571 7.20849H22.9028C24.5804 7.20849 25.9451 8.57325 25.9451 10.2508V13.5854C25.9451 13.8767 26.1812 14.1128 26.4724 14.1128C26.7637 14.1128 26.9998 13.8767 26.9998 13.5854V10.2508C26.9998 7.9917 25.1619 6.1538 22.9028 6.1538L22.9027 6.15386ZM22.2075 24.8873V25.5747C22.2074 25.6729 22.1684 25.7671 22.0989 25.8365C22.0295 25.906 21.9353 25.945 21.8371 25.9451C21.7389 25.945 21.6448 25.9059 21.5753 25.8365C21.5059 25.7671 21.4668 25.6729 21.4667 25.5747V24.8873H22.2075ZM17.007 24.8873V25.5747C17.007 25.7791 16.8409 25.9451 16.6366 25.9451C16.4322 25.9451 16.2662 25.7791 16.2662 25.5747V24.8873H17.007ZM6.54376 10.6993V11.4856L6.03867 10.2755L8.71472 7.79969L6.6593 10.3701C6.58449 10.4635 6.54374 10.5796 6.54376 10.6993ZM7.59844 12.5161V11.4355L8.23679 11.6524L7.59844 12.5161ZM12.9913 12.1538L9.26469 10.8878C9.26348 10.8871 9.26226 10.8869 9.26121 10.8865L7.95234 10.4418L12.9913 4.14046V12.1538ZM15.9335 1.6022C15.9335 1.30019 16.1793 1.05466 16.4811 1.05466H21.9926C22.2946 1.05466 22.5402 1.30019 22.5402 1.6022V1.91529H15.9335V1.6022ZM17.0509 2.97002H21.4228V6.15386H17.0509V2.97002Z" />
<path d="M13.8583 15.6875V19.7184C13.8583 21.1721 15.0411 22.3551 16.495 22.3551H21.9794C23.4332 22.3551 24.6161 21.1721 24.6161 19.7184V15.6875C24.6161 14.8151 23.9064 14.1054 23.034 14.1054H15.4403C14.5679 14.1054 13.8583 14.8151 13.8583 15.6875ZM21.9794 21.3004H16.495C15.6226 21.3004 14.9129 20.5906 14.9129 19.7184V17.7363H20.7246V18.2303C20.7246 18.5214 20.9607 18.7576 21.252 18.7576C21.5432 18.7576 21.7793 18.5214 21.7793 18.2303V17.7363H23.5614V19.7184C23.5614 20.5906 22.8517 21.3004 21.9794 21.3004ZM23.5614 15.6875V16.6816H14.9129V15.6875C14.9129 15.3966 15.1496 15.1601 15.4403 15.1601H23.034C23.3249 15.1601 23.5614 15.3966 23.5614 15.6875ZM5.93329 6.57761C6.07214 6.57761 6.20803 6.52118 6.30612 6.42309C6.4046 6.32394 6.4601 6.19001 6.46063 6.05026C6.46063 5.91104 6.4042 5.77488 6.30612 5.6768C6.20694 5.57842 6.07297 5.52313 5.93329 5.52292C5.79361 5.52321 5.65967 5.57849 5.56045 5.6768C5.46182 5.77611 5.4063 5.91029 5.40594 6.05026C5.40594 6.18895 5.46237 6.32485 5.56045 6.42309C5.65961 6.52157 5.79354 6.57708 5.93329 6.57761ZM5.82882 15.0018C5.22591 15.6047 4.42434 15.9367 3.57179 15.9367C3.42323 15.9367 3.27637 15.9267 3.13156 15.9069C3.07719 15.1414 2.75873 14.3916 2.17654 13.8068C2.09807 13.7246 1.72028 13.3585 1.19463 13.3706C0.953157 13.3756 0.596409 13.4629 0.268612 13.8521C-0.232365 14.4468 0.0731782 15.2516 0.568776 15.7474C0.988594 16.1672 1.48071 16.4884 2.01713 16.6991C1.91796 17.0938 1.71339 17.4541 1.42529 17.7415C1.1408 18.0264 0.785255 18.2299 0.395543 18.331C0.113731 18.4039 -0.0560211 18.6915 0.0169106 18.9735C0.0782934 19.2112 0.292553 19.369 0.527168 19.369C0.571778 19.369 0.616212 19.3634 0.659426 19.3524C1.23145 19.2039 1.7534 18.9053 2.17122 18.4873C2.60875 18.0497 2.89816 17.5191 3.03922 16.9587C3.21588 16.9806 3.39372 16.9915 3.57174 16.9914C4.70595 16.9914 5.7726 16.5498 6.57475 15.7476C6.78052 15.5417 6.78052 15.2077 6.57475 15.0018C6.36877 14.7959 6.0348 14.7959 5.82882 15.0018ZM1.3147 15.0019C1.18819 14.875 1.02219 14.5949 1.07555 14.5315C1.12971 14.467 1.18308 14.4264 1.21477 14.4252H1.21725C1.27162 14.4252 1.36454 14.4859 1.41089 14.5323C1.41727 14.5395 1.41669 14.5384 1.42529 14.5471C1.69724 14.8183 1.89506 15.1548 1.99983 15.5244C1.749 15.3818 1.51855 15.2061 1.3147 15.0019ZM21.1993 10.9161C21.1993 9.83417 20.3191 8.95398 19.2372 8.95398C18.1553 8.95398 17.2751 9.83417 17.2751 10.9161C17.2751 11.998 18.1553 12.8782 19.2372 12.8782C20.3191 12.8782 21.1993 11.998 21.1993 10.9161ZM18.3298 10.9161C18.3298 10.4157 18.7368 10.0087 19.2372 10.0087C19.7375 10.0087 20.1446 10.4157 20.1446 10.9161C20.1446 11.4164 19.7375 11.8235 19.2372 11.8235C18.7368 11.8235 18.3298 11.4164 18.3298 10.9161Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Tour Type</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="tour_type" value="Select Tour Type">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>Luxury Tour</h6>
</li>
<li class="single-item">
<h6>Group Tour</h6>
</li>
<li class="single-item">
<h6>Cultural Tours</h6>
</li>
<li class="single-item">
<h6>Honey moon Tour</h6>
</li>
<li class="single-item">
<h6>Historical Tours</h6>
</li>
<li class="single-item">
<h6>Wildlife &amp; Safari</h6>
</li>
<li class="single-item">
<h6>Adventure Tours</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1743)">
<path d="M18.3111 15.8842L14.5465 13.0608V7.30946C14.5465 6.73117 14.0791 6.26373 13.5008 6.26373C12.9225 6.26373 12.4551 6.73117 12.4551 7.30946V13.5837C12.4551 13.9131 12.6099 14.2237 12.8734 14.4203L17.0562 17.5574C17.2367 17.6933 17.4566 17.7667 17.6825 17.7665C18.0015 17.7665 18.3152 17.6232 18.5202 17.3472C18.8674 16.886 18.7733 16.2303 18.3111 15.8842Z" />
<path d="M13.5 0C6.05565 0 0 6.05565 0 13.5C0 20.9444 6.05565 27 13.5 27C20.9444 27 27 20.9444 27 13.5C27 6.05565 20.9444 0 13.5 0ZM13.5 24.9086C7.21011 24.9086 2.09139 19.7899 2.09139 13.5C2.09139 7.21011 7.21011 2.09139 13.5 2.09139C19.7909 2.09139 24.9086 7.21011 24.9086 13.5C24.9086 19.7899 19.7899 24.9086 13.5 24.9086Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>When</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="month" value="Select Month">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>January</h6>
</li>
<li class="single-item">
<h6>February</h6>
</li>
<li class="single-item">
<h6>March</h6>
</li>
<li class="single-item">
<h6>April</h6>
</li>
<li class="single-item">
<h6>May</h6>
</li>
<li class="single-item">
<h6>June</h6>
</li>
<li class="single-item">
<h6>July</h6>
</li>
<li class="single-item">
<h6>August</h6>
</li>
<li class="single-item">
<h6>September</h6>
</li>
<li class="single-item">
<h6>October</h6>
</li>
<li class="single-item">
<h6>November</h6>
</li>
<li class="single-item">
<h6>December</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 d-flex justify-content-center">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1731)">
<path d="M26.4727 15.0783C26.334 15.0783 26.1981 15.1348 26.0998 15.2328C26.0013 15.332 25.9458 15.4659 25.9453 15.6057C25.9453 15.7443 26.0017 15.8804 26.0998 15.9785C26.199 16.077 26.3329 16.1325 26.4727 16.133C26.6115 16.133 26.7474 16.0766 26.8455 15.9785C26.944 15.8794 26.9995 15.7454 27 15.6057C27 15.4665 26.9436 15.3309 26.8455 15.2328C26.7464 15.1343 26.6124 15.0788 26.4727 15.0783Z" />
<path d="M22.9027 6.15386H22.4775V2.97002H23.0675C23.3588 2.97002 23.5949 2.73399 23.5949 2.44268V1.60226C23.5949 0.718746 22.8761 3.05176e-05 21.9926 3.05176e-05H16.4811C15.5978 3.05176e-05 14.879 0.718746 14.879 1.60226V2.44268C14.879 2.73399 15.1151 2.97002 15.4064 2.97002H15.9962V6.15386H15.571C15.0486 6.1537 14.531 6.2534 14.046 6.44759V2.63674C14.046 2.41283 13.9045 2.21324 13.6932 2.13904C13.5665 2.09478 13.4277 2.10045 13.305 2.15491C13.3042 2.15533 13.3034 2.15533 13.3024 2.15575L7.45469 4.78688C7.18912 4.90637 7.07068 5.21867 7.19018 5.48418C7.30962 5.7497 7.62191 5.86835 7.88743 5.7487L10.7903 4.44268L5.2822 9.53855L1.96553 8.41341L3.98451 7.50496C4.25003 7.38552 4.36842 7.07323 4.24898 6.80771C4.12953 6.54219 3.81724 6.42354 3.55167 6.54319L0.31099 8.00124C0.214435 8.0447 0.133195 8.11622 0.077836 8.20648C0.0224775 8.29674 -0.00443615 8.40157 0.000596289 8.50733C0.00562422 8.6131 0.0423852 8.7149 0.106091 8.79948C0.169797 8.88406 0.257496 8.94749 0.357766 8.98152L5.01505 10.5617L6.58452 14.3201C6.63148 14.4325 6.71594 14.5253 6.82353 14.5825C6.93113 14.6397 7.05523 14.6579 7.17473 14.634C7.30092 14.6086 7.41346 14.5379 7.49113 14.4352C7.49234 14.4336 7.49377 14.4321 7.49524 14.4303L9.2851 12.0086L11.474 12.7522V20.7903C11.474 22.9282 13.1203 24.6877 15.2115 24.8706V25.5749C15.2115 26.3606 15.8509 27 16.6366 27C17.4225 27 18.0617 26.3606 18.0617 25.5749V24.8873H20.412V25.5749C20.412 26.3606 21.0512 27 21.8371 27C22.6228 27 23.2622 26.3606 23.2622 25.5749V24.8706C25.3534 24.6877 26.9997 22.9281 26.9997 20.7903V17.7196C26.9997 17.4283 26.7636 17.1922 26.4724 17.1922C26.1811 17.1922 25.945 17.4283 25.945 17.7196V20.7903C25.945 22.4679 24.5803 23.8326 22.9027 23.8326H15.571C13.8934 23.8326 12.5287 22.4677 12.5287 20.7904V13.1104L13.3492 13.3894C13.4285 13.4163 13.5132 13.4239 13.5961 13.4116C13.679 13.3993 13.7577 13.3675 13.8259 13.3187C13.894 13.2699 13.9495 13.2055 13.9878 13.1309C14.026 13.0564 14.046 12.9738 14.046 12.89V7.61802C14.5093 7.3494 15.0354 7.20811 15.571 7.20849H22.9028C24.5804 7.20849 25.9451 8.57325 25.9451 10.2508V13.5854C25.9451 13.8767 26.1812 14.1128 26.4724 14.1128C26.7637 14.1128 26.9998 13.8767 26.9998 13.5854V10.2508C26.9998 7.9917 25.1619 6.1538 22.9028 6.1538L22.9027 6.15386ZM22.2075 24.8873V25.5747C22.2074 25.6729 22.1684 25.7671 22.0989 25.8365C22.0295 25.906 21.9353 25.945 21.8371 25.9451C21.7389 25.945 21.6448 25.9059 21.5753 25.8365C21.5059 25.7671 21.4668 25.6729 21.4667 25.5747V24.8873H22.2075ZM17.007 24.8873V25.5747C17.007 25.7791 16.8409 25.9451 16.6366 25.9451C16.4322 25.9451 16.2662 25.7791 16.2662 25.5747V24.8873H17.007ZM6.54376 10.6993V11.4856L6.03867 10.2755L8.71472 7.79969L6.6593 10.3701C6.58449 10.4635 6.54374 10.5796 6.54376 10.6993ZM7.59844 12.5161V11.4355L8.23679 11.6524L7.59844 12.5161ZM12.9913 12.1538L9.26469 10.8878C9.26348 10.8871 9.26226 10.8869 9.26121 10.8865L7.95234 10.4418L12.9913 4.14046V12.1538ZM15.9335 1.6022C15.9335 1.30019 16.1793 1.05466 16.4811 1.05466H21.9926C22.2946 1.05466 22.5402 1.30019 22.5402 1.6022V1.91529H15.9335V1.6022ZM17.0509 2.97002H21.4228V6.15386H17.0509V2.97002Z" />
<path d="M13.8583 15.6875V19.7184C13.8583 21.1721 15.0411 22.3551 16.495 22.3551H21.9794C23.4332 22.3551 24.6161 21.1721 24.6161 19.7184V15.6875C24.6161 14.8151 23.9064 14.1054 23.034 14.1054H15.4403C14.5679 14.1054 13.8583 14.8151 13.8583 15.6875ZM21.9794 21.3004H16.495C15.6226 21.3004 14.9129 20.5906 14.9129 19.7184V17.7363H20.7246V18.2303C20.7246 18.5214 20.9607 18.7576 21.252 18.7576C21.5432 18.7576 21.7793 18.5214 21.7793 18.2303V17.7363H23.5614V19.7184C23.5614 20.5906 22.8517 21.3004 21.9794 21.3004ZM23.5614 15.6875V16.6816H14.9129V15.6875C14.9129 15.3966 15.1496 15.1601 15.4403 15.1601H23.034C23.3249 15.1601 23.5614 15.3966 23.5614 15.6875ZM5.93329 6.57761C6.07214 6.57761 6.20803 6.52118 6.30612 6.42309C6.4046 6.32394 6.4601 6.19001 6.46063 6.05026C6.46063 5.91104 6.4042 5.77488 6.30612 5.6768C6.20694 5.57842 6.07297 5.52313 5.93329 5.52292C5.79361 5.52321 5.65967 5.57849 5.56045 5.6768C5.46182 5.77611 5.4063 5.91029 5.40594 6.05026C5.40594 6.18895 5.46237 6.32485 5.56045 6.42309C5.65961 6.52157 5.79354 6.57708 5.93329 6.57761ZM5.82882 15.0018C5.22591 15.6047 4.42434 15.9367 3.57179 15.9367C3.42323 15.9367 3.27637 15.9267 3.13156 15.9069C3.07719 15.1414 2.75873 14.3916 2.17654 13.8068C2.09807 13.7246 1.72028 13.3585 1.19463 13.3706C0.953157 13.3756 0.596409 13.4629 0.268612 13.8521C-0.232365 14.4468 0.0731782 15.2516 0.568776 15.7474C0.988594 16.1672 1.48071 16.4884 2.01713 16.6991C1.91796 17.0938 1.71339 17.4541 1.42529 17.7415C1.1408 18.0264 0.785255 18.2299 0.395543 18.331C0.113731 18.4039 -0.0560211 18.6915 0.0169106 18.9735C0.0782934 19.2112 0.292553 19.369 0.527168 19.369C0.571778 19.369 0.616212 19.3634 0.659426 19.3524C1.23145 19.2039 1.7534 18.9053 2.17122 18.4873C2.60875 18.0497 2.89816 17.5191 3.03922 16.9587C3.21588 16.9806 3.39372 16.9915 3.57174 16.9914C4.70595 16.9914 5.7726 16.5498 6.57475 15.7476C6.78052 15.5417 6.78052 15.2077 6.57475 15.0018C6.36877 14.7959 6.0348 14.7959 5.82882 15.0018ZM1.3147 15.0019C1.18819 14.875 1.02219 14.5949 1.07555 14.5315C1.12971 14.467 1.18308 14.4264 1.21477 14.4252H1.21725C1.27162 14.4252 1.36454 14.4859 1.41089 14.5323C1.41727 14.5395 1.41669 14.5384 1.42529 14.5471C1.69724 14.8183 1.89506 15.1548 1.99983 15.5244C1.749 15.3818 1.51855 15.2061 1.3147 15.0019ZM21.1993 10.9161C21.1993 9.83417 20.3191 8.95398 19.2372 8.95398C18.1553 8.95398 17.2751 9.83417 17.2751 10.9161C17.2751 11.998 18.1553 12.8782 19.2372 12.8782C20.3191 12.8782 21.1993 11.998 21.1993 10.9161ZM18.3298 10.9161C18.3298 10.4157 18.7368 10.0087 19.2372 10.0087C19.7375 10.0087 20.1446 10.4157 20.1446 10.9161C20.1446 11.4164 19.7375 11.8235 19.2372 11.8235C18.7368 11.8235 18.3298 11.4164 18.3298 10.9161Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Tour Duration</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="duration" placeholder="Select Duration">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>1 Week</h6>
</li>
<li class="single-item">
<h6>3 Days / 4 Night</h6>
</li>
<li class="single-item">
<h6>4 Days / 5 Night</h6>
</li>
<li class="single-item">
<h6>4 Days / 5 Night</h6>
</li>
<li class="single-item">
<h6>7 Days / 8 Night</h6>
</li>
<li class="single-item">
<h6>5 Days / 6 Night</h6>
</li>
<li class="single-item">
<h6>4 Days / 5 Night</h6>
</li>
<li class="single-item">
<h6>4 Days / 5 Night</h6>
</li>
<li class="single-item">
<h6>2 Days / 3 Night</h6>
</li>
<li class="single-item">
<h6>4 Days / 5 Night</h6>
</li>
<li class="single-item">
<h6>3 Days / 4 Night</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit">Search</button>
</form> </div>
<div class="tab-pane fade" id="hotel" role="tabpanel">
<form method="get" action="https://triprex.egenslab.com/hotel/" id="hotel-query-form" onsubmit="handleFormSubmit(event)">
<div class="filter-area">
<div class="row g-xl-4 gy-4">
<div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<path d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
<path d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
</svg>
</div>
<div class="searchbox-input">
<label>Location</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="location" placeholder="Select Location">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Type Your Destination">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>KIGALI</h6>
</div>
</li>
<li>
<div class="destination">
<h6>MUSANZE</h6>
</div>
</li>
<li>
<div class="destination">
<h6>KIBUYE</h6>
</div>
</li>
<li>
<div class="destination">
<h6>GISENYI</h6>
</div>
</li>
<li>
<div class="destination">
<h6>NYANZA</h6>
</div>
</li>
<!--<li>
<div class="destination">
<h6>Thailand</h6>
</div>
</li>-->
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g clip-path="url(#clip0_2037_326)">
<path d="M15.5978 13.5309L12.391 11.1258V6.22655C12.391 5.73394 11.9928 5.33575 11.5002 5.33575C11.0076 5.33575 10.6094 5.73394 10.6094 6.22655V11.5713C10.6094 11.8519 10.7412 12.1164 10.9657 12.2839L14.5288 14.9563C14.6826 15.0721 14.8699 15.1346 15.0624 15.1344C15.3341 15.1344 15.6013 15.0124 15.7759 14.7772C16.0717 14.3843 15.9916 13.8258 15.5978 13.5309Z" />
<path d="M11.5 0C5.15851 0 0 5.15851 0 11.5C0 17.8415 5.15851 23 11.5 23C17.8415 23 23 17.8415 23 11.5C23 5.15851 17.8415 0 11.5 0ZM11.5 21.2184C6.14194 21.2184 1.78156 16.8581 1.78156 11.5C1.78156 6.14194 6.14194 1.78156 11.5 1.78156C16.859 1.78156 21.2184 6.14194 21.2184 11.5C21.2184 16.8581 16.8581 21.2184 11.5 21.2184Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Check in - Check out</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="daterange" readonly>
<i class="bi bi-chevron-down"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g clip-path="url(#clip0_2037_310)">
<path d="M23.5312 13.403C23.408 13.403 23.2872 13.4531 23.1998 13.5403C23.1123 13.6284 23.0629 13.7475 23.0625 13.8717C23.0625 13.9949 23.1127 14.1159 23.1998 14.2031C23.288 14.2906 23.407 14.34 23.5312 14.3405C23.6547 14.3405 23.7755 14.2903 23.8627 14.2031C23.9502 14.115 23.9996 13.9959 24 13.8717C24 13.748 23.9498 13.6274 23.8627 13.5403C23.7746 13.4527 23.6555 13.4034 23.5312 13.403Z" />
<path d="M20.358 5.47013H19.98V2.64006H20.5045C20.7633 2.64006 20.9732 2.43024 20.9732 2.17131V1.42426C20.9732 0.638919 20.3343 6.10352e-05 19.549 6.10352e-05H14.6498C13.8647 6.10352e-05 13.2258 0.638919 13.2258 1.42426V2.17131C13.2258 2.43024 13.4357 2.64006 13.6946 2.64006H14.2188V5.47013H13.8409C13.3765 5.46999 12.9164 5.55861 12.4853 5.73122V2.34381C12.4853 2.14478 12.3596 1.96735 12.1717 1.9014C12.0591 1.86206 11.9357 1.8671 11.8267 1.91551C11.826 1.91589 11.8253 1.91589 11.8243 1.91626L6.62639 4.25504C6.39033 4.36126 6.28505 4.63885 6.39127 4.87486C6.49744 5.11088 6.77503 5.21635 7.01105 5.10999L9.59137 3.94908L4.69529 8.47875L1.74714 7.47862L3.54179 6.67111C3.7778 6.56494 3.88304 6.28734 3.77687 6.05133C3.67069 5.81531 3.3931 5.70985 3.15704 5.81621L0.276436 7.11225C0.190609 7.15088 0.118395 7.21445 0.0691876 7.29468C0.01998 7.37491 -0.00394324 7.4681 0.000530035 7.56211C0.00499931 7.65612 0.0376757 7.74661 0.0943034 7.82179C0.150931 7.89697 0.228885 7.95336 0.318014 7.98361L4.45782 9.38821L5.85291 12.729C5.89465 12.829 5.96972 12.9114 6.06536 12.9622C6.161 13.0131 6.27131 13.0293 6.37753 13.008C6.48971 12.9854 6.58975 12.9226 6.65878 12.8313C6.65986 12.8299 6.66113 12.8286 6.66244 12.827L8.25342 10.6744L10.1991 11.3354V18.4803C10.1991 20.3806 11.6625 21.9446 13.5214 22.1073V22.7333C13.5214 23.4317 14.0897 24 14.7881 24C15.4866 24 16.0548 23.4317 16.0548 22.7333V22.1221H18.144V22.7333C18.144 23.4317 18.7122 24 19.4108 24C20.1091 24 20.6775 23.4317 20.6775 22.7333V22.1072C22.5363 21.9446 23.9997 20.3806 23.9997 18.4803V15.7508C23.9997 15.4918 23.7899 15.282 23.531 15.282C23.2721 15.282 23.0622 15.4918 23.0622 15.7508V18.4803C23.0622 19.9715 21.8492 21.1846 20.358 21.1846H13.8409C12.3497 21.1846 11.1366 19.9713 11.1366 18.4804V11.6537L11.8659 11.9017C11.9365 11.9256 12.0117 11.9324 12.0854 11.9215C12.1591 11.9105 12.2291 11.8822 12.2897 11.8389C12.3502 11.7955 12.3995 11.7383 12.4336 11.672C12.4676 11.6057 12.4853 11.5323 12.4853 11.4578V6.77161C12.8972 6.53283 13.3648 6.40724 13.8409 6.40758H20.358C21.8492 6.40758 23.0623 7.6207 23.0623 9.11189V12.076C23.0623 12.3349 23.2721 12.5447 23.531 12.5447C23.7899 12.5447 23.9998 12.3349 23.9998 12.076V9.11189C23.9998 7.10377 22.3661 5.47008 20.358 5.47008L20.358 5.47013ZM19.74 22.1221V22.7331C19.7399 22.8204 19.7052 22.9041 19.6435 22.9658C19.5818 23.0276 19.4981 23.0623 19.4108 23.0623C19.3235 23.0622 19.2398 23.0275 19.1781 22.9658C19.1163 22.9041 19.0816 22.8204 19.0815 22.7331V22.1221H19.74ZM15.1173 22.1221V22.7331C15.1173 22.9148 14.9697 23.0623 14.7881 23.0623C14.6064 23.0623 14.4589 22.9148 14.4589 22.7331V22.1221H15.1173ZM5.81667 9.51051V10.2094L5.36771 9.13382L7.74642 6.93309L5.91938 9.21787C5.85288 9.30091 5.81666 9.40413 5.81667 9.51051ZM6.75417 11.1255V10.1649L7.32159 10.3577L6.75417 11.1255ZM11.5478 10.8034L8.23528 9.67804C8.2342 9.67748 8.23312 9.67729 8.23219 9.67692L7.06875 9.28162L11.5478 3.68044V10.8034ZM14.1631 1.42421C14.1631 1.15576 14.3816 0.937512 14.6498 0.937512H19.549C19.8174 0.937512 20.0357 1.15576 20.0357 1.42421V1.70251H14.1631V1.42421ZM15.1563 2.64006H19.0425V5.47013H15.1563V2.64006Z" />
<path d="M12.3185 13.9444V17.5274C12.3185 18.8196 13.3699 19.8712 14.6622 19.8712H19.5372C20.8295 19.8712 21.881 18.8196 21.881 17.5274V13.9444C21.881 13.169 21.2502 12.5381 20.4747 12.5381H13.7247C12.9493 12.5381 12.3185 13.169 12.3185 13.9444ZM19.5372 18.9337H14.6622C13.8868 18.9337 13.256 18.3027 13.256 17.5274V15.7656H18.4219V16.2047C18.4219 16.4634 18.6318 16.6734 18.8907 16.6734C19.1495 16.6734 19.3594 16.4634 19.3594 16.2047V15.7656H20.9435V17.5274C20.9435 18.3027 20.3127 18.9337 19.5372 18.9337ZM20.9435 13.9444V14.8281H13.256V13.9444C13.256 13.6859 13.4663 13.4756 13.7247 13.4756H20.4747C20.7333 13.4756 20.9435 13.6859 20.9435 13.9444ZM5.27403 5.84674C5.39745 5.84674 5.51825 5.79658 5.60544 5.7094C5.69298 5.62126 5.74231 5.50221 5.74278 5.37799C5.74278 5.25424 5.69263 5.13321 5.60544 5.04602C5.51728 4.95858 5.3982 4.90943 5.27403 4.90924C5.14988 4.9095 5.03082 4.95864 4.94263 5.04602C4.85495 5.1343 4.8056 5.25357 4.80528 5.37799C4.80528 5.50127 4.85544 5.62207 4.94263 5.7094C5.03076 5.79693 5.14981 5.84627 5.27403 5.84674ZM5.18117 13.3349C4.64525 13.8708 3.93275 14.166 3.17492 14.166C3.04288 14.166 2.91233 14.157 2.78361 14.1394C2.73528 13.459 2.4522 12.7925 1.9347 12.2726C1.86495 12.1996 1.52914 11.8742 1.06189 11.885C0.84725 11.8894 0.530141 11.967 0.238766 12.313C-0.206547 12.8416 0.0650473 13.557 0.505579 13.9977C0.87875 14.3709 1.31619 14.6563 1.793 14.8436C1.70486 15.1945 1.52302 15.5147 1.26692 15.7702C1.01405 16.0234 0.698004 16.2044 0.351594 16.2942C0.101094 16.359 -0.0497965 16.6146 0.0150316 16.8653C0.0695941 17.0766 0.260047 17.2169 0.468594 17.2169C0.508247 17.2169 0.547744 17.2119 0.586157 17.2021C1.09462 17.0701 1.55858 16.8047 1.92997 16.4332C2.31889 16.0441 2.57614 15.5726 2.70153 15.0744C2.85856 15.0938 3.01664 15.1036 3.17488 15.1035C4.18306 15.1035 5.1312 14.7109 5.84422 13.9979C6.02713 13.8148 6.02713 13.518 5.84422 13.3349C5.66113 13.1519 5.36427 13.1519 5.18117 13.3349ZM1.16863 13.335C1.05617 13.2222 0.90861 12.9732 0.956047 12.9168C1.00419 12.8595 1.05163 12.8234 1.0798 12.8223H1.082C1.13033 12.8223 1.21292 12.8763 1.25413 12.9176C1.2598 12.924 1.25928 12.923 1.26692 12.9307C1.50866 13.1718 1.6845 13.4709 1.77763 13.7994C1.55467 13.6727 1.34982 13.5165 1.16863 13.335ZM18.8438 9.70315C18.8438 8.74146 18.0614 7.95907 17.0997 7.95907C16.138 7.95907 15.3556 8.74146 15.3556 9.70315C15.3556 10.6648 16.138 11.4472 17.0997 11.4472C18.0614 11.4472 18.8438 10.6648 18.8438 9.70315ZM16.2931 9.70315C16.2931 9.2584 16.655 8.89657 17.0997 8.89657C17.5445 8.89657 17.9063 9.2584 17.9063 9.70315C17.9063 10.1479 17.5445 10.5097 17.0997 10.5097C16.655 10.5097 16.2931 10.1479 16.2931 9.70315Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Room</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="room_type" placeholder="Room Type">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Search Your Room Type">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>Sea View,Semi Double</h6> </div>
</li>
<li>
<div class="destination">
<h6>Family Room,Quin Mordern Room,Semi Double</h6> </div>
</li>
<li>
<div class="destination">
<h6>Couple Room,Family Room</h6> </div>
</li>
<li>
<div class="destination">
<h6>Deluxe King Room,Quin Mordern Room,Sea View</h6> </div>
</li>
<li>
<div class="destination">
<h6>Family Room,Sea View,Semi Double</h6> </div>
</li>
<li>
<div class="destination">
<h6>Sea View,Semi Double</h6> </div>
</li>
<li>
<div class="destination">
<h6>Deluxe King Room,Quin Mordern Room</h6> </div>
</li>
<li>
<div class="destination">
<h6>Couple Room,Family Room,Quin Mordern Room</h6> </div>
</li>
<li>
<div class="destination">
<h6>Deluxe King Room,Quin Mordern Room</h6> </div>
</li>
<li>
<div class="destination">
<h6>Quin Mordern Room,Semi Double</h6> </div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 d-flex justify-content-center">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1754)">
<path d="M13.3207 14.07C13.4615 14.163 13.6265 14.2126 13.7952 14.2127C14.0765 14.2127 14.3521 14.0761 14.5173 13.8238C14.7799 13.4251 14.6699 12.8893 14.2712 12.6268C12.4344 11.4175 11.4549 10.0781 11.189 8.413C11.0664 7.63051 11.2293 6.44276 11.8788 5.68373C12.3 5.19189 12.8555 4.95227 13.5776 4.95227C14.9937 4.95227 15.5731 5.95799 15.7926 6.55698C16.3228 8.00211 15.8852 9.80108 14.7761 10.7403C14.4116 11.0492 14.3666 11.5944 14.6745 11.958C14.9834 12.323 15.5281 12.3679 15.8922 12.0596C17.5541 10.6528 18.1943 8.0887 17.415 5.96263C16.787 4.2484 15.3522 3.22491 13.5775 3.22491C12.3552 3.22491 11.3134 3.6868 10.5651 4.56052C9.4864 5.82268 9.30716 7.56876 9.48218 8.68299C9.93995 11.5476 11.8924 13.1293 13.3207 14.07Z" />
<path d="M20.1255 22.0477H7.78708C7.81845 18.178 8.05759 17.0286 8.16475 16.7076C8.40062 16.0014 9.36979 15.275 10.2183 14.8006C10.9848 16.008 12.2021 16.7277 13.555 16.7277H13.5555C14.893 16.7272 16.0999 16.008 16.8628 14.801C17.7112 15.2756 18.679 16.0019 18.9144 16.7072C19.2186 17.6211 19.2013 18.9062 19.1873 19.9386C19.1845 20.1506 19.1816 20.3528 19.1816 20.5404C19.1816 21.0178 19.5682 21.4044 20.0455 21.4044C20.5229 21.4044 20.9095 21.0178 20.9095 20.5404C20.9095 20.3603 20.9123 20.166 20.915 19.962C20.9314 18.7991 20.9515 17.3521 20.5538 16.1601C19.9014 14.2048 17.1333 12.9862 16.8197 12.8538C16.714 12.8088 16.6003 12.7854 16.4853 12.7851C16.3704 12.7848 16.2565 12.8075 16.1505 12.8519C16.0445 12.8962 15.9485 12.9613 15.8679 13.0431C15.7873 13.125 15.7238 13.2221 15.6811 13.3287C15.2628 14.3747 14.4681 14.9995 13.5555 14.9995H13.5551C12.6378 14.9995 11.8123 14.3592 11.3995 13.3287C11.3568 13.2221 11.2933 13.125 11.2128 13.0431C11.1322 12.9613 11.0361 12.8963 10.9301 12.8519C10.8241 12.8076 10.7103 12.7849 10.5953 12.7853C10.4804 12.7856 10.3667 12.8089 10.2609 12.8538C9.94784 12.9862 7.17923 14.2044 6.52593 16.1606C6.21422 17.0965 6.05655 19.3681 6.05655 22.9113C6.05655 23.3886 6.44313 23.7752 6.92047 23.7752H20.1261C20.603 23.7752 20.9896 23.3891 20.9896 22.9118C20.9895 22.4343 20.6029 22.0477 20.1255 22.0477ZM5.3695 13.815C4.171 13.815 3.19618 12.5608 3.19618 11.0197C3.19618 9.48001 4.171 8.22724 5.3695 8.22724C5.98304 8.22724 6.59094 8.58197 6.95596 9.15243C7.22315 9.57034 7.58495 10.459 7.00463 11.7166C6.80478 12.1499 6.99387 12.6628 7.42723 12.8631C7.86106 13.0625 8.37352 12.8739 8.57332 12.4405C9.24909 10.9762 9.18966 9.43888 8.41048 8.22118C7.72069 7.14343 6.58393 6.49993 5.36903 6.49993C3.21817 6.49993 1.46835 8.52724 1.46835 11.0197C1.46835 13.5136 3.21817 15.5423 5.36903 15.5423C5.84636 15.5423 6.23342 15.1562 6.23342 14.6789C6.23337 14.2015 5.84684 13.815 5.3695 13.815ZM4.27767 21.2255H1.75991C1.7983 20.3701 1.87597 19.0981 2.01682 18.3503C2.19933 17.374 2.72444 16.8232 3.13296 16.533C3.52281 16.2569 3.61404 15.7178 3.33745 15.3289C3.06135 14.939 2.52268 14.8473 2.13331 15.1244C1.58578 15.5128 0.621729 16.4076 0.318939 18.0315C0.0680901 19.3639 0.00307088 21.9584 0.000223323 22.0679C-0.00239217 22.1831 0.0179889 22.2976 0.060174 22.4048C0.102359 22.512 0.165501 22.6097 0.245904 22.6922C0.326391 22.7746 0.422553 22.8401 0.528728 22.8848C0.634904 22.9294 0.748946 22.9524 0.86414 22.9524H4.27762C4.75496 22.9524 5.14154 22.5667 5.14154 22.0894C5.14159 21.6121 4.75501 21.2255 4.27767 21.2255ZM25.5327 11.0187C25.5327 8.52623 23.7829 6.49893 21.632 6.49893C20.4166 6.49893 19.2794 7.14195 18.5892 8.2197C17.81 9.43692 17.7501 10.9747 18.4249 12.439C18.6248 12.8719 19.1381 13.0619 19.571 12.8621C20.0039 12.6623 20.1939 12.1494 19.9941 11.716C19.4138 10.4581 19.7764 9.56986 20.0437 9.15191C20.4092 8.58144 21.0171 8.22671 21.6316 8.22671C22.8301 8.22671 23.8049 9.47953 23.8049 11.0192C23.8049 12.5602 22.8301 13.8145 21.6316 13.8145C21.1542 13.8145 20.7677 14.201 20.7677 14.6784C20.7677 15.1557 21.1542 15.5423 21.6316 15.5423C23.7819 15.5423 25.5322 13.5136 25.5327 11.0187ZM26.6811 18.0334C26.39 16.4624 25.4746 15.5769 24.9552 15.1894C24.5728 14.9049 24.0313 14.9825 23.7459 15.3649C23.4609 15.7473 23.5395 16.2892 23.9214 16.5742C24.3093 16.8634 24.8078 17.4053 24.9828 18.3511C25.1236 19.098 25.2013 20.3695 25.2397 21.2245H22.7215C22.2441 21.2245 21.8575 21.6111 21.8575 22.0885C21.8575 22.5658 22.2441 22.9524 22.7215 22.9524H26.1359C26.3685 22.9524 26.5912 22.8588 26.7545 22.6917C26.8349 22.6092 26.8979 22.5115 26.94 22.4043C26.9821 22.2971 27.0024 22.1826 26.9997 22.0674C26.997 21.9579 26.9324 19.3629 26.6811 18.0334Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Guest</label>
<div class="custom-select-dropdown">
<div class="select-input">
<h6><span id="adult-qty">1</span> Person</h6>
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="guest-count">
<li class="single-item">
<div class="title">
<h6>Person</h6>
</div>
<div class="quantity-counter">
<a href="#" data-type="adult" class="guest-quantity__minus"><i class="bi bi-dash"></i></a>
<input name="person_quantity" type="text" class="quantity__input" value="1">
<a href="#" data-type="adult" class="guest-quantity__plus"><i class="bi bi-plus"></i></a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit">Search</button>
</form> </div>
<div class="tab-pane fade" id="visa" role="tabpanel">
<form method="get" action="https://triprex.egenslab.com/visa/" id="tour-query-form" onsubmit="handleFormSubmit(event)">
<div class="filter-area">
<div class="row g-xl-4 gy-4">
<div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<path d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
<path d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
</svg>
</div>
<div class="searchbox-input">
<label>Country</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="country" value="Select Country">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Type Your Destination">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>Rwanda</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Tanzania</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Kenya</h6>
</div>
</li>
<!--<li>
<div class="destination">
<h6>Nepal</h6>
</div>
</li>
<li>
<div class="destination">
<h6>New York</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Spain</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Turkey</h6>
</div>
</li>-->
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1731)">
<path d="M26.4727 15.0783C26.334 15.0783 26.1981 15.1348 26.0998 15.2328C26.0013 15.332 25.9458 15.4659 25.9453 15.6057C25.9453 15.7443 26.0017 15.8804 26.0998 15.9785C26.199 16.077 26.3329 16.1325 26.4727 16.133C26.6115 16.133 26.7474 16.0766 26.8455 15.9785C26.944 15.8794 26.9995 15.7454 27 15.6057C27 15.4665 26.9436 15.3309 26.8455 15.2328C26.7464 15.1343 26.6124 15.0788 26.4727 15.0783Z" />
<path d="M22.9027 6.15386H22.4775V2.97002H23.0675C23.3588 2.97002 23.5949 2.73399 23.5949 2.44268V1.60226C23.5949 0.718746 22.8761 3.05176e-05 21.9926 3.05176e-05H16.4811C15.5978 3.05176e-05 14.879 0.718746 14.879 1.60226V2.44268C14.879 2.73399 15.1151 2.97002 15.4064 2.97002H15.9962V6.15386H15.571C15.0486 6.1537 14.531 6.2534 14.046 6.44759V2.63674C14.046 2.41283 13.9045 2.21324 13.6932 2.13904C13.5665 2.09478 13.4277 2.10045 13.305 2.15491C13.3042 2.15533 13.3034 2.15533 13.3024 2.15575L7.45469 4.78688C7.18912 4.90637 7.07068 5.21867 7.19018 5.48418C7.30962 5.7497 7.62191 5.86835 7.88743 5.7487L10.7903 4.44268L5.2822 9.53855L1.96553 8.41341L3.98451 7.50496C4.25003 7.38552 4.36842 7.07323 4.24898 6.80771C4.12953 6.54219 3.81724 6.42354 3.55167 6.54319L0.31099 8.00124C0.214435 8.0447 0.133195 8.11622 0.077836 8.20648C0.0224775 8.29674 -0.00443615 8.40157 0.000596289 8.50733C0.00562422 8.6131 0.0423852 8.7149 0.106091 8.79948C0.169797 8.88406 0.257496 8.94749 0.357766 8.98152L5.01505 10.5617L6.58452 14.3201C6.63148 14.4325 6.71594 14.5253 6.82353 14.5825C6.93113 14.6397 7.05523 14.6579 7.17473 14.634C7.30092 14.6086 7.41346 14.5379 7.49113 14.4352C7.49234 14.4336 7.49377 14.4321 7.49524 14.4303L9.2851 12.0086L11.474 12.7522V20.7903C11.474 22.9282 13.1203 24.6877 15.2115 24.8706V25.5749C15.2115 26.3606 15.8509 27 16.6366 27C17.4225 27 18.0617 26.3606 18.0617 25.5749V24.8873H20.412V25.5749C20.412 26.3606 21.0512 27 21.8371 27C22.6228 27 23.2622 26.3606 23.2622 25.5749V24.8706C25.3534 24.6877 26.9997 22.9281 26.9997 20.7903V17.7196C26.9997 17.4283 26.7636 17.1922 26.4724 17.1922C26.1811 17.1922 25.945 17.4283 25.945 17.7196V20.7903C25.945 22.4679 24.5803 23.8326 22.9027 23.8326H15.571C13.8934 23.8326 12.5287 22.4677 12.5287 20.7904V13.1104L13.3492 13.3894C13.4285 13.4163 13.5132 13.4239 13.5961 13.4116C13.679 13.3993 13.7577 13.3675 13.8259 13.3187C13.894 13.2699 13.9495 13.2055 13.9878 13.1309C14.026 13.0564 14.046 12.9738 14.046 12.89V7.61802C14.5093 7.3494 15.0354 7.20811 15.571 7.20849H22.9028C24.5804 7.20849 25.9451 8.57325 25.9451 10.2508V13.5854C25.9451 13.8767 26.1812 14.1128 26.4724 14.1128C26.7637 14.1128 26.9998 13.8767 26.9998 13.5854V10.2508C26.9998 7.9917 25.1619 6.1538 22.9028 6.1538L22.9027 6.15386ZM22.2075 24.8873V25.5747C22.2074 25.6729 22.1684 25.7671 22.0989 25.8365C22.0295 25.906 21.9353 25.945 21.8371 25.9451C21.7389 25.945 21.6448 25.9059 21.5753 25.8365C21.5059 25.7671 21.4668 25.6729 21.4667 25.5747V24.8873H22.2075ZM17.007 24.8873V25.5747C17.007 25.7791 16.8409 25.9451 16.6366 25.9451C16.4322 25.9451 16.2662 25.7791 16.2662 25.5747V24.8873H17.007ZM6.54376 10.6993V11.4856L6.03867 10.2755L8.71472 7.79969L6.6593 10.3701C6.58449 10.4635 6.54374 10.5796 6.54376 10.6993ZM7.59844 12.5161V11.4355L8.23679 11.6524L7.59844 12.5161ZM12.9913 12.1538L9.26469 10.8878C9.26348 10.8871 9.26226 10.8869 9.26121 10.8865L7.95234 10.4418L12.9913 4.14046V12.1538ZM15.9335 1.6022C15.9335 1.30019 16.1793 1.05466 16.4811 1.05466H21.9926C22.2946 1.05466 22.5402 1.30019 22.5402 1.6022V1.91529H15.9335V1.6022ZM17.0509 2.97002H21.4228V6.15386H17.0509V2.97002Z" />
<path d="M13.8583 15.6875V19.7184C13.8583 21.1721 15.0411 22.3551 16.495 22.3551H21.9794C23.4332 22.3551 24.6161 21.1721 24.6161 19.7184V15.6875C24.6161 14.8151 23.9064 14.1054 23.034 14.1054H15.4403C14.5679 14.1054 13.8583 14.8151 13.8583 15.6875ZM21.9794 21.3004H16.495C15.6226 21.3004 14.9129 20.5906 14.9129 19.7184V17.7363H20.7246V18.2303C20.7246 18.5214 20.9607 18.7576 21.252 18.7576C21.5432 18.7576 21.7793 18.5214 21.7793 18.2303V17.7363H23.5614V19.7184C23.5614 20.5906 22.8517 21.3004 21.9794 21.3004ZM23.5614 15.6875V16.6816H14.9129V15.6875C14.9129 15.3966 15.1496 15.1601 15.4403 15.1601H23.034C23.3249 15.1601 23.5614 15.3966 23.5614 15.6875ZM5.93329 6.57761C6.07214 6.57761 6.20803 6.52118 6.30612 6.42309C6.4046 6.32394 6.4601 6.19001 6.46063 6.05026C6.46063 5.91104 6.4042 5.77488 6.30612 5.6768C6.20694 5.57842 6.07297 5.52313 5.93329 5.52292C5.79361 5.52321 5.65967 5.57849 5.56045 5.6768C5.46182 5.77611 5.4063 5.91029 5.40594 6.05026C5.40594 6.18895 5.46237 6.32485 5.56045 6.42309C5.65961 6.52157 5.79354 6.57708 5.93329 6.57761ZM5.82882 15.0018C5.22591 15.6047 4.42434 15.9367 3.57179 15.9367C3.42323 15.9367 3.27637 15.9267 3.13156 15.9069C3.07719 15.1414 2.75873 14.3916 2.17654 13.8068C2.09807 13.7246 1.72028 13.3585 1.19463 13.3706C0.953157 13.3756 0.596409 13.4629 0.268612 13.8521C-0.232365 14.4468 0.0731782 15.2516 0.568776 15.7474C0.988594 16.1672 1.48071 16.4884 2.01713 16.6991C1.91796 17.0938 1.71339 17.4541 1.42529 17.7415C1.1408 18.0264 0.785255 18.2299 0.395543 18.331C0.113731 18.4039 -0.0560211 18.6915 0.0169106 18.9735C0.0782934 19.2112 0.292553 19.369 0.527168 19.369C0.571778 19.369 0.616212 19.3634 0.659426 19.3524C1.23145 19.2039 1.7534 18.9053 2.17122 18.4873C2.60875 18.0497 2.89816 17.5191 3.03922 16.9587C3.21588 16.9806 3.39372 16.9915 3.57174 16.9914C4.70595 16.9914 5.7726 16.5498 6.57475 15.7476C6.78052 15.5417 6.78052 15.2077 6.57475 15.0018C6.36877 14.7959 6.0348 14.7959 5.82882 15.0018ZM1.3147 15.0019C1.18819 14.875 1.02219 14.5949 1.07555 14.5315C1.12971 14.467 1.18308 14.4264 1.21477 14.4252H1.21725C1.27162 14.4252 1.36454 14.4859 1.41089 14.5323C1.41727 14.5395 1.41669 14.5384 1.42529 14.5471C1.69724 14.8183 1.89506 15.1548 1.99983 15.5244C1.749 15.3818 1.51855 15.2061 1.3147 15.0019ZM21.1993 10.9161C21.1993 9.83417 20.3191 8.95398 19.2372 8.95398C18.1553 8.95398 17.2751 9.83417 17.2751 10.9161C17.2751 11.998 18.1553 12.8782 19.2372 12.8782C20.3191 12.8782 21.1993 11.998 21.1993 10.9161ZM18.3298 10.9161C18.3298 10.4157 18.7368 10.0087 19.2372 10.0087C19.7375 10.0087 20.1446 10.4157 20.1446 10.9161C20.1446 11.4164 19.7375 11.8235 19.2372 11.8235C18.7368 11.8235 18.3298 11.4164 18.3298 10.9161Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Visa Type</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="visa_type" value="Select Visa Type">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>Diplomat</h6>
</li>
<li class="single-item">
<h6>Medical</h6>
</li>
<li class="single-item">
<h6>Tourist</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
<g clip-path="url(#clip0_2037_411)">
<path d="M15.5978 13.531L12.391 11.1259V6.22659C12.391 5.73397 11.9928 5.33578 11.5002 5.33578C11.0076 5.33578 10.6094 5.73397 10.6094 6.22659V11.5713C10.6094 11.8519 10.7412 12.1165 10.9657 12.2839L14.5288 14.9563C14.6826 15.0721 14.8699 15.1346 15.0624 15.1345C15.3341 15.1345 15.6013 15.0124 15.7759 14.7772C16.0717 14.3844 15.9916 13.8258 15.5978 13.531Z" />
<path d="M11.5 0C5.15851 0 0 5.15851 0 11.5C0 17.8415 5.15851 23 11.5 23C17.8415 23 23 17.8415 23 11.5C23 5.15851 17.8415 0 11.5 0ZM11.5 21.2184C6.14194 21.2184 1.78156 16.8581 1.78156 11.5C1.78156 6.14194 6.14194 1.78156 11.5 1.78156C16.859 1.78156 21.2184 6.14194 21.2184 11.5C21.2184 16.8581 16.8581 21.2184 11.5 21.2184Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Nationality</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="nationality" value="Select Nationality">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>Afghan</h6>
</li>
<li class="single-item">
<h6>Alandish</h6>
</li>
<li class="single-item">
<h6>Albanian</h6>
</li>
<li class="single-item">
<h6>Algerian</h6>
</li>
<li class="single-item">
<h6>American Samoan</h6>
</li>
<li class="single-item">
<h6>Andorran</h6>
</li>
<li class="single-item">
<h6>Angolan</h6>
</li>
<li class="single-item">
<h6>Anguillan</h6>
</li>
<li class="single-item">
<h6>Antarctican</h6>
</li>
<li class="single-item">
<h6>Antiguan and Barbudan</h6>
</li>
<li class="single-item">
<h6>Argentinian</h6>
</li>
<li class="single-item">
<h6>Armenian</h6>
</li>
<li class="single-item">
<h6>Aruban</h6>
</li>
<li class="single-item">
<h6>Australian</h6>
</li>
<li class="single-item">
<h6>Austrian</h6>
</li>
<li class="single-item">
<h6>Azerbaijani</h6>
</li>
<li class="single-item">
<h6>Bahamian</h6>
</li>
<li class="single-item">
<h6>Bahraini</h6>
</li>
<li class="single-item">
<h6>Bangladeshi</h6>
</li>
<li class="single-item">
<h6>Barbadian</h6>
</li>
<li class="single-item">
<h6>Belarusian</h6>
</li>
<li class="single-item">
<h6>Belgian</h6>
</li>
<li class="single-item">
<h6>Belizean</h6>
</li>
<li class="single-item">
<h6>Beninese</h6>
</li>
<li class="single-item">
<h6>Bermudian</h6>
</li>
<li class="single-item">
<h6>Bhutanese</h6>
</li>
<li class="single-item">
<h6>Bolivian</h6>
</li>
<li class="single-item">
<h6>Bonairean</h6>
</li>
<li class="single-item">
<h6>Bosnian and Herzegovinian</h6>
</li>
<li class="single-item">
<h6>Motswana</h6>
</li>
<li class="single-item">
<h6>Bouvetian</h6>
</li>
<li class="single-item">
<h6>Brazilian</h6>
</li>
<li class="single-item">
<h6>British Indian Ocean Territory</h6>
</li>
<li class="single-item">
<h6>Bruneian</h6>
</li>
<li class="single-item">
<h6>Bulgarian</h6>
</li>
<li class="single-item">
<h6>Burkinabé</h6>
</li>
<li class="single-item">
<h6>Burundian</h6>
</li>
<li class="single-item">
<h6>Cambodian</h6>
</li>
<li class="single-item">
<h6>Cameroonian</h6>
</li>
<li class="single-item">
<h6>Canadian</h6>
</li>
<li class="single-item">
<h6>Cape Verdean</h6>
</li>
<li class="single-item">
<h6>Caymanian</h6>
</li>
<li class="single-item">
<h6>Central African</h6>
</li>
<li class="single-item">
<h6>Chadian</h6>
</li>
<li class="single-item">
<h6>Chilean</h6>
</li>
<li class="single-item">
<h6>Chinese</h6>
</li>
<li class="single-item">
<h6>Christmas Island</h6>
</li>
<li class="single-item">
<h6>Cocos Islander</h6>
</li>
<li class="single-item">
<h6>Colombian</h6>
</li>
<li class="single-item">
<h6>Comoran</h6>
</li>
<li class="single-item">
<h6>Congolese</h6>
</li>
<li class="single-item">
<h6>Democratic Republic of the Congo</h6>
</li>
<li class="single-item">
<h6>Cook Islander</h6>
</li>
<li class="single-item">
<h6>Costa Rican</h6>
</li>
<li class="single-item">
<h6>Ivorian</h6>
</li>
<li class="single-item">
<h6>Croatian</h6>
</li>
<li class="single-item">
<h6>Cuban</h6>
</li>
<li class="single-item">
<h6>Curaçaoan</h6>
</li>
<li class="single-item">
<h6>Cypriot</h6>
</li>
<li class="single-item">
<h6>Czech</h6>
</li>
<li class="single-item">
<h6>Danish</h6>
</li>
<li class="single-item">
<h6>Djiboutian</h6>
</li>
<li class="single-item">
<h6>Dominican</h6>
</li>
<li class="single-item">
<h6>Ecuadorian</h6>
</li>
<li class="single-item">
<h6>Egyptian</h6>
</li>
<li class="single-item">
<h6>Salvadoran</h6>
</li>
<li class="single-item">
<h6>Equatorial Guinean</h6>
</li>
<li class="single-item">
<h6>Eritrean</h6>
</li>
<li class="single-item">
<h6>Estonian</h6>
</li>
<li class="single-item">
<h6>Ethiopian</h6>
</li>
<li class="single-item">
<h6>Falkland Islander</h6>
</li>
<li class="single-item">
<h6>Faroese</h6>
</li>
<li class="single-item">
<h6>Fijian</h6>
</li>
<li class="single-item">
<h6>Finnish</h6>
</li>
<li class="single-item">
<h6>French</h6>
</li>
<li class="single-item">
<h6>French Guianese</h6>
</li>
<li class="single-item">
<h6>French Polynesian</h6>
</li>
<li class="single-item">
<h6>French Southern Territories</h6>
</li>
<li class="single-item">
<h6>Gabonese</h6>
</li>
<li class="single-item">
<h6>Gambian</h6>
</li>
<li class="single-item">
<h6>Georgian</h6>
</li>
<li class="single-item">
<h6>German</h6>
</li>
<li class="single-item">
<h6>Ghanaian</h6>
</li>
<li class="single-item">
<h6>Gibraltese</h6>
</li>
<li class="single-item">
<h6>Greek</h6>
</li>
<li class="single-item">
<h6>Greenlandic</h6>
</li>
<li class="single-item">
<h6>Grenadian</h6>
</li>
<li class="single-item">
<h6>Guadeloupean</h6>
</li>
<li class="single-item">
<h6>Guamanian</h6>
</li>
<li class="single-item">
<h6>Guatemalan</h6>
</li>
<li class="single-item">
<h6>Guernsey</h6>
</li>
<li class="single-item">
<h6>Guinean</h6>
</li>
<li class="single-item">
<h6>Guinea-Bissauan</h6>
</li>
<li class="single-item">
<h6>Guyanese</h6>
</li>
<li class="single-item">
<h6>Haitian</h6>
</li>
<li class="single-item">
<h6>Heard and McDonald Islands</h6>
</li>
<li class="single-item">
<h6>Holy See</h6>
</li>
<li class="single-item">
<h6>Honduran</h6>
</li>
<li class="single-item">
<h6>Hong Kong</h6>
</li>
<li class="single-item">
<h6>Hungarian</h6>
</li>
<li class="single-item">
<h6>Icelandic</h6>
</li>
<li class="single-item">
<h6>Indian</h6>
</li>
<li class="single-item">
<h6>Indonesian</h6>
</li>
<li class="single-item">
<h6>Iranian</h6>
</li>
<li class="single-item">
<h6>Iraqi</h6>
</li>
<li class="single-item">
<h6>Irish</h6>
</li>
<li class="single-item">
<h6>Manx</h6>
</li>
<li class="single-item">
<h6>Israeli</h6>
</li>
<li class="single-item">
<h6>Italian</h6>
</li>
<li class="single-item">
<h6>Jamaican</h6>
</li>
<li class="single-item">
<h6>Japanese</h6>
</li>
<li class="single-item">
<h6>Jersey</h6>
</li>
<li class="single-item">
<h6>Jordanian</h6>
</li>
<li class="single-item">
<h6>Kazakhstani</h6>
</li>
<li class="single-item">
<h6>Kenyan</h6>
</li>
<li class="single-item">
<h6>I-Kiribati</h6>
</li>
<li class="single-item">
<h6>North Korean</h6>
</li>
<li class="single-item">
<h6>South Korean</h6>
</li>
<li class="single-item">
<h6>Kosovar</h6>
</li>
<li class="single-item">
<h6>Kuwaiti</h6>
</li>
<li class="single-item">
<h6>Kyrgyz</h6>
</li>
<li class="single-item">
<h6>Laotian</h6>
</li>
<li class="single-item">
<h6>Latvian</h6>
</li>
<li class="single-item">
<h6>Lebanese</h6>
</li>
<li class="single-item">
<h6>Mosotho</h6>
</li>
<li class="single-item">
<h6>Liberian</h6>
</li>
<li class="single-item">
<h6>Libyan</h6>
</li>
<li class="single-item">
<h6>Liechtensteiner</h6>
</li>
<li class="single-item">
<h6>Lithuanian</h6>
</li>
<li class="single-item">
<h6>Luxembourger</h6>
</li>
<li class="single-item">
<h6>Macanese</h6>
</li>
<li class="single-item">
<h6>Macedonian</h6>
</li>
<li class="single-item">
<h6>Malagasy</h6>
</li>
<li class="single-item">
<h6>Malawian</h6>
</li>
<li class="single-item">
<h6>Malaysian</h6>
</li>
<li class="single-item">
<h6>Maldivian</h6>
</li>
<li class="single-item">
<h6>Malian</h6>
</li>
<li class="single-item">
<h6>Maltese</h6>
</li>
<li class="single-item">
<h6>Marshallese</h6>
</li>
<li class="single-item">
<h6>Martinican</h6>
</li>
<li class="single-item">
<h6>Mauritanian</h6>
</li>
<li class="single-item">
<h6>Mauritian</h6>
</li>
<li class="single-item">
<h6>Mahoran</h6>
</li>
<li class="single-item">
<h6>Mexican</h6>
</li>
<li class="single-item">
<h6>Micronesian</h6>
</li>
<li class="single-item">
<h6>Moldovan</h6>
</li>
<li class="single-item">
<h6>Monégasque</h6>
</li>
<li class="single-item">
<h6>Mongolian</h6>
</li>
<li class="single-item">
<h6>Montenegrin</h6>
</li>
<li class="single-item">
<h6>Montserratian</h6>
</li>
<li class="single-item">
<h6>Moroccan</h6>
</li>
<li class="single-item">
<h6>Mozambican</h6>
</li>
<li class="single-item">
<h6>Myanmarese</h6>
</li>
<li class="single-item">
<h6>Namibian</h6>
</li>
<li class="single-item">
<h6>Nauruan</h6>
</li>
<li class="single-item">
<h6>Nepali</h6>
</li>
<li class="single-item">
<h6>Dutch</h6>
</li>
<li class="single-item">
<h6>Netherlands Antillean</h6>
</li>
<li class="single-item">
<h6>New Caledonian</h6>
</li>
<li class="single-item">
<h6>New Zealander</h6>
</li>
<li class="single-item">
<h6>Nicaraguan</h6>
</li>
<li class="single-item">
<h6>Nigerian</h6>
</li>
<li class="single-item">
<h6>Niuean</h6>
</li>
<li class="single-item">
<h6>Norfolk Island</h6>
</li>
<li class="single-item">
<h6>Northern Mariana Islander</h6>
</li>
<li class="single-item">
<h6>Norwegian</h6>
</li>
<li class="single-item">
<h6>Omani</h6>
</li>
<li class="single-item">
<h6>Pakistani</h6>
</li>
<li class="single-item">
<h6>Palauan</h6>
</li>
<li class="single-item">
<h6>Palestinian</h6>
</li>
<li class="single-item">
<h6>Panamanian</h6>
</li>
<li class="single-item">
<h6>Papua New Guinean</h6>
</li>
<li class="single-item">
<h6>Paraguayan</h6>
</li>
<li class="single-item">
<h6>Peruvian</h6>
</li>
<li class="single-item">
<h6>Filipino</h6>
</li>
<li class="single-item">
<h6>Pitcairnian</h6>
</li>
<li class="single-item">
<h6>Polish</h6>
</li>
<li class="single-item">
<h6>Portuguese</h6>
</li>
<li class="single-item">
<h6>Puerto Rican</h6>
</li>
<li class="single-item">
<h6>Qatari</h6>
</li>
<li class="single-item">
<h6>Réunionese</h6>
</li>
<li class="single-item">
<h6>Romanian</h6>
</li>
<li class="single-item">
<h6>Russian</h6>
</li>
<li class="single-item">
<h6>Rwandan</h6>
</li>
<li class="single-item">
<h6>Saint Barthélemy</h6>
</li>
<li class="single-item">
<h6>Saint Helenian</h6>
</li>
<li class="single-item">
<h6>Saint Kitts and Nevisian</h6>
</li>
<li class="single-item">
<h6>Saint Lucian</h6>
</li>
<li class="single-item">
<h6>Saint Martin</h6>
</li>
<li class="single-item">
<h6>Saint Pierrais and Miquelonnais</h6>
</li>
<li class="single-item">
<h6>Saint Vincentian</h6>
</li>
<li class="single-item">
<h6>Samoan</h6>
</li>
<li class="single-item">
<h6>Sanmarinese</h6>
</li>
<li class="single-item">
<h6>São Toméan</h6>
</li>
<li class="single-item">
<h6>Saudi</h6>
</li>
<li class="single-item">
<h6>Senegalese</h6>
</li>
<li class="single-item">
<h6>Serbian</h6>
</li>
<li class="single-item">
<h6>Serbian and Montenegrin</h6>
</li>
<li class="single-item">
<h6>Seychellois</h6>
</li>
<li class="single-item">
<h6>Sierra Leonean</h6>
</li>
<li class="single-item">
<h6>Singaporean</h6>
</li>
<li class="single-item">
<h6>Sint Maartener</h6>
</li>
<li class="single-item">
<h6>Slovak</h6>
</li>
<li class="single-item">
<h6>Slovenian</h6>
</li>
<li class="single-item">
<h6>Solomon Islander</h6>
</li>
<li class="single-item">
<h6>Somali</h6>
</li>
<li class="single-item">
<h6>South African</h6>
</li>
<li class="single-item">
<h6>South Georgia and the South Sandwich Islands</h6>
</li>
<li class="single-item">
<h6>South Sudanese</h6>
</li>
<li class="single-item">
<h6>Spanish</h6>
</li>
<li class="single-item">
<h6>Sri Lankan</h6>
</li>
<li class="single-item">
<h6>Sudanese</h6>
</li>
<li class="single-item">
<h6>Surinamese</h6>
</li>
<li class="single-item">
<h6>Svalbardian and Jan Mayener</h6>
</li>
<li class="single-item">
<h6>Swazi</h6>
</li>
<li class="single-item">
<h6>Swedish</h6>
</li>
<li class="single-item">
<h6>Swiss</h6>
</li>
<li class="single-item">
<h6>Syrian</h6>
</li>
<li class="single-item">
<h6>Taiwanese</h6>
</li>
<li class="single-item">
<h6>Tajikistani</h6>
</li>
<li class="single-item">
<h6>Tanzanian</h6>
</li>
<li class="single-item">
<h6>Thai</h6>
</li>
<li class="single-item">
<h6>Timorese</h6>
</li>
<li class="single-item">
<h6>Togolese</h6>
</li>
<li class="single-item">
<h6>Tokelauan</h6>
</li>
<li class="single-item">
<h6>Tongan</h6>
</li>
<li class="single-item">
<h6>Trinidadian and Tobagonian</h6>
</li>
<li class="single-item">
<h6>Tunisian</h6>
</li>
<li class="single-item">
<h6>Turkish</h6>
</li>
<li class="single-item">
<h6>Turkmen</h6>
</li>
<li class="single-item">
<h6>Turks and Caicos Islander</h6>
</li>
<li class="single-item">
<h6>Tuvaluan</h6>
</li>
<li class="single-item">
<h6>Ugandan</h6>
</li>
<li class="single-item">
<h6>Ukrainian</h6>
</li>
<li class="single-item">
<h6>Emirati</h6>
</li>
<li class="single-item">
<h6>British</h6>
</li>
<li class="single-item">
<h6>American</h6>
</li>
<li class="single-item">
<h6>United States Minor Outlying Islander</h6>
</li>
<li class="single-item">
<h6>Uruguayan</h6>
</li>
<li class="single-item">
<h6>Uzbekistani</h6>
</li>
<li class="single-item">
<h6>Ni-Vanuatu</h6>
</li>
<li class="single-item">
<h6>Venezuelan</h6>
</li>
<li class="single-item">
<h6>Vietnamese</h6>
</li>
<li class="single-item">
<h6>British Virgin Islander</h6>
</li>
<li class="single-item">
<h6>U.S. Virgin Islander</h6>
</li>
<li class="single-item">
<h6>Wallisian and Futunan</h6>
</li>
<li class="single-item">
<h6>Sahrawi</h6>
</li>
<li class="single-item">
<h6>Yemeni</h6>
</li>
<li class="single-item">
<h6>Zambian</h6>
</li>
<li class="single-item">
<h6>Zimbabwean</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 d-flex justify-content-center">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1754)">
<path d="M13.3207 14.07C13.4615 14.163 13.6265 14.2126 13.7952 14.2127C14.0765 14.2127 14.3521 14.0761 14.5173 13.8238C14.7799 13.4251 14.6699 12.8893 14.2712 12.6268C12.4344 11.4175 11.4549 10.0781 11.189 8.413C11.0664 7.63051 11.2293 6.44276 11.8788 5.68373C12.3 5.19189 12.8555 4.95227 13.5776 4.95227C14.9937 4.95227 15.5731 5.95799 15.7926 6.55698C16.3228 8.00211 15.8852 9.80108 14.7761 10.7403C14.4116 11.0492 14.3666 11.5944 14.6745 11.958C14.9834 12.323 15.5281 12.3679 15.8922 12.0596C17.5541 10.6528 18.1943 8.0887 17.415 5.96263C16.787 4.2484 15.3522 3.22491 13.5775 3.22491C12.3552 3.22491 11.3134 3.6868 10.5651 4.56052C9.4864 5.82268 9.30716 7.56876 9.48218 8.68299C9.93995 11.5476 11.8924 13.1293 13.3207 14.07Z" />
<path d="M20.1255 22.0477H7.78708C7.81845 18.178 8.05759 17.0286 8.16475 16.7076C8.40062 16.0014 9.36979 15.275 10.2183 14.8006C10.9848 16.008 12.2021 16.7277 13.555 16.7277H13.5555C14.893 16.7272 16.0999 16.008 16.8628 14.801C17.7112 15.2756 18.679 16.0019 18.9144 16.7072C19.2186 17.6211 19.2013 18.9062 19.1873 19.9386C19.1845 20.1506 19.1816 20.3528 19.1816 20.5404C19.1816 21.0178 19.5682 21.4044 20.0455 21.4044C20.5229 21.4044 20.9095 21.0178 20.9095 20.5404C20.9095 20.3603 20.9123 20.166 20.915 19.962C20.9314 18.7991 20.9515 17.3521 20.5538 16.1601C19.9014 14.2048 17.1333 12.9862 16.8197 12.8538C16.714 12.8088 16.6003 12.7854 16.4853 12.7851C16.3704 12.7848 16.2565 12.8075 16.1505 12.8519C16.0445 12.8962 15.9485 12.9613 15.8679 13.0431C15.7873 13.125 15.7238 13.2221 15.6811 13.3287C15.2628 14.3747 14.4681 14.9995 13.5555 14.9995H13.5551C12.6378 14.9995 11.8123 14.3592 11.3995 13.3287C11.3568 13.2221 11.2933 13.125 11.2128 13.0431C11.1322 12.9613 11.0361 12.8963 10.9301 12.8519C10.8241 12.8076 10.7103 12.7849 10.5953 12.7853C10.4804 12.7856 10.3667 12.8089 10.2609 12.8538C9.94784 12.9862 7.17923 14.2044 6.52593 16.1606C6.21422 17.0965 6.05655 19.3681 6.05655 22.9113C6.05655 23.3886 6.44313 23.7752 6.92047 23.7752H20.1261C20.603 23.7752 20.9896 23.3891 20.9896 22.9118C20.9895 22.4343 20.6029 22.0477 20.1255 22.0477ZM5.3695 13.815C4.171 13.815 3.19618 12.5608 3.19618 11.0197C3.19618 9.48001 4.171 8.22724 5.3695 8.22724C5.98304 8.22724 6.59094 8.58197 6.95596 9.15243C7.22315 9.57034 7.58495 10.459 7.00463 11.7166C6.80478 12.1499 6.99387 12.6628 7.42723 12.8631C7.86106 13.0625 8.37352 12.8739 8.57332 12.4405C9.24909 10.9762 9.18966 9.43888 8.41048 8.22118C7.72069 7.14343 6.58393 6.49993 5.36903 6.49993C3.21817 6.49993 1.46835 8.52724 1.46835 11.0197C1.46835 13.5136 3.21817 15.5423 5.36903 15.5423C5.84636 15.5423 6.23342 15.1562 6.23342 14.6789C6.23337 14.2015 5.84684 13.815 5.3695 13.815ZM4.27767 21.2255H1.75991C1.7983 20.3701 1.87597 19.0981 2.01682 18.3503C2.19933 17.374 2.72444 16.8232 3.13296 16.533C3.52281 16.2569 3.61404 15.7178 3.33745 15.3289C3.06135 14.939 2.52268 14.8473 2.13331 15.1244C1.58578 15.5128 0.621729 16.4076 0.318939 18.0315C0.0680901 19.3639 0.00307088 21.9584 0.000223323 22.0679C-0.00239217 22.1831 0.0179889 22.2976 0.060174 22.4048C0.102359 22.512 0.165501 22.6097 0.245904 22.6922C0.326391 22.7746 0.422553 22.8401 0.528728 22.8848C0.634904 22.9294 0.748946 22.9524 0.86414 22.9524H4.27762C4.75496 22.9524 5.14154 22.5667 5.14154 22.0894C5.14159 21.6121 4.75501 21.2255 4.27767 21.2255ZM25.5327 11.0187C25.5327 8.52623 23.7829 6.49893 21.632 6.49893C20.4166 6.49893 19.2794 7.14195 18.5892 8.2197C17.81 9.43692 17.7501 10.9747 18.4249 12.439C18.6248 12.8719 19.1381 13.0619 19.571 12.8621C20.0039 12.6623 20.1939 12.1494 19.9941 11.716C19.4138 10.4581 19.7764 9.56986 20.0437 9.15191C20.4092 8.58144 21.0171 8.22671 21.6316 8.22671C22.8301 8.22671 23.8049 9.47953 23.8049 11.0192C23.8049 12.5602 22.8301 13.8145 21.6316 13.8145C21.1542 13.8145 20.7677 14.201 20.7677 14.6784C20.7677 15.1557 21.1542 15.5423 21.6316 15.5423C23.7819 15.5423 25.5322 13.5136 25.5327 11.0187ZM26.6811 18.0334C26.39 16.4624 25.4746 15.5769 24.9552 15.1894C24.5728 14.9049 24.0313 14.9825 23.7459 15.3649C23.4609 15.7473 23.5395 16.2892 23.9214 16.5742C24.3093 16.8634 24.8078 17.4053 24.9828 18.3511C25.1236 19.098 25.2013 20.3695 25.2397 21.2245H22.7215C22.2441 21.2245 21.8575 21.6111 21.8575 22.0885C21.8575 22.5658 22.2441 22.9524 22.7215 22.9524H26.1359C26.3685 22.9524 26.5912 22.8588 26.7545 22.6917C26.8349 22.6092 26.8979 22.5115 26.94 22.4043C26.9821 22.2971 27.0024 22.1826 26.9997 22.0674C26.997 21.9579 26.9324 19.3629 26.6811 18.0334Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Visa Mode</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="visa_mode" value="Select Visa Mode">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>B2B Visa</h6>
</li>
<li class="single-item">
<h6>Electronic</h6>
</li>
<li class="single-item">
<h6>Emergency</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit">Search</button>
</form> </div>
<div class="tab-pane fade" id="activities" role="tabpanel">
<form method="get" action="https://triprex.egenslab.com/activities/" id="tour-query-form" onsubmit="handleFormSubmit(event)">
<div class="filter-area">
<div class="row g-xl-4 gy-4">
<div class="col-xl-4 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<path d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
<path d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
</svg>
</div>
<div class="searchbox-input">
<label>Location</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="activities_location" readonly value="Select Location">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Type Your Destination">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>KIGALI</h6>
</div>
</li>
<li>
<div class="destination">
<h6>MUSANZE</h6>
</div>
</li>
<li>
<div class="destination">
<h6>KIBUYE</h6>
</div>
</li>
<li>
<div class="destination">
<h6>NYANZA</h6>
</div>
</li>
<li>
<div class="destination">
<h6>GISENYI</h6>
</div>
</li>
<!--<li>
<div class="destination">
<h6>Nepal</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Thailand</h6>
</div>
</li>-->
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<g clip-path="url(#clip0_273_1731)">
<path d="M26.4727 15.0783C26.334 15.0783 26.1981 15.1348 26.0998 15.2328C26.0013 15.332 25.9458 15.4659 25.9453 15.6057C25.9453 15.7443 26.0017 15.8804 26.0998 15.9785C26.199 16.077 26.3329 16.1325 26.4727 16.133C26.6115 16.133 26.7474 16.0766 26.8455 15.9785C26.944 15.8794 26.9995 15.7454 27 15.6057C27 15.4665 26.9436 15.3309 26.8455 15.2328C26.7464 15.1343 26.6124 15.0788 26.4727 15.0783Z" />
<path d="M22.9027 6.15386H22.4775V2.97002H23.0675C23.3588 2.97002 23.5949 2.73399 23.5949 2.44268V1.60226C23.5949 0.718746 22.8761 3.05176e-05 21.9926 3.05176e-05H16.4811C15.5978 3.05176e-05 14.879 0.718746 14.879 1.60226V2.44268C14.879 2.73399 15.1151 2.97002 15.4064 2.97002H15.9962V6.15386H15.571C15.0486 6.1537 14.531 6.2534 14.046 6.44759V2.63674C14.046 2.41283 13.9045 2.21324 13.6932 2.13904C13.5665 2.09478 13.4277 2.10045 13.305 2.15491C13.3042 2.15533 13.3034 2.15533 13.3024 2.15575L7.45469 4.78688C7.18912 4.90637 7.07068 5.21867 7.19018 5.48418C7.30962 5.7497 7.62191 5.86835 7.88743 5.7487L10.7903 4.44268L5.2822 9.53855L1.96553 8.41341L3.98451 7.50496C4.25003 7.38552 4.36842 7.07323 4.24898 6.80771C4.12953 6.54219 3.81724 6.42354 3.55167 6.54319L0.31099 8.00124C0.214435 8.0447 0.133195 8.11622 0.077836 8.20648C0.0224775 8.29674 -0.00443615 8.40157 0.000596289 8.50733C0.00562422 8.6131 0.0423852 8.7149 0.106091 8.79948C0.169797 8.88406 0.257496 8.94749 0.357766 8.98152L5.01505 10.5617L6.58452 14.3201C6.63148 14.4325 6.71594 14.5253 6.82353 14.5825C6.93113 14.6397 7.05523 14.6579 7.17473 14.634C7.30092 14.6086 7.41346 14.5379 7.49113 14.4352C7.49234 14.4336 7.49377 14.4321 7.49524 14.4303L9.2851 12.0086L11.474 12.7522V20.7903C11.474 22.9282 13.1203 24.6877 15.2115 24.8706V25.5749C15.2115 26.3606 15.8509 27 16.6366 27C17.4225 27 18.0617 26.3606 18.0617 25.5749V24.8873H20.412V25.5749C20.412 26.3606 21.0512 27 21.8371 27C22.6228 27 23.2622 26.3606 23.2622 25.5749V24.8706C25.3534 24.6877 26.9997 22.9281 26.9997 20.7903V17.7196C26.9997 17.4283 26.7636 17.1922 26.4724 17.1922C26.1811 17.1922 25.945 17.4283 25.945 17.7196V20.7903C25.945 22.4679 24.5803 23.8326 22.9027 23.8326H15.571C13.8934 23.8326 12.5287 22.4677 12.5287 20.7904V13.1104L13.3492 13.3894C13.4285 13.4163 13.5132 13.4239 13.5961 13.4116C13.679 13.3993 13.7577 13.3675 13.8259 13.3187C13.894 13.2699 13.9495 13.2055 13.9878 13.1309C14.026 13.0564 14.046 12.9738 14.046 12.89V7.61802C14.5093 7.3494 15.0354 7.20811 15.571 7.20849H22.9028C24.5804 7.20849 25.9451 8.57325 25.9451 10.2508V13.5854C25.9451 13.8767 26.1812 14.1128 26.4724 14.1128C26.7637 14.1128 26.9998 13.8767 26.9998 13.5854V10.2508C26.9998 7.9917 25.1619 6.1538 22.9028 6.1538L22.9027 6.15386ZM22.2075 24.8873V25.5747C22.2074 25.6729 22.1684 25.7671 22.0989 25.8365C22.0295 25.906 21.9353 25.945 21.8371 25.9451C21.7389 25.945 21.6448 25.9059 21.5753 25.8365C21.5059 25.7671 21.4668 25.6729 21.4667 25.5747V24.8873H22.2075ZM17.007 24.8873V25.5747C17.007 25.7791 16.8409 25.9451 16.6366 25.9451C16.4322 25.9451 16.2662 25.7791 16.2662 25.5747V24.8873H17.007ZM6.54376 10.6993V11.4856L6.03867 10.2755L8.71472 7.79969L6.6593 10.3701C6.58449 10.4635 6.54374 10.5796 6.54376 10.6993ZM7.59844 12.5161V11.4355L8.23679 11.6524L7.59844 12.5161ZM12.9913 12.1538L9.26469 10.8878C9.26348 10.8871 9.26226 10.8869 9.26121 10.8865L7.95234 10.4418L12.9913 4.14046V12.1538ZM15.9335 1.6022C15.9335 1.30019 16.1793 1.05466 16.4811 1.05466H21.9926C22.2946 1.05466 22.5402 1.30019 22.5402 1.6022V1.91529H15.9335V1.6022ZM17.0509 2.97002H21.4228V6.15386H17.0509V2.97002Z" />
<path d="M13.8583 15.6875V19.7184C13.8583 21.1721 15.0411 22.3551 16.495 22.3551H21.9794C23.4332 22.3551 24.6161 21.1721 24.6161 19.7184V15.6875C24.6161 14.8151 23.9064 14.1054 23.034 14.1054H15.4403C14.5679 14.1054 13.8583 14.8151 13.8583 15.6875ZM21.9794 21.3004H16.495C15.6226 21.3004 14.9129 20.5906 14.9129 19.7184V17.7363H20.7246V18.2303C20.7246 18.5214 20.9607 18.7576 21.252 18.7576C21.5432 18.7576 21.7793 18.5214 21.7793 18.2303V17.7363H23.5614V19.7184C23.5614 20.5906 22.8517 21.3004 21.9794 21.3004ZM23.5614 15.6875V16.6816H14.9129V15.6875C14.9129 15.3966 15.1496 15.1601 15.4403 15.1601H23.034C23.3249 15.1601 23.5614 15.3966 23.5614 15.6875ZM5.93329 6.57761C6.07214 6.57761 6.20803 6.52118 6.30612 6.42309C6.4046 6.32394 6.4601 6.19001 6.46063 6.05026C6.46063 5.91104 6.4042 5.77488 6.30612 5.6768C6.20694 5.57842 6.07297 5.52313 5.93329 5.52292C5.79361 5.52321 5.65967 5.57849 5.56045 5.6768C5.46182 5.77611 5.4063 5.91029 5.40594 6.05026C5.40594 6.18895 5.46237 6.32485 5.56045 6.42309C5.65961 6.52157 5.79354 6.57708 5.93329 6.57761ZM5.82882 15.0018C5.22591 15.6047 4.42434 15.9367 3.57179 15.9367C3.42323 15.9367 3.27637 15.9267 3.13156 15.9069C3.07719 15.1414 2.75873 14.3916 2.17654 13.8068C2.09807 13.7246 1.72028 13.3585 1.19463 13.3706C0.953157 13.3756 0.596409 13.4629 0.268612 13.8521C-0.232365 14.4468 0.0731782 15.2516 0.568776 15.7474C0.988594 16.1672 1.48071 16.4884 2.01713 16.6991C1.91796 17.0938 1.71339 17.4541 1.42529 17.7415C1.1408 18.0264 0.785255 18.2299 0.395543 18.331C0.113731 18.4039 -0.0560211 18.6915 0.0169106 18.9735C0.0782934 19.2112 0.292553 19.369 0.527168 19.369C0.571778 19.369 0.616212 19.3634 0.659426 19.3524C1.23145 19.2039 1.7534 18.9053 2.17122 18.4873C2.60875 18.0497 2.89816 17.5191 3.03922 16.9587C3.21588 16.9806 3.39372 16.9915 3.57174 16.9914C4.70595 16.9914 5.7726 16.5498 6.57475 15.7476C6.78052 15.5417 6.78052 15.2077 6.57475 15.0018C6.36877 14.7959 6.0348 14.7959 5.82882 15.0018ZM1.3147 15.0019C1.18819 14.875 1.02219 14.5949 1.07555 14.5315C1.12971 14.467 1.18308 14.4264 1.21477 14.4252H1.21725C1.27162 14.4252 1.36454 14.4859 1.41089 14.5323C1.41727 14.5395 1.41669 14.5384 1.42529 14.5471C1.69724 14.8183 1.89506 15.1548 1.99983 15.5244C1.749 15.3818 1.51855 15.2061 1.3147 15.0019ZM21.1993 10.9161C21.1993 9.83417 20.3191 8.95398 19.2372 8.95398C18.1553 8.95398 17.2751 9.83417 17.2751 10.9161C17.2751 11.998 18.1553 12.8782 19.2372 12.8782C20.3191 12.8782 21.1993 11.998 21.1993 10.9161ZM18.3298 10.9161C18.3298 10.4157 18.7368 10.0087 19.2372 10.0087C19.7375 10.0087 20.1446 10.4157 20.1446 10.9161C20.1446 11.4164 19.7375 11.8235 19.2372 11.8235C18.7368 11.8235 18.3298 11.4164 18.3298 10.9161Z" />
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Activities Type</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" readonly name="activities_type" value="Select Activity Type">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap two">
<ul class="option-list">
<li class="single-item">
<h6>Creative Pursuits</h6>
</li>
<li class="single-item">
<h6>Cultural Exploration</h6>
</li>
<li class="single-item">
<h6>Entertainment and Relaxation</h6>
</li>
<li class="single-item">
<h6>Outdoor Adventures</h6>
</li>
<li class="single-item">
<h6>Sports and Fitness</h6>
</li>
<li class="single-item">
<h6>Volunteer Work</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g clip-path="url(#clip0_2037_326)">
<path d="M15.5978 13.5309L12.391 11.1258V6.22655C12.391 5.73394 11.9928 5.33575 11.5002 5.33575C11.0076 5.33575 10.6094 5.73394 10.6094 6.22655V11.5713C10.6094 11.8519 10.7412 12.1164 10.9657 12.2839L14.5288 14.9563C14.6826 15.0721 14.8699 15.1346 15.0624 15.1344C15.3341 15.1344 15.6013 15.0124 15.7759 14.7772C16.0717 14.3843 15.9916 13.8258 15.5978 13.5309Z"></path>
<path d="M11.5 0C5.15851 0 0 5.15851 0 11.5C0 17.8415 5.15851 23 11.5 23C17.8415 23 23 17.8415 23 11.5C23 5.15851 17.8415 0 11.5 0ZM11.5 21.2184C6.14194 21.2184 1.78156 16.8581 1.78156 11.5C1.78156 6.14194 6.14194 1.78156 11.5 1.78156C16.859 1.78156 21.2184 6.14194 21.2184 11.5C21.2184 16.8581 16.8581 21.2184 11.5 21.2184Z"></path>
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Activite Day</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="inOut" readonly>
<i class="bi bi-chevron-down"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit">Search</button>
</form> </div>
<div class="tab-pane fade" id="transport" role="tabpanel">
<form method="get" action="https://triprex.egenslab.com/transport/" id="tour-query-form" onsubmit="handleFormSubmit(event)">
<div class="filter-area">
<div class="row g-xl-4 gy-4">
<div class="col-xl-4 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<path d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
<path d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
</svg>
</div>
<div class="searchbox-input">
<label>Location Form</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="transport_des" readonly value="Select Location">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Type Your Destination">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>KIGALI</h6>
<p> Basling city and energetic people </p> </div>
</li>
<li>
<div class="destination">
<h6>MUSANZE</h6>
<p> Chimpanzes and gorillas home </p> </div>
</li>
<li>
<div class="destination">
<h6>GISENYI</h6>
<p> Serena beaches and great accomodation </p> </div>
</li>
<li>
<div class="destination">
<h6>NYANZA</h6>
<p> Bandar ban,Cox’s Bazar,Khagrachori,Saint Martin,Sajek Vally,Sea Beach </p> </div>
</li>
<!--<li>
<div class="destination">
<h6>KIBUYE</h6>
<p> Bandar ban,Cox’s Bazar,Khagrachori,Sea Beach </p> </div>
</li>
<li>
<div class="destination">
<h6>Spain</h6>
<p> Bandar ban,Sajek Vally,Sea Beach </p> </div>
</li>
<li>
<div class="destination">
<h6>Italy</h6>
<p> Bandar ban,Cox’s Bazar,Khagrachori,Sea Beach </p> </div>
</li>
<li>
<div class="destination">
<h6>Indonesia</h6>
<p> Khagrachori,Saint Martin,Sea Beach </p> </div>
</li>
<li>
<div class="destination">
<h6>Saudi Arab</h6>
<p> Cox’s Bazar,Khagrachori,Saint Martin,Sea Beach </p> </div>
</li>
<li>
<div class="destination">
<h6>Switzerland</h6>
<p> Bandar ban,Khagrachori,Sajek Vally,Sea Beach </p> </div>
</li>
<li>
<div class="destination">
<h6>New York</h6>
<p> Cox’s Bazar,Saint Martin,Sajek Vally </p> </div>
</li>
<li>
<div class="destination">
<h6>Egypt</h6>
<p> Bandar ban,Cox’s Bazar,Khagrachori,Saint Martin,Sajek Vally,Sea Beach </p> </div>
</li>-->
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
<path d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
<path d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
</svg>
</div>
<div class="searchbox-input">
<label>Transport-type</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="transport_type" placeholder="Which Type ?">
<i class="bi bi-chevron-down"></i>
</div>
<div class="custom-select-wrap">
<div class="custom-select-search-area">
<i class="bx bx-search"></i>
<input type="text" placeholder="Transport Type">
</div>
<ul class="option-list">
<li>
<div class="destination">
<h6>Boat</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Bus</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Car</h6>
</div>
</li>
<li>
<div class="destination">
<h6>Train</h6>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 d-flex justify-content-center divider">
<div class="single-search-box">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g clip-path="url(#clip0_2037_326)">
<path d="M15.5978 13.5309L12.391 11.1258V6.22655C12.391 5.73394 11.9928 5.33575 11.5002 5.33575C11.0076 5.33575 10.6094 5.73394 10.6094 6.22655V11.5713C10.6094 11.8519 10.7412 12.1164 10.9657 12.2839L14.5288 14.9563C14.6826 15.0721 14.8699 15.1346 15.0624 15.1344C15.3341 15.1344 15.6013 15.0124 15.7759 14.7772C16.0717 14.3843 15.9916 13.8258 15.5978 13.5309Z"></path>
<path d="M11.5 0C5.15851 0 0 5.15851 0 11.5C0 17.8415 5.15851 23 11.5 23C17.8415 23 23 17.8415 23 11.5C23 5.15851 17.8415 0 11.5 0ZM11.5 21.2184C6.14194 21.2184 1.78156 16.8581 1.78156 11.5C1.78156 6.14194 6.14194 1.78156 11.5 1.78156C16.859 1.78156 21.2184 6.14194 21.2184 11.5C21.2184 16.8581 16.8581 21.2184 11.5 21.2184Z"></path>
</g>
</svg>
</div>
<div class="searchbox-input">
<label>Reserve Date</label>
<div class="custom-select-dropdown">
<div class="select-input">
<input type="text" name="reserve_date" readonly>
<i class="bi bi-chevron-down"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit">Search</button>
</form> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-75a8882 e-con-full e-flex e-con e-parent" data-id="75a8882" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-71f2da5 elementor-widget elementor-widget-triprex_about" data-id="71f2da5" data-element_type="widget" data-widget_type="triprex_about.default">
<div class="elementor-widget-container">
<div class="home1-about-section ">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector1.png" alt="image" class="section-vector1">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="about-content">
<div class="section-title mb-40">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
About Us <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Let’s know About Our Journey For AcrossAfricaJourneys</h2>
</div>
<ul class="nav nav-pills" id="pills-tab3" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="tab-0" data-bs-toggle="pill" data-bs-target="#content-0" type="button" role="tab" aria-controls="content-0" aria-selected="true">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g clip-path="url(#clip0_922_21)"><path d="M15.0504 10.4663C15.4633 10.4663 15.7977 10.1317 15.7977 9.71899C15.7977 9.30631 15.4633 8.97168 15.0504 8.97168C11.7488 8.97168 9.07227 11.6482 9.07227 14.9501C9.07227 18.2517 11.7488 20.9283 15.0504 20.9283C18.3523 20.9283 21.0288 18.2517 21.0288 14.9501C21.0288 14.5372 20.6942 14.2028 20.2815 14.2028C19.8689 14.2028 19.5342 14.5372 19.5342 14.9501C19.5342 17.4263 17.5269 19.4339 15.0504 19.4339C12.5742 19.4339 10.5666 17.4263 10.5666 14.9501C10.5666 12.4736 12.5742 10.4663 15.0504 10.4663Z"></path><path d="M29.3085 10.5114C29.1787 10.1193 28.7558 9.90672 28.3634 10.0365C27.9803 10.1632 27.7669 10.5711 27.8812 10.9581C30.1159 18.0748 26.1586 25.6555 19.042 27.8903C11.9256 30.1251 4.34482 26.1678 2.11006 19.0512C-0.124991 11.9346 3.8326 4.35381 10.949 2.11899C13.5832 1.29181 16.4077 1.29181 19.042 2.11899C19.4375 2.23822 19.8547 2.0144 19.974 1.61889C20.0915 1.2293 19.8761 0.817563 19.489 0.691704C11.5869 -1.78757 3.1709 2.60859 0.691687 10.5109C-1.78759 18.4131 2.60875 26.829 10.5109 29.3082C18.4133 31.7875 26.829 27.3914 29.3082 19.489C30.2251 16.5667 30.2252 13.4338 29.3085 10.5114H29.3085Z"></path><path d="M16.473 5.33889C16.4769 4.91338 16.1501 4.55772 15.7257 4.5259C15.5026 4.50691 15.2792 4.48793 15.05 4.48793C9.27193 4.48793 4.58789 9.17197 4.58789 14.9501C4.58789 20.728 9.27193 25.4121 15.05 25.4121C20.828 25.4121 25.512 20.728 25.512 14.9501C25.512 14.6798 25.4955 14.4097 25.4624 14.1415C25.4026 13.7313 25.0218 13.4473 24.6116 13.507C24.2014 13.5665 23.9174 13.9477 23.9769 14.3578C23.9792 14.3733 23.982 14.3886 23.9851 14.4042C24.0014 14.5853 24.0174 14.7647 24.0174 14.9497C24.0176 19.9024 20.0029 23.9172 15.0503 23.9177C10.0975 23.9179 6.08268 19.9028 6.0825 14.9503C6.08227 9.99779 10.0968 5.98272 15.0496 5.98254H15.0498C15.2353 5.98254 15.4148 5.99854 15.5955 6.01453L15.7355 6.02625C16.1261 6.04295 16.4561 5.7399 16.4726 5.34943C16.4728 5.34574 16.4728 5.34234 16.473 5.33889Z"></path><path d="M19.5332 6.72978V9.40957L14.5211 14.4216C14.2242 14.7084 14.216 15.1815 14.5028 15.4784C14.7896 15.7752 15.2628 15.7835 15.5595 15.4967C15.5657 15.4907 15.5719 15.4846 15.5779 15.4784L20.59 10.4663H23.2696C23.4679 10.4663 23.6578 10.3876 23.7982 10.2473L28.2818 5.76345C28.5735 5.47166 28.5735 4.99857 28.2818 4.70672C28.2124 4.63734 28.13 4.58232 28.0394 4.54478C27.9487 4.50724 27.8516 4.48792 27.7535 4.48793H25.5116V2.24601C25.5116 1.83334 25.177 1.49871 24.764 1.49894C24.566 1.49899 24.3761 1.57769 24.236 1.71773L19.7522 6.20156C19.6828 6.27088 19.6277 6.35322 19.5901 6.44386C19.5525 6.5345 19.5332 6.63166 19.5332 6.72978ZM21.0278 7.03927L24.0169 4.05006V5.23523C24.0169 5.64791 24.3516 5.98254 24.7643 5.98254H25.9494L22.9602 8.9717H21.0278V7.03927Z"></path></g></svg> Mission &amp; Vision </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link " id="tab-1" data-bs-toggle="pill" data-bs-target="#content-1" type="button" role="tab" aria-controls="content-1" aria-selected="true">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M27.1678 14.488C27.0324 14.5109 26.9115 14.5866 26.8319 14.6985C26.7522 14.8104 26.7203 14.9493 26.7431 15.0848C26.855 15.7479 26.9119 16.4161 26.9119 17.0709C26.9119 20.7219 25.2854 24.0176 22.6621 26.2119C22.4434 24.7755 21.823 23.4301 20.8725 22.3311C19.922 21.2321 18.6801 20.4243 17.2902 20.0008C17.8591 19.6233 18.3259 19.1109 18.6489 18.5094C18.9719 17.9078 19.1412 17.2357 19.1416 16.5529C19.1416 14.2674 17.2829 12.4087 14.9974 12.4087C12.7119 12.4087 10.8533 14.2674 10.8533 16.5529C10.8533 17.9909 11.5899 19.257 12.7047 20.0008C11.3147 20.4243 10.0728 21.2321 9.12233 22.3311C8.17182 23.4301 7.55144 24.7755 7.33277 26.2119C5.99752 25.093 4.92468 23.6942 4.19025 22.1145C3.45582 20.5348 3.07778 18.813 3.08292 17.0709C3.08292 16.4161 3.1399 15.7489 3.25179 15.0848C3.26427 15.0172 3.26317 14.9479 3.24857 14.8807C3.23397 14.8136 3.20616 14.75 3.16676 14.6937C3.12735 14.6374 3.07714 14.5895 3.01905 14.5528C2.96096 14.5161 2.89614 14.4913 2.82838 14.4799C2.76062 14.4685 2.69127 14.4707 2.62436 14.4864C2.55745 14.502 2.49433 14.5308 2.43866 14.5711C2.383 14.6114 2.33591 14.6624 2.30013 14.721C2.26435 14.7797 2.24059 14.8449 2.23025 14.9128C2.10926 15.6258 2.04792 16.3477 2.04688 17.0709C2.04688 23.4322 6.59097 28.802 12.8507 29.8381C12.9839 29.8553 13.1185 29.8202 13.2262 29.7401C13.334 29.66 13.4064 29.5413 13.4283 29.4088C13.4502 29.2764 13.4198 29.1406 13.3436 29.0301C13.2674 28.9196 13.1512 28.8431 13.0196 28.8165C11.327 28.5369 9.71521 27.8936 8.29526 26.9309C8.54287 23.4156 11.4334 20.6971 14.9974 20.6971C18.5614 20.6971 21.4509 23.4156 21.7006 26.9309C20.2804 27.8938 18.6682 28.5371 16.9752 28.8165C16.9063 28.8255 16.8398 28.8482 16.7798 28.8834C16.7198 28.9185 16.6674 28.9654 16.6259 29.0213C16.5845 29.0771 16.5546 29.1407 16.5383 29.2083C16.5219 29.2759 16.5193 29.3461 16.5306 29.4148C16.542 29.4834 16.567 29.549 16.6043 29.6078C16.6416 29.6665 16.6903 29.7171 16.7475 29.7566C16.8048 29.7962 16.8694 29.8237 16.9375 29.8377C17.0057 29.8517 17.0759 29.8518 17.1441 29.8381C23.4039 28.802 27.948 23.4332 27.948 17.0709C27.948 16.3581 27.8858 15.6318 27.7646 14.9128C27.7536 14.8456 27.7293 14.7813 27.6933 14.7235C27.6573 14.6657 27.6102 14.6156 27.5547 14.5762C27.4992 14.5367 27.4365 14.5086 27.3701 14.4934C27.3037 14.4783 27.2349 14.4765 27.1678 14.488ZM11.8893 16.5529C11.8893 14.8393 13.2838 13.4447 14.9974 13.4447C16.711 13.4447 18.1056 14.8393 18.1056 16.5529C18.1056 18.2665 16.711 19.661 14.9974 19.661C13.2838 19.661 11.8893 18.2665 11.8893 16.5529ZM20.6708 4.09859C20.641 4.00647 20.586 3.92455 20.512 3.8621C20.4381 3.79966 20.3481 3.75919 20.2522 3.7453L16.9421 3.26458L15.4616 0.264191C15.2875 -0.0880638 14.7073 -0.0880638 14.5333 0.264191L13.0528 3.26458L9.74261 3.7453C9.64693 3.75919 9.55705 3.79959 9.48314 3.86191C9.40922 3.92423 9.35422 4.00599 9.32436 4.09795C9.2945 4.1899 9.29097 4.28838 9.31417 4.38224C9.33737 4.4761 9.38637 4.56159 9.45563 4.62905L11.851 6.96325L11.2853 10.2599C11.2689 10.3553 11.2795 10.4533 11.316 10.5429C11.3524 10.6325 11.4132 10.7101 11.4915 10.7669C11.5698 10.8238 11.6624 10.8575 11.7589 10.8644C11.8554 10.8713 11.9519 10.8511 12.0375 10.8059L14.9974 9.24877L17.9574 10.8059C18.0428 10.8517 18.1395 10.8724 18.2361 10.8654C18.3328 10.8584 18.4255 10.8242 18.5034 10.7666C18.5818 10.7097 18.6427 10.632 18.6791 10.5422C18.7155 10.4525 18.7261 10.3543 18.7096 10.2589L18.1439 6.96429L20.5403 4.62801C20.6095 4.56064 20.6585 4.47528 20.6817 4.38155C20.705 4.28781 20.7015 4.18945 20.6718 4.09756L20.6708 4.09859ZM17.2249 6.41001C17.1647 6.46871 17.1197 6.54115 17.0937 6.6211C17.0678 6.70104 17.0616 6.78611 17.0757 6.86897L17.5109 9.40003L15.2378 8.20444C15.1633 8.16558 15.0804 8.14529 14.9964 8.14529C14.9123 8.14529 14.8295 8.16558 14.755 8.20444L12.483 9.40003L12.9171 6.86897C12.9312 6.78611 12.925 6.70104 12.899 6.6211C12.8731 6.54115 12.828 6.46871 12.7679 6.41001L10.9299 4.61869L13.4703 4.24985C13.5532 4.23767 13.632 4.20558 13.6998 4.15633C13.7677 4.10707 13.8226 4.04211 13.8599 3.96701L14.9974 1.66492L16.134 3.96805C16.1712 4.04315 16.2261 4.10811 16.294 4.15736C16.3618 4.20662 16.4406 4.23871 16.5235 4.25089L19.0639 4.61972L17.226 6.41104L17.2249 6.41001Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M2.60313 12.4325C2.5865 12.5279 2.59696 12.6261 2.63331 12.7159C2.66966 12.8056 2.73045 12.8834 2.80877 12.9404C2.8871 12.9973 2.97983 13.0312 3.07643 13.0381C3.17303 13.0451 3.26964 13.0248 3.35529 12.9795L5.675 11.7591L7.99574 12.9795C8.08101 13.0251 8.17746 13.0456 8.27391 13.0387C8.37036 13.0317 8.46286 12.9975 8.54069 12.9402C8.61908 12.8833 8.67995 12.8056 8.7164 12.7158C8.75284 12.6261 8.7634 12.5279 8.74687 12.4325L8.30344 9.84965L10.1808 8.02103C10.2503 7.95362 10.2996 7.86805 10.323 7.77404C10.3463 7.68003 10.3429 7.58135 10.313 7.4892C10.2831 7.39706 10.228 7.31514 10.1539 7.25275C10.0798 7.19036 9.98966 7.15 9.89377 7.13625L7.29951 6.76017L6.13914 4.40835C5.96509 4.05609 5.3849 4.05609 5.21085 4.40835L4.05048 6.76017L1.45622 7.13625C1.36033 7.15 1.27022 7.19036 1.19611 7.25275C1.12201 7.31514 1.06688 7.39706 1.03699 7.4892C1.0071 7.58135 1.00365 7.68003 1.02703 7.77404C1.05041 7.86805 1.09967 7.95362 1.16924 8.02103L3.04655 9.84965L2.60313 12.4325ZM2.64457 8.01171L4.468 7.74648C4.55114 7.73446 4.63011 7.70244 4.69814 7.65318C4.76617 7.60391 4.82123 7.53887 4.85859 7.46364L5.675 5.80908L6.4914 7.46364C6.52866 7.53874 6.58356 7.6037 6.6514 7.65295C6.71924 7.70221 6.798 7.7343 6.88095 7.74648L8.70543 8.01171L7.38551 9.29744C7.32533 9.35614 7.28031 9.42858 7.25432 9.50853C7.22834 9.58848 7.22216 9.67354 7.23631 9.75641L7.54816 11.5736L5.91639 10.7158C5.84186 10.6769 5.75905 10.6566 5.675 10.6566C5.59094 10.6566 5.50813 10.6769 5.4336 10.7158L3.80183 11.5736L4.11264 9.75641C4.12693 9.67363 4.12091 9.58861 4.09511 9.50867C4.0693 9.42873 4.02448 9.35624 3.96449 9.29744L2.64457 8.01171ZM28.5426 7.13625L25.9483 6.76017L24.7879 4.40835C24.6139 4.05609 24.0337 4.05609 23.8596 4.40835L22.6993 6.76017L20.105 7.13625C20.0091 7.15 19.919 7.19036 19.8449 7.25275C19.7708 7.31514 19.7157 7.39706 19.6858 7.4892C19.6559 7.58135 19.6524 7.68003 19.6758 7.77404C19.6992 7.86805 19.7485 7.95362 19.818 8.02103L21.6953 9.84965L21.2519 12.4325C21.2353 12.5279 21.2458 12.6261 21.2821 12.7159C21.3185 12.8056 21.3792 12.8834 21.4576 12.9404C21.5359 12.9973 21.6286 13.0312 21.7252 13.0381C21.8218 13.0451 21.9184 13.0248 22.0041 12.9795L24.3238 11.7591L26.6445 12.9795C26.7298 13.0251 26.8263 13.0456 26.9227 13.0387C27.0192 13.0317 27.1117 12.9975 27.1895 12.9402C27.2679 12.8833 27.3288 12.8056 27.3652 12.7158C27.4016 12.6261 27.4122 12.5279 27.3957 12.4325L26.9522 9.84965L28.8295 8.02103C28.8991 7.95362 28.9484 7.86805 28.9718 7.77404C28.9951 7.68003 28.9917 7.58135 28.9618 7.4892C28.9319 7.39706 28.8768 7.31514 28.8027 7.25275C28.7286 7.19036 28.6385 7.15 28.5426 7.13625ZM26.0343 9.29744C25.9741 9.35614 25.9291 9.42858 25.9031 9.50853C25.8771 9.58848 25.871 9.67354 25.8851 9.75641L26.197 11.5736L24.5652 10.7158C24.4907 10.6769 24.4078 10.6566 24.3238 10.6566C24.2397 10.6566 24.1569 10.6769 24.0824 10.7158L22.4506 11.5736L22.7614 9.75641C22.7757 9.67363 22.7697 9.58861 22.7439 9.50867C22.7181 9.42873 22.6733 9.35624 22.6133 9.29744L21.2934 8.01171L23.1168 7.74648C23.1999 7.73446 23.2789 7.70244 23.3469 7.65318C23.415 7.60391 23.47 7.53887 23.5074 7.46364L24.3238 5.80908L25.1402 7.46364C25.1775 7.53874 25.2324 7.6037 25.3002 7.65295C25.368 7.70221 25.4468 7.7343 25.5297 7.74648L27.3542 8.01171L26.0343 9.29744Z"></path><path d="M15.0004 30.0215C15.2865 30.0215 15.5185 29.7896 15.5185 29.5035C15.5185 29.2174 15.2865 28.9855 15.0004 28.9855C14.7143 28.9855 14.4824 29.2174 14.4824 29.5035C14.4824 29.7896 14.7143 30.0215 15.0004 30.0215Z"></path></g></svg> Focus On Customer </button>
</li>
</ul>
<div class="tab-content" id="pills-tab3Content">
<div class="tab-pane fade show active" id="content-0" role="tabpanel">
	Across Africa Journeys is a sourcing company that provides tour and travel services most especially the tangible experiences together with educational tools and research in the interest of sensitizing the general public in the development of the tourism industry. We also partner with educational institutions in the tourism sector in line with the bid of connecting and linking these learners’ theoretical knowledge with the practical and field works. We aim at having opportunities for tourism grandaunts right at their hand through providing the most quality and vital skills to them in order to have a competent labor market right at the employers’ disposal. We as well target the self-reliance of the students in their respective capacities to withstand and use their acquired skills to create more hospitality and tourism related jobs in this competitive environment and labor market..

	 </div>
<div class="tab-pane fade " id="content-1" role="tabpanel">
Gtiam ac rortor id jkugs commodo vulputate. Vebsidoe porttitor erat felis and sed vehicula tortor malesuada gravida. Mauris volutpat enim quis pulv gont congue. Suspendisse ullamcorper, enim vitae tristique blandit, eratot augue torel tempo libero, non porta lectus tortor et elit. Quisque finibusot enim et rtrewqas gravida, eu elementum turpis tyroxiwn. Integer female go tellus kjherws, tyresca and gernicomeu. </div>
</div>
<div class="about-content-bottom">
<a href="about.php" class="primary-btn1">More About</a>
<div class="counter-area">
<div class="customer-img-grp">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/customer-img-grp.png" alt="Image ">
</div>
<div class="content">
<div class="number">
<h6 class="counter">600</h6>
<span>+</span>
</div>
<p> Customer</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 d-flex justify-content-end">
<div class="about-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/about-img.png" alt="Image ">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/vector/about-img-bg-vector.svg" alt="image" class="vector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-ce61e75 e-con-full e-flex e-con e-parent" data-id="ce61e75" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-34b4842 elementor-widget elementor-widget-triprex_destination_masonary" data-id="34b4842" data-element_type="widget" data-widget_type="triprex_destination_masonary.default">
<div class="elementor-widget-container">
<div class="home1-destination-section">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector2.png" alt="section-vector-image" class="section-vector2">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center mb-40">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z"></path>
</svg>
Journey to the <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z"></path>
</svg>
</span>
<h2>Desired Vacation Spots</h2>
</div>
</div>
</div>
<div class="row g-4">
<div class="col-lg-3 col-sm-6">
<div class="destination-card">
<img loading="lazy" decoding="async" width="680" height="450" src="akagera/Kigali 1.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="akagera/akagera/Kigali 2.jpeg 680w, akagera/Kigali 3.jpeg 300w, akagera/Kigali 4.jpeg 600w" sizes="(max-width: 680px) 100vw, 680px" /> <div class="overlay"></div>
<div class="card-title">
<h4>KIGALI</h4>
</div>
<div class="content">
<!--h4><a href="tour1.html">Kigali</a></h4-->
<div class="eg-tag">
<span>4 Tour</span>
</div>
</div>
</div>
</div>
<div class="col-lg-5 col-sm-6">
<div class="destination-card">
<img loading="lazy" decoding="async" width="680" height="450" src="akagera/musanze 1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="akagera/musanze 2.jpg 680w, akagera/musanze 3.jpg 300w, akagera/musanze 4.jpg 600w" sizes="(max-width: 680px) 100vw, 680px" /> <div class="overlay"></div>
<div class="card-title">
<h4>MUSANZE</h4>
</div>
<div class="content">
<!--h4><a href="tour2.html">Musanze</a></h4-->
<div class="eg-tag">
<span>2 Tour</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="destination-card">
<img loading="lazy" decoding="async" width="680" height="450" src="akagera/nyanza.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="akagera/nyanza 1.jpg 680w, akagera/nyanza 2.jpg 300w, akagera/nyanza 3.jpg 600w" sizes="(max-width: 680px) 100vw, 680px" /> <div class="overlay"></div>
<div class="card-title">
<h4>NYANZA</h4>
</div>
<div class="content">
<!--h4><a href="Inc/Inner_pages/tour3.html">Nyanza</a></h4-->
<div class="eg-tag">
<span>1 Tour</span>
</div>
</div>
</div>
</div>
<div class="col-lg-5 col-sm-6">
<div class="destination-card">
<img loading="lazy" decoding="async" width="680" height="450" src="akagera/kibuye.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="akagera/kibuye 1.jpg 680w, kibuye 2.jpg 300w, akagera/kibuye 3.jpg 600w" sizes="(max-width: 680px) 100vw, 680px" /> <div class="overlay"></div>
<div class="card-title">
<h4>KIBUYE</h4>
</div>
<div class="content">
<!--h4><a href="Inc/Inner_pages/tour4.html">Kibuye</a></h4-->
<div class="eg-tag">
<span>1 Tour</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="destination-card">
<img loading="lazy" decoding="async" width="680" height="450" src="akagera/serena1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="akagera/serena 2.jpg 680w, akagera/serena 3.jpg 300w, akagera/serena 4.jpg 600w" sizes="(max-width: 680px) 100vw, 680px" /> <div class="overlay"></div>
<div class="card-title">
<h4>GISENYI</h4>
</div>
<div class="content">
<!--h4><a href="Inc/Inner_pages/tour5.html">Gisenyi</a></h4-->
<div class="eg-tag">
<span>1 Tour</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="destination-banner">
<div class="destination-banner-content">
<div class="batch">
<span>
Get 10% Off </span>
</div>
<h2>Of Our All Destination</h2>
<a href="destination.php" class="primary-btn1">View All Destination</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-bc5210b e-con-full e-flex e-con e-parent" data-id="bc5210b" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-8c98261 elementor-widget elementor-widget-triprex_custom_post_tab" data-id="8c98261" data-element_type="widget" data-widget_type="triprex_custom_post_tab.default">
<div class="elementor-widget-container">
<div class="tour-facilites-section">
<div class="container">
<div class="row">
<div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-60">
<div class="section-title text-center">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Tour Experience <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Affordable Vacation Bundles</h2>
</div>
<ul class="nav nav-tabs" id="facilitesTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="Tour-tab" data-bs-toggle="tab" data-bs-target="#Tour" type="button" role="tab" aria-controls="Tour" aria-selected="true">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g>
<path d="M5.64903 6.91357C2.53954 6.91357 0.00976562 9.44335 0.00976562 12.5528C0.00976562 14.4834 0.928148 16.5592 2.73944 18.7225C2.9952 19.0275 3.26021 19.3246 3.53411 19.6134C2.36462 19.9327 1.66244 20.5062 1.66244 21.1756C1.66244 22.3605 3.71636 23 5.64885 23C7.58139 23 9.63527 22.3605 9.63527 21.1756C9.63527 20.5067 8.93332 19.9331 7.76458 19.6137C8.2315 19.1208 8.73391 18.5408 9.21062 17.894C9.23746 17.8583 9.25696 17.8178 9.26801 17.7746C9.27906 17.7314 9.28143 17.6864 9.27499 17.6423C9.26854 17.5981 9.25341 17.5557 9.23047 17.5175C9.20753 17.4792 9.17723 17.4459 9.14132 17.4195C9.10542 17.393 9.06463 17.3739 9.02131 17.3634C8.97799 17.3528 8.933 17.3509 8.88894 17.3578C8.84489 17.3647 8.80264 17.3803 8.76465 17.4037C8.72666 17.427 8.69367 17.4577 8.6676 17.4938C8.09206 18.2749 7.46909 18.9613 6.92549 19.5065C6.86236 19.5385 6.8109 19.5896 6.77841 19.6525C6.29146 20.131 5.88168 20.486 5.64917 20.68C5.41921 20.4879 5.01568 20.1377 4.53497 19.6654C4.50093 19.5907 4.44083 19.531 4.36593 19.4974C2.83827 17.9609 0.684268 15.3062 0.684268 12.5529C0.684268 9.81539 2.91145 7.58821 5.64899 7.58821C8.38653 7.58821 10.6137 9.81539 10.6137 12.5529C10.6137 13.7484 10.2064 15.0395 9.40297 16.3902C9.38033 16.4283 9.36541 16.4705 9.35906 16.5143C9.35271 16.5581 9.35506 16.6028 9.36597 16.6457C9.37687 16.6887 9.39613 16.729 9.42264 16.7645C9.44914 16.8 9.48238 16.8299 9.52045 16.8525C9.55851 16.8752 9.60067 16.8901 9.6445 16.8965C9.68834 16.9028 9.73299 16.9005 9.77592 16.8895C9.81885 16.8786 9.85921 16.8594 9.89469 16.8329C9.93018 16.8064 9.9601 16.7731 9.98274 16.7351C10.849 15.2785 11.2883 13.8715 11.2883 12.5529C11.2883 9.44335 8.75852 6.91357 5.64903 6.91357ZM5.44262 21.3815C5.50169 21.4273 5.57431 21.4521 5.64903 21.452C5.72376 21.4521 5.79638 21.4273 5.85545 21.3815C5.89682 21.3495 6.46041 20.91 7.21164 20.1755C8.34915 20.4074 8.96081 20.8541 8.96081 21.1756C8.96081 21.4157 8.63171 21.699 8.10195 21.9148C7.4522 22.1796 6.58103 22.3255 5.6489 22.3255C3.62714 22.3255 2.33699 21.6444 2.33699 21.1756C2.33699 20.8536 2.94882 20.4072 4.08697 20.1752C4.84237 20.9141 5.40677 21.3538 5.44262 21.3815Z"></path>
<path d="M5.64915 10.1009C5.1157 10.1009 4.60844 10.2693 4.18222 10.5879C4.1106 10.6415 4.06318 10.7213 4.05039 10.8098C4.0376 10.8984 4.06049 10.9883 4.11403 11.06C4.16761 11.1316 4.24744 11.179 4.33596 11.1918C4.42448 11.2046 4.51446 11.1817 4.58612 11.1282C4.89477 10.8974 5.26237 10.7754 5.6491 10.7754C6.62916 10.7754 7.42648 11.5727 7.42648 12.5528C7.42648 13.5329 6.62916 14.3302 5.6491 14.3302C4.66904 14.3302 3.87172 13.5329 3.87172 12.5528C3.87172 12.3856 3.89486 12.2202 3.94045 12.0615C3.96513 11.9755 3.95465 11.8833 3.91132 11.805C3.86799 11.7268 3.79534 11.6689 3.70938 11.6442C3.6234 11.6196 3.53117 11.6301 3.45294 11.6735C3.37471 11.7168 3.31687 11.7894 3.29214 11.8754C3.22906 12.0957 3.19713 12.3237 3.19727 12.5528C3.19727 13.9048 4.29718 15.0048 5.64919 15.0048C7.00116 15.0048 8.10112 13.9048 8.10112 12.5528C8.10107 11.2008 7.00112 10.1009 5.64915 10.1009ZM20.3471 9.7984C20.5276 9.60501 20.7029 9.40685 20.8728 9.20413C22.2769 7.52706 22.9889 5.91486 22.9889 4.41218C22.9889 1.97935 21.0096 0 18.5767 0C16.7995 0 15.2037 1.05773 14.5114 2.69468C14.4942 2.73547 14.4851 2.77926 14.4848 2.82354C14.4844 2.86783 14.4928 2.91175 14.5095 2.95279C14.5261 2.99383 14.5507 3.0312 14.5818 3.06275C14.6128 3.0943 14.6498 3.11942 14.6906 3.13667C14.773 3.1715 14.8658 3.17218 14.9487 3.13858C15.0316 3.10498 15.0977 3.03984 15.1326 2.95748C15.7192 1.57065 17.0711 0.674502 18.5767 0.674502C20.6377 0.674502 22.3144 2.35126 22.3144 4.41223C22.3144 7.19931 19.3883 9.86952 18.5766 10.5564C18.3977 10.4053 18.1161 10.1578 17.786 9.83421C17.7533 9.76971 17.7007 9.71745 17.636 9.68516C16.4715 8.51265 14.839 6.49714 14.839 4.41223C14.839 4.32278 14.8035 4.23699 14.7403 4.17374C14.677 4.11049 14.5912 4.07495 14.5018 4.07495C14.4123 4.07495 14.3265 4.11049 14.2633 4.17374C14.2 4.23699 14.1645 4.32278 14.1645 4.41223C14.1645 5.91486 14.8765 7.52706 16.2807 9.20418C16.4505 9.40677 16.6257 9.60484 16.806 9.79818C15.9366 10.0594 15.4347 10.504 15.4347 11.0395C15.4347 11.491 15.801 11.889 16.4662 12.16C17.0354 12.3919 17.7849 12.5197 18.5767 12.5197C19.3684 12.5197 20.1179 12.3919 20.6871 12.16C21.3522 11.8889 21.7185 11.491 21.7185 11.0394C21.7185 10.505 21.2162 10.0599 20.3471 9.7984ZM18.5766 11.8451C16.9802 11.8451 16.1093 11.3129 16.1093 11.0394C16.1093 10.8612 16.5054 10.5352 17.3514 10.3553C17.9206 10.9091 18.3431 11.2382 18.3703 11.2594C18.4294 11.3052 18.502 11.33 18.5768 11.3299C18.6515 11.33 18.7241 11.3052 18.7832 11.2594C18.8104 11.2383 19.2328 10.9092 19.8021 10.3554C20.1789 10.4358 20.5054 10.5535 20.7339 10.6926C20.9281 10.8109 21.0441 10.9405 21.0441 11.0394C21.044 11.3129 20.1731 11.8451 18.5766 11.8451Z"></path>
<path d="M18.576 2.44968C17.4939 2.44968 16.6135 3.33006 16.6135 4.41227C16.6135 5.49439 17.4939 6.37477 18.576 6.37477C19.6582 6.37477 20.5386 5.49444 20.5386 4.41227C20.5386 3.3301 19.6582 2.44968 18.576 2.44968ZM18.5761 5.70022C17.8658 5.70022 17.288 5.12244 17.288 4.41222C17.288 3.70201 17.8658 3.12418 18.5761 3.12418C19.2863 3.12418 19.8641 3.70196 19.8641 4.41222C19.8641 5.12244 19.2863 5.70022 18.5761 5.70022ZM14.2011 10.7021H14.0471C13.935 10.7021 13.8223 10.7096 13.7121 10.7242C13.6241 10.7369 13.5446 10.7837 13.491 10.8545C13.4374 10.9254 13.4138 11.0145 13.4256 11.1026C13.4373 11.1907 13.4833 11.2706 13.5536 11.325C13.6239 11.3794 13.7128 11.4038 13.8011 11.3929C13.8826 11.3822 13.9648 11.3768 14.0471 11.3768H14.2011V11.3767C14.3874 11.3767 14.5384 11.2258 14.5384 11.0395C14.5384 10.8531 14.3874 10.7021 14.2011 10.7021ZM13.0861 20.8211H13.0845L12.6391 20.8231C12.5496 20.8233 12.4639 20.859 12.4008 20.9224C12.3377 20.9858 12.3023 21.0717 12.3025 21.1611C12.3027 21.2506 12.3384 21.3363 12.4018 21.3994C12.4652 21.4625 12.5511 21.4979 12.6405 21.4977H12.6421L13.0876 21.4957C13.177 21.4952 13.2626 21.4593 13.3256 21.3958C13.3885 21.3322 13.4237 21.2463 13.4233 21.1569C13.4229 21.0677 13.3872 20.9823 13.324 20.9193C13.2608 20.8564 13.1753 20.8211 13.0861 20.8211ZM14.6013 15.0708H14.1558C14.0664 15.0708 13.9806 15.1063 13.9174 15.1696C13.8541 15.2328 13.8186 15.3186 13.8186 15.4081C13.8186 15.4975 13.8541 15.5833 13.9174 15.6466C13.9806 15.7098 14.0664 15.7453 14.1558 15.7453H14.6013C14.6456 15.7453 14.6894 15.7366 14.7304 15.7197C14.7713 15.7027 14.8085 15.6779 14.8398 15.6466C14.8711 15.6152 14.896 15.5781 14.9129 15.5371C14.9299 15.4962 14.9386 15.4524 14.9386 15.4081C14.9386 15.3638 14.9299 15.3199 14.9129 15.279C14.896 15.2381 14.8711 15.2009 14.8398 15.1696C14.8085 15.1382 14.7713 15.1134 14.7304 15.0965C14.6894 15.0795 14.6456 15.0708 14.6013 15.0708ZM12.8142 11.3893C12.7535 11.3236 12.6693 11.2846 12.5799 11.281C12.4905 11.2774 12.4034 11.3095 12.3376 11.3701C12.2116 11.4863 12.0977 11.615 11.9977 11.7543C11.9477 11.827 11.9282 11.9164 11.9434 12.0034C11.9586 12.0903 12.0072 12.1679 12.0789 12.2194C12.1506 12.2709 12.2396 12.2922 12.3269 12.2788C12.4141 12.2654 12.4927 12.2184 12.5456 12.1478C12.619 12.0456 12.7026 11.9512 12.795 11.8659C12.8607 11.8052 12.8997 11.721 12.9033 11.6316C12.9069 11.5422 12.8749 11.4551 12.8142 11.3893ZM14.8679 20.8129H14.8664L14.421 20.815C14.3325 20.8166 14.2482 20.8529 14.1862 20.9162C14.1243 20.9794 14.0897 21.0644 14.0899 21.153C14.09 21.2415 14.125 21.3264 14.1873 21.3893C14.2495 21.4523 14.3339 21.4883 14.4225 21.4895H14.424L14.8694 21.4875C14.9579 21.4858 15.0423 21.4495 15.1042 21.3863C15.1661 21.323 15.2007 21.238 15.2006 21.1495C15.2004 21.061 15.1654 20.9761 15.1032 20.9131C15.0409 20.8501 14.9565 20.8142 14.8679 20.8129ZM11.3043 20.8291H11.3027L10.8572 20.8312C10.7678 20.8316 10.6822 20.8675 10.6192 20.9311C10.5563 20.9946 10.5211 21.0805 10.5215 21.17C10.5219 21.2591 10.5576 21.3445 10.6208 21.4075C10.684 21.4704 10.7695 21.5057 10.8587 21.5057H10.8603L11.3057 21.5037C11.3952 21.5033 11.4808 21.4673 11.5437 21.4038C11.6067 21.3403 11.6419 21.2543 11.6415 21.1649C11.6411 21.0757 11.6054 20.9903 11.5422 20.9274C11.479 20.8645 11.3934 20.8291 11.3043 20.8291ZM13.0633 14.7873C12.957 14.7202 12.8578 14.6425 12.7671 14.5554C12.7027 14.4934 12.6162 14.4595 12.5268 14.4613C12.4373 14.463 12.3523 14.5002 12.2902 14.5646C12.2595 14.5965 12.2354 14.6342 12.2193 14.6754C12.2031 14.7167 12.1952 14.7607 12.1961 14.805C12.197 14.8492 12.2065 14.8929 12.2243 14.9335C12.242 14.9741 12.2676 15.0108 12.2995 15.0415C12.4231 15.1603 12.5584 15.2663 12.7034 15.3578C12.7408 15.3815 12.7826 15.3975 12.8263 15.405C12.8699 15.4126 12.9146 15.4114 12.9579 15.4016C13.0011 15.3918 13.0419 15.3736 13.0781 15.348C13.1143 15.3224 13.145 15.29 13.1686 15.2525C13.1923 15.215 13.2083 15.1732 13.2158 15.1296C13.2233 15.0859 13.2221 15.0412 13.2123 14.9981C13.2025 14.9549 13.1843 14.914 13.1588 14.8778C13.1332 14.8417 13.1008 14.8109 13.0633 14.7873ZM12.2342 13.5793C12.2115 13.4622 12.2001 13.3431 12.2001 13.2238L12.2002 13.2051C12.2007 13.1608 12.1925 13.1168 12.176 13.0757C12.1595 13.0346 12.1351 12.9971 12.1042 12.9654C12.0732 12.9338 12.0363 12.9085 11.9956 12.8911C11.9549 12.8736 11.9111 12.8644 11.8669 12.8639L11.8629 12.8639C11.7741 12.8639 11.6889 12.8989 11.6258 12.9613C11.5627 13.0237 11.5267 13.1085 11.5257 13.1972L11.5255 13.2238C11.5255 13.3867 11.5412 13.5497 11.5721 13.7084C11.5806 13.7518 11.5975 13.7932 11.622 13.8301C11.6465 13.8671 11.678 13.8988 11.7147 13.9235C11.7514 13.9483 11.7927 13.9656 11.8361 13.9744C11.8795 13.9832 11.9242 13.9834 11.9677 13.9749C12.0112 13.9664 12.0526 13.9494 12.0895 13.925C12.1264 13.9005 12.1581 13.869 12.1829 13.8323C12.2076 13.7956 12.2249 13.7543 12.2337 13.7109C12.2425 13.6675 12.2427 13.6228 12.2342 13.5793ZM16.3832 15.0708H15.9378C15.8483 15.0708 15.7625 15.1063 15.6993 15.1696C15.636 15.2328 15.6005 15.3186 15.6005 15.4081C15.6005 15.4975 15.636 15.5833 15.6993 15.6466C15.7625 15.7098 15.8483 15.7453 15.9378 15.7453H16.3832C16.4727 15.7453 16.5584 15.7098 16.6217 15.6466C16.6849 15.5833 16.7205 15.4975 16.7205 15.4081C16.7205 15.3186 16.6849 15.2328 16.6217 15.1696C16.5584 15.1063 16.4727 15.0708 16.3832 15.0708ZM21.7981 15.7575C21.6679 15.6547 21.5298 15.5621 21.3852 15.4807C21.2231 15.3892 21.0173 15.4467 20.9258 15.609C20.9041 15.6475 20.8902 15.69 20.8849 15.734C20.8795 15.778 20.8829 15.8226 20.8948 15.8652C20.9068 15.9079 20.927 15.9478 20.9543 15.9826C20.9816 16.0175 21.0156 16.0466 21.0541 16.0683C21.1682 16.1327 21.2772 16.2058 21.38 16.2869C21.4395 16.334 21.513 16.3596 21.5888 16.3595C21.659 16.3596 21.7273 16.3378 21.7845 16.2972C21.8417 16.2566 21.8848 16.1992 21.9078 16.133C21.9308 16.0668 21.9326 15.995 21.913 15.9277C21.8933 15.8604 21.8532 15.8009 21.7981 15.7575ZM20.5462 21.0546C20.5206 20.8701 20.3501 20.741 20.1659 20.7667C20.0555 20.7819 19.9424 20.79 19.8296 20.7904L19.7665 20.7907C19.6783 20.793 19.5946 20.8296 19.5332 20.8928C19.4717 20.9559 19.4374 21.0406 19.4376 21.1288C19.4378 21.2169 19.4725 21.3015 19.5343 21.3644C19.596 21.4272 19.6799 21.4635 19.768 21.4653H19.7697L19.8327 21.465C19.975 21.4644 20.1172 21.4543 20.2583 21.4349C20.3021 21.4288 20.3444 21.4142 20.3826 21.3918C20.4208 21.3694 20.4543 21.3397 20.481 21.3044C20.5077 21.2691 20.5273 21.2288 20.5384 21.186C20.5496 21.1431 20.5523 21.0985 20.5462 21.0546ZM22.0347 20.1062C22.0042 20.0741 21.9676 20.0483 21.9271 20.0304C21.8866 20.0125 21.843 20.0027 21.7987 20.0016C21.7544 20.0005 21.7104 20.0082 21.669 20.0241C21.6277 20.0401 21.59 20.064 21.5579 20.0946C21.4629 20.185 21.3611 20.2679 21.2534 20.3427C21.1799 20.3937 21.1297 20.4718 21.1137 20.5598C21.0978 20.6478 21.1174 20.7385 21.1684 20.8121C21.1994 20.8569 21.2409 20.8936 21.2892 20.9188C21.3376 20.9441 21.3913 20.9573 21.4459 20.9572C21.5144 20.9572 21.5814 20.9363 21.6377 20.8971C21.7741 20.8025 21.9029 20.6975 22.0231 20.583C22.0552 20.5525 22.081 20.5159 22.0989 20.4754C22.1168 20.4349 22.1266 20.3913 22.1277 20.347C22.1288 20.3027 22.1211 20.2587 22.1051 20.2173C22.0892 20.176 22.0652 20.1382 22.0347 20.1062ZM22.6911 18.4682C22.6032 18.4517 22.5123 18.4707 22.4385 18.5212C22.3646 18.5716 22.3138 18.6493 22.2973 18.7372C22.273 18.8658 22.2387 18.9924 22.1948 19.1158C22.1659 19.1998 22.1713 19.2918 22.2098 19.3718C22.2483 19.4518 22.3169 19.5135 22.4005 19.5433C22.4842 19.5731 22.5762 19.5687 22.6567 19.5311C22.7371 19.4935 22.7995 19.4256 22.8303 19.3423C22.886 19.1858 22.9294 19.0253 22.9602 18.862C22.9767 18.7741 22.9577 18.6832 22.9072 18.6094C22.8567 18.5355 22.779 18.4847 22.6911 18.4682ZM22.8914 17.384C22.8455 17.2242 22.7872 17.0683 22.7169 16.9176C22.6782 16.8379 22.6097 16.7766 22.5263 16.747C22.4428 16.7173 22.3511 16.7217 22.2708 16.7592C22.1905 16.7966 22.1282 16.8641 22.0973 16.9471C22.0664 17.0301 22.0694 17.122 22.1056 17.2028C22.1609 17.3214 22.2069 17.4443 22.2431 17.5701C22.2633 17.6405 22.3058 17.7024 22.3643 17.7464C22.4227 17.7905 22.4939 17.8144 22.5671 17.8144C22.6194 17.8144 22.6709 17.8023 22.7177 17.779C22.7644 17.7557 22.8051 17.7218 22.8366 17.6801C22.868 17.6384 22.8894 17.5899 22.8989 17.5385C22.9084 17.4872 22.9059 17.4343 22.8914 17.384ZM18.1651 15.0708H17.7196C17.6302 15.0708 17.5444 15.1063 17.4811 15.1696C17.4179 15.2328 17.3824 15.3186 17.3824 15.4081C17.3824 15.4975 17.4179 15.5833 17.4811 15.6466C17.5444 15.7098 17.6302 15.7453 17.7196 15.7453H18.1651C18.2545 15.7453 18.3403 15.7098 18.4036 15.6466C18.4668 15.5833 18.5024 15.4975 18.5024 15.4081C18.5024 15.3186 18.4668 15.2328 18.4036 15.1696C18.3403 15.1063 18.2545 15.0708 18.1651 15.0708ZM16.6498 20.8048H16.6482L16.2028 20.8069C16.1143 20.8085 16.03 20.8448 15.968 20.9081C15.9061 20.9713 15.8715 21.0564 15.8717 21.1449C15.8719 21.2334 15.9069 21.3183 15.9691 21.3812C16.0313 21.4442 16.1158 21.4802 16.2043 21.4814H16.2059L16.6513 21.4794C16.7408 21.4792 16.8265 21.4435 16.8896 21.3801C16.9527 21.3167 16.988 21.2308 16.9878 21.1414C16.9876 21.0519 16.9519 20.9662 16.8885 20.9031C16.8251 20.84 16.7393 20.8046 16.6498 20.8048ZM19.9618 15.074C19.9139 15.0719 19.8661 15.0708 19.8182 15.0708H19.5015C19.412 15.0708 19.3262 15.1064 19.263 15.1696C19.1997 15.2329 19.1642 15.3187 19.1642 15.4081C19.1642 15.4976 19.1997 15.5833 19.263 15.6466C19.3262 15.7098 19.412 15.7454 19.5015 15.7454H19.8182V15.7453C19.8563 15.7453 19.8943 15.7462 19.9319 15.7479C19.9762 15.7498 20.0204 15.7431 20.062 15.7279C20.1036 15.7128 20.1419 15.6897 20.1746 15.6598C20.2072 15.6299 20.2337 15.5938 20.2524 15.5537C20.2712 15.5136 20.2818 15.4701 20.2838 15.4259C20.2857 15.3817 20.279 15.3374 20.2639 15.2958C20.2487 15.2542 20.2256 15.2159 20.1957 15.1833C20.1658 15.1506 20.1297 15.1241 20.0896 15.1054C20.0495 15.0866 20.006 15.076 19.9618 15.074ZM18.4316 20.7968H18.4301L17.9846 20.7988C17.8961 20.8004 17.8118 20.8368 17.7499 20.9C17.6879 20.9633 17.6533 21.0483 17.6535 21.1368C17.6537 21.2253 17.6887 21.3102 17.7509 21.3732C17.8131 21.4362 17.8976 21.4721 17.9861 21.4734H17.9877L18.4331 21.4713C18.5226 21.4709 18.6082 21.435 18.6711 21.3715C18.7341 21.3079 18.7693 21.222 18.7689 21.1325C18.7685 21.0434 18.7328 20.958 18.6696 20.895C18.6064 20.8321 18.5208 20.7968 18.4316 20.7968Z"></path>
</g>
</svg>
Tour Package </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="Hotel-tab" data-bs-toggle="tab" data-bs-target="#Hotel" type="button" role="tab" aria-controls="Hotel" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
<g>
<path d="M19.5496 12.2665H16.0038C15.9021 12.2665 15.8046 12.3069 15.7327 12.3788C15.6608 12.4506 15.6204 12.5481 15.6204 12.6498V22.2333H13.6079V18.2562C13.6079 18.1545 13.5675 18.057 13.4956 17.9851C13.4237 17.9132 13.3262 17.8728 13.2245 17.8728H9.77448C9.67281 17.8728 9.57531 17.9132 9.50342 17.9851C9.43153 18.057 9.39114 18.1545 9.39114 18.2562V22.2333H7.37861V8.33724C7.37861 7.91452 7.72256 7.57056 8.14529 7.57056H14.8537C15.2765 7.57056 15.6204 7.91452 15.6204 8.33724V10.4696C15.6204 10.5712 15.6608 10.6687 15.7327 10.7406C15.8046 10.8125 15.9021 10.8529 16.0038 10.8529C16.1054 10.8529 16.2029 10.8125 16.2748 10.7406C16.3467 10.6687 16.3871 10.5712 16.3871 10.4696V8.33724C16.3871 7.49174 15.6992 6.80389 14.8537 6.80389H8.14529C7.29978 6.80389 6.61193 7.49174 6.61193 8.33724V22.2333H3.44937C3.02665 22.2333 2.6827 21.8894 2.6827 21.4666V13.7998C2.6827 13.3771 3.02665 13.0332 3.44937 13.0332H4.79106C4.89273 13.0332 4.99024 12.9928 5.06213 12.9209C5.13402 12.849 5.1744 12.7515 5.1744 12.6498C5.1744 12.5481 5.13402 12.4506 5.06213 12.3788C4.99024 12.3069 4.89273 12.2665 4.79106 12.2665H3.44937C2.60387 12.2665 1.91602 12.9543 1.91602 13.7998V21.4666C1.91602 22.3121 2.60387 23 3.44937 23H16.0038C16.1054 23 16.2029 22.9596 16.2748 22.8877C16.3467 22.8158 16.3871 22.7183 16.3871 22.6166V13.0332H19.5496C19.9724 13.0332 20.3163 13.3771 20.3163 13.7998V21.4666C20.3163 21.8894 19.9724 22.2333 19.5496 22.2333H17.9205C17.8188 22.2333 17.7213 22.2737 17.6494 22.3456C17.5775 22.4175 17.5371 22.515 17.5371 22.6166C17.5371 22.7183 17.5775 22.8158 17.6494 22.8877C17.7213 22.9596 17.8188 23 17.9205 23H19.5496C20.3951 23 21.083 22.3121 21.083 21.4666V13.7998C21.083 12.9543 20.3951 12.2665 19.5496 12.2665ZM10.1578 18.6395H12.8412V22.2333H10.1578V18.6395ZM9.91047 3.38493L9.66638 4.81306C9.61295 5.12577 9.94233 5.36473 10.2231 5.21667L11.4995 4.54323L12.7759 5.21667C13.0564 5.36473 13.3861 5.12591 13.3326 4.81306L13.0885 3.38493L14.1222 2.37377C14.3485 2.15239 14.2231 1.76613 13.9095 1.72042L12.4821 1.51226L11.8435 0.213796C11.7034 -0.0712652 11.2957 -0.0712652 11.1556 0.213796L10.517 1.51226L9.0896 1.72042C8.77631 1.76603 8.65029 2.15215 8.87684 2.37377L9.91047 3.38493ZM10.8272 2.24181C10.8888 2.23283 10.9472 2.209 10.9975 2.17239C11.0478 2.13577 11.0884 2.08747 11.1159 2.03164L11.4995 1.25159L11.8831 2.03164C11.9106 2.08746 11.9512 2.13577 12.0015 2.17238C12.0518 2.209 12.1102 2.23283 12.1718 2.24181L13.0324 2.36735L12.4087 2.97739C12.3644 3.02074 12.3313 3.07419 12.3122 3.13316C12.293 3.19213 12.2885 3.25486 12.2989 3.31597L12.4458 4.17571C11.6045 3.73185 11.6245 3.72648 11.4995 3.72648C11.3729 3.72648 11.3843 3.73717 10.5531 4.17571L10.7 3.31597C10.7105 3.25486 10.7059 3.19213 10.6868 3.13316C10.6677 3.07418 10.6345 3.02073 10.5902 2.97739L9.96653 2.36735L10.8272 2.24181ZM5.66953 3.49173C5.75655 3.22397 6.00088 3.22766 6.24406 3.1923C6.35365 2.9702 6.42462 2.73842 6.70633 2.73842C6.98784 2.73842 7.05986 2.97193 7.16863 3.1923L7.43371 3.23082C7.74748 3.27644 7.87335 3.66323 7.64618 3.8847L7.45436 4.07168C7.4962 4.31577 7.57507 4.54506 7.34713 4.71061C7.11937 4.87612 6.92387 4.72949 6.70633 4.61511C6.48715 4.73035 6.29347 4.87621 6.06552 4.71061C5.83772 4.54515 5.91674 4.3139 5.95829 4.07168C5.78113 3.89889 5.58247 3.75964 5.66953 3.49173ZM2.31531 5.40843C2.40233 5.14067 2.64666 5.14436 2.88984 5.109L3.00839 4.86879C3.14874 4.58449 3.55546 4.58425 3.69591 4.86879L3.81446 5.109C4.05951 5.1446 4.30192 5.14048 4.38899 5.40843C4.47601 5.6762 4.27614 5.81683 4.10019 5.98838L4.14547 6.2524C4.18577 6.48729 4.00426 6.70053 3.76759 6.70053C3.64943 6.70053 3.60271 6.66358 3.3522 6.53181L3.11515 6.65649C2.8345 6.80398 2.5053 6.56516 2.55892 6.2524L2.60421 5.98838C2.42691 5.81559 2.22825 5.67634 2.31531 5.40843ZM15.2559 3.49173C15.3429 3.22397 15.5872 3.22766 15.8304 3.1923L15.9489 2.95209C16.0893 2.66775 16.496 2.6676 16.6365 2.95209L16.755 3.1923C17 3.2279 17.2425 3.22378 17.3295 3.49173C17.4165 3.7595 17.2167 3.90013 17.0407 4.07168L17.086 4.3357C17.1263 4.5706 16.9448 4.78383 16.7081 4.78383C16.59 4.78383 16.5433 4.74688 16.2927 4.61511L16.0557 4.73979C15.775 4.88728 15.4458 4.64846 15.4995 4.3357L15.5447 4.07168C15.3674 3.89889 15.1688 3.75964 15.2559 3.49173ZM18.6101 5.40843C18.6971 5.14067 18.9414 5.14436 19.1846 5.109L19.3032 4.86879C19.4435 4.58444 19.8502 4.5843 19.9907 4.86879L20.1092 5.109C20.3542 5.1446 20.5967 5.14048 20.6838 5.40843C20.7708 5.6762 20.5709 5.81683 20.395 5.98838L20.4402 6.2524C20.4805 6.48729 20.299 6.70053 20.0624 6.70053C19.9442 6.70053 19.8975 6.66358 19.647 6.53181L19.4099 6.65649C19.1293 6.80398 18.8001 6.56516 18.8537 6.2524L18.899 5.98838C18.7216 5.81559 18.523 5.67634 18.6101 5.40843ZM4.64731 15.7165C4.74898 15.7165 4.84648 15.7569 4.91837 15.8288C4.99026 15.9007 5.03065 15.9982 5.03065 16.0999V17.7291C5.03065 17.8307 4.99026 17.9282 4.91837 18.0001C4.84648 18.072 4.74898 18.1124 4.64731 18.1124C4.54564 18.1124 4.44814 18.072 4.37625 18.0001C4.30436 17.9282 4.26397 17.8307 4.26397 17.7291V16.0999C4.26397 15.9982 4.30436 15.9007 4.37625 15.8288C4.44814 15.7569 4.54564 15.7165 4.64731 15.7165ZM18.3517 18.1124C18.25 18.1124 18.1525 18.072 18.0806 18.0001C18.0088 17.9282 17.9684 17.8307 17.9684 17.7291V16.0999C17.9684 15.9982 18.0088 15.9007 18.0806 15.8288C18.1525 15.7569 18.25 15.7165 18.3517 15.7165C18.4534 15.7165 18.5509 15.7569 18.6228 15.8288C18.6947 15.9007 18.735 15.9982 18.735 16.0999V17.7291C18.735 17.8307 18.6947 17.9282 18.6228 18.0001C18.5509 18.072 18.4534 18.1124 18.3517 18.1124ZM13.7037 11.4519H9.29531C9.19364 11.4519 9.09613 11.4115 9.02424 11.3396C8.95235 11.2677 8.91197 11.1702 8.91197 11.0685C8.91197 10.9669 8.95235 10.8694 9.02424 10.7975C9.09613 10.7256 9.19364 10.6852 9.29531 10.6852H13.7037C13.8054 10.6852 13.9029 10.7256 13.9748 10.7975C14.0467 10.8694 14.0871 10.9669 14.0871 11.0685C14.0871 11.1702 14.0467 11.2677 13.9748 11.3396C13.9029 11.4115 13.8054 11.4519 13.7037 11.4519ZM13.0329 14.3748C13.1345 14.3748 13.232 14.4152 13.3039 14.4871C13.3758 14.559 13.4162 14.6565 13.4162 14.7582C13.4162 14.8599 13.3758 14.9574 13.3039 15.0292C13.232 15.1011 13.1345 15.1415 13.0329 15.1415H9.96615C9.86448 15.1415 9.76698 15.1011 9.69509 15.0292C9.6232 14.9574 9.58281 14.8599 9.58281 14.7582C9.58281 14.6565 9.6232 14.559 9.69509 14.4871C9.76698 14.4152 9.86448 14.3748 9.96615 14.3748H13.0329Z"></path>
</g>
</svg>
Hotel </button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="Transport-tab" data-bs-toggle="tab" data-bs-target="#Transport" type="button" role="tab" aria-controls="Transport" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 51 51">
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.8564 34.4958C45.8564 35.7619 46.8834 36.7871 48.1488 36.7871H50.2528C50.5289 36.7871 50.7528 36.5633 50.7528 36.2871V31.249C50.7528 30.9728 50.5289 30.749 50.2528 30.749H48.1488C46.883 30.749 45.8564 31.7757 45.8564 33.0413V34.4958ZM48.1488 35.7871C47.435 35.7871 46.8564 35.2088 46.8564 34.4958V33.0413C46.8564 32.328 47.4354 31.749 48.1488 31.749H49.7528V35.7871H48.1488Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.578816 36.5923C0.673478 36.7152 0.819779 36.7871 0.974858 36.7871H3.80037C5.06692 36.7871 6.09273 35.7617 6.09273 34.4958V33.0413C6.09273 31.7758 5.0673 30.749 3.80037 30.749H2.30235C2.07527 30.749 1.87671 30.902 1.81885 31.1216L0.49136 36.1597C0.451847 36.3097 0.484154 36.4695 0.578816 36.5923ZM1.62367 35.7871L2.68767 31.749H3.80037C4.51466 31.749 5.09273 32.3277 5.09273 33.0413V34.4958C5.09273 35.209 4.51504 35.7871 3.80037 35.7871H1.62367Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.26435 27.315C8.26436 27.3149 8.26435 27.315 8.26435 27.315L10.3466 19.4132C10.3639 19.3473 10.4026 19.2887 10.4565 19.247C10.5105 19.2054 10.5767 19.1828 10.6448 19.1827H18.1558C18.6207 19.1827 18.9975 19.5595 18.9975 20.0243V27.5296C18.9975 27.9943 18.6207 28.3711 18.1558 28.3711H9.07815C8.52629 28.3711 8.12377 27.8488 8.26435 27.315ZM7.29734 27.0602C6.98972 28.2281 7.87034 29.3711 9.07815 29.3711H18.1558C19.1729 29.3711 19.9975 28.5466 19.9975 27.5296V20.0243C19.9975 19.0073 19.173 18.1827 18.1558 18.1827H10.6442C10.3553 18.183 10.0741 18.2789 9.84539 18.4555C9.61672 18.6321 9.4529 18.8793 9.37949 19.1587L7.29734 27.0602Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M25.2215 28.3711C24.7567 28.3711 24.3799 27.9943 24.3799 27.5295V20.0243C24.3799 19.5596 24.7566 19.1828 25.2215 19.1828H32.4557C32.5237 19.1828 32.5898 19.2054 32.6436 19.2469C32.6974 19.2884 32.736 19.3466 32.7533 19.4123L33.3161 21.5481C33.3864 21.8151 33.6599 21.9746 33.9269 21.9042C34.194 21.8339 34.3534 21.5604 34.2831 21.2933L33.7204 19.1577C33.6469 18.8785 33.483 18.6314 33.2543 18.455C33.0257 18.2787 32.7451 18.1829 32.4563 18.1828H25.2215C24.2044 18.1828 23.3799 19.0073 23.3799 20.0243V27.5295C23.3799 28.5466 24.2044 29.3711 25.2215 29.3711H34.0221C35.2493 29.3711 36.1076 28.2048 35.7966 27.0381L35.792 27.0209L35.7916 27.0191L35.0628 24.2527C34.9924 23.9857 34.719 23.8263 34.4519 23.8966C34.1849 23.967 34.0254 24.2405 34.0958 24.5075L34.825 27.2756L34.8255 27.2774L34.8304 27.2957C34.9772 27.8466 34.5727 28.3711 34.0221 28.3711H25.2215Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0698 41.0047C11.0698 42.687 12.4336 44.0508 14.1159 44.0508C15.7983 44.0508 17.162 42.687 17.162 41.0047C17.162 39.3224 15.7983 37.9586 14.1159 37.9586C12.4336 37.9586 11.0698 39.3224 11.0698 41.0047ZM14.1159 43.0508C12.9859 43.0508 12.0698 42.1347 12.0698 41.0047C12.0698 39.8746 12.9859 38.9586 14.1159 38.9586C15.246 38.9586 16.162 39.8746 16.162 41.0047C16.162 42.1347 15.246 43.0508 14.1159 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M32.3147 41.0047C32.3147 42.687 33.6785 44.0508 35.3608 44.0508C37.0431 44.0508 38.4069 42.687 38.4069 41.0047C38.4069 39.3224 37.0431 37.9586 35.3608 37.9586C33.6785 37.9586 32.3147 39.3224 32.3147 41.0047ZM35.3608 43.0508C34.2308 43.0508 33.3147 42.1347 33.3147 41.0047C33.3147 39.8746 34.2308 38.9586 35.3608 38.9586C36.4908 38.9586 37.4069 39.8746 37.4069 41.0047C37.4069 42.1347 36.4908 43.0508 35.3608 43.0508Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.52888 13.9199C6.44663 13.9199 5.56934 13.0427 5.56934 11.9605V8.40513C5.56934 7.32301 6.44664 6.44568 7.52888 6.44568H12.0994V13.9199H7.52888ZM4.56934 11.9605C4.56934 13.595 5.8944 14.9199 7.52888 14.9199H12.5994C12.8755 14.9199 13.0994 14.6961 13.0994 14.4199V5.94568C13.0994 5.66954 12.8755 5.44568 12.5994 5.44568H7.52888C5.89439 5.44568 4.56934 6.7707 4.56934 8.40513V11.9605Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 14.4199C12.0996 14.6961 12.3235 14.9199 12.5996 14.9199H17.2592C17.5354 14.9199 17.7592 14.6961 17.7592 14.4199V5.94568C17.7592 4.38279 16.4923 3.11582 14.9294 3.11582C13.3666 3.11582 12.0996 4.3828 12.0996 5.94568V14.4199ZM13.0996 13.9199V5.94568C13.0996 4.93506 13.9189 4.11582 14.9294 4.11582C15.94 4.11582 16.7592 4.93507 16.7592 5.94568V13.9199H13.0996Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.759 14.4199C16.759 14.6961 16.9829 14.9199 17.259 14.9199H25.1014C25.3775 14.9199 25.6014 14.6961 25.6014 14.4199V5.94568C25.6014 5.66954 25.3775 5.44568 25.1014 5.44568H17.259C16.9829 5.44568 16.759 5.66954 16.759 5.94568V14.4199ZM17.759 13.9199V6.44568H24.6014V13.9199H17.759Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.6016 14.4199C24.6016 14.6961 24.8254 14.9199 25.1016 14.9199H29.7612C30.0373 14.9199 30.2612 14.6961 30.2612 14.4199V5.94568C30.2612 4.38279 28.9942 3.11582 27.4313 3.11582C25.8684 3.11582 24.6016 4.38282 24.6016 5.94568V14.4199ZM25.6016 13.9199V5.94568C25.6016 4.93504 26.4207 4.11582 27.4313 4.11582C28.4419 4.11582 29.2612 4.93507 29.2612 5.94568V13.9199H25.6016Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M36.791 11.9609C36.791 12.2371 37.0149 12.4609 37.291 12.4609H40.6825C41.9404 12.4609 42.9601 11.4412 42.9601 10.1833C42.9601 8.92542 41.9404 7.90569 40.6825 7.90569H37.291C37.0149 7.90569 36.791 8.12955 36.791 8.40569V11.9609ZM37.791 11.4609V8.90569H40.6825C41.3881 8.90569 41.9601 9.47771 41.9601 10.1833C41.9601 10.8889 41.3881 11.4609 40.6825 11.4609H37.791Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M29.261 14.4199C29.261 14.6961 29.4848 14.9199 29.761 14.9199H34.8315C36.466 14.9199 37.791 13.595 37.791 11.9605V8.40513C37.791 6.7707 36.466 5.44568 34.8315 5.44568H29.761C29.4848 5.44568 29.261 5.66954 29.261 5.94568V14.4199ZM30.261 13.9199V6.44568H34.8315C35.9137 6.44568 36.791 7.32301 36.791 8.40513V11.9605C36.791 13.0427 35.9137 13.9199 34.8315 13.9199H30.261Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.23584 41.0046C7.23584 44.8044 10.3162 47.8848 14.116 47.8848C17.9158 47.8848 20.9962 44.8044 20.9962 41.0046C20.9962 37.2048 17.9158 34.1244 14.116 34.1244C10.3162 34.1244 7.23584 37.2048 7.23584 41.0046ZM14.116 46.8848C10.8685 46.8848 8.23584 44.2521 8.23584 41.0046C8.23584 37.7571 10.8685 35.1244 14.116 35.1244C17.3635 35.1244 19.9962 37.7571 19.9962 41.0046C19.9962 44.2521 17.3635 46.8848 14.116 46.8848Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34781 36.8327C1.34784 36.8326 1.34778 36.8328 1.34781 36.8327L1.45832 36.4151L2.78595 31.3765L3.76729 27.6525C3.83766 27.3855 3.67824 27.112 3.41121 27.0416C3.14418 26.9712 2.87067 27.1306 2.80031 27.3977L1.81896 31.1217L0.380936 36.5774C-0.286037 39.1098 1.62328 41.5898 4.24304 41.5898H7.73792C7.87144 41.5898 7.99942 41.5364 8.09334 41.4415C8.18725 41.3466 8.2393 41.2181 8.23789 41.0846C8.23769 41.0652 8.23702 41.0463 8.2366 41.0341L8.23647 41.0303C8.23598 41.0161 8.23583 41.0097 8.23583 41.0051C8.23583 37.7575 10.8685 35.1249 14.116 35.1249C17.3635 35.1249 19.9961 37.7575 19.9961 41.0051C19.9961 41.0248 19.996 41.0263 19.9956 41.0287C19.9953 41.0318 19.9947 41.0365 19.994 41.0828C19.9921 41.2166 20.044 41.3456 20.1379 41.4409C20.2319 41.5362 20.3601 41.5898 20.494 41.5898H28.9827C29.1166 41.5898 29.2448 41.5362 29.3388 41.4409C29.4327 41.3456 29.4846 41.2166 29.4827 41.0828C29.4821 41.0402 29.4815 41.0338 29.4811 41.0294C29.4808 41.0258 29.4806 41.0236 29.4806 41.0051C29.4806 37.7575 32.1132 35.1249 35.3607 35.1249C38.6082 35.1249 41.2409 37.7575 41.2409 41.0051C41.2409 41.0097 41.2407 41.0161 41.2402 41.0303L41.2401 41.0341C41.2397 41.0462 41.239 41.0652 41.2388 41.0846C41.2374 41.2181 41.2894 41.3466 41.3834 41.4415C41.4773 41.5364 41.6053 41.5898 41.7388 41.5898H46.7595C48.9651 41.5898 50.7529 39.8019 50.7529 37.5955V31.2491C50.7529 29.0436 48.9651 27.2556 46.7595 27.2556H41.6271C41.2359 27.2555 40.8556 27.126 40.5458 26.8872C40.2359 26.6483 40.0138 26.3136 39.9141 25.9353L37.8427 18.0728C37.1983 15.6254 34.9851 13.9204 32.4561 13.9204H10.6442C8.11412 13.9204 5.90196 15.6254 5.25754 18.0728L3.58772 24.4094C3.51735 24.6764 3.67677 24.9499 3.9438 25.0203C4.21083 25.0907 4.48434 24.9312 4.5547 24.6642L6.22455 18.3275C6.75333 16.3193 8.56839 14.9204 10.6442 14.9204H32.4561C34.5309 14.9204 36.3469 16.3193 36.8757 18.3274L38.9471 26.1901C39.1031 26.782 39.4505 27.3056 39.9353 27.6792C40.4201 28.0528 41.0149 28.2555 41.627 28.2556H46.7595C48.4127 28.2556 49.7529 29.5959 49.7529 31.2491V37.5955C49.7529 39.2498 48.4127 40.5898 46.7595 40.5898H42.2285C42.0139 36.9834 39.0211 34.1249 35.3607 34.1249C31.7003 34.1249 28.7077 36.9834 28.493 40.5898H20.9838C20.7691 36.9834 17.7764 34.1249 14.116 34.1249C10.4556 34.1249 7.46284 36.9834 7.24815 40.5898H4.24304C2.2795 40.5898 0.848019 38.7312 1.34781 36.8327Z"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M28.4805 41.0046C28.4805 44.8044 31.5608 47.8848 35.3606 47.8848C39.1604 47.8848 42.2408 44.8044 42.2408 41.0046C42.2408 37.2048 39.1604 34.1244 35.3606 34.1244C31.5608 34.1244 28.4805 37.2048 28.4805 41.0046ZM35.3606 46.8848C32.1131 46.8848 29.4805 44.2521 29.4805 41.0046C29.4805 37.7571 32.1131 35.1244 35.3606 35.1244C38.6082 35.1244 41.2408 37.7571 41.2408 41.0046C41.2408 44.2521 38.6082 46.8848 35.3606 46.8848Z"></path>
</svg>
Transports </button>
</li>
</ul>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="tab-content" id="facilitesTabContent">
<div class="tab-pane fade show active" id="Tour" role="tabpanel" aria-labelledby="Tour-tab">
<div class="row g-4">
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking.php" class="card-img" onclick="checkLoginAndBook(event)"><img loading="lazy" decoding="async" width="650" height="450" src="assets/images/lodge.jpg" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="batch">
<span class="date">3 DAYS</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
</svg>
<ul class="location-list">
<li>Kigali+Kayonza+Nyagatare</li>	
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking.php" onclick="checkLoginAndBook(event)" >Spend Your Holidays In Akagera. Embracing wildlife Animals .</a></h5>	
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Akagera Park</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Lake Ihema</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Game Drive</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Kigali City</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;340<del>&#36;450</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>



<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 1.php" class="card-img" onclick="checkLoginAndBook(event)"><img loading="lazy" decoding="async" width="650" height="450" src="assets/images/Trekking.jpg" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="batch">
<span class="date">4 Days / 4 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
</svg>
<ul class="location-list">
<li> Kigali+Musanze</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 1.php" onclick="checkLoginAndBook(event)">Embracing Gorilla Trekking while having a lifetime Experience And Iconic Culture.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Kigali City</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Musanze</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Volcanoes National Park</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Souvenir Shopping</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;2,650<del>&#36;3,000</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 1.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 2.php" class="card-img" onclick="checkLoginAndBook(event)"><img loading="lazy" decoding="async" width="650" height="450" src="assets/images/virunga.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="batch">
<span class="date">6 Days / 7 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
</svg>
<ul class="location-list">
<li> Kigali+Gisenyi+Rusizi</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 2.php" onclick="checkLoginAndBook(event)">Immersive adventure Experience in the Volcanoes and Local Cuisine.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Kigali City</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Mount Gorilla Trekking</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Lake Kivu</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Canopy WalkWay</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Ndambarare WaterFall</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">King Palace Museum</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;1,750<del>&#36;2,000</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 2.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 3.php" class="card-img" onclick="checkLoginAndBook(event)"><img loading="lazy" decoding="async" width="650" height="450" src="assets/images/iby-iwacu.jpg" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="batch">
<span class="date">8 Days / 9 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
</svg>
<ul class="location-list">
<li>Kigali+Rubavu</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 3.php" onclick="checkLoginAndBook(event)">Exploring Ancient Cultural and Community Based Experience.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Kigali City</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Lake Kivu</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Ibere Rya Bigogwe Visit</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Night Fishing in lake Kivu</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">CountrySide Exploration</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;760<del>&#36;800</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 3.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 4.php" class="card-img" onclick="checkLoginAndBook(event)"><img loading="lazy" decoding="async" width="650" height="450" src="assets/images/serena1.jpg" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="batch">
<span class="date">8 Days / 9 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
</svg>
<!--ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/brazil/"> Kigali City</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Musanze</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Rubavu</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Rusizi</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Huye</a></li>
</ul-->
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 4.php" onclick="checkLoginAndBook(event)">Adventure country side of Rwanda, Lake Kivu Beach and Cannopy Beach.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Cultural Tours</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Hiking and Visit Island</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Gorillas Trekking</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Chimpanzee Watch</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Boat Trips</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Museums</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Kigali City Tours</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Game Driver</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Fishing If Applicable</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;170<del>&#36;220</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 4.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 5.php" class="card-img" onclick="checkLoginAndBook(event)"><img loading="lazy" decoding="async" width="650" height="450" src="assets/images/imigongo.jpeg" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="batch">
<span class="date">1 Days / 2 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
</svg>
<!--ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/australia/"> Kigali</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Kayonza</a></li>
</ul-->
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 5.php" onclick="checkLoginAndBook(event)">A Journey Of Touring Beautiful Akagera And Visiting Rwandan Art.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Game Driver</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Visit Imigongo Art Center</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;450<del>&#36;500</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 5.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="Hotel" role="tabpanel" aria-labelledby="Hotel-tab">
<div class="row g-4">
<div class="col-xxl-4 col-md-6">
<div class="room-suits-card two">
<div class="row g-0">
<div class="col-md-12">
<div class="swiper hotel-img-slider">
<span class="batch">Breakfast Included</span>
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="room-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-06-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> </div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-03-1.webp" alt="hotel-image" />
</div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-04-1.webp" alt="hotel-image" />
</div>
</div>
</div>
<div class="swiper-pagination5"></div>
</div>
</div>
<div class="col-md-12">
<div class="room-content">
<div class="content-top">
<h5><a href="error.php">Eclipse Haven Lodge</a></h5>
<ul class="loaction-area">
<li><i class="bi bi-geo-alt"></i></li>
<li>
House 168/170, Road 02, Avenue 01, Mirpur DOHS, Dhaka, Bangladesh - <a href="#">See Map</a>
<span>2 km to city center</span>
</li>
</ul>
<ul class="facilisis">
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framefahin.svg" alt="highlights-image" />
TV </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framegas.svg" alt="highlights-image" />
Heater </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framelock.svg" alt="highlights-image" />
Saving Safe </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framewififree.svg" alt="highlights-image" />
Free Wifi </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framephone.svg" alt="highlights-image" />
Phone </li>
</ul>
</div>
<div class="content-bottom">
<div class="room-type">
<h6>Sea View</h6>
<h6>Semi Double</h6>
<span>1 king bed</span>
<div class="deals">
<span> <strong>Free cancellation</strong> <br> before 48 hours </span>
</div>
</div>
<div class="price-and-book">
<div class="price-area">
<p>1 Night, 2 Adults</p>
<span>&#36;126<del>&#36;160</del></span> </div>
<div class="book-btn">
<a href="error.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Check Availability <i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-4 col-md-6">
<div class="room-suits-card two">
<div class="row g-0">
<div class="col-md-12">
<div class="swiper hotel-img-slider">
<span class="batch">Breakfast Included</span>
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="room-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/room-04-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> </div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-01-1.webp" alt="hotel-image" />
</div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-02-1.webp" alt="hotel-image" />
</div>
</div>
</div>
<div class="swiper-pagination5"></div>
</div>
</div>
<div class="col-md-12">
<div class="room-content">
<div class="content-top">
<h5><a href="error.php" onclick="checkLoginAndBook(event)">Twilight Serenity Manor</a></h5>
<ul class="loaction-area">
<li><i class="bi bi-geo-alt"></i></li>
<li>
House 168/170, Road 02, Avenue 01, Mirpur DOHS, Dhaka, Bangladesh - <a href="#">See Map</a>
<span>2 km to city center</span>
</li>
</ul>
<ul class="facilisis">
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framefahin.svg" alt="highlights-image" />
TV </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framegas.svg" alt="highlights-image" />
Heater </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framelock.svg" alt="highlights-image" />
Saving Safe </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framewififree.svg" alt="highlights-image" />
Free Wifi </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framephone.svg" alt="highlights-image" />
Phone </li>
</ul>
</div>
<div class="content-bottom">
<div class="room-type">
<h6>Family Room</h6>
<h6>Quin Mordern Room</h6>
<h6>Semi Double</h6>
<span>1 king bed</span>
<div class="deals">
<span> <strong>Free cancellation</strong> <br> before 48 hours </span>
</div>
</div>
<div class="price-and-book">
<div class="price-area">
<p>1 Night, 2 Adults</p>
<span>&#36;46</span> </div>
<div class="book-btn">
<a href="error.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Check Availability <i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-4 col-md-6">
<div class="room-suits-card two">
<div class="row g-0">
<div class="col-md-12">
<div class="swiper hotel-img-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="room-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-02-1-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> </div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/room-05.webp" alt="hotel-image" />
</div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-03-1.webp" alt="hotel-image" />
</div>
</div>
</div>
<div class="swiper-pagination5"></div>
</div>
</div>
<div class="col-md-12">
<div class="room-content">
<div class="content-top">
<h5><a href="error.php" onclick="checkLoginAndBook(event)">Dusk Retreat Resort</a></h5>
<ul class="loaction-area">
<li><i class="bi bi-geo-alt"></i></li>
<li>
House 168/170, Road 02, Avenue 01, Mirpur DOHS, Dhaka, Bangladesh - <a href="#">See Map</a>
<span>2 km to city center</span>
</li>
</ul>
<ul class="facilisis">
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framefahin.svg" alt="highlights-image" />
TV </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framegas.svg" alt="highlights-image" />
Heater </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framelock.svg" alt="highlights-image" />
Saving Safe </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framewififree.svg" alt="highlights-image" />
Free Wifi </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framephone.svg" alt="highlights-image" />
Phone </li>
</ul>
</div>
<div class="content-bottom">
<div class="room-type">
<h6>Couple Room</h6>
<h6>Family Room</h6>
<span>1 king bed</span>
<div class="deals">
<span> <strong>Free cancellation</strong> <br> before 48 hours </span>
</div>
</div>
<div class="price-and-book">
<div class="price-area">
<p>1 Night, 2 Adults</p>
<span>&#36;120</span> </div>
<div class="book-btn">
<a href="error.php" class="primary-btn2">Check Availability <i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-4 col-md-6">
<div class="room-suits-card two">
<div class="row g-0">
<div class="col-md-12">
<div class="swiper hotel-img-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="room-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-06-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> </div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-03-1.webp" alt="hotel-image" />
</div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-02-1.webp" alt="hotel-image" />
</div>
</div>
</div>
<div class="swiper-pagination5"></div>
</div>
</div>
<div class="col-md-12">
<div class="room-content">
<div class="content-top">
<h5><a href="error.php">Sunset Oasis Inn</a></h5>
<ul class="loaction-area">
<li><i class="bi bi-geo-alt"></i></li>
<li>
House 168/170, Road 02, Avenue 01, Mirpur DOHS, Dhaka, Bangladesh - <a href="#">See Map</a>
<span>2 km to city center</span>
</li>
</ul>
<ul class="facilisis">
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framefahin.svg" alt="highlights-image" />
TV </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framegas.svg" alt="highlights-image" />
Heater </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framelock.svg" alt="highlights-image" />
Saving Safe </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framewififree.svg" alt="highlights-image" />
Free Wifi </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framephone.svg" alt="highlights-image" />
Phone </li>
</ul>
</div>
<div class="content-bottom">
<div class="room-type">
<h6>Deluxe King Room</h6>
<h6>Quin Mordern Room</h6>
<h6>Sea View</h6>
<span>1 king bed</span>
<div class="deals">
<span> <strong>Free cancellation</strong> <br> before 48 hours </span>
</div>
</div>
<div class="price-and-book">
<div class="price-area">
<p>1 Night, 2 Adults</p>
<span>&#36;101<del>&#36;136</del></span> </div>
<div class="book-btn">
<a href="error.php" class="primary-btn2">Check Availability <i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-4 col-md-6">
<div class="room-suits-card two">
<div class="row g-0">
<div class="col-md-12">
<div class="swiper hotel-img-slider">
<span class="batch">Breakfast Included</span>
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="room-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-05-1-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> </div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/room-04.webp" alt="hotel-image" />
</div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-06.webp" alt="hotel-image" />
</div>
</div>
</div>
<div class="swiper-pagination5"></div>
</div>
</div>
<div class="col-md-12">
<div class="room-content">
<div class="content-top">
<h5><a href="error.php">Tranquil Twilight Lodge</a></h5>
<ul class="loaction-area">
<li><i class="bi bi-geo-alt"></i></li>
<li>
House 168/170, Road 02, Avenue 01, Mirpur DOHS, Dhaka, Bangladesh - <a href="#">See Map</a>
<span>2 km to city center</span>
</li>
</ul>
<ul class="facilisis">
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framefahin.svg" alt="highlights-image" />
TV </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framegas.svg" alt="highlights-image" />
Heater </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framelock.svg" alt="highlights-image" />
Saving Safe </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framewififree.svg" alt="highlights-image" />
Free Wifi </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framephone.svg" alt="highlights-image" />
Phone </li>
</ul>
</div>
<div class="content-bottom">
<div class="room-type">
<h6>Family Room</h6>
<h6>Sea View</h6>
<h6>Semi Double</h6>
<span>1 king bed</span>
<div class="deals">
<span> <strong>Free cancellation</strong> <br> before 48 hours </span>
</div>
</div>
<div class="price-and-book">
<div class="price-area">
<p>1 Night, 2 Adults</p>
<span>&#36;86<del>&#36;96</del></span> </div>
<div class="book-btn">
<a href="error.php" class="primary-btn2">Check Availability <i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-4 col-md-6">
<div class="room-suits-card two">
<div class="row g-0">
<div class="col-md-12">
<div class="swiper hotel-img-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="room-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-04-1-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> </div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-03-1.webp" alt="hotel-image" />
</div>
</div>
<div class="swiper-slide">
<div class="room-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Room-01-1.webp" alt="hotel-image" />
</div>
</div>
</div>
<div class="swiper-pagination5"></div>
</div>
</div>
<div class="col-md-12">
<div class="room-content">
<div class="content-top">
<h5><a href="error.php">Harmony Haven Hideaway</a></h5>
<ul class="loaction-area">
<li><i class="bi bi-geo-alt"></i></li>
<li>
House 168/170, Road 02, Avenue 01, Mirpur DOHS, Dhaka, Bangladesh - <a href="#">See Map</a>
<span>2 km to city center</span>
</li>
</ul>
<ul class="facilisis">
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framefahin.svg" alt="highlights-image" />
TV </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framegas.svg" alt="highlights-image" />
Heater </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framelock.svg" alt="highlights-image" />
Saving Safe </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framewififree.svg" alt="highlights-image" />
Free Wifi </li>
<li>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framephone.svg" alt="highlights-image" />
Phone </li>
</ul>
</div>
<div class="content-bottom">
<div class="room-type">
<h6>Sea View</h6>
<h6>Semi Double</h6>
<span>1 king bed</span>
<div class="deals">
<span> <strong>Free cancellation</strong> <br> before 48 hours </span>
</div>
</div>
<div class="price-and-book">
<div class="price-area">
<p>1 Night, 2 Adults</p>
<span>&#36;69<del>&#36;86</del></span> </div>
<div class="book-btn">
<a href="error.php" class="primary-btn2">Check Availability <i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="Transport" role="tabpanel" aria-labelledby="Transport-tab">
<div class="row g-4">
<div class="col-lg-4 col-md-6">
<div class="transport-card">
<a href="error.php" class="transport-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Transport-7-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> <span>453km</span>
</a>
<div class="transport-content">
<h4><a href="error.php">Athens to Istanbul, Journey through History&#8217;s Heart</a></h4>
<div class="transport-type">
<h6>Available Transport :</h6>
<div class="row g-2">
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frameboat.svg" alt="transport-image" />
<span>Boat</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framebus.svg" alt="transport-image" />
<span>Bus</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framecar.svg" alt="transport-image" />
<span>Car</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frametrain.svg" alt="transport-image" />
<span>Train</span>
</div>
</div>
</div>
</div>
<div class="card-bottom">
<div class="details-btn">
<a href="rental.php" class="primary-btn1">View Details</a>
</div>
<div class="rating-area">
<div style="display:flex;"><div class="rx-product-rating"><div class="rx-star-rating" role="img" aria-label="Rated 0 out of 5"><span style="width:0%"></span></div></div> <span>(0)</span></div> </div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="transport-card">
<a href="error.php" class="transport-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Transport-02-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> <span>5.6km</span>
</a>
<div class="transport-content">
<h4><a href="error.php">Barcelona to Lisbon, Coastal Wonders, Iberian Adventure</a></h4>
<div class="transport-type">
<h6>Available Transport :</h6>
<div class="row g-2">
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frameboat.svg" alt="transport-image" />
<span>Boat</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framebus.svg" alt="transport-image" />
<span>Bus</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framecar.svg" alt="transport-image" />
<span>Car</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frametrain.svg" alt="transport-image" />
<span>Train</span>
</div>
</div>
</div>
</div>
<div class="card-bottom">
<div class="details-btn">
<a href="error.php" class="primary-btn1">View Details</a>
</div>
<div class="rating-area">
<div style="display:flex;"><div class="rx-product-rating"><div class="rx-star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:72%"></span></div></div> <span>(1)</span></div> </div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="transport-card">
<a href="https://triprex.egenslab.com/transport/tokyo-to-paris-discovering-cultures-treasures/" class="transport-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Transport-05-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> <span>1340km</span>
</a>
<div class="transport-content">
<h4><a href="https://triprex.egenslab.com/transport/tokyo-to-paris-discovering-cultures-treasures/">Tokyo to Paris, Discovering Culture&#8217;s Treasures</a></h4>
<div class="transport-type">
<h6>Available Transport :</h6>
<div class="row g-2">
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frameboat.svg" alt="transport-image" />
<span>Boat</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framebus.svg" alt="transport-image" />
<span>Bus</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framecar.svg" alt="transport-image" />
<span>Car</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frametrain.svg" alt="transport-image" />
<span>Train</span>
</div>
</div>
</div>
</div>
<div class="card-bottom">
<div class="details-btn">
<a href="https://triprex.egenslab.com/transport/tokyo-to-paris-discovering-cultures-treasures/" class="primary-btn1">View Details</a>
</div>
<div class="rating-area">
<div style="display:flex;"><div class="rx-product-rating"><div class="rx-star-rating" role="img" aria-label="Rated 0 out of 5"><span style="width:0%"></span></div></div> <span>(0)</span></div> </div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="transport-card">
<a href="https://triprex.egenslab.com/transport/berlin-to-vienna-european-capitals-cultural-odyssey/" class="transport-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Transport-06-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> <span>250km</span>
</a>
<div class="transport-content">
<h4><a href="https://triprex.egenslab.com/transport/berlin-to-vienna-european-capitals-cultural-odyssey/">Berlin to Vienna, European Capitals, Cultural Odyssey</a></h4>
<div class="transport-type">
<h6>Available Transport :</h6>
<div class="row g-2">
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frameboat.svg" alt="transport-image" />
<span>Boat</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framebus.svg" alt="transport-image" />
<span>Bus</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framecar.svg" alt="transport-image" />
<span>Car</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frametrain.svg" alt="transport-image" />
<span>Train</span>
</div>
</div>
</div>
</div>
<div class="card-bottom">
<div class="details-btn">
<a href="https://triprex.egenslab.com/transport/berlin-to-vienna-european-capitals-cultural-odyssey/" class="primary-btn1">View Details</a>
</div>
<div class="rating-area">
<div style="display:flex;"><div class="rx-product-rating"><div class="rx-star-rating" role="img" aria-label="Rated 0 out of 5"><span style="width:0%"></span></div></div> <span>(0)</span></div> </div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="transport-card">
<a href="https://triprex.egenslab.com/transport/cape-town-to-dubai-desert-sands-urban-charms/" class="transport-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Transport-03-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> <span>45km</span>
</a>
<div class="transport-content">
<h4><a href="https://triprex.egenslab.com/transport/cape-town-to-dubai-desert-sands-urban-charms/">Cape Town to Dubai, Desert Sands, Urban Charms</a></h4>
<div class="transport-type">
<h6>Available Transport :</h6>
<div class="row g-2">
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frameboat.svg" alt="transport-image" />
<span>Boat</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framebus.svg" alt="transport-image" />
<span>Bus</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framecar.svg" alt="transport-image" />
<span>Car</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frametrain.svg" alt="transport-image" />
<span>Train</span>
</div>
</div>
</div>
</div>
<div class="card-bottom">
<div class="details-btn">
<a href="https://triprex.egenslab.com/transport/cape-town-to-dubai-desert-sands-urban-charms/" class="primary-btn1">View Details</a>
</div>
<div class="rating-area">
<div style="display:flex;"><div class="rx-product-rating"><div class="rx-star-rating" role="img" aria-label="Rated 0 out of 5"><span style="width:0%"></span></div></div> <span>(0)</span></div> </div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="transport-card">
<a href="https://triprex.egenslab.com/transport/cairo-to-rome-unveiling-ancient-marvels-awaits/" class="transport-img">
<img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Transport-01-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /> <span>220km</span>
</a>
<div class="transport-content">
<h4><a href="https://triprex.egenslab.com/transport/cairo-to-rome-unveiling-ancient-marvels-awaits/">Cairo to Rome, Unveiling Ancient Marvels Awaits</a></h4>
<div class="transport-type">
<h6>Available Transport :</h6>
<div class="row g-2">
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frameboat.svg" alt="transport-image" />
<span>Boat</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framebus.svg" alt="transport-image" />
<span>Bus</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Framecar.svg" alt="transport-image" />
<span>Car</span>
</div>
</div>
<div class="col-3">
<div class="single-transport">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Frametrain.svg" alt="transport-image" />
<span>Train</span>
</div>
</div>
</div>
</div>
<div class="card-bottom">
<div class="details-btn">
<a href="https://triprex.egenslab.com/transport/cairo-to-rome-unveiling-ancient-marvels-awaits/" class="primary-btn1">View Details</a>
</div>
<div class="rating-area">
<div style="display:flex;"><div class="rx-product-rating"><div class="rx-star-rating" role="img" aria-label="Rated 0 out of 5"><span style="width:0%"></span></div></div> <span>(0)</span></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-747e874 e-con-full e-flex e-con e-parent" data-id="747e874" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-37f9054 elementor-widget elementor-widget-triprex_facility" data-id="37f9054" data-element_type="widget" data-widget_type="triprex_facility.default">
<div class="elementor-widget-container">
<div class="franctional-slider-section">
<div class="container-fluid p-0">
<div class="row g-0">
<div class="col-lg-6">
<div class="slider-content-wrapper">
<div class="swiper franctional-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slider-content">
<div class="section-title mb-20">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Our Facility <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Finest Safety Systems</h2>
</div>
<p>Curabitur convallis enim at orci ullamcorper sagittis. Morbi porand gon nullalacu scelerisque in aliquam vitae, aliquam ut lectus. Nam utte mink Phasellus magna, efficitur finibus dictum auctor, volutpat gonet torrend accumsan purusDon luctus nunc non dapibus volutpat.</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Travel Alerts and Registration </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Health and Medical Security </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Travel Documentation </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Money and Payment </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Transportation Security </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Local Knowledge Guide </li>
</ul>
</div>
</div>
<div class="swiper-slide">
<div class="slider-content">
<div class="section-title mb-20">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Our Facility <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Our Premises Services</h2>
</div>
<p>Curabitur convallis enim at orci ullamcorper sagittis. Morbi porand gon nullalacu scelerisque in aliquam vitae, aliquam ut lectus. Nam utte mink Phasellus magna, efficitur finibus dictum auctor, volutpat gonet torrend accumsan purusDon luctus nunc non dapibus volutpat.</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Travel Alerts and Registration </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Health and Medical Security </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Travel Documentation </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Money and Payment </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Transportation Security </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Local Knowledge Guide </li>
</ul>
</div>
</div>
</div>
<div class="nav-and-pagi-area">
<div class="franctional-slider-prev-btn">
<svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
<path d="M53 6.5L1 6.5M1 6.5L7 12M1 6.5L7 0.999996" />
</svg>
</div>
<div class="franctional-slider-pagi1"></div>
<div class="franctional-slider-next-btn">
<svg xmlns="http://www.w3.org/2000/svg" width="53" height="13" viewBox="0 0 53 13">
<path d="M0 6.5H52M52 6.5L46 1M52 6.5L46 12" />
</svg>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="franctional-slider-right-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/facility-img.webp" alt="Image ">
<div class="logo">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/tripadvisor-logo2.svg" alt="Logo ">
</div>
</div>
</div>
</div>
<div class="rating-wrapper">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/rating-img1.png" alt="Image">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/rating-img2.png" alt="Image">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-7d15f34 e-con-full e-flex e-con e-parent" data-id="7d15f34" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-core-v316-plus="true">
<div class="elementor-element elementor-element-8ee989b elementor-widget elementor-widget-triprex_tour_package" data-id="8ee989b" data-element_type="widget" data-widget_type="triprex_tour_package.default">
<div class="elementor-widget-container">
<div class="package-card-section">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector1.png" alt="vector1" class="section-vector1">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector3.png" alt="vector2" class="section-vector3">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center mb-40">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z"></path>
</svg>
Tour Package <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z"></path>
</svg>
</span>
<h2> Luxury Vacation Bundles</h2>
</div>
</div>
</div>
<div class="row g-lg-4 gy-5 mb-70">
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 12.php" class="card-img" onclick="checkLoginAndBook(event)"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-10-650x450.webp" alt="card-img"></a>
<div class="batch">
<span class="date">7 Days/ 6 nights</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li>Kigali</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 12.php" onclick="checkLoginAndBook(event)">7 days luxury tour.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;340<del>&#36;450</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 12.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 13.php" class="card-img" onclick="checkLoginAndBook(event)"><img decoding="async" src="akagera/canopy.jpg" alt="card-img"></a>
<div class="batch">
<span class="date">10 Days / 9 Nights</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li>Musanze</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 13.php" onclick="checkLoginAndBook(event)">10 Days luxury tour.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;240<del>&#36;380</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 13.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 14.php" class="card-img" onclick="checkLoginAndBook(event)"><img decoding="async" src="akagera/ibirunga.jpg" alt="card-img"></a>
<div class="batch">
<span class="date">14 Days / 13 Nights</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li> Kibuye</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 14.php" onclick="checkLoginAndBook(event)">14 days in Rwanda luxury tour</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;500<del>&#36;580</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 14.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 15.php" class="card-img" onclick="checkLoginAndBook(event)"><img decoding="async" src="akagera/kinigi.jpg" alt="card-img"></a>
<div class="batch">
<span class="date">7 Days / 6 Nights</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li> Nyanza</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 15.php" onclick="checkLoginAndBook(event)">7 days luxury tour.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;760<del>&#36;800</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 15.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 17.php" class="card-img" onclick="checkLoginAndBook(event)"><img decoding="async" src="akagera/hotel.jpg" alt="card-img"></a>
<div class="batch">
<span class="date">13 Days / 12 Nights</span>
<!--div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/brazil/"> Rwamagana</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Musanze</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Kibuye</a></li>
</ul>
</div-->
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 17.php" onclick="checkLoginAndBook(event)">13-Day Rwanda Adventure Combining Three National Parks (Akagera, Volcanoes, Nyungwe)</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;170<del>&#36;220</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 17.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 18.php" class="card-img" onclick="checkLoginAndBook(event)"><img decoding="async" src="akagera/trekking.jpg" alt="card-img"></a>
<div class="batch">
<span class="date">3 Days / 2 Nights</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li>Gisenyi</li>
<li>Kibuye</li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 18.php" onclick="checkLoginAndBook(event)">3 DAYS RWANDA GORILLA TREKKING SAFARI.</a></h5>
<!--div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
</ul>
</div-->
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;160<del>&#36;180</del></span> <p>TAXES INCL/PERS</p>
</div>
<a href="Booking 18.php" class="primary-btn2" onclick="checkLoginAndBook(event)">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 d-flex justify-content-center">
<a href="tours.php" class="secondary-btn1">View All Package</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-3d88820 e-con-full e-flex e-con e-parent" data-id="3d88820" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-a7b6d43 elementor-widget elementor-widget-triprex_feature" data-id="a7b6d43" data-element_type="widget" data-widget_type="triprex_feature.default">
<div class="elementor-widget-container">
<div class="feature-card-section ">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector4.png" alt="image" class="section-vector4">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center mb-60">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Our Success <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Why Choose AcrossAfricaJourneys </h2>
</div>
</div>
</div>
<div class="row g-md-4 gy-5">
<div class="col-xl-4 col-md-6">
<div class="feature-card">
<div class="feature-card-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70"><path d="M36.6322 3.49316L36.7071 3.42037C20.062 3.2598 3.21674 16.7033 3.50361 36.4612C3.78192 55.5747 19.1789 69.0525 37.1471 68.2261C39.5098 68.1213 41.8522 67.7401 44.1263 67.0904C46.9554 69.3115 51.6471 70.7908 54.7171 69.5459C55.9695 69.0268 57.087 68.1929 58.0215 67.1268C61.4811 63.9669 62.0067 58.5719 61.1899 53.8749C66.343 46.5607 67.7998 38.1471 66.4746 30.3159C64.0383 15.9133 52.1941 3.48459 36.6322 3.49316ZM52.7667 10.5901C52.7056 10.715 52.679 10.8539 52.6897 10.9926C52.9551 13.6076 50.1314 15.4423 47.8492 14.1578C46.1633 13.2073 45.2374 10.7464 42.9788 9.92213C38.8416 8.40748 35.7812 13.2276 32.4297 12.8797C31.1516 12.7438 29.8928 11.744 29.2217 10.3321C28.7186 9.27453 28.4948 7.96861 28.4981 6.30303C37.1364 3.73721 45.6291 5.30539 52.7667 10.5901ZM7.88701 27.1613C13.5142 25.469 21.1025 29.0132 15.6037 31.8701C14.3245 32.5145 13.0101 33.1086 12.28 34.3257C11.3541 35.8735 11.8347 38.0476 13.3312 39.0741C13.9049 39.4648 14.6553 39.7442 14.7377 40.061C14.9304 40.7975 11.216 43.2552 7.12165 42.0435C6.6924 40.0691 6.45296 38.0583 6.40661 36.0384C6.32712 33.0449 6.70137 30.0567 7.51664 27.1753C7.63942 27.2004 7.76645 27.1956 7.88701 27.1613ZM23.1866 55.3692C25.0877 51.8689 29.0932 50.8863 29.6134 51.5071C29.9431 51.9021 29.4133 52.995 29.2548 53.9113C28.816 56.3957 31.2341 58.8438 33.7292 58.4392C36.5873 57.9725 37.9306 54.6295 40.1197 54.3491C41.1558 54.2206 42.3611 54.849 43.3524 56.0446C44.7953 57.7798 45.7169 61.3839 45.4857 64.045C42.6071 65.0931 39.5761 65.6619 36.5134 65.7288C31.7532 65.8361 27.0411 64.7579 22.8012 62.5914C22.1954 60.458 22.1911 57.2028 23.1866 55.3692ZM43.6328 41.1304C43.5825 39.8373 43.4262 38.5785 43.2325 36.8969C43.2181 36.7796 43.1778 36.6669 43.1144 36.5671C43.0511 36.4673 42.9664 36.3829 42.8664 36.3199C41.8142 35.3244 39.9784 33.3473 36.8881 31.0994C36.7942 31.031 36.6867 30.9837 36.5728 30.9609C36.4589 30.9381 36.3415 30.9402 36.2285 30.9672C36.1156 30.9941 36.0098 31.0453 35.9185 31.1171C35.8273 31.1889 35.7527 31.2797 35.6999 31.3831C33.5869 35.5267 32.2585 39.4605 31.4225 44.0238C30.7213 43.6705 30.6785 43.6491 30.5436 43.5742C31.3807 37.7821 31.5306 32.3005 31.6098 27.1731C31.6117 27.0484 31.5846 26.9249 31.5305 26.8125C31.4765 26.7001 31.397 26.6018 31.2983 26.5255C28.6351 24.4639 26.2031 22.7362 23.8706 21.2483C23.4339 19.8996 23.1288 19.6876 23.3161 19.4008C23.4617 19.176 23.5484 19.313 24.9721 19.1599C27.981 21.1648 30.8187 22.9171 33.407 24.3707C33.6254 24.4928 33.8887 24.5078 34.1199 24.4071C38.6906 22.4322 43.9068 20.7795 49.2343 19.6148C49.2996 19.7165 49.4077 19.8932 49.4698 20.0002C45.6998 21.8413 41.8505 24.5677 38.286 27.946C38.2087 28.0191 38.1467 28.1069 38.1036 28.2042C38.0605 28.3015 38.0373 28.4064 38.0352 28.5129C38.0331 28.6193 38.0522 28.725 38.0914 28.824C38.1306 28.9229 38.1891 29.0131 38.2635 29.0892C40.3883 31.2728 42.3098 33.0733 43.9689 34.437C44.6882 35.0236 45.4204 34.0089 49.4217 33.2125C49.5897 33.4105 49.7663 33.6438 49.9408 33.8922C46.3763 36.1615 45.1539 37.1142 43.9571 41.2674C43.8492 41.2214 43.7411 41.1757 43.6328 41.1304ZM48.1821 37.0596C55.2448 44.6896 63.745 59.1135 56.4383 66.4567C61.4768 58.6736 54.3446 46.8251 46.4191 39.2711C46.8357 38.4124 47.4379 37.657 48.1821 37.0596ZM56.3591 59.3276C56.5539 61.4492 56.2735 63.0099 55.7757 64.2623C53.6616 67.3387 49.777 67.6406 47.2016 66.0231C50.2759 64.7322 53.1211 62.844 55.2116 60.3328C55.6044 60.0116 55.9802 59.6702 56.3591 59.3276ZM50.5617 35.4026C50.8678 35.2024 51.1579 35.0204 51.4052 34.878C51.4351 34.8663 51.4673 34.8705 51.4951 34.8545C51.6773 34.7443 51.8084 34.5664 51.8596 34.3597C51.9108 34.153 51.8778 33.9344 51.768 33.752C51.5443 33.3816 50.9513 32.446 50.2801 31.7749C50.1893 31.6832 50.0775 31.6151 49.9544 31.5763C49.8313 31.5375 49.7007 31.5292 49.5737 31.5522C47.7732 31.868 46.1783 32.3872 44.6454 32.9117C43.2635 31.7503 41.7007 30.2881 39.9869 28.554C43.5054 25.3213 47.2755 22.7437 50.9299 21.077C51.107 20.9944 51.2475 20.8493 51.3245 20.6697C51.4015 20.49 51.4096 20.2882 51.3474 20.103C51.3323 19.967 51.2818 19.8374 51.2007 19.7272C50.6794 19.0529 50.2662 17.7587 49.3703 17.9439C43.9207 19.1032 38.5633 20.7709 33.8491 22.7758C26.3197 18.5069 25.8466 17.4387 25.0706 17.5307C23.5987 17.718 22.6717 17.4569 21.9738 18.5187C21.8041 18.7778 21.6982 19.0735 21.6649 19.3815C21.6316 19.6894 21.6718 20.0009 21.7822 20.2903C23.269 23.8837 20.8541 20.5151 29.9977 27.5499C29.9121 32.8539 29.7483 38.1075 28.8791 43.8514C28.7271 44.8608 30.4366 45.1338 31.3914 45.8563C31.4936 45.9345 31.6133 45.9867 31.7402 46.0083C31.867 46.03 31.9972 46.0205 32.1196 45.9807C32.242 45.9409 32.3529 45.872 32.4427 45.7798C32.5325 45.6877 32.5986 45.5751 32.6353 45.4517C33.331 44.7688 32.9457 40.6883 36.705 32.9663C38.3385 34.2144 39.9056 35.6145 41.675 37.4C41.7339 38.0444 41.8216 38.3034 42.0036 41.1679C42.0818 42.386 42.1503 42.2404 43.2539 42.7136C44.0749 43.07 44.1273 43.1064 44.4067 43.0668C44.611 43.1005 44.8203 43.0534 44.9905 42.9356C45.1607 42.8177 45.2784 42.6383 45.3187 42.4352C45.4193 41.9343 45.5842 41.4044 45.7662 40.8853C50.5927 45.5737 54.7042 50.6647 56.0776 57.4148C53.4756 59.9274 50.4401 61.9481 47.1181 63.3792C47.1502 60.4323 46.1387 56.8839 44.5887 55.0181C43.2239 53.3739 41.5166 52.554 39.9141 52.7552C37.0144 53.1288 35.672 56.4964 33.4702 56.8549C32.0733 57.0862 30.5897 55.5897 30.8348 54.1896C31.0189 53.162 31.8453 51.6698 30.8434 50.4763C30.2375 49.7484 29.1928 49.5279 27.9008 49.8512C25.3307 50.4977 23.041 52.2725 21.7747 54.6017C20.7835 56.4289 20.6047 59.242 20.9419 61.5488C14.5622 57.6674 9.69174 51.3904 7.56802 43.8161C10.2227 44.331 12.888 43.7165 14.9229 42.3207C16.034 41.5564 16.5328 40.5866 16.2898 39.6543C15.9955 38.5303 14.8683 38.1771 14.2368 37.7489C13.4447 37.2062 13.1674 35.9667 13.6577 35.151C14.1383 34.346 15.1777 33.8815 16.3444 33.2938C20.4088 31.1829 19.7516 27.688 16.0351 26.1038C13.5571 25.044 10.6905 24.83 8.06256 25.4626C11.1347 16.79 18.2455 9.92642 26.8817 6.8286C27.0102 11.7804 29.6605 14.1996 32.2563 14.4768C36.0531 14.8729 39.3982 10.3235 42.4264 11.4293C44.153 12.0608 45.0511 14.4243 47.0603 15.5558C49.9569 17.1893 53.8789 15.4702 54.2718 11.7815C59.7973 16.4549 63.517 23.0402 64.8197 30.1253C66.1385 37.2993 64.9803 44.985 60.7093 51.7158C59.0202 45.5373 54.6593 40.2013 50.5617 35.4026Z"></path><path d="M59.2244 26.0313C58.6495 25.632 58.6281 25.6138 58.6838 24.841C58.7095 24.4781 58.7395 24.066 58.6281 23.6346C58.0544 21.3974 54.8121 21.2657 53.9001 23.6196C53.2578 25.2798 50.3709 26.0805 51.7175 29.5498C52.8789 32.5427 57.2794 33.7202 59.6279 31.4947C60.3515 30.8097 60.7711 29.7778 60.7508 28.7363C60.723 27.441 60.1353 26.6618 59.2244 26.0313ZM53.215 28.9685C52.2677 26.529 54.5048 26.5012 55.3976 24.1998C55.5581 23.7855 55.9681 23.5051 56.3256 23.5051C56.6543 23.5051 56.9989 23.7459 57.0728 24.0328C57.2034 24.5434 56.8405 25.4565 57.3008 26.3385C57.9099 27.5053 59.1162 27.3019 59.1451 28.7684C59.2029 31.7538 54.2876 31.7399 53.215 28.9685ZM52.7954 5.07556L53.382 0.879487C53.4014 0.673445 53.3407 0.467836 53.2124 0.30546C53.084 0.143084 52.898 0.036453 52.6931 0.007764C52.4881 -0.020925 52.28 0.0305387 52.112 0.151442C51.944 0.272345 51.8292 0.453372 51.7913 0.656838L51.2047 4.85398C51.0592 5.90621 52.6477 6.12778 52.7954 5.07556ZM57.7654 2.49048L55.1471 6.2466C54.5338 7.12542 55.8707 8.01816 56.4637 7.16396L59.082 3.4089C59.1449 3.32257 59.1899 3.22456 59.2144 3.1206C59.2389 3.01665 59.2425 2.90885 59.2248 2.80351C59.2072 2.69818 59.1687 2.59743 59.1116 2.50716C59.0545 2.41689 58.98 2.33892 58.8924 2.27781C58.8048 2.21671 58.7058 2.17369 58.6014 2.15129C58.497 2.1289 58.3891 2.12756 58.2842 2.14736C58.1792 2.16717 58.0793 2.20772 57.9902 2.26663C57.9011 2.32555 57.8247 2.40165 57.7654 2.49048ZM59.4995 11.1438L64.1323 7.6692C64.3026 7.54145 64.4152 7.35126 64.4453 7.14048C64.4754 6.9297 64.4206 6.71559 64.2928 6.54525C64.1651 6.37491 63.9749 6.2623 63.7641 6.23219C63.5533 6.20208 63.3392 6.25694 63.1689 6.38469L58.535 9.86036C57.6797 10.5015 58.6613 11.7754 59.4984 11.1449L59.4995 11.1438Z"></path></svg> </div>
<div class="feature-card-content">
<h6>Worldwide Coverage</h6>
<p>Cras facilisis fermentum ex seda ullamcorper odio rutrum accoun Phasellus auctor</p>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="feature-card two">
<div class="feature-card-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70"><path d="M63.3244 22.918C62.2732 22.7909 58.8339 22.9134 57.757 22.876C56.4317 22.8749 53.0974 22.8597 51.8059 22.8597L50.8142 22.8574C50.1877 22.9134 49.8389 22.3744 50.071 21.84C50.1854 21.5157 50.806 19.8847 50.9344 19.5149C52.4779 15.3639 54.9104 8.78736 56.4679 4.64103C56.6837 4.05303 56.9905 3.31453 57.1819 2.7102C57.4339 1.7407 56.679 0.652196 55.6442 0.590363L39.7274 0.416529C37.7744 0.376863 30.8957 0.259029 29.0652 0.220529C28.7036 0.197772 28.3422 0.267313 28.0148 0.422618C27.6875 0.577923 27.405 0.813894 27.1939 1.10836C26.8987 1.47353 26.838 1.98103 26.7249 2.3917C26.6234 2.7837 26.4099 3.72753 26.236 4.46953C25.9333 4.45046 25.6438 4.33887 25.4065 4.14986C23.7569 2.80936 22.176 1.69986 20.1857 3.2632C19.3877 3.79403 18.9794 4.4917 18.0892 4.6177C17.0812 4.66903 16.0685 4.25253 14.8855 4.5022C14.1739 4.62353 13.475 5.23953 13.1659 5.85086C12.6525 6.71886 12.5207 7.8062 11.9654 8.46653C11.3505 9.0557 10.2387 9.2412 9.41037 9.77086C8.12004 10.402 7.95554 12.0237 8.24137 13.195C8.38837 14.168 8.62871 14.8575 8.01037 15.6894C5.90921 18.2957 5.92671 19.0645 8.07687 21.6044C8.73254 22.4175 8.53187 23.191 8.39887 24.1687C7.73154 27.6512 10.2772 27.3152 12.1882 28.6499C12.761 29.2239 12.9407 30.3065 13.4925 31.297C14.0245 32.4905 15.5587 32.6562 16.6659 32.4124C17.6447 32.2759 18.438 32.0764 19.2547 32.7355L19.9185 33.2535L19.1707 36.456L19.0739 36.8749C18.7087 38.2445 19.9524 39.697 21.3185 39.6329C21.3349 39.6235 28.5484 39.6795 28.8879 39.6515C29.834 39.655 36.1364 39.6597 36.9274 39.6667C36.9285 39.6025 35.9859 42.7759 35.9812 42.7712L28.3045 68.5709C28.2413 68.7725 28.2508 68.9898 28.3313 69.1852C28.4118 69.3805 28.5582 69.5414 28.7451 69.6399C28.932 69.7384 29.1475 69.7683 29.3542 69.7243C29.5608 69.6803 29.7455 69.5653 29.876 69.3992C36.2904 61.1614 52.9294 39.8184 59.1909 31.885L64.1025 25.6539C64.9519 24.8209 64.5202 23.1782 63.3255 22.9215L63.3244 22.918ZM16.5235 31.4569C15.6089 31.5899 14.7805 31.7334 14.2882 30.8245C13.797 30.0499 13.6897 28.9579 12.8427 27.9907C11.886 27.125 10.7882 27.0107 10.0205 26.5242C9.11871 26.0307 9.27387 25.2245 9.40338 24.3145C9.62271 23.2692 9.72071 21.8902 8.94254 20.9849C8.31604 20.1122 7.53671 19.3434 7.55887 18.6667C7.63121 17.521 9.76854 16.1677 9.68921 14.6522C9.74871 13.629 9.37771 12.5919 9.53404 11.704C9.60871 11.396 9.76854 11.2257 10.1395 11.0122C11.0717 10.507 12.1415 10.4032 13.0655 9.5667C13.923 8.67886 14.0817 7.59853 14.6149 6.70136C14.8424 6.35136 14.9824 6.2557 15.239 6.20903C16.1117 6.11336 17.1115 6.5112 18.1627 6.48436C19.3644 6.52753 20.4937 5.49503 21.3372 4.87553C22.4992 3.92703 23.1549 5.2232 24.1804 5.87186C25.137 6.73753 26.8007 6.7212 27.8997 6.4902C28.5052 6.43653 28.9054 6.32336 29.2367 6.55086C29.9869 7.5227 29.9507 8.77453 30.989 9.84436C32.0507 10.8804 33.292 10.8734 34.2557 11.62C34.5929 12.4682 34.062 13.5695 34.1647 14.6732C34.0877 16.2704 35.9054 17.4195 36.288 18.669C36.3009 18.8137 36.1935 19.124 35.9392 19.4845C35.5239 20.034 34.818 20.9382 34.5415 21.588C33.9815 22.8819 34.7072 24.4102 34.5987 25.5897C34.4412 26.2722 33.5242 26.4635 32.8394 26.789C32.3494 27.006 31.787 27.2347 31.255 27.7574C30.415 28.6884 30.3182 29.7512 29.82 30.695C29.379 31.549 28.7117 31.3729 27.8332 31.2912C27.0562 31.1909 26.0447 31.017 25.2245 31.381C24.1384 31.8384 23.0639 33.2885 22.1655 33.3014C21.4679 33.3282 20.6932 32.5465 19.8275 31.92C18.9269 31.1477 17.5654 31.241 16.5224 31.4592L16.5235 31.4569ZM57.253 32.662C56.6171 32.2274 55.9652 31.8165 55.2989 31.43C53.9304 30.6357 52.544 29.8725 51.1409 29.141C50.0395 28.5682 48.9289 28.014 47.8124 27.4704C46.718 26.9313 45.6072 26.4263 44.4815 25.956C44.4211 25.9315 44.3596 25.9097 44.2972 25.8907C44.2379 25.8736 44.1746 25.8759 44.1167 25.8973C44.0587 25.9187 44.0092 25.9581 43.9752 26.0097C43.938 26.066 43.9224 26.1338 43.9311 26.2006C43.9399 26.2675 43.9726 26.329 44.023 26.3737C44.0919 26.432 44.1677 26.4892 44.2505 26.5417C46.3063 27.8269 48.411 29.0322 50.5599 30.1549L50.687 30.2214C51.7814 30.793 52.8862 31.3449 54.0015 31.8769C54.9407 32.3237 55.8927 32.7484 56.847 33.166L55.4377 34.9184C53.0577 33.502 50.5984 32.2467 48.1425 30.982C45.5164 29.7045 42.8984 28.4084 40.1824 27.3105C40.1123 27.2834 40.0346 27.2834 39.9645 27.3105C39.8944 27.3376 39.8369 27.3898 39.8032 27.457C39.7696 27.5242 39.7622 27.6015 39.7824 27.6739C39.8027 27.7462 39.8492 27.8084 39.9129 27.8484C42.4352 29.3255 45.0051 30.7197 47.6187 32.0285C50.0485 33.2423 52.5144 34.3822 55.013 35.4469L52.5934 38.4499C52.004 38.0298 51.3984 37.6328 50.778 37.2599C49.434 36.4651 48.0689 35.7065 46.6842 34.9849C44.7965 34.0119 42.9077 33.0424 40.9302 32.2292C40.8229 32.1849 40.698 32.2094 40.6304 32.2887C40.5499 32.3832 40.5639 32.5104 40.6444 32.571C41.8274 33.4647 43.6392 34.5987 45.577 35.6732C45.8839 35.8435 46.1942 36.008 46.5057 36.1737C47.7158 36.8147 48.9387 37.4312 50.1737 38.0229C50.8889 38.367 51.5585 38.6727 52.1909 38.9469L49.7992 41.909C49.4907 41.6414 49.1674 41.3914 48.8309 41.16C47.9699 40.5639 46.9922 39.9899 46.2455 39.543C46.0962 39.4532 45.9679 39.3739 45.8629 39.3144C44.4862 38.5257 43.0979 37.7592 41.6197 37.1339C41.5404 37.1 41.4494 37.0965 41.391 37.1292C41.3175 37.1712 41.3012 37.2435 41.3175 37.2797C41.552 37.7954 42.9835 38.8734 44.6472 39.8965C45.7635 40.564 46.8991 41.1986 48.0527 41.7994C48.5369 42.0537 48.9779 42.2742 49.3617 42.4527L47.1357 45.206C47.0914 45.1664 47.0494 45.1267 47.0027 45.087C46.291 44.4734 45.3367 43.8235 45.1617 43.6695C44.233 43.0629 43.3149 42.4399 42.2707 41.9977C41.2405 42.0385 42.3722 43.092 43.8352 44.1467C44.5667 44.674 45.381 45.2014 46.0484 45.6015C46.2374 45.7147 46.41 45.815 46.571 45.9049C41.279 52.4499 35.5787 59.486 31.4732 64.5505L38.1757 43.449C38.4989 42.413 38.9107 41.1869 39.1989 40.1252C39.5384 38.7182 38.2889 37.2599 36.8737 37.3392C36.596 37.3322 35.903 37.3509 35.6125 37.3415L28.8844 37.352C28.4399 37.3275 21.3664 37.4069 21.2229 37.352C21.2229 37.352 21.217 37.345 21.2182 37.3275L21.2999 36.925L21.8295 34.3222C23.0137 34.4984 24.0415 33.6502 25.1324 32.8067C25.9665 32.186 26.6677 32.4264 27.6419 32.5757C29.988 33.117 31.0275 32.018 31.7625 29.9285C32.3319 27.9639 34.6104 28.476 35.8307 27.0247C36.5435 26.2547 36.477 24.92 36.3464 24.1034C36.2414 23.1864 36.0465 22.5505 36.6252 21.8622C37.3182 20.9125 38.3005 20.16 38.374 18.6667C38.3635 17.7684 37.9575 17.1174 37.632 16.639L36.7127 15.4082C36.1935 14.7152 36.4362 14.1634 36.5599 13.2604C36.7372 12.425 36.8037 10.9527 36.0489 10.1255C35.2089 9.03353 33.5324 8.86203 32.6445 8.18653C32.1475 7.60903 31.9539 6.51703 31.4265 5.6957C31.08 5.0412 30.2692 4.36803 29.498 4.2572C29.1273 4.1916 28.7494 4.17591 28.3745 4.21053L28.4597 3.7847C28.5449 3.43936 28.6814 2.5282 28.7817 2.21903C28.7945 2.19458 28.8126 2.17324 28.8346 2.15651C28.8565 2.13978 28.8819 2.12807 28.9089 2.1222L29.8037 2.10236C36.0302 1.9542 49.1774 1.81303 55.5427 1.75703C55.8729 1.76053 56.1482 2.12336 56.0712 2.4652C54.9139 5.80653 52.577 12.0715 51.366 15.449L50.0057 19.1765C49.8704 19.5359 49.2824 21.175 49.1552 21.5064C48.6407 22.603 49.6359 23.9575 50.8084 23.8129L52.6365 23.807C53.8839 24.759 55.1803 25.6449 56.5204 26.4612C57.2423 26.8991 57.9764 27.3165 58.7219 27.713C59.3075 28.0245 59.906 28.3127 60.5069 28.5985L59.0835 30.3754C58.6121 30.0059 58.1206 29.6627 57.6112 29.3475C56.468 28.6375 55.3076 27.9555 54.131 27.3024C53.2191 26.7979 52.2981 26.3102 51.3684 25.8394C50.4507 25.3642 49.5156 24.9237 48.5649 24.5187C48.5145 24.4973 48.4615 24.4824 48.4074 24.4744C48.3558 24.4666 48.3031 24.4733 48.2552 24.4937C48.2072 24.5141 48.1658 24.5474 48.1355 24.5899C48.1025 24.635 48.0842 24.6893 48.0832 24.7453C48.0821 24.8012 48.0984 24.8562 48.1297 24.9025C48.1745 24.9676 48.2306 25.0241 48.2954 25.0694C49.9767 26.2245 51.7128 27.298 53.4975 28.2859L53.6025 28.3442C54.5108 28.8495 55.4304 29.3342 56.3605 29.7979C57.1224 30.1782 57.8982 30.534 58.6752 30.8864L58.3847 31.248L57.2484 32.6655L57.253 32.662ZM63.3512 25.053L60.9572 28.0397C60.6311 27.76 60.2891 27.4994 59.9329 27.2592C58.7744 26.4612 57.3277 25.627 57.1317 25.4579C56.4014 25.0344 55.6745 24.6074 54.9337 24.2025C54.6805 24.0637 54.4239 23.933 54.1684 23.8C56.728 23.793 59.4744 23.7884 61.7237 23.7954C61.9325 23.807 62.9382 23.7732 63.0922 23.8257C63.616 23.9902 63.8039 24.6167 63.3512 25.053Z"></path><path d="M20.878 14.0001C21.1265 9.52474 14.3983 9.60757 14.6083 14.0001C14.9105 17.7567 20.5817 17.8256 20.878 14.0001ZM18.7885 14.0001C19.0627 16.4186 15.5592 16.3766 15.7248 14.0001C16.0935 12.0634 18.4012 12.3866 18.7885 14.0001ZM23.9417 23.3334C24.2438 27.0901 29.915 27.1589 30.2113 23.3334C30.4598 18.8581 23.7317 18.9409 23.9417 23.3334ZM28.123 23.3334C28.3972 25.7519 24.8937 25.7099 25.0593 23.3334C25.428 21.3967 27.7357 21.7199 28.123 23.3334ZM27.3285 12.1614L15.509 23.6752C14.4065 24.7626 16.0772 26.4227 17.1587 25.3249L28.6725 13.5054C29.5277 12.6211 28.2058 11.3097 27.3285 12.1614Z"></path></svg> </div>
<div class="feature-card-content">
<h6>Competitive Pricing</h6>
<p>Burabitur convallis enim atnora ullamcorper sagittis. Morbi nug scelerisque for thana.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="feature-card three">
<div class="feature-card-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"><path d="M7.93843 51.3252C12.6831 53.68 5.85265 67.3267 12.9084 67.6647C75.927 66.7022 62.2114 79.3328 63.2231 16.2584C63.2406 13.9156 60.9842 12.6644 58.8459 12.9772C59.5798 8.84501 55.3722 8.22704 52.2834 8.6022C54.0936 -0.339209 39.5347 -0.33374 41.3459 8.6022H38.0647C39.8748 -0.339209 25.3159 -0.33374 27.1272 8.6022H23.8459C25.6561 -0.339209 11.0972 -0.33374 12.9084 8.6022C10.3972 8.47532 6.29125 8.33095 6.34593 11.8834C6.93656 13.7144 4.78296 51.5155 7.93843 51.3252ZM61.0662 16.7309C61.1406 17.6692 61.1358 18.6121 61.052 19.5495C60.1803 19.3308 59.4989 20.115 58.8459 20.5733V19.4292C61.3933 19.3702 61.8428 16.3995 58.8459 17.9308V17.5786C59.6577 17.5412 60.4361 17.2441 61.0662 16.7309ZM58.8459 21.5752C59.6078 21.5006 60.3403 21.2428 60.9809 20.8238C60.954 21.1259 60.972 21.4304 61.0345 21.7272H58.847L58.8459 21.5752ZM59.9397 15.1658C60.1215 15.15 60.3036 15.1937 60.4585 15.2904C60.6133 15.3871 60.7326 15.5314 60.7983 15.7017C60.0917 15.5158 59.4092 16.137 58.847 16.5002V15.1658H59.9397ZM58.8459 23.9158H61.0334C60.433 82.3045 70.2953 62.3064 12.9073 65.4794C10.6837 65.8064 12.2686 56.1431 11.8158 55.2113C14.0656 56.8202 18.527 63.5183 21.6595 63.2908C69.3623 63.2263 57.7478 69.9517 58.847 23.9158H58.8459ZM15.0959 50.1658H21.6584V56.7283H19.4709C19.8898 53.7194 18.6572 50.1199 15.0959 50.1658ZM17.2834 57.5869L12.0498 52.3522C16.7716 51.9158 17.6586 52.9319 17.2845 57.5869H17.2834ZM43.5334 6.4147C43.5334 3.7536 47.203 3.96907 48.9584 4.45142C44.0803 6.66626 45.7231 8.9172 49.9811 6.01329C50.0705 6.42552 50.1217 6.8451 50.1342 7.26673C47.5573 7.91204 46.5467 10.5064 50.1211 8.7411C50.1025 9.18517 50.0806 9.61282 50.073 9.99017C48.8447 10.3325 48.3087 11.8638 50.0456 11.3169C49.6847 13.1314 47.2566 13.0669 45.7209 12.9772C42.5797 13.0559 43.7358 8.25985 43.5334 6.4147ZM29.3147 6.4147C29.2862 3.72517 33.4578 3.77657 35.07 4.67782C30.882 5.99579 31.8719 8.96532 35.7481 5.95751C35.8546 6.42791 35.9122 6.90807 35.9198 7.39032C35.4014 7.63751 34.6216 7.73923 34.4564 8.39439C32.4297 9.36892 33.3309 10.9789 35.1094 9.48814C35.3709 9.53698 35.6414 9.4941 35.875 9.36673C35.8608 9.72767 35.8487 10.0645 35.8542 10.3588C34.172 10.7459 32.8836 13.3491 35.5458 11.9972C34.7758 13.1106 32.8136 13.0538 31.5022 12.9772C28.3609 13.0559 29.517 8.25985 29.3147 6.4147ZM15.0959 6.4147C15.0281 3.69673 19.7553 3.58298 21.1127 4.96439C16.462 6.24954 17.3939 9.83923 21.6081 6.3272C21.6742 6.77182 21.7064 7.22082 21.7044 7.67032C18.9197 8.59126 18.1136 11.6428 21.677 8.90079C21.6573 9.34157 21.6387 9.75501 21.6355 10.1225C20.673 10.4025 19.8909 12.3013 21.4616 11.7642C20.8152 13.1183 18.6802 13.0581 17.2834 12.9783C14.1422 13.0559 15.2983 8.25985 15.0959 6.41579V6.4147ZM8.53343 11.8834C8.46015 10.0897 11.9481 10.9986 12.9084 10.7897C12.8264 16.8097 23.9291 16.8097 23.8459 10.7897H27.1272C27.0452 16.8097 38.1478 16.8097 38.0647 10.7897H41.3459C41.2639 16.8097 52.3666 16.8097 52.2834 10.7897C58.4544 9.91798 56.315 13.1763 56.6584 17.3522C40.9609 17.1127 24.1434 18.4853 8.53343 17.3522V11.8834ZM56.6584 19.5397C54.04 69.1303 70.4309 60.5663 21.6595 61.1022C21.0795 61.1019 20.5232 60.8713 20.1131 60.4612C19.7029 60.051 19.4723 59.4948 19.472 58.9147C25.4439 60.2808 23.5955 53.6024 23.847 50.1647C23.9947 46.5739 17.0177 48.3961 15.097 47.9772C14.517 47.9778 13.961 48.2084 13.5509 48.6185C13.1408 49.0286 12.9101 49.5847 12.9095 50.1647C11.235 50.2555 8.49734 50.3419 8.53453 47.9772V19.5397H56.6584Z"></path><path d="M12.9069 23.8962C13.3236 26.2576 11.7562 30.7529 14.1789 31.9309C17.1211 31.4945 23.1848 33.3987 23.9986 29.5181C23.759 26.8274 24.0751 21.0076 20.1551 21.4768C18.4872 21.8924 10.1594 20.6565 12.9069 23.8962ZM16.0634 23.5867C22.4509 22.4295 22.8622 23.159 22.0178 29.6023C19.7881 29.9834 17.5192 30.0812 15.265 29.8932C15.0615 27.8293 14.8964 25.8026 14.5781 23.7496C15.0747 23.672 15.5887 23.6402 16.0634 23.5867ZM27.9175 23.3449C28.0389 25.4449 26.2167 31.3293 29.0878 31.5699C32.03 30.5374 35.8384 32.2087 38.3573 30.6588C38.4361 27.5928 37.8716 24.5443 36.7003 21.7098C34.1562 20.6215 31.1003 21.9012 28.39 21.3838C28.1594 21.3882 27.9367 21.4688 27.7569 21.6132C27.577 21.7576 27.4501 21.9576 27.3961 22.1819C27.3421 22.4061 27.364 22.6419 27.4583 22.8524C27.5527 23.0628 27.7141 23.2361 27.9175 23.3449ZM30.5239 23.089C32.2941 22.8799 34.0745 22.7685 35.857 22.7554C36.1447 24.8434 36.218 26.9871 36.4323 29.0926C34.249 28.8701 32.047 28.9061 29.872 29.1998C29.8522 27.2215 29.6663 25.2484 29.3164 23.3012C29.7136 23.203 30.117 23.1321 30.5239 23.089ZM42.2248 29.716C41.5095 33.9488 49.4873 31.8576 51.9876 31.652C53.6469 29.8517 52.8933 22.5345 50.9125 21.176C42.344 19.7421 40.8215 21.2318 42.2248 29.716ZM44.6037 30.6151L44.6694 30.7288C44.6256 30.8459 44.6037 30.8021 44.6037 30.6151ZM43.989 23.1087C46.103 22.755 48.2493 22.6332 50.3897 22.7456C50.755 25.0922 50.861 27.472 50.7058 29.8418C48.6495 29.9435 46.6009 29.9862 44.5425 30.0529C44.2253 27.7254 43.6598 25.4482 43.498 23.101C43.6606 23.1298 43.8256 23.1324 43.989 23.1087ZM23.1815 34.5931C21.1745 34.1599 14.0105 33.3615 13.8595 36.0554C13.7906 38.1871 12.4355 44.9432 15.1753 45.3676C17.5052 44.9456 19.8633 44.6981 22.23 44.6271C25.6315 43.3343 25.4784 36.7992 23.1815 34.5931ZM22.4455 40.2259C22.3518 40.871 22.1931 41.5049 21.9719 42.1181C21.9762 42.1104 21.8537 42.3149 21.9172 42.2198C20.0687 42.8192 17.7762 42.3357 15.8239 42.9931C15.7034 40.9104 15.4785 38.8352 15.1501 36.7751C19.0308 36.3726 23.7251 34.2092 22.4455 40.2259ZM51.8389 33.4687C50.1086 33.3079 43.1326 32.5346 44.199 35.4834C42.7181 37.2246 43.4859 40.4326 43.2628 42.6606C43.6117 45.7493 47.5437 43.9917 49.5759 44.0999C51.2253 44.1185 53.2247 43.704 53.3155 41.7079C53.5069 39.1671 54.4617 34.9376 51.8389 33.4687ZM51.303 35.3718H51.3139C51.5326 35.351 51.327 35.4517 51.303 35.3718ZM45.505 42.4265C45.5148 42.4637 45.5422 42.421 45.505 42.4265V42.4265ZM51.397 38.9079C51.3481 39.8327 51.21 40.7506 50.9847 41.6488C49.1641 41.8531 47.3384 42.0074 45.5094 42.1115C45.307 40.0345 45.7117 37.7223 44.875 35.7896C46.9608 35.8334 49.1712 35.1892 51.2865 35.3729C51.4508 36.5438 51.4885 37.7291 51.397 38.9079ZM38.9589 48.0779C29.9748 45.8937 27.8289 47.9302 28.8275 56.9526C29.0025 61.0607 34.3575 59.081 36.9748 59.0985C39.3494 59.3501 40.0373 57.1801 39.7792 55.2059C39.3723 52.9451 41.0512 49.6277 38.9589 48.0779ZM30.9034 57.1342C30.9303 57.1308 30.9575 57.136 30.9812 57.1489C31.005 57.1619 31.0241 57.182 31.0358 57.2063C30.9947 57.1771 30.9502 57.1529 30.9034 57.1342ZM37.7033 56.9777C37.6289 57.027 37.6726 57.0784 37.7033 56.9777V56.9777ZM38.365 50.5695C38.2221 52.7076 38.0032 54.8399 37.7087 56.9624C35.5497 57.0346 33.2758 57.6843 31.1473 57.2763C31.1692 54.6312 30.9395 51.9899 30.4615 49.3882C32.2586 49.6912 38.6515 47.9401 38.365 50.5695ZM49.3867 47.4534C48.0983 47.7804 42.9489 46.8431 44.4331 49.2176C43.6325 51.8579 43.2814 56.3707 45.4503 58.3012C48.5521 58.7564 51.7135 58.5879 54.7494 57.8057C56.1056 52.991 56.5781 45.5688 49.3867 47.4534ZM53.6764 48.6598C54.523 50.9184 53.8536 54.0749 53.5889 56.5599C51.2308 56.1585 48.8344 56.887 46.4697 56.5052C45.8524 54.1521 45.553 51.7268 45.5794 49.2942C48.2656 49.1137 50.9934 48.2343 53.6764 48.6598ZM30.2067 34.6806C30.1995 34.7111 30.1955 34.7422 30.1947 34.7735L30.2067 34.6806ZM30.1936 34.7954C30.1888 34.8196 30.1852 34.8441 30.1826 34.8687L30.1936 34.7954Z"></path><path d="M27.5413 36.9599C28.4054 37.2453 31.2404 34.64 29.7474 34.0067C28.5552 33.8547 26.6412 35.9153 27.5413 36.9599ZM27.4166 41.0396C29.3996 42.7611 28.0729 39.3049 28.0882 38.2833C27.0207 36.8002 26.7505 40.4183 27.4166 41.0396ZM30.6804 42.6802C28.7488 40.8427 28.9194 43.7193 30.3982 44.4072C32.0727 45.7963 34.398 43.8024 31.5455 43.1089L31.7501 43.1964C31.3756 43.0635 31.0176 42.8904 30.6804 42.6802Z"></path><path d="M33.795 44.7878C35.3361 45.6256 39.406 43.0564 36.4682 42.3969C35.6347 42.8037 32.1489 43.6284 33.795 44.7878ZM40.3269 39.7303C39.1478 39.5564 38.5441 41.2911 38.0596 42.1158C38.6021 44.113 41.8866 40.613 40.3269 39.7303ZM33.9066 34.1533C37.551 35.2656 37.6264 32.2775 34.0674 32.3989C31.1175 32.225 30.703 34.0461 33.9066 34.1533Z"></path><path d="M37.7899 34.3283C37.8528 34.9919 38.0872 35.6278 38.4702 36.1734L38.3357 35.9984C38.5369 36.2916 38.7437 36.6645 39.1538 36.6317C37.756 37.755 36.6644 39.8364 35.3662 37.4083C33.0988 34.5722 33.7146 38.758 34.8685 39.8856C38.736 45.0044 49.7151 26.8427 39.9041 35.9427C40.2399 34.8981 38.5151 32.7675 37.7899 34.3283Z"></path></svg> </div>
<div class="feature-card-content">
<h6>Fast Booking</h6>
<p>Fermentum eitorx quis maximum Etiam luctus erat vulputate urnan posuere convallis.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="feature-card">
<div class="feature-card-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70"><g clip-path="url(#clip0_1335_373)"><path d="M54.4993 61.413C54.3979 61.3243 54.2801 61.2565 54.1525 61.2134C54.0249 61.1703 53.8901 61.1528 53.7557 61.1618C53.6214 61.1708 53.4901 61.2061 53.3694 61.2659C53.2488 61.3256 53.141 61.4085 53.0524 61.5099L48.8249 66.3448C48.3771 66.8574 47.7556 67.1523 47.075 67.1753C46.3925 67.1996 45.7543 66.9461 45.2729 66.4653L42.0148 63.2085V61.0548C42.0148 60.4885 41.5558 60.0294 40.9894 60.0294C40.423 60.0294 39.964 60.4885 39.964 61.0548V68.9746C39.964 69.5409 40.423 70 40.9894 70C41.5558 70 42.0148 69.5409 42.0148 68.9746V66.1082L43.8233 67.9159C44.6625 68.7542 45.8108 69.2274 46.9942 69.2274C48.2802 69.2274 49.5231 68.6632 50.369 67.6945L54.5963 62.8599C54.685 62.7585 54.7528 62.6406 54.7959 62.5131C54.839 62.3855 54.8565 62.2507 54.8475 62.1163C54.8385 61.982 54.8031 61.8507 54.7433 61.73C54.6836 61.6093 54.6007 61.5016 54.4993 61.413ZM11.9144 60.0294C11.6424 60.0294 11.3816 60.1374 11.1893 60.3297C10.997 60.522 10.889 60.7828 10.889 61.0548V68.9746C10.889 69.5409 11.348 70 11.9144 70C12.4808 70 12.9398 69.5409 12.9398 68.9746V61.0548C12.9398 60.7828 12.8317 60.522 12.6394 60.3297C12.4471 60.1374 12.1863 60.0294 11.9144 60.0294ZM68.7023 16.2561L61.8293 10.6717C61.3539 10.2856 60.7153 10.2091 60.1622 10.4724C59.6091 10.7356 59.2656 11.2796 59.2656 11.8921V25.0719C59.2656 25.0738 59.266 25.0756 59.266 25.0775V41.7088L48.9415 53.4838L45.6708 47.3773C44.1097 44.4607 41.2284 42.3994 37.9627 41.8631C36.616 41.6421 33.4727 41.1281 32.34 40.9418C31.9316 40.876 31.5601 40.6666 31.2922 40.3513C31.0243 40.0361 30.8777 39.6356 30.8788 39.2219V38.0101C31.6873 37.5012 32.4364 36.9034 33.1121 36.228C35.516 33.8226 36.8399 30.6257 36.8399 27.2262V26.7805H37.235C39.2637 26.7898 40.9893 25.0645 40.9893 23.0262C40.9893 21.9447 40.5143 20.9396 39.744 20.2412C40.3401 19.391 40.5091 18.2737 40.1699 17.2927C40.024 16.8727 39.7935 16.487 39.4926 16.1595C39.1918 15.8319 38.8271 15.5696 38.4209 15.3885C38.3133 15.3407 38.2046 15.2947 38.0963 15.248V7.8668C38.0963 3.52912 34.5672 0 30.2295 0H17.9945C13.6569 0 10.1277 3.52912 10.1277 7.8668V15.248C10.0197 15.2947 9.91146 15.3407 9.80386 15.3884C9.39763 15.5695 9.03284 15.8319 8.73199 16.1594C8.43114 16.487 8.20062 16.8727 8.05468 17.2929C7.7111 18.2865 7.87982 19.3866 8.47864 20.2424C7.70905 20.9403 7.23478 21.9447 7.23478 23.0262C7.23478 25.059 8.94048 26.7921 10.9904 26.7805H11.3856V27.2262C11.3856 31.7607 13.7683 35.7484 17.3466 38.0043V39.4311C17.347 39.8132 17.2192 40.1845 16.9835 40.4853C16.7479 40.7862 16.4181 40.9993 16.047 41.0905L7.53214 43.1905C5.52758 43.6816 3.74605 44.8317 2.47334 46.4564C1.20063 48.0811 0.51051 50.0862 0.513683 52.15V68.9746C0.513683 69.5409 0.972648 70 1.53907 70C2.1055 70 2.56446 69.5409 2.56446 68.9746V52.15C2.56199 50.5448 3.09874 48.9854 4.08859 47.7218C5.07845 46.4582 6.46404 45.5636 8.0231 45.1817L14.6187 43.5552C16.6578 46.8254 20.2252 48.8255 24.1123 48.8255C28.1455 48.8255 31.7863 46.7106 33.7884 43.2573L37.6308 43.8869C40.2709 44.3204 42.6006 45.987 43.8628 48.3453L47.1724 54.5241C47.3243 54.8082 47.5428 55.0512 47.8092 55.2323C48.0756 55.4133 48.382 55.5271 48.702 55.5639C49.0224 55.6007 49.3469 55.5592 49.6478 55.4431C49.9487 55.327 50.2169 55.1397 50.4296 54.8972L57.4521 46.888L61.9127 51.3502C61.9169 51.3543 61.9215 51.3578 61.9257 51.362L56.2076 57.9016C56.0324 58.1069 55.9452 58.3729 55.9648 58.6421C55.9845 58.9112 56.1095 59.1618 56.3126 59.3394C56.5158 59.517 56.7807 59.6074 57.0501 59.591C57.3195 59.5745 57.5715 59.4526 57.7515 59.2516L67.176 48.4732C69.1049 46.2852 68.7667 42.786 66.5081 40.9805C64.9908 39.7675 63.0039 39.5363 61.3166 40.2164V25.5596L68.7023 19.5587C68.9483 19.3596 69.1466 19.1079 69.2826 18.8221C69.4186 18.5364 69.4889 18.2238 69.4883 17.9073C69.4883 17.2638 69.2017 16.6619 68.7023 16.2561ZM38.9385 23.0262C38.9385 23.9504 38.1599 24.7343 37.235 24.7297H36.8399V21.618C37.2258 21.6455 37.6136 21.6042 37.9851 21.496C38.558 21.7786 38.9385 22.3722 38.9385 23.0262ZM11.3856 24.7297H10.9904C10.0602 24.7345 9.28556 23.9516 9.28556 23.0262C9.28556 22.3728 9.66509 21.7803 10.2364 21.4981C10.6092 21.6065 10.9982 21.6479 11.3854 21.6204L11.3856 24.7297ZM11.6394 19.4756C11.052 19.736 10.3715 19.4812 10.0658 18.9115C9.7437 18.3113 10.0139 17.5391 10.6359 17.2629C16.2692 14.7617 22.4875 13.878 28.5945 14.7108C29.1546 14.7864 29.6724 14.3942 29.7487 13.8331C29.7668 13.6996 29.7585 13.5639 29.7242 13.4337C29.6899 13.3035 29.6303 13.1813 29.5488 13.0741C29.4673 12.9669 29.3655 12.8768 29.2491 12.809C29.1328 12.7411 29.0042 12.6969 28.8708 12.6788C23.2463 11.9122 17.5198 12.5152 12.1784 14.4367V7.8668C12.1784 4.65979 14.7874 2.05078 17.9944 2.05078H30.2295C33.4365 2.05078 36.0455 4.65979 36.0455 7.8668V14.4363C35.262 14.1544 34.4687 13.9003 33.6672 13.6746C33.4059 13.6027 33.1269 13.6371 32.8909 13.7703C32.655 13.9035 32.4814 14.1247 32.408 14.3855C32.3346 14.6463 32.3674 14.9255 32.4993 15.1622C32.6311 15.3989 32.8513 15.5738 33.1117 15.6487C34.6406 16.0794 36.1367 16.6188 37.5887 17.2628C38.2055 17.5366 38.4773 18.3095 38.161 18.9072C37.8607 19.4744 37.1868 19.7421 36.585 19.4755C28.9331 16.087 19.3932 16.0379 11.6394 19.4756ZM13.4363 27.2262V20.946C20.278 18.2097 27.9479 18.2098 34.7892 20.9464V27.2262C34.7892 30.0781 33.6785 32.7603 31.6618 34.7782C29.6614 36.7799 26.9666 37.9065 24.1128 37.9065C18.2257 37.9066 13.4363 33.1153 13.4363 27.2262ZM24.1123 46.7748C21.1644 46.7748 18.4417 45.3651 16.7339 43.0244C18.4057 42.5052 19.565 40.833 19.3973 39.0511C20.8968 39.6514 22.4975 39.959 24.1127 39.9574C25.7546 39.9574 27.3476 39.6458 28.828 39.0555C28.723 40.822 29.9402 42.4175 31.6016 42.8751C29.9062 45.3094 27.1453 46.7748 24.1123 46.7748ZM65.2272 42.5817C66.6013 43.6801 66.8041 45.7964 65.632 47.1233L63.2783 49.8151L58.8073 45.3426L60.8902 42.9671C61.4239 42.356 62.173 41.9747 62.9812 41.9029C63.7894 41.831 64.5941 42.0743 65.2272 42.5817ZM67.4091 17.967L61.3166 22.9172L61.3162 12.8974L67.4089 17.8478C67.44 17.8671 67.4408 17.9471 67.4091 17.967ZM29.7581 26.4495C30.03 26.4495 30.2909 26.3414 30.4832 26.1491C30.6755 25.9568 30.7835 25.696 30.7835 25.4241V23.1649C30.7835 22.5987 30.3245 22.1396 29.7581 22.1396C29.1917 22.1396 28.7327 22.5987 28.7327 23.1649V25.4241C28.7327 25.696 28.8407 25.9568 29.033 26.1491C29.2253 26.3414 29.4861 26.4495 29.7581 26.4495ZM18.4665 22.1397C18.1945 22.1397 17.9337 22.2477 17.7414 22.44C17.5491 22.6323 17.4411 22.8931 17.4411 23.1651V25.4242C17.4411 25.9905 17.9001 26.4496 18.4665 26.4496C19.0329 26.4496 19.4919 25.9905 19.4919 25.4242V23.1651C19.4919 22.8931 19.3839 22.6323 19.1916 22.44C18.9993 22.2477 18.7384 22.1397 18.4665 22.1397ZM27.2695 31.5488C27.1387 31.3104 26.9185 31.1337 26.6575 31.0576C26.3964 30.9815 26.1158 31.0123 25.8773 31.143C25.3245 31.4449 24.7038 31.6008 24.0739 31.596C23.4699 31.5889 22.8769 31.4333 22.3473 31.143C22.1091 31.0157 21.8303 30.9874 21.5714 31.0643C21.3126 31.1412 21.0945 31.3172 20.9645 31.554C20.8346 31.7907 20.8033 32.0692 20.8775 32.3289C20.9516 32.5886 21.1252 32.8085 21.3606 32.941C21.9348 33.2562 22.8679 33.6343 24.0524 33.6468C25.2491 33.6592 26.2722 33.2656 26.8638 32.9412C27.1022 32.8103 27.2789 32.5901 27.355 32.329C27.4311 32.0679 27.4004 31.7873 27.2695 31.5488Z"></path></g></svg> </div>
<div class="feature-card-content">
<h6>Guided Tours</h6>
<p>Pellentesque venenatis egestasoi diam Proin velgorat elit porttitor metus convallis.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="feature-card three">
<div class="feature-card-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70"><g clip-path="url(#clip0_1335_400)"><path d="M67.276 47.5101C64.9528 45.2928 62.1063 49.3728 55.5442 51.8647C50.2253 53.8906 49.1313 53.9912 46.3561 54.4485C44.2405 54.7944 38.581 55.7242 35.9324 55.2744C38.5248 53.7263 40.8589 51.508 42.9053 49.2485C46.2761 45.5934 47.554 44.8193 47.7377 42.895C47.9248 41.0961 46.8307 39.4194 44.7961 38.9696C40.1832 37.8972 36.7983 42.7026 34.1432 44.6204C32.3508 45.9199 29.807 45.615 28.074 45.7696V45.7674C24.047 46.0096 21.5368 48.068 17.7444 48.8669C17.5984 48.2193 17.4546 47.5718 17.2795 46.9285C16.8298 45.2528 15.1833 44.0723 13.4287 44.1728C9.29249 44.3566 9.93249 44.7101 6.58332 44.8464C4.63197 44.9274 2.94549 44.9977 2.22333 45.8636C2.09343 46.0182 1.99823 46.1989 1.94414 46.3934C1.89005 46.5879 1.87835 46.7918 1.90982 46.9912C2.76928 53.1133 2.30441 57.4885 3.04387 61.949C3.07986 62.1602 3.198 62.3486 3.37249 62.473C3.54698 62.5974 3.76362 62.6477 3.97506 62.6128C4.18649 62.578 4.37553 62.4608 4.50085 62.287C4.62618 62.1132 4.67759 61.8968 4.64386 61.6852C3.99846 57.789 4.33035 52.629 3.52711 46.8593C4.2417 46.4118 7.66223 46.5426 9.11195 46.2626C10.3401 46.0247 11.8168 45.8669 13.5011 45.7923C14.4979 45.7674 15.4644 46.4193 15.7163 47.3512C17.4633 53.8106 17.6946 60.5079 16.3952 66.7706C13.5454 66.6138 10.7455 66.336 7.88169 66.2019C7.48277 66.1738 7.05466 66.5263 7.03304 66.9738C7.02306 67.1886 7.09877 67.3985 7.24351 67.5574C7.38826 67.7164 7.5902 67.8113 7.80493 67.8214L7.84818 67.8236L9.14979 69.056C10.2719 70.1198 11.2687 70.0008 17.766 69.9922C18.5281 69.9922 19.1357 69.469 19.1757 68.7511C19.2665 67.0917 19.3379 65.389 19.4362 63.7457C27.5378 67.8571 36.2567 69.4592 44.3096 68.3003C52.4772 67.1252 59.9312 63.1187 65.5452 56.8885C66.4274 55.9101 67.2793 54.8517 67.7431 53.5069C68.0371 52.655 68.2663 51.3404 67.9614 50.2863C68.2847 49.1209 67.9993 48.202 67.276 47.5101ZM26.0578 47.6982C29.2394 46.8982 31.7065 47.9707 34.8286 46.1026C37.2654 44.6647 38.9216 41.6777 42.1561 40.6431C42.2642 40.6431 44.7691 39.9231 45.7475 41.3404C45.7723 41.3761 45.8405 41.4572 45.8707 41.4896C46.6253 43.6366 45.8513 43.6626 41.7443 48.1166C41.6902 48.1653 41.6621 48.2031 41.6707 48.2031H41.6729C41.0491 48.6809 38.3075 52.2615 34.3346 54.349C34.2621 54.3879 34.2059 54.4442 34.1508 54.5004C33.4146 54.4409 32.9983 55.3036 33.4805 55.8441C35.1735 57.7458 41.1507 56.9469 46.6199 56.0474C47.9204 55.7296 48.9356 56.1144 56.1215 53.3815C61.1582 51.468 66.449 46.7501 66.4782 49.3988C66.4944 50.988 63.7398 53.3912 62.5961 54.5101C59.7442 57.2236 56.7204 59.2906 53.288 60.9976C41.9767 66.5349 31.0989 63.9836 18.8016 60.3349C18.928 57.0245 18.6814 53.7103 18.0665 50.455C20.8254 49.8755 23.7238 48.3469 26.0578 47.6982Z"></path><path d="M12.4165 51.1956C14.4803 51.7026 15.4965 49.2173 14.0209 47.9935C13.9348 47.9206 13.8341 47.8668 13.7256 47.8359C13.6171 47.8049 13.5033 47.7975 13.3917 47.814C12.9679 47.6043 12.4857 47.5524 12.0652 47.6854C10.3993 48.2 10.4403 50.7124 12.4165 51.1956ZM29.7149 24.7179C30.0662 24.7179 30.4132 24.6336 30.7332 24.4887L33.9689 27.7341L33.9256 27.7384C33.7115 27.7559 33.513 27.8578 33.3739 28.0216C33.2348 28.1854 33.1665 28.3978 33.184 28.6119C33.2015 28.8261 33.3034 29.0246 33.4672 29.1637C33.631 29.3027 33.8434 29.371 34.0575 29.3535L36.091 29.186C36.3019 29.1688 36.4978 29.0699 36.6368 28.9103C36.7757 28.7508 36.8468 28.5432 36.8348 28.3319L36.7202 26.3471C36.7066 26.1328 36.6091 25.9326 36.4488 25.7897C36.2885 25.6468 36.0784 25.5729 35.864 25.5838C35.6493 25.5964 35.4484 25.6936 35.3053 25.8541C35.1622 26.0146 35.0887 26.2254 35.1008 26.44L35.1094 26.5806L31.8878 23.3514C32.0567 23.0059 32.143 22.6259 32.14 22.2413C32.137 21.8567 32.0447 21.4781 31.8705 21.1352L35.8208 17.052L35.8229 17.1395C35.828 17.3512 35.9157 17.5525 36.0672 17.7003C36.2187 17.8482 36.422 17.931 36.6337 17.9309H36.6543C36.7608 17.9282 36.8657 17.9046 36.963 17.8614C37.0604 17.8182 37.1483 17.7562 37.2217 17.679C37.2951 17.6018 37.3525 17.5109 37.3908 17.4114C37.429 17.312 37.4473 17.206 37.4445 17.0995L37.3927 15.0596C37.3873 14.8481 37.2995 14.6471 37.148 14.4995C36.9966 14.3518 36.7934 14.2692 36.5819 14.2693H34.5938C34.3787 14.2693 34.1725 14.3547 34.0204 14.5068C33.8684 14.6588 33.7829 14.8651 33.7829 15.0801C33.7829 15.2951 33.8684 15.5014 34.0204 15.6534C34.1725 15.8055 34.3787 15.8909 34.5938 15.8909H34.6878L30.7008 20.013C30.2017 19.8034 29.6454 19.7736 29.1267 19.9287C28.6121 20.0739 28.158 20.3812 27.832 20.805C27.5059 21.2288 27.3253 21.7465 27.317 22.2811C27.2976 23.5222 28.3257 24.7179 29.7149 24.7179Z"></path><path d="M33.7466 5.703C32.2005 5.44255 30.6267 5.38947 29.0666 5.54516C24.8309 5.70516 21.0558 7.4511 17.8461 10.7408C16.411 12.2099 15.2614 13.9328 14.4558 15.8219C13.75 17.4938 13.3252 19.2709 13.1985 21.0813C12.9012 25.1862 14.1066 29.0726 16.6861 32.318C17.2143 32.9734 17.7922 33.5871 18.4147 34.1537C19.5974 35.9256 21.3899 37.3656 23.3412 38.292C33.0839 42.9169 45.0233 36.9158 47.086 25.7516C48.02 20.6975 46.6189 15.2867 43.4352 11.2327C40.9746 8.0965 37.6979 6.35921 33.7466 5.703ZM14.8115 23.0835H17.1099C17.3249 23.0835 17.5311 22.998 17.6832 22.846C17.8353 22.6939 17.9207 22.4877 17.9207 22.2727C17.9207 22.0576 17.8353 21.8514 17.6832 21.6993C17.5311 21.5473 17.3249 21.4618 17.1099 21.4618H14.8083C14.8137 21.3732 14.8083 21.2856 14.8158 21.1959C14.9315 19.5581 15.3131 17.9624 15.9477 16.4554C16.6092 14.9177 17.5247 13.5023 18.6558 12.2684L19.7001 13.3116C19.7744 13.3913 19.8639 13.4552 19.9633 13.4995C20.0628 13.5438 20.1702 13.5676 20.279 13.5695C20.3879 13.5715 20.496 13.5514 20.597 13.5107C20.6979 13.4699 20.7897 13.4092 20.8667 13.3322C20.9436 13.2552 21.0043 13.1635 21.0451 13.0625C21.0859 12.9616 21.1059 12.8534 21.104 12.7446C21.1021 12.6357 21.0783 12.5283 21.0339 12.4289C20.9896 12.3294 20.9257 12.2399 20.8461 12.1657L19.8028 11.1214C22.4807 8.68136 25.5444 7.35488 28.9325 7.18191V9.11703C28.9325 9.33207 29.018 9.53831 29.17 9.69036C29.3221 9.84242 29.5283 9.92784 29.7433 9.92784C29.9584 9.92784 30.1646 9.84242 30.3167 9.69036C30.4687 9.53831 30.5541 9.33207 30.5541 9.11703V7.22083C31.0482 7.26948 31.5174 7.33002 31.9563 7.42083C34.8374 7.97434 37.5433 9.38082 39.6795 11.3495L39.1465 11.8813C39.0691 11.9562 39.0074 12.0457 38.965 12.1446C38.9225 12.2436 38.9002 12.35 38.8993 12.4576C38.8984 12.5653 38.919 12.672 38.9598 12.7717C39.0006 12.8713 39.0609 12.9618 39.137 13.0379C39.2132 13.114 39.3038 13.1741 39.4034 13.2149C39.5031 13.2556 39.6099 13.276 39.7175 13.2751C39.8252 13.2741 39.9316 13.2517 40.0305 13.2091C40.1294 13.1666 40.2188 13.1048 40.2936 13.0273L40.8092 12.5127C41.5958 13.3997 42.2704 14.38 42.8179 15.4316C43.7811 17.2802 44.313 19.3559 44.4341 21.4618H42.9044C42.6893 21.4618 42.4831 21.5473 42.331 21.6993C42.179 21.8514 42.0936 22.0576 42.0936 22.2727C42.0936 22.4877 42.179 22.6939 42.331 22.846C42.4831 22.998 42.6893 23.0835 42.9044 23.0835H44.4525C44.3368 25.7397 43.5638 28.3634 42.1498 30.5645C41.6806 31.2867 41.1249 31.9645 40.5206 32.6045L39.7292 31.8132C39.655 31.7335 39.5655 31.6696 39.466 31.6253C39.3666 31.581 39.2592 31.5571 39.1503 31.5552C39.0415 31.5533 38.9333 31.5733 38.8324 31.6141C38.7314 31.6549 38.6397 31.7156 38.5627 31.7926C38.4857 31.8696 38.425 31.9613 38.3842 32.0622C38.3435 32.1632 38.3234 32.2713 38.3254 32.3802C38.3273 32.4891 38.3511 32.5964 38.3954 32.6959C38.4397 32.7954 38.5036 32.8849 38.5833 32.9591L39.3465 33.7234C36.6828 36.0023 33.6763 37.1007 30.5541 37.2088V35.9072C30.5541 34.8337 28.9325 34.8337 28.9325 35.9072V37.1796C25.4342 36.9072 22.1974 35.3634 19.7434 33.1818L22.165 31.4251C22.3392 31.2988 22.456 31.1084 22.4899 30.896C22.5238 30.6835 22.4718 30.4663 22.3455 30.2921C22.2192 30.1179 22.0289 30.001 21.8164 29.9672C21.604 29.9333 21.3867 29.9852 21.2126 30.1115L18.6526 31.9678C18.6277 31.9861 18.6136 32.0142 18.5909 32.0348C18.3747 31.7969 18.1553 31.5602 17.9564 31.3105C16.0342 28.891 14.9737 26.0759 14.8115 23.0835Z"></path><path d="M10.0051 16.051C10.2091 16.1187 10.4317 16.1027 10.6239 16.0064C10.816 15.9101 10.9621 15.7414 11.03 15.5375C13.5867 7.85317 21.3143 2.00887 29.405 1.64238C37.2688 1.29644 45.2936 6.14831 48.6969 13.2683L48.0547 13.6704C47.2266 14.1894 47.3304 15.4142 48.2223 15.7958C49.1444 16.1893 50.4677 17.0164 51.0785 17.3439C51.1792 17.3976 51.2902 17.4294 51.4041 17.4372C51.518 17.4451 51.6323 17.4287 51.7394 17.3893C51.8466 17.3499 51.9442 17.2884 52.0259 17.2086C52.1076 17.1289 52.1716 17.0328 52.2136 16.9266C52.6579 15.8023 52.5055 14.3504 52.6352 13.0942C52.739 12.0942 51.6536 11.4175 50.805 11.9483L50.0796 12.4023C46.325 4.6921 37.9574 -0.394368 29.3305 0.0240085C20.4548 0.425088 12.2959 6.59371 9.49054 15.0261C9.42279 15.2301 9.43883 15.4527 9.53512 15.6448C9.63142 15.837 9.80008 15.9831 10.004 16.051H10.0051ZM49.2374 20.3472C49.0071 20.8542 48.9996 21.4131 49.2158 21.8823C49.6633 22.8542 51.1401 22.1796 50.6882 21.2034C50.6741 21.1709 50.6752 21.0996 50.7141 21.0153C50.9498 20.4899 51.952 20.8185 52.0363 22.5363C52.1304 24.4639 51.1347 26.4034 49.5606 27.3666C49.3876 27.4713 49.26 27.637 49.2028 27.831C49.1456 28.025 49.163 28.2334 49.2515 28.4152C49.3401 28.5971 49.4934 28.7393 49.6814 28.8139C49.8694 28.8885 50.0785 28.8901 50.2677 28.8185C51.6542 28.3013 53.1446 28.1245 54.6136 28.3028C54.8262 28.3262 55.0396 28.2658 55.2083 28.1344C55.3771 28.003 55.488 27.8109 55.5174 27.599C55.544 27.3857 55.4848 27.1706 55.3528 27.0009C55.2208 26.8312 55.0269 26.7209 54.8136 26.6942C54.0495 26.5994 53.2775 26.5874 52.5109 26.6585C53.3001 25.4271 53.7282 23.9374 53.6568 22.4574C53.4774 18.8142 50.1498 18.3212 49.2374 20.3472ZM56.8957 25.0985C57.6438 24.7807 58.5909 24.4315 59.5768 24.2834C59.5076 25.1947 59.4038 26.1039 59.2471 27.0034C59.0601 28.0606 60.659 28.3396 60.8438 27.2844C61.2438 24.9947 61.3768 22.6553 61.2363 20.331C61.2151 20.1223 61.114 19.9298 60.9542 19.794C60.7943 19.6582 60.5881 19.5895 60.3787 19.6024C60.1694 19.6153 59.9731 19.7087 59.8311 19.863C59.689 20.0174 59.6122 20.2207 59.6168 20.4304C59.6611 21.1645 59.6665 21.8996 59.6536 22.6336C58.8566 22.7283 58.0734 22.9151 57.3195 23.1904L57.0903 19.4737C57.0211 18.3818 55.406 18.5158 55.4709 19.5731L55.7682 24.4023C55.7766 24.5317 55.8158 24.6573 55.8827 24.7684C55.9495 24.8796 56.042 24.9732 56.1523 25.0413C56.2627 25.1095 56.3878 25.1502 56.5171 25.1602C56.6464 25.1701 56.7762 25.149 56.8957 25.0985Z"></path></g></svg> </div>
<div class="feature-card-content">
<h6>Best Support 24/7</h6>
<p>Sed venenatis mauris nec nulla euismod, accounv varius lectus viverra oncen.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="feature-card two">
<div class="feature-card-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70"><path d="M12.2181 42.5833C12.0897 42.5833 11.9648 42.541 11.863 42.4628C11.7611 42.3846 11.6879 42.275 11.6546 42.151C11.6214 42.027 11.63 41.8954 11.6792 41.7768C11.7283 41.6582 11.8152 41.5591 11.9264 41.4949L32.1156 29.8375C32.2464 29.763 32.4009 29.7419 32.5469 29.7787C32.6929 29.8155 32.819 29.9073 32.8989 30.0349C32.9788 30.1625 33.0062 30.3161 32.9754 30.4635C32.9447 30.6109 32.8581 30.7406 32.7339 30.8257L28.4172 33.7423C28.5124 33.7368 28.6073 33.7566 28.6923 33.7996C28.7774 33.8427 28.8495 33.9074 28.9014 33.9873C28.9856 34.1056 29.0227 34.2509 29.0054 34.3951C28.9882 34.5392 28.9178 34.6717 28.8081 34.7667L22.8242 39.9408C22.8567 39.9763 22.8849 40.0155 22.9082 40.0575C22.9856 40.1915 23.0066 40.3507 22.9665 40.5001C22.9265 40.6496 22.8287 40.777 22.6947 40.8543L19.8761 42.4667C19.7506 42.5376 19.6033 42.5594 19.4626 42.5281C19.3219 42.4968 19.1978 42.4146 19.1141 42.2972C19.0305 42.1798 18.9933 42.0356 19.0097 41.8924C19.0261 41.7492 19.0949 41.6171 19.2029 41.5217L23.4029 37.8933L15.4462 42.4865C15.3155 42.5589 15.162 42.5784 15.0174 42.5409C14.8727 42.5035 14.748 42.412 14.6688 42.2852C14.5897 42.1585 14.5622 42.0062 14.592 41.8598C14.6218 41.7134 14.7067 41.584 14.8291 41.4983L18.2707 39.1755L12.5144 42.4993C12.4251 42.5537 12.3226 42.5828 12.2181 42.5833ZM43.0332 30.8128C42.9147 30.8127 42.7989 30.7764 42.7015 30.7089C42.6041 30.6413 42.5295 30.5456 42.4878 30.4346C42.4461 30.3236 42.4393 30.2025 42.4681 30.0875C42.497 29.9725 42.5602 29.869 42.6494 29.7908L42.7929 29.6648L42.4289 29.8737C42.303 29.9453 42.1549 29.9674 42.0136 29.9359C41.8722 29.9043 41.7477 29.8213 41.6641 29.703C41.5806 29.5847 41.5441 29.4395 41.5616 29.2957C41.5792 29.152 41.6496 29.0199 41.7592 28.9252L42.2469 28.5098C42.1265 28.5684 41.9897 28.5837 41.8594 28.5533C41.729 28.5229 41.6131 28.4486 41.5311 28.3429C41.449 28.2372 41.4058 28.1064 41.4087 27.9726C41.4116 27.8388 41.4604 27.7101 41.5469 27.608L43.3984 25.4042L38.0784 28.476C37.9503 28.5496 37.799 28.5718 37.6551 28.5381C37.5112 28.5044 37.3855 28.4174 37.3033 28.2946C37.2211 28.1718 37.1885 28.0224 37.2122 27.8766C37.2359 27.7307 37.3141 27.5993 37.4309 27.5088L37.7086 27.2953L35.6517 28.4795C35.5853 28.5217 35.5111 28.5501 35.4335 28.5628C35.3558 28.5756 35.2764 28.5725 35.2 28.5538C35.1236 28.5351 35.0518 28.5011 34.9888 28.4539C34.9259 28.4067 34.8731 28.3473 34.8338 28.2792C34.7944 28.211 34.7692 28.1357 34.7597 28.0576C34.7502 27.9795 34.7566 27.9003 34.7786 27.8247C34.8005 27.7491 34.8375 27.6788 34.8873 27.6179C34.9371 27.557 34.9987 27.5068 35.0684 27.4703L44.7879 21.8575C44.916 21.7854 45.0666 21.7643 45.2096 21.7985C45.3525 21.8327 45.4773 21.9195 45.559 22.0418C45.6407 22.164 45.6732 22.3125 45.6501 22.4577C45.6269 22.6028 45.5499 22.7339 45.4342 22.8247L45.1577 23.0382L45.6594 22.7488C45.778 22.6812 45.9166 22.6573 46.051 22.6813C46.1854 22.7053 46.3071 22.7757 46.3949 22.8802C46.4828 22.9847 46.5312 23.1167 46.5317 23.2532C46.5323 23.3898 46.4849 23.5221 46.3979 23.6273L44.5546 25.8335L47.1737 24.3168C47.2997 24.2453 47.4477 24.2231 47.5891 24.2547C47.7304 24.2862 47.855 24.3692 47.9385 24.4875C48.0221 24.6059 48.0586 24.751 48.041 24.8948C48.0234 25.0386 47.953 25.1706 47.8434 25.2653L47.3674 25.6713C47.4936 25.605 47.6398 25.5872 47.7782 25.6213C47.9167 25.6554 48.0378 25.739 48.1188 25.8563C48.1998 25.9737 48.235 26.1166 48.2178 26.2581C48.2006 26.3997 48.1322 26.53 48.0254 26.6245L45.4366 28.8937C45.4984 29.0254 45.5088 29.1756 45.4656 29.3146C45.4225 29.4536 45.3289 29.5715 45.2032 29.645L43.3284 30.7288C43.2395 30.7833 43.1375 30.8123 43.0332 30.8128ZM42.1746 22.4105C42.0462 22.4105 41.9213 22.3681 41.8195 22.29C41.7176 22.2118 41.6444 22.1022 41.6111 21.9782C41.5779 21.8541 41.5865 21.7226 41.6357 21.604C41.6848 21.4853 41.7717 21.3862 41.8829 21.322L43.2082 20.5578C43.2746 20.5156 43.3489 20.4873 43.4265 20.4745C43.5041 20.4618 43.5836 20.4648 43.66 20.4835C43.7364 20.5023 43.8082 20.5362 43.8712 20.5834C43.9341 20.6306 43.9868 20.6901 44.0262 20.7582C44.0656 20.8263 44.0908 20.9017 44.1003 20.9798C44.1097 21.0579 44.1033 21.1371 44.0814 21.2127C44.0595 21.2882 44.0225 21.3586 43.9727 21.4195C43.9229 21.4804 43.8613 21.5305 43.7916 21.567L42.4662 22.3323C42.3777 22.3839 42.277 22.4108 42.1746 22.4105Z"></path><path d="M21.1012 35.7305C20.9775 35.7306 20.857 35.6914 20.757 35.6186C20.6571 35.5458 20.5829 35.4431 20.5451 35.3253C20.5073 35.2076 20.5079 35.0809 20.5469 34.9635C20.5858 34.8461 20.661 34.7441 20.7617 34.6723L27.4455 29.9006L26.7455 30.3055C26.62 30.3774 26.4722 30.4002 26.3308 30.3693C26.1894 30.3384 26.0646 30.256 25.9806 30.1382C25.8965 30.0204 25.8592 29.8756 25.876 29.7319C25.8927 29.5881 25.9623 29.4558 26.0712 29.3605L31.1019 24.9773L31.089 24.9563C31.0117 24.8223 30.9907 24.6631 31.0307 24.5137C31.0708 24.3642 31.1685 24.2368 31.3025 24.1595L33.546 22.8645C33.6714 22.7938 33.8185 22.772 33.9589 22.8032C34.0994 22.8344 34.2234 22.9164 34.3071 23.0335C34.3907 23.1506 34.4282 23.2945 34.4121 23.4375C34.3961 23.5805 34.3278 23.7126 34.2204 23.8083L31.3819 26.2816L37.3319 22.8481C37.4617 22.7719 37.6159 22.7489 37.7623 22.7838C37.9088 22.8187 38.036 22.9088 38.1175 23.0354C38.199 23.1619 38.2285 23.3151 38.1997 23.4628C38.1709 23.6106 38.0861 23.7414 37.963 23.8281L31.2815 28.5986L41.2705 22.8306C41.4044 22.7545 41.563 22.7344 41.7117 22.7748C41.8603 22.8151 41.987 22.9127 42.064 23.0461C42.141 23.1795 42.1622 23.3379 42.1228 23.4868C42.0834 23.6358 41.9867 23.7631 41.8539 23.841L21.3929 35.6523C21.3042 35.7035 21.2036 35.7305 21.1012 35.7305ZM10.1637 44.8538C10.0843 44.8542 10.0056 44.8382 9.93272 44.8066C9.85983 44.7751 9.79427 44.7288 9.74019 44.6706C9.65015 44.5753 9.59485 44.4524 9.58321 44.3218C9.57157 44.1912 9.60426 44.0605 9.67602 43.9508L9.79269 43.777L9.39719 44.0103C9.26877 44.0834 9.1174 44.105 8.97365 44.0708C8.8299 44.0366 8.70448 43.9492 8.62272 43.8261C8.54097 43.703 8.50896 43.5535 8.53318 43.4077C8.5574 43.262 8.63603 43.1308 8.75319 43.0408L9.37269 42.5741L8.48836 43.084C8.36406 43.1583 8.21655 43.1838 8.07451 43.1554C7.93247 43.127 7.80607 43.0468 7.71991 42.9304C7.63374 42.814 7.59398 42.6696 7.60836 42.5255C7.62274 42.3814 7.69023 42.2477 7.79769 42.1506L9.68186 40.3668L7.23186 41.7831C7.11023 41.8526 6.9677 41.8759 6.83028 41.8489C6.69286 41.8219 6.56973 41.7464 6.48339 41.6362C6.39705 41.5259 6.35326 41.3883 6.36002 41.2484C6.36677 41.1085 6.42363 40.9757 6.52019 40.8743L8.34836 38.9761L6.19702 40.2198C6.07404 40.2907 5.92941 40.3144 5.79024 40.2863C5.65108 40.2582 5.52693 40.1803 5.44106 40.0673C5.35519 39.9542 5.3135 39.8137 5.3238 39.6721C5.33411 39.5305 5.39569 39.3976 5.49702 39.2981L8.30752 36.5553C8.28662 36.5312 8.26825 36.505 8.25269 36.4771C8.17534 36.3432 8.15438 36.1839 8.19442 36.0345C8.23445 35.8851 8.33221 35.7577 8.46619 35.6803L10.3387 34.5988C10.4617 34.5279 10.6063 34.5042 10.7455 34.5323C10.8846 34.5604 11.0088 34.6382 11.0947 34.7513C11.1805 34.8644 11.2222 35.0049 11.2119 35.1464C11.2016 35.288 11.14 35.421 11.0387 35.5205L9.63869 36.882L11.3362 35.902C11.458 35.8317 11.601 35.8077 11.739 35.8345C11.877 35.8613 12.0007 35.937 12.0874 36.0478C12.174 36.1585 12.2177 36.2968 12.2104 36.4373C12.2032 36.5777 12.1454 36.7107 12.0479 36.812L10.2232 38.7113L13.4292 36.8668C13.5535 36.7924 13.701 36.7669 13.843 36.7953C13.9851 36.8237 14.1115 36.9039 14.1976 37.0204C14.2838 37.1368 14.3236 37.2811 14.3092 37.4252C14.2948 37.5694 14.2273 37.703 14.1199 37.8001L12.2357 39.5746L16.9304 36.8656C17.0587 36.794 17.2094 36.7735 17.3522 36.8081C17.4951 36.8428 17.6196 36.9301 17.7008 37.0527C17.782 37.1752 17.814 37.3238 17.7904 37.4689C17.7667 37.614 17.6891 37.7448 17.5732 37.8351L12.1937 41.9033C12.2143 41.9821 12.2182 42.0643 12.2052 42.1447C12.1921 42.225 12.1624 42.3018 12.1179 42.37L11.7177 42.9766C11.8342 43.0253 11.9312 43.1115 11.993 43.2216C12.0705 43.3555 12.0916 43.5146 12.0518 43.664C12.012 43.8134 11.9145 43.9409 11.7807 44.0185L10.4554 44.7826C10.3662 44.832 10.2655 44.8565 10.1637 44.8538Z"></path><path d="M42.1771 36.4094C42.0487 36.4094 41.9238 36.367 41.822 36.2888C41.7201 36.2107 41.6469 36.1011 41.6136 35.977C41.5804 35.853 41.589 35.7215 41.6381 35.6028C41.6873 35.4842 41.7742 35.3851 41.8854 35.3209L43.2061 34.5591C43.2725 34.5169 43.3467 34.4885 43.4243 34.4758C43.502 34.463 43.5814 34.4661 43.6578 34.4848C43.7342 34.5035 43.806 34.5375 43.869 34.5847C43.9319 34.6319 43.9847 34.6913 44.024 34.7594C44.0634 34.8275 44.0886 34.9029 44.0981 34.981C44.1076 35.0591 44.1012 35.1383 44.0792 35.2139C44.0573 35.2894 44.0203 35.3598 43.9705 35.4207C43.9207 35.4816 43.8591 35.5318 43.7894 35.5682L42.4687 36.3312C42.3802 36.3827 42.2795 36.4097 42.1771 36.4094Z"></path><path d="M42.6185 44.6833C42.5041 44.6833 42.3921 44.6496 42.2967 44.5864C42.2012 44.5233 42.1264 44.4334 42.0816 44.3281C42.0369 44.2228 42.0241 44.1066 42.0449 43.994C42.0656 43.8815 42.1191 43.7775 42.1985 43.6951L44.267 41.5473L42.2988 42.6836C42.177 42.7539 42.0338 42.7778 41.8956 42.7509C41.7575 42.724 41.6338 42.648 41.5473 42.5371C41.4607 42.4261 41.4172 42.2876 41.4248 42.1471C41.4323 42.0065 41.4904 41.8735 41.5883 41.7724L43.014 40.3106L39.2655 42.4666C39.1399 42.5377 38.9923 42.5597 38.8514 42.5283C38.7105 42.4969 38.5863 42.4144 38.5027 42.2967C38.4191 42.179 38.3821 42.0345 38.3989 41.8911C38.4157 41.7477 38.485 41.6156 38.5935 41.5204L40.1802 40.1531L36.1668 42.4666C36.0479 42.5355 35.9084 42.5602 35.773 42.5363C35.6377 42.5124 35.5151 42.4414 35.4269 42.336C35.3387 42.2305 35.2906 42.0973 35.2911 41.9598C35.2916 41.8223 35.3406 41.6894 35.4295 41.5846L37.1795 39.5243L32.85 42.0233C32.7295 42.0918 32.5885 42.1151 32.4522 42.0891C32.316 42.0631 32.1936 41.9894 32.1068 41.8813C32.02 41.7731 31.9745 41.6376 31.9786 41.499C31.9827 41.3604 32.036 41.2278 32.129 41.1249L33.3773 39.7658L31.541 40.8333C31.4242 40.9001 31.2879 40.9245 31.1551 40.9022C31.0224 40.88 30.9014 40.8126 30.8127 40.7114C30.724 40.6102 30.673 40.4814 30.6684 40.3469C30.6638 40.2124 30.7058 40.0805 30.7873 39.9734L31.8257 38.6189L30.2402 39.5348C30.1214 39.603 29.9823 39.6272 29.8474 39.6032C29.7125 39.5792 29.5904 39.5084 29.5024 39.4033C29.4144 39.2983 29.3663 39.1656 29.3664 39.0285C29.3664 38.8915 29.4148 38.7589 29.5028 38.6539L30.3288 37.6739L29.0922 38.3879C28.9725 38.4558 28.8326 38.4792 28.6973 38.454C28.562 38.4287 28.4399 38.3564 28.3528 38.2498C28.2657 38.1433 28.219 38.0094 28.2211 37.8717C28.2232 37.7341 28.2739 37.6016 28.3642 37.4978L29.042 36.7301L28.0212 37.3134C27.8988 37.3807 27.7563 37.4018 27.6197 37.3729C27.4831 37.3441 27.3613 37.2671 27.2766 37.1561C27.1919 37.0451 27.1498 36.9074 27.1579 36.768C27.1661 36.6286 27.224 36.4968 27.3212 36.3964L27.4448 36.2739L27.152 36.4419C27.0337 36.5104 26.8952 36.5352 26.7605 36.512C26.6258 36.4888 26.5035 36.419 26.415 36.3148C26.3265 36.2106 26.2774 36.0787 26.2763 35.942C26.2752 35.8053 26.3221 35.6726 26.4088 35.5669L27.3118 34.4656L25.955 35.2484C25.8364 35.3168 25.6975 35.3412 25.5627 35.3175C25.4279 35.2938 25.3057 35.2234 25.2176 35.1187C25.1294 35.014 25.0809 34.8816 25.0805 34.7447C25.0801 34.6078 25.1278 34.4752 25.2153 34.3699L26.0728 33.3444L24.7895 34.0841C24.6767 34.1505 24.5446 34.1765 24.4151 34.1578C24.2855 34.1391 24.1662 34.0769 24.0767 33.9814C23.9863 33.887 23.9303 33.7649 23.9176 33.6348C23.9049 33.5047 23.9363 33.3741 24.0067 33.2639L25.2538 31.3238L23.2075 32.5044C23.0874 32.573 22.9469 32.5967 22.811 32.5713C22.675 32.5459 22.5525 32.473 22.4654 32.3656C22.3782 32.2582 22.332 32.1234 22.335 31.9852C22.338 31.8469 22.3901 31.7142 22.4818 31.6108L23.12 30.8968L22.154 31.4544C22.0406 31.5196 21.9085 31.5448 21.7791 31.5259C21.6496 31.507 21.5303 31.4451 21.4402 31.3502C21.3502 31.2553 21.2946 31.1329 21.2825 31.0026C21.2704 30.8723 21.3025 30.7418 21.3735 30.6319L22.6113 28.7303L20.5918 29.8969C20.476 29.964 20.3406 29.9892 20.2083 29.9682C20.0761 29.9473 19.9551 29.8815 19.8657 29.7819C19.7762 29.6823 19.7237 29.555 19.717 29.4213C19.7103 29.2876 19.7498 29.1556 19.8288 29.0476L20.95 27.5111L19.2093 28.5156C19.0952 28.5815 18.962 28.6069 18.8316 28.5875C18.7012 28.568 18.5812 28.505 18.4912 28.4087C18.4012 28.3123 18.3465 28.1883 18.3361 28.0569C18.3256 27.9254 18.3599 27.7943 18.4335 27.6849L19.6445 25.8848L15.1318 28.4888C15.006 28.5612 14.8577 28.5842 14.7159 28.5531C14.5741 28.5221 14.4489 28.4392 14.3649 28.3208C14.2809 28.2024 14.2441 28.0569 14.2616 27.9127C14.2792 27.7686 14.3499 27.6362 14.4598 27.5414L15.0432 27.0433L12.5162 28.5016C12.3823 28.5777 12.2237 28.5978 12.075 28.5574C11.9264 28.5171 11.7997 28.4196 11.7227 28.2862C11.6457 28.1528 11.6245 27.9943 11.6639 27.8454C11.7033 27.6965 11.8 27.5692 11.9328 27.4913L19.8463 22.9226C19.9722 22.8501 20.1205 22.8272 20.2623 22.8582C20.4041 22.8893 20.5293 22.9721 20.6133 23.0906C20.6973 23.209 20.7341 23.3545 20.7166 23.4986C20.699 23.6427 20.6283 23.7751 20.5183 23.8699L19.935 24.3693L21.2382 23.6168C21.3523 23.5508 21.4855 23.5255 21.6159 23.5449C21.7463 23.5643 21.8663 23.6273 21.9563 23.7237C22.0463 23.82 22.101 23.9441 22.1115 24.0755C22.122 24.2069 22.0876 24.338 22.014 24.4474L20.803 26.2499L22.7478 25.1276C22.8637 25.0605 22.9991 25.0353 23.1313 25.0563C23.2636 25.0772 23.3846 25.143 23.474 25.2426C23.5635 25.3422 23.616 25.4695 23.6227 25.6032C23.6294 25.7369 23.5899 25.8689 23.5108 25.9769L22.3897 27.5146L24.1327 26.5089C24.2455 26.4458 24.3762 26.4219 24.5041 26.4411C24.632 26.4603 24.7499 26.5214 24.8393 26.6149C24.9286 26.7084 24.9844 26.829 24.9978 26.9576C25.0111 27.0863 24.9814 27.2157 24.9132 27.3256L23.6753 29.2273L25.6937 28.0606C25.8138 27.9912 25.9547 27.9669 26.0911 27.9921C26.2274 28.0172 26.3504 28.0901 26.4379 28.1977C26.5254 28.3053 26.5717 28.4405 26.5686 28.5792C26.5654 28.7178 26.5129 28.8508 26.4205 28.9543L25.7823 29.6671L26.746 29.1106C26.8588 29.0442 26.9909 29.0182 27.1204 29.0369C27.25 29.0555 27.3693 29.1177 27.4588 29.2133C27.5492 29.3077 27.6053 29.4298 27.618 29.5599C27.6306 29.69 27.5993 29.8206 27.5288 29.9308L26.2817 31.8721L28.328 30.6914C28.4466 30.6231 28.5855 30.5986 28.7203 30.6224C28.8551 30.6461 28.9773 30.7164 29.0655 30.8212C29.1536 30.9259 29.2022 31.0582 29.2026 31.1951C29.203 31.332 29.1552 31.4647 29.0677 31.5699L28.2125 32.5943L29.4958 31.8546C29.6141 31.7861 29.7527 31.7613 29.8874 31.7845C30.0221 31.8078 30.1444 31.8776 30.2328 31.9817C30.3213 32.0859 30.3704 32.2179 30.3715 32.3545C30.3727 32.4912 30.3258 32.624 30.239 32.7296L29.3348 33.8333L30.6917 33.0504C30.8141 32.9832 30.9565 32.9621 31.0932 32.9909C31.2298 33.0198 31.3515 33.0967 31.4363 33.2077C31.521 33.3187 31.5631 33.4564 31.5549 33.5958C31.5467 33.7353 31.4888 33.8671 31.3917 33.9674L31.2692 34.0911L31.562 33.9219C31.6819 33.8533 31.8222 33.8294 31.958 33.8545C32.0938 33.8797 32.2163 33.9522 32.3037 34.0591C32.391 34.1661 32.4376 34.3006 32.4351 34.4387C32.4326 34.5768 32.3812 34.7095 32.29 34.8133L31.6168 35.5833L32.6365 34.9999C32.7553 34.9324 32.8941 34.9087 33.0286 34.933C33.163 34.9574 33.2847 35.0281 33.3724 35.133C33.46 35.2378 33.508 35.3701 33.5081 35.5068C33.5082 35.6435 33.4602 35.7758 33.3727 35.8808L32.5467 36.8608L33.7845 36.1468C33.901 36.0788 34.0374 36.0533 34.1705 36.0746C34.3037 36.0958 34.4254 36.1626 34.5148 36.2634C34.6042 36.3649 34.6554 36.4943 34.6599 36.6295C34.6644 36.7646 34.6217 36.8971 34.5393 37.0043L33.4987 38.3599L36.0945 36.8619C36.2151 36.7934 36.3561 36.77 36.4923 36.7961C36.6285 36.8221 36.751 36.8958 36.8378 37.0039C36.9246 37.112 36.97 37.2476 36.9659 37.3862C36.9618 37.5248 36.9085 37.6574 36.8155 37.7603L35.5672 39.1194L39.507 36.8444C39.626 36.7755 39.7654 36.7508 39.9008 36.7747C40.0362 36.7986 40.1588 36.8696 40.247 36.975C40.3351 37.0805 40.3832 37.2137 40.3827 37.3512C40.3823 37.4887 40.3333 37.6216 40.2443 37.7264L38.5002 39.7833L44.9752 36.0499C45.1008 35.9788 45.2484 35.9569 45.3893 35.9882C45.5302 36.0196 45.6544 36.1022 45.738 36.2198C45.8216 36.3375 45.8586 36.4821 45.8418 36.6254C45.825 36.7688 45.7557 36.9009 45.6472 36.9961L44.0617 38.3623L46.0928 37.1956C46.2147 37.1261 46.3575 37.1029 46.4951 37.1301C46.6328 37.1574 46.7559 37.2333 46.8421 37.344C46.9283 37.4547 46.9717 37.5927 46.9643 37.7328C46.957 37.8729 46.8994 38.0057 46.8022 38.1068L45.3718 39.5604L47.2607 38.4708C47.3823 38.4013 47.5248 38.378 47.6623 38.405C47.7997 38.4319 47.9228 38.5075 48.0091 38.6177C48.0955 38.728 48.1393 38.8656 48.1325 39.0055C48.1258 39.1454 48.0689 39.2782 47.9723 39.3796L45.7172 41.7211C45.8219 41.712 45.9269 41.735 46.0182 41.7871C46.1095 41.8392 46.1828 41.9179 46.2282 42.0128C46.3052 42.1466 46.3259 42.3056 46.2859 42.4547C46.2459 42.6039 46.1483 42.7311 46.0147 42.8084L42.9102 44.6004C42.8222 44.6538 42.7214 44.6824 42.6185 44.6833Z"></path><path d="M9.61761 30.5597C9.49517 30.5597 9.37585 30.5212 9.27653 30.4496C9.1772 30.378 9.10292 30.277 9.06421 30.1608C9.02549 30.0447 9.0243 29.9193 9.06081 29.8025C9.09731 29.6856 9.16966 29.5832 9.26761 29.5097L10.3351 28.7071L8.92461 29.5237C8.79904 29.5969 8.6507 29.6205 8.50862 29.59C8.36654 29.5595 8.24096 29.4771 8.15646 29.3589C8.07195 29.2407 8.03462 29.0952 8.05175 28.9509C8.06889 28.8066 8.13927 28.6739 8.24911 28.5787L10.2091 26.8684L7.72761 28.2999C7.60751 28.3692 7.46662 28.3935 7.33023 28.3684C7.19384 28.3433 7.07086 28.2704 6.98336 28.1628C6.89585 28.0552 6.84954 27.9199 6.85273 27.7813C6.85592 27.6426 6.90841 27.5097 7.00077 27.4062L8.79511 25.3995L6.37194 26.7995C6.25218 26.869 6.11164 26.8935 5.97544 26.8688C5.83924 26.8442 5.71625 26.7719 5.62845 26.6649C5.54066 26.5578 5.49377 26.4231 5.49618 26.2847C5.49859 26.1463 5.55014 26.0133 5.64161 25.9094L8.46727 22.6894C8.37945 22.6389 8.30659 22.566 8.25611 22.4782C8.17876 22.3442 8.15779 22.185 8.19783 22.0356C8.23787 21.8861 8.33563 21.7587 8.46961 21.6814L10.3421 20.5999C10.4619 20.5305 10.6024 20.5059 10.7386 20.5306C10.8748 20.5553 10.9978 20.6276 11.0856 20.7346C11.1734 20.8416 11.2203 20.9763 11.2179 21.1147C11.2155 21.2531 11.1639 21.3862 11.0724 21.49L8.85577 24.0217L11.3699 22.5704C11.4899 22.5018 11.6303 22.478 11.7662 22.5033C11.9021 22.5285 12.0246 22.6012 12.1118 22.7084C12.1991 22.8156 12.2455 22.9502 12.2427 23.0884C12.24 23.2266 12.1883 23.3593 12.0968 23.4629L10.2978 25.4695L14.8174 22.8667C14.9428 22.795 15.0904 22.7723 15.2315 22.8031C15.3727 22.834 15.4974 22.9161 15.5815 23.0336C15.6655 23.151 15.703 23.2955 15.6867 23.4391C15.6703 23.5826 15.6013 23.715 15.4929 23.8105L13.5341 25.5162L18.1308 22.8632C18.2593 22.7911 18.4103 22.7703 18.5536 22.805C18.6968 22.8397 18.8216 22.9273 18.9029 23.0502C18.9842 23.1732 19.0159 23.3223 18.9917 23.4677C18.9675 23.6131 18.8892 23.7439 18.7724 23.8339L12.2181 28.7561C12.2288 28.8675 12.2072 28.9797 12.1559 29.0792C12.1046 29.1787 12.0258 29.2613 11.9288 29.3172L9.91277 30.4839C9.82304 30.5353 9.72104 30.5616 9.61761 30.5597Z"></path><path d="M42.3316 54.9162C42.327 54.9499 42.327 54.984 42.3316 55.0177C42.3301 55.5886 42.3785 56.1586 42.4763 56.721C42.942 59.0174 44.1902 61.0809 46.0079 62.5594C47.8256 64.038 50.1001 64.8398 52.4431 64.8282C54.5085 64.8089 56.5218 64.1779 58.2289 63.0151C59.9359 61.8523 61.2601 60.2098 62.0343 58.2949C62.4554 57.1764 62.667 55.99 62.6584 54.7949C62.6852 54.7189 62.6827 54.6358 62.6514 54.5615C62.6255 53.1243 62.2878 51.7098 61.6618 50.4159C61.0357 49.1219 60.1362 47.9792 59.0254 47.0669C57.3842 45.7749 55.3917 45.0076 53.3078 44.8651C51.224 44.7225 49.1455 45.2113 47.3436 46.2677C45.8353 47.1569 44.5816 48.4199 43.7037 49.9348C42.8257 51.4497 42.3532 53.1654 42.3316 54.9162ZM58.1178 48.4645L56.8799 49.7L56.6746 49.9065C56.6543 49.9238 56.6376 49.945 56.6258 49.969C56.6139 49.9929 56.6071 50.019 56.6056 50.0456C56.6042 50.0723 56.6083 50.0989 56.6175 50.124C56.6268 50.149 56.641 50.1719 56.6594 50.1912C56.7917 50.2735 56.948 50.3084 57.1028 50.2904C57.5171 50.2868 57.9162 50.1335 58.2263 49.8587L58.8598 49.2252C60.0592 50.6586 60.7793 52.4318 60.9189 54.2955H59.8141C59.5859 54.2887 59.359 54.3317 59.1491 54.4215C58.9679 54.4934 58.8129 54.6188 58.7046 54.7809C58.6647 54.8405 58.6446 54.9112 58.6473 54.9828C58.6501 55.0545 58.6754 55.1235 58.7198 55.1799C58.8443 55.302 59.012 55.37 59.1864 55.3689H60.9364C60.9262 55.7205 60.8947 56.0711 60.8419 56.4189C60.6054 57.8483 60.0024 59.192 59.0919 60.319L58.4503 59.675L58.2438 59.4697C58.1121 59.3834 57.9548 59.3447 57.7981 59.36C57.5714 59.3658 57.3476 59.4129 57.1378 59.4989C56.9601 59.5558 56.801 59.6593 56.6769 59.7987C56.6104 59.8944 56.5684 59.9994 56.6653 60.0962L58.0139 61.4449C56.6985 62.5736 55.071 63.2754 53.3473 63.4574V61.607C53.3473 61.4799 53.1046 61.4099 53.0253 61.3947C52.815 61.3627 52.6002 61.3778 52.3964 61.439C52.1895 61.487 51.996 61.5811 51.8306 61.7144L51.7198 61.831C51.6919 61.8624 51.6717 61.8998 51.661 61.9403C51.6503 61.9809 51.6492 62.0234 51.6579 62.0644V63.4235C49.8681 63.1949 48.194 62.414 46.8688 61.1894L48.1159 59.9422L48.3213 59.7369C48.3924 59.6657 48.4379 59.5689 48.3469 59.493C48.2126 59.4266 48.061 59.4034 47.9129 59.4265C47.6873 59.4428 47.4652 59.492 47.2538 59.5724C47.0817 59.6287 46.9229 59.7196 46.7871 59.8395L46.1711 60.4555C45.4658 59.653 44.9163 58.726 44.5506 57.722C44.2902 56.969 44.1332 56.184 44.0839 55.3887H45.1958C45.4234 55.3963 45.65 55.3541 45.8596 55.265C46.0418 55.192 46.1971 55.0645 46.3041 54.8999C46.3433 54.8381 46.3626 54.7658 46.3593 54.6928C46.3559 54.6197 46.3301 54.5494 46.2854 54.4915C46.2243 54.43 46.1516 54.3811 46.0715 54.3477C45.9914 54.3142 45.9055 54.2969 45.8188 54.2967H44.0758C44.1649 52.5098 44.7997 50.7931 45.8946 49.378L46.5701 50.0535L46.7754 50.26C46.9008 50.3933 47.0705 50.4763 47.2526 50.4934C47.4812 50.516 47.7115 50.4757 47.9188 50.3767C48.1045 50.2988 48.2586 50.1608 48.3563 49.9847C48.3955 49.9144 48.4135 49.8342 48.4082 49.7539C48.4028 49.6735 48.3742 49.5965 48.3259 49.532L46.9983 48.2044C47.0356 48.1729 47.0648 48.1344 47.1021 48.1029C48.3945 47.0349 49.9817 46.3862 51.6521 46.2432V48.0749C51.6521 48.1717 51.9134 48.181 51.9461 48.1822C52.1547 48.1832 52.3623 48.1533 52.5621 48.0935C52.7675 48.0466 52.9643 47.9678 53.1454 47.8602C53.2329 47.803 53.3461 47.7435 53.3461 47.621V46.2455C54.5897 46.3776 55.7868 46.7918 56.8461 47.4565C57.3003 47.7524 57.726 48.0899 58.1178 48.4645Z"></path><path d="M0.321585 38.4814V48.0282C0.150514 49.5744 0.210674 51.1373 0.500085 52.6657C1.39025 55.3409 4.05608 55.1892 6.31242 55.1892H37.6829C37.7094 57.7194 38.4037 60.1978 39.6954 62.3736C41.3992 65.1124 43.9427 67.2271 46.9465 68.4024C49.9504 69.5776 53.2536 69.7503 56.3637 68.8947C59.4737 68.0392 62.2238 66.2012 64.2039 63.655C66.1841 61.1088 67.288 57.9907 67.3513 54.7657C67.3489 51.0039 65.8881 47.3894 63.2759 44.6824C60.6637 41.9753 57.1036 40.3866 53.3443 40.2501V24.2667C53.3443 18.4777 53.5858 12.6327 53.3443 6.8484C53.2276 4.12773 51.0483 3.13723 48.6776 3.13723H45.1928V1.11423C45.1856 1.01981 45.1585 0.927969 45.1134 0.844734C45.0682 0.761499 45.006 0.688746 44.9307 0.631245C44.8555 0.573743 44.769 0.532792 44.6768 0.511075C44.5846 0.489358 44.4889 0.487366 44.3959 0.505229C44.0459 0.537896 43.4731 0.781729 43.4731 1.21923V3.15006H38.1788V1.06523C38.1788 0.693062 37.7436 0.640562 37.4438 0.682562C37.217 0.707312 36.9986 0.782236 36.8044 0.901896C36.6878 0.977729 36.4871 1.1154 36.4871 1.26823V3.15006H31.1776V0.940396C31.1776 0.843562 30.9163 0.833062 30.8836 0.831896C30.6746 0.830989 30.4667 0.860865 30.2664 0.920562C30.0693 0.975396 29.4883 1.1119 29.4883 1.38723V3.15006H24.1776V0.940396C24.1776 0.808562 23.9361 0.729229 23.8509 0.707062C23.6409 0.67034 23.4252 0.683123 23.2209 0.744396C22.9071 0.836562 22.4883 1.01156 22.4883 1.3884V3.15006H17.1858V1.08973C17.1858 0.690729 16.7681 0.551896 16.4204 0.592729C16.1194 0.627729 15.4801 0.837729 15.4801 1.24373V3.15006H10.1904V1.10606C10.1821 1.0144 10.1542 0.925586 10.1088 0.845556C10.0633 0.765526 10.0013 0.696128 9.92682 0.642005C9.85238 0.587883 9.76723 0.550285 9.67708 0.531727C9.58693 0.513169 9.49385 0.514079 9.40409 0.534396C9.07042 0.568229 8.47075 0.800396 8.47075 1.2274V3.13956C7.19519 3.08236 5.91751 3.0917 4.64292 3.16756C3.61241 3.19244 2.62198 3.57175 1.83846 4.24157C1.05495 4.91139 0.526244 5.8308 0.341418 6.8449C0.311484 7.29264 0.304864 7.74163 0.321585 8.19006V38.4814ZM5.59959 54.4834C3.08192 54.4332 2.01092 52.5969 2.01092 50.3277V21.4889C2.01092 18.3727 1.94092 15.2402 1.93509 12.1136H51.6549V40.2827C50.3676 40.373 49.0965 40.6238 47.8714 41.0294C48.1376 40.753 48.3609 40.4385 48.5341 40.0961C49.1653 38.7439 47.2193 37.3976 46.4143 36.5762C45.5101 35.6522 44.7623 34.4902 43.3214 34.6979C43.0286 34.703 42.7397 34.7669 42.472 34.8858C42.2043 35.0047 41.9632 35.1761 41.763 35.3899C41.5628 35.6037 41.4075 35.8555 41.3065 36.1305C41.2054 36.4054 41.1606 36.6978 41.1748 36.9904H36.4766C36.1619 37.0175 35.8455 37.0194 35.5304 36.9962C35.511 36.9585 35.484 36.9251 35.4511 36.8982C35.0031 36.4677 34.5714 36.0197 34.1328 35.5811L31.0236 32.4742L35.1583 28.3396H41.1526C41.1421 29.0302 41.0616 29.8014 41.6391 30.2972C42.0361 30.5412 42.492 30.6725 42.9579 30.677C43.4239 30.6815 43.8823 30.5591 44.2839 30.3229C44.8033 30.0172 45.2646 29.6223 45.6466 29.1562L47.5133 27.2476C48.0039 26.8689 48.3881 26.3697 48.6286 25.7986C48.8106 25.0379 48.3486 24.5537 47.8679 24.0626L45.9919 22.1446C45.6297 21.7067 45.2265 21.3043 44.7879 20.9429C44.3268 20.7202 43.8135 20.6283 43.3038 20.677C42.794 20.7258 42.3075 20.9134 41.8969 21.2194C41.6268 21.4222 41.4155 21.6932 41.2847 22.0047C41.1539 22.3161 41.1083 22.6567 41.1526 22.9916H34.9868C33.6867 22.8825 32.3958 23.2876 31.3911 24.1197C30.5079 24.9481 29.6738 25.8371 28.8174 26.6934L27.0278 28.4842L23.7401 25.2001C22.7064 24.1664 21.8804 23.0604 20.2961 22.9927C18.0794 22.8982 15.8278 22.9927 13.6029 22.9927C13.229 23.0231 12.8533 23.0231 12.4794 22.9927H12.4713C12.525 22.7805 12.5385 22.5601 12.5109 22.3429C12.4654 21.0409 11.5613 20.5171 10.3316 20.7201C8.44742 21.0316 6.87242 23.2587 5.66492 24.5817C5.48091 24.7283 5.33094 24.913 5.22538 25.1233C5.11981 25.3335 5.06117 25.5641 5.05352 25.7992C5.04586 26.0343 5.08937 26.2683 5.18104 26.4849C5.2727 26.7016 5.41034 26.8957 5.58442 27.0539C6.44075 28.0106 7.38809 28.8984 8.28525 29.8154C8.61425 30.2102 9.06367 30.4862 9.56459 30.601C10.0655 30.7159 10.5903 30.6633 11.0584 30.4512C11.5074 30.3234 11.8973 30.0419 12.1599 29.656C12.4226 29.2701 12.5415 28.8042 12.4958 28.3396H17.0796C17.3771 28.3396 17.6746 28.3466 17.9721 28.3396C18.0302 28.3376 18.0884 28.3407 18.1459 28.3489C18.646 28.7758 19.1093 29.2442 19.5308 29.7489L22.6154 32.8312L18.5169 36.9297H12.5144C12.5812 36.5936 12.5716 36.2467 12.4864 35.9147C12.4012 35.5828 12.2425 35.2742 12.0221 35.0117C11.631 34.7496 11.1736 34.6037 10.703 34.5911C10.2323 34.5785 9.76778 34.6997 9.36325 34.9406C8.85121 35.2648 8.394 35.6685 8.00875 36.1364L6.14209 38.0451C5.64762 38.4262 5.26447 38.9331 5.03259 39.5127C4.85058 40.2874 5.31258 40.7879 5.80375 41.2907L7.67975 43.2087C8.04475 43.6441 8.44766 44.0462 8.88375 44.4104C9.34327 44.6581 9.86544 44.7654 10.3854 44.719C10.9054 44.6725 11.4003 44.4743 11.8086 44.1491C12.0629 43.9394 12.2607 43.6695 12.384 43.3638C12.5073 43.0581 12.5521 42.7265 12.5144 42.3991H15.8079C17.3814 42.5467 18.9671 42.4969 20.5283 42.2509C22.1033 41.8274 23.2524 40.2816 24.3608 39.1732L26.6638 36.8702L29.9304 40.1299C30.4111 40.6106 30.8719 41.1484 31.3911 41.5906C32.4318 42.4737 33.6369 42.3372 34.9074 42.3372H40.4829C40.7159 42.3195 40.9497 42.3176 41.1829 42.3314C41.1626 42.4654 41.1513 42.6007 41.1491 42.7362C41.0586 43.0954 41.1037 43.4753 41.276 43.8031C41.4482 44.131 41.7354 44.3838 42.0824 44.5131C41.7593 44.8257 41.4466 45.1489 41.1491 45.4931C39.0121 48.0095 37.7921 51.1766 37.6888 54.4764C26.9998 54.4986 16.2886 54.6899 5.59959 54.4834ZM43.1476 43.5867C42.8587 43.0292 42.7526 42.3949 42.8443 41.7737C42.8443 41.6757 42.5841 41.6571 42.5491 41.6571C40.0093 41.6571 37.4473 41.7667 34.9109 41.6571C32.9906 41.5742 31.8216 39.8604 30.5441 38.5852L27.6554 35.7001C27.6481 35.6904 27.6394 35.6817 27.6298 35.6744L23.6129 31.6611L20.8129 28.8611C20.5049 28.5542 20.0709 27.9056 19.6673 27.7177C19.3176 27.63 18.9542 27.6114 18.5974 27.6629H12.2158C11.9171 27.6629 10.8158 27.7924 10.8158 28.2299C10.8158 28.5134 10.8391 28.8062 10.8158 29.0886C10.7714 29.6182 10.7924 29.9192 10.2861 29.6719C9.96759 29.5132 9.65025 29.0221 9.40175 28.7689C8.62825 27.9779 6.54925 26.5254 6.74058 25.2946C6.92142 24.1361 8.67142 22.9426 9.45775 22.1376C9.71442 21.8751 10.0878 21.3722 10.2919 21.4317C10.9721 21.6277 10.8158 23.0651 10.8158 23.5679C10.8158 23.6659 11.0759 23.6846 11.1109 23.6846C13.6508 23.6846 16.2128 23.5749 18.7491 23.6846C20.6694 23.7674 21.8384 25.4812 23.1159 26.7564L30.0471 33.6817L32.8471 36.4817C33.1551 36.7886 33.5891 37.4372 33.9928 37.6251C34.3424 37.7128 34.7058 37.7314 35.0626 37.6799H41.4384C41.7371 37.6799 42.8326 37.5504 42.8326 37.1129C42.8326 36.8516 42.7159 35.6907 42.9691 35.5402C43.2024 35.4014 43.4206 35.7491 43.5863 35.9077C44.4029 36.6777 45.1566 37.5107 45.9394 38.3099C46.7223 39.1091 47.4024 39.8266 46.4388 40.9116C46.0351 41.3654 45.6023 41.7959 45.1683 42.2252C44.4589 42.6235 43.7831 43.0788 43.1476 43.5867ZM12.0163 41.5976C11.6849 41.5976 10.8228 41.7772 10.8228 42.2264C10.8228 42.5332 10.8484 42.8494 10.8228 43.1539C10.8076 43.3231 10.8321 43.6346 10.6758 43.7536C10.4623 43.9181 10.5591 43.8271 10.2826 43.6369C9.91158 43.3211 9.57027 42.9719 9.26292 42.5939L7.64825 40.9501C7.20492 40.4962 6.62392 40.0611 6.71492 39.3529C6.78959 38.7614 7.35775 38.3402 7.75325 37.9354L9.37492 36.2717C9.58725 36.0547 9.79609 35.8319 10.0131 35.6196C10.0528 35.5799 10.1414 35.4446 10.2009 35.4271C10.3946 35.3687 10.1298 35.4504 10.2009 35.4656C11.0071 35.6499 10.8263 36.9752 10.8263 37.5656C10.8263 37.7464 11.2276 37.7417 11.3221 37.7417H15.0228C16.2229 37.8059 17.4257 37.8024 18.6254 37.7312C19.8178 37.5936 20.7558 36.2006 21.5421 35.4142L23.3703 33.5861C24.2211 34.4338 25.0709 35.2828 25.9194 36.1329L23.2361 38.8162L21.3344 40.7179C20.9984 41.0539 20.6554 41.5194 20.1678 41.6092C19.6969 41.6495 19.2234 41.6495 18.7526 41.6092H12.0163V41.5976ZM41.4513 23.6752C41.7511 23.6752 42.8454 23.5469 42.8454 23.1071C42.8454 22.7816 42.8198 22.4444 42.8454 22.1212C42.8774 21.908 42.9306 21.6986 43.0041 21.4959L43.0333 21.4679C43.0788 21.4831 43.1266 21.4982 43.1954 21.5157C43.5349 21.8832 43.9188 22.2262 44.2699 22.5856L46.0129 24.3671C46.4796 24.8396 47.0349 25.2572 46.9568 25.9946C46.8914 26.6152 46.3408 27.0166 45.9266 27.4401L44.1766 29.2274C43.9604 29.4057 43.7647 29.6077 43.5933 29.8294C43.5636 29.8732 43.5279 29.9125 43.4871 29.9461C43.4561 29.9169 43.428 29.8849 43.4031 29.8504C43.1149 29.4526 42.8886 29.2869 42.8489 28.7596C42.8256 28.4352 42.8489 28.0992 42.8489 27.7737C42.8489 27.6757 42.5899 27.6571 42.5538 27.6571H38.8496C37.6409 27.6571 36.3763 27.5474 35.1711 27.6571C33.8749 27.7819 32.9941 29.1049 32.1378 29.9577L30.3236 31.7707C29.4571 30.9066 28.5911 30.0413 27.7254 29.1749L30.4169 26.4834L32.3186 24.5806C32.5589 24.3472 32.9778 23.7826 33.3091 23.6682C33.7754 23.6022 34.2486 23.6022 34.7149 23.6682H41.4489L41.4513 23.6752ZM43.4941 29.9589C43.6889 30.1421 43.7029 29.8597 43.4941 29.9589V29.9589ZM65.6444 54.9011C65.649 57.6111 64.8336 60.2592 63.3055 62.4973C61.7774 64.7355 59.6079 66.459 57.0823 67.4416C54.4754 68.3587 51.6468 68.437 48.9932 67.6653C46.3396 66.8937 43.994 65.3109 42.2854 63.1389C40.6284 61.0213 39.6319 58.4625 39.4203 55.782C39.2087 53.1016 39.7913 50.4181 41.0954 48.0667C42.4362 45.693 44.4889 43.8004 46.9635 42.6563C49.4382 41.5123 52.2096 41.1746 54.8866 41.6909C57.912 42.3467 60.6246 44.0113 62.5794 46.4117C64.5341 48.812 65.6149 51.8056 65.6444 54.9011ZM2.01092 6.89623C1.95654 6.20313 2.15447 5.51372 2.56824 4.95502C2.98201 4.39633 3.58375 4.00598 4.26259 3.8559C4.82864 3.82031 5.39637 3.82031 5.96242 3.8559H8.47542V5.89406C8.48378 5.98572 8.51162 6.07454 8.55708 6.15457C8.60254 6.2346 8.66457 6.304 8.73902 6.35812C8.81346 6.41224 8.89861 6.44984 8.98876 6.4684C9.07891 6.48696 9.17198 6.48605 9.26175 6.46573C9.59542 6.4319 10.1951 6.19973 10.1951 5.77273V3.8559H15.4848V5.9104C15.4848 6.3094 15.9024 6.44823 16.2501 6.4074C16.5511 6.3724 17.1904 6.1624 17.1904 5.7564V3.8559H22.4929V6.05973C22.4929 6.19156 22.7344 6.2709 22.8196 6.29306C23.0296 6.32979 23.2453 6.317 23.4496 6.25573C23.7634 6.16356 24.1823 5.98856 24.1823 5.61173V3.86173H29.4929V6.05973C29.4929 6.15656 29.7543 6.16706 29.7869 6.16823C29.9959 6.16914 30.2038 6.13926 30.4041 6.07956C30.6013 6.02473 31.1823 5.88823 31.1823 5.60706V3.85706H36.4918V5.9349C36.4918 6.30706 36.9269 6.35956 37.2268 6.31756C37.4535 6.29281 37.6719 6.21789 37.8661 6.09823C37.9828 6.0224 38.1834 5.88473 38.1834 5.7319V3.8559H43.4778V5.8859C43.4849 5.98032 43.512 6.07216 43.5571 6.15539C43.6023 6.23863 43.6645 6.31138 43.7398 6.36888C43.815 6.42638 43.9015 6.46733 43.9937 6.48905C44.0859 6.51077 44.1816 6.51276 44.2746 6.4949C44.6246 6.46223 45.1974 6.2184 45.1974 5.7809V3.8559H45.2558C46.6558 3.8559 48.7114 3.5374 49.9749 4.27006C52.0924 5.49506 51.6596 8.17373 51.6596 10.2387V11.2199H1.93392C1.93742 9.77673 1.95609 8.33473 2.01092 6.89623Z"></path><path d="M53.3249 52.1209C53.1421 52.1874 52.9849 52.3099 52.8758 52.4709L51.7091 54.8043C51.6696 54.8589 51.649 54.9249 51.6505 54.9923C51.6519 55.0597 51.6754 55.1248 51.7173 55.1776L52.8839 56.3443C53.0497 56.4535 53.2423 56.5149 53.4407 56.5219C53.6391 56.5289 53.8356 56.4812 54.0086 56.3839C54.2139 56.2871 54.7331 55.9488 54.4496 55.6653L53.4124 54.6293C53.7617 53.9293 54.1117 53.2324 54.4624 52.5386C54.5016 52.4839 54.522 52.4179 54.5205 52.3506C54.519 52.2833 54.4958 52.2183 54.4543 52.1653C54.3256 52.0522 54.1588 51.9922 53.9876 51.9973C53.7602 51.9883 53.5338 52.0305 53.3249 52.1209Z"></path></svg> </div>
<div class="feature-card-content">
<h6>Ultimate Flexibility</h6>
<p>Duis leo sapien, lacinia utorrent efficitur utom suscipit quis nulla Sed auctor eu</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-1d87cbb e-con-full e-flex e-con e-parent" data-id="1d87cbb" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-6e6841d elementor-widget elementor-widget-triprex_tours_by_destination" data-id="6e6841d" data-element_type="widget" data-widget_type="triprex_tours_by_destination.default">
<div class="elementor-widget-container">
<div class="package-card-tab-section">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector5.png" alt="vector" class="section-vector5">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector6.png" alt="vector2" class="section-vector6">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center mb-60">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Popular Tour <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2>Elite Tourist Attractions</h2>
</div>
</div>
</div>
<div class="package-card-with-tab">
<ul class="nav nav-pills" id="pills-tab4" role="tablist">
<li class="nav-item" role="presentation">
<div class="nav-link show active" id="sweden-tab" data-bs-toggle="pill" data-bs-target="#sweden" role="tab" aria-controls="sweden" aria-selected="true">Honey moon tour <div class="btn-bg">
<img loading="lazy" decoding="async" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </div>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="japan-tab" data-bs-toggle="pill" data-bs-target="#japan" role="tab" aria-controls="japan" aria-selected="true">Boat Tours <div class="btn-bg">
<img loading="lazy" decoding="async" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </div>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="australia-tab" data-bs-toggle="pill" data-bs-target="#australia" role="tab" aria-controls="australia" aria-selected="true">Group tours <div class="btn-bg">
<img loading="lazy" decoding="async" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-06-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </div>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="new-york-tab" data-bs-toggle="pill" data-bs-target="#new-york" role="tab" aria-controls="new-york" aria-selected="true">Family tours <div class="btn-bg">
<img loading="lazy" decoding="async" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-02-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </div>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="egypt-tab" data-bs-toggle="pill" data-bs-target="#egypt" role="tab" aria-controls="egypt" aria-selected="true">Community based tours <div class="btn-bg">
<img loading="lazy" decoding="async" width="680" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05.webp 680w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-300x199.webp 300w, https://triprex.b-cdn.net/wp-content/uploads/2024/02/Destination-05-600x397.webp 600w" sizes="(max-width: 680px) 100vw, 680px" /> </div>
</div>
</li>
</ul>
<div class="row">
<div class="col-lg-12">
<div class="tab-content" id="pills-tab4Content">
<div class="tab-pane fade show active" id="sweden" role="tabpanel">
<div class="swiper package-card-tab-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 6.php" class="card-img"><img decoding="async" src="akagera/kigali city.jpg" alt="vector"></a>
<div class="batch">
<span class="date">1 Day</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/brazil/"> Rwamagana</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Gisenyi</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Musanze</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 6.php">A day tour in Kigali historical sites and site seeing</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;170<del>&#36;220</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="Booking 6.php">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 7.php" class="card-img"><img decoding="async" src="akagera/beach.jpg" alt="vector"></a>
<div class="batch">
<span class="date">2 Days/1 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/australia/"> Kigali</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Rubavu</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 7.php">Two day water wonderland excursion</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;826<del>&#36;890</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="Booking 7.php">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 8.php" class="card-img"><img decoding="async" src="akagera/Mount Bisoke 5.jpg" alt="vector"></a>
<div class="batch">
<span class="date">1 Day</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/new-york/"> Musanze</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Kigali</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 8.php">Kigali to crate serenity escape.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;460<del>&#36;670</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="Booking 8.php">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 9.php" class="card-img"><img decoding="async" src="akagera/Big-5-in-Akagera.jpg" alt="vector"></a>
<div class="batch">
<span class="date">4 Days / 5 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Nyanza</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 9.php">Kigali to bush bliss tour.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;649<del>&#36;710$</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="Booking 9.php">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-50">
<div class="col-lg-12">
<div class="slider-btn-grp2">
<div class="slider-btn package-card-tab-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<a href="tours.php" class="secondary-btn1">View All Package</a>
<div class="slider-btn package-card-tab-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="japan" role="tabpanel">
<div class="swiper package-card-tab-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="https://triprex.egenslab.com/tour/explore-travel-nycs-museums-diversity-and-energy/" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-12-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">2 Days / 3 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/japan/"> Kigali</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 10.php">Cultural waterscape Discovery</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;770<del>&#36;850</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="Booking 10.php">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="Booking 11.php" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-05-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">1 Day</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/switzerland/"> Musanze</a></li>
<li><a href="https://triprex.egenslab.com/destination/japan/"> Rwamagana</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="Booking 11.php">Gisenyi gateway and hotspring adventure.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<a class="primary-btn2" href="Booking 11.php">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-50">
<div class="col-lg-12">
<div class="slider-btn-grp2">
<div class="slider-btn package-card-tab-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<a href="/tour" class="secondary-btn1">View All Package</a>
<div class="slider-btn package-card-tab-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="australia" role="tabpanel">
<div class="swiper package-card-tab-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="https://triprex.egenslab.com/tour/a-journey-of-tour-beauty-and-inspiration/" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-09-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">7 Days / 8 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/australia/"> Kigali</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Kibuye</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="https://triprex.egenslab.com/tour/a-journey-of-tour-beauty-and-inspiration/">A Journey Of Tour Beauty And Inspiration.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;160<del>&#36;180</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="https://triprex.egenslab.com/tour/a-journey-of-tour-beauty-and-inspiration/">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-50">
<div class="col-lg-12">
<div class="slider-btn-grp2">
<div class="slider-btn package-card-tab-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<a href="/tour" class="secondary-btn1">View All Package</a>
<div class="slider-btn package-card-tab-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="new-york" role="tabpanel">
<div class="swiper package-card-tab-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="https://triprex.egenslab.com/tour/immersive-cultural-expirees-local-cuisine/" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-05-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">10 Days / 11 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/new-york/"> Gisenyi</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="https://triprex.egenslab.com/tour/immersive-cultural-expirees-local-cuisine/">Immersive Cultural Expirees, Local Cuisine.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;500<del>&#36;580</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="https://triprex.egenslab.com/tour/immersive-cultural-expirees-local-cuisine/">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="https://triprex.egenslab.com/tour/exploring-energy-landmarks-and-timeless-traditions/" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-10-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">5 Days / 6 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/new-york/"> Nyanza</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Kibuye</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="https://triprex.egenslab.com/tour/exploring-energy-landmarks-and-timeless-traditions/">Exploring Energy, Landmarks, and Timeless Traditions.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;460<del>&#36;670</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="https://triprex.egenslab.com/tour/exploring-energy-landmarks-and-timeless-traditions/">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-50">
<div class="col-lg-12">
<div class="slider-btn-grp2">
<div class="slider-btn package-card-tab-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<a href="/tour" class="secondary-btn1">View All Package</a>
<div class="slider-btn package-card-tab-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="egypt" role="tabpanel">
<div class="swiper package-card-tab-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="https://triprex.egenslab.com/tour/discover-serenity-exploration-and-enlightenment/" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-10-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">1 Week</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Kibuye</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="https://triprex.egenslab.com/tour/discover-serenity-exploration-and-enlightenment/">Discover Serenity, Exploration, and Enlightenment.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/saint-martin/">Saint Martin</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
<li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Cox’s Bazar</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;340<del>&#36;450</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="https://triprex.egenslab.com/tour/discover-serenity-exploration-and-enlightenment/">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card">
<div class="package-card-img-wrap">
<a href="https://triprex.egenslab.com/tour/adventure-art-architecture-and-mediterranean/" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Tour-Package-07-650x450.webp" alt="vector"></a>
<div class="batch">
<span class="date">4 Days / 5 Night</span>
<div class="location">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
</svg>
<ul class="location-list">
<li><a href="https://triprex.egenslab.com/destination/brazil/"> Rwamagana</a></li>
<li><a href="https://triprex.egenslab.com/destination/sweden/"> Kibuye</a></li>
<li><a href="https://triprex.egenslab.com/destination/egypt/"> Musanze</a></li>
</ul>
</div>
</div>
</div>
<div class="package-card-content">
<div class="card-content-top">
<h5><a href="https://triprex.egenslab.com/tour/adventure-art-architecture-and-mediterranean/">Adventure Art, Architecture, And Mediterranean.</a></h5>
<div class="location-area">
<ul class="location-list scrollTextAni">
<li><a href="https://triprex.egenslab.com/location/sajek-vally/">Sajek Vally</a></li>
<li><a href="https://triprex.egenslab.com/location/sea-beach/">Sea Beach</a></li>
<li><a href="https://triprex.egenslab.com/location/bandar-ban/">Bandar ban</a></li>
<li><a href="https://triprex.egenslab.com/location/khagrachori/">Khagrachori</a></li>
</ul>
</div>
</div>
<div class="card-content-bottom">
<div class="price-area">
<h6>Starting From:</h6>
<span>&#36;170<del>&#36;220</del></span> <p>TAXES INCL/PERS</p>
</div>
<a class="primary-btn2" href="https://triprex.egenslab.com/tour/adventure-art-architecture-and-mediterranean/">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
<path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-50">
<div class="col-lg-12">
<div class="slider-btn-grp2">
<div class="slider-btn package-card-tab-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<a href="tours.php" class="secondary-btn1">View All Package</a>
<div class="slider-btn package-card-tab-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-c752705 e-con-full e-flex e-con e-parent" data-id="c752705" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-d39028c elementor-widget elementor-widget-triprex_activites" data-id="d39028c" data-element_type="widget" data-widget_type="triprex_activites.default">
<div class="elementor-widget-container">
<div class="verticle-tab-section pt-120 mb-120">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector1.png" alt="vect-image" class="section-vector1">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center mb-60">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Are you ready to travel? <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2>Explore Your Activities</h2>
</div>
</div>
</div>
<div class="verticle-tab-wrapper">
<div class="row g-xl-4 gy-5 ">
<div class="col-xl-5">
<div class="verticle-tab-sidebar">
<ul class="nav nav-pills" id="pills-tab5" role="tablist">
<li class="nav-item" role="presentation">
<div class="nav-link active" id="0-tab" data-bs-toggle="tab" data-bs-target="#tech-0" role="tab" aria-controls="tech-0" aria-selected="true">
<div class="icon">
<!--<svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 96a48 48 0 1 0-48-48 48 48 0 0 0 48 48zm-4 121a31.9 31.9 0 0 0 20 7h64a32 32 0 0 0 0-64h-52.78L356 103a31.94 31.94 0 0 0-40.81.68l-112 96a32 32 0 0 0 3.08 50.92L288 305.12V416a32 32 0 0 0 64 0V288a32 32 0 0 0-14.25-26.62l-41.36-27.57 58.25-49.92zm116 39a128 128 0 1 0 128 128 128 128 0 0 0-128-128zm0 192a64 64 0 1 1 64-64 64 64 0 0 1-64 64zM128 256a128 128 0 1 0 128 128 128 128 0 0 0-128-128zm0 192a64 64 0 1 1 64-64 64 64 0 0 1-64 64z"/></svg>-->	
<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path d="M53.9613 0.873077C53.9273 0.718694 53.8714 0.574945 53.7967 0.450038C53.722 0.325131 53.63 0.221513 53.5259 0.1451C53.4218 0.0686872 53.3077 0.0209766 53.1901 0.0046927C53.0725 -0.0115912 52.9537 0.00387037 52.8405 0.0501948L42.599 4.23978C37.5384 6.31095 32.2829 7.36289 26.9993 7.36225C25.8068 7.36225 24.6017 7.30441 23.4075 7.19657L23.353 6.97412C23.2933 6.72978 23.1787 6.51725 23.0255 6.36665C22.8722 6.21604 22.6882 6.13499 22.4993 6.13498H18.8993C18.6927 6.13512 18.4925 6.23225 18.3323 6.41004C15.9892 5.89338 13.6733 5.16846 11.3995 4.23993L1.1581 0.0503481C0.929457 -0.0432306 0.682922 -0.00912245 0.472725 0.145169C0.262528 0.299461 0.105887 0.561297 0.0372628 0.873077C-0.0313617 1.18486 -0.00634906 1.52104 0.106798 1.80767C0.219946 2.0943 0.411959 2.30791 0.640598 2.40148L10.8822 6.59106C13.0245 7.46641 15.2031 8.16689 17.4065 8.68877L17.1942 9.26788C17.1317 9.43831 17.0992 9.62624 17.0992 9.81678C17.0992 10.0073 17.1317 10.1953 17.1942 10.3657L17.9993 12.5611V19.2634L15.2993 24.7861V23.3167C15.538 23.3167 15.7669 23.1874 15.9357 22.9573C16.1045 22.7271 16.1993 22.4149 16.1993 22.0894V19.6349C16.1993 18.0075 15.7252 16.4467 14.8813 15.2959C14.0374 14.1451 12.8928 13.4986 11.6993 13.4986C10.5058 13.4986 9.36125 14.1451 8.51734 15.2959C7.67343 16.4467 7.19933 18.0075 7.19933 19.6349V22.0894C7.19933 22.4149 7.29415 22.7271 7.46293 22.9573C7.63171 23.1874 7.86063 23.3167 8.09932 23.3167V25.7712C8.10006 26.5677 8.24269 27.352 8.51492 28.0567C8.78716 28.7614 9.18087 29.3654 9.66217 29.8166C9.37833 30.2313 9.11967 30.6768 8.88873 31.1487C8.63703 31.6634 8.46711 32.2443 8.38992 32.8539C8.31272 33.4636 8.32995 34.0885 8.4405 34.6886C8.55105 35.2886 8.75247 35.8504 9.03181 36.3379C9.31115 36.8255 9.66222 37.2279 10.0624 37.5192C10.0924 37.5782 10.126 37.6335 10.163 37.6845L16.9449 46.9324C17.4452 47.6183 18.0402 48.1622 18.6956 48.5324C19.351 48.9026 20.0538 49.0919 20.7632 49.0893H20.8082C22.1162 49.0894 23.3798 48.442 24.3641 47.2674L29.6578 40.9508L35.3625 48.7299L38.9625 53.6389C39.046 53.7529 39.1453 53.8433 39.2545 53.905C39.3636 53.9667 39.4807 53.9984 39.5989 53.9984C39.7171 53.9984 39.8341 53.9667 39.9433 53.905C40.0525 53.8433 40.1517 53.7529 40.2353 53.6389L45.6353 46.2753C45.7188 46.1614 45.7851 46.0261 45.8304 45.8772C45.8756 45.7283 45.8989 45.5687 45.8989 45.4075C45.8989 45.2463 45.8756 45.0867 45.8304 44.9378C45.7851 44.7889 45.7188 44.6536 45.6353 44.5397L44.454 42.9289L45.8531 37.2054C45.9059 36.9892 45.9136 36.7571 45.8752 36.5353C45.8368 36.3135 45.7539 36.1106 45.6357 35.9494L43.8357 33.4949C43.7022 33.3127 43.53 33.1924 43.3435 33.1511C43.157 33.1098 42.9658 33.1496 42.7968 33.2648L39.5667 35.4666L32.3241 31.3157C31.5847 30.4136 30.6759 29.8096 29.6992 29.5713V25.7712C29.6993 25.5136 29.6398 25.2626 29.5294 25.0536C29.4189 24.8446 29.2631 24.6883 29.0839 24.6069L27.1376 23.7223C27.1376 23.7223 27.8993 18.4883 27.8993 18.4076V9.80558C33.0559 9.69391 38.1765 8.61225 43.1162 6.59122L53.3579 2.40148C53.4711 2.35516 53.5766 2.27888 53.6681 2.177C53.7597 2.07511 53.8357 1.94962 53.8917 1.8077C53.9478 1.66577 53.9827 1.51018 53.9947 1.34981C54.0066 1.18945 53.9952 1.02745 53.9613 0.873077ZM26.0993 9.80481V18.2861L25.8689 19.857L23.9556 12.2713L24.2042 11.5931C24.2571 11.4489 24.2886 11.292 24.297 11.1312C24.3053 10.9704 24.2904 10.809 24.253 10.6561L24.0209 9.70617C24.7133 9.75629 25.406 9.78917 26.0993 9.80481ZM12.8316 37.8523C13.8362 37.5387 14.7552 36.8439 15.4823 35.8482L17.9247 32.5177L20.3933 36.7255L16.1993 42.4446L12.8316 37.8523ZM10.3863 32.5102C10.7804 31.7031 11.2794 31.0011 11.8588 30.4391C11.8747 30.4246 11.8901 30.4093 11.9053 30.3931C12.271 30.046 12.6645 29.757 13.0782 29.5316L15.0825 28.4382L16.7265 30.6803L14.2095 34.1125C13.8669 34.5822 13.4595 34.9546 13.0106 35.2081C12.5618 35.4616 12.0806 35.5912 11.5948 35.5894C11.3319 35.5894 11.0739 35.4921 10.8484 35.3079C10.6228 35.1237 10.4382 34.8595 10.3142 34.5434C10.1901 34.2273 10.1313 33.8712 10.1441 33.5131C10.1568 33.1551 10.2404 32.8084 10.3863 32.5102ZM19.1275 30.6386L23.2316 22.8028C23.3407 22.5946 23.3993 22.3452 23.3993 22.0894V17.6122L24.9919 23.927L23.8967 24.6736C23.7473 24.7755 23.6215 24.9322 23.5337 25.1261C23.4458 25.3199 23.3993 25.5433 23.3993 25.7712V27.7952L20.4293 32.8576L19.1275 30.6386ZM19.6483 20.3159C19.7468 20.1142 19.7994 19.8772 19.7993 19.6349V12.2713C19.7993 12.0808 19.7667 11.8928 19.7042 11.7224L19.0055 9.81678L19.4555 8.58951H21.8506L21.8892 8.74722L21.8927 8.76164L22.4276 10.9499L21.6943 12.9497C21.6318 13.1201 21.5993 13.308 21.5993 13.4986V21.6963L17.8844 28.788L16.4574 26.842L19.6483 20.3159ZM8.99932 19.6349C8.99932 18.6584 9.28378 17.722 9.79013 17.0315C10.2965 16.341 10.9832 15.9531 11.6993 15.9531C12.4154 15.9531 13.1021 16.341 13.6085 17.0315C14.1148 17.722 14.3993 18.6584 14.3993 19.6349V20.8622H8.99932V19.6349ZM13.4993 23.3167V25.7712C13.4993 26.1035 13.4498 26.4323 13.3538 26.7377L12.4097 27.2526C11.9776 27.4884 11.562 27.7773 11.1682 28.1158C10.801 27.9605 10.4799 27.6493 10.2516 27.2275C10.0233 26.8057 9.89989 26.2955 9.89932 25.7712V23.3167H13.4993ZM29.1066 38.3475L23.179 45.4196C22.5229 46.2029 21.6805 46.6347 20.8085 46.6348H20.7635C20.2906 46.6365 19.8221 46.5104 19.3851 46.2635C18.9482 46.0167 18.5515 45.6542 18.218 45.1969L17.4721 44.1802L22.2068 37.7234L26.3243 33.0454C26.9714 32.3109 27.7865 31.9084 28.6285 31.9076H28.7354C29.2083 31.9058 29.6768 32.032 30.1137 32.2788C30.5507 32.5256 30.9474 32.8882 31.2809 33.3455L38.3264 42.953L35.9992 46.1264L30.3357 38.4033C30.1742 38.1832 29.9574 38.0549 29.7292 38.0445C29.501 38.0342 29.2784 38.1425 29.1066 38.3475ZM39.5992 51.0356L37.272 47.862L40.0854 44.0256L42.0561 43.1299L43.7265 45.4075L39.5992 51.0356ZM43.0215 35.8554L43.9695 37.1482L43.0305 40.9878L42.9352 40.8579C42.817 40.6967 42.6682 40.5836 42.5055 40.5312C42.3429 40.4788 42.1727 40.4893 42.0141 40.5613L40.4992 41.2501V37.5751L43.0215 35.8554ZM38.6992 39.99L35.7163 35.9224L38.6992 37.632V39.99ZM27.8993 29.5215C26.8954 29.7086 25.9503 30.2763 25.1715 31.1599L21.729 35.0718L21.5827 34.8219L25.0027 28.9924C25.1301 28.7746 25.1994 28.5043 25.1993 28.2258V26.5297L26.1683 25.8691L27.8993 26.6558V29.5215Z"></path></svg> </div>
<h6> Bike tour </h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="1-tab" data-bs-toggle="tab" data-bs-target="#tech-1" role="tab" aria-controls="tech-1" aria-selected="true">
<div class="icon">
<!--<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 48 48" height="48px" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_4"><g><path d="M31.624,22.806c-1.97-0.16-3.138,0.023-2.912-0.892c0.195-0.786,0.777-1.561,1.83-2.25    c0.033-0.012,0.064-0.02,0.094-0.031c0.171-0.087,0.33-0.188,0.473-0.306v-0.002c0.101-0.051,0.166-0.12,0.215-0.202    c0.822-0.81,1.08-2.083,0.532-3.175c-0.68-1.353-2.325-1.901-3.678-1.22c-0.613,0.308-1.049,0.817-1.29,1.405    c-0.008-0.002-0.008-0.004-0.014-0.004c-0.008,0.031-0.018,0.055-0.027,0.088c-0.035,0.091-0.057,0.183-0.087,0.277    c-0.544,1.791-1.425,2.688-2.147,3.332c-0.772,0.689-1.548,0.775-2.942-1.578c-0.973-1.643-1.836-3.14-2.268-3.895    c-0.015-0.035-0.022-0.072-0.041-0.109c-0.059-0.118-0.136-0.222-0.207-0.326c-0.029-0.053-0.046-0.082-0.046-0.082l-0.003,0.004    c-0.778-1.047-2.216-1.421-3.424-0.817c-1.153,0.58-1.715,1.864-1.438,3.067H14.24c0,0,0.162,2.102,2.916,4.163    s2.526,3.322,2.206,4.4c-0.319,1.074-1.281,2.134-2.243,2.559c-1.149,0.575-1.616,1.981-1.038,3.13    c0.577,1.152,1.979,1.615,3.13,1.039c0.156-0.083,0.3-0.18,0.429-0.281l0.002-0.004c0,0,0.042-0.042,0.118-0.112    c0.005-0.004,0.006-0.008,0.01-0.012c0.562-0.541,2.828-2.615,3.951-1.919c1.288,0.794,1.247,2.818,1.493,3.912    c0.002,0.012,0.009,0.02,0.01,0.027c-0.004,0.361,0.065,0.729,0.237,1.074c0.577,1.152,1.98,1.615,3.133,1.04    c1.15-0.577,1.612-1.982,1.037-3.135c-0.157-0.311-0.377-0.563-0.634-0.771c-0.555-0.731-1.316-1.876-1.583-2.962    c0.113-1.031,1.279-1.899,2.015-1.468c0.736,0.437,2.248,1.627,2.863,0.339C32.913,25.831,33.599,22.963,31.624,22.806z" /><path d="M47.875,19.766l-2.207,0.751c-1.439-9.473-8.903-16.941-18.37-18.389L28.028,0H19.89l0.728,2.128    C11.158,3.575,3.701,11.03,2.253,20.487l-2.128-0.722v8.054l2.116-0.716c1.423,9.521,8.933,17.03,18.455,18.447L19.89,48h8.139    l-0.809-2.449c9.525-1.421,17.04-8.934,18.458-18.463l2.197,0.731V19.766z M25.857,41.425l-1.899-5.758l-1.899,5.758    c-8.267-0.884-14.826-7.45-15.696-15.72l5.637-1.911l-5.625-1.909c0.901-8.22,7.427-14.743,15.651-15.637l1.924,5.627l1.934-5.629    c8.236,0.892,14.776,7.431,15.664,15.672l-5.631,1.915l5.637,1.88C40.679,33.979,34.119,40.545,25.857,41.425z" /></g></g></svg>-->
<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path d="M45.7995 3.23165C40.7634 1.14749 34.0868 0 27 0C19.9132 0 13.2366 1.14749 8.20046 3.23165C2.91229 5.41976 0 8.4272 0 11.6999C0.0023704 12.4332 0.147575 13.1589 0.4275 13.8366C1.00732 15.2684 2.16506 16.6125 3.86854 17.8318C3.96062 17.8967 4.06413 17.9437 4.17364 17.9703L13.4074 31.2195L13.3849 31.2421C13.0915 31.5368 12.9089 31.9238 12.8679 32.3377C12.8269 32.7515 12.93 33.1668 13.1599 33.5134L17.3495 39.7965C17.6776 40.2902 18.1228 40.6949 18.6454 40.9747C19.168 41.2544 19.7517 41.4004 20.3445 41.3997H20.5027L20.7 41.6827V43.1997H17.9426C17.5467 43.1992 17.1556 43.2861 16.7971 43.4541C16.4387 43.6221 16.1216 43.867 15.8687 44.1716L12.3652 48.3757L12.0226 48.2041C11.7211 48.0539 11.3889 47.9756 11.052 47.9753C10.5767 47.9747 10.1144 48.1301 9.73596 48.4176C9.35751 48.7051 9.08383 49.1088 8.95693 49.5668C8.83003 50.0248 8.8569 50.5118 9.03344 50.953C9.20997 51.3943 9.52641 51.7654 9.9342 52.0095L13.0369 53.8713C13.209 53.9746 13.4107 54.0174 13.6099 53.993C13.8091 53.9685 13.9944 53.8781 14.1364 53.7363L15.327 52.5457L17.5369 53.8716C17.709 53.9749 17.9107 54.0178 18.1099 53.9933C18.3091 53.9688 18.4944 53.8785 18.6364 53.7366L20.4246 51.9485L21.2773 51.1658C21.5295 51.4879 21.8517 51.7483 22.2195 51.9274C22.5872 52.1066 22.9909 52.1997 23.4 52.1996H31.5C32.4544 52.1986 33.3695 51.8189 34.0444 51.144C34.7193 50.4692 35.0989 49.5541 35.1 48.5997V41.0971C35.7309 40.8215 36.269 40.3699 36.6498 39.7964L39.4488 35.599L39.4496 35.5979L40.8396 33.5135C41.0666 33.1711 41.1699 32.7614 41.1324 32.3523C41.095 31.9432 40.9191 31.5591 40.6338 31.2635L48.6357 19.8929L47.1637 18.8569L40.9776 27.6475L42.9883 14.9126C45.4134 15.7113 47.4946 16.6959 49.0842 17.8327C49.2369 17.942 49.42 18.0007 49.6078 18.0007C49.7956 18.0007 49.9787 17.942 50.1315 17.8327C51.8349 16.6134 52.9927 15.2693 53.5718 13.839C53.8522 13.1606 53.9977 12.434 54 11.6999C54 8.4272 51.0877 5.41976 45.7995 3.23165ZM8.88863 4.89484C13.7117 2.8991 20.1438 1.79999 27 1.79999C33.8562 1.79999 40.2883 2.8991 45.1114 4.89484C49.1211 6.55398 51.6069 8.70148 52.1054 10.8886C50.4649 9.07644 47.8012 7.4938 44.241 6.2355C39.432 4.53597 33.309 3.59998 27 3.59998C20.691 3.59998 14.568 4.53597 9.75904 6.2355C6.19875 7.4938 3.53509 9.07644 1.89461 10.8886C2.3931 8.70148 4.8789 6.55409 8.88863 4.89484ZM10.3589 7.93232C12.5542 7.17444 14.8091 6.60158 17.1 6.21975V11.5942C15.8794 11.7975 14.6925 12.0373 13.553 12.3153C12.2637 12.6297 11.0433 12.9903 9.9 13.3888V8.09904C10.0513 8.04302 10.2043 7.98756 10.3589 7.93266V7.93232ZM18.9 5.94176C21.287 5.61806 23.6914 5.4395 26.1 5.40705V10.8063C23.6919 10.8383 21.2878 11.0115 18.9 11.3252V5.94176ZM27.9 5.40705C30.3086 5.4395 32.713 5.61806 35.1 5.94176V11.3252C32.7122 11.0115 30.3081 10.8383 27.9 10.8063V5.40705ZM36.9 6.21975C39.1909 6.6017 41.4459 7.17466 43.6412 7.93266C43.7961 7.98741 43.949 8.04287 44.1 8.09904V13.3888C42.9567 12.9899 41.7361 12.6297 40.447 12.3153C39.3075 12.0374 38.1206 11.7975 36.9 11.5942V6.21975ZM2.25 13.4999C3.105 11.7871 5.1363 10.1741 8.1 8.83546V14.0768C6.81654 14.6021 5.58371 15.2434 4.41686 15.9929C3.40403 15.1923 2.6775 14.3569 2.25 13.4999ZM15.4398 33.6871L14.6581 32.5145L16.0602 31.1125L16.8419 32.285L15.4398 33.6871ZM33.3 42.2997V43.1997H22.5V42.2997H33.3ZM26.8452 44.9997H29.5452C29.3586 45.5257 29.0137 45.981 28.558 46.3033C28.1024 46.6256 27.5581 46.799 27 46.7997V45.8997C27.0001 45.5931 26.9478 45.2887 26.8452 44.9997ZM17.2515 45.3237C17.3358 45.2222 17.4415 45.1405 17.5609 45.0845C17.6804 45.0285 17.8107 44.9996 17.9426 44.9997H19.6784L16.865 48.3759L16.5224 48.2046C16.0435 47.965 15.4929 47.9112 14.9767 48.0536L17.2515 45.3237ZM13.3605 51.9663L10.8597 50.4658C10.8113 50.4367 10.7702 50.3969 10.7394 50.3496C10.7087 50.3022 10.6891 50.2484 10.6822 50.1923C10.6754 50.1363 10.6813 50.0794 10.6997 50.0259C10.7181 49.9725 10.7485 49.924 10.7884 49.8841C10.8436 49.8291 10.9147 49.7928 10.9916 49.7802C11.0685 49.7676 11.1474 49.7794 11.2173 49.8139L12.1472 50.2795L12.8387 50.7408L13.7328 51.337C13.7665 51.3884 13.8027 51.4382 13.8406 51.4862L13.3605 51.9663ZM17.8605 51.9663L15.3598 50.466C15.3113 50.437 15.27 50.3973 15.2392 50.3499C15.2083 50.3026 15.1887 50.2488 15.1818 50.1927C15.1749 50.1365 15.1809 50.0796 15.1994 50.0262C15.2178 49.9727 15.2482 49.9242 15.2883 49.8843C15.3434 49.8291 15.4145 49.7926 15.4916 49.7801C15.5686 49.7675 15.6476 49.7796 15.7174 49.8145L16.6474 50.2796L18.3873 51.4395L17.8605 51.9663ZM18.4326 49.3063L21.7513 45.3238C21.8356 45.2223 21.9413 45.1406 22.0608 45.0845C22.1803 45.0285 22.3106 44.9995 22.4426 44.9997H24.3C24.5386 45 24.7674 45.0949 24.9361 45.2636C25.1048 45.4323 25.1997 45.6611 25.2 45.8997V46.7997H23.4C23.2932 46.7995 23.1865 46.8058 23.0805 46.8184C23.0709 46.8193 23.0614 46.8204 23.0519 46.8215C22.4461 46.8994 21.8847 47.181 21.4601 47.6202C21.0355 48.0593 20.7729 48.6298 20.7154 49.2379L19.7117 50.1591L18.4326 49.3063ZM31.5 50.3997H23.4C23.1621 50.3991 22.9341 50.3046 22.7655 50.1367C22.597 49.9688 22.5015 49.7411 22.5 49.5033C22.5 49.4943 22.5008 49.4853 22.501 49.4764C22.506 49.2458 22.5997 49.0259 22.7627 48.8627C22.8974 48.7265 23.0727 48.6376 23.2622 48.6095C23.2712 48.6086 23.2802 48.6074 23.2891 48.6063C23.3259 48.6017 23.3629 48.5994 23.4 48.5997H30.6C30.8387 48.5997 31.0676 48.5048 31.2364 48.3361C31.4052 48.1673 31.5 47.9384 31.5 47.6997V44.9997H33.3V48.5997C33.2994 49.0769 33.1096 49.5344 32.7722 49.8718C32.4347 50.2093 31.9772 50.3991 31.5 50.3997ZM35.1522 38.7978C34.8909 39.1921 34.4843 39.4671 34.0211 39.5628C33.9008 39.5874 33.7783 39.5999 33.6555 39.6001H31.5C31.2992 39.6001 31.1041 39.6672 30.9458 39.7908C30.7876 39.9145 30.6752 40.0875 30.6267 40.2824L30.5723 40.4997H23.4277L23.3731 40.2815C23.3244 40.0868 23.2121 39.9139 23.0539 39.7904C22.8957 39.6668 22.7007 39.5997 22.5 39.5997H20.3445C20.0483 39.5999 19.7566 39.5268 19.4955 39.3868C19.2345 39.2469 19.0121 39.0445 18.8482 38.7977L16.4586 35.2144L17.8213 33.851L19.9282 37.3626C20.0082 37.4959 20.1213 37.6062 20.2565 37.6828C20.3918 37.7594 20.5446 37.7997 20.7 37.7997H24.6226C25.2788 38.3797 26.1243 38.6997 27 38.6997C27.8757 38.6997 28.7212 38.3797 29.3773 37.7997H33.3C33.4554 37.7997 33.6082 37.7595 33.7434 37.6829C33.8787 37.6064 33.9918 37.4961 34.0717 37.3628L36.1787 33.851L37.5418 35.2142L35.1522 38.7978ZM25.2 34.1998H28.8V35.0998C28.8 35.5771 28.6104 36.035 28.2728 36.3725C27.9352 36.7101 27.4774 36.8997 27 36.8997C26.5226 36.8997 26.0648 36.7101 25.7272 36.3725C25.3896 36.035 25.2 35.5771 25.2 35.0998V34.1998ZM25.2 32.3998C25.2 31.9224 25.3896 31.4646 25.7272 31.127C26.0648 30.7894 26.5226 30.5998 27 30.5998C27.4774 30.5998 27.9352 30.7894 28.2728 31.127C28.6104 31.4646 28.8 31.9224 28.8 32.3998H25.2ZM39.3419 32.5145L38.5602 33.6871L37.1581 32.285L37.9398 31.1126L39.3419 32.5145ZM38.8525 29.5629C38.4566 29.3287 37.9859 29.2553 37.5375 29.3579C37.089 29.4605 36.697 29.7311 36.4422 30.1141L35.2512 31.9006C35.2465 31.9078 35.2425 31.9152 35.238 31.9224C35.2349 31.9274 35.2313 31.9318 35.2283 31.9368L32.7905 35.9998H30.486C30.5619 35.7058 30.6002 35.4034 30.6 35.0998V32.3998C30.6 31.445 30.2207 30.5293 29.5456 29.8542C28.8705 29.1791 27.9548 28.7998 27 28.7998C26.0452 28.7998 25.1295 29.1791 24.4544 29.8542C23.7793 30.5293 23.4 31.445 23.4 32.3998V35.0998C23.3998 35.4034 23.4381 35.7058 23.514 35.9998H21.2095L17.5578 30.1139C17.303 29.7309 16.911 29.4602 16.4625 29.3576C16.0141 29.2551 15.5434 29.3285 15.1474 29.5627L13.0074 16.0092L11.2293 16.2905L12.9964 27.4823L5.84415 17.2201C10.5306 14.3532 18.4822 12.5999 27 12.5999C32.1569 12.5999 37.1058 13.243 41.2489 14.3861L38.8525 29.5629ZM49.5831 15.9928C48.4163 15.2433 47.1835 14.602 45.9 14.0767V8.83535C48.864 10.1741 50.895 11.787 51.75 13.4999C51.3225 14.3564 50.5964 15.192 49.5831 15.9928Z"></path></svg> </div>
<h6> Hiking experience</h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="2-tab" data-bs-toggle="tab" data-bs-target="#tech-2" role="tab" aria-controls="tech-2" aria-selected="true">
<div class="icon">
<!--<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" height="512px" id="camping" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M494.422,331.832c-2.987-2.231-7.217-1.619-9.447,1.368l-19.854,26.587l-74.773-133.291   c-0.734-1.31-1.884-2.336-3.267-2.919l-190.735-80.309l17.215-28.396c1.933-3.188,0.915-7.338-2.272-9.271   c-3.186-1.933-7.338-0.915-9.271,2.272l-14.898,24.573l-11.989-24.083c-1.66-3.336-5.713-4.697-9.051-3.033   c-3.337,1.661-4.696,5.714-3.033,9.051l15.793,31.724l-1.536,2.534l-42.659,69.323L47.146,360.145L27.025,333.2   c-2.229-2.986-6.459-3.601-9.447-1.368c-2.986,2.23-3.6,6.46-1.369,9.447l26.068,34.907c0.001,0.001,0.002,0.001,0.002,0.002   c0.227,0.304,0.483,0.578,0.755,0.836c0.001,0.001,0.002,0.002,0.003,0.003c0.145,0.138,0.29,0.272,0.444,0.396   c0.144,0.115,0.297,0.215,0.449,0.316c0.083,0.057,0.163,0.117,0.248,0.169c0.001,0,0.001,0,0.001,0.001   c0.57,0.346,1.189,0.607,1.843,0.772v0.001c0.126,0.031,0.253,0.054,0.38,0.077c0.419,0.081,0.846,0.138,1.283,0.138h42.206H266.94   h37.667h159.707c0.011,0,0.021-0.002,0.033-0.002c0.022-0.001,0.045-0.005,0.067-0.005c0.346-0.005,0.687-0.042,1.022-0.099l0,0   c0.175-0.029,0.349-0.062,0.52-0.104c0.001,0,0.001,0,0.001,0c1.472-0.37,2.784-1.225,3.716-2.442l0,0   c0.016-0.021,0.033-0.038,0.049-0.059l26.067-34.907C498.021,338.292,497.408,334.063,494.422,331.832z M269.17,365.397   c-63.816-47.975-81.071-131.612-81.239-132.455c-0.615-3.119-3.323-5.387-6.502-5.441c-3.143-0.071-5.966,2.11-6.691,5.207   c-16.769,71.537-76.254,123.579-87.24,132.689H59.766l126.319-205.271l107.374,205.271H269.17z M318.072,365.397l18.011-24.118   c2.23-2.987,1.618-7.217-1.368-9.447c-2.987-2.231-7.217-1.619-9.447,1.368l-19.65,26.313L201.244,159.979l178.462,75.142   l73.082,130.276H318.072z"/><path d="M182.189,393.879H90.453c-3.729,0-6.75,3.021-6.75,6.75s3.021,6.75,6.75,6.75h91.736c3.729,0,6.75-3.021,6.75-6.75   S185.918,393.879,182.189,393.879z"/><path d="M225.39,393.879h-14.85c-3.729,0-6.75,3.021-6.75,6.75s3.021,6.75,6.75,6.75h14.85c3.729,0,6.75-3.021,6.75-6.75   S229.118,393.879,225.39,393.879z"/><path d="M307.739,393.879h-55.35c-3.729,0-6.75,3.021-6.75,6.75s3.021,6.75,6.75,6.75h55.35c3.729,0,6.75-3.021,6.75-6.75   S311.468,393.879,307.739,393.879z"/><path d="M288.795,164.631l13.713,5.696c0.847,0.353,1.724,0.519,2.587,0.519c2.646,0,5.157-1.566,6.236-4.162   c1.43-3.442-0.202-7.394-3.645-8.822l-13.713-5.697c-3.441-1.43-7.393,0.202-8.823,3.645   C283.721,159.251,285.353,163.202,288.795,164.631z"/><path d="M327.442,180.685l51.117,21.232c0.846,0.352,1.723,0.518,2.587,0.518c2.646,0,5.156-1.566,6.235-4.162   c1.431-3.442-0.202-7.394-3.644-8.822l-51.117-21.232c-3.438-1.432-7.392,0.202-8.822,3.645   C322.368,175.304,324,179.255,327.442,180.685z"/></g></svg>-->	
<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path d="M25.498 10.0585C25.0293 8.61417 24.1913 7.57563 23.0754 7.05472C22.059 6.58116 20.861 6.54959 19.6116 6.96329C17.1179 7.78939 15.9349 9.87567 16.5235 12.4079C16.5678 12.5986 16.6211 12.7913 16.6823 12.9788C17.0209 14.0219 17.6258 15.0828 18.3856 15.9655C18.5803 16.1924 18.7821 16.4042 18.9891 16.5995C19.2502 16.8468 19.5198 17.0678 19.7952 17.2605C19.8779 17.3191 19.9625 17.3756 20.0465 17.4283C20.15 17.4934 20.2692 17.5269 20.389 17.5269C20.445 17.5269 20.501 17.5197 20.5557 17.5052C20.5778 17.4993 20.5993 17.4934 20.6214 17.4881C20.736 17.4572 20.8519 17.4282 20.9671 17.4C21.0192 17.3868 21.0707 17.3743 21.1221 17.3625C21.1481 17.3559 21.1748 17.35 21.2009 17.3441C21.253 17.3316 21.3044 17.3191 21.3565 17.3079C21.378 17.3026 21.4001 17.298 21.4216 17.2934C21.5095 17.2737 21.5974 17.2546 21.6859 17.2362C21.7452 17.2237 21.8051 17.2112 21.865 17.1994C21.9249 17.1869 21.9841 17.175 22.044 17.1638C22.1358 17.1461 22.2283 17.129 22.3207 17.1125C22.4282 17.0928 22.5363 17.0737 22.645 17.0566C22.7453 17.0402 22.8455 17.0244 22.9464 17.0093C22.9777 17.0047 23.0083 17.0001 23.0395 16.9955C23.0441 16.9942 23.0493 16.9935 23.0545 16.9935C23.1053 16.9856 23.1554 16.9784 23.2062 16.9718C23.3234 16.9554 23.4406 16.9402 23.5578 16.9264C23.6333 16.9172 23.7082 16.9087 23.7837 16.9001C23.8586 16.8922 23.9341 16.8843 24.009 16.8764C24.1594 16.8613 24.3105 16.8481 24.4609 16.8363C24.666 16.8205 24.8515 16.7074 24.9616 16.5311C25.1608 16.2115 25.3301 15.8524 25.4668 15.4656C26.0339 13.8726 26.0658 11.8074 25.498 10.0585ZM24.0149 15.5551C23.9042 15.5656 23.7935 15.5768 23.6828 15.5886C23.6275 15.5945 23.5721 15.6005 23.5168 15.607C23.4615 15.6129 23.4061 15.6195 23.3514 15.6268C23.2778 15.636 23.2043 15.6452 23.1307 15.655C23.0825 15.6616 23.035 15.6682 22.9868 15.6748C22.9823 15.6748 22.977 15.6754 22.9718 15.6767C22.9419 15.6807 22.9126 15.6846 22.8826 15.6892C22.8774 15.6899 22.8716 15.6906 22.8664 15.6919C22.8071 15.7004 22.7485 15.709 22.6893 15.7182C22.63 15.7267 22.5714 15.7359 22.5135 15.7458C22.4067 15.7622 22.2999 15.7807 22.1931 15.7991C22.156 15.8057 22.1183 15.8122 22.0811 15.8195C22.0733 15.8201 22.0662 15.8214 22.0584 15.8234C21.9763 15.8385 21.8936 15.8537 21.8116 15.8695C21.7764 15.876 21.7413 15.8826 21.7061 15.8898C21.475 15.9352 21.2439 15.9846 21.0147 16.0372C20.9606 16.0497 20.9059 16.0622 20.8519 16.0753C20.7367 16.1023 20.6221 16.1299 20.5075 16.1589C20.1123 15.878 19.7294 15.5228 19.3687 15.1026C18.7202 14.3488 18.2052 13.4491 17.9194 12.5677C17.8699 12.4158 17.8263 12.2612 17.7911 12.1073C17.1765 9.46196 19.1428 8.50301 20.0172 8.21362C20.331 8.10904 20.794 7.9946 21.3083 7.9946C22.354 7.9946 23.6112 8.46881 24.261 10.4683C24.8053 12.1461 24.6953 14.2206 24.0149 15.5544V15.5551Z"></path><path d="M26.2996 43.8645C26.0958 43.4265 25.7754 43.0384 25.3496 42.7503C24.2206 41.9867 22.7349 42.1676 21.8168 43.1798L19.0647 46.2158L16.3633 49.196L16.8223 49.6209L16.5971 49.6393L16.1927 49.6406C16.1927 49.6511 16.1927 49.6616 16.1934 49.6728V49.6807C16.1941 49.6866 16.1947 49.6919 16.1947 49.6978C16.306 50.9856 16.9161 52.1426 17.9123 52.9542C18.7515 53.6382 19.7692 53.9999 20.8285 53.9999C21.0271 53.9999 21.2269 53.9875 21.4268 53.9618L21.4685 53.9565C21.6677 53.9309 21.8435 53.8145 21.9464 53.6402L25.9636 46.815L26.1772 46.452C26.6577 45.6371 26.6746 44.6676 26.2996 43.8645ZM20.9958 52.6806C20.1748 52.7207 19.3785 52.4589 18.73 51.9308C18.0842 51.4039 17.6636 50.6765 17.5275 49.8603L22.7772 44.0684C23.2577 43.5389 24.0344 43.4442 24.625 43.8435C25.2559 44.2703 25.446 45.1207 25.0579 45.7798L20.9958 52.6806Z"></path><path d="M36.4141 36.583L31.7295 42.0421L30.6123 41.2949C29.8818 40.8062 28.8973 41.0147 28.422 41.7579L28.0952 42.2683L21.7191 38.5298C21.9952 37.7018 21.9965 36.8014 21.7171 35.9674C21.4307 35.111 21.1273 34.1909 20.8102 33.2411C21.8636 31.0187 23.9152 29.3007 26.2747 28.6759C28.6134 28.057 31.2093 28.5233 33.1977 29.9098C33.3814 31.0871 33.5604 32.1645 33.7128 33.0313C33.882 33.9975 34.3834 34.8716 35.1289 35.4997L36.4141 36.583Z"></path><path d="M37.0633 36.5297C37.049 36.3541 36.9657 36.191 36.8316 36.0779L35.5463 34.9946C34.9193 34.4671 34.4961 33.7291 34.3542 32.9162C34.3203 32.7248 34.2858 32.5281 34.2513 32.3249V32.3243C34.1549 31.7606 34.0553 31.1568 33.9557 30.5333C33.9173 30.2939 33.8789 30.0512 33.8411 29.8072C33.8131 29.6296 33.7142 29.4711 33.5677 29.3685C33.1803 29.0981 32.772 28.8607 32.3482 28.6568C30.8702 27.9445 29.2047 27.6406 27.577 27.784C27.4357 27.7965 27.2958 27.8123 27.1551 27.832C27.1545 27.8314 27.1538 27.832 27.1538 27.832C27.0327 27.8478 26.9129 27.8669 26.7925 27.8886C26.7918 27.8886 26.7918 27.8886 26.7918 27.8886C26.6232 27.9189 26.4552 27.9544 26.2885 27.9945C26.2286 28.009 26.1687 28.0241 26.1095 28.0399C24.0403 28.5878 22.1984 29.9052 20.9698 31.6705C20.6866 32.077 20.4366 32.5071 20.223 32.957C20.1501 33.1115 20.139 33.2891 20.1931 33.4516C20.3441 33.9021 20.4913 34.3461 20.6351 34.7795C20.7947 35.2603 20.9496 35.7279 21.1007 36.1778C21.3318 36.8691 21.3325 37.6294 21.102 38.32V38.3207C21.1013 38.3226 21.1007 38.3246 21.1 38.3266C21.0056 38.6206 21.1267 38.9429 21.3924 39.0988L22.0343 39.475L27.1779 42.4906L27.7684 42.8372C27.8713 42.8971 27.9833 42.926 28.0946 42.926C28.3088 42.926 28.5178 42.8195 28.6422 42.6254L28.969 42.1151C29.1038 41.9039 29.3122 41.7592 29.555 41.7079C29.7979 41.6566 30.0459 41.7046 30.253 41.8434L31.3703 42.5906C31.6431 42.7728 32.0077 42.7228 32.2219 42.4729L32.7076 41.9072L36.4878 37.5018L36.9064 37.0138C37.0204 36.8803 37.077 36.706 37.0633 36.5297ZM30.9718 40.7463C30.4724 40.4122 29.8747 40.2965 29.2887 40.4208C28.7086 40.5431 28.2105 40.8851 27.8856 41.385L25.922 40.234L24.7936 39.5717L22.4777 38.2141C22.6463 37.4012 22.5982 36.5462 22.3338 35.7569C22.1834 35.3077 22.0291 34.8407 21.8696 34.3612C21.7531 34.0106 21.6346 33.6528 21.5135 33.2904C22.5194 31.3456 24.3431 29.8677 26.4396 29.3119C26.4695 29.304 26.4988 29.2961 26.5288 29.2889C26.9702 29.1777 27.4214 29.1087 27.8746 29.0791C29.5218 28.9732 31.2023 29.3981 32.5995 30.2978C32.7056 30.9733 32.8131 31.6337 32.9179 32.2519C32.9179 32.2552 32.9185 32.2578 32.9192 32.2605C32.9706 32.567 33.0214 32.8629 33.0715 33.1457C33.2675 34.2632 33.8502 35.2787 34.7116 36.0048L35.4877 36.6586L33.7916 38.6351L32.9361 39.6322L31.6125 41.1745L30.9718 40.7463Z"></path><path d="M27.5452 41.9116L24.8668 46.1011L25.9606 46.8147L28.6391 42.6252L27.5452 41.9116Z"></path><path d="M43.2389 49.6065C42.3658 49.6065 41.4842 49.3559 40.7055 48.835L31.3702 42.5899L32.089 41.4935L41.4243 47.7386C42.8795 48.712 44.838 48.368 45.8823 46.9552L50.6274 40.5392C50.8045 40.2991 50.8983 40.0143 50.8983 39.7157C50.8983 39.3395 50.7511 38.9876 50.4848 38.7259C49.9789 38.2286 49.1905 38.2017 48.652 38.6627L44.8542 41.9125C43.9538 42.6833 42.6418 42.6886 41.7362 41.925L35.9975 37.0881L36.8315 36.0779L42.5702 40.9147C42.9895 41.2679 43.5957 41.2653 44.0124 40.9088L47.8102 37.659C48.863 36.758 50.4034 36.8112 51.3924 37.7827C51.9133 38.2944 52.2004 38.981 52.2004 39.7157C52.2004 40.3004 52.0175 40.8575 51.6704 41.3265L46.9253 47.7425C46.0268 48.958 44.6433 49.6065 43.2389 49.6065Z"></path><path d="M20.193 33.4516C19.0347 29.9834 17.7957 26.4455 16.5736 24.0008C15.9948 23.7331 13.798 22.8347 9.0998 20.9957C8.04635 20.584 7.08209 19.9914 6.23438 19.2356L0.829059 14.4178C0.33814 13.9805 0.045151 13.376 0.00478369 12.7157C-0.0355836 12.056 0.180577 11.4193 0.613549 10.924C1.07842 10.3926 1.74774 10.0874 2.45091 10.0874C2.9542 10.0874 3.43796 10.2413 3.85075 10.532L10.1865 14.992C10.3349 15.096 10.5009 15.1663 10.6793 15.1992L18.3635 16.6311C18.5855 16.6725 18.816 16.6574 19.0308 16.587C19.4215 16.4594 19.8225 16.3404 20.2223 16.2338C21.574 15.8727 22.966 15.6346 24.36 15.5254C24.9388 15.4801 25.528 15.457 26.1101 15.4564C26.5014 15.4557 26.8745 15.2847 27.1336 14.9868L31.0824 10.4419C31.3604 10.1216 31.5297 9.71055 31.5584 9.28501L32.0265 2.25334C32.1105 0.983946 33.1555 0 34.4114 0C34.4218 0 34.4323 0 34.442 0C35.7442 0.016443 36.8035 1.09905 36.8035 2.41448C36.8035 2.42632 36.8035 2.43882 36.8029 2.45132C36.8029 2.45526 36.8029 2.45789 36.8029 2.46184L36.6616 9.81645C36.6355 11.1635 36.2944 12.5059 35.6745 13.699C33.7037 17.4887 32.828 19.256 32.6392 19.7033C32.7004 21.6074 33.1477 25.3695 33.8404 29.8078L32.5539 30.013C32.2166 27.8517 31.4295 22.5696 31.3377 19.7612C31.296 19.5296 31.3904 19.3073 31.4457 19.1791C31.4985 19.0561 31.5753 18.8877 31.6821 18.666C31.865 18.2839 32.1346 17.74 32.4829 17.0507C33.1405 15.7504 33.9544 14.1778 34.5215 13.0879C35.0475 12.0751 35.3379 10.9352 35.3594 9.79145L35.5007 2.44145C35.5007 2.43158 35.5007 2.42172 35.5013 2.41185V2.41514C35.5013 1.81662 35.0189 1.32333 34.4257 1.31609C33.8495 1.30952 33.3638 1.7594 33.3254 2.34214L32.8573 9.37446C32.8098 10.0874 32.5265 10.7747 32.061 11.3108L28.1122 15.8556C27.6056 16.4377 26.8771 16.7718 26.112 16.7725C25.5625 16.7731 25.0071 16.7948 24.4609 16.8376C23.145 16.9409 21.8311 17.1658 20.5557 17.5065C20.1787 17.6071 19.8004 17.7196 19.4319 17.84C19.0119 17.9768 18.5614 18.0064 18.1278 17.9261L10.4423 16.4949C10.0803 16.4272 9.74438 16.2858 9.44228 16.074L3.10591 11.6133C2.91253 11.4772 2.68596 11.4055 2.45091 11.4055C2.12146 11.4055 1.80764 11.5482 1.59018 11.7975C1.38704 12.0297 1.28612 12.3276 1.305 12.6367C1.32388 12.9459 1.46126 13.2287 1.6911 13.4339L7.09641 18.2517C7.82823 18.9041 8.66097 19.4152 9.57054 19.771C10.9033 20.2926 12.8279 21.049 14.4257 21.6909C15.3099 22.0461 16.0033 22.3289 16.4857 22.5328C16.7657 22.6512 16.974 22.7419 17.1218 22.8103C17.3152 22.8998 17.6134 23.0379 17.7007 23.3378C18.9722 25.8608 20.2431 29.4855 21.4281 33.0326L20.193 33.4516Z"></path><path d="M17.3002 50.1096L16.8419 49.6407H16.1927C16.1927 49.5486 16.2116 49.4552 16.2487 49.371L20.988 38.6153C21.0303 38.5206 21.0668 38.4246 21.1013 38.3207L22.3357 38.739C22.2882 38.8824 22.2342 39.0218 22.1762 39.1527L17.4467 49.8867C17.4142 49.9695 17.3647 50.0458 17.3002 50.1096Z"></path><path d="M25.7488 23.4049C25.558 23.4049 25.3718 23.3201 25.2461 23.1649L20.3597 17.1665L21.365 16.3305L25.1348 20.9575L25.2357 16.101L26.5379 16.1286L26.3999 22.7604C26.394 23.0353 26.2195 23.278 25.9623 23.3681C25.892 23.3931 25.8204 23.4049 25.7488 23.4049Z"></path><path d="M26.3828 22.5993L25.1145 22.8973L26.4357 28.6341L27.704 28.336L26.3828 22.5993Z"></path><path d="M34.1868 32.5472L32.9159 32.2592C33.3137 30.4675 35.0189 29.6329 36.5333 29.6007C37.0588 29.5895 37.5731 29.6454 38.0699 29.6987C38.8043 29.7782 39.4984 29.8532 40.1482 29.7085C41.6125 29.3823 42.9934 27.8505 43.9368 25.5064C44.3294 24.5303 44.6439 23.4753 44.9473 22.4552C45.3002 21.2707 45.6648 20.0453 46.1635 18.8923C46.9006 17.1895 47.9625 15.6261 49.2334 14.3712C50.5134 13.1077 52.0129 12.1494 53.5709 11.6002L54 12.842C51.1938 13.8319 48.7106 16.2911 47.3563 19.4192C46.8888 20.4992 46.536 21.6863 46.1941 22.8334C45.8816 23.8831 45.5587 24.9677 45.1433 26.0016C44.4929 27.6183 43.0149 30.4169 40.4288 30.993C39.5706 31.1844 38.7373 31.0943 37.9312 31.0069C37.454 30.9549 37.0028 30.9069 36.5607 30.9161C35.5541 30.9378 34.4297 31.4502 34.1868 32.5472Z"></path><path d="M25.4108 40.9516L24.3795 40.1485C26.6193 37.2137 27.2319 33.7555 26.4265 28.5858C26.3718 28.2352 26.6023 27.9044 26.9474 27.8373C27.2925 27.7709 27.6278 27.9925 27.7046 28.3385C28.6897 32.7393 29.6885 35.8641 34.4141 39.0731L33.6874 40.1649C30.6768 38.1207 29.0511 36.0667 28.0145 33.7916C27.8179 36.6093 26.965 38.9159 25.4108 40.9516Z"></path></svg> </div>
<h6> Boat tour experience</h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="3-tab" data-bs-toggle="tab" data-bs-target="#tech-3" role="tab" aria-controls="tech-3" aria-selected="true">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 50 49"><g><path d="M5.21479 0.298828C4.99018 0.494141 4.94136 0.630859 4.90229 1.13867C4.873 1.49023 4.91206 1.85156 4.98042 2.02734C5.29292 2.78906 6.52339 2.78906 6.83589 2.02734C6.90425 1.85156 6.94331 1.49023 6.91401 1.13867C6.85542 0.376953 6.57222 0.0742188 5.90815 0.0742188C5.59565 0.0742188 5.40034 0.142578 5.21479 0.298828Z"></path><path d="M0.302734 3.16016C0.0488281 3.375 0 3.48242 0 3.85352C0 4.41992 0.0976562 4.58594 0.625 4.89844C1.24023 5.25977 1.77734 5.24023 2.1582 4.86914C2.70508 4.32227 2.48047 3.52148 1.65039 3.10156C1.12305 2.82813 0.664062 2.84766 0.302734 3.16016Z"></path><path d="M10.1367 3.1016C9.62891 3.37504 9.375 3.73636 9.375 4.19535C9.375 5.07426 10.3516 5.44535 11.1816 4.88871C11.7188 4.52738 11.8066 4.39066 11.8164 3.90238C11.8164 3.04301 10.9961 2.65238 10.1367 3.1016Z"></path><path d="M5.04888 3.19926C4.27739 3.39457 3.53521 3.88285 3.01763 4.53715C2.08013 5.70903 2.09966 7.74028 3.05669 8.95121C4.69732 11.0215 7.98833 10.6602 9.16021 8.27738C9.5313 7.52543 9.58013 6.23637 9.27739 5.41606C8.98442 4.63481 8.19341 3.79496 7.42192 3.45317C6.75786 3.15043 5.68364 3.04301 5.04888 3.19926ZM6.72857 5.41606C7.61724 6.08012 7.66607 7.2227 6.83599 7.91606C5.76177 8.82426 4.04302 7.71098 4.41411 6.34379C4.5313 5.92387 4.90239 5.47465 5.32232 5.2891C5.70317 5.11332 6.39653 5.17192 6.72857 5.41606Z"></path><path d="M36.5039 3.97073C34.2578 4.70316 32.9492 7.1055 33.5449 9.40042C33.8965 10.7285 34.7559 11.7539 36.0059 12.3594L36.7676 12.7207H40.332H43.8965L44.5312 12.418C45.3027 12.0566 45.9961 11.373 46.3672 10.6309C46.6016 10.1328 46.6309 9.98636 46.6309 9.0098C46.6309 8.02347 46.6113 7.88675 46.3477 7.34964C45.9766 6.60745 45.3223 5.95316 44.5801 5.58206C44.1113 5.35745 43.8379 5.28909 43.1836 5.2598C42.7344 5.24026 42.1875 5.27933 41.9531 5.33792C41.5332 5.43558 41.5332 5.43558 41.0645 4.99612C40.8105 4.74222 40.2637 4.38089 39.8535 4.18558C39.1699 3.86331 39.0332 3.83402 38.0859 3.81448C37.2949 3.79495 36.9336 3.82425 36.5039 3.97073ZM38.916 6.02151C39.3652 6.22659 39.873 6.71487 40.1758 7.26175C40.5664 7.95511 41.1328 8.06253 41.9531 7.58401C42.6172 7.21292 43.1738 7.18362 43.7695 7.51566C44.5117 7.92581 44.8633 9.0098 44.4922 9.72269C44.3066 10.0742 43.8574 10.4844 43.5254 10.6113C43.3496 10.6797 42.1484 10.7188 40.293 10.7188H37.3437L36.8262 10.4551C35.7324 9.918 35.2051 8.6387 35.5957 7.48636C36.0449 6.15823 37.666 5.44534 38.916 6.02151Z"></path><path d="M25.048 5.74282C22.2903 6.46261 20.4476 8.78336 20.4223 11.5633C20.4095 13.0525 21.0194 14.7528 21.8074 15.4849L22.1124 15.758L21.7058 16.0062L21.2991 16.2419L21.045 15.8945C20.4349 15.0754 20.0156 14.7155 19.2149 14.3307C18.4652 13.9708 18.249 13.9213 17.2832 13.9213C16.3175 13.9213 16.1141 13.9708 15.3516 14.3307C14.3858 14.79 13.6995 15.4726 13.2674 16.4033C12.9116 17.1603 12.7591 18.4137 12.937 19.146C13.0387 19.5804 13.026 19.6796 12.8227 19.7913C12.4922 20.0023 12.416 20.3249 11.4248 25.8972C10.4843 31.184 10.4335 31.7673 10.8656 32.6112C11.5645 33.9639 12.2762 34.3487 14.6653 34.7334L16.4064 35.0065L16.3429 35.7013C16.3047 36.0737 16.2031 37.3643 16.1268 38.5557L15.9871 40.7276L14.3477 44.0411C12.3652 48.0496 12.2381 48.484 12.632 49.9485L12.7972 50.5938H11.9458H11.0816L5.76956 53.8949C2.83394 55.7068 0.343124 57.3078 0.228749 57.4443C0.0762496 57.6057 0 57.9034 0 58.251C0 58.6977 0.0762496 58.8715 0.36854 59.1693C0.775205 59.5664 1.43604 59.6534 1.94437 59.3803C2.09687 59.3059 4.40977 57.8787 7.07851 56.2157L11.9331 53.2H21.5024C28.7716 53.1876 31.1353 53.1503 31.3386 53.0386C31.4911 52.9518 33.5244 51.115 35.85 48.9556L40.0946 45.0092H45.5084C50.8078 45.0092 50.9348 45.0092 51.2652 44.7485C51.7481 44.3762 53.8704 41.6832 53.9593 41.3233C54.1755 40.529 53.5019 39.7348 52.6123 39.7348C52.015 39.7348 51.7355 39.9705 50.6425 41.3978L49.88 42.3905L47.1223 42.403H44.3646L44.1612 41.7452C44.0596 41.3978 43.0684 38.0718 41.9628 34.3735L39.9548 27.647L40.3107 27.4982C40.7681 27.312 41.645 26.3688 41.8993 25.798C42.2297 25.0409 42.166 23.7254 41.7721 22.9684C41.1748 21.8142 40.2345 21.2186 38.7857 21.0696L37.9596 20.9952L37.5403 19.5679C36.9684 17.6692 36.8794 17.483 36.4601 17.272C35.85 16.9617 35.3545 17.0362 34.8716 17.5078C34.3378 18.0291 34.3251 18.2648 34.8079 19.8533L35.1765 21.0696L34.8842 21.0324C34.6937 21.0075 33.7023 20.176 32.3172 18.8854L30.0551 16.7757L30.9447 15.9069C32.3044 14.5789 32.7746 13.462 32.7874 11.526C32.8001 7.6416 28.9113 4.72517 25.048 5.74282ZM27.666 8.33657C29.0892 8.74612 30.1186 10.1361 30.1186 11.6253C30.106 14.6038 26.5604 16.1551 24.2983 14.1695C22.7351 12.8044 22.6842 10.5953 24.1965 9.15567C25.1497 8.24971 26.357 7.96428 27.666 8.33657ZM18.0458 16.7012C18.5668 16.9617 19.0624 17.7312 19.0624 18.2648C19.0624 19.1708 18.1728 20.0643 17.2832 20.0643C16.4319 20.0643 15.5042 19.1584 15.5042 18.327C15.5042 17.7932 16.0378 16.9369 16.5208 16.6887C17.0799 16.4033 17.4866 16.4033 18.0458 16.7012ZM27.1068 17.9298C27.3737 18.0415 28.8478 19.3073 30.3855 20.747C31.9359 22.1741 33.3212 23.4152 33.4737 23.502C33.6516 23.6137 34.5284 23.6509 36.2948 23.6634C38.5442 23.6634 38.8873 23.6882 39.1161 23.8743C39.51 24.2218 39.5609 24.5693 39.2559 24.9416L39.0017 25.2767H34.3124H29.6357L28.2378 24.1101C27.4753 23.4772 26.6874 22.9187 26.4967 22.8691C26.0266 22.7574 25.353 22.9931 25.1116 23.353C24.8828 23.6882 24.8447 24.4327 25.0353 24.7803C25.0988 24.9043 25.6071 25.3884 26.141 25.8475C26.6874 26.3068 27.1449 26.7287 27.1703 26.7784C27.2466 26.9521 25.6453 28.0318 24.5905 28.5157C24.0314 28.7764 23.1164 29.099 22.5572 29.2355C21.5024 29.5086 19.9266 29.7568 19.8376 29.6699C19.7487 29.5831 21.3499 20.5359 21.5532 19.9899C21.9218 18.9723 22.9893 18.1035 24.1965 17.8181C24.9718 17.6444 26.5985 17.7064 27.1068 17.9298ZM16.6986 22.6705C17.4612 22.8071 18.1093 22.9436 18.1474 22.9808C18.1983 23.0304 16.902 30.8241 16.686 31.7052C16.5589 32.2513 16.1903 32.3506 15.0594 32.1521C14.5002 32.0651 13.9156 31.9534 13.7631 31.9162C13.1404 31.7673 13.1404 31.6183 13.9919 26.8155C14.7543 22.5092 14.8052 22.3106 15.0466 22.3603C15.1991 22.3975 15.9362 22.534 16.6986 22.6705ZM37.3369 28.28C37.6673 29.4094 41.4671 42.1176 41.518 42.2416C41.5689 42.3533 41.4163 42.403 41.0097 42.403H40.4377L40.298 41.8321C40.0438 40.8517 39.7515 40.4297 36.7396 36.7315L33.8295 33.1448L31.7834 32.1893C30.3092 31.4943 29.7374 31.1716 29.7374 31.0102C29.7374 30.8985 29.8518 30.154 29.9916 29.3721C30.1313 28.5902 30.2457 27.9326 30.2457 27.9077C30.2457 27.8953 31.8215 27.8829 33.7404 27.8829H37.2225L37.3369 28.28ZM26.9415 31.2089C26.7001 32.6484 26.7764 32.7354 29.1783 33.8895C30.2965 34.4231 31.4022 34.9443 31.6436 35.0437C31.9868 35.1802 32.7111 35.9868 34.8079 38.593C36.5236 40.7151 37.5785 42.1299 37.6673 42.4153C37.8199 42.9986 37.6927 43.4455 37.1972 43.9666C36.6761 44.5251 35.7993 44.6741 35.1511 44.339C34.9097 44.2149 33.7532 42.9118 32.3044 41.1122L29.8518 38.0966L27.7549 37.0914L25.658 36.0737L23.1037 35.6393C20.3841 35.1802 19.952 35.0188 19.4818 34.3362C19.1895 33.9268 19.0751 32.8346 19.2912 32.5243C19.342 32.4498 19.952 32.3133 20.6509 32.2389C22.786 32.0031 25.2767 31.2709 26.5604 30.5014C26.8018 30.3649 27.0178 30.2781 27.0432 30.3029C27.0687 30.3277 27.0305 30.7373 26.9415 31.2089ZM19.9901 37.7367C20.3586 37.8359 21.0703 37.9849 21.5786 38.0593L22.4937 38.2083V38.7171C22.4937 39.0025 22.4301 39.8837 22.3793 40.6779L22.2649 42.1299L20.4604 45.7662C18.3381 50.0602 18.2999 50.1347 17.7407 50.3952C16.5843 50.9289 15.3261 50.2587 15.161 49.0176C15.1101 48.6082 15.3261 48.1118 16.8385 45.0712L18.5795 41.5963L18.7066 39.7968C18.8591 37.5753 18.8845 37.3892 19.1386 37.4885C19.2404 37.5257 19.6216 37.6374 19.9901 37.7367ZM27.5516 39.9085C27.9455 40.107 28.6444 40.8765 30.4871 43.1351C32.4697 45.58 33.0289 46.1881 33.5498 46.4736L34.1852 46.8335L32.1647 48.7074L30.1441 50.5938H25.6199C23.129 50.5938 21.0957 50.569 21.0957 50.5441C21.0957 50.5318 21.9472 48.7943 22.9893 46.7093L24.8828 42.9118L24.9591 41.8197C25.0098 41.2239 25.0735 40.3056 25.1242 39.7844L25.1879 38.8288L26.1156 39.2383C26.6239 39.4741 27.2719 39.772 27.5516 39.9085Z"></path><path d="M0.830078 8.48244C0.224609 8.79494 0 9.09768 0 9.59572C0 10.4648 0.742188 10.8457 1.61133 10.416C2.1875 10.1328 2.44141 9.81057 2.44141 9.39064C2.44141 8.92189 2.26562 8.59963 1.9043 8.42385C1.48438 8.22854 1.29883 8.2383 0.830078 8.48244Z"></path><path d="M9.91209 8.41412C9.36521 8.6485 9.18943 9.5274 9.59959 9.97662C9.87303 10.2794 10.5176 10.6212 10.8203 10.6212C11.123 10.6212 11.5918 10.3673 11.7187 10.1427C11.7676 10.0353 11.8164 9.77154 11.8164 9.5567C11.8164 9.09772 11.5723 8.78522 10.9863 8.48248C10.5371 8.24811 10.3223 8.23834 9.91209 8.41412Z"></path><path d="M5.38086 11.0508C5.0293 11.2461 4.89258 11.5879 4.88281 12.2617C4.88281 12.8184 4.91211 12.916 5.16602 13.1699C5.54687 13.541 6.20117 13.5703 6.60156 13.2285C6.82617 13.0332 6.875 12.8965 6.91406 12.3887C6.94336 12.0371 6.9043 11.6758 6.83594 11.5C6.62109 10.9824 5.89844 10.7578 5.38086 11.0508Z"></path><path d="M46.172 24.6934C45.9278 24.791 44.4435 26.5586 44.1603 27.0957C43.9552 27.4668 44.0235 27.877 44.3263 28.2187C44.5704 28.4922 44.6778 28.541 45.0489 28.541C45.5665 28.541 45.7423 28.4043 46.5528 27.3398L47.0997 26.6367H48.2521C49.3458 26.6367 49.4142 26.627 49.6974 26.3828C49.9513 26.168 50.0001 26.0605 50.0001 25.6895C50.0001 24.752 49.6681 24.5859 47.7833 24.5957C47.0411 24.5957 46.3185 24.6445 46.172 24.6934Z"></path><path d="M42.168 29.5273C41.8164 29.7129 41.6992 29.9473 41.6992 30.4453C41.6992 30.7676 41.7578 30.9142 41.9824 31.1388C42.6172 31.7638 43.6523 31.334 43.6523 30.4453C43.6523 29.9375 43.5254 29.7031 43.1641 29.5176C42.8125 29.332 42.5098 29.332 42.168 29.5273Z"></path></g></svg> </div>
<h6> Zipline and paintball</h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="4-tab" data-bs-toggle="tab" data-bs-target="#tech-4" role="tab" aria-controls="tech-4" aria-selected="true">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path d="M39.8559 0.00961058C38.9152 -0.0637374 37.9838 0.290457 37.2176 1.01298C36.4513 1.73551 35.8966 2.78258 35.6461 3.97915C35.366 5.35994 35.5117 6.83058 36.0514 8.07046C36.5911 9.31034 37.4811 10.2189 38.5274 10.598C39.5753 10.9656 40.691 10.7731 41.6315 10.0623C42.5721 9.3515 43.2614 8.18006 43.5493 6.80303C43.705 6.03129 43.7292 5.22374 43.6202 4.43823C43.5112 3.65272 43.2716 2.90869 42.9186 2.25944C42.5656 1.6102 42.108 1.07181 41.5785 0.682855C41.049 0.293895 40.4608 0.0639904 39.8559 0.00961058ZM18.28 0.00961058C17.3387 -0.0643366 16.4067 0.290166 15.6403 1.01369C14.8738 1.73722 14.3195 2.78579 14.0702 3.98363C13.7904 5.36268 13.9363 6.83156 14.4762 8.06928C15.0161 9.307 15.9061 10.2129 16.9515 10.5891C17.9985 10.9595 19.1143 10.7692 20.0552 10.0599C20.9961 9.35053 21.6857 8.17971 21.9734 6.80303C22.1286 6.03124 22.1523 5.2238 22.0428 4.43854C21.9333 3.65328 21.6933 2.90963 21.34 2.26085C20.9867 1.61206 20.5289 1.0742 19.9993 0.685777C19.4697 0.297353 18.8814 0.0679809 18.2767 0.0140866L18.28 0.00961058ZM39.737 2.37254C40.0784 2.39678 40.4114 2.52173 40.7113 2.73815C41.0112 2.95457 41.2703 3.25694 41.4696 3.62294C41.6689 3.98894 41.8032 4.40921 41.8626 4.85274C41.9221 5.29626 41.9051 5.75171 41.813 6.18545C41.7355 6.56928 41.601 6.92906 41.4173 7.24404C41.2336 7.55902 41.0043 7.82295 40.7427 8.02059C40.4811 8.21823 40.1924 8.34567 39.8933 8.39555C39.5941 8.44543 39.2904 8.41676 38.9997 8.31119C38.7072 8.20959 38.433 8.03247 38.1929 7.79011C37.9529 7.54775 37.7518 7.24499 37.6013 6.8994C37.4508 6.55382 37.354 6.1723 37.3164 5.77701C37.2788 5.38172 37.3012 4.98053 37.3823 4.59674C37.5182 3.92398 37.8274 3.3343 38.2569 2.92859C38.6864 2.52287 39.2096 2.32631 39.737 2.37254ZM18.1611 2.37254C18.5026 2.39678 18.8355 2.52173 19.1354 2.73815C19.4353 2.95457 19.6944 3.25694 19.8937 3.62294C20.093 3.98894 20.2273 4.40921 20.2868 4.85274C20.3462 5.29626 20.3293 5.75171 20.2372 6.18545C20.1596 6.56976 20.025 6.93001 19.8411 7.24534C19.6571 7.56067 19.4275 7.82483 19.1656 8.02252C18.9036 8.22022 18.6145 8.34752 18.315 8.39707C18.0154 8.44662 17.7114 8.41743 17.4204 8.31119C17.1286 8.20907 16.8551 8.03175 16.6157 7.78949C16.3763 7.54723 16.1757 7.24483 16.0256 6.8998C15.8755 6.55478 15.7789 6.17397 15.7413 5.77942C15.7036 5.38487 15.7258 4.98441 15.8065 4.60121C15.9423 3.92806 16.2513 3.33787 16.6807 2.9314C17.1102 2.52494 17.6334 2.32741 18.1611 2.37254ZM15.3002 12.4955C15.1332 12.5028 14.971 12.5711 14.8318 12.6928C14.6926 12.8145 14.5818 12.9848 14.5119 13.1847L9.36089 27.8859H7.23049C5.25298 27.8859 3.64244 30.0206 3.64244 32.6252C3.64244 35.2298 5.25298 37.36 7.23049 37.36H16.3365L15.2934 39.6558C14.7139 39.4825 14.1072 39.5657 13.5673 39.8926C13.0273 40.2195 12.5843 40.7717 12.3068 41.4638L9.40167 48.8122C9.07444 49.6481 9.01079 50.6203 9.22454 51.5177C9.43829 52.4151 9.91218 53.1652 10.5433 53.6052C11.1791 54.0348 11.9177 54.1175 12.5994 53.8352C13.2811 53.553 13.851 52.9285 14.1857 52.097L17.0908 44.7442C17.3264 44.1386 17.4253 43.4568 17.3759 42.7796C17.3265 42.1023 17.1309 41.4578 16.8122 40.9223L18.4262 37.36H39.5943L38.6429 39.6513C38.0665 39.4859 37.4649 39.5735 36.9299 39.9008C36.3949 40.2281 35.9559 40.777 35.6801 41.4638L32.775 48.8122C32.448 49.6487 32.3848 50.6213 32.5992 51.5188C32.8137 52.4162 33.2883 53.166 33.92 53.6052C34.5554 54.0334 35.2933 54.1153 35.9741 53.8331C36.655 53.5509 37.2243 52.9273 37.559 52.097L40.4675 44.7442C40.7045 44.1332 40.8027 43.4451 40.7503 42.7624C40.6978 42.0798 40.497 41.4316 40.1719 40.8955L41.6431 37.36H50.389C52.3665 37.36 53.9839 35.2253 53.9839 32.6252C53.9839 30.0251 52.3665 27.8814 50.389 27.8814H45.588L47.9052 22.3142C48.9348 22.1352 49.6653 21.9428 49.6653 21.9428C50.953 21.7369 50.5589 19.1592 49.3119 19.6246L48.9925 19.6962L50.2735 16.6172C50.3879 16.3425 50.4148 16.0191 50.3482 15.7182C50.2816 15.4173 50.127 15.1636 49.9184 15.0129C49.7098 14.8621 49.4643 14.8267 49.2358 14.9144C49.0074 15.0021 48.8148 15.2058 48.7003 15.4805L46.7806 20.099L46.2879 20.1661C44.6264 20.3451 42.6523 20.2556 41.7791 19.7141C41.0655 19.2711 39.9171 17.6108 39.0948 16.0578C38.2692 14.5094 37.6915 13.1131 37.6915 13.1131C37.6112 12.9217 37.4922 12.7632 37.3477 12.6553C37.2033 12.5474 37.039 12.4942 36.873 12.5016C36.707 12.509 36.5458 12.5767 36.4072 12.6973C36.2687 12.8179 36.1581 12.9866 36.0878 13.1847L30.93 27.8859H22.7073L25.147 22.4888C26.7813 22.2874 28.0894 21.9428 28.0894 21.9428C29.3636 21.719 28.9728 19.1681 27.7293 19.6246C27.7293 19.6246 27.1414 19.7723 26.3022 19.9245L27.7836 16.6575C27.8445 16.5238 27.8848 16.3756 27.9023 16.2214C27.9197 16.0672 27.9139 15.91 27.8852 15.7587C27.8565 15.6074 27.8054 15.4651 27.7349 15.3398C27.6645 15.2145 27.5759 15.1088 27.4744 15.0285C27.3729 14.9483 27.2604 14.8952 27.1433 14.8723C27.0262 14.8493 26.9068 14.857 26.792 14.8948C26.6771 14.9326 26.5691 14.9998 26.474 15.0927C26.3788 15.1855 26.2985 15.3021 26.2376 15.4358L24.0834 20.2064C22.5748 20.3048 20.9677 20.1885 20.1998 19.7141C19.4863 19.2711 18.3378 17.6108 17.5122 16.0578C17.0084 15.1095 16.5434 14.1266 16.1191 13.1131C16.0396 12.9212 15.9213 12.7619 15.7774 12.6529C15.6335 12.5439 15.4661 12.4895 15.3002 12.4955ZM15.4463 16.1652C15.6909 16.6889 15.6909 16.7605 16.0443 17.4183C16.9345 19.0965 18.0388 20.9896 19.4421 21.8533C20.4818 22.4932 21.739 22.6454 22.986 22.6365L20.6143 27.8859H11.3384L15.4463 16.1652ZM37.0222 16.1652C37.2668 16.6889 37.2668 16.7605 37.6202 17.4183C38.5104 19.0965 39.6113 20.9896 41.018 21.8533C42.3873 22.7036 44.1405 22.7215 45.7477 22.5828L43.5391 27.8859H32.9143L37.0222 16.1652ZM7.23049 30.2533H19.5474L17.4068 34.9926H7.23049C6.99358 34.9969 6.75845 34.9383 6.53907 34.8205C6.31969 34.7026 6.12054 34.5278 5.95349 34.3065C5.78643 34.0853 5.65487 33.822 5.56663 33.5324C5.47839 33.2428 5.43528 32.9327 5.43986 32.6207C5.43986 31.2916 6.22135 30.2533 7.23049 30.2533ZM21.6371 30.2533H42.5538L40.583 34.9926H19.4931L21.6371 30.2533ZM44.6026 30.2533H50.389C51.3982 30.2533 52.1864 31.2916 52.1864 32.6252C52.1864 33.9543 51.3982 34.9926 50.3856 34.9926H42.6285L44.6026 30.2533ZM24.8717 39.7006C23.9339 39.7543 22.8161 40.1481 21.2701 41.0073C20.1047 41.5891 20.842 43.8849 21.97 43.1913C23.4107 42.3902 24.3451 42.1082 24.9499 42.0724C25.3948 42.0138 25.8416 42.1558 26.2173 42.4752C26.9817 43.0525 28.137 44.4667 30.6106 44.4667C31.8372 44.5025 31.8372 42.0635 30.6106 42.0948C28.5923 42.0948 28.2287 41.2624 27.1143 40.4166C26.4345 39.8992 25.6559 39.6506 24.8717 39.7006ZM47.348 39.7006C46.4102 39.7543 45.2924 40.1481 43.7464 41.0073C42.6965 41.6473 43.359 43.7238 44.4395 43.1913C45.8802 42.3902 46.8214 42.1082 47.4296 42.0724C47.8744 42.0145 48.3211 42.1565 48.6969 42.4752C49.4614 43.0525 50.6065 44.4667 53.0801 44.4667C54.3067 44.5025 54.3067 42.0635 53.0801 42.0948C51.0618 42.0948 50.705 41.2624 49.5905 40.4166C48.9108 39.8992 48.1322 39.6506 47.348 39.7006ZM3.46915 40.0944C2.68766 40.0944 1.79405 40.3718 0.608226 40.9984C-0.468868 41.607 0.180107 43.7372 1.27759 43.2002C2.34109 42.6408 3.01385 42.4663 3.46915 42.4663C3.92445 42.4663 4.18608 42.6005 4.58362 42.8601C5.3753 43.3792 6.6019 44.4667 9.02791 44.4667C10.2545 44.5025 10.2545 42.0635 9.02791 42.0948C6.96206 42.0948 6.39464 41.4056 5.38889 40.7433C4.79721 40.3292 4.13912 40.1067 3.46915 40.0944ZM14.7634 41.9158C14.8846 41.9318 15.0024 41.979 15.1099 42.0545C15.5652 42.3678 15.7317 43.0525 15.4973 43.6522L12.5888 51.0006C12.536 51.1413 12.4622 51.2665 12.3718 51.3687C12.2813 51.4709 12.1761 51.548 12.0625 51.5952C11.9489 51.6425 11.8291 51.6589 11.7105 51.6436C11.5919 51.6284 11.4769 51.5816 11.3724 51.5063C11.266 51.4361 11.1716 51.3382 11.0948 51.2186C11.018 51.099 10.9604 50.9602 10.9254 50.8104C10.8905 50.6607 10.879 50.5032 10.8916 50.3474C10.9041 50.1916 10.9406 50.0408 10.9986 49.9041L13.9003 42.5558C14.0804 42.1082 14.4134 41.8755 14.7634 41.9158ZM38.14 41.9158C38.2613 41.9318 38.3791 41.979 38.4866 42.0545C38.9419 42.3678 39.1084 43.0525 38.8706 43.6522L35.9655 51.0006C35.9127 51.1413 35.8389 51.2665 35.7485 51.3687C35.658 51.4709 35.5528 51.548 35.4392 51.5952C35.3255 51.6425 35.2058 51.6589 35.0872 51.6436C34.9686 51.6284 34.8536 51.5816 34.7491 51.5063C34.6424 51.4365 34.5477 51.3389 34.4705 51.2195C34.3933 51.1001 34.3354 50.9613 34.3001 50.8115C34.2649 50.6617 34.253 50.5041 34.2654 50.3481C34.2777 50.1922 34.314 50.0411 34.3719 49.9041L37.277 42.5602C37.4537 42.1082 37.7901 41.8755 38.14 41.9158ZM23.0709 45.6213C22.1365 45.675 21.0187 46.0644 19.4693 46.9191C18.3378 47.5233 19.0547 49.7609 20.1726 49.1075C21.6099 48.3109 22.5443 48.0245 23.1525 47.9887C23.5973 47.9308 24.044 48.0727 24.4198 48.3915C25.1843 48.9688 26.3362 50.383 28.8131 50.383C29.9854 50.3472 29.9854 48.0514 28.8131 48.0156C26.7915 48.0156 26.4279 47.1787 25.3134 46.3373C24.6338 45.8195 23.8552 45.5709 23.0709 45.6213ZM45.5506 45.6213C44.6128 45.675 43.4949 46.0644 41.9489 46.9191C40.8413 47.5322 41.5378 49.7206 42.6421 49.1075C44.0827 48.3109 45.0205 48.0245 45.6321 47.9887C46.0759 47.9311 46.5214 48.0731 46.8961 48.3915C47.6606 48.9688 48.8091 50.383 51.2826 50.383C52.4549 50.3472 52.4549 48.0514 51.2826 48.0156C49.2644 48.0156 48.9042 47.1787 47.7931 46.3373C47.1133 45.82 46.3348 45.5714 45.5506 45.6213ZM3.06482 46.0241C2.3309 46.0241 1.52223 46.3105 0.540271 46.9549C-0.597984 47.6307 0.25146 49.8683 1.34554 49.0717C2.16101 48.5347 2.70126 48.3915 3.06482 48.3915C3.42838 48.3915 3.65943 48.5078 3.98222 48.7495C4.621 49.2328 5.58257 50.383 7.23049 50.383C8.40272 50.3472 8.40272 48.0514 7.23049 48.0156C6.18397 48.0156 5.80342 47.398 4.86904 46.6954C4.32297 46.2663 3.7006 46.0348 3.06482 46.0241Z"></path></svg> </div>
<h6> Camping experience</h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="5-tab" data-bs-toggle="tab" data-bs-target="#tech-5" role="tab" aria-controls="tech-5" aria-selected="true">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path d="M4.73897 29.1112C4.18855 29.1112 3.73211 29.5869 3.73211 30.1605C3.78581 31.5455 5.69213 31.5455 5.74583 30.1605C5.74583 29.5869 5.28939 29.1112 4.73897 29.1112ZM11.9213 22.4519C11.9213 21.8782 11.4648 21.4026 10.9144 21.4026C9.58534 21.4585 9.58534 23.4452 10.9144 23.5011C11.4648 23.5011 11.9213 23.0394 11.9213 22.4519ZM4.73897 16.3661C5.28939 16.3661 5.74583 15.8904 5.74583 15.3168C5.69213 13.9318 3.78581 13.9318 3.73211 15.3168C3.73211 15.9044 4.17513 16.3661 4.73897 16.3661ZM6.87352 25.5017C6.87352 24.9281 6.41707 24.4525 5.86666 24.4525C4.5376 24.5084 4.5376 26.495 5.86666 26.551C6.41707 26.551 6.87352 26.0753 6.87352 25.5017ZM3.00717 20.0175C2.45675 20.0175 2.0003 20.4932 2.0003 21.0668C2.054 22.4519 3.96033 22.4519 4.01403 21.0668C4.01403 20.4932 3.55758 20.0175 3.00717 20.0175ZM1.00686 25.0121C0.456445 25.0121 0 25.4877 0 26.0613C0.0536994 27.4464 1.96003 27.4464 2.01373 26.0613C2.01373 25.4877 1.55728 25.0121 1.00686 25.0121ZM1.86605 12.8125C2.41647 12.8125 2.87292 12.3369 2.87292 11.7633C2.81922 10.3782 0.91289 10.3782 0.85919 11.7633C0.85919 12.3509 1.30221 12.8125 1.86605 12.8125Z"></path><path d="M43.0266 30.4963C42.6104 28.9294 40.7175 28.4817 39.2005 28.118C38.8649 28.034 38.5293 27.9641 38.2608 27.8801C37.4419 27.6423 36.3679 27.6703 35.0388 27.9641C36.4216 24.2986 36.086 20.899 34.0185 17.8351C36.341 17.6952 42.2345 18.2128 42.7178 17.1775C42.9192 16.9397 43.0132 16.6459 42.9863 16.3381C42.785 14.4215 40.1134 13.0924 35.0523 12.3929C34.0454 12.253 31.5886 12.4768 30.0448 12.6587C30.2193 11.7353 30.1522 10.756 29.8166 9.91658C28.7023 7.13251 26.7154 7.20246 25.1044 7.5802C23.3726 7.98592 22.5537 9.27303 22.6745 11.4275C17.9759 11.2736 13.3846 13.582 8.45764 18.5906C9.90752 13.9318 13.6665 8.20976 17.9222 5.49565C25.9905 -0.254364 38.3548 1.20063 44.7853 5.57959C48.3831 7.81804 50.3163 10.2244 50.3297 10.2523C50.6116 10.6161 51.1218 10.6581 51.4574 10.3643C51.8065 10.0705 51.8467 9.53884 51.5648 9.18909C44.5302 0.585054 28.5009 -3.72396 17.0361 4.09662C10.6459 8.16779 6.71241 16.9817 6.00089 21.4726C5.90692 21.9762 6.30966 22.4659 6.79296 22.4519C7.02118 22.4519 7.23598 22.354 7.39708 22.1721C12.9415 15.7365 17.8953 12.8406 22.9028 13.1204C23.0236 13.694 23.1713 14.1976 23.3726 14.6313C22.2047 16.1143 18.6471 20.6891 17.7208 22.2001C17.0093 23.3613 16.7408 25.8515 16.7139 27.7962C16.7005 29.433 16.7542 34.2037 19.2781 34.2737C20.5266 34.2177 21.1844 33.0565 21.5603 31.4476C21.7885 32.2311 21.8825 32.8467 21.7751 33.0845C21.1307 34.3856 20.0836 35.7846 19.56 37.3515C18.9827 37.8132 17.2106 39.2262 15.1701 41.059C11.8004 44.0809 9.31683 46.725 7.7864 48.9215C6.30966 51.0341 5.58472 52.4611 6.29624 53.4124C6.57816 53.8041 6.99433 54 7.66557 54C9.20943 54 12.0958 52.9367 17.8282 50.6143C28.407 46.3193 35.2671 40.4294 40.5833 35.239C42.5702 33.2664 43.3622 31.7554 43.0266 30.4963ZM33.0788 28.4537C33.0654 28.4957 33.052 28.5237 33.0385 28.5656C32.5955 28.7195 32.2062 28.8734 31.8974 29.0133C31.5618 28.2439 31.0651 27.0687 30.7966 26.4531C30.5684 25.096 29.8568 23.795 28.6486 22.4939C29.4809 20.829 30.9577 18.5626 32.1659 18.1009C34.6227 21.1648 34.918 24.5644 33.0788 28.4537ZM27.8834 36.5681C28.3398 37.0578 28.7963 37.6174 29.0916 38.0371C28.3533 37.8972 27.1316 37.4915 25.9771 36.9738C26.9705 34.7633 28.0176 32.2871 28.0579 31.4896C28.0848 31.1119 27.9774 30.5802 27.8297 29.9927C28.5144 29.7548 29.387 29.3631 30.0179 28.7055C30.2596 29.2791 30.5147 29.8527 30.6623 30.2025C30.367 30.972 28.9976 33.4762 27.7894 35.5468C27.5746 35.8826 27.6149 36.3023 27.8834 36.5681ZM25.4401 9.21707C26.8899 8.8813 27.682 8.99322 28.313 10.5601C28.6352 11.3716 28.5681 12.4208 28.1519 13.2183C27.9102 13.666 27.4672 14.2396 26.6349 14.3935C25.8697 14.5334 25.3729 14.5054 25.1179 14.3235C25.0507 14.2816 24.997 14.2116 24.9433 14.1416C24.7151 13.8618 24.5003 13.0644 24.3527 12.141C23.9499 9.56682 24.9165 9.32899 25.4401 9.21707ZM19.2646 32.5948C17.855 31.7554 18.2175 24.2566 19.0633 23.0954C19.8956 21.7244 23.2115 17.4713 24.4735 15.8625C25.2253 16.2542 26.1382 16.1842 26.9168 16.0443C27.8968 15.8625 28.7426 15.2889 29.3198 14.4354C30.8234 14.2536 33.8843 13.9458 34.8375 14.0717C38.4219 14.5614 40.4625 15.3868 41.1337 16.1003C38.8112 16.3521 34.4481 15.9464 32.3673 16.3241C29.9508 16.59 27.9505 20.2834 27.1987 21.7804L24.0842 21.5565L25.0239 20.1295C25.279 19.7518 25.185 19.2201 24.8225 18.9683C24.4601 18.7025 23.9499 18.8004 23.7083 19.1782L20.097 24.6624C19.9896 24.8162 19.9493 24.9981 19.9627 25.18L20.1507 28.7475C20.2447 31.1818 19.56 32.4829 19.2646 32.5948ZM21.6543 27.3625L21.5469 25.3619L23.0102 23.1374L27.3195 23.4592C28.407 24.5784 29.0379 25.6697 29.2124 26.7469C29.2124 27.0547 29.0916 27.7682 27.3195 28.3838C26.9973 27.4884 26.6752 26.7049 26.5543 26.4251C26.0845 25.4318 24.6883 26.0754 25.0776 27.1107C25.3864 27.8242 25.6951 28.6356 25.9368 29.3631C25.3327 30.5243 24.4332 31.0979 23.1176 31.1119C22.7282 29.6289 21.9899 28.048 21.6543 27.3625ZM22.4597 35.1831C22.9699 34.2597 23.4129 33.798 23.3861 32.7907C24.6077 32.7208 25.6414 32.2591 26.4335 31.4616C26.2321 32.5948 23.5606 38.4288 22.7417 40.0517C22.151 41.1989 22.9565 42.7098 23.0639 43.899C22.2718 43.5493 21.3052 41.9404 20.8353 40.0377C20.4863 38.3589 21.6811 36.5261 22.4597 35.1831ZM39.4422 34.0219C34.2468 39.1143 27.5343 44.8783 17.2106 49.0614C14.2974 50.2506 9.00806 52.3911 7.65215 52.3352C9.53163 47.9842 16.2575 42.2202 19.1707 39.7859C19.4392 42.0243 21.4529 46.3753 23.7754 45.4379C25.0507 44.8643 24.648 43.3254 24.3929 42.3041C24.2721 41.8564 24.0573 41.031 24.1781 40.8211C24.1916 40.7932 24.6748 39.8138 25.2924 38.4848C26.1247 38.8625 28.4338 39.7859 29.5883 39.7579C30.1925 39.7579 30.6892 39.576 30.9443 39.0724C31.1993 38.5827 31.2127 37.8272 29.4809 35.8686C31.2262 32.8747 31.9377 31.4476 32.1928 30.6782C33.5352 30.0766 36.3679 29.0553 37.8312 29.489C38.14 29.5869 38.489 29.6569 38.8515 29.7408C39.7778 29.9507 41.3217 30.3144 41.4828 30.916C41.523 31.1399 41.5365 31.9793 39.4422 34.0219Z"></path><path d="M49.9673 21.2067C50.4909 21.2067 50.8936 20.6751 50.7459 20.1575C48.5442 11.5674 42.3688 6.90867 33.9783 4.46036C33.5487 4.33445 33.1057 4.60027 32.9849 5.04796C32.864 5.49565 33.1191 5.95733 33.5487 6.08324C42.248 8.5875 47.3629 13.3442 49.1886 20.5912C49.2826 20.9549 49.6182 21.2067 49.9673 21.2067ZM44.4228 29.489C44.8256 29.6429 45.3089 29.4191 45.4565 28.9854C46.6379 25.5298 46.3023 22.4659 44.4631 19.8777C44.1946 19.4999 43.6979 19.43 43.3354 19.6958C42.9729 19.9756 42.9058 20.4932 43.1609 20.871C44.6779 23.0115 44.933 25.4878 43.9261 28.4118C43.7784 28.8455 43.9932 29.3351 44.4228 29.489ZM50.5714 38.8205C53.0147 34.6654 53.8739 29.489 53.1087 23.4732C53.055 23.0115 52.6522 22.6897 52.2092 22.7457C51.7662 22.8016 51.4574 23.2214 51.5111 23.683C52.2361 29.3911 51.4709 34.0638 49.1886 37.9391C47.1212 41.4927 43.8053 44.2907 39.0797 46.5012C38.677 46.6971 38.489 47.1867 38.677 47.6064C38.8649 48.0401 39.3482 48.222 39.7376 48.0261C44.7719 45.6758 48.316 42.6679 50.5714 38.8205ZM53.3638 40.0517C52.9342 39.9537 52.5046 40.2475 52.4106 40.6952C51.7528 43.899 49.7256 46.0255 46.2083 47.1867C45.7787 47.3266 45.5505 47.8023 45.6848 48.236C45.819 48.6837 46.2889 48.9215 46.6916 48.7816C50.7459 47.4386 53.2027 44.8364 53.9813 41.031C54.0753 40.5833 53.8068 40.1496 53.3638 40.0517Z"></path></svg> </div>
<h6> Surfing</h6>
</div>
</li>
</ul>
</div>
</div>
<div class="col-xl-7 d-flex justify-content-xl-start justify-content-center">
<div class="tab-content" id="pills-tab5Content">
<div class="tab-pane fade show active" id="tech-0" role="tabpanel" aria-labelledby="0-tab">
<div class="verticle-tab-content-wrap">
<div class="verticle-tab-content">
<div class="eg-tag2">
<span>Bike tour</span>
</div>
<h2>Thrill Above Ground: The Zip Line Adventure</h2>
<p>As Across Africa Journeys we offer Embark on an unforgettable bike tour adventure through the awe-inspiring landscapes of Rwanda, where Mount Founding in Kigali and the Congo Nile Trail along Lake Kivu beckon with endless excitement.
	Begin your journey at Mount Founding, where rugged trails and stunning vistas await. Feel the thrill of conquering challenging terrain as you ascend, rewarded with panoramic views of Kigali's vibrant cityscape and the surrounding natural beauty. Whether you're an experienced cyclist or a beginner seeking adventure, Mount Founding offers an exhilarating ride for all.
	Continue your exploration along the Congo Nile Trail, tracing the shores of Lake Kivu. Pedal through picturesque villages, lush forests, and cascading waterfalls, immersing yourself in the rich culture and captivating scenery of Rwanda's countryside. Along the way, encounter the warmth and hospitality of local communities, savouring authentic cuisine and forging connections that transcend language barriers.
	With each turn of the pedal, discover the untamed beauty and boundless adventure that await on this remarkable bike tour. From breathtaking vistas to cultural immersion, Mount Founding and the Congo Nile Trail promise an experience that will leave you with memories to last a lifetime. Gear up and embark on the journey of a lifetime through Rwanda's most captivating landscapes.
	</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Treetop Views </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Adrenaline Rush </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Safety Measures </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Nature Immersion </li>
</ul>
<div class="content-bottom-area">
<a href="#" class="primary-btn1">Check Availability</a>
<a data-fancybox="popup-video" href="https://www.youtube.com/watch?v=kEhbE4CTEQ0" class="video-area">
<div class="icon">
<svg class="video-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px" viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
<circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
<path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10" d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
<path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10" d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
</svg>
<i class="bi bi-play"></i>
</div>
<h6>Watch Adventure</h6>
</a>
</div>
</div>
<div class="verticle-tab-img">
<div class="verticle-tab-img1 mb-25">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/zip-landing-01.webp" alt="acti-image">
</div>
<div class="verticle-tab-img2">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/zip-landing-02.webp" alt="acti-image ">
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-1" role="tabpanel" aria-labelledby="1-tab">
<div class="verticle-tab-content-wrap">
<div class="verticle-tab-content">
<div class="eg-tag2">
<span>Hiking experience</span>
</div>
<h2>Horizon Dance: Unique Paragliding Perspectives.</h2>
<p>On an exhilarating journey through the heart of Rwanda's breathtaking landscapes, where adventure awaits at every turn. Set your sights on Mount Founding in Kigali and the captivating Cong Nile Trail nestled along the picturesque shores of Lake Kivu.
	Begin your expedition by conquering the majestic peaks of Mount Founding, a haven for hiking enthusiasts seeking a thrilling challenge. As you ascend through lush forests and rugged terrain, immerse yourself in the natural beauty that surrounds you. Feel the adrenaline course through your veins as you reach new heights and witness awe-inspiring vistas stretching as far as the eye can see.
	For those craving an aquatic adventure, the Cong Nile Trail beckons with its enchanting waterscapes and hidden gems waiting to be discovered. Traverse the shores of Lake Kivu, where every twist and turn reveals a new spectacle. From tranquil coves to cascading waterfalls, each step offers a chance to connect with nature in its purest form.
	Whether you're an avid hiker or an adventurous spirit yearning for new experiences, the trails of Mount Founding and the Cong Nile Trail promise an unforgettable journey filled with excitement and wonder. So lace up your boots, pack your sense of adventure, and get ready to explore the untamed beauty of Rwanda like never before.
	</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Glide Experience </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Scenic Views </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Safety Measures </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Adventurous Spirit </li>
</ul>
<div class="content-bottom-area">
<a href="#" class="primary-btn1">Check Availability</a>
<a data-fancybox="popup-video" href="https://www.youtube.com/watch?v=kEhbE4CTEQ0" class="video-area">
<div class="icon">
<svg class="video-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px" viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
<circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
<path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10" d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
<path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10" d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
</svg>
<i class="bi bi-play"></i>
</div>
<h6>Watch Adventure</h6>
</a>
</div>
</div>
<div class="verticle-tab-img">
<div class="verticle-tab-img1 mb-25">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/paragliding-01.webp" alt="acti-image">
</div>
<div class="verticle-tab-img2">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/paragliding-02.webp" alt="acti-image ">
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-2" role="tabpanel" aria-labelledby="2-tab">
<div class="verticle-tab-content-wrap">
<div class="verticle-tab-content">
<div class="eg-tag2">
<span>Boat Tours experience </span>
</div>
<h2>Plunge: Bungee Jumping&#039;s Gravity-Defying Thrill</h2>
<p>Embark on a journey of discovery amidst the breathtaking beauty of Rwanda's lakes, including the majestic Lake Kivu, tranquil Lake Burera, and the picturesque Lake Ihema nestled within Akagera National Park. Our boat tour experiences and water-based activities offer an unparalleled opportunity to explore these natural wonders like never before.
	Cruise along the pristine waters of Lake Kivu, where lush green hills meet the sparkling shoreline, and witness stunning views of the surrounding landscape. Our guided boat tours provide insights into the cultural and ecological significance of this iconic lake, home to vibrant fishing communities experience and view  volcanic landscapes.
	For a serene escape, venture to Lake Burera and Lake Ruhondo, collectively known as the "Twin Lakes," where tranquillity reigns supreme. Glide across the mirrored surface of these reflective waters, framed by towering peaks and rolling hills, and feel a sense of peace wash over you.
	Within the heart of Akagera National Park lies Lake Ihema, a haven for wildlife enthusiasts and nature lovers alike. Embark on a guided boat safari and encounter an array of wildlife, from hippos and crocodiles basking in the sun to a myriad of bird species that call this wetland paradise home.
	Whether you seek adventure or serenity, our boat tour experiences and water-based activities on Rwanda's lakes promise an unforgettable journey filled with awe-inspiring moments and lasting memories. Book your excursion today and let the beauty of these pristine waters captivate your soul.
	Top of Form
	</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Professional Guidance </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Secure Harnesses </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Adrenaline Rush </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Scenic Locations </li>
</ul>
<div class="content-bottom-area">
<a href="#" class="primary-btn1">Check Availability</a>
<a data-fancybox="popup-video" href="https://www.youtube.com/watch?v=kEhbE4CTEQ0" class="video-area">
<div class="icon">
<svg class="video-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px" viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
<circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
<path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10" d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
<path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10" d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
</svg>
<i class="bi bi-play"></i>
</div>
<h6>Watch Adventure</h6>
</a>
</div>
</div>
<div class="verticle-tab-img">
<div class="verticle-tab-img1 mb-25">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/bungee-jump-01.webp" alt="acti-image">
</div>
<div class="verticle-tab-img2">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/bungee-jump-02.webp" alt="acti-image ">
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-3" role="tabpanel" aria-labelledby="3-tab">
<div class="verticle-tab-content-wrap">
<div class="verticle-tab-content">
<div class="eg-tag2">
<span>
	Zip-line and paintball
	</span>
</div>
<h2>Powder Quest: Exploring Snow-Covered Landscapes on Skis</h2>
<p>Looking for an adrenaline-fueled adventure? Look no further than our thrilling zip-line and paintball outdoor experience! Nestled in the heart of nature, our exhilarating zip-line course offers breathtaking views and an unforgettable rush as you soar through the treetops. Feel the wind rush past you as you traverse from platform to platform, experiencing the thrill of flight like never before.
	But the excitement doesn't stop there! Gear up for an action-packed paintball battle in our custom-designed outdoor arena. Strategize with your team, hone your aim, and unleash your competitive spirit as you engage in adrenaline-pumping skirmishes amidst natural obstacles and cover. Whether you're a seasoned paintball pro or a newcomer to the sport, our expert staff ensures a safe and thrilling experience for players of all skill levels.
	Perfect for friends, families, and corporate outings alike, our zip-line and paintball outdoor experience promises an adventure you'll be talking about for years to come. So why wait? Book your adventure today and prepare to unleash your inner thrill-seeker in the great outdoors!
	
	</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Ascend and Descend </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Specialized Equipment </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Remote Exploration </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Physical Challenge </li>
</ul>
<div class="content-bottom-area">
<a href="#" class="primary-btn1">Check Availability</a>
<a data-fancybox="popup-video" href="https://www.youtube.com/watch?v=kEhbE4CTEQ0" class="video-area">
<div class="icon">
<svg class="video-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px" viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
<circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
<path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10" d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
<path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10" d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
</svg>
<i class="bi bi-play"></i>
</div>
<h6>Watch Adventure</h6>
</a>
</div>
</div>
<div class="verticle-tab-img">
<div class="verticle-tab-img1 mb-25">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/ski-touring-01.webp" alt="acti-image">
</div>
<div class="verticle-tab-img2">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/ski-touring-02.webp" alt="acti-image ">
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-4" role="tabpanel" aria-labelledby="4-tab">
<div class="verticle-tab-content-wrap">
<div class="verticle-tab-content">
<div class="eg-tag2">
<span>
	Camping experience 
	</span>
</div>
<h2>Whitewater Rush: Thrilling Rafting Adventure</h2>
<p>Escape into the heart of Rwanda's natural wonders with our exclusive camping experience, offering unparalleled adventure and tranquility amidst the breathtaking landscapes of Lake Kivu, Tween Lake, and Lake Muhazi.
	Nestled along the shores of these pristine lakes, our campsites provide a gateway to explore the untamed beauty of Rwanda's waterways. Wake up to the gentle lapping of waves and the symphony of birdsong as you immerse yourself in the serenity of nature.
	For those seeking a more exhilarating experience, venture into Akagera National Park, where our expert guides will lead you on unforgettable safaris through the savannah plains, encountering majestic wildlife in their natural habitat.
	But the adventure doesn't end there. Discover the unique thrill of sleeping under the stars atop the Museum and Mount Jali in Kigali, offering panoramic views of the cityscape below.
	Whether you're a seasoned outdoor enthusiast or a novice camper, our carefully curated experiences promise an unforgettable journey into the heart of Rwanda's wilderness. Book your adventure today and embark on the ultimate camping experience with us.
</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Professional Guides </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Adventurous Rapids </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Scenic Landscapes </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Team Experience </li>
</ul>
<div class="content-bottom-area">
<a href="#" class="primary-btn1">Check Availability</a>
<a data-fancybox="popup-video" href="https://www.youtube.com/watch?v=kEhbE4CTEQ0" class="video-area">
<div class="icon">
<svg class="video-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px" viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
<circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
<path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10" d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
<path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10" d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
</svg>
<i class="bi bi-play"></i>
</div>
<h6>Watch Adventure</h6>
</a>
</div>
</div>
<div class="verticle-tab-img">
<div class="verticle-tab-img1 mb-25">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/rafting-01.webp" alt="acti-image">
</div>
<div class="verticle-tab-img2">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/rafting-02.webp" alt="acti-image ">
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-5" role="tabpanel" aria-labelledby="5-tab">
<div class="verticle-tab-content-wrap">
<div class="verticle-tab-content">
<div class="eg-tag2">
<span>Surfing</span>
</div>
<h2>Ocean Rush: The Thrill of Riding Majestic Surf Waves.</h2>
<p>Ride powerful waves, feel the ocean&#039;s rhythm, and embrace the thrill of surfing, blending athleticism and connection with nature&#039;s forces.</p>
<ul>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Wave Mastery </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Board Variety </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Physical Fitness </li>
<li>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9">
<circle cx="4.5" cy="4.5" r="4.5" />
</svg>
Ocean Awareness </li>
</ul>
<div class="content-bottom-area">
<a href="#" class="primary-btn1">Check Availability</a>
<a data-fancybox="popup-video" href="https://www.youtube.com/watch?v=kEhbE4CTEQ0" class="video-area">
<div class="icon">
<svg class="video-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px" viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;" xml:space="preserve">
<circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100"></circle>
<path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10" d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
<path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10" d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
</svg>
<i class="bi bi-play"></i>
</div>
<h6>Watch Adventure</h6>
</a>
</div>
</div>
<div class="verticle-tab-img">
<div class="verticle-tab-img1 mb-25">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/surfing-01.webp" alt="acti-image">
</div>
<div class="verticle-tab-img2">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/surfing-02.webp" alt="acti-image ">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-4f9ff69 e-flex e-con-boxed e-con e-parent" data-id="4f9ff69" data-element_type="container" data-core-v316-plus="true">
<div class="e-con-inner">
<div class="elementor-element elementor-element-10f4e2a elementor-widget elementor-widget-triprex_heading" data-id="10f4e2a" data-element_type="widget" data-widget_type="triprex_heading.default">
<div class="elementor-widget-container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center ">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Hurry Up <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Phenomenal Deals Offered</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-47ce0dd e-flex e-con-boxed e-con e-parent" data-id="47ce0dd" data-element_type="container" data-core-v316-plus="true">
<div class="e-con-inner">
<div class="elementor-element elementor-element-c4927a3 e-con-full e-flex e-con e-child" data-id="c4927a3" data-element_type="container">
<div class="elementor-element elementor-element-df73c70 elementor-widget elementor-widget-triprex_banner" data-id="df73c70" data-element_type="widget" data-widget_type="triprex_banner.default">
<div class="elementor-widget-container">
<div class="banner2-card">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/banner2-card-img1.png" alt="banner-image ">
<div class="banner2-content-wrap">
<div class="banner2-content">
<span>Savings worldwide</span>
<h3>20% Off</h3>
<a href="tours.php">Discover Great Deal</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-aeb9bc5 e-con-full e-flex e-con e-child" data-id="aeb9bc5" data-element_type="container">
<div class="elementor-element elementor-element-69942df elementor-widget elementor-widget-triprex_banner" data-id="69942df" data-element_type="widget" data-widget_type="triprex_banner.default">
<div class="elementor-widget-container">
<div class="row">
<div class="col-lg-12">
<div class="banner2-card two ">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/banner2-card-img3.png" alt="banner-image ">
<div class="banner2-content-wrap">
<div class="banner2-content">
<span>Couple Tour</span>
<a href="tours.php">4 Days In Switzerland</a>
</div>
<div class="offer-batch">
<span><strong>50%</strong> <br>Off</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-e31782c elementor-widget elementor-widget-triprex_banner" data-id="e31782c" data-element_type="widget" data-widget_type="triprex_banner.default">
<div class="elementor-widget-container">
<div class="row">
<div class="col-lg-12">
<div class="banner2-card three">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/banner2-card-img4.png" alt="banner-image ">
<div class="banner2-content-wrap d-flex align-items-center">
<div class="w-100">
<div class="banner2-content">
<span>Honeymoon Tour</span>
<h5>Enjoy <span>40%</span> Off</h5>
<p>2 Country &amp; 15 Location</p>
</div>
<a href="tours.php" class="primary-btn1">Book Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-e716c31 e-con-full e-flex e-con e-child" data-id="e716c31" data-element_type="container">
<div class="elementor-element elementor-element-bab4e2e elementor-widget elementor-widget-triprex_banner" data-id="bab4e2e" data-element_type="widget" data-widget_type="triprex_banner.default">
<div class="elementor-widget-container">
<div class="banner2-card four">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/banner2-card-img2.png" alt="banner-img ">
<div class="banner2-content-wrap">
<div class="banner2-content">
<span>Savings worldwide</span>
<h3>50% Off </h3>
<p>For Your First Book</p>
</div>
<a href="tours.php" class="primary-btn1">Book Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-747912b e-con-full e-flex e-con e-parent" data-id="747912b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-core-v316-plus="true">
<div class="elementor-element elementor-element-3b82db0 elementor-widget elementor-widget-triprex_heading" data-id="3b82db0" data-element_type="widget" data-widget_type="triprex_heading.default">
<div class="elementor-widget-container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center ">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Testimonial <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Regards From Travelers</h2>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-2771475 elementor-widget elementor-widget-triprex_testimonial" data-id="2771475" data-element_type="widget" data-widget_type="triprex_testimonial.default">
<div class="elementor-widget-container">
<div class="testimonial-section" style="background-image: url(); background-size: cover; background-repeat: no-repeat;">
<div class="testimonial-wrapper">
<div class="container">
<div class="testimonial-nav-area">
<ul class="nav nav-pills" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<div class="nav-link active" id="Tripadvisor-tab" data-bs-toggle="tab" data-bs-target="#tech-Tripadvisor" role="tab" aria-controls="tech-Tripadvisor" aria-selected="true">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M14.1767 3.049L15.3834 1.73614H12.7074C11.3678 0.821039 9.74987 0.288086 8.00015 0.288086C6.25264 0.288086 4.63926 0.822188 3.30182 1.73614H0.619141L1.82585 3.049C1.08619 3.72384 0.622504 4.69593 0.622504 5.77527C0.622504 7.81214 2.27392 9.46353 4.31079 9.46353C5.2784 9.46353 6.15994 9.09035 6.81805 8.48028L8.00018 9.76744L9.1823 8.4814C9.84041 9.09147 10.7208 9.46353 11.6884 9.46353C13.7253 9.46353 15.3789 7.81214 15.3789 5.77527C15.38 4.69481 14.9164 3.72275 14.1767 3.049ZM4.31189 8.27134C2.9331 8.27134 1.81581 7.15405 1.81581 5.77527C1.81581 4.39648 2.93313 3.27916 4.31189 3.27916C5.69065 3.27916 6.80796 4.39648 6.80796 5.77527C6.80796 7.15405 5.69065 8.27134 4.31189 8.27134ZM8.00127 5.70264C8.00127 4.06016 6.80687 2.65012 5.23032 2.04787C6.08283 1.69143 7.01803 1.49367 8.00015 1.49367C8.98227 1.49367 9.91856 1.69143 10.7711 2.04787C9.1957 2.65124 8.00127 4.06019 8.00127 5.70264ZM11.6896 8.27134C10.3108 8.27134 9.19346 7.15405 9.19346 5.77527C9.19346 4.39648 10.3108 3.27916 11.6896 3.27916C13.0683 3.27916 14.1856 4.39648 14.1856 5.77527C14.1856 7.15405 13.0683 8.27134 11.6896 8.27134ZM11.6896 4.46574C10.9666 4.46574 10.3812 5.05122 10.3812 5.77414C10.3812 6.49703 10.9666 7.08252 11.6896 7.08252C12.4125 7.08252 12.9979 6.49703 12.9979 5.77414C12.9979 5.05235 12.4125 4.46574 11.6896 4.46574ZM5.62026 5.77527C5.62026 6.49816 5.03478 7.08364 4.31189 7.08364C3.589 7.08364 3.00351 6.49816 3.00351 5.77527C3.00351 5.05235 3.589 4.46686 4.31189 4.46686C5.03478 4.46574 5.62026 5.05235 5.62026 5.77527Z" fill="#F3F3F3"></path></svg> </div>
Tripadvisor </div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="Facebook-tab" data-bs-toggle="tab" data-bs-target="#tech-Facebook" role="tab" aria-controls="tech-Facebook" aria-selected="true">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><g clip-path="url(#clip0_1015_42)"><path d="M6.93391 11.9998L6.93391 6.52629L8.76961 6.52629L9.04501 4.39255L6.93391 4.39255L6.93391 3.03046C6.93391 2.41288 7.10463 1.99201 7.99085 1.99201L9.11932 1.99155L9.11932 0.0830515C8.92417 0.0576802 8.25428 -0.000488282 7.4746 -0.000488282C5.84651 -0.000488281 4.73188 0.993713 4.73188 2.81913L4.73188 4.39255L2.89062 4.39255L2.89062 6.52629L4.73188 6.52629L4.73188 11.9998L6.93391 11.9998Z" fill="#F3F3F3"></path></g><defs><clipPath id="clip0_1015_42"><rect x="0.0078125" y="-0.000488281" width="11.9951" height="12.0003" fill="white"></rect></clipPath></defs></svg> </div>
Facebook </div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link " id="Google-tab" data-bs-toggle="tab" data-bs-target="#tech-Google" role="tab" aria-controls="tech-Google" aria-selected="true">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><g clip-path="url(#clip0_1015_45)"><path d="M0 6C0 2.6916 2.6916 0 6 0C7.33617 0 8.60086 0.429886 9.65737 1.2432L8.26309 3.0544C7.60983 2.55154 6.82726 2.28571 6 2.28571C3.95194 2.28571 2.28571 3.95194 2.28571 6C2.28571 8.04806 3.95194 9.71429 6 9.71429C7.64954 9.71429 9.05131 8.63354 9.5344 7.14286H6V4.85714H12V6C12 9.3084 9.3084 12 6 12C2.6916 12 0 9.3084 0 6Z" fill="#F3F3F3"></path></g><defs><clipPath id="clip0_1015_45"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg> </div>
Google </div>
</li>
</ul>
</div>
</div>
<div class="testimonial-card-slider-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="tech-Tripadvisor" role="tabpanel" aria-labelledby="Tripadvisor-tab">
<div class="swiper testimonial-card-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;ArnouldIshimwe&#039;s web development services are second to none. Their dedication to excellence ensured a seamless experience from start to finish.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="tripadvisor">
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/tripadvisor-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img1.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Mr. Daniel Scoot</h5>
<span>Bangladesh</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Incredible craftsmanship! ArnouldIshimwe&#039;s web development services surpassed my expectations at every turn. Highly recommended!&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="tripadvisor">
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/tripadvisor-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img2.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Liam Nohkan</h5>
<span>Italy</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Absolute perfection! ArnouldIshimwe&#039;s web development services left me completely satisfied and eager to recommend them to others.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="tripadvisor">
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/tripadvisor-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img3.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Mateo Daniel</h5>
<span>Australia</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Exemplary service! ArnouldIshimwe&#039;s Figma, web design and development team went above and beyond, leaving me thoroughly impressed and grateful.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="tripadvisor">
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
<li><i class="bi bi-circle-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/tripadvisor-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img4.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Lucas Mora</h5>
<span>France</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-Facebook" role="tabpanel" aria-labelledby="Facebook-tab">
<div class="swiper testimonial-card-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;ArnouldIshimwe&#039;s web development services are second to none. Their dedication to excellence ensured a seamless experience from start to finish.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/facebook-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>June 9, 2023</p>
<span>08.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img1.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Mr. Daniel Scoot</h5>
<span>Bangladesh</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Incredible craftsmanship! ArnouldIshimwe&#039;s web development services surpassed my expectations at every turn. Highly recommended!&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/facebook-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>July 9, 2023</p>
<span>09.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img2.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Liam Nohkan</h5>
<span>Italy</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Absolute perfection! ArnouldIshimwe&#039;s web development services left me completely satisfied and eager to recommend them to others.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/facebook-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img3.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Mateo Daniel</h5>
<span>Australia</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Exemplary service! ArnouldIshimwe&#039;s Figma, web design and development team went above and beyond, leaving me thoroughly impressed and grateful.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/facebook-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img4.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Lucas Mora</h5>
<span>France</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade " id="tech-Google" role="tabpanel" aria-labelledby="Google-tab">
<div class="swiper testimonial-card-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Exemplary service! ArnouldIshimwe&#039;s Figma, web design and development team went above and beyond, leaving me thoroughly impressed and grateful.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/google-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img4.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Lucas Mora</h5>
<span>France</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;ArnouldIshimwe&#039;s web development services are second to none. Their dedication to excellence ensured a seamless experience from start to finish.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/google-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>May 9, 2023</p>
<span>10.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img3.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Mr. Daniel Scoot</h5>
<span>Bangladesh</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;ArnouldIshimwe&#039;s web development services are second to none. Their dedication to excellence ensured a seamless experience from start to finish.&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/google-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>June 9, 2023</p>
<span>08.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img1.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Mr. Daniel Scoot</h5>
<span>Bangladesh</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="tesimonial-card-wrapper">
<div class="tesimonial-card">
<div class="testimonial-content">
<p>&quot;Incredible craftsmanship! ArnouldIshimwe&#039;s web development services surpassed my expectations at every turn. Highly recommended!&quot;</p>
</div>
<div class="testimonial-bottom">
<div class="rating-area">
<ul class="rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/google-text-logo.svg" alt="review-image">
</div>
<div class="quote">
<svg xmlns="http://www.w3.org/2000/svg" width="74" height="51" viewBox="0 0 74 51">
<g>
<path d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
<path d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
</g>
</svg>
</div>
<div class="date-and-time">
<p>July 9, 2023</p>
<span>09.30 PM</span>
</div>
</div>
</div>
<div class="author-area">
<div class="author-img">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/testi-author-img2.png" alt="auth-mage">
</div>
<div class="author-content">
<h5>Liam Nohkan</h5>
<span>Italy</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="slider-btn-grp2">
<div class="slider-btn testimonial-card-tab-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<div class="slider-btn testimonial-card-tab-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-77c203c e-con-full e-flex e-con e-parent" data-id="77c203c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-core-v316-plus="true">
<div class="elementor-element elementor-element-89d38f0 elementor-widget elementor-widget-triprex_blog" data-id="89d38f0" data-element_type="widget" data-widget_type="triprex_blog.default">
<div class="elementor-widget-container">
<div class="blog-section">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector1.png" alt="vector-image" class="section-vector1">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center mb-60">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Latest Blog <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2> Latest Travel Blog</h2>
</div>
</div>
</div>
<div class="row g-lg-4 gy-5">
<div class="col-lg-5">
<div class="blog-card left-card-ti">
<div class="blog-card-img-wrap">
<a href="#" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/T1.webp" alt="thumb-image"></a>
</div>
<div class="blog-card-content">
<div class="blog-card-content-top">
<ul>
<li>
By <a href="#">Shafiqul</a>
</li>
<li>
<a href="#">Feb 6, 2024</a>
</li>
<li>
0 Comment </li>
</ul>
</div>
<h5><a href="#">Spiritual Sojourn: Pilgrimage Tours for Soul Seekers</a></h5>
<div class="bottom-area">
<a href="#">View Post <span>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
<path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round" />
<path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105" stroke-linecap="round" />
</svg>
</span>
</a>
<ul class="social-list">
<li>
<a href="#"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
</svg></a>
</li>
<li>
<a href="#"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="#"><i class="bx bxl-instagram"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="blog-card two right-card-ti">
<div class="blog-card-img-wrap">
<a href="#" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/T2.webp" alt="image"></a>
<a href="#" class="date">
<span><strong>6</strong> <br> Feb</span>
</a>
</div>
<div class="blog-card-content">
<div class="blog-card-content-top">
<ul>
<li>
By <a href="#">Shafiqul</a>
</li>
<li>
<a href="#">Adventure Safari</a>
</li>
</ul>
</div>
<h5><a href="#">Wine Country Escapes: Vineyard Tours for Connoisseurs</a></h5>
<div class="bottom-area">
<a href="#">View Post <span>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
<path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round" />
<path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105" stroke-linecap="round" />
</svg>
</span>
</a>
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12">
<path d="M5.85726 11.3009C7.14547 9.08822 6.60613 6.30362 4.57475 4.68025C4.57356 4.67933 4.57238 4.67818 4.57143 4.6775L4.58021 4.69862L4.57878 4.71446C4.97457 5.72599 4.91905 6.83648 4.43285 7.78924L4.09022 8.461L3.9851 7.71876C3.91368 7.21529 3.71745 6.735 3.41515 6.32382H3.36745L3.3423 6.25495C3.34586 7.02428 3.17834 7.78213 2.8497 8.49704C2.41856 9.43259 2.48191 10.5114 3.01936 11.3833L3.39023 11.9853L2.72299 11.7126C1.62271 11.2628 0.743103 10.3964 0.309587 9.33547C-0.176131 8.15083 -0.0862008 6.77725 0.550429 5.66194C0.882388 5.08179 1.11493 4.46582 1.24187 3.8308L1.36597 3.2084L1.68251 3.76353C1.83366 4.02824 1.94494 4.31476 2.01399 4.61574L2.02111 4.62285L2.02847 4.67107L2.03535 4.669C2.98353 3.45015 3.55158 1.93354 3.6344 0.397865L3.65575 0L4.00076 0.217643C5.4088 1.10544 6.38664 2.52976 6.6887 4.13017L6.69558 4.163L6.69914 4.16805L6.71457 4.14693C6.99053 3.79429 7.13622 3.37485 7.13622 2.93336V2.24967L7.56261 2.7947C8.55398 4.06153 9.06224 5.63301 8.99391 7.21988C8.90991 9.08776 7.85708 10.7272 6.17736 11.6154L5.45008 12L5.85726 11.3009Z" />
</svg>
1 Min Read </span>
</div>
</div>
</div>
<div class="blog-card two right-card-ti">
<div class="blog-card-img-wrap">
<a href="#" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/T3.webp" alt="image"></a>
<a href="#" class="date">
<span><strong>6</strong> <br> Feb</span>
</a>
</div>
<div class="blog-card-content">
<div class="blog-card-content-top">
<ul>
<li>
By <a href="#">Shafiqul</a>
</li>
<li>
<a href="#">Cruise Voyage</a>
</li>
</ul>
</div>
<h5><a href="#">Thrills &#038; Chills: Extreme Sports Tours for Adrenaline Junkies</a></h5>
<div class="bottom-area">
<a href="#">View Post <span>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
<path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round" />
<path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105" stroke-linecap="round" />
</svg>
</span>
</a>
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12">
<path d="M5.85726 11.3009C7.14547 9.08822 6.60613 6.30362 4.57475 4.68025C4.57356 4.67933 4.57238 4.67818 4.57143 4.6775L4.58021 4.69862L4.57878 4.71446C4.97457 5.72599 4.91905 6.83648 4.43285 7.78924L4.09022 8.461L3.9851 7.71876C3.91368 7.21529 3.71745 6.735 3.41515 6.32382H3.36745L3.3423 6.25495C3.34586 7.02428 3.17834 7.78213 2.8497 8.49704C2.41856 9.43259 2.48191 10.5114 3.01936 11.3833L3.39023 11.9853L2.72299 11.7126C1.62271 11.2628 0.743103 10.3964 0.309587 9.33547C-0.176131 8.15083 -0.0862008 6.77725 0.550429 5.66194C0.882388 5.08179 1.11493 4.46582 1.24187 3.8308L1.36597 3.2084L1.68251 3.76353C1.83366 4.02824 1.94494 4.31476 2.01399 4.61574L2.02111 4.62285L2.02847 4.67107L2.03535 4.669C2.98353 3.45015 3.55158 1.93354 3.6344 0.397865L3.65575 0L4.00076 0.217643C5.4088 1.10544 6.38664 2.52976 6.6887 4.13017L6.69558 4.163L6.69914 4.16805L6.71457 4.14693C6.99053 3.79429 7.13622 3.37485 7.13622 2.93336V2.24967L7.56261 2.7947C8.55398 4.06153 9.06224 5.63301 8.99391 7.21988C8.90991 9.08776 7.85708 10.7272 6.17736 11.6154L5.45008 12L5.85726 11.3009Z" />
</svg>
1 Min Read </span>
</div>
</div>
</div>
<div class="blog-card two right-card-ti">
<div class="blog-card-img-wrap">
<a href="#" class="card-img"><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/T4.webp" alt="image"></a>
<a href="#" class="date">
<span><strong>6</strong> <br> Feb</span>
</a>
</div>
<div class="blog-card-content">
<div class="blog-card-content-top">
<ul>
<li>
By <a href="#">Shafiqul</a>
</li>
<li>
<a href="#">Cruise Voyage</a>
</li>
</ul>
</div>
<h5><a href="#">Urban Wanderlust: City Walking Tours for Street Savvy</a></h5>
<div class="bottom-area">
<a href="#">View Post <span>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
<path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round" />
<path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105" stroke-linecap="round" />
</svg>
</span>
</a>
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12">
<path d="M5.85726 11.3009C7.14547 9.08822 6.60613 6.30362 4.57475 4.68025C4.57356 4.67933 4.57238 4.67818 4.57143 4.6775L4.58021 4.69862L4.57878 4.71446C4.97457 5.72599 4.91905 6.83648 4.43285 7.78924L4.09022 8.461L3.9851 7.71876C3.91368 7.21529 3.71745 6.735 3.41515 6.32382H3.36745L3.3423 6.25495C3.34586 7.02428 3.17834 7.78213 2.8497 8.49704C2.41856 9.43259 2.48191 10.5114 3.01936 11.3833L3.39023 11.9853L2.72299 11.7126C1.62271 11.2628 0.743103 10.3964 0.309587 9.33547C-0.176131 8.15083 -0.0862008 6.77725 0.550429 5.66194C0.882388 5.08179 1.11493 4.46582 1.24187 3.8308L1.36597 3.2084L1.68251 3.76353C1.83366 4.02824 1.94494 4.31476 2.01399 4.61574L2.02111 4.62285L2.02847 4.67107L2.03535 4.669C2.98353 3.45015 3.55158 1.93354 3.6344 0.397865L3.65575 0L4.00076 0.217643C5.4088 1.10544 6.38664 2.52976 6.6887 4.13017L6.69558 4.163L6.69914 4.16805L6.71457 4.14693C6.99053 3.79429 7.13622 3.37485 7.13622 2.93336V2.24967L7.56261 2.7947C8.55398 4.06153 9.06224 5.63301 8.99391 7.21988C8.90991 9.08776 7.85708 10.7272 6.17736 11.6154L5.45008 12L5.85726 11.3009Z" />
</svg>
1 Min Read </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-0a53251 e-con-full e-flex e-con e-parent" data-id="0a53251" data-element_type="container" data-core-v316-plus="true">
<div class="elementor-element elementor-element-61095bd elementor-widget elementor-widget-triprex_visa_processing" data-id="61095bd" data-element_type="widget" data-widget_type="triprex_visa_processing.default">
<div class="elementor-widget-container">
<div class="visa-section">
<img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/section-vector2.png" alt="vector" class="section-vector2">
<div class="container">
<div class="row">
<div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3 mb-60">
<div class="section-title">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.92556 7.69046C2.35744 7.63298 2.78906 7.57563 3.21925 7.51077C4.14925 7.37065 5.08588 7.29138 6.01763 7.21249L6.01888 7.21243C6.15888 7.20055 6.29875 7.18874 6.43844 7.17668C7.50663 6.968 8.58732 6.89083 9.66644 6.94628C10.7733 7.06837 11.8592 7.41421 12.8857 7.97163L12.8857 8.23655C11.8592 8.79397 10.7733 9.13981 9.66644 9.26191C8.58732 9.31735 7.50663 9.24018 6.43844 9.03151C5.36831 8.93932 4.29813 8.82412 3.21925 8.69742C2.14031 8.57065 1.07012 8.42092 -6.78702e-07 8.23655L-7.01862e-07 7.97163C0.639938 7.86135 1.28306 7.77588 1.92556 7.69046ZM10.7633 15.8502C10.9332 15.4596 11.12 15.0855 11.3061 14.7127C11.389 14.5468 11.4717 14.3811 11.5527 14.2144C11.8159 13.6729 12.1141 13.1545 12.4299 12.6477C12.5448 12.4632 12.64 12.2604 12.7336 12.061C12.8972 11.7124 13.056 11.3741 13.3071 11.1616C13.7816 10.7768 14.3283 10.5734 14.886 10.574L15 10.7353C14.9945 11.4677 14.8235 12.1813 14.5088 12.7859C14.3311 13.1802 14.0336 13.4059 13.7358 13.6317C13.6073 13.7292 13.4787 13.8268 13.3597 13.9379C12.965 14.3066 12.5615 14.6637 12.1492 15.0093C11.7369 15.3549 11.3159 15.689 10.8685 16L10.7633 15.8502ZM11.7543 0.665536C11.4882 0.436859 11.2226 0.208798 10.9388 -1.5523e-06L10.816 0.149784C11.0528 0.725784 11.3072 1.27877 11.5703 1.82018C11.8335 2.3616 12.1142 2.89157 12.3949 3.40997C12.4795 3.56628 12.5538 3.73514 12.628 3.90394C12.8 4.29501 12.9718 4.68572 13.2721 4.91908C13.7312 5.33563 14.2754 5.56049 14.8334 5.56418L14.9562 5.4144C14.9651 4.68055 14.8095 3.95951 14.5089 3.3408C14.3471 3.01108 14.0894 2.80252 13.824 2.58763C13.6722 2.46474 13.5178 2.33975 13.3773 2.1888C12.9914 1.77409 12.6142 1.3824 12.1931 1.0368C12.0446 0.91489 11.8994 0.790152 11.7543 0.665536Z" />
</svg>
Visa Services <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0744 8.30954C12.6426 8.36702 12.2109 8.42437 11.7807 8.48923C10.8507 8.62935 9.91412 8.70862 8.98237 8.78751L8.98112 8.78757C8.84112 8.79945 8.70125 8.81126 8.56156 8.82332C7.49337 9.032 6.41268 9.10917 5.33356 9.05372C4.22669 8.93163 3.14081 8.58578 2.11432 8.02837V7.76345C3.14081 7.20603 4.22669 6.86018 5.33356 6.73809C6.41268 6.68265 7.49337 6.75982 8.56156 6.96849C9.63169 7.06068 10.7019 7.17588 11.7807 7.30259C12.8597 7.42935 13.9299 7.57908 15 7.76345V8.02837C14.3601 8.13865 13.7169 8.22412 13.0744 8.30954ZM4.23673 0.14976C4.06677 0.540388 3.88 0.914468 3.69388 1.28726C3.61104 1.45317 3.52831 1.61887 3.44728 1.78561C3.18413 2.32705 2.88589 2.84546 2.57011 3.35234C2.45519 3.5368 2.36002 3.73958 2.26642 3.939C2.10282 4.28757 1.94402 4.62593 1.69294 4.83843C1.21844 5.2232 0.671682 5.42665 0.114031 5.42597L0 5.26468C0.00551875 4.53235 0.176481 3.81866 0.491219 3.2141C0.6689 2.81982 0.966407 2.59414 1.26418 2.36828C1.39271 2.27078 1.52129 2.17324 1.64031 2.06209C2.03504 1.69345 2.43853 1.33633 2.8508 0.990726C3.26307 0.645126 3.68411 0.31104 4.13147 0L4.23673 0.14976ZM3.24568 15.3345C3.51184 15.5631 3.77735 15.7912 4.06123 16L4.18404 15.8502C3.9472 15.2742 3.69281 14.7212 3.42966 14.1798C3.16651 13.6384 2.88581 13.1084 2.60511 12.59C2.52048 12.4337 2.44621 12.2649 2.37198 12.0961C2.19999 11.705 2.02816 11.3143 1.72794 11.0809C1.26879 10.6644 0.7246 10.4395 0.166563 10.4358L0.0437562 10.5856C0.0348937 11.3194 0.190456 12.0405 0.491113 12.6592C0.652919 12.9889 0.910556 13.1975 1.17597 13.4124C1.32782 13.5353 1.48222 13.6602 1.62268 13.8112C2.00863 14.2259 2.38582 14.6176 2.80686 14.9632C2.95538 15.0851 3.10063 15.2098 3.24568 15.3345Z" />
</svg>
</span>
<h2>Visa Processing</h2>
</div>
<div class="slider-btn-grp2">
<div class="slider-btn package-card2-prev">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
<path d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
</svg>
</div>
<div class="slider-btn package-card2-next">
<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
<path d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
</svg>
</div>
</div>
</div>
</div>
<!-- WhatsApp Widget HTML here -->
<div id="gb-widget-9964" style="display: none;">
	<!--<div class="sc-q8c6tt-3 kvLxar">
		<div color="#4dc247" size="400" class="sc-q8c6tt-1 ljrDDi">
			<a size="800" href="https://wa.me/250788465231" target="_blank" aria-label="Go to whatsapp" color="#4dc247" id="" direction="column" order="whatsapp" class="sc-q8c6tt-0 kwCIV">
				<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 100%; height: 100%; fill: rgb(255, 255, 255); stroke: none;">
					<path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"></path>
				</svg>
			</a>
		</div>
	</div>-->
	<div class="sc-q8c6tt-3 kvLxar">
		<div color="#4dc247" size="50" class="sc-q8c6tt-1 ljrDDi">
			<a size="50" href="https://wa.me/250788465231" target="_blank" aria-label="Go to whatsapp" color="#4dc247" id="" direction="column" order="whatsapp" class="sc-q8c6tt-0 kwCIV">
				<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 100%; height: 100%; fill: rgb(255, 255, 255); stroke: none;">
					<path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"></path>
				</svg>
			</a>
		</div>
	</div>
	<!--<a href="https://wa.me/250788465231" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
		<path fill="#25d366" d="M16.031 1c8.283 0 15 6.717 15 15 0 3.31-1.066 6.378-3.066 8.922l-2.594 3.686-4.352-1.144c-1.556.42-3.252.636-5 .636-8.283 0-15-6.717-15-15s6.717-15 15-15zm0 2.071c-7.125 0-12.928 5.803-12.928 12.929 0 2.366.645 4.672 1.855 6.678l-1.236 4.703 4.85-1.238c1.94 1.074 4.09 1.628 6.46 1.628 7.126 0 12.928-5.803 12.928-12.929 0-7.125-5.802-12.929-12.929-12.929zm-2.294 4.586c.24-.54.51-.542.876-.542h1.414c.304 0 .72.09.902.524.192.45.648 1.576.706 1.69.058.115.1.246.02.396-.076.156-.114.246-.226.388-.116.13-.244.284-.346.392-.096.096-.198.202-.284.32-.094.12-.188.254-.274.392-.126.194-.252.39-.104.624.144.236.64 1.038 1.376 1.678.944.844 1.732 1.106 1.962 1.23.24.126.454.1.632-.056.196-.174.45-.452.566-.612.12-.16.246-.176.392-.114.144.06.918.432 1.078.512.158.08.274.116.394.194.116.076.196.116.226.18.034.064.034.378-.084.744-.12.376-.712.698-.982.782-.272.084-.618.12-.988.12-.334 0-.746-.046-1.242-.226-.5-.176-1.142-.498-1.844-.942-.706-.446-1.644-1.196-2.298-2.15-.652-.952-1.084-2.046-1.252-2.348-.166-.3-.166-.576-.12-.83.044-.252.16-.366.222-.476.064-.112.142-.194.216-.296.072-.102.154-.214.214-.296.072-.086.12-.128.18-.208.064-.086.058-.144.058-.234 0-.084-.034-.212-.12-.364-.088-.152-.538-1.358-.64-1.616-.1-.258-.204-.262-.298-.268h-1.472c-.12 0-.306.042-.456.23-.146.192-.586.572-.586 1.392 0 .82.598 1.614.682 1.724.084.112 1.174 1.876 2.92 2.626 1.746.748 1.746.498 2.054.464.308-.03 1.002-.4 1.144-.782.146-.38.146-.708.102-.782-.042-.072-.16-.114-.336-.2z"/>
		</svg>
	</a>-->
</div>
<div class="row">
<div class="col-lg-12">
<div class="swiper package-card2-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card2">
<a href="#"><img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Visa-07-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="eg-tag">
<h4><a href="error.php">Kenya</a></h4>
</div>
<div class="package-card2-content">
<div class="title">
<h6>Electronic</h6>
</div>
<div class="price-area">
<span>&#36;4,690</span> <p>per person</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card2">
<a href="#"><img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Visa-06-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="eg-tag">
<h4><a href="error.php">Tanzania</a></h4>
</div>
<div class="package-card2-content">
<div class="title">
<h6>B2B Visa</h6>
</div>
<div class="price-area">
<span>&#36;6,790 <del>&#36;7,836</del></span> <p>per person</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card2">
<a href="#"><img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Visa-05-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="eg-tag">
<h4><a href="error.php">Rwanda</a></h4>
</div>
<div class="package-card2-content">
<div class="title">
<h6>Electronic</h6>
</div>
<div class="price-area">
<span>&#36;4,800</span> <p>per person</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card2">
<a href="#"><img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Visa-04-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="eg-tag">
<h4><a href="error.php">Rwanda</a></h4>
</div>
<div class="package-card2-content">
<div class="title">
<h6>Electronic</h6>
</div>
<div class="price-area">
<span>&#36;3,930</span> <p>per person</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card2">
<a href="#"><img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Visa-03-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="eg-tag">
<h4><a href="error.php">Australia</a></h4>
</div>
<div class="package-card2-content">
<div class="title">
<h6>Electronic</h6>
</div>
<div class="price-area">
<span>&#36;4,520 <del>&#36;5,000</del></span> <p>per person</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card2">
<a href="#"><img loading="lazy" decoding="async" width="650" height="450" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/Visa-02-650x450.webp" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
<div class="eg-tag">
<h4><a href="error.php">Egypt</a></h4>
</div>
<div class="package-card2-content">
<div class="title">
<h6>Electronic</h6>
</div>
<div class="price-area">
<span>&#36;6,790 <del>&#36;7,682</del></span> <p>per person</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="banner3-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="banner3-content">
<h2>Join The Newsletter</h2>
<p>To receive our best monthly deals</p>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-233" method="post" data-id="233" data-name="Newsletter"><div class="mc4wp-form-fields"><div class="from-inner">
<input type="email" placeholder="Enter your email address...">
<button type="submit" class="from-arrow">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path d="M7 1L16 8.5M16 8.5L7 16M16 8.5H0.5" stroke-width="1.5" />
</svg>
</button>
</div></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1713247414" /><input type="hidden" name="_mc4wp_form_id" value="233" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form> <img src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/banner3-vector1.png" alt="vector1" class="vector1">
<img src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home1/banner3-vector2.png" alt="vector2" class="vector2">
</div>
</div>
</div>
</div>
</div>





<footer class="footer-section newsletter-exists th-background-image">
<div class="container">
<div class="footer-top">
<div class="row g-lg-4 gy-5 justify-content-center">
<div class="col-lg-3 col-md-6 col-sm-6">
<div id="custom_footer_widget-3" class="footer-widget widget_custom_footer_widget"> <div class="footer-logo">
<a href="index.php"><img src="assets/images/logo-md.jpg" alt="logo"></a>
</div>
<h3>Want to Take Tour Packages?</h3>
<a href="tours.php" class="primary-btn1">Book A Tour</a>
</div> </div>
<div class="col-lg-2 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-sm-start">
<div id="nav_menu-3" class="footer-widget widget_nav_menu"><div class="widget-title"><h5>Quick Link</h5></div><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="about.php">About Us</a></li>
<li id="menu-item-97" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97"><a href="destination.php">Destinations</a></li>
<li id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98"><a href="tours.php">Tour Package</a></li>
<li id="menu-item-104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"><a href="#">Article</a></li>
<li id="menu-item-2576" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2576"><a href="contact.php">Contact Us</a></li>
</ul></div></div> </div>
<div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-md-start">
<div id="company_info_widget-3" class="footer-widget widget_company_info_widget"> <div class="single-contact mb-30">
<div class="widget-title">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<g clip-path="url(#clip0_1139_225)">
<path d="M17.5107 13.2102L14.9988 10.6982C14.1016 9.80111 12.5765 10.16 12.2177 11.3262C11.9485 12.1337 11.0514 12.5822 10.244 12.4028C8.44974 11.9542 6.0275 9.62168 5.57894 7.73772C5.3098 6.93027 5.84808 6.03314 6.65549 5.76404C7.82176 5.40519 8.18061 3.88007 7.28348 2.98295L4.77153 0.470991C4.05382 -0.156997 2.97727 -0.156997 2.34929 0.470991L0.644745 2.17553C-1.0598 3.96978 0.82417 8.72455 5.04066 12.941C9.25716 17.1575 14.0119 19.1313 15.8062 17.337L17.5107 15.6324C18.1387 14.9147 18.1387 13.8382 17.5107 13.2102Z" />
</g>
</svg>
<h5>More Inquiry</h5>
</div>
<a href="tel:250788465231">+250-788 465 231</a>
</div>
<div class="single-contact mb-35">
<div class="widget-title">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<g clip-path="url(#clip0_1139_218)">
<path d="M6.56266 13.2091V16.6876C6.56324 16.8058 6.60099 16.9208 6.67058 17.0164C6.74017 17.112 6.83807 17.1832 6.9504 17.22C7.06274 17.2569 7.18382 17.2574 7.29648 17.2216C7.40915 17.1858 7.5077 17.1155 7.57817 17.0206L9.61292 14.2516L6.56266 13.2091ZM17.7639 0.104306C17.6794 0.044121 17.5799 0.00848417 17.4764 0.00133654C17.3729 -0.00581108 17.2694 0.015809 17.1774 0.0638058L0.302415 8.87631C0.205322 8.92762 0.125322 9.00617 0.0722333 9.1023C0.0191447 9.19844 -0.00472288 9.30798 0.00355981 9.41749C0.0118425 9.52699 0.0519151 9.6317 0.11886 9.71875C0.185804 9.80581 0.276708 9.87143 0.380415 9.90756L5.07166 11.5111L15.0624 2.96856L7.33141 12.2828L15.1937 14.9701C15.2717 14.9963 15.3545 15.0051 15.4363 14.996C15.5181 14.9868 15.5969 14.9599 15.6672 14.9171C15.7375 14.8743 15.7976 14.8167 15.8433 14.7482C15.8889 14.6798 15.9191 14.6021 15.9317 14.5208L17.9942 0.645806C18.0094 0.543093 17.996 0.438159 17.9554 0.342598C17.9147 0.247038 17.8485 0.164569 17.7639 0.104306Z" />
</g>
</svg>
<h5>Send Mail</h5>
</div>
<a href="/cdn-cgi/l/email-protection#f1989f979eb19489909c819d94df929e9c"><span class="__cf_email__" data-cfemail="f39a9d959cb3968b929e839f96dd909c9e">[email&#160;protected]</span></a>
</div>
<div class="single-contact">
<div class="widget-title">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
<g clip-path="url(#clip0_1137_183)">
<path d="M14.3281 3.08241C13.2357 1.19719 11.2954 0.0454395 9.13767 0.00142383C9.04556 -0.000474609 8.95285 -0.000474609 8.86071 0.00142383C6.70303 0.0454395 4.76268 1.19719 3.67024 3.08241C2.5536 5.0094 2.52305 7.32408 3.5885 9.27424L8.05204 17.4441C8.05405 17.4477 8.05605 17.4513 8.05812 17.4549C8.25451 17.7963 8.60632 18 8.99926 18C9.39216 18 9.74397 17.7962 9.94032 17.4549C9.94239 17.4513 9.9444 17.4477 9.9464 17.4441L14.4099 9.27424C15.4753 7.32408 15.4448 5.0094 14.3281 3.08241ZM8.99919 8.15627C7.60345 8.15627 6.46794 7.02076 6.46794 5.62502C6.46794 4.22928 7.60345 3.09377 8.99919 3.09377C10.3949 3.09377 11.5304 4.22928 11.5304 5.62502C11.5304 7.02076 10.395 8.15627 8.99919 8.15627Z" />
</g>
</svg>
<h5>Address</h5>
</div>
<address>RN3, NR5, Kigali</address>
</div>
</div> </div>
<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-end justify-content-sm-end">
<div id="block-7" class="footer-widget widget_block"><div class="widget-title">
<h5>We Are Here</h5>
</div>
<p>Quisque purus augue, facilisis andi neque idont accumsan fringilla massa. Vivamusol id nibhom condimentum.</p>
<div class="payment-partner">
<div class="widget-title">
<h5>Payment Partner</h5>
</div>
<div class="icons">
<ul>
<li><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/visa-logo.svg" alt="visa-logo"></li>
<li><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/stripe-logo.svg" alt="stripe-logo"></li>
<li><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/paypal-logo.svg" alt="paypal-logo"></li>
<li><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/woo-logo.svg" alt="woo-logo"></li>
<li><img decoding="async" src="https://triprex.b-cdn.net/wp-content/uploads/2024/02/skrill-logo.svg" alt="skrill-logo"></li>
</ul>
</div>
</div></div> </div>
</div>
</div>
<div class="footer-bottom">
<div class="row">
<div class="col-lg-12 d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center flex-wrap gap-3">
<ul class="social-list">
<li>
<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
</li>
<li>
<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
</li>
<li>
<a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
</li>
<li>
<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
</li>
</ul>
<p>©Copyright 2024 ACROSS AFRICA JOURNEYS | Design By <a href="https://www.instagram.com/ar_no_uld/">ArnouldIshimwe</a>and<a href="https://www.instagram.com/kevin_only23/">Kevin RUHONGEKA</a></p>
<div class="footer-right">
<ul>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms &amp; Condition</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
</div>

<!-- Modal for login notification -->
<div id="loginModal" style="display:none;">
    <div class="modal-content">
        <p>You need to be logged in to book a trip.</p>
        <button onclick="redirectToLogin()">Log In</button>
        <button onclick="abortBooking()">Cancel</button>
    </div>
</div>

<script>
function checkLoginAndBook(event) {
    event.preventDefault(); // Prevent the default link behavior

    <?php if (!isUserLoggedIn()): ?>
        // If user is not logged in, show notification
        showLoginNotification();
    <?php else: ?>
        // If logged in, allow booking
        window.location.href = event.target.href;
    <?php endif; ?>
}

function showLoginNotification() {
    const modal = document.getElementById('loginModal');
    modal.style.display = 'block'; // Display the modal
}

function redirectToLogin() {
    window.location.href = 'login/dashboard.php'; // Redirect to login page
}

function abortBooking() {
    const modal = document.getElementById('loginModal');
    modal.style.display = 'none'; // Close the modal
}

// Show the login modal
function showLoginModal() {
    var modal = document.getElementById('loginModal');
    modal.style.display = 'flex'; // Flex to center the modal
}

// Hide the login modal
function hideLoginModal() {
    var modal = document.getElementById('loginModal');
    modal.style.display = 'none';
}

</script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(function() {function maybePrefixUrlField () {
  const value = this.value.trim()
  if (value !== '' && value.indexOf('http') !== 0) {
    this.value = 'http://' + value
  }
}

const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
for (let j = 0; j < urlFields.length; j++) {
  urlFields[j].addEventListener('blur', maybePrefixUrlField)
}
})();</script> <script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.3" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/triprex.egenslab.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.3" id="contact-form-7-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.7.0" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"ajaxurl":"https:\/\/triprex.egenslab.com\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.7.0" id="wc-order-attribution-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/reviewx/resources/assets/storefront/js/jquery.magnific-popup.min.js?ver=1.6.100" id="reviewx-magnific-popup-min-js-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/reviewx/resources/assets/storefront/js/jquery.validate.min.js?ver=1.6.100" id="reviewx-jquery-validate-js-js"></script>
<script type="text/javascript" id="reviewx-js-js-extra">
/* <![CDATA[ */
var rx_ajax_data = {"ajax_url":"https:\/\/triprex.egenslab.com\/wp-admin\/admin-ajax.php","ajax_nonce":"c3b723cc5a","rx_review_title_error":"Review title can't be empty","rx_review_text_error":"Review can't be empty","rx_rating_satisfaction":"Please rate your satisfaction","review_success_title":"Success","review_success_msg":"Your review submitted successfully!","review_status_msg":"<svg width=\"18\" height=\"18\" viewBox=\"0 0 1792 1792\" class=\"rx-review-status-notice-i\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"M1152 1376v-160q0-14-9-23t-23-9h-96v-512q0-14-9-23t-23-9h-320q-14 0-23 9t-9 23v160q0 14 9 23t23 9h96v320h-96q-14 0-23 9t-9 23v160q0 14 9 23t23 9h448q14 0 23-9t9-23zm-128-896v-160q0-14-9-23t-23-9h-192q-14 0-23 9t-9 23v160q0 14 9 23t23 9h192q14 0 23-9t9-23zm640 416q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"\/><\/svg> Your review is awaiting for approval","review_failed_title":"Error","review_failed_msg":"Review submission failed!","already_review_msg":"This email has already given review on this product","highlight_button_text":"<span><svg style=\"height: 15px; vertical-align: middle\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"adjust\" class=\"svg-inline--fa fa-adjust fa-w-16\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M8 256c0 136.966 111.033 248 248 248s248-111.034 248-248S392.966 8 256 8 8 119.033 8 256zm248 184V72c101.705 0 184 82.311 184 184 0 101.705-82.311 184-184 184z\"><\/path><\/svg> Highlight <\/span>","highlight_button_rtext":"<span><svg style=\"height: 15px; vertical-align: middle; color :#f75677 \" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"trash\" class=\"svg-inline--fa fa-trash fa-w-14\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z\"><\/path><\/svg> Remove<\/span>","reply_to_this_review":"Reply to this review","edit_this_reply":"Edit this reply","review_reply":"Reply Review","reply_update":"Update","review_reply_cancel":"Cancel","please_reave_message":"Please leave a message","please_enter_title":"Please enter a title","please_enter_email":"Please enter a valid email address","please_enter_name":"Please enter your name","please_accept_agreement":"Please accept the compliance","theme_name":"triprex","rx_max_file_size":"Max file size (5MB) exceeds"};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/reviewx/resources/assets/storefront/js/reviewx.js?ver=1.6.100" id="reviewx-js-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/jquery-ui.js?ver=1707203015" id="jQuery-ui-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-includes/js/dist/vendor/moment.min.js?ver=2.29.4" id="moment-js"></script>
<script type="text/javascript" id="moment-js-after">
/* <![CDATA[ */
moment.updateLocale( 'en_US', {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"week":{"dow":1},"longDateFormat":{"LT":"g:i a","LTS":null,"L":null,"LL":"F j, Y","LLL":"F j, Y g:i a","LLLL":null}} );
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/daterangepicker.min.js?ver=1707203015" id="daterangepicker-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/popper.min.js?ver=1707203015" id="popper-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/bootstrap.min.js?ver=1707203015" id="bootstrap-popper-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/swiper-bundle.min.js?ver=1707203015" id="swiper-bundle-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/slick.js?ver=1707203015" id="slick-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/waypoints.min.js?ver=1707203015" id="waypoints-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/jquery.counterup.min.js?ver=1707203015" id="counterup-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/isotope.pkgd.min.js?ver=1707203015" id="isotope-pkgd-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/jquery.magnific-popup.min.js?ver=1707203015" id="magnific-popup-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/jquery.marquee.min.js?ver=1707203015" id="marquee-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/jquery.nice-select.min.js?ver=1707203015" id="egns-nice-select-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/select2.min.js?ver=1707203015" id="egns-select2-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/jquery.fancybox.min.js?ver=1707203015" id="fancybox-js"></script>
<script type="text/javascript" id="custom-js-extra">
/* <![CDATA[ */
var custom_scripts = {"post_type":"page","ajax_url":"https:\/\/triprex.egenslab.com\/wp-admin\/admin-ajax.php","posts":"{\"error\":\"\",\"m\":\"\",\"p\":\"26\",\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":\"26\",\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"post_type\":\"\",\"posts_per_page\":6,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}","current_page":"1","max_page":"0"};
var egns_localize = {"sticky_header_enable":"","animation_enable":"","is_egns_core_enable":"1","admin_ajax":"https:\/\/triprex.egenslab.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/js/custom.js?ver=1711802927" id="custom-js"></script>
<script type="text/javascript" defer src="https://triprex.egenslab.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.11" id="mc4wp-forms-api-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.20.3" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.20.3" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="https://triprex.b-cdn.net/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.20.3","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"block_editor_assets_optimize":true,"ai-layout":true,"landing-pages":true,"e_image_loading_optimization":true},"urls":{"assets":"https:\/\/triprex.egenslab.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":26,"title":"TripRex%20%E2%80%93%20Tour%20%26%20Travel%20Agency%20%20WordPress%20Theme","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="https://triprex.egenslab.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.20.3" id="elementor-frontend-js"></script>
<script>
	// Wait for the page to load
	window.addEventListener('load', function() {
		// Show the WhatsApp button
		document.getElementById('gb-widget-9964').style.display = 'flex';
	});
</script>

 

</body>
</html>

