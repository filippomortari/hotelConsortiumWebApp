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

class EStruttura extends Doctrine_Record {
  public function setTableDefinition() {
    $this->setTableName('EStruttura');
    $this->hasColumn('ID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
        'primary' => true, 
        'autoincrement' => true,
      )
    );
    $this->hasColumn('EIndirizzoID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('EContattiID', 'integer', 4, array(
    		'type' => 'integer',
    		'length' => 4,
    		'unsigned' => false,
    		'notnull' => true,
    )
    );
    $this->hasColumn('EUtenteID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Nome as nome', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('PIva as pIva', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Cf as cf', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Stelle as stelle', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Catena as catena', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Discriminator', 'string', 255);
    
    $this->setSubclasses(array(
        'EBeb' => array('Discriminator' => 'EBeb'),
        'EHotel' => array('Discriminator' => 'EHotel'),
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
    $this->hasOne('EIndirizzo as sedeLegale', array(
        'local' => 'EIndirizzoID', 
        'foreign' => 'ID'
      )
    );
    $this->hasOne('EAlbergatore as albergatore', array(
        'local' => 'EUtenteID', 
        'foreign' => 'ID'
      )
    );
    $this->hasMany('ERoom as rooms', array(
        'local' => 'ID', 
        'foreign' => 'EStrutturaID'
      )
    );
    $this->hasMany('EFoto as foto', array(
        'local' => 'ID', 
        'foreign' => 'EStrutturaID'
      )
    );
  }
  
}

?>
