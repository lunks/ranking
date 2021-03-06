<?php
/**
 * OK
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {

  var $components = array('Session', 'PhpBB3');
  var $username;
  var $user_id;
  var $group_id;
  var $admin;

function beforeFilter(){

  $this->user_id = $this->PhpBB3->user->data['user_id'];
  $this->set('user_id', $this->user_id);
  $this->username = $this->PhpBB3->user->data['username'];
  $this->set('username', $this->username);
  $this->group_id = $this->PhpBB3->user->data['group_id'];
  $this->set('group_id', $this->group_id);
  $this->loadModel('Member');
  $this->Member->read(null, $this->user_id);
  //$admin = Set::extract('/Group/group_id', $this->Member->data);
  if($this->Member->data['Group'][0]['group_id'] == 5) {
    $this->admin = true;
    $this->set('admin', $this->admin);
    }

}
function check_admin(){
  if ($this->admin != true) $this->redirect('/');
}

}
?>
