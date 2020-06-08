
jQuery('a[href^="#"]').on('click', function(event) {
    var target = jQuery(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
