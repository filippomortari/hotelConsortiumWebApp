<?php

class GError implements GraphicCommand{
	
	public function draw($data = null){
		
		/**
		 * modulo per invio automatico dell'email, per adesso non implementato per
		 * bug nel send mail di php
		 */
		
		/*
		ControllerFacade::getInstance()->toSysAction('Error', 
				array(
					'url'=>"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
					'codError'=> http_response_code()
				) 
		);
		*/
		USmarty::getInstance()->assign(
			array(
				'errore' =>'errore '.http_response_code(),
				'url'=>"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
			)
		);
		USmarty::getInstance()->display('error.tpl');
	}
}