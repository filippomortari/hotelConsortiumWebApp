<?php

class OEditRoom implements Operation {
	
	
	public function doOp ( $data = null )
	{
		$room;
		$dati = $this->convert();
		
		foreach($dati as $camera){
			$room = Doctrine_Core::getTable("ERoom")->findOneByID($camera['cameraID']);
			$room->prezzo->value = $camera['prezzoCamera'];
			$room->descrizione = $camera['descrizioneCamera'];
			$room->posti = $camera['postiCamera'];
			try {
				$room->save();
			} catch (Exception $e) {
				echo json_encode(-1);
			}
		}
		echo json_encode(1);
	}
	
	/**
	 * ogni camera modificata viene inserita in un sottoArray
	 * sfrutto il fatto che il metodo serializeArray di jquery rispetta l'ordine
	 * degli oggetti che trova nel form
	 * 
	 * cameraID-> tutti i dati della camera
	 */
	private function convert()
	{
		$back;
		$i=-1;
		foreach ($_POST['dati'] as $k=>$a){
			if($a['name'] == 'cameraID')
				$i++;
			$back[$i][$a['name']] = $a['value'];
		}
		return $back;
			
	}
}