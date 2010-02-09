<div class="fights form">
<?php echo $this->Form->create('Fight');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Fight', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('winner_id');
		echo $this->Form->input('loser_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Fight.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Fight.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Fights', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Members', true)), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Member', true)), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>