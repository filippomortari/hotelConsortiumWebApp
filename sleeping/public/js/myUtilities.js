var scriptLoaded = new Array();
var cssLoaded = new Array();

function serializeForm(formId)
{
	return $(formId).serializeArray();
}

function addScript(scriptName){
	//ritorna -1 se non è stato caricato
		if ( scriptLoaded.indexOf(scriptName) < 0 ){
			var headID = document.getElementsByTagName("head")[0];         
		    var newScript = document.createElement('script');
			newScript.type = 'text/javascript';
			newScript.src = scriptName;
			headID.appendChild(newScript);
			scriptLoaded.push(scriptName);
		}
}

function addCss(cssStyle){
	
	//ritorna -1 se non è stato caricato
		if ( cssLoaded.indexOf(cssStyle) <0 ){
			var headID = document.getElementsByTagName("head")[0];
			var cssNode = document.createElement('link');
			cssNode.type = 'text/css';
			cssNode.rel = 'stylesheet';
			cssNode.href = cssStyle;
			cssNode.media = 'screen';
			headID.appendChild(cssNode);
			//dovrebbe caricare nell'array il valore contenuto in cssStyle
			cssLoaded.push(cssStyle); 
		}
}

function runEffect(ef) 
{
	// run the effect
	$("#box-login-header").effect(ef, {
		direction : "up",
		speed : "slow"
	}, 300);
}

function chiudi(element) {
	$('.overlay').fadeOut('fast');
	element.hide();
}
