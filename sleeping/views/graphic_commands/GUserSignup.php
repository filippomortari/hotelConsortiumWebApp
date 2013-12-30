<?php
/**
 * @access public
 * @package views.graphic_commands
 */
class GUserSignup implements GraphicCommand {

	private $css;
	private $js;
	/**
	 * @access public
	 * @param data
	 * @ParamType data 
	 */
	public function draw($data = null) {
		global $PATH;
		
		$this->css = array(
				);

		$this->addJS("checkData");
		$this->addJS("accordionEffect");
		$this->addJS("signup");
		
		echo json_encode(
				array(
						"html"=> file_get_contents($PATH['html'].'user_signup.html'),
						"js"=> $this->js,
						"opt"=> $data
				));
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