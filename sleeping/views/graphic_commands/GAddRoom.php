<?php

class GAddRoom implements GraphicCommand{
	
	private $css = false;
	private $js;
	
	public function draw( $data = null ){
		global $PATH;
		
		$this->addJs("addRoom");
		$this->addJs("myUtilities");
		
		echo json_encode (
				array
					('html' => file_get_contents($PATH['html'].'addRoom.html'),
					 'tabs_html' => false,
					 'js' => $this->js,
					 'css' => $this->css
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