<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GHotelierLogin implements GraphicCommand {
	
	private $css;
	private $js;
	
	/**
	 * @access public
	 * @param data
	 * @ParamType data
	 */
	
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
		$this->addCss("dashRoom");
		$data['css'] = $this->css;
	
		//sono gli script js che mi servono per la pagina che devo montare
		$this->addJs("myUtilities");
		$this->addJs("dashboard");
		$this->addJs("spinner");
		$this->addJs("login");
		$this->addJs("ricerca_avanzata");
		$this->addJs("signup");
		$this->addJs("myUtilities");
		$this->addJs("dashUtente");
		$this->addJs("addStruttura");
		
		//$this->addJs("hotelier_login");
		$this->addJs("sliderBoxSearch");
		$data['js'] = $this->js;
	
		if($data['error'] == 1){
			USmarty::getInstance()->assign($data);
			USmarty::getInstance()->display('hotelHome.tpl');
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
?>