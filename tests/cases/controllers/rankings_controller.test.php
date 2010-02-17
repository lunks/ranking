<?php
/* Rankings Test cases generated on: 2010-02-17 13:02:10 : 1266419350*/
App::import('Controller', 'Rankings');

class TestRankingsController extends RankingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RankingsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ranking');

	function startTest() {
		$this->Rankings =& new TestRankingsController();
		$this->Rankings->constructClasses();
	}

	function endTest() {
		unset($this->Rankings);
		ClassRegistry::flush();
	}

}
?>