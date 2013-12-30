/*
 * modifica valore font-size
 * value = -1<value<+1
 */
function workOnFont(pxAct, value) {
	return (pxAct + value);
}

/*
 * scrive un cookie
 */
function setCookie(nomeCookie, valoreCookie, durataCookie)
{
	var scadenza = new Date();
	var adesso = new Date();
	scadenza.setTime(adesso.getTime() + (parseInt(durataCookie) * 60000));
	//funzione escape trasforma i caratteri rendendoli compatibili con ASCII
	document.cookie = nomeCookie + '=' + escape(valoreCookie) + '; expires=' + scadenza.toGMTString() + '; path=/sleeping';
}

/*
 * legge da cookie
 */
function getCookie(nomeCookie)
{
	if (document.cookie.length > 0)
	{
		var inizio = document.cookie.indexOf(nomeCookie + "=");
		if (inizio != -1)
		{
		  inizio = inizio + nomeCookie.length + 1;
		  var fine = document.cookie.indexOf(";",inizio);
		  if (fine == -1) fine = document.cookie.length;
		  return unescape(document.cookie.substring(inizio,fine));
		}
		else  return "";
	}
	return "";
}

/*
 * setta valore salvato nel cookie come font
 * di default, una volta caricato il body setto il font-size
 * a quello scelto dall'utente precedentemente
 */
function setFontSize()
{
	var cookie = getCookie('workOnFont');
	//setto il font-size al valore delle preferenze dell'utente
	$('body').css("font-size", cookie);
}

/*
 * aumenta il carattere max 20px
 */
$(function() {
	$("#plus-font").click(function() {
		var pxAct = parseInt($('body').css("font-size").replace("px", ""));
		if (pxAct < 20) {
			pxAct = workOnFont(pxAct, 1);
			pxAct+="px";
			$('body').css("font-size", pxAct );
			setCookie('workOnFont',pxAct, 60);
		} else 
			alert("raggiunto il font massimo");
	});
});

/*
 * diminuisce il carattere min 12px
 */
$(function() {
	$("#minus-font").click(function() {
		var pxAct = parseInt($('body').css("font-size").replace("px", ""));
		if (pxAct > 12) {
			pxAct = workOnFont(pxAct, -1);
			pxAct+="px";
			$('body').css("font-size", pxAct );
			setCookie('workOnFont',pxAct, 60);
		} else 
			alert("raggiunto il font massimo");
	});
});