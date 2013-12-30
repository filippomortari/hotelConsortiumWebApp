<?php

/**
 * @access public
 * @package views
 */
class ViewFacade {
	private static $instance;
	private $views;
	private $smarty;

	/**
	 * @access public
	 */
	public function __construct() {
		$this->smarty = USmarty::getInstance();
	}

	/**
	 * @access public
	 * @static
	 */
	public static function getInstance()
	{
		if( ! isset(self::$instance) )
			self::$instance = new ViewFacade();
		return self::$instance;
	}

	/**
	 *
	 * recupera il controller dalla richiesta
	 *
	 * @access public
	 */
	public function getOperation() {
		$back = false;
		if( isset($_REQUEST['o']) )
			$back = $_REQUEST['o'];
		return $back;
	}

	/**
	 * recupera il task dalla richiesta
	 *
	 * @access public
	 */
	public function getGraphicCommand() {
		$back = false;
		if( isset($_REQUEST['gc']) )
			$back = $_REQUEST['gc'];
		return $back;
	}

	/**
	 * @access public
	 */
	public function getOption(){
		$back = null;
		if( isset($_REQUEST['opt']) )
			$back = $_REQUEST['opt'];
		return $back;
	}

	public function start()
	{
		if($this->getOperation())
			ControllerFacade::getInstance()->toSysAction($this->getOperation(), $this->getOption());
		elseif ($this->getGraphicCommand())
		  $this->toGui($this->getGraphicCommand(), $this->getOption());
		elseif(USession::getInstance()->getValue('loggedIn'))
		  $this->toGui("HomeLogged", array( 'user' => USession::getInstance()->getValue('user')));
		else
			$this->toGui("Home");

	}

	public function startAdmin()
	{
		if (!isset($_SERVER['PHP_AUTH_USER'])) {
			header('WWW-Authenticate: Basic realm="autenticazione albergatore"');
			header('HTTP/1.0 401 Unauthorized');
			header('Content-Type: text/html; charset=utf-8');
			ViewFacade::getInstance()->toGui('Error');
			//echo 'Messaggio da inviare se si preme il tasto Cancel';
			exit;
		} else {
			ControllerFacade::getInstance()->toSysAction('HotelierLogin');
		}
	}
	
	public function installer(){
		$this->toGui('Installer');
	}
	/**
	 *
	 * ------------ N.B. implementare factory dei GC -------------
	 * @access public
	 * @param class_view
	 * @param data
	 * @ParamType class_view
	 * @ParamType data
	 */
	public function toGui($class_view, $data = null) {
		GCFactory::getInstance()->getGraphicCommand('G'.$class_view)->draw($data);
		//$view->draw($data);
	}
}
?>