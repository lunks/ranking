<?php
class RankingController extends AppController {

	var $name = 'Ranking';

	function retrieve(){
	  return $this->Ranking->find('all');
	}

}
?>
