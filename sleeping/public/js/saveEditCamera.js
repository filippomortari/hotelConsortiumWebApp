$(function (){
$(".editDatiGeneraliRoom").click(function (){
		$(this).css("display", "none");
		$(".saveDatiGeneraliRoom").css("display", "inline");
		$("#datiCamera .dashNoEditing").removeAttr("disabled");
		$("#datiCamera .dashNoEditing").css("border","1px solid");
	});
});


$(function (){
$(".saveDatiGeneraliRoom").click(function (){
		var dati = serializeForm("#editRoomForm");
		
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				o : 'EditRoom',
				dati: dati
			},
			success : function(data){
				if(data == 1)
					myAlert($("#cameraMsg"));
				else
					myAlert($("#cameraNoMsg"));
				location.reload(true);
			},
			dataType : "json"
		});// AJAX CLOSED
	});
});