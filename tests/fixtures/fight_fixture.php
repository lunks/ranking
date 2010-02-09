<?php
/* Fight Fixture generated on: 2010-02-09 16:02:49 : 1265739349 */
class FightFixture extends CakeTestFixture {
	var $name = 'Fight';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'winner_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'loser_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'winner_id' => 1,
			'loser_id' => 1
		),
	);
}
?>