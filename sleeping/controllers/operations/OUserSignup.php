<?php

/**
 * @access public
 * @package controllers.operations
 */
class OUserSignup implements Operation {

	/**
	 * @access public
	 */
	//di default viene passato Utente
	public function doOp($data = null) {

		global $PATH;
		
		$type = "E".$data;		
		/*
		 * pu� essere o utente o albergatore
		 */
		$user = new $type();
		
		$residenza = new EIndirizzo();
		$luogoNascita= new EIndirizzo();
		$domicilio= new EIndirizzo();
		$contatti = new EContatti();

		//salvo i dati del post nell'entit� utente

		foreach($_POST["dataForm"] as $v)
		{
			if( $v['name'] == 'telefono' || $v['name'] == 'fax' || $v['name'] == 'mobile')
			{
				$v['value'] = str_replace("-", "",$v['value']); //tolgo il - dal numero telefonico
			}
			elseif($v['name'] == 'meseNascita') $mese = $v['value'];
			elseif($v['name'] == 'giornoNascita') $giorno = $v['value'];
			elseif($v['name'] == 'annoNascita') $anno = $v['value'];
				
			elseif($v['name'] == 'luogoNascita') $luogoNascita->citta = $v['value'];
			elseif($v['name'] == 'provNascita') $luogoNascita->prov = $v['value'];
				
			elseif($v['name'] == 'luogoResidenza') $residenza->via = $v['value'];
			elseif($v['name'] == 'numCiv') $residenza->numCiv = $v['value'];
			elseif($v['name'] == 'comuneResidenza') $residenza->citta = $v['value'];
			elseif($v['name'] == 'provResidenza') $residenza->prov = $v['value'];
			elseif($v['name'] == 'capResidenza') $residenza->cap = $v['value'];

			elseif($v['name'] == 'email') $contatti->email = $v['value'];
			elseif($v['name'] == 'password') $user->password = md5($v['value']);
				
			else
				$user->$v['name'] = $v['value'];
		}

		$user->dataNascita = $anno.'-'.$mese.'-'.$giorno;
		$user->credito = 0;
		$user->contatti = $contatti;

		$domicilio = $residenza;
		$user->residenza = $residenza;
		$user->luogoNascita = $luogoNascita;
		$user->domicilio = $domicilio;
		
		try {
			$user->save();
			echo 1; // invio allo script ajax che � andato tutto ok
		}catch (ErrorException $e)
		{
			echo -1;
		}
	}
}
?>