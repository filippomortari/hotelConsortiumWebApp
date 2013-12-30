$('#logout').click(function () {
	var jqxhr = $.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o : 'Logout',
		},
		success: function(data){
			window.location="index.php";
		},
		error: function(jqXHR, textStatus, errorThrown) {
				  alert( "Request failed: " + textStatus + " "+ errorThrown );
		},
		dataType : "json"
	});
});
