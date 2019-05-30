<div class="goods form">
<?php echo $this->Form->create('Good'); ?>
	<fieldset>
		<legend><?php echo __('Add Good'); ?></legend>
	<?php
		echo $this->Form->input('Item.code');
		echo $this->Form->input('Item.name');
		echo $this->Form->input('Item.description');
		echo $this->Form->input('Item.weight');
		echo $this->Form->input('Item.item_type_id');
		echo $this->Form->input('Item.measurment_unit_id');
		echo $this->Form->input('Good.pid');
		echo $this->Form->input('Good.hts_number');
		echo $this->Form->input('Good.tax_group');
		echo $this->Form->input('Good.eccn');
		echo $this->Form->input('Good.release_date');
		echo $this->Form->label('Good.for_distributors', "For Distributors");
		echo $this->Form->checkbox('Good.for_distributors');     
		echo $this->Form->input('Good.product_status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
