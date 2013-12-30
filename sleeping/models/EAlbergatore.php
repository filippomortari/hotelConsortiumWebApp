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

class EAlbergatore extends EUtente {
	public function setUp() {
		parent::setUp();
		$this->hasOne('EStruttura as struttura', array(
				'local' => 'ID',
				'foreign' => 'EUtenteID'
		)
		);
	}
}

?>
