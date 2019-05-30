<div class="warehouseAddresses form">
<?php echo $this->Form->create('WarehouseAddress'); ?>
	<fieldset>
		<legend><?php echo __('Add Warehouse Address'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('row');
		echo $this->Form->input('shelf');
		echo $this->Form->input('bulkhead');
		echo $this->Form->input('barcode');
		echo $this->Form->input('active');
		echo $this->Form->input('warehouse_locations_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Warehouse Addresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Warehouse Locations'), array('controller' => 'warehouse_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse Locations'), array('controller' => 'warehouse_locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
