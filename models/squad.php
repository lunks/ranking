<?php
class Squad extends AppModel {
	var $name = 'Squad';
	var $tablePrefix = 'phpbb_';
	var $primaryKey = 'group_id';
	var $useTable = 'groups';
	var $displayField = 'group_name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>
