<?php

/**
 * @access public
 * @package controllers.operations
 */
class OHotelierLogin implements Operation {

	/**
	 * @access public
	 */
	public function doOp($data = null){
		USession::getInstance()->destroy();
		USession::getInstance()->init();
		global $PATH;

		$user = $_SERVER['PHP_AUTH_USER']; //nome utente
		$pwd = md5($_SERVER['PHP_AUTH_PW']); //pwd utente
		
		UDoctrine::getInstance()->getConnection();

		$q = Doctrine_Query::create()
			->from('EAlbergatore')
			->where('username = ?',$user)
			->andWhere('password = ?',$pwd);
		
		$utente = Doctrine_Core::getTable('EUtente')->findOneByUsername($user);
		
		
		if( count($q->fetchArray()) )
		{
			$k = Doctrine_Query::create()
				->from('EStruttura')
				->where('EUtenteID = ?', $utente->ID);
			
			$struttura = Doctrine_Core::getTable('EStruttura')->findOneByEUtenteID($utente->ID);
			
			USession::getInstance()->setValue('albergatore',$user);
			USession::getInstance()->setValue('user',$user);
			
			
			if( count($k->fetchArray()) )
				USession::getInstance()->setValue('strutturaID', $struttura->ID);
				
			ViewFacade::getInstance()->toGui('HotelierLogin',
					array(
							'user' => $user,
							'error' => 1)
			);
		}
		else{
			echo json_encode(array("
					error" => "-1")
			);
		}
	}
}
?>