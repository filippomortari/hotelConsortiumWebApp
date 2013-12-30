<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GHotelSignup implements GraphicCommand {

	/**
	 * @access public
	 * @param data
	 * @ParamType data 
	 */
	private $css;
	private $js;
	
	public function draw($data = null) {
		global $PATH;
		$this->addCss("tabsCss");
		
		$this->addJs("accordionEffect");
		$this->addJs("signup");
		
		$this->js[] = $PATH['js_lib_ui'].'jquery.effects.core.js';
		$this->js[] = $PATH['js_lib_ui'].'jquery.effects.blind.js';
		
		echo json_encode(
				array(
						"html" => file_get_contents($PATH['html'].'hotel_signup.html'),
						"css" => $this->css,
						"js" => $this->js
					)
				);
	}
	public function addCss($cssStyleName){
		global $PATH;
		$this->css[] = $PATH['css_path'].$cssStyleName.".css";
	}
	
	public function addJs($jsScriptName){
		global $PATH;
		$this->js[] = $PATH['js_path'].$jsScriptName.".js";
	}
}
?>