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

class EPrenotazione extends Doctrine_Record {
  public function setTableDefinition() {
    $this->setTableName('EPrenotazione');
    $this->hasColumn('ID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
        'primary' => true, 
        'autoincrement' => true,
      )
    );
    $this->hasColumn('EPrezzoID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('CheckIn as checkIn', 'date', array(
        'type' => 'date',
        'notnull' => false,
      )
    );
    $this->hasColumn('CheckOut as checkOut', 'date', array(
        'type' => 'date',
        'notnull' => false,
      )
    );
    $this->hasColumn('Nights as nights', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('People as people', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
      )
    );
    $this->hasColumn('Confermata as confermata', 'boolean', array(
        'type' => 'boolean',
        'notnull' => true,
      )
    );
  }
  
  public function setUp() {
    parent::setUp();
    $this->hasOne('EPrezzo as totale', array(
        'local' => 'EPrezzoID', 
        'foreign' => 'ID'
      )
    );
    $this->hasMany('ERoom as room', array(
        'local' => 'ID', 
        'foreign' => 'EPrenotazioneID'
      )
    );
  }
  
}

?>
