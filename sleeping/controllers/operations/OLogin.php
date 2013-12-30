<?php

/**
 * @access public
 * @package controllers.operations
 */
class OLogin implements Operation {

	/**
	 * @access public
	 */
	public function doOp($data = null) {
		USession::getInstance()->destroy();
		USession::getInstance()->init();
		global $PATH;
		
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];
		
		UDoctrine::getInstance()->getConnection();
		$q= Doctrine_Query::create()
			->from('EUtente')
			->where('username = ?',$user)
			->andWhere('password = ?',$pwd)
			->andWhere('discriminator != ?', 'albergatore');
		
		//utente loggato
		if( count($q->fetchArray()) )
		{
			//memorizza nella sessione che l'utente risulta loggato
			USession::getInstance()->setValue( 'user', $user );
			//memorizzo che l'utente e' loggato
			USession::getInstance()->setValue("loggedIn", 1);
			ViewFacade::getInstance()->toGui('Login', 
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