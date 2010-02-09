<?php
/* Fights Test cases generated on: 2010-02-09 18:02:07 : 1265745727*/
App::import('Controller', 'Fights');

class TestFightsController extends FightsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FightsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.fight', 'app.member', 'app.squad');

	function startTest() {
		$this->Fights =& new TestFightsController();
		$this->Fights->constructClasses();
	}

	function endTest() {
		unset($this->Fights);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>