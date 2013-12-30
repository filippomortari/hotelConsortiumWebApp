<?php

/**
 * @access public
 * @package utilities
 */
class USession {

	/**
	 * @var USession
	 */
	private static $instance;

	/**
	 * @access private
	 */
	private function __construct()
	{
	}

	/**
	 * @access public
	 * @static
	 */
	public static function getInstance() {
		if( ! isset(self::$instance) ){
			self::$instance = new USession();
			self::$instance->init();
		}
		return self::$instance;
	}

	/**
	 * @access public
	 */
	public function init()
	{
		@session_start();
	}

	/**
	 * @access public
	 * @param key
	 * @param value
	 * @ParamType key
	 * @ParamType value
	 */
	public function setValue($key, $value) {
		$_SESSION[$key] = $value;
	}

	/**
	 * @access public
	 * @param key
	 * @ParamType key
	 */
	public function deleteValue($key) {
		unset($_SESSION[$key]);
	}

	/**
	 * @access public
	 * @param key
	 * @ParamType key
	 */
	public function getValue($key) {
		$back = false;
		if (isset($_SESSION[$key]))
			$back = $_SESSION[$key];
		return $back;
	}
	
	public function stampa(){
		print_r($_SESSION);
	}

	/**
	 * @access public
	 */
	public function destroy() {
		unset($_SESSION);
		session_destroy();
	}
}
?>