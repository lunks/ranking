<?php
/* Ranking Test cases generated on: 2010-02-18 17:02:25 : 1266522445*/
App::import('Controller', 'Ranking');

class TestRankingController extends RankingController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RankingControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ranking');

	function startTest() {
		$this->Ranking =& new TestRankingController();
		$this->Ranking->constructClasses();
	}

	function endTest() {
		unset($this->Ranking);
		ClassRegistry::flush();
	}

}
?>