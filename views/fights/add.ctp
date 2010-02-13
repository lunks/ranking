<div class="fights form">
<?php echo $this->Form->create('Fight');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Fight', true)); ?></legend>
	<?php
	    echo $this->Form->hidden('winner_id', array('default' => $user_id));
	    echo $username;
	    echo " VS ";
		echo $this->Form->input('loser_id', array('label' => 'Challenger'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Fights', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Members', true)), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Member', true)), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>

