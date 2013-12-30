$("#addStruttura").click(function() {
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			gc: 'HotelSignup'
		},
		success : function(data) {
			$('#content').empty();
			$('#content').append(data.html);
			
			// inserisco gli script
			$.each(data.js, function(i, item) {
				addScript(item);
			});
		},
		dataType:"json"
	});// AJAX CLOSED
});