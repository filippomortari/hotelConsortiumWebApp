<?php

global $PATH;

require_once $PATH['smarty_lib'].'Smarty.class.php';
/**
 * @access public
 * @package utilities
 */
class USmarty {
	
	private static $instance;
	private $smarty;

	/**
	 * @access private
	 */
	private function __construct() {
		global $PATH;

		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir($PATH['smarty_template']);
		$this->smarty->compile_dir = $PATH['smarty_template_c'];
		$this->smarty->setConfigDir($PATH['smarty_config']);
		$this->smarty->setCacheDir($PATH['smarty_cache']);
		 
		$this->smarty->assign('app', 'sleeping');
	}

	/**
	 * @access public
	 * @static
	 */
	public static function getInstance() {
		if ( ! isset(self::$instance) )
			self::$instance = new USmarty();
		return self::$instance;
	}

	/**
	 * @access public
	 * @param template_name
	 * @ParamType template_name
	 */
	public function display($template_name) {
		$this->smarty->display($template_name);
	}

	/**
	 * @access public
	 * @param data
	 * @ParamType array
	 */
	public function assign($data)
	{
		foreach ($data as $k=>$v)
			$this->smarty->assign($k,$v);
	}
	
	public function assignArray($key, $data)
	{
		$this->smarty->assign($key, $data);
	}
	
	public function fetch($template)
	{
		return $this->smarty->fetch($template);
	}
}
?>