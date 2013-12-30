<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GHomeLogged implements GraphicCommand {

	/**
	 * @access public
	 * @param data
	 * @ParamType data 
	 */
	private $css = array();
	private $js = array(); 
	
	public function draw($data = null) {
		global $PATH;
		//sono i css per la pagina che vado a montare
		$this->addCss("resetStyle");
		$this->addCss("style");
		$this->addCss("boxSearch");
		$this->addCss("headerCss");
		$this->addCss("dashCss");
		$this->addCss("tabsCss");
		$this->addCss("newsCss");
		$this->addCss("galleryStyle");
		
		$this->css[] = $PATH['url']."public/css/slider/page.css";
		$this->css[] = $PATH['url']."public/css/slider/theme-metallic.css";
		
		$this->js[] = $PATH['url']."libs/js/jquery/jquery-1.8.2.min.js";
		$this->js[] = $PATH['url']."libs/js/jquery-ui/jquery-ui-1.9.0.custom.min.js";
		$this->js[] = "http://mottie.github.com/tablesorter/docs/js/chili/jquery.chili-2.2.js";
		$this->js[] = $PATH['url']."public/js/slider/jquery.easing.1.2.js";
		$this->js[] = $PATH['url']."public/js/slider/swfobject.js";
		$this->js[] = $PATH['url']."public/js/slider/jquery.anythingslider.js";
		$this->js[] = $PATH['url']."public/js/slider/jquery.jatt.min.js";
		
		$this->addJs("jquery.anythingslider");
		$this->addJs("script1");
		$this->addJs("script2");
		//sono gli script js che mi servono per la pagina che devo montare
		$this->addJs("logout");
		$this->addJs("ricerca_avanzata");
		$this->addJs("myUtilities");
		$this->addJs("date-picker");
		$this->addJs("dashboard");
		$this->addJs("sliderBoxSearch");
		$this->addJs("spinner");
		$this->addJs("findHotel");
		$this->addJs("myUtilities");
		
		$data['js'] = $this->js;
		$data['css'] = $this->css;
		
		$data['foto'] = Utilities::readDirectory($PATH['url'].'public/img/sliderHome');
		
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
		USmarty::getInstance()->display($PATH['smarty_template'].'home_logged.tpl');
	}
	
	public function addCSS($cssStyleName){
		global $PATH;
		$this->css[] = $PATH['css_path'].$cssStyleName.".css";
	}
	
	public function addJs($jsScriptName){
		global $PATH;
		$this->js[] = $PATH['js_path'].$jsScriptName.".js";
	}
}
?>