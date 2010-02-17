<?php
/* Ranking Test cases generated on: 2010-02-17 13:02:44 : 1266419324*/
App::import('Model', 'Ranking');

class RankingTestCase extends CakeTestCase {
	var $fixtures = array('app.ranking');

	function startTest() {
		$this->Ranking =& ClassRegistry::init('Ranking');
	}

	function endTest() {
		unset($this->Ranking);
		ClassRegistry::flush();
	}

}
?>