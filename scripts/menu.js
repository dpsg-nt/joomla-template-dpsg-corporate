jQuery(window).on('load',  function() {

	//Add onclick action to the nav button.
	jQuery('.btn-nav_main').click( function() { showMenu(); return false; } );
	
	//Check the scrollposition and make the menu position fixed.
	jQuery(window).scroll(function(event) {
		if (jQuery(window).scrollTop() > 150) {
			jQuery("#nav").addClass("fixed");
		} else {
			jQuery("#nav").removeClass("fixed");
		}
	});
 });
 
 var menuVisible = false;
 
 function showMenu() {
	if(menuVisible == false) {
		jQuery("ul.menu").addClass("visible");
		menuVisible = true;
	} else {
		jQuery("ul.menu").removeClass("visible");
		menuVisible = false;
	}
 }