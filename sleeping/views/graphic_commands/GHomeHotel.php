<?php

class GHomeHotel implements GraphicCommand{

	private $css;
	private $js;

	public function draw($data = null){

		//sono i css per la pagina che vado a montare
		global $PATH;
		//leggo dal file l'html da restituire

		//sono i css per la pagina che vado a montare
		$this->addCss("resetStyle");
		$this->addCss("style");
		$this->addCss("sliderBox");
		$this->addCss("headerCss");
		$this->addCss("hotelierCss");
		$this->addCss("dashAziendaCss");
		$this->addCss("jquery.ui.datepicker");
		$this->addCss("jquery-ui");
		$this->addCss("galleryStyle");
		$data['css'] = $this->css;

		//sono gli script js che mi servono per la pagina che devo montare
		$this->addJs("myUtilities");
		$this->addJs("dashboard");
		$this->addJs("spinner");
		$this->addJs("sliderBoxSearch");
		$this->addJs("hotelier_login");
		$data['js'] = $this->js;

		if($data['error'] == 1){
			//USmarty::getInstance()->assign($data);
			echo json_encode(array(
				"error" => $data['error']
			));
		}
		else{
			@header("HTTP/1.1 503 Service Temporarily Unavailable");
			@header("Status: 503 Service Temporarily Unavailable");
			@header("Retry-After: 120");
			@header("Connection: Close");
		}
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