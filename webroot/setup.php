
<?php
$dbname   = 'fmalk_phpb1'   ;
$dbuser   = 'fmalk_phpb1' ;
$dbpasswd = '5nt4NRQ6gwIb' ;
mysql_connect(localhost,$dbuser,$dbpasswd);
mysql_select_db($dbname);
$sql = "CREATE TABLE IF NOT EXISTS `ranking_fights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `winner_id` int(11) NOT NULL,
  `loser_id` int(11) NOT NULL,
  `winner_points` int(11) NOT NULL,
  `loser_points` int(11) NOT NULL,
  `deleted` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ranking_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
$ok = mysql_query($sql);
//$ok = mysql_query("SELECT * FROM 'ranking_ranking WHERE 1=1");
var_dump($ok);
$msg = $mysql_error();
var_dump($msg);
?>
