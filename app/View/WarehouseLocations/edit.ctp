<div class="warehouseLocations form">
<?php echo $this->Form->create('WarehouseLocation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Warehouse Location'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('item');
		echo $this->Form->input('description');
		echo $this->Form->input('default');
		echo $this->Form->input('active');
		echo $this->Form->input('item_types_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WarehouseLocation.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('WarehouseLocation.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Warehouse Locations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Types'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
