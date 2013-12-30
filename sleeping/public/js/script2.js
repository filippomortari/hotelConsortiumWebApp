// Set up Sliders
// **************
$(function() {

	$('#slider1').anythingSlider(
			{
				theme : 'metallic',
				easing : 'easeInOutBack',
				navigationFormatter : function(index, panel) {
					return [ 'Slab', 'Parking Lot', 'Drive', 'Glorius Dawn',
							'Bjork?', 'Traffic Circle' ][index - 1];
				},
				onSlideComplete : function(slider) {
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});

	$('#slider2')
			.anythingSlider(
					{
						mode : 'f', // fade mode - new in v1.8!
						resizeContents : false, // If true, solitary
												// images/objects in the panel
												// will expand to fit the
												// viewport
						navigationSize : 3, // Set this to the maximum number of
											// visible navigation tabs; false to
											// disable
						navigationFormatter : function(index, panel) { // Format
																		// navigation
																		// labels
																		// with
																		// text
							return [ 'Recipe', 'Quote', 'Image', 'Quote #2',
									'Image #2' ][index - 1];
						},
						onSlideBegin : function(e, slider) {
							// keep the current navigation tab in view
							slider.navWindow(slider.targetPage);
						}
					});

	// tooltips for first demo
	$.jatt();

});