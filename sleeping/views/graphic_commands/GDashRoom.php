<?php

class GDashRoom implements GraphicCommand{

	private $css;
	private $js;

	public function draw( $data = null ){
		global $PATH;
		$this->addCss("photoManager");
		
		$this->addCss("dashRoom");
		$this->addJs("dashUtente");
		$this->addJs("dashAzienda");
		$this->addJs("photoManager");
		$this->addJs("addRoom");
		$this->addJs("saveEditCamera");
		
		USmarty::getInstance()->assign($data);
		echo json_encode(array
				(
					"tabs_html" => USmarty::getInstance()->fetch($PATH['smarty_template'].'dashRoom.tpl'),
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