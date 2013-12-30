$("#addRoom").click(function() {
	var dati = serializeForm("#addRoom-form");
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o: 'AddRoom',
			room: dati
		},
		success : function(data) {
			alert("camere inserite");
			location.reload(true);
		},
		dataType:"json"
	});// AJAX CLOSED
});

$("#aggiungiCamera").click(function(){
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			gc: 'AddRoom',
		},
		success : function(data) {
			$.each(data.js, function(i, item) {
				addScript(item);
			});
			$("#addRoomWrapper").empty();
			$("#addRoomWrapper").append(data.html);
			$('.overlay').fadeIn('fast');
			$('#addRoomWrapper').css("display","block");
			$('#addRoomWrapper').fadeIn('slow');
		},
		dataType:"json"
	});// AJAX CLOSED
});