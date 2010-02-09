<?php
/* Fight Test cases generated on: 2010-02-09 16:02:50 : 1265739350*/
App::import('Model', 'Fight');

class FightTestCase extends CakeTestCase {
	var $fixtures = array('app.fight');

	function startTest() {
		$this->Fight =& ClassRegistry::init('Fight');
	}

	function endTest() {
		unset($this->Fight);
		ClassRegistry::flush();
	}

}
?>