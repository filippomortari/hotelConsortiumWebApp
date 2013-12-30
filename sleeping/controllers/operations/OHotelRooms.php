<?php

/**
 * 
 * Recuper le camere della struttura passata come parametro
 * @author daniele
 *
 */

class OHotelRooms implements Operation{

	public function doOp($data = null){

		$roomTable = Doctrine_Core::getTable('ERoom');
		$prezzoTable = Doctrine_Core::getTable('EPrezzo');
		// array di docrine records delle stanze della struttura loggata dell'albergatore loggato
		$room  = $roomTable->findByEStrutturaID($data['struttura']['ID'])->toArray();
		
		if( count($room) )
		{
			UDoctrine::getInstance()->getConnection();
			$q= Doctrine_Query::create()
				->select('r.* , p.*')
				->from('ERoom r')
				->where('r.EStrutturaID = ?', $data['struttura']['ID'])
				->andWhere('r.posti = ?', $data['people'])
				->innerJoin('r.prezzo p');
				
			$camera = $q->execute();
				
			//le camere della struttura loggata con i relativi prezzi
			$room = $camera->toArray();
		}
		return $room;
	}
}