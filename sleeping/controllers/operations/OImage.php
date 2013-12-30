<?php

/**
 * @access public
 * @package controllers.operations
 */
class OImage implements Operation {
	private $upload_handler;

	/**
	 * @access public
	 */
	public function doOp() {
		$this->upload_handler = new UuploadHandler();
		
		if( ($_SERVER['REQUEST_METHOD'] == 'POST') || ($_SERVER['REQUEST_METHOD'] == 'GET') || $_SERVER['REQUEST_METHOD'] != 'DELETE' )
			$this->upload_handler->{$_SERVER['REQUEST_METHOD']}();
		
		switch ($_SERVER['REQUEST_METHOD']) {
			case 'OPTIONS':
				break;
			case 'HEAD':
			case 'GET':
				$this->upload_handler->get();
				break;
			case 'POST':
				if (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'DELETE') {
					$this->upload_handler->delete();
				} else {
					$this->upload_handler->post();
				}
				break;
			case 'DELETE':
				$this->upload_handler->delete();
				break;
			default:
				header('HTTP/1.1 405 Method Not Allowed');
		}
	}
}
?>