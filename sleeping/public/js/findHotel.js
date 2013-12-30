function DateCheck(name, value){
		this.name = name;
		this.value = value;
};
	
$("#formFindHotel").click(function(){
	var dati = serializeForm("#formSearch");
	var checkIn = new DateCheck('checkIn', $("#from").val() );
	var checkOut = new DateCheck('checkOut', $("#to").val() );
	
	if(checkIn.value == "" || checkOut.value == "" ){
		myAlert($("#dateErrate"));
	}
	else{
		dati.push(checkIn);
		dati.push(checkOut);
		$.ajax({
			type: 'POST',
			url: "index.php",
			data:{
				o: 'HotelFind',
				dataForm: dati,
			},
			success: function(data){
				//controllo per controllare un solo caricamento
				$.each(data.css, function(i, item) {
					addCss(item);
				});
				
				$.each(data.js, function(i, item) {
					addScript(item);
				});
				
				$('#content').empty();
				$('#content').html(data.html);		
			},
			error: function (data){
	
			},
			dataType: 'json',
		}); // ajax closed
	}
});