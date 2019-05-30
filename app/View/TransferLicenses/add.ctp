<div class="transferLicenses form">
<?php echo $this->Form->create('TransferLicense'); ?>
	<fieldset>
		<legend><?php echo __('Add Transfer License'); ?></legend>
	<?php
		echo $this->Form->input('operator');
		echo $this->Form->input('warehouse_place');
		echo $this->Form->input('transfer licenses');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transfer Licenses'), array('action' => 'index')); ?></li>
	</ul>
</div>
