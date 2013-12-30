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

class EPrezzo extends Doctrine_Record {
  public function setTableDefinition() {
    $this->setTableName('EPrezzo');
    $this->hasColumn('ID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
        'primary' => true, 
        'autoincrement' => true,
      )
    );
    $this->hasColumn('Value as value', 'float', array(
        'type' => 'float',
        'notnull' => false,
      )
    );
    $this->hasColumn('Currency as currency', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
  }
  
  public function setUp() {
    parent::setUp();
  }
  
}

?>
