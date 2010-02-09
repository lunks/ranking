<?php
class Member extends AppModel {
	var $name = 'Member';
	var $tablePrefix = 'phpbb_';
	var $useTable = 'users';
	var $displayField = 'username';
	var $primaryKey = 'user_id';
	var $hasOne = 'Squad';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>
