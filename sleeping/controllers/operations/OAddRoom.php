<?php

class OAddRoom implements Operation{
	
	public function doOp( $data = null ){
		
		$struttura = Doctrine_Core::getTable('EStruttura')
			->findOneByID(USession::getInstance()->getValue('strutturaID'));
		$dataRoom = $this->toArray();
		$prezzo = new EPrezzo();
		$room = new ERoom();
		//if necessari ad ogni giro del loop setto tutti i valori
		// altrimenti creo oggetti room e prezzo ad ogni giro
		$prezzo->value = $dataRoom['value'];
		$prezzo->currency = $dataRoom['currency'];
		$room->posti = $dataRoom['posti'];
		$room->descrizione = $dataRoom['descrizione'];
		//aggiungo il prezzo alla camera
		$room->prezzo = $prezzo;
		// aggiungo la camera alla struttura
		$room->struttura = $struttura;
		
		try {
			//salva tutte le entity ancora non salvate
			UDoctrine::getInstance()->getConnection()->flush();
			echo json_encode(1);
		} catch (Exception $e) {
			echo json_econde(-1);
		}
		
	}
	
	private function toArray(){
		$data;
		foreach ($_POST['room'] as $k=>$r)
			$data[$r['name']] = $r['value'];
		return $data;
	}
	
}
?>