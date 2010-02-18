<?php echo $this->Html->link('Novo duelo', '/novo');?>
<?php if ($user_id != 1): ?>
<h2>Lista de duelos a confirmar:</h2>
<ul>
<?php
foreach ($losses as $loss):
  $vencedor = $loss['Winner']['username'];
  $vencedor .=  ' <strong>('. $loss['Losses']['winner_points']. ')</strong>';
  $perdedor = $loss['Member']['username'];
  $perdedor .=  ' <strong>('. $loss['Losses']['loser_points']. ')</strong>';
?>
  <li>
  Vencedor:
  <?php echo $vencedor; ?> VS. <?php echo $perdedor; ?>
  Confirma?
  <?php echo $this->Html->link('Sim', array('controller' => 'duelo', 'action' => 'confirma', $loss['Losses']['id'])); ?>
  </li>
<?php endforeach;
  endif;
?>

<h2>Ranking:</h2>
<ol>
<?php
  $ranking = $this->requestAction('/ranking/retrieve');
  foreach ($ranking as $rankpos): ?>
  <li>
  <?php
    echo $rankpos['Member']['username'] ." <strong>(" . $rankpos['Ranking']['score'] . ")</strong>";
  ?>
  </li>
  <?php
  endforeach;
?>
