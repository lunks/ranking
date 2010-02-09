<div class="fights index">
<h2><?php __('Fights');?></h2>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort('id');?></th>
	<th><?php echo $this->Paginator->sort('winner_id');?></th>
	<th><?php echo $this->Paginator->sort('loser_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($fights as $fight):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $fight['Fight']['id']; ?>
		</td>
		<td>
			<?php echo $fight['Fight']['winner_id']; ?>
		</td>
		<td>
			<?php echo $this->Html->link($fight['Member']['username'], array('controller' => 'members', 'action' => 'view', $fight['Member']['user_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $fight['Fight']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $fight['Fight']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $fight['Fight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fight['Fight']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Fight', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Members', true)), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Member', true)), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>