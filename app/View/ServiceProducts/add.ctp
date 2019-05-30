<div class="serviceProducts form">
<?php echo $this->Form->create('ServiceProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Service Product'); ?></legend>
	<?php
		echo $this->Form->input('Item.code');
		echo $this->Form->input('Item.name');
		echo $this->Form->input('Item.description');
		echo $this->Form->input('Item.weight');
		echo $this->Form->input('Item.item_type_id');
		echo $this->Form->input('Item.measurment_unit_id');
		echo $this->Form->input('ServiceProduct.pid');
		echo $this->Form->input('ServiceProduct.hts_number');
		echo $this->Form->input('ServiceProduct.tax_group');
		echo $this->Form->input('ServiceProduct.release_date');
		echo $this->Form->input('ServiceProduct.for_distributors');
		echo $this->Form->input('ServiceProduct.project');
		echo $this->Form->input('ServiceProduct.material_status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Service Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
