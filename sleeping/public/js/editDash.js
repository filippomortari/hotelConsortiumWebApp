//contatto
$(function (){
	$(".lastLine .cellBtn #editContact").click(function() {
	$("#dashDataContacts .dashNoEditing")
			.removeAttr("disabled");
	
	$("#contatto .lastLine .labelSaveData .lineHidden")
			.css("display", "inline");
	
	$("#contatto .lastLine .cellBtn .editBtn")
			.css("display", "none");
	
	$("#contatto .lastLine .cellBtn .saveBtn")
			.css("display", "inline");
	
	$(".lastLine .cellBtn #saveContact").click(function() {	
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				o : 'EditData',
				telefono : $("#phoneNumber").val(),
				mobile : $("#mobilePhone").val(),
				fax : $("#faxNumber").val(),
				email : $("#email").val(),
				edit : "Contatto"
			},
			success : function(	data) {
			if (data == 1) {
				$("#contatto .lastLine .labelSaveData .lineHidden").css("display","none");
				$("#contatto .lastLine .cellBtn .editBtn").css("display","inline");
				$("#contatto .lastLine .cellBtn .saveBtn").css("display","none");
			} else
				alert("errore, riprovare!!");
			},
			dataType : "json"
		});// AJAX CLOSED
	});
	});
});

//datiGenerali
$(function (){
	$("#editDatiGenerali").click(function() {
		$("#datiGenerali").css("position", "relative");
		$("#datiGenerali").css("z-index", "4000");
		$("#dashData .dashNoEditing").removeAttr("disabled");
		$("#dashData #conf-password").css("display","table-row");
		$("#dashData #ricaricaCredito").css("display","table-row");
		$("#datiGenerali .lastLine .labelSaveData .lineHidden").css("display", "inline");
		$("#datiGenerali .lastLine .cellBtn .editBtn").css("display", "none");
		$("#datiGenerali .lastLine .cellBtn .saveBtn").css("display", "inline");
		$(".lastLine .cellBtn #saveDatiGenerali").click(function() {
			$.ajax({
				type : 'POST',
				url : "index.php",
				data : {
					o : 'EditData',
					pwd : $.md5($('#password').val()),
					edit : "DatiGenerali"
				},
				success : function(data) {
					if (data == 1) {
						$("#dashData #password").val($.md5("#password"));
						$("#dashData #ricaricaCredito").css("display","none");
						$("#dashData #conf-password").css("display","none");
						$("#datiGenerali .lastLine .labelSaveData .lineHidden").css("display","none");
						$("#datiGenerali .lastLine .cellBtn .editBtn").css("display","inline");
						$("#datiGenerali .lastLine .cellBtn .saveBtn").css("display","none");
					} else
						alert("errore, riprovare!!");
				},
				dataType : "json"
			});// AJAX CLOSED
		});
	});
});

//Residenza
$(function (){
	$(".lastLine .cellBtn #editResidenza").click(function() {
		$("#dashDataAddress .dashNoEditing").removeAttr("disabled");
		$("#residenza .lastLine .labelSaveData .lineHidden").css("display", "inline");
		$("#residenza .lastLine .cellBtn .editBtn").css("display", "none");
		$("#residenza .lastLine .cellBtn .saveBtn").css("display", "inline");
		$(".lastLine .cellBtn #saveResidenza").click(function() {
			$.ajax({
				type : 'POST',
				url : "index.php",
				data : {
					o : 'EditData',
					via : $("#via").val(),
					citta : $("#citta").val(),
					prov : $("#prov").val(),
					cap : $("#cap").val(),
					edit : "Residenza"
				},
			success : function(data) {
				if (data == 1) {
					$("#residenza .lastLine .labelSaveData .lineHidden").css("display","none");
					$("#residenza .lastLine .cellBtn .editBtn").css("display","inline");
					$("#residenza .lastLine .cellBtn .saveBtn").css("display","none");
				} else
					alert("errore, riprovare!!");
			},
			dataType : "json"
			});// AJAX CLOSED
		});
	});	
});

//Domicilio
$(function (){
	$(".lastLine .cellBtn #editResidenza").click(function() {
		$("#dashDataAddress .dashNoEditing").removeAttr("disabled");
		$("#domicilio .lastLine .labelSaveData .lineHidden").css("display", "inline");
		$("#domicilio .lastLine .cellBtn .editBtn").css("display", "none");
		$("#domicilio .lastLine .cellBtn .saveBtn").css("display", "inline");
		$(".lastLine .cellBtn #saveDomicilio").click(function() {
			$.ajax({
				type : 'POST',
				url : "index.php",
				data : {
					o : 'EditData',
					via : $("#via").val(),
					citta : $("#citta").val(),
					prov : $("#prov").val(),
					cap : $("#cap").val(),
					edit : "Domicilio"
				},
			success : function(data) {
				if (data == 1) {
					$("#domicilio .lastLine .labelSaveData .lineHidden").css("display","none");
					$("#domicilio .lastLine .cellBtn .editBtn").css("display","inline");
					$("#domicilio .lastLine .cellBtn .saveBtn").css("display","none");
				} else
					alert("errore, riprovare!!");
			},
			dataType : "json"
			});// AJAX CLOSED
		});
	});	
});