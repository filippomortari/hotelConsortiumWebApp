<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GLogin implements GraphicCommand {

	
	private $css;
	private $js;
	
	/**
	 * @access public
	 * @param data
	 * @ParamType data 
	 */
	public function draw($data = null) {
		global $PATH;
		//leggo dal file l'html da restituire
		
		$this->addJs('checkData');
		$this->addJs('dashboard');
		$this->addJs('logout');
		
		if($data['error'] == true)
		//passo a js il contenuto fetchatto dal file
			echo json_encode( array(
					'error' => $data['error'],
					'html' => file_get_contents($PATH['html'].'box_header_logged.html'),
					'user' => $data['user'],
					'js' => $this->js
					)
				);
		else 
			echo json_econde( array('error' => $data['error']));
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