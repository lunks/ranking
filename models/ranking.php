<?php
class Ranking extends AppModel {
	var $name = 'Ranking';
	var $useTable = 'ranking';
	var $displayField = 'member_id';
	var $winnerPoints = '3';
	var $drawPoints = '2';
	var $loserPoints = '1';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	function processResult($data){
	  $winner = $data['Fight']['winner_id'];
	  $loser = $data['Fight']['loser_id'];
	  $this->checkUsers(array($winner, $loser));
	  //TODO: Logica pra adicionar pontos
	  $rank_winner = $this->find('first', array('conditions' => array('Ranking.member_id' => $winner)));
    $rank_loser = $this->find('first', array('conditions' => array('Ranking.member_id' => $loser)));
    if($data['Fight']['winner_points'] == $data['Fight']['loser_points']){
      $rank_winner['Ranking']['score'] += $this->drawPoints;
      $rank_loser['Ranking']['score'] += $this->drawPoints;
    } else {
    $rank_winner['Ranking']['score'] += $this->winnerPoints;
    $rank_loser['Ranking']['score'] += $this->loserPoints;
    }
    $this->save($rank_winner);
    $this->save($rank_loser);
	  return true;

	}
  	function checkUsers($members = array())
  	{
  	  foreach ($members as $member)
      {
      	if(!$this->find('first', array('conditions' => array('Ranking.member_id' => $member)))) {
          $this->data = array('Ranking' => array('member_id' => $member, 'score' => 0));
          $this->create($this->data);
          $this->save();
        }
      }
  	}

}
?>
