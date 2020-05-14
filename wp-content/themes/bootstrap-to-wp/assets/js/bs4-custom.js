(function($) {
	'use strict'
	
	$('[data-toggle="offcanvas"]').on('click', function () {
    	$('.offcanvas-collapse').toggleClass('open')
  })

	var $hamburger = $(".hamburger");
		$hamburger.on("click", function(e) {
		$hamburger.toggleClass("is-active");
	// Do something else, like open/close menu
	});


	
})( jQuery );