<?php

class UError{
	
	public function __construct()
	{
		ViewFacade::getInstance()->toGui('Error');
	}
}