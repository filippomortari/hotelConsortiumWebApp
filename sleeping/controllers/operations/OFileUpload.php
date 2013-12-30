<?php


class OFileUpload implements Operation{

	public function doOP( $data = null ){
		global $PATH;
		
		//cartella di upload
		$savefolder = $PATH['url'].'userPhoto/'.USession::getInstance()->getValue("user").'/';
		if( ! is_dir($savefolder) )
			mkdir($savefolder);
		
		$photoType = str_replace("image/", "",$_FILES['myfile']['type']);

		$photoName = $_FILES['myfile']['name'];
		
		if($photoType == 'png'){
			$foto = imagecreatefrompng($_FILES['myfile']['tmp_name']);
			imagepng($foto, $savefolder.'profile.'.$photoType);
		}
		else if($photoType == 'jpeg'){
			$foto = imagecreatefromjpeg($_FILES['myfile']['tmp_name']);
			imagejpeg($foto, $savefolder.'profile.'.$photoType);
		}
		else if($photoType == 'gif'){
			$foto = imagecreatefromgif($_FILES['myfile']['tmp_name']);
			imagegif($foto, $savefolder.'profile.'.$photoType);
		}
	}
}


/*
 * [myfile] => Array ( 
 * 	[name] => google-drive-icon.png [type] => image/png [tmp_name] => /tmp/phpJ6Ea2e [error] => 0 [size] => 9227 ) 
 * )
 */
?>


 