<?php

class OEditData implements Operation{

	private $user;
	
	public function doOp($data = null)
	{
		$this->user = Doctrine_Core::getTable("EUtente")->findOneByUsername(USession::getInstance()->getValue('user'));
		$metodo = 'edit'.$_POST['edit'];
		
		//al posto dello switch
		$this->{$metodo}();
		
		/*switch ($_POST['edit']){
			case 'residenza':
				$this->editResidenza();
				break;
			case 'datiGenerali':
				$this->editDatiGenerali();
				break;
		}*/
		try {
			$this->user->save();
			echo json_encode(1);
		} catch (Exception $e) {
			echo json_encode(-1);
		}
	}

	private function editDatiGenerali()
	{
		$this->user->password = $_POST['pwd'];
	}

	private function editResidenza()
	{
		$this->user->residenza->via = $_POST['via'];
		$this->user->residenza->citta = $_POST['citta'];
		$this->user->residenza->prov = $_POST['prov'];
		$this->user->residenza->cap = $_POST['cap'];
	}
	
	private function editContatto()
	{
		$this->user->contatti->telefono = $_POST['telefono'];
		$this->user->contatti->mobile = $_POST['mobile'];
		$this->user->contatti->fax = $_POST['fax'];
		$this->user->contatti->email = $_POST['email'];
	}
}