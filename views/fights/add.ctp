<h2>Registrar Duelo</h2>
<div class="fights form panel">
<div class="block-header"><span><span></span></span></div><div class="block-content"><div class="block-inner">
<?php echo $this->Form->create('Fight');?>
	<fieldset>
	<?php
	    echo $this->Form->hidden('winner_id', array('default' => $user_id));
		echo $this->Form->input('loser_id', array('label' => 'Adversário:', 'before' => '<dl><dt>','between' => '</dt><dt>'));
		echo $this->Form->input('winner_points', array('label' => 'Quantos pontos você fez?', 'before' => '<dl><dt>','between' => '</dt><dt>', 'class' => 'inputbox'));
		echo $this->Form->input('loser_points', array('label' => 'Quantos pontos o seu adversário fez?', 'before' => '<dl><dt>','between' => '</dt><dt>', 'class' => 'inputbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>

<?php if ($admin): ?>
<?php endif;?>

