<?php
class Fight extends AppModel {
	var $name = 'Fight';
	var $displayField = 'winner_id';
	var $actsAs = array('SoftDeletable');
	var $belongsTo = array(
        'Member' => array(
            'className'    => 'Member',
            'foreignKey'    => 'loser_id',
            'fields' => array('user_id', 'username')
        ),
        'Winner' => array(
            'className'    => 'Member',
            'foreignKey'    => 'winner_id',
            'fields' => array('user_id', 'username')
        )
    );
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>
