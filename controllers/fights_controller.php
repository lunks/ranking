<?php
class FightsController extends AppController {

	var $name = 'Fights';
	var $helpers = array('Html', 'Form');
  var $components = array('PhpBB3');

	function index() {
		$this->Fight->recursive = 0;
		$this->set('fights', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid fight', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fight', $this->Fight->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Fight->create();
			if ($this->Fight->save($this->data)) {
				$this->Session->setFlash(__('The fight has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fight could not be saved. Please, try again.', true));
			}
		}
		$losers = $this->Fight->Member->find('list', array('conditions' => array('Member.user_type != 2')));
		$this->set(compact('losers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid fight', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Fight->save($this->data)) {
				$this->Session->setFlash(__('The fight has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fight could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Fight->read(null, $id);
		}
		$members = $this->Fight->Member->find('list');
		$this->set(compact('members'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for fight', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Fight->delete($id)) {
			$this->Session->setFlash(__('Fight deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Fight was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
