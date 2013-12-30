$(function (){
	$("#prenota").click(function (){
		var checkIn = $("#check-in").val();
		var checkOut = $("#check-out").val();
		var idCamera = serializeForm("#cameraSelezionata");
		
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				o : 'Prenotazione',
				checkIn: checkIn,
				checkOut: checkOut,
				idCamera: idCamera
			},
			success : function(data){
				console.log(data);
				if(data == 1)
					myAlert($("#prenotazioneMsg"));
				else{
					myAlert($("#prenotazioneNoMsg"));
				}
				location.reload(true);
			},
			dataType : "json"
		});
	});
});