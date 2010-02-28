<?php 
/* SVN FILE: $Id$ */
/* Ranking schema generated on: 2010-02-19 00:02:48 : 1266547308*/
class RankingSchema extends CakeSchema {
	var $name = 'Ranking';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $fights = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'winner_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'loser_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'winner_points' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'loser_points' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'deleted' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);
	var $profile_fields_data = array(
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8, 'key' => 'primary'),
		'pf_squad' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'user_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);
	var $ranking = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'score' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);
	var $users = array(
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary'),
		'user_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'key' => 'index'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => '3', 'length' => 8),
		'user_permissions' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'user_perm_from' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'user_ip' => array('type' => 'string', 'null' => false, 'length' => 40),
		'user_regdate' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'username' => array('type' => 'string', 'null' => false),
		'username_clean' => array('type' => 'string', 'null' => false, 'key' => 'unique'),
		'user_password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'user_passchg' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_pass_convert' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'user_email' => array('type' => 'string', 'null' => false, 'length' => 100),
		'user_email_hash' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20, 'key' => 'index'),
		'user_birthday' => array('type' => 'string', 'null' => false, 'length' => 10, 'key' => 'index'),
		'user_lastvisit' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_lastmark' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_lastpost_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_lastpage' => array('type' => 'string', 'null' => false, 'length' => 200),
		'user_last_confirm_key' => array('type' => 'string', 'null' => false, 'length' => 10),
		'user_last_search' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_warnings' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_last_warning' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_login_attempts' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_inactive_reason' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'user_inactive_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_posts' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'user_lang' => array('type' => 'string', 'null' => false, 'length' => 30),
		'user_timezone' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '5,2'),
		'user_dst' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'user_dateformat' => array('type' => 'string', 'null' => false, 'default' => 'd M Y H:i', 'length' => 30),
		'user_style' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'user_rank' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'user_colour' => array('type' => 'string', 'null' => false, 'length' => 6),
		'user_new_privmsg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_unread_privmsg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_last_privmsg' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_message_rules' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'user_full_folder' => array('type' => 'integer', 'null' => false, 'default' => '-3'),
		'user_emailtime' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_topic_show_days' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_topic_sortby_type' => array('type' => 'string', 'null' => false, 'default' => 't', 'length' => 1),
		'user_topic_sortby_dir' => array('type' => 'string', 'null' => false, 'default' => 'd', 'length' => 1),
		'user_post_show_days' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_post_sortby_type' => array('type' => 'string', 'null' => false, 'default' => 't', 'length' => 1),
		'user_post_sortby_dir' => array('type' => 'string', 'null' => false, 'default' => 'a', 'length' => 1),
		'user_notify' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'user_notify_pm' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'user_notify_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_allow_pm' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'user_allow_viewonline' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'user_allow_viewemail' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'user_allow_massemail' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'user_options' => array('type' => 'integer', 'null' => false, 'default' => '230271'),
		'user_avatar' => array('type' => 'string', 'null' => false),
		'user_avatar_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'user_avatar_width' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_avatar_height' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_sig' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'user_sig_bbcode_uid' => array('type' => 'string', 'null' => false, 'length' => 8),
		'user_sig_bbcode_bitfield' => array('type' => 'string', 'null' => false),
		'user_from' => array('type' => 'string', 'null' => false, 'length' => 100),
		'user_icq' => array('type' => 'string', 'null' => false, 'length' => 15),
		'user_aim' => array('type' => 'string', 'null' => false),
		'user_yim' => array('type' => 'string', 'null' => false),
		'user_msnm' => array('type' => 'string', 'null' => false),
		'user_jabber' => array('type' => 'string', 'null' => false),
		'user_website' => array('type' => 'string', 'null' => false, 'length' => 200),
		'user_occ' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'user_interests' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'user_actkey' => array('type' => 'string', 'null' => false, 'length' => 32),
		'user_newpasswd' => array('type' => 'string', 'null' => false, 'length' => 40),
		'user_form_salt' => array('type' => 'string', 'null' => false, 'length' => 32),
		'user_new' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'user_reminded' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'user_reminded_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'user_id', 'unique' => 1), 'username_clean' => array('column' => 'username_clean', 'unique' => 1), 'user_birthday' => array('column' => 'user_birthday', 'unique' => 0), 'user_email_hash' => array('column' => 'user_email_hash', 'unique' => 0), 'user_type' => array('column' => 'user_type', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);
}
?>