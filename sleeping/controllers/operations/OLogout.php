<?php

/**
 * @access public
 * @package controllers.operations
 */
class OLogout implements Operation {

	/**
	 * @access public
	 */
	public function doOp($data = null) {
		//distrugge la sessione
		try{
			USession::getInstance()->destroy();
			ViewFacade::getInstance()->toGui('Logout', array('error' => 1));
			//echo json_encode(array('error' => 1));
		}catch(Exception $e){
			ViewFacade::getInstance()->toGui('Logout', array('error' => -1));
		}
	}
}
?>