<div class="warehouseAddresses index">
	<h2><?php echo __('Warehouse Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('row'); ?></th>
			<th><?php echo $this->Paginator->sort('shelf'); ?></th>
			<th><?php echo $this->Paginator->sort('bulkhead'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('warehouse_locations_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($warehouseAddresses as $warehouseAddress): ?>
	<tr>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['id']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['code']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['row']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['shelf']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['bulkhead']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['barcode']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['active']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($warehouseAddress['WarehouseLocations']['id'], array('controller' => 'warehouse_locations', 'action' => 'view', $warehouseAddress['WarehouseLocations']['id'])); ?>
		</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['created']); ?>&nbsp;</td>
		<td><?php echo h($warehouseAddress['WarehouseAddress']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $warehouseAddress['WarehouseAddress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $warehouseAddress['WarehouseAddress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $warehouseAddress['WarehouseAddress']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $warehouseAddress['WarehouseAddress']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Warehouse Address'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Warehouse Locations'), array('controller' => 'warehouse_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse Locations'), array('controller' => 'warehouse_locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
