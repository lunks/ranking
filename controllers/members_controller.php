<?php
class MembersController extends AppController {

	var $name = 'Members';
	var $components = array('Session','PhpBB3');
	var $helpers = array('Html', 'Form');
	var $useModel = false;
	function beforeFilter(){
	  parent::beforeFilter();
	}

	function validates_user(){
	  if(!$this->PhpBB3->user->data['is_registered'])
	    return false;
    return true;
	}

  function index(){
  echo $user_id;
    $losses = $this->Member->Losses->find('all', array('conditions' => array('loser_id' => $this->user_id)));
    $this->set('losses', $losses);
  }
}
?>
