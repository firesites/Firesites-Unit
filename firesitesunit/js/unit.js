/* Firesites Unit */
var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

jQuery(window).load(function(){
	jQuery('#colophon').stickyFooter();
	
	jQuery('#site-navigation h3').addClass('closed');
	
	jQuery('#site-navigation h3.closed').live('click', function(){
		jQuery('#site-navigation > div').slideDown();
		jQuery(this).removeClass('closed');
		jQuery(this).addClass('open');
	});
	
	jQuery('#site-navigation h3.open').live('click', function(){
		jQuery('#site-navigation > div').slideUp();
		jQuery(this).removeClass('open')
		jQuery(this).addClass('closed');
	});
});