<?php


class ORetrivieRoom implements Operation{
	
	public function doOp($data = null){
		
		$roomTable = Doctrine_Core::getTable('ERoom');
		$prezzoTable = Doctrine_Core::getTable('EPrezzo');
		// array di docrine records delle stanze della struttura loggata dell'albergatore loggato
		$room  = $roomTable->findByEStrutturaID(USession::getInstance()->getValue('strutturaID'))->toArray();
		
		if( count($room) )
		{
			UDoctrine::getInstance()->getConnection();
			$q= Doctrine_Query::create()
				->select('r.* , p.*')
				->from('ERoom r')
				->leftJoin('r.prezzo p');
			
			$camera = $q->execute();
			
			//le camere della struttura loggato con i relativi prezzi
			$camera = $camera->toArray();
			
			ViewFacade::getInstance()->toGui('DashRoom', 
					array(
							'room'=> $camera)
					);
		}
		else
		{
			ViewFacade::getInstance()->toGui('AddRoom');
		}
		
	}
}