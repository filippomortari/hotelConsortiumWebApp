$("#dashboard").click(function() {
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o : 'Dashboard',
		},
		success : function(data) {
			$('#content').empty();
			$('#content').append(data.html);
			if (data.typeUser == 'azienda')
				$("#prof_az_td").css("diplay", "inline");
			else
				$("#prof_az_td").css("diplay", "none");
		},
		dataType : "json"
	});
});