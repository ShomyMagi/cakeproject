<div class="measurmentUnits view">
<h2><?php echo __('Measurment Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($measurmentUnit['MeasurmentUnit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($measurmentUnit['MeasurmentUnit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Symbol'); ?></dt>
		<dd>
			<?php echo h($measurmentUnit['MeasurmentUnit']['symbol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h(($measurmentUnit['MeasurmentUnit']['active'] == 0) ? 'No' : 'Yes'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($measurmentUnit['MeasurmentUnit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($measurmentUnit['MeasurmentUnit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Measurment Unit'), array('action' => 'edit', $measurmentUnit['MeasurmentUnit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Measurment Unit'), array('action' => 'delete', $measurmentUnit['MeasurmentUnit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $measurmentUnit['MeasurmentUnit']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurment Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurment Unit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
