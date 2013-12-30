<?php

class GLogout implements GraphicCommand{
	
	public function draw( $data = null ){
		
		if($data['error'] == 1)
		{
			echo json_encode(array('error' => 1));
		}
		else {
			header($_SERVER['SERVER_PROTOCOL'].' 500 Internal Server Error', true, 500);
		}
	}
}