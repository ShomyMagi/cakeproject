<div class="warehouseLocations index">
	<h2><?php echo __('Warehouse Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('item'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('default'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('item_types_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($warehouseLocations as $warehouseLocation): ?>
	<tr>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['code']); ?>&nbsp;</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['item']); ?>&nbsp;</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['description']); ?>&nbsp;</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['default']); ?>&nbsp;</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['active']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($warehouseLocation['ItemTypes']['name'], array('controller' => 'item_types', 'action' => 'view', $warehouseLocation['ItemTypes']['id'])); ?>
		</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['created']); ?>&nbsp;</td>
		<td><?php echo h($warehouseLocation['WarehouseLocation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $warehouseLocation['WarehouseLocation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $warehouseLocation['WarehouseLocation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $warehouseLocation['WarehouseLocation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $warehouseLocation['WarehouseLocation']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Warehouse Location'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Types'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
