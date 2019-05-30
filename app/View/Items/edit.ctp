<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('weight');
		echo $this->Form->input('deleted');
		echo $this->Form->input('item_types_id');
		echo $this->Form->input('measurment_units_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Types'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurment Units'), array('controller' => 'measurment_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurment Units'), array('controller' => 'measurment_units', 'action' => 'add')); ?> </li>
	</ul>
</div>
