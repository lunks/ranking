<?php
class Member extends AppModel {
	var $name = 'Member';
	var $tablePrefix = 'phpbb_';
	var $useTable = 'users';
	var $displayField = 'username';
	var $primaryKey = 'user_id';
	var $hasOne = 'Squad';
  var $hasMany = array(
        'Wins' => array(
            'className'     => 'Fight',
            'foreignKey'    => 'winner_id'
        ),
        'Losses' => array(
            'className'     => 'Fight',
            'foreignKey'    => 'loser_id'
        )
    );
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>
