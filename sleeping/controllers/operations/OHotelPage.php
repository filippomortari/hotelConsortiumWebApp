<?php

class OHotelPage implements Operation{
	
	private $camera; 
	
	public function doOP( $data = null ){
		
		//id della struttura selezionata dall'utente
		$idStruttura = $_POST['id'];
		
		$q= Doctrine_Query::create()
			->from('EStruttura s')
			->where('s.ID = ?', $idStruttura)
			->innerJoin('s.sedeLegale a')
			->innerJoin('s.contatti c')
			->innerJoin('s.rooms r');
		
		$struttura = $q->fetchArray(); // tutti i dati della struttura
		
		//print_r($struttura);
		
		foreach ($struttura[0]['rooms'] as $room)
		{
			$q= Doctrine_Query::create()
				->from('ERoom r')
				->where('r.ID = ?', $room['ID'])
				->innerJoin('r.prezzo p');
			$this->camera[] = $q->fetchArray(); 
		}
		
		//print_r($this->camera);
		
		$dati = array (
				'struttura'=>$struttura[0],
				'camere' => $this->camera[0]
				);
		
		ViewFacade::getInstance()->toGui("HotelPage", $dati);
	}
}