
	//Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    
	$('.tootlip').tooltip();
    
	$("ul#ticker01").liScroll();
    
	
wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
