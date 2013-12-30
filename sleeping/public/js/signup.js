function serializeForm(formId)
{
	return $(formId).serializeArray();
}

//invio dati per registrazione utente/albergatore
$(function(){
	$("#form-user-btn").click( function(){
		var dati = serializeForm("#form-user-signup");
		var userType = $("#opt-field").text();
		$.ajax({
			type: 'POST',
			url: "index.php",
			data:{
				o: 'UserSignup',
				dataForm: dati,
				opt: userType
			},
			success: function(data){
				//invio email di conferma all'utente
				alert("grazie per la tua registrazione");
				window.location = "index.php";
			},
			error: function (data){
				alert(data.html);
			},
			dataType: 'json',
		}); // ajax closed
	});
});

//registrazione albergatore
//carica il form per la registrazione dell'albergatore
$(function (){
	$('#hoteliers_signup').click( function (){
		chiudi($(this));
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				gc : 'UserSignup',
				opt : "Albergatore"
			},
			success : function(data) {
				$('#content').empty();
				$('#content').append(data.html);
				
				$("#opt-field").empty();
				$("#opt-field").append(data.opt);
			},
			dataType : "json"
		});// AJAX CLOSED
	});
});

//Registrazione utente
//carica il form per la registrazione dell'utente
$(function() {
	$("#signup").click(function() {
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				gc : 'UserSignup',
				opt: 'Utente'
			},
			success : function(data) {
				//carico gli script
				$.each(data.js, function(i, item) {
					var headID = document.getElementsByTagName("head")[0];         
					var newScript = document.createElement('script');
					newScript.type = 'text/javascript';
					newScript.src = item;
					headID.appendChild(newScript);
				});
				
				$('#content').empty();
				$('#content').append(data.html);
				
				//ripulisco il campo e setto il tipo di utente
				$("#opt-field").empty();
				$("#opt-field").append(data.opt);
			},
			dataType : "json"
		});
	});
});

//registrazione nuova struttura
$(function (){
	$("#form-hotel-btn").click( 
			function() {
				//recupero tutto il contenuto del form in un array di obj
				// name => value
				var dati = serializeForm('#form-hotel-signup'); 
				$.ajax({
					type: 'POST',
					url: "index.php",
					data:{
						o: 'HotelSignup',
						dataForm: dati
					},
					success: function(data){
						if(data.error == 1){
							alert("è stata collegata la struttura inserita");
							//$("content").empty();
							//$("content").html(data.html);
							location.reload(true);
						}
					},
					error: function (data){
						alert("errore");
					},
					dataType: 'json',
				}); // ajax closed
	});
});