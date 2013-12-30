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

class EContatti extends Doctrine_Record {
  public function setTableDefinition() {
    $this->setTableName('EContatti');
    $this->hasColumn('ID', 'integer', 4, array(
        'type' => 'integer',
        'length' => 4,
        'unsigned' => false,
        'notnull' => true,
        'primary' => true, 
        'autoincrement' => true,
      )
    );
    $this->hasColumn('Telefono as telefono', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Mobile as mobile', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Fax as fax', 'string', 255, array(
        'type' => 'string',
        'length' => 255,
        'fixed' => false,
        'notnull' => false,
      )
    );
    $this->hasColumn('Email as email', 'string', 255, array(
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
