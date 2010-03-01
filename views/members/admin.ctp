<h2>Administração do Ranking</h2>

<div class="panel">
	<div class="block-header"><span><span></span></span></div><div class="block-content"><div class="block-inner">
<?php
foreach ($fights as $fight):
?>
<h3>
<?php
  echo $fight['Winner']['username']. " (".$fight['Wins']['winner_points'].")";
  echo " x ";
  echo $fight['Member']['username']. " (".$fight['Wins']['loser_points'].") ";
  echo $this->Html->link('Deletar', array('controller' => 'duelo', 'action' => 'delete',  $fight['Wins']['id']));
  ?> </h3><br />
  <?php
endforeach;
?>
