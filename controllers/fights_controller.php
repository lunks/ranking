<?php
class FightsController extends AppController {

	var $name = 'Fights';
	var $components = array('Session', 'PhpBB3');
	var $helpers = array('Html', 'Form');


  function beforeFilter(){
    parent::beforeFilter();
  }

	function index() {
		$this->Fight->recursive = 0;
		$this->set('fights', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Fight->create();
			if ($this->Fight->save($this->data)) {
				$this->Session->setFlash('Duelo processado, aguardando confirmação.');
				$this->redirect(array('/'));
			} else {
				$this->Session->setFlash(__('The fight could not be saved. Please, try again.', true));
			}
		}
		if ($this->user_id == 1) $this->redirect('http://www.brnavies.com.br/forum/ucp.php?mode=login&redirect=http://www.brnavies.com.br/ranking/');
		$losers = $this->Fight->Member->find('list', array('conditions' => array('Member.user_type !=' => 2, 'Member.user_id !=' => $this->user_id)));
		$this->set(compact('losers'));
	}

	function confirm($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for fight', true));
			$this->redirect($this->referer);
		}
		$this->Fight->id = $id;
		if($this->Fight->field('loser_id') != $this->user_id){
		  $this->Session->setFlash('Você não perdeu esse duelo!');
		  $this->redirect($this->referer);
		}

		  $this->Fight->read(null,$id);
		  $this->loadModel('Ranking');
      $this->Ranking->processResult($this->Fight->data);
		  $this->Fight->delete($id);
			$this->Session->setFlash('Duelo confirmado.');
			$this->redirect('/');
	}
}
?>
