function searchPattern(elem, pattern) {
	if (elem.val().search(pattern) == -1) {
		setInputStyle(elem, "red");
	} else {
		setInputStyle(elem, "green");
	}
	return false;
}

function setInputStyle(elem, color) {
	elem.css("border-color", color);
	elem.css("background-image", "url(\"public/img/img-" + color + ".png\")");
	elem.css("background-repeat", "no-repeat");
	elem.css("background-position", "right");
	elem.css("border-color", color);
	//if (color = "red")
		//setTimeout(function() {
			//elem.focus();
		//}, 1000); // imposta il controllo sull'input dell'username
}

function checkToDB(elem) {
	if (elem.val().length > 3) {
		$.ajax({
			type : 'POST',
			url : 'index.php',
			data : {
				o : 'CheckData',
				user : elem.val()
			},
			success : function(data) {
				if (data == -1) {
					setInputStyle(elem, "red");
					setTimeout(function() {
						elem.focus();
					}, 0); // imposta il controllo sull'input dell'username
				} else 
					setInputStyle(elem, "green");
			}
		});
	}
}

$(function checkData() {
	/*
	 * regExp per controllo campi di testo
	 */
	var pattern_email = new RegExp(
			"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+[\.]([a-z0-9-]+)*([a-z]{2,3})$");
	var pattern_phone = new RegExp("(0[0-9]{1,3}\-[0-9]{4,6})");
	var pattern_cel = new RegExp("(3[1-9][0-9]\-[0-9]{6,7})");
	var pattern_cf = new RegExp(
			"[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]");
	// controllo pwd con almeno una lettera maiuscula ed un numero
	var pattern_pwd = new RegExp(
			"(?=^.{8,12}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$");

	// controllo se email corrisponde a nome@dominio
	$("#hotel-email").focusout(function() {
		searchPattern($(this), pattern_email);
	});

	// controllo se due email == email1
	$("#hotel-email1").focusout(function() {
		if ($(this).val() == $("#hotel-email").val())
			setInputStyle($("#hotel-email"), "green");
		else
			setInputStyle($("#hotel-email"), "red");
	});

	$("#hotel-phone").focusout(function() {
		searchPattern($(this), pattern_phone);
	});

	$("#hotel-fax").focusout(function() {
		searchPattern($(this), pattern_phone);
	});

	/*
	 * controllo su cellulare
	 */
	$("#hotel-cel").focusout(function() {
		searchPattern($(this), pattern_cel);
	});

	$("#hotel-cf").focusout(function() {
		$(this).css("text-transform", "uppercase");
		searchPattern($(this), pattern_cf);
	});

	/*
	 * controllo se l'usuerName è disponibile
	 */
	$("#username").focusout(function(event) {
		checkToDB($(this));
	});

	$("#pwd").focusout(function(event) {
		searchPattern($(this), pattern_pwd);
	});

});
