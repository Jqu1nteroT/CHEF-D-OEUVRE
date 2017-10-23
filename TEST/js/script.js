jQuery(document).ready(function () {
	minWrapHeight();
	
})

jQuery(window).on('resize', minWrapHeight);

/* funcion para matener el footer siempre abajo*/

function minWrapHeight () {
	var content = jQuery('.page-content');
	content.removeAttr('style');

	var bodyHeight = jQuery(document).outerHeight();
	var headerAndFooterHeight = jQuery('header').outerHeight() + jQuery('footer').outerHeight();

	content.height( (bodyHeight - headerAndFooterHeight) + 'px');
}