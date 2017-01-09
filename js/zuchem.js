jQuery(document).ready(function() {

	jQuery('.full-content').hide();

	jQuery('a.full-content-link').click(function() {

		jQuery(this).parent('div').next('div').toggle(800);
		return false;

	});

});