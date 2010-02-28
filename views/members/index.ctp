<h2>Painel do Ranking</h2>

<div class="panel">
	<div class="block-header"><span><span></span></span></div><div class="block-content"><div class="block-inner">
	<p>Seja bem-vindo ao Ranking da BrNavies!</p>
<?php if ($user_id != 1): ?>

<p>
<ul class="topiclist cplist">
<li class="header ranking-header">Lista de duelos a confirmar:</li>
<?php
foreach ($losses as $loss):
  $vencedor = $loss['Winner']['username'];
  $vencedor .=  ' <strong>('. $loss['Losses']['winner_points']. ')</strong>';
  $perdedor = $loss['Member']['username'];
  $perdedor .=  ' <strong>('. $loss['Losses']['loser_points']. ')</strong>';
?>
  <li class="row ranking"><span>
  <?php echo $vencedor; ?> VS. <?php echo $perdedor; ?>
  Confirma?
  <?php echo $this->Html->link('Sim', array('controller' => 'duelo', 'action' => 'confirma', $loss['Losses']['id'])); ?>
  </span></li>

<?php endforeach;
?> </ul> </p>
  <?php endif;
?>

<h3>Ranking</h3>

<ol id="ranking">
<?php
  $ranking = $this->requestAction('/ranking/retrieve');
  foreach ($ranking as $rankpos): ?>
  <li><span>
  <?php
    echo $rankpos['Member']['username'] ." <strong>(" . $rankpos['Ranking']['score'] . ")</strong>";
  ?></span>
  </li>
  <?php
  endforeach;
?>
</ol>

	<div class="block-clear"></div></div></div><div class="block-footer"><span><span></span></span></div></div>

</div>
		</div>
	<div class="clear"></div>

</div>
