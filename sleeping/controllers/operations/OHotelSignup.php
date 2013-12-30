<?php

require_once 'controllers/operations/Operation.php';
/**
 * @access public
 * @package controllers.operations
 */
class OHotelSignup implements Operation {

	/**
	 * @access public
	 */
	public function doOp($data = null)
	{
		UDoctrine::getInstance()->start_connection();
		/*
		 * inserire controllo su utente registrato
		*/
		$albergatoreTable = Doctrine_Core::getTable('EUtente');
		//carico l'utente albergatore loggato
		$albergatore = $albergatoreTable->findOneByUsername(USession::getInstance()->getValue('albergatore'));
		
		$hotel = new EHotel();
		$sedeLegale = new EIndirizzo();
		$contatti = new EContatti();

		//salvo in $hotel i dati contenuti nel post
		foreach($_POST["dataForm"] as $v)
		{
			if( $v['name'] == 'telefono' || $v['name'] == 'fax' || $v['name'] == 'mobile')
			{
				$v['value'] = str_replace("-", "",$v['value']);
			}
				
			//dati relativi alla sede legale
			if($v['name'] == 'via')	$sedeLegale->via = $v['value'];
			elseif($v['name'] == 'numCiv') $sedeLegale->numCiv = $v['value'];
			elseif($v['name'] == 'city') $sedeLegale->citta = $v['value'];
			elseif($v['name'] == 'prov') $sedeLegale->prov = $v['value'];
			elseif($v['name'] == 'cap') $sedeLegale->cap = $v['value'];
				
			//dati relativi ai contatti
			elseif($v['name'] == 'telefono') $contatti->telefono = $v['value'];
			elseif($v['name'] == 'mobile') $contatti->mobile = $v['value'];
			elseif($v['name'] == 'fax') $contatti->fax = $v['value'];
			elseif($v['name'] == 'email') $contatti->email = $v['value'];
				
			//dati relativi all'hotel
			elseif ($v['name'] == 'descrizione');
			else{
				//print($v['name'].'->'.$v['value']);
				$hotel->$v['name'] = $v['value'];
			}
		}

		$hotel->contatti = $contatti;
		$hotel->sedeLegale = $sedeLegale;

		//$albergatore->struttura = $hotel;
		$hotel->albergatore = $albergatore;
		try {
			UDoctrine::getInstance()
				->getConnection()
					->flush(); //salvo tutti gli oggetti della connessione non salvati
			$errore = 1;
		} catch (Exception $e) {
			$errore = -1;
		}
		ViewFacade::getInstance()->toGui("HomeHotel",
				array(
						"error" => $errore
				)
		);
	}
}
?>