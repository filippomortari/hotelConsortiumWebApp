<?php

class OError implements Operation{
	
	public function doOp($data = null)
	{
		$mailto="dipompeodaniele@gmail.com";
		$url = "http://www.sleeping.it";
		
		//preparazione email
		$subject = "Errore nel sito: ".$data['codError'];
		
		$body = "Un errore 404 si � verificato nel tuo sito: " . $url . "\n\n";
		$body .= "La pagina richiesta era: " . $data['url']."\n\n";
		
		// ora invia la mail
		mail($mailto, $subject, $body) or die("errore nell'invio del email");
	}
}