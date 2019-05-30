<div class="warehouseAddresses view">
<h2><?php echo __('Warehouse Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['row']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shelf'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['shelf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bulkhead'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['bulkhead']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['barcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warehouse Locations'); ?></dt>
		<dd>
			<?php echo $this->Html->link($warehouseAddress['WarehouseLocations']['id'], array('controller' => 'warehouse_locations', 'action' => 'view', $warehouseAddress['WarehouseLocations']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($warehouseAddress['WarehouseAddress']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Warehouse Address'), array('action' => 'edit', $warehouseAddress['WarehouseAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Warehouse Address'), array('action' => 'delete', $warehouseAddress['WarehouseAddress']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $warehouseAddress['WarehouseAddress']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouse Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouse Locations'), array('controller' => 'warehouse_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse Locations'), array('controller' => 'warehouse_locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
