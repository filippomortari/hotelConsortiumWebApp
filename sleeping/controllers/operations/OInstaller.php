<?php


class OInstaller implements Operation{
	
	public function doOp($data = null){
		global $PATH;
		
		if($_POST['userDB'] == $PATH['mysql']['user'] && $_POST['pwdDB'] == $PATH['mysql']['password'] ){
			//creo la connessione al db
			mysql_connect(
					$PATH['mysql']['host'],
					$PATH['mysql']['user'],
					$PATH['mysql']['password']
			);
			mysql_query('CREATE DATABASE IF NOT  EXISTS '. $_POST['nameDB']);
			mysql_select_db($_POST['nameDB']);
			$PATH['mysql']['database'] = $_POST['nameDB'];
			$this->importa_sql($_POST['nameDB'].'.sql');
		}
		else{
			return false;
		}
	}
	
	private function importa_sql($sqlfile) {
		// estraggo il contenuto del file
		$queries = file_get_contents($sqlfile);
		// Rimuovo eventuali commenti
		$queries = preg_replace(array('/\/\*.*(\n)*.*(\*\/)?/', '/\s*--.*\n/', '/\s*#.*\n/'), "\n", $queries);
		// recupero le singole istruzioni
		$statements = explode(";\n", $queries);
		$statements = preg_replace("/\s/", ' ', $statements);
		// ciclo le istruzioni
		foreach ($statements as $query) {
			$query = trim($query);
			if ($query) {
				// eseguo la singola istruzione
				$result = mysql_query($query);
				// e stampo eventuali errori
				if (!$result)
					throw new Exception('Impossibile eseguire la query ' . $query . ': ' . mysql_error());
			}
		}
	}
}