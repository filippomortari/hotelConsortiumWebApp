$("#profilo-utente").click( function (){
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o : 'Dashboard',
			user: 'Utente'
		},
		success : function(data) {
			var toCreateCss = true;
			var toCreateJs = true;
			//$.getScript("public/js/editDash.js");
			$('#content').empty();
			$('#content').html(data.html);		

			//controllo per controllare un solo caricamento
			if(toCreateCss == true)
			{
				$.each(data.css, function(i, item) {
					var headID = document.getElementsByTagName("head")[0];         
					var cssNode = document.createElement('link');
					cssNode.type = 'text/css';
					cssNode.rel = 'stylesheet';
					cssNode.href = item;
					cssNode.media = 'screen';
					headID.appendChild(cssNode);
				});
				toCreateCss = false;
			}
			
			$.each(data.js, function(i, item) {
				var headID = document.getElementsByTagName("head")[0];         
				var newScript = document.createElement('script');
				newScript.type = 'text/javascript';
				newScript.src = item;
				headID.appendChild(newScript);
			});
			
			$("#tab-contents").empty();
			$('#tab-contents').html(data.htmlProfiloUtente);
		},
		dataType : "json"
	});// AJAX CLOSED
});

$("#profilo-utente-albergatore").click( function (){
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o : 'Dashboard',
			user: 'Albergatore'
		},
		success : function(data) {
			var toCreateCss = true;
			var toCreateJs = true;
			//$.getScript("public/js/editDash.js");
			$('#content').empty();
			$('#content').html(data.html);		

			//controllo per controllare un solo caricamento
			if(toCreateCss == true)
			{
				$.each(data.css, function(i, item) {
					var headID = document.getElementsByTagName("head")[0];         
					var cssNode = document.createElement('link');
					cssNode.type = 'text/css';
					cssNode.rel = 'stylesheet';
					cssNode.href = item;
					cssNode.media = 'screen';
					headID.appendChild(cssNode);
				});
				toCreateCss = false;
			}
			
			$.each(data.js, function(i, item) {
				var headID = document.getElementsByTagName("head")[0];         
				var newScript = document.createElement('script');
				newScript.type = 'text/javascript';
				newScript.src = item;
				headID.appendChild(newScript);
			});
			
			$("#tab-contents").empty();
			$('#tab-contents').html(data.htmlProfiloUtente);
		},
		dataType : "json"
	});// AJAX CLOSED
});