$("#profilo-albergo").click(function (){
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o : 'DashboardAzienda'
		},
		success : function(data) {
			$.each(data.css, function(i, item) {
				addCss(item);
			});
			
			$.each(data.js, function(i, item) {
				addScript(item);
			});
			
			$("#tab-contents").empty();
			//carico nella div dei contenuti dei tab la dash dell'azienda
			$('#tab-contents').html(data.htmlProfiloStruttura); 
		},
		dataType : "json"
	});// AJAX CLOSED
});