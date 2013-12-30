$(function() {
	$(".column").sortable({
		connectWith : ".column"
	});
	
	$(".portlet")
			.addClass(
					"ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
			.find(".portlet-header")
			.addClass("ui-widget-header ui-corner-all")
			.prepend(
					"<span class='ui-icon ui-icon-minusthick icon-div'></span> <span class='ui-icon ui-icon-closethick close-div'></span>")
			.end().find(".portlet-content");

	$(".portlet-header .icon-div").click(
			function() {
				$(this).toggleClass("ui-icon-minusthick").toggleClass(
						"ui-icon-plusthick");
				$(this).parents(".portlet:first").find(".portlet-content")
						.toggle();
			});
	$(".portlet-header .close-div").click(
			function() {
				$(this).parents(".portlet:first").hide();
	});

	$(".column").disableSelection();

	$(".portlet-content").selectable({
		disabled : true
	});
});