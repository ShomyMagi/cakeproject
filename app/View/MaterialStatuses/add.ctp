<div class="materialStatuses form">
<?php echo $this->Form->create('MaterialStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Material Status'); ?></legend>
	<?php
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('controller' => 'consumables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semi Products'), array('controller' => 'semi_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semi Product'), array('controller' => 'semi_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Products'), array('controller' => 'service_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Product'), array('controller' => 'service_products', 'action' => 'add')); ?> </li>
	</ul>
</div>
