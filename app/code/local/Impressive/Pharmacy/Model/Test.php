<?php
class Impressive_Pharmacy_Model_Test extends Mage_core_Model_Abstract{
	public function _construct(){
		parent::_construct();
		$this->_init('pharmacy/test');
	}

} 