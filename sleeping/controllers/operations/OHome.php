<?php
/**
 * @access public
 * @package controllers.operations
 */
class OHome implements Operation {

	/**
	 * @access public
	 */
	public function doOp() {
		$view = new GHome();
		$view->draw();
	}
}
?>