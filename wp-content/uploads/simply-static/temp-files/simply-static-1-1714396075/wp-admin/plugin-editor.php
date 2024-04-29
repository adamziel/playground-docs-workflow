<!DOCTYPE html>
<html class="wp-toolbar" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Edit Plugins &lsaquo; My WordPress Website &#8212; WordPress</title>
<script type="text/javascript">addLoadEvent = function(func){if(typeof jQuery!=='undefined')jQuery(function(){func();});else if(typeof wpOnload!=='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/wp-admin/admin-ajax.php',
	pagenow = 'plugin-editor',
	typenow = '',
	adminpage = 'plugin-editor-php',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 0;</script>
<link rel="dns-prefetch" href="//127.0.0.1">
<link rel="stylesheet" href="/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5Bchunk_0%5D=dashicons%2Cadmin-bar%2Ccode-editor%2Ccommon%2Cforms%2Cadmin-menu%2Cdashboard%2Clist-tables%2Cedit%2Crevisions%2Cmedia%2Cthemes%2Cabout%2Cnav-menus%2Cwp-poi&amp;load%5Bchunk_1%5D=nter%2Cwidgets%2Csite-icon%2Cl10n%2Cbuttons%2Cwp-auth-check&amp;ver=6.5.2" media="all">
<style>@media print { #wpadminbar { display:none; } }</style>
<link rel="stylesheet" id="wp-codemirror-css" href="/wp-includes/js/codemirror/codemirror.min.css?ver=5.29.1-alpha-ee20357" media="all">
<style id="wp-emoji-styles-inline-css">img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}</style>
<style id="wp-fonts-local">@font-face{font-family:Inter;font-style:normal;font-weight:300 900;font-display:fallback;src:url('/wp-content/themes/twentytwentyfour/assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Cardo;font-style:normal;font-weight:400;font-display:fallback;src:url('/wp-content/themes/twentytwentyfour/assets/fonts/cardo/cardo_normal_400.woff2') format('woff2');}
@font-face{font-family:Cardo;font-style:italic;font-weight:400;font-display:fallback;src:url('/wp-content/themes/twentytwentyfour/assets/fonts/cardo/cardo_italic_400.woff2') format('woff2');}
@font-face{font-family:Cardo;font-style:normal;font-weight:700;font-display:fallback;src:url('/wp-content/themes/twentytwentyfour/assets/fonts/cardo/cardo_normal_700.woff2') format('woff2');}</style>
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"🏳️‍⚧️","🏳️​⚧️")?!1:!n(e,"🇺🇳","🇺​🇳")&&!n(e,"🏴󠁧󠁢󠁥󠁮󠁧󠁿","🏴​󠁧​󠁢​󠁥​󠁮​󠁧​󠁿");case"emoji":return!n(e,"🐦‍⬛","🐦​⬛")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<script id="wp-org-theme-directory-js-extra">var wpOrgThemeDirectory = {"themeSlugs":null};</script>

<script>
/* <![CDATA[ */
var userSettings = {"url":"\/","uid":"1","time":"1714396129","secure":""};/* ]]> */
</script>
<script src="/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core%2Cjquery-migrate%2Cutils%2Cwp-polyfill-inert%2Cregenerator-runtime%2Cwp-polyfill%2Cwp-codemirror%2Cunderscore&amp;ver=6.5.2"></script>
<script src="/wp-content/plugins/gutenberg/build/hooks/index.min.js?ver=3aee234ea7807d8d70bc" id="wp-hooks-js"></script>
<script src="/wp-content/plugins/gutenberg/build/i18n/index.min.js?ver=5baa98e4345eccc97e24" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script src="/wp-content/plugins/gutenberg/build/url/index.min.js?ver=413660a39c97a1da8d51" id="wp-url-js"></script>
<script src="/wp-content/plugins/gutenberg/build/api-fetch/index.min.js?ver=1d1bb669e2c3067cc691" id="wp-api-fetch-js"></script>
<script id="wp-api-fetch-js-after">wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "/wp-json/" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "f97ec4f620" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "/wp-admin/admin-ajax.php?action=rest-nonce";</script>
<script src="/wp-content/plugins/create-block-theme/build/wp-org-theme-directory.js?ver=56de387f011bf7478e34" id="wp-org-theme-directory-js"></script>
<script src="/wp-admin/js/code-editor.min.js?ver=6.5.2" id="code-editor-js"></script>
<script id="code-editor-js-after">jQuery.extend( wp.codeEditor.defaultSettings, {"codemirror":{"indentUnit":4,"indentWithTabs":true,"inputStyle":"contenteditable","lineNumbers":true,"lineWrapping":true,"styleActiveLine":true,"continueComments":true,"extraKeys":{"Ctrl-Space":"autocomplete","Ctrl-\/":"toggleComment","Cmd-\/":"toggleComment","Alt-F":"findPersistent","Ctrl-F":"findPersistent","Cmd-F":"findPersistent"},"direction":"ltr","gutters":[],"mode":"php","autoCloseBrackets":true,"autoCloseTags":true,"matchBrackets":true,"matchTags":{"bothTags":true}},"csslint":{"errors":true,"box-model":true,"display-property-grouping":true,"duplicate-properties":true,"known-properties":true,"outline-none":true},"jshint":{"boss":true,"curly":true,"eqeqeq":true,"eqnull":true,"es3":true,"expr":true,"immed":true,"noarg":true,"nonbsp":true,"onevar":true,"quotmark":"single","trailing":true,"undef":true,"unused":true,"browser":true,"globals":{"_":false,"Backbone":false,"jQuery":false,"JSON":false,"wp":false}},"htmlhint":{"tagname-lowercase":true,"attr-lowercase":true,"attr-value-double-quotes":false,"doctype-first":false,"tag-pair":true,"spec-char-escape":true,"id-unique":true,"src-not-empty":true,"attr-no-duplication":true,"alt-require":true,"space-tab-mixed-disabled":"tab","attr-unsafe-chars":true}} );</script>
<script type="text/javascript">var _wpColorScheme = {"icons":{"base":"#a7aaad","focus":"#72aee6","current":"#fff"}};</script>
	<link id="wp-admin-canonical" rel="canonical" href="/wp-admin/plugin-editor.php">
	<script>if ( window.history.replaceState ) {
			window.history.replaceState( null, null, document.getElementById( 'wp-admin-canonical' ).href + window.location.hash );
		}</script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body class="wp-admin wp-core-ui no-js plugin-editor-php auto-fold admin-bar branch-6-5 version-6-5-2 admin-color-fresh locale-en-us no-customize-support no-svg">
<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>

<script>(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

				request = true;
	
			b[c] = b[c].replace( rcs, ' ' );
			// The customizer requires postMessage and CORS (if the site is cross domain).
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());</script>

<div id="wpwrap">

<div id="adminmenumain" role="navigation" aria-label="Main menu">
<a href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>
<a href="#wp-toolbar" class="screen-reader-shortcut">Skip to toolbar</a>
<div id="adminmenuback"></div>
<div id="adminmenuwrap">
<ul id="adminmenu">


	<li class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	<a href="/wp-admin/index.php" class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-dashboard" aria-hidden="true"><br></div>
<div class="wp-menu-name">Dashboard</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Dashboard</li>
<li class="wp-first-item"><a href="/wp-admin/index.php" class="wp-first-item">Home</a></li>
<li><a href="/wp-admin/update-core.php">Updates <span class="update-plugins count-0"><span class="update-count">0</span></span></a></li>
</ul>
</li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media menu-top-first" id="menu-media">
	<a href="/wp-admin/upload.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-admin-media" aria-hidden="true"><br></div>
<div class="wp-menu-name">Media</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Media</li>
<li class="wp-first-item"><a href="/wp-admin/upload.php" class="wp-first-item">Library</a></li>
<li><a href="/wp-admin/media-new.php">Add New Media File</a></li>
</ul>
</li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page menu-top-last" id="menu-pages">
	<a href="/wp-admin/edit.php?post_type=page" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-admin-page" aria-hidden="true"><br></div>
<div class="wp-menu-name">Pages</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Pages</li>
<li class="wp-first-item"><a href="/wp-admin/edit.php?post_type=page" class="wp-first-item">All Pages</a></li>
<li><a href="/wp-admin/post-new.php?post_type=page">Add New Page</a></li>
<li><a href="/wp-admin/admin.php?page=download_docs">Download ZIP</a></li>
<li><a href="/wp-admin/admin.php?page=recreate_db_pages_from_disk">Reload doc pages from disk</a></li>
</ul>
</li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
	<a href="/wp-admin/themes.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-admin-appearance" aria-hidden="true"><br></div>
<div class="wp-menu-name">Appearance</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Appearance</li>
<li class="wp-first-item"><a href="/wp-admin/themes.php" class="wp-first-item">Themes <span class="update-plugins count-0"><span class="theme-count">0</span></span></a></li>
<li><a href="/wp-admin/site-editor.php">Editor</a></li>
<li><a href="/wp-admin/admin.php?page=create-block-theme">Create Block Theme</a></li>
</ul>
</li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" id="menu-plugins">
	<a href="/wp-admin/plugins.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-admin-plugins" aria-hidden="true"><br></div>
<div class="wp-menu-name">Plugins <span class="update-plugins count-0"><span class="plugin-count">0</span></span>
</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Plugins <span class="update-plugins count-0"><span class="plugin-count">0</span></span>
</li>
<li class="wp-first-item"><a href="/wp-admin/plugins.php" class="wp-first-item">Installed Plugins</a></li>
<li><a href="/wp-admin/plugin-install.php">Add New Plugin</a></li>
</ul>
</li>
	<li class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-tools" id="menu-tools">
	<a href="/wp-admin/tools.php" class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-tools"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-admin-tools" aria-hidden="true"><br></div>
<div class="wp-menu-name">Tools</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Tools</li>
<li class="wp-first-item"><a href="/wp-admin/tools.php" class="wp-first-item">Available Tools</a></li>
<li><a href="/wp-admin/import.php">Import</a></li>
<li><a href="/wp-admin/export.php">Export</a></li>
<li><a href="/wp-admin/site-health.php">Site Health <span class="menu-counter site-health-counter count-0"><span class="count">0</span></span></a></li>
<li><a href="/wp-admin/export-personal-data.php">Export Personal Data</a></li>
<li><a href="/wp-admin/erase-personal-data.php">Erase Personal Data</a></li>
<li><a href="/wp-admin/theme-editor.php">Theme File Editor</a></li>
<li class="current"><a href="/wp-admin/plugin-editor.php" class="current" aria-current="page">Plugin File Editor</a></li>
</ul>
</li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
	<a href="/wp-admin/options-general.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-admin-settings" aria-hidden="true"><br></div>
<div class="wp-menu-name">Settings</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Settings</li>
<li class="wp-first-item"><a href="/wp-admin/options-general.php" class="wp-first-item">General</a></li>
<li><a href="/wp-admin/options-writing.php">Writing</a></li>
<li><a href="/wp-admin/options-reading.php">Reading</a></li>
<li><a href="/wp-admin/options-discussion.php">Discussion</a></li>
<li><a href="/wp-admin/options-media.php">Media</a></li>
<li><a href="/wp-admin/options-permalink.php">Permalinks</a></li>
<li><a href="/wp-admin/options-privacy.php">Privacy</a></li>
</ul>
</li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_gutenberg menu-top-first" id="toplevel_page_gutenberg">
<a href="/wp-admin/admin.php?page=gutenberg" class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_gutenberg menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before dashicons-edit" aria-hidden="true"><br></div>
<div class="wp-menu-name">Gutenberg</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Gutenberg</li>
<li class="wp-first-item"><a href="/wp-admin/admin.php?page=gutenberg" class="wp-first-item">Demo</a></li>
<li><a href="https://wordpress.org/support/plugin/gutenberg">Support</a></li>
<li><a href="https://developer.wordpress.org/block-editor">Documentation</a></li>
<li><a href="/wp-admin/admin.php?page=gutenberg-experiments">Experiments</a></li>
</ul>
</li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_simply-static-generate menu-top-last" id="toplevel_page_simply-static-generate">
<a href="/wp-admin/admin.php?page=simply-static-generate" class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_simply-static-generate menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div>
<div class="wp-menu-image dashicons-before" aria-hidden="true"><img src="/wp-content/plugins/simply-static/assets/simply-static-icon.svg" alt=""></div>
<div class="wp-menu-name">Simply Static</div></a>
	<ul class="wp-submenu wp-submenu-wrap">
<li class="wp-submenu-head" aria-hidden="true">Simply Static</li>
<li class="wp-first-item"><a href="/wp-admin/admin.php?page=simply-static-generate" class="wp-first-item">Generate</a></li>
<li><a href="/wp-admin/admin.php?page=simply-static-settings">Settings</a></li>
</ul>
</li>
<li id="collapse-menu" class="hide-if-no-js"><button type="button" id="collapse-button" aria-label="Collapse Main menu" aria-expanded="true"><span class="collapse-button-icon" aria-hidden="true"></span><span class="collapse-button-label">Collapse menu</span></button></li>
</ul>
</div>
</div>
<div id="wpcontent">

		<div id="wpadminbar" class="nojq nojs">
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
				<ul role="menu" id="wp-admin-bar-root-default" class="ab-top-menu">
<li id="wp-admin-bar-menu-toggle"><a class="ab-item" role="menuitem" href="#"><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">Menu</span></a></li>
<li id="wp-admin-bar-wp-logo" class="menupop">
<a class="ab-item" role="menuitem" aria-expanded="false" href="/wp-admin/about.php"><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper">
<ul role="menu" aria-label="About WordPress" id="wp-admin-bar-wp-logo-default" class="ab-submenu">
<li id="wp-admin-bar-about"><a class="ab-item" role="menuitem" href="/wp-admin/about.php">About WordPress</a></li>
<li id="wp-admin-bar-contribute"><a class="ab-item" role="menuitem" href="/wp-admin/contribute.php">Get Involved</a></li>
</ul>
<ul role="menu" aria-label="About WordPress" id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
<li id="wp-admin-bar-wporg"><a class="ab-item" role="menuitem" href="https://wordpress.org/">WordPress.org</a></li>
<li id="wp-admin-bar-documentation"><a class="ab-item" role="menuitem" href="https://wordpress.org/documentation/">Documentation</a></li>
<li id="wp-admin-bar-learn"><a class="ab-item" role="menuitem" href="https://learn.wordpress.org/">Learn WordPress</a></li>
<li id="wp-admin-bar-support-forums"><a class="ab-item" role="menuitem" href="https://wordpress.org/support/forums/">Support</a></li>
<li id="wp-admin-bar-feedback"><a class="ab-item" role="menuitem" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
</ul>
</div>
</li>
<li id="wp-admin-bar-site-name" class="menupop">
<a class="ab-item" role="menuitem" aria-expanded="false" href="/">My WordPress Website</a><div class="ab-sub-wrapper"><ul role="menu" aria-label="My WordPress Website" id="wp-admin-bar-site-name-default" class="ab-submenu"><li id="wp-admin-bar-view-site"><a class="ab-item" role="menuitem" href="/">Visit Site</a></li></ul></div>
</li>
<li id="wp-admin-bar-comments"><a class="ab-item" role="menuitem" href="/wp-admin/edit-comments.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li>
<li id="wp-admin-bar-new-content" class="menupop">
<a class="ab-item" role="menuitem" aria-expanded="false" href="/wp-admin/post-new.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul role="menu" aria-label="New" id="wp-admin-bar-new-content-default" class="ab-submenu">
<li id="wp-admin-bar-new-post"><a class="ab-item" role="menuitem" href="/wp-admin/post-new.php">Post</a></li>
<li id="wp-admin-bar-new-media"><a class="ab-item" role="menuitem" href="/wp-admin/media-new.php">Media</a></li>
<li id="wp-admin-bar-new-page"><a class="ab-item" role="menuitem" href="/wp-admin/post-new.php?post_type=page">Page</a></li>
<li id="wp-admin-bar-new-user"><a class="ab-item" role="menuitem" href="/wp-admin/user-new.php">User</a></li>
</ul></div>
</li>
</ul>
<ul role="menu" id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu"><li id="wp-admin-bar-my-account" class="menupop with-avatar">
<a class="ab-item" role="menuitem" aria-expanded="false" href="/wp-admin/profile.php">Howdy, <span class="display-name">admin</span><img alt="" src="http://2.gravatar.com/avatar/e6d67fed862c439aa6e911ce49c7857d?s=26&#038;d=mm&#038;r=g" srcset="http://2.gravatar.com/avatar/e6d67fed862c439aa6e911ce49c7857d?s=52&#038;d=mm&#038;r=g 2x" class="avatar avatar-26 photo" height="26" width="26" loading="lazy" decoding="async"></a><div class="ab-sub-wrapper"><ul role="menu" aria-label="Howdy, admin" id="wp-admin-bar-user-actions" class="ab-submenu">
<li id="wp-admin-bar-user-info"><a class="ab-item" role="menuitem" href="/wp-admin/profile.php"><img alt="" src="http://2.gravatar.com/avatar/e6d67fed862c439aa6e911ce49c7857d?s=64&#038;d=mm&#038;r=g" srcset="http://2.gravatar.com/avatar/e6d67fed862c439aa6e911ce49c7857d?s=128&#038;d=mm&#038;r=g 2x" class="avatar avatar-64 photo" height="64" width="64" loading="lazy" decoding="async"><span class="display-name">admin</span><span class="display-name edit-profile">Edit Profile</span></a></li>
<li id="wp-admin-bar-logout"><a class="ab-item" role="menuitem" href="/wp-login.php?action=logout#038;_wpnonce=2a0ec32cdc">Log Out</a></li>
</ul></div>
</li></ul>			</div>
		</div>

		
<div id="wpbody" role="main">

<div id="wpbody-content">
		<div id="screen-meta" class="metabox-prefs">

			<div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Contextual Help Tab">
				<div id="contextual-help-back"></div>
				<div id="contextual-help-columns">
					<div class="contextual-help-tabs">
						<ul>
						
							<li id="tab-link-overview" class="active">
								<a href="#tab-panel-overview" aria-controls="tab-panel-overview">
									Overview								</a>
							</li>
													</ul>
					</div>

										<div class="contextual-help-sidebar">
						<p><strong>For more information:</strong></p>
<p><a href="https://wordpress.org/documentation/article/plugins-editor-screen/">Documentation on Editing Plugins</a></p>
<p><a href="https://developer.wordpress.org/plugins/">Documentation on Writing Plugins</a></p>
<p><a href="https://wordpress.org/support/forums/">Support forums</a></p>					</div>
					
					<div class="contextual-help-tabs-wrap">
						
							<div id="tab-panel-overview" class="help-tab-content active">
								<p>You can use the plugin file editor to make changes to any of your plugins&#8217; individual PHP files. Be aware that if you make changes, plugins updates will overwrite your customizations.</p>
<p>Choose a plugin to edit from the dropdown menu and click the Select button. Click once on any file name to load it in the editor, and make your changes. Do not forget to save your changes (Update File) when you are finished.</p>
<p>The documentation menu below the editor lists the PHP functions recognized in the plugin file. Clicking Look Up takes you to a web page about that particular function.</p>
<p id="editor-keyboard-trap-help-1">When using a keyboard to navigate:</p>
<ul>
<li id="editor-keyboard-trap-help-2">In the editing area, the Tab key enters a tab character.</li>
<li id="editor-keyboard-trap-help-3">To move away from this area, press the Esc key followed by the Tab key.</li>
<li id="editor-keyboard-trap-help-4">Screen reader users: when in forms mode, you may need to press the Esc key twice.</li>
</ul>
<p>If you want to make changes but do not want them to be overwritten when the plugin is updated, you may be ready to think about writing your own plugin. For information on how to edit plugins, write your own from scratch, or just better understand their anatomy, check out the links below.</p>							</div>
												</div>
				</div>
			</div>
				</div>
				<div id="screen-meta-links">
					<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Help</button>
			</div>
				</div>
		<div class="wrap">
<h1>Edit Plugins</h1>


<div class="fileedit-sub">
<div class="alignleft">
<h2>
	Editing <strong>akismet/akismet.php</strong> (inactive)</h2>
</div>
<div class="alignright">
	<form action="plugin-editor.php" method="get">
		<label for="plugin" id="theme-plugin-editor-selector">Select plugin to edit: </label>
		<select name="plugin" id="plugin">
		
	<option value="akismet/akismet.php" selected>Akismet Anti-spam: Spam Protection</option>
	<option value="create-block-theme/create-block-theme.php">Create Block Theme</option>
	<option value="wp-docs-plugin/plugin.php">Documentation Pages</option>
	<option value="gutenberg/gutenberg.php">Gutenberg</option>
	<option value="hello.php">Hello Dolly</option>
	<option value="simply-static/simply-static.php">Simply Static</option>		</select>
		<input type="submit" name="Submit" id="Submit" class="button" value="Select">	</form>
</div>
<br class="clear">
</div>

<div id="templateside">
	<h2 id="plugin-files-label">Plugin Files</h2>

		<ul role="tree" aria-labelledby="plugin-files-label">
	<li role="treeitem" tabindex="-1" aria-expanded="true" aria-level="1" aria-posinset="1" aria-setsize="1">
		<ul role="group">
					<li role="none" class="current-file">
			<a role="treeitem" tabindex="0" href="/wp-admin/plugin-editor.php?file=akismet%2Fakismet.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="1" aria-posinset="13">
				<span class="notice notice-info">akismet.php</span>			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fclass.akismet-admin.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="2" aria-posinset="13">
				class.akismet-admin.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fclass.akismet-cli.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="3" aria-posinset="13">
				class.akismet-cli.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fclass.akismet-widget.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="4" aria-posinset="13">
				class.akismet-widget.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fclass.akismet.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="5" aria-posinset="13">
				class.akismet.php			</a>
		</li>
					<li role="treeitem" aria-expanded="true" tabindex="-1" aria-level="2" aria-setsize="13" aria-posinset="6">
				<span class="folder-label">views <span class="screen-reader-text">
					folder				</span><span aria-hidden="true" class="icon"></span></span>
				<ul role="group" class="tree-folder">		<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Ftitle.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="1" aria-posinset="12">
				title.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fconnect-jp.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="2" aria-posinset="12">
				connect-jp.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fnotice.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="3" aria-posinset="12">
				notice.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fconfig.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="4" aria-posinset="12">
				config.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fstats.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="5" aria-posinset="12">
				stats.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Flogo.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="6" aria-posinset="12">
				logo.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Factivate.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="7" aria-posinset="12">
				activate.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fget.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="8" aria-posinset="12">
				get.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fsetup.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="9" aria-posinset="12">
				setup.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fpredefined.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="10" aria-posinset="12">
				predefined.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fenter.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="11" aria-posinset="12">
				enter.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fviews%2Fstart.php#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="12" aria-posinset="12">
				start.php			</a>
		</li>
		</ul>
			</li>
						<li role="treeitem" aria-expanded="true" tabindex="-1" aria-level="2" aria-setsize="13" aria-posinset="7">
				<span class="folder-label">_inc <span class="screen-reader-text">
					folder				</span><span aria-hidden="true" class="icon"></span></span>
				<ul role="group" class="tree-folder">			<li role="treeitem" aria-expanded="true" tabindex="-1" aria-level="3" aria-setsize="8" aria-posinset="1">
				<span class="folder-label">rtl <span class="screen-reader-text">
					folder				</span><span aria-hidden="true" class="icon"></span></span>
				<ul role="group" class="tree-folder">		<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Frtl%2Fakismet-rtl.css#038;plugin=akismet%2Fakismet.php" aria-level="4" aria-setsize="1" aria-posinset="2">
				akismet-rtl.css			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Frtl%2Fakismet-admin-rtl.css#038;plugin=akismet%2Fakismet.php" aria-level="4" aria-setsize="2" aria-posinset="2">
				akismet-admin-rtl.css			</a>
		</li>
		</ul>
			</li>
					<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fakismet.css#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="2" aria-posinset="8">
				akismet.css			</a>
		</li>
					<li role="treeitem" aria-expanded="true" tabindex="-1" aria-level="3" aria-setsize="8" aria-posinset="3">
				<span class="folder-label">img <span class="screen-reader-text">
					folder				</span><span aria-hidden="true" class="icon"></span></span>
				<ul role="group" class="tree-folder">		<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fimg%2Fakismet-refresh-logo.svg#038;plugin=akismet%2Fakismet.php" aria-level="4" aria-setsize="1" aria-posinset="3">
				akismet-refresh-logo.svg			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fimg%2Farrow-left.svg#038;plugin=akismet%2Fakismet.php" aria-level="4" aria-setsize="2" aria-posinset="3">
				arrow-left.svg			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fimg%2Ficon-external.svg#038;plugin=akismet%2Fakismet.php" aria-level="4" aria-setsize="3" aria-posinset="3">
				icon-external.svg			</a>
		</li>
		</ul>
			</li>
						<li role="treeitem" aria-expanded="true" tabindex="-1" aria-level="3" aria-setsize="8" aria-posinset="4">
				<span class="folder-label">fonts <span class="screen-reader-text">
					folder				</span><span aria-hidden="true" class="icon"></span></span>
				<ul role="group" class="tree-folder">		<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Ffonts%2Finter.css#038;plugin=akismet%2Fakismet.php" aria-level="4" aria-setsize="1" aria-posinset="1">
				inter.css			</a>
		</li>
		</ul>
			</li>
					<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fakismet-admin.css#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="5" aria-posinset="8">
				akismet-admin.css			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fakismet-frontend.js#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="6" aria-posinset="8">
				akismet-frontend.js			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fakismet-admin.js#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="7" aria-posinset="8">
				akismet-admin.js			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2F_inc%2Fakismet.js#038;plugin=akismet%2Fakismet.php" aria-level="3" aria-setsize="8" aria-posinset="8">
				akismet.js			</a>
		</li>
		</ul>
			</li>
					<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fchangelog.txt#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="8" aria-posinset="13">
				changelog.txt			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fwrapper.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="9" aria-posinset="13">
				wrapper.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Findex.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="10" aria-posinset="13">
				index.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2FLICENSE.txt#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="11" aria-posinset="13">
				LICENSE.txt			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Fclass.akismet-rest-api.php#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="12" aria-posinset="13">
				class.akismet-rest-api.php			</a>
		</li>
				<li role="none" class="">
			<a role="treeitem" tabindex="-1" href="/wp-admin/plugin-editor.php?file=akismet%2Freadme.txt#038;plugin=akismet%2Fakismet.php" aria-level="2" aria-setsize="13" aria-posinset="13">
				readme.txt			</a>
		</li>
				</ul>
	</li>
</ul>
</div>

<form name="template" id="template" action="plugin-editor.php" method="post">
	<input type="hidden" id="nonce" name="nonce" value="ceb622d951"><input type="hidden" name="_wp_http_referer" value="/wp-admin/plugin-editor.php?simply_static_page=81">	<div>
		<label for="newcontent" id="theme-plugin-editor-label">Selected file content:</label>
		<textarea cols="70" rows="25" name="newcontent" id="newcontent" aria-describedby="editor-keyboard-trap-help-1 editor-keyboard-trap-help-2 editor-keyboard-trap-help-3 editor-keyboard-trap-help-4">&lt;?php
/**
 * @package Akismet
 */
/*
Plugin Name: Akismet Anti-spam: Spam Protection
Plugin URI: https://akismet.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to &lt;strong&gt;protect your blog from spam&lt;/strong&gt;. Akismet Anti-spam keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 5.3.2
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Automattic - Anti-spam Team
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2023 Automattic, Inc.
*/

// Make sure we don&#039;t expose any info if called directly
if ( !function_exists( &#039;add_action&#039; ) ) {
	echo &#039;Hi there!  I\&#039;m just a plugin, not much I can do when called directly.&#039;;
	exit;
}

define( &#039;AKISMET_VERSION&#039;, &#039;5.3.2&#039; );
define( &#039;AKISMET__MINIMUM_WP_VERSION&#039;, &#039;5.8&#039; );
define( &#039;AKISMET__PLUGIN_DIR&#039;, plugin_dir_path( __FILE__ ) );
define( &#039;AKISMET_DELETE_LIMIT&#039;, 10000 );

register_activation_hook( __FILE__, array( &#039;Akismet&#039;, &#039;plugin_activation&#039; ) );
register_deactivation_hook( __FILE__, array( &#039;Akismet&#039;, &#039;plugin_deactivation&#039; ) );

require_once( AKISMET__PLUGIN_DIR . &#039;class.akismet.php&#039; );
require_once( AKISMET__PLUGIN_DIR . &#039;class.akismet-widget.php&#039; );
require_once( AKISMET__PLUGIN_DIR . &#039;class.akismet-rest-api.php&#039; );

add_action( &#039;init&#039;, array( &#039;Akismet&#039;, &#039;init&#039; ) );

add_action( &#039;rest_api_init&#039;, array( &#039;Akismet_REST_API&#039;, &#039;init&#039; ) );

if ( is_admin() || ( defined( &#039;WP_CLI&#039; ) &amp;&amp; WP_CLI ) ) {
	require_once( AKISMET__PLUGIN_DIR . &#039;class.akismet-admin.php&#039; );
	add_action( &#039;init&#039;, array( &#039;Akismet_Admin&#039;, &#039;init&#039; ) );
}

//add wrapper class around deprecated akismet functions that are referenced elsewhere
require_once( AKISMET__PLUGIN_DIR . &#039;wrapper.php&#039; );

if ( defined( &#039;WP_CLI&#039; ) &amp;&amp; WP_CLI ) {
	require_once( AKISMET__PLUGIN_DIR . &#039;class.akismet-cli.php&#039; );
}
</textarea>
		<input type="hidden" name="action" value="update">
		<input type="hidden" name="file" value="akismet/akismet.php">
		<input type="hidden" name="plugin" value="akismet/akismet.php">
	</div>

			<div id="documentation" class="hide-if-no-js">
			<label for="docs-list">Documentation:</label>
			<select name="docs-list" id="docs-list"><option value="">Function Name&hellip;</option>
<option value="add_action">add_action()</option>
<option value="define">define()</option>
<option value="defined">defined()</option>
<option value="function_exists">function_exists()</option>
<option value="is_admin">is_admin()</option>
<option value="plugin_dir_path">plugin_dir_path()</option>
<option value="register_activation_hook">register_activation_hook()</option>
<option value="register_deactivation_hook">register_deactivation_hook()</option></select>			<input disabled id="docs-lookup" type="button" class="button" value="Look Up" onclick="if ( '' !== jQuery('#docs-list').val() ) { window.open( 'https://api.wordpress.org/core/handbook/1.0/?function=' + escape( jQuery( '#docs-list' ).val() ) + '&amp;locale=en_US&amp;version=6.5.2&amp;redirect=true'); }">
		</div>
	
			<div class="editor-notices">
				</div>
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="Update File">			<span class="spinner"></span>
		</p>
	
		<script type="text/html" id="tmpl-wp-file-editor-notice">
		<div class="notice inline notice-{{ data.type || 'info' }} {{ data.alt ? 'notice-alt' : '' }} {{ data.dismissible ? 'is-dismissible' : '' }} {{ data.classes || '' }}">
			<# if ( 'php_error' === data.code ) { #>
				<p>
					Your PHP code changes were not applied due to an error on line {{ data.line }} of file {{ data.file }}. Please fix and try saving again.				</p>
				<pre>{{ data.message }}</pre>
			<# } else if ( 'file_not_writable' === data.code ) { #>
				<p>
					You need to make this file writable before you can save your changes. See <a href="https://wordpress.org/documentation/article/changing-file-permissions/">Changing File Permissions</a> for more information.				</p>
			<# } else { #>
				<p>{{ data.message || data.code }}</p>

				<# if ( 'lint_errors' === data.code ) { #>
					<p>
						<# var elementId = 'el-' + String( Math.random() ); #>
						<input id="{{ elementId }}"  type="checkbox">
						<label for="{{ elementId }}">Update anyway, even though it might break your site?</label>
					</p>
				<# } #>
			<# } #>
			<# if ( data.dismissible ) { #>
				<button type="button" class="notice-dismiss"><span class="screen-reader-text">
					Dismiss				</span></button>
			<# } #>
		</div>
	</script>
	</form>
<br class="clear">
</div>
	<div id="file-editor-warning" class="notification-dialog-wrap file-editor-warning hide-if-no-js hidden">
		<div class="notification-dialog-background"></div>
		<div class="notification-dialog">
			<div class="file-editor-warning-content">
				<div class="file-editor-warning-message">
					<h1>Heads up!</h1>
					<p>You appear to be making direct edits to your plugin in the WordPress dashboard. Editing plugins directly is not recommended as it may introduce incompatibilities that break your site and your changes may be lost in future updates.</p>
					<p>If you absolutely have to make direct edits to this plugin, use a file manager to create a copy with a new name and hang on to the original. That way, you can re-enable a functional version if something goes wrong.</p>
				</div>
				<p>
					<a class="button file-editor-warning-go-back" href="/wp-admin/">Go back</a>
					<button type="button" class="file-editor-warning-dismiss button button-primary">I understand</button>
				</p>
			</div>
		</div>
	</div>
	
<div class="clear"></div>
</div>
<!-- wpbody-content -->
<div class="clear"></div>
</div>
<!-- wpbody -->
<div class="clear"></div>
</div>
<!-- wpcontent -->

<div id="wpfooter" role="contentinfo">
		<p id="footer-left" class="alignleft">
		<span id="footer-thankyou">Thank you for creating with <a href="https://wordpress.org/">WordPress</a>.</span>	</p>
	<p id="footer-upgrade" class="alignright">
		Version 6.5.2	</p>
	<div class="clear"></div>
</div>
	<div id="wp-auth-check-wrap" class="hidden">
	<div id="wp-auth-check-bg"></div>
	<div id="wp-auth-check">
	<button type="button" class="wp-auth-check-close button-link"><span class="screen-reader-text">
		Close dialog	</span></button>
			<div id="wp-auth-check-form" class="loading" data-src="http://127.0.0.1:9400/wp-login.php?interim-login=1&#038;wp_lang=en_US"></div>
			<div class="wp-auth-fallback">
		<p><b class="wp-auth-fallback-expired" tabindex="0">Session expired</b></p>
		<p><a href="/wp-login.php" target="_blank">Please log in again.</a>
		The login page will open in a new tab. After logging in you can close it and return to this page.</p>
	</div>
	</div>
	</div>
	<script src="/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=hoverIntent&amp;ver=6.5.2"></script>
<script src="/wp-admin/js/common.min.js?ver=6.5.2" id="common-js"></script>
<script src="/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
<script src="/wp-includes/js/admin-bar.min.js?ver=6.5.2" id="admin-bar-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};</script>
<script src="/wp-includes/js/wp-util.min.js?ver=6.5.2" id="wp-util-js"></script>
<script src="/wp-includes/js/wp-sanitize.min.js?ver=6.5.2" id="wp-sanitize-js"></script>
<script src="/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script src="/wp-content/plugins/gutenberg/build/dom-ready/index.min.js?ver=222ad38e3e5e302c8bbf" id="wp-dom-ready-js"></script>
<script src="/wp-content/plugins/gutenberg/build/a11y/index.min.js?ver=9061ce25a6ee8a006b52" id="wp-a11y-js"></script>
<script src="/wp-admin/js/theme-plugin-editor.min.js?ver=6.5.2" id="wp-theme-plugin-editor-js"></script>
<script id="wp-theme-plugin-editor-js-after">jQuery( function( $ ) { wp.themePluginEditor.init( $( "#template" ), {"codeEditor":{"codemirror":{"indentUnit":4,"indentWithTabs":true,"inputStyle":"contenteditable","lineNumbers":true,"lineWrapping":true,"styleActiveLine":true,"continueComments":true,"extraKeys":{"Ctrl-Space":"autocomplete","Ctrl-\/":"toggleComment","Cmd-\/":"toggleComment","Alt-F":"findPersistent","Ctrl-F":"findPersistent","Cmd-F":"findPersistent"},"direction":"ltr","gutters":[],"mode":"php","autoCloseBrackets":true,"autoCloseTags":true,"matchBrackets":true,"matchTags":{"bothTags":true}},"csslint":{"errors":true,"box-model":true,"display-property-grouping":true,"duplicate-properties":true,"known-properties":true,"outline-none":true},"jshint":{"boss":true,"curly":true,"eqeqeq":true,"eqnull":true,"es3":true,"expr":true,"immed":true,"noarg":true,"nonbsp":true,"onevar":true,"quotmark":"single","trailing":true,"undef":true,"unused":true,"browser":true,"globals":{"_":false,"Backbone":false,"jQuery":false,"JSON":false,"wp":false}},"htmlhint":{"tagname-lowercase":true,"attr-lowercase":true,"attr-value-double-quotes":false,"doctype-first":false,"tag-pair":true,"spec-char-escape":true,"id-unique":true,"src-not-empty":true,"attr-no-duplication":true,"alt-require":true,"space-tab-mixed-disabled":"tab","attr-unsafe-chars":true}}} ); } )
wp.themePluginEditor.themeOrPlugin = "plugin";</script>
<script src="/wp-admin/js/svg-painter.js?ver=6.5.2" id="svg-painter-js"></script>
<script id="heartbeat-js-extra">var heartbeatSettings = {"nonce":"3a21251357"};</script>
<script src="/wp-includes/js/heartbeat.min.js?ver=6.5.2" id="heartbeat-js"></script>
<script src="/wp-includes/js/wp-auth-check.min.js?ver=6.5.2" id="wp-auth-check-js"></script>
	<script type="text/javascript">var compressionNonce = "5bd3eb334a";
	var testCompression = {
		get : function(test) {
			var x;
			if ( window.XMLHttpRequest ) {
				x = new XMLHttpRequest();
			} else {
				try{x=new ActiveXObject('Msxml2.XMLHTTP');}catch(e){try{x=new ActiveXObject('Microsoft.XMLHTTP');}catch(e){};}
			}

			if (x) {
				x.onreadystatechange = function() {
					var r, h;
					if ( x.readyState == 4 ) {
						r = x.responseText.substr(0, 18);
						h = x.getResponseHeader('Content-Encoding');
						testCompression.check(r, h, test);
					}
				};

				x.open('GET', ajaxurl + '?action=wp-compression-test&test='+test+'&_ajax_nonce='+compressionNonce+'&'+(new Date()).getTime(), true);
				x.send('');
			}
		},

		check : function(r, h, test) {
			if ( ! r && ! test )
				this.get(1);

			if ( 1 == test ) {
				if ( h && ( h.match(/deflate/i) || h.match(/gzip/i) ) )
					this.get('no');
				else
					this.get(2);

				return;
			}

			if ( 2 == test ) {
				if ( '"wpCompressionTest' === r )
					this.get('yes');
				else
					this.get('no');
			}
		}
	};
	testCompression.check();</script>
	
<div class="clear"></div>
</div>
<!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload==='function')wpOnload();</script>
</body>
</html>