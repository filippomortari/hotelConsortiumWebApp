$(function (){
	var form = $("#uploadLogoform");
	$("#loadFile").click(function (e){
		e.preventDefault();
		$("#myfile").click();
		$("#myfile").change(function(){
			form.submit();
	    });
	});
});