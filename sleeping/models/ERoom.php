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

class ERoom extends Doctrine_Record {
  public function setTableDefinition() {
    $this->setTableName('ERoom');
    $this->hasColumn('ID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
        'primary' => true, 
        'autoincrement' => true,
      )
    );
    $this->hasColumn('EStrutturaID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('EPrezzoID', 'integer', 4, array(
    		'type' => 'integer',
    		'length' => 4,
    		'unsigned' => false,
    		'notnull' => true,
    )
    );
    $this->hasColumn('EPrenotazioneID', 'integer', 4, array(
    		'type' => 'integer',
    		'length' => 4,
    		'unsigned' => false,
    		'notnull' => true,
    )
    );
    $this->hasColumn('Posti as posti', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('Descrizione as descrizione', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Discriminator', 'string', 255);
    
    $this->setSubclasses(array(
        'ESingleRoom' => array('Discriminator' => 'SingleRoom'),
        'EDoubleRoom' => array('Discriminator' => 'DoubleRoom'),
        'ETripleRoom' => array('Discriminator' => 'TripleRoom'),
      )
    );
  }
  
  public function setUp() {
    parent::setUp();
    $this->hasOne('EPrezzo as prezzo', array(
        'local' => 'EPrezzoID', 
        'foreign' => 'ID'
      )
    );
    $this->hasOne('EPrenotazione as prenotazione', array(
        'local' => 'EPrenotazioneID', 
        'foreign' => 'ID'
      )
    );
    $this->hasOne('EStruttura as struttura', array(
        'local' => 'EStrutturaID', 
        'foreign' => 'ID'
      )
    );
  }
  
}

?>
