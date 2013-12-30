function myGallery() {

	$(".img-thumb").click(function() {

		var img_source = $(this).attr("src");
		setTimeout(function() {
			$("#big-photo img").attr("src", img_source);
			$("#big-photo").show("blind", {
				direction : "horizontal"
			}, 1000);
		}, 1000);

		$("#big-photo").hide("blind", {
			direction : "vertical"
		}, 900);
	});

	$(".thumb-slider-title").click(function() {
		alert("Up/Down");
	});

	$("#big-photo").click(function() {
		var $photo_source = $("#big-photo img").attr("src");
		$('.overlay').fadeIn('fast');
		$('#photo_screen img').attr("src",$photo_source);
		$('#photo_screen').fadeIn('slow');
	});

	$(".overlay").click(function() {
		$(this).fadeOut('fast');
		$('#photo_screen').hide();
	});
}