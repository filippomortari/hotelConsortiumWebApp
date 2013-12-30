$("#sliderBoxSearch").click(function() {
	if ($("#search #div_form").css("display") == 'none'){
		$("#search #div_form").show("slow");
		$("#sliderBoxSearch").css("background-image",'url("./sleeping/public/img/slideBoxSearchClose.png")');
	}
	else{
		$("#search #div_form").hide("slow");
		$("#sliderBoxSearch").css("background-image",'url("./sleeping/public/img/slideBoxSearch.png")');
	}
});


$("#sliderBox").click(function() {
	if ($("#menuBarEffect").css("display") == 'none'){
		$("#menuBarEffect").show("slow");
		$("#sliderBox").css("background-image",'url("./sleeping/public/img/slideBoxSearchClose.png")');
	}
	else {
		$("#menuBarEffect").hide("slow");
		$("#sliderBox").css("background-image",'url("./sleeping/public/img/slideBoxSearch.png")');
	}
});
