$(function() {
	$("#ric_avan").click(function(){
	    	 $('.overlay').fadeIn('fast');
	         $('#div-ric-avanzata').fadeIn('slow');
	});
	
	$(".chiudi").click(function(){
		     $('.overlay').fadeOut('fast');
		     $('#div-ric-avanzata').hide();
	});
	 
	     //chiusura emergenza
	$(".overlay").click(function(){
		     $(this).fadeOut('fast');
		     $('#div-ric-avanzata').hide();
	});
});