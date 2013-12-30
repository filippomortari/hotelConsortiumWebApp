<?php

class OCreateRoom implements Operation{
	
	public function doOp($data = null)
	{
		$strutturaTable = $strutturaTable = Doctrine_Core::getTable('EStruttura');
		$struttura = $strutturaTable
			->findOneByID(USession::getInstance()->getValue('strutturaID'));

		$room = new ERoom();
		$prezzo = new EPrezzo();

		/*$prezzo->currency = $data['currency'];
		$prezzo->value = $data['value'];
		
		$room->posti = $data['room']['posti'];
		$room->descrizione = $data['room']['descrizione'];
		$room->prezzo = $prezzo;
		$room->struttura = $struttura;*/
		
		$prezzo->currency = 'euro';
		$prezzo->value = 1000;
		
		$room->posti = '2';
		$room->descrizione = 'camera bella e spaziosa';
		$room->prezzo = $prezzo;
		$room->struttura = $struttura;
		
		/*
		 * salvo tutte i doctrine records aperti
		 * è un salva generale
		 */
		UDoctrine::getInstance()
			->getConnection()
				->flush();
		
		echo json_encode(1);
	}
}