<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GHome implements GraphicCommand {

	/**
	 * @access public
	 * @param data
	 * @ParamType data 
	 */
	private $css = array();
	private $js = array();
	
	public function draw($data = null){
		global $PATH;
		//sono i css per la pagina che vado a montare
		$this->addCss("resetStyle");
		$this->addCss("style");
		$this->addCss("boxSearch");
		$this->addCss("headerCss");
		$this->addCss("hotelierCss");
		$this->addCss("jquery.ui.datepicker");
		$this->addCss("jquery-ui");
		$this->addCss("galleryStyle");
		$this->addCss("hotelFind");
		$this->addCss("newsCss");
		$this->addCss("hotelConsigliati");
		
		//sono gli script js che mi servono per la pagina che devo montare
		$this->addJs("login");
		$this->addJs("ricerca_avanzata");
		$this->addJs("signup");
		$this->addJs("myUtilities");
		$this->addJs("spinner");
		$this->addJs("sliderBoxSearch");
		$this->addJs("hotelier_login");
		$this->addJs("findHotel");
		$this->addJS("date-picker");
		
		$this->css[] = $PATH['css_path']."slider/page.css";
		$this->css[] = $PATH['css_path']."slider/theme-metallic.css";
		
		$this->js[] = $PATH['js_path']."slider/jquery.chili-2.2.js";
		$this->js[] = $PATH['js_path']."slider/jquery.easing.1.2.js";
		$this->js[] = $PATH['js_path']."slider/swfobject.js";
		$this->js[] = $PATH['js_path']."slider/jquery.anythingslider.js";
		$this->js[] = $PATH['js_path']."slider/jquery.jatt.min.js";
		
		$this->addJs("jquery.anythingslider");
		$this->addJs("script1");
		$this->addJs("script2");
		
		$data['css'] = $this->css;
		$data['js'] = $this->js;
		
		$data['foto'] = Utilities::readDirectory('./sleeping/public/img/sliderHome'); //leggo le foto presenti nella home
			
		//testo finto per le news
			$notizia['titolo'] = "titolo di prova";
			$notizia['testo'] = file_get_contents("./loremIpsum.txt");
			$news[] = $notizia;
			$notizia['titolo'] = "titolo di prova 2";
			$notizia['testo'] = file_get_contents("./loremIpsum.txt");
			$news[] = $notizia;
			
		//hotel finti
			$hotel['nomeHotel'] = "nome di prova 1";
			$hotel['descrizioneHotel'] = file_get_contents("./loremIpsum.txt");
			$hotels[] = $hotel;
			$hotel['nomeHotel'] = "nome di prova 2";
			$hotel['descrizioneHotel'] = file_get_contents("./loremIpsum.txt");
			$hotels[] = $hotel;
			
		USmarty::getInstance()->assignArray("news", $news);
		USmarty::getInstance()->assignArray("hotels", $hotels);
		USmarty::getInstance()->assign($data);
		
		USmarty::getInstance()->display('home.tpl');
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