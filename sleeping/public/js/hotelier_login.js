function runEffect(ef) 
{
	// run the effect
	$("#box-login-header").effect(ef, {
		direction : "up",
		speed : "slow"
	}, 300);
}

function chiudi() {
	$('.overlay').fadeOut('fast');
	$('#hoteliers_login').hide();
}

$(function() {
	$('#hoteliers').click(function() {
		$('.overlay').fadeIn('fast');
		$("#hoteliers_login").css("display","table");
		$('#hoteliers_login').fadeIn('slow');
	});

	$(".chiudi").click(function() {
		$('.overlay').fadeOut('fast');
		$('#hoteliers_login').hide();
	});

	// chiusura emergenza
	$(".overlay").click(function() {
		$(this).fadeOut('fast');
		$('#hoteliers_login').hide();
	});

});

$(function() {
	//$("#hotel_signin").click(function() {
		/**
		 * --------N.B. valutare se creare un array da passare al server
		 */
		/*$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				o : 'HotelierLogin',
				hotelUser : $('#hotel-user').val(),
				pwd : $('#hotel-pwd').val(),
			},
			success : function(data) {
				runEffect("bounce");
				chiudi();
				/*setta il nuovo box login header*/
				/*$('#box-login-header').empty();
				$('#box-login-header').append(data.html);
				$('#user-name').append(data.user); //imposta il valore del utente loggato
				/*mostra il tasto per il profilo aziendale*/
				/*$('#prof_az').empty();
				$('#prof_az').append(data.prof_az);
				$('#prof_az').attr('class', 'p-link my-btn');
				/*sostituisce il link per il login essendo già loggato*/
				/*$('#hoteliers').removeAttr("class");
				$('#hoteliers').empty();
				$('#hoteliers').append(data.footer);
				$('#user-name').append(data.user);
				getScripts(data.js);
				// window.location = "index.php";
			},
			dataType : "json"
		});// AJAX CLOSED
	});
*/
	
	$("#hotelier_signin").click(function() {
	/**
	 * --------N.B. valutare se creare un array da passare al server
	 */
	window.location="hadmin.index.php";
});
	
	
	
	/*$(function() {
		$("#logout").click(function(){
			$.ajax({
				type : 'POST',
				url : "index.php",
				data : {
					o : 'Logout',
				},
				success : function() {
					alert(1);
					runEffect("bounce");
					window.location.reload();
				},
				error : function(){
					alert(jqXHR.status);
					windows.location = "error.php";
				},
				dataType : "json"
			});
		});
	});*/
	
	$(function() {
		$('#prof_az').click(function () {
			$.ajax({
				type : 'POST',
				url : "index.php",
				data : {
					o : 'DashboardAzienda',
				},
				success : function(data) {
					$('#content').empty();
					$('#content').append(data.html);
				},
				dataType : "json"
			});
			getScript();
		});
	});
	
	
});
