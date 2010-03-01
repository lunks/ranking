<?php
class Member extends AppModel {
	var $name = 'Member';
	var $tablePrefix = 'phpbb_';
	var $useTable = 'users';
	var $displayField = 'username';
	var $primaryKey = 'user_id';
	var $belongsTo = array('Squad' => array('className' => 'Squad', 'foreignKey' => 'group_id', 'conditions' => 'Squad.group_type = 0'));
	var $hasAndBelongsToMany = array(
        'Group' =>
            array(
                'className'              => 'Group',
                'joinTable'              => 'user_group',
                'tablePrefix'            => 'phpbb_',
                'with'                   => 'UserGroup',
                'foreignKey'             => 'user_id',
                'associationForeignKey'  => 'group_id',
                'unique'                 => false,
                'conditions'             => array('Group.group_name' => 'ADMINISTRATORS'),
                'fields'                 => array('Group.group_id', 'Group.group_name'),
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    );
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
