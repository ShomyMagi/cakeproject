<div class="measurmentUnits form">
<?php echo $this->Form->create('MeasurmentUnit'); ?>
	<fieldset>
		<legend><?php echo __('Add Measurment Unit'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('symbol');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Measurment Units'), array('action' => 'index')); ?></li>
	</ul>
</div>
