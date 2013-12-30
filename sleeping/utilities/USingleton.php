<?php
/**
 * @access public
 * @package utilities
 */
class USingleton {
	private static $instance = array();

	/**
	 * @access private
	 */
	private function __construct() {
		// Not yet implemented
	}

	/**
	 * @access protected
	 * @param class
	 * @static
	 * @ParamType class 
	 */
	protected static function getInstance($class) {
		if( ! isset(self::$instance[$class]) )
			$instance[$class] = new $class();
		return $instance[$class];
	}
}
?>