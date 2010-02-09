<?php
class MembersController extends AppController {

	var $name = 'Members';
	var $components = array('PhpBB3');
	var $useModel = false;
	function validates_user(){
	  if(!$this->PhpBB3->user->data['is_registered'])
	    return false;
    return true;
	}

}
?>
