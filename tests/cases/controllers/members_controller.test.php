<?php
/* Members Test cases generated on: 2010-02-09 17:02:50 : 1265743490*/
App::import('Controller', 'Members');

class TestMembersController extends MembersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MembersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.member', 'app.squad');

	function startTest() {
		$this->Members =& new TestMembersController();
		$this->Members->constructClasses();
	}

	function endTest() {
		unset($this->Members);
		ClassRegistry::flush();
	}

}
?>