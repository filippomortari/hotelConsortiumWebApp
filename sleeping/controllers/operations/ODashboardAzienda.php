<?php
/**
 * @access public
 * @package controllers.operations
 */
class ODashboardAzienda implements Operation{

	/**
	 * @access public
	 */
	public function doOp($data = null) {
		global $PATH;
		//tabelle che utilizzo
		$userTable = Doctrine_Core::getTable('EAlbergatore');
		$contattiTable = Doctrine_Core::getTable('EContatti');
		$indirizzoTable = Doctrine_Core::getTable('EIndirizzo');
		$strutturaTable = Doctrine_Core::getTable('EStruttura');

		$user = $userTable->findByUsername(USession::getInstance()->getValue('albergatore'))->toArray();
		$struttura = $strutturaTable->findByEUtenteID($user[0]['ID'])->toArray();
				
		if( ! count($struttura) ){
			$dataArray = array(
					"htmlProfiloStruttura" => 'non hai strutture collegate',
					"numStruttura" => 0,
					"isStruttura" => 0
			);
		}
		else{
			$nomeStruttura = str_replace(" ","",$struttura[0]['nome']);
			$contatti = $contattiTable->findByID($struttura[0]['EContattiID'])->toArray();
			$sedeLegale = $indirizzoTable->findByID($struttura[0]['EIndirizzoID'])->toArray();
			USession::getInstance()->setValue('strutturaID', $struttura['0']['ID']);
			$logo = $PATH['url'].'hotel_admin/'.$nomeStruttura.'/logo/logo.png';
			//$contatti = $this->toArray("contatti",$contatti[0]);
			//$sedeLegale = $this->toArray("sedeLegale",$sedeLegale[0]);
			$dataArray = array(
					'struttura' => $struttura,
					'contatti' => $contatti[0],
					'sedeLegale' => $sedeLegale[0],
					'isStruttura' => 1,
					'foto' => array('foto' => $logo)
			);
		}
		ViewFacade::getInstance()->toGui('DashboardAzienda', $dataArray);
	}

	private function toArray($prefix, $array)
	{
		$back;
		foreach($array as $k=>$v)
			$back[$prefix."_".$k] = $v;
		return $back;
	}
}
?>