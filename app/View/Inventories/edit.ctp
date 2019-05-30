<div class="inventories form">
<?php echo $this->Form->create('Inventory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inventory'); ?></legend>
	<?php
		echo $this->Form->input('Item.id');
		echo $this->Form->input('Item.code');
		echo $this->Form->input('Item.name');
		echo $this->Form->input('Item.description');
		echo $this->Form->input('Item.weight');
		echo $this->Form->input('Item.item_type_id');
		echo $this->Form->input('Item.measurment_unit_id');
		echo $this->Form->input('Inventory.recommended_rating_id');
		echo $this->Form->input('Inventory.material_status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inventory.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Inventory.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
