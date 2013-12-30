<?php
/**
 * "Visual Paradigm: DO NOT MODIFY THIS FILE!"
 * 
 * This is an automatic generated file. It will be regenerated every time 
 * you generate persistence class.
 * 
 * Modifying its content may cause the program not work, or your work may lost.
 */

/**
 * Licensee: DuKe TeAm
 * License Type: Purchased
 */

class EUtente extends Doctrine_Record {
  public function setTableDefinition() {
    $this->setTableName('EUtente');
    $this->hasColumn('ID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
        'primary' => true, 
        'autoincrement' => true,
      )
    );
    $this->hasColumn('EContattiID', 'integer', 4, array(
    		'type' => 'integer',
    		'length' => 4,
    		'unsigned' => false,
    		'notnull' => false,
    )
    );
    $this->hasColumn('EContattiID', 'integer', 4, array(
    		'type' => 'integer',
    		'length' => 4,
    		'unsigned' => false,
    		'notnull' => false,
    )
    );
    $this->hasColumn('EIndirizzoID3', 'integer', 4, array(
    		'type' => 'integer',
    		'length' => 4,
    		'unsigned' => false,
    		'notnull' => false,
    )
    );
    $this->hasColumn('EIndirizzoID2', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('EIndirizzoID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('Nome as nome', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Cognome as cognome', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('DataNascita as dataNascita', 'date', array(
        'type' => 'date',
        'notnull' => false,
      )
    );
    $this->hasColumn('CodFisc as codFisc', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Sesso as sesso', 'string', 1, array(
        'type' => 'string',
        'length' => 1,
        'fixed' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('Credito as credito', 'float', array(
        'type' => 'float',
        'notnull' => true,
      )
    );
    $this->hasColumn('Username as username', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Password as password', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Discriminator', 'string', 255);
    
    $this->setSubclasses(array(
        'EAlbergatore' => array('Discriminator' => 'Albergatore'),
        'EAdmin' => array('Discriminator' => 'Admin'),
      )
    );
  }
  
  public function setUp() {
    parent::setUp();
    $this->hasOne('EContatti as contatti', array(
        'local' => 'EContattiID', 
        'foreign' => 'ID'
      )
    );
    $this->hasOne('EIndirizzo as luogoNascita', array(
        'local' => 'EIndirizzoID3', 
        'foreign' => 'ID'
      )
    );
    $this->hasOne('EIndirizzo as domicilio', array(
        'local' => 'EIndirizzoID2', 
        'foreign' => 'ID'
      )
    );
    $this->hasOne('EIndirizzo as residenza', array(
        'local' => 'EIndirizzoID', 
        'foreign' => 'ID'
      )
    );
    $this->hasMany('EPrenotazione as prenotazione', array(
        'local' => 'ID', 
        'foreign' => 'EUtenteID'
      )
    );
  }
  
}

?>
