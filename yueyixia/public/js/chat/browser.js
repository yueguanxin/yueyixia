$(function() {
	var b_v = navigator.appVersion;
	var IE6 = b_v.search(/MSIE 6/i) != -1;
	var IE7 = b_v.search(/MSIE 7/i) != -1;
	if (IE6) {
		window.location.href = '/html/doc/upgrade-your-browser.html?referrer=' + location.href;
	} else if (IE7) {
		window.location.href = '/html/doc/upgrade-your-browser.html?referrer=' + location.href;
	};
});