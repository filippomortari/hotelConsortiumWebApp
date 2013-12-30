<?php

/**
 * @access public
 * @package controllers.operations
 */
class OCheckData implements Operation {

	/**
	 * @access public
	 */
	public function doOp() {
		
		global $PATH;
		
		$con = Doctrine_Manager::connection($PATH['DSN']);

		$user = $_POST['user'];
		
		$q = UDoctrine::getInstance()->queryDB( null, 'EUtente', 'userName', $user );

		if( count($q) )
			echo -1;
		else
			echo 0;
	}
}
?>