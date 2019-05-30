<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('Item.id');
		echo $this->Form->input('Item.code');
		echo $this->Form->input('Item.name');
		echo $this->Form->input('Item.description');
		echo $this->Form->input('Item.weight');
		echo $this->Form->input('Item.item_type_id');
		echo $this->Form->input('Item.measurment_unit_id');
		echo $this->Form->input('Product.pid');
		echo $this->Form->input('Product.hts_number');
		echo $this->Form->input('Product.tax_group');
		echo $this->Form->input('Product.eccn');
		echo $this->Form->input('Product.release_date');
		echo $this->Form->input('Product.for_distributors');
		echo $this->Form->input('Product.service_production');
		echo $this->Form->input('Product.project');
		echo $this->Form->list('Product.product_status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Product.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
