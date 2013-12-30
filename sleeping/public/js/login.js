function runEffect(ef) {
	// run the effect
	$("#box-login-header").effect(ef, {
		direction : "up",
		speed : "slow"
	}, 300);
}

$(function() {
	$("#signin").click(function() {
		/**
		 * --------N.B. valutare se creare un array da passare al server
		 */
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				o : 'Login',
				user : $('.user').val(),
				pwd : $.md5($('.pwd').val())
			},
			success : function(data){
				if( data.error > 0 ){
					runEffect("bounce");
					$('#box-login-header').empty();
					$('#box-login-header').append(data.html);
					$('#user-name').append(data.user);

					//carico gli script
					$.each(data.js, function(i, item) {
						var headID = document.getElementsByTagName("head")[0];         
						var newScript = document.createElement('script');
						newScript.type = 'text/javascript';
						newScript.src = item;
						headID.appendChild(newScript);
					});
				}
				else{
					alert("Controlla le credenziali, altrimenti REGISTRATI");
				}
			},
			dataType : "json"
		});// AJAX CLOSED
	});
});
