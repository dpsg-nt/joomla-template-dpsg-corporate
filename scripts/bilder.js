jQuery(document).ready(function() {

	if (jQuery('#gallery').length > 0) {
		document.onkeydown = function (event) {
			if (jQuery('a.next').length > 0) {
				if (event.keyCode == 39) {
					jQuery('a.next')[0].click();
					return false;
				} 
			}
			if (jQuery('a.previous').length >0) {
				if (event.keyCode == 37) {
					jQuery('a.previous')[0].click();
					return false;
				}
			}
		};
	}
});