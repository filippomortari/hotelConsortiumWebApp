$('#dashboard-btn').click(function() {
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o : 'Dashboard',
			user: 'Utente'
		},
		success : function(data) {
			$('#content').empty();
			$('#content').html(data.html);		

			//controllo per controllare un solo caricamento
				$.each(data.css, function(i, item) {
					addCss(item);
				});
			$.each(data.js, function(i, item) {
				addScript(item);
			});
			$("#tab-contents").empty();
			$('#tab-contents').html(data.htmlProfiloUtente);
		},
		dataType : "json"
	});// AJAX CLOSED
});

$('#dashboardHotelier-btn').click(function() {
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
			$('#content-dash').empty();
			$('#content-dash').html(data.html);		

			//controllo per controllare un solo caricamento
			if(toCreateCss == true)
			{
				$.each(data.css, function(i, item) {
					addCss(item);
				});
				toCreateCss = false;
			}
			
			$.each(data.js, function(i, item) {
				addScript(item);
			});
			
			$("#tab-contents").empty();
			$('#tab-contents').html(data.htmlProfiloUtente);
		},
		dataType : "json"
	});// AJAX CLOSED
});

