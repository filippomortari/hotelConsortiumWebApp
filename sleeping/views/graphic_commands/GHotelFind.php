<?php

class GHotelFind implements GraphicCommand{
	
	private $css, $js;
	
	public function draw($data = null){
		
		global $PATH;
		
		$this->addCss("hotelFind");
		
		$this->css[] = $PATH['css_path']."slider/page.css";
		$this->css[] = $PATH['css_path']."slider/theme-metallic.css";
		
		$this->js[] = "http://mottie.github.com/tablesorter/docs/js/chili/jquery.chili-2.2.js";
		$this->js[] = $PATH['js_path']."slider/jquery.easing.1.2.js";
		$this->js[] = $PATH['js_path']."slider/swfobject.js";
		$this->js[] = $PATH['js_path']."slider/jquery.anythingslider.js";
		$this->js[] = $PATH['js_path']."slider/jquery.jatt.min.js";
		
		$this->addJs("jquery.anythingslider");
		$this->addJs("script1");
		$this->addJs("script2");
		$this->addJs("goToHotelPage");
		$this->addJs("findHotel");
		
		USmarty::getInstance()->assignArray("data", $data);
		
		echo json_encode(
				array(
					"css" => $this->css,
					"js" => $this->js,
					"html" => USmarty::getInstance()->fetch($PATH['smarty_template']."hotelFind.tpl")
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