<?php

class OPrenotazione implements Operation{
	
	public function doOp( $data = null ){
		
		//ritrovo la camera richiesta dall'utente
		$camera = Doctrine_Core::getTable('ERoom')
			->findOneByID($_POST['idCamera'][0]['value']);
		
		/*$q= Doctrine_Query::create()
			->from('ERoom r')
			->innerJoin('r.prezzo p')
			->where('r.ID = ?', $_POST['idCamera'][0]['value']);*/
		$prenotazione = new EPrenotazione();
		$prenotazione->checkIn = $_POST['checkIn'];
		$prenotazione->checkOut = $_POST['checkOut'];
		$prenotazione->nights = 3;
		$prenotazione->people = 4;
		$prenotazione->totale = $camera->prezzo;
		
		$camera->prenotazione = $prenotazione;
		
		try {
			//salva in db tutti gli oggetti ancora aperti
			UDoctrine::getInstance()->getConnection()->flush();
			echo json_encode(1);
		} catch (Exception $e) {
			echo json_encode(-1);
		}
		
	}
}