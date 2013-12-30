// Demo functions
// **************
$(function() {

	$(".js").chili();

	// External Link with callback function
	$("#slide-jump").click(function() {
		$('#slider2').anythingSlider(4, function(slider) { /*
															 * alert('Now on
															 * page ' +
															 * slider.currentPage);
															 */
		});
		return false;
	});

	// External Link
	$("a.muppet").click(function() {
		$('#slider1').anythingSlider(5);
		$(document).scrollTop(0); // make the page scroll to the top so you
									// can watch the video
		return false;
	});

	// Report Events to console & features list
	$('#slider1, #slider2')
			.bind(
					'before_initialize initialized swf_completed slideshow_start slideshow_stop slideshow_paused slideshow_unpaused slide_init slide_begin slide_complete',
					function(e, slider) {
						// show object ID + event (e.g. "slider1: slide_begin")
						var txt = slider.$el[0].id + ': ' + e.type
								+ ', now on panel #' + slider.currentPage;
						$('#status').text(txt);
						if (window.console && window.console.firebug) {
							console.debug(txt);
						} // added window.console.firebug to make this work in
							// Opera
					});

	// Theme Selector (This is really for demo purposes only)
	var themes = [ 'minimalist-round', 'minimalist-square', 'metallic',
			'construction', 'cs-portfolio' ];
	$('#currentTheme').change(
			function() {
				var theme = $(this).val();
				$('#slider1').closest('div.anythingSlider').removeClass(
						$.map(themes, function(t) {
							return 'anythingSlider-' + t;
						}).join(' ')).addClass('anythingSlider-' + theme);
				$('#slider1').anythingSlider(); // update slider - needed to fix
												// navigation tabs
			});

	// Add a slide
	var imageNumber = 1;
	$('button.add').click(
			function() {
				$('#slider1').append(
						'<li><img src="demos/images/slide-tele-'
								+ (++imageNumber % 2 + 1)
								+ '.jpg" alt="" /></li>').anythingSlider(); // update
																			// the
																			// slider
			});
	$('button.remove').click(function() {
		$('#slider1 > li:not(.cloned):last').remove();
		$('#slider1').anythingSlider(); // update the slider
	});

});