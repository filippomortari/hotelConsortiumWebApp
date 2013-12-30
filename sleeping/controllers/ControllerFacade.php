<?php

/**
 * @access public
 * @package controllers
 */
class ControllerFacade {

	/**
	 *
	 * @var ControllerFacade
	 */
	private static $instance;

	/**
	 * @var USession
	 */
	private $sess;
	
	private $conn;

	/**
	 * @access private
	 */
	private function __construct() {
		//avvio la sessione
		//$sess = USession::getInstance()->init();
		$this->conn = UDoctrine::getInstance()->start_connection();
	}

	/**
	 *
	 * abbiamo il controllo che � istanziato un unico ControllerFacade
	 * @access public
	 * @static
	 */
	public static function getInstance() {
		if( ! isset(self::$instance) )
			self::$instance = new ControllerFacade();
		return self::$instance;
	}
	
	public function toSysAction($operation, $data = null)
	{
		OperationFactory::getInstance()->getOperation('O'.$operation)->doOp($data);
	}

	/**
	 * @access protected
	 * @param template
	 * @ParamType template
	 */
	protected function setHtmlContent($template) {
		return ViewFacade::getInstance()->fetchTemplate($template);
	}

	public function debug()
	{
		$this->toSysAction('UserSignup');
	}
}
?>