<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GDashboardAzienda implements GraphicCommand {
	private $script = array();
	private $css = array();
	
	/**
	 * @access public
	 * @param data
	 * @ParamType data
	 */
	public function draw($data = null) {
		global $PATH;
		
		//css specifico della mini pagina
		//sono i css per la pagina che vado a montare
		//$this->addCss("dashCss");
		//$this->addCss("tabsCss");
		$this->addCss("fileInputCss");
		$this->addCss("boxSearch");
		//$data['css'] = $this->css;
	
		//sono gli script js che mi servono per la pagina che devo montare

		$this->addJs("dashRoom");
		$this->addJs("dashUtente");
		$this->addJs("addStruttura");
		$this->addJs("addRoom");
		$this->addJs("fileUploadLogo");
		//librerie jquery
		$this->js[] = $PATH['url'].'libs/js/jquery-ui/jquery.ui.tabs.js';
		//leggo dal file l'html da restituire
		if($data['isStruttura'] == 0)
			echo json_encode( array(
					'css' => $this->css,
					'js' => $this->js,
					'htmlProfiloStruttura' => file_get_contents($PATH['html'].'noStrutture.html')
			));
		else{
			USmarty::getInstance()->assignArray('struttura',$data['struttura'][0]);
			USmarty::getInstance()->assignArray('contatti',$data['contatti']);
			USmarty::getInstance()->assignArray('sedeLegale',$data['sedeLegale']);
			USmarty::getInstance()->assign($data['foto']);
			echo json_encode( array(
					'html' => file_get_contents($PATH['html'].'tabsAlbergatore.html'),
					'css' => $this->css,
					'js' => $this->js,
					'htmlProfiloStruttura' => USmarty::getInstance()
						->fetch($PATH['smarty_template'].'dashAzienda.tpl')
			));
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