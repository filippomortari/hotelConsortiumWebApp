<?php

class GInstaller implements GraphicCommand{
	
	private $css;
	
	public function draw($data = null){
		
		$this->addCss('style');
		$this->addCss("headerCss");
		$data['css'] = $this->css;
		
		USmarty::getInstance()->assign($data);
		
		USmarty::getInstance()->display('installer.tpl');
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