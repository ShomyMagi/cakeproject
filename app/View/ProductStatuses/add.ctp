<div class="productStatuses form">
<?php echo $this->Form->create('ProductStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Product Status'); ?></legend>
	<?php
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kits'), array('controller' => 'kits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kit'), array('controller' => 'kits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
