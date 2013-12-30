<?php

/**
 * @access public
 * @package views.graphic_commands
 */
class GDashboard implements GraphicCommand {

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
		$this->addCss("dashCss");
		$this->addCss("tabsCss");
		$this->addCss("fileInputCss");
		
		$data['css'] = $this->css;
		
		//sono gli script js che mi servono per la pagina che devo montare
		$this->addJs("login");
		$this->addJs("ricerca_avanzata");
		$this->addJs("findHotel");
		$this->addJs("signup");
		$this->addJs("myUtilities");
		$this->addJs("fileUpload");
		$this->addJs("dashAzienda");
		$this->addJs("dashRoom");
		
		//librerie jquery
		$this->js[] = $PATH['url'].'libs/js/jquery-ui/jquery.ui.tabs.js';
		//leggo dal file l'html da restituire
		USmarty::getInstance()->assign($data['user']);
		USmarty::getInstance()->assign($data['contatti']);
		USmarty::getInstance()->assign($data['residenza']);
		USmarty::getInstance()->assign($data['foto']);
		
		//passo a js il contenuto fetchatto dal file
		echo json_encode( array(
				'html' => file_get_contents($PATH['html'].'tabs'.$data['typeUser'].'.html'),
				'css' => $this->css,
				'js' => $this->js,
				'htmlProfiloUtente' => USmarty::getInstance()->fetch($PATH['smarty_template'].'dashboard.tpl')
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
?>