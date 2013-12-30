<?php

class GHotelPage implements GraphicCommand{
	
	private $css, $js;
	
	public function draw( $data = null ){
		global $PATH;
		
		//print_r($data);
		
		$this->addCss("personalPage");
		
		$this->addJs("goToHotelPage");
		$this->addJs("prenotazione");
		
		$logoPath = $PATH['hotel_admin'].str_replace(" ","", $data['struttura']['nome']).'/logo/thumb/logo.png';
		
		$galleryPath = $PATH['hotel_admin'].str_replace(" ","", $data['struttura']['nome']).'/foto';
		
		$fotoGallery = Utilities::readDirectory($galleryPath); //leggo le foto presenti nella home
		
		USmarty::getInstance()->assignArray('logo', $logoPath);
		USmarty::getInstance()->assignArray('checkIn', USession::getInstance()->getValue('checkIn'));
		USmarty::getInstance()->assignArray('checkOut', USession::getInstance()->getValue('checkOut'));
		USmarty::getInstance()->assignArray('fotoGallery', $fotoGallery);
		USmarty::getInstance()->assignArray("struttura", $data['struttura']);
		USmarty::getInstance()->assignArray("camere", $data['camere']);
		echo json_encode(
				array(
					'html' => USmarty::getInstance()->fetch($PATH['smarty_template'].'personalPage.tpl'),
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