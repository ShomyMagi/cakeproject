<div class="transferLicenses view">
<h2><?php echo __('Transfer License'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transferLicense['TransferLicense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operator'); ?></dt>
		<dd>
			<?php echo h($transferLicense['TransferLicense']['operator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warehouse Place'); ?></dt>
		<dd>
			<?php echo h($transferLicense['TransferLicense']['warehouse_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transfer Licenses'); ?></dt>
		<dd>
			<?php echo h($transferLicense['TransferLicense']['transfer licenses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transferLicense['TransferLicense']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($transferLicense['TransferLicense']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transfer License'), array('action' => 'edit', $transferLicense['TransferLicense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transfer License'), array('action' => 'delete', $transferLicense['TransferLicense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $transferLicense['TransferLicense']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Transfer Licenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transfer License'), array('action' => 'add')); ?> </li>
	</ul>
</div>
