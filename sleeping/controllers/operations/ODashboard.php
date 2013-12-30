<?php

/**
 * @access public
 * @package controllers.operations
 */
class ODashboard implements Operation {

	/**
	 * @access public
	 */
	public function doOp($data = null) {
		global $PATH;
		//tabelle che utilizzo
		$userTable = Doctrine_Core::getTable('EUtente');
		$contattiTable = Doctrine_Core::getTable('EContatti');
		$indirizzoTable = Doctrine_Core::getTable('EIndirizzo');
		
		//carico o l'utente o l'albergatore a seconda della richiesta che arriva
		if($_POST['user'] == 'Utente')
			$user = $userTable->findByUsername(USession::getInstance()->getValue('user'))->toArray();
		else
			$user = $userTable->findByUsername(USession::getInstance()->getValue('albergatore'))->toArray();
		
		$contatti = $contattiTable->findByID($user[0]['EContattiID'])->toArray();
		$residenza = $indirizzoTable->findByID($user[0]['EIndirizzoID'])->toArray();
		$domicilio = $indirizzoTable->findByID($user[0]['EIndirizzoID2'])->toArray();
		$luogoNascita = $indirizzoTable->findByID($user[0]['EIndirizzoID3'])->toArray();
		
		$user = $this->toArrays("user",$user[0]);
		$contatti = $this->toArrays("contatti",$contatti[0]);
		$residenza = $this->toArrays("residenza",$residenza[0]);
		$domicilio = $this->toArrays("domicilio",$domicilio[0]);
		$luogoNascita = $this->toArrays("luogoNascita",$luogoNascita[0]);
		
		$foto = $PATH['url']."userPhoto/".USession::getInstance()->getValue('user').'/profile.png';
		
		$dataArray = array(
				'user' => $user,
				'contatti' => $contatti,
				'residenza' => $residenza,
				'domicilio' => $domicilio,
				'luogoNascita' => $luogoNascita,
				'foto' => array('foto' => $foto),
				'typeUser' => $_POST['user']
				);
		ViewFacade::getInstance()->toGui('Dashboard', $dataArray);
	}
	
	private function toArrays($prefix, $array)
	{
		$back;
		foreach($array as $k=>$v)
			$back[$prefix."_".$k] = $v;
		return $back;
	}
}
?>