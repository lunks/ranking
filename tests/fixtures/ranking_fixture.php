<?php
/* Ranking Fixture generated on: 2010-02-17 13:02:44 : 1266419324 */
class RankingFixture extends CakeTestFixture {
	var $name = 'Ranking';
	var $table = 'ranking';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'score' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'score' => 1
		),
	);
}
?>