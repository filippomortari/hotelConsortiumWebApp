<?php

/**
 * 
 * Recupero le strutture con sede nel comune indicato nella ricerca
 * @author daniele
 *
 */


class OHotelFind implements Operation{
	
	public function doOp($data = null){
		global $PATH;
		$dati = $this->convert();
		
		//catturo tutte le strutture con sede nel comune indicato nella ricerca
		$q= Doctrine_Query::create()
			->from('EStruttura s')
			->innerJoin('s.sedeLegale a WITH a.citta = ?', $dati['where-city'])
			->innerJoin('s.contatti c'); 
		
		$strutture = $q->fetchArray();
		
		USession::getInstance()->setValue("checkIn", $dati['checkIn']);
		USession::getInstance()->setValue("checkOut", $dati['checkOut']);
		
		$roomRetrivie = new OHotelRooms();
		
		for ($i=0; $i< count($strutture); $i++){
			$d['people'] = $dati['people'];
			$d['struttura'] = $strutture[$i];
			$strutture[$i]['room'] = $roomRetrivie->doOp($d);//carica tutte le camere della struttura
			$strutture[$i]['logo'] = $PATH['url']."hotel_admin/".str_replace(" ","",$strutture[$i]['nome'])."/logo/logo.png";
		}
		
		ViewFacade::getInstance()->toGui("HotelFind", $strutture);
	}
	
	private function convert()
	{
		$back;
		foreach ($_POST['dataForm'] as $k=>$a)
			$back[$a['name']] = $a['value'];
		return $back;
			
	}
}