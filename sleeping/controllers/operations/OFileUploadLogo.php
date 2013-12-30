<?php


class OFileUploadLogo implements Operation{

	public function doOP( $data = null ){
		global $PATH;
		
		$utente = Doctrine_Core::getTable("EUtente")
			->findOneByUsername(USession::getInstance()->getValue("albergatore"));
		
		$struttura = Doctrine_Core::getTable("EStruttura")
			->findOneByEUtenteID($utente->ID);
		
		$nomeStruttura = str_replace(" ", "",$struttura->nome);
		
		//cartella di upload
		$savefolder = $PATH['url'].'hotel_admin/'.$nomeStruttura.'/logo/';
		$savefolderThumb = $savefolder.'thumb/';
		
		if( ! is_dir($savefolder) ){
			mkdir($savefolder,0777,true);
			mkdir($savefolderThumb,0777,true);
		}
		
		$photoType = str_replace("image/", "",$_FILES['myfile']['type']);

		$photoName = $_FILES['myfile']['name'];
		
		if($photoType == 'png'){
			$foto = imagecreatefrompng($_FILES['myfile']['tmp_name']);
			imagepng($foto, $savefolder.'logo.'.$photoType);
			
			list($width, $height) = getimagesize($_FILES['myfile']['tmp_name']);
			$thumb = imagecreatetruecolor(100, 100);
			imagecopyresized($thumb, $foto, 0, 0, 0, 0, 100, 100, $width, $height);
			imagepng($thumb, $savefolderThumb.'logo.'.$photoType);
		}
		else if($photoType == 'jpeg'){
			$foto = imagecreatefromjpeg($_FILES['myfile']['tmp_name']);
			imagejpeg($foto, $savefolder.'logo.'.$photoType);
		}
		else if($photoType == 'gif'){
			$foto = imagecreatefromgif($_FILES['myfile']['tmp_name']);
			imagegif($foto, $savefolder.'logo.'.$photoType);
		}
	}
}


/*
 * [myfile] => Array ( 
 * 	[name] => google-drive-icon.png [type] => image/png [tmp_name] => /tmp/phpJ6Ea2e [error] => 0 [size] => 9227 ) 
 * )
 */
?>


 