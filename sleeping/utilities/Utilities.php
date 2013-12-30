<?php
/**
 * @access public
 * @package utilities
 */
class Utilities {

	/**
	 * @access public
	 * @param class_name
	 * @static
	 * @ParamType class_name
	 */
	public static function autoload($class_name) {
		global $PATH;
		switch ($class_name[0]) {
			case 'G':
				require_once ($PATH['url'].'views/graphic_commands/'.$class_name.'.php');
				break;
			case 'O':
				require_once ($PATH['url'].'controllers/operations/'.$class_name.'.php');
				break;
			case 'U':
				require_once ($PATH['url'].'utilities/'.$class_name.'.php');
				break;
			case 'E':
				require_once ($PATH['url'].'models/'.$class_name.'.php');
		}
	}
	
	public static function readDirectory ($path){
		//Imposto la directory da leggere
		$directory = $path;
		$dirContent = false;
		// Apriamo una directory e leggiamone il contenuto.
		if (is_dir($directory)) {
			//Apro l'oggetto directory
			if ($directory_handle = opendir($directory)) {
				//Scorro l'oggetto fino a quando non è termnato cioè false
				while (($file = readdir($directory_handle)) !== false) {
					//Se l'elemento trovato è diverso da una directory
					//o dagli elementi . e .. lo visualizzo a schermo
					if((!is_dir($file))&($file!=".")&($file!=".."))
						$dirContent[] = $path.'/'.$file;
				}
				//Chiudo la lettura della directory.
				closedir($directory_handle);
				return $dirContent;
			}
		}
	}
	
}
?>