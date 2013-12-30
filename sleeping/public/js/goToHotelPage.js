$(function (){
	$(".gotToHotelPage").click(function (){
		var parent = $(this).parent();
		//recupero il nome dell'hotel per poi caricare le info lato server
		var nomeStruttura = $(this).text(); 
		//recupero l'id della struttura selezionata
		var idStruttura = parent.children("input").val(); 
		
		$.ajax({
			type : 'POST',
			url : "index.php",
			data : {
				o : 'HotelPage',
				id : idStruttura				
			},
			success : function(data){
				$("#content").empty();
				
				$.each(data.css, function(i, item) {
					addCss(item);
				});
				
				$.each(data.js, function(i, item) {
					addScript(item);
				});
				
				$("#content").html(data.html);
				
				
			},
			dataType : "json"
		});// AJAX CLOSED
	});
});