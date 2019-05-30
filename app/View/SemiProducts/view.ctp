	<div class="semiProducts view">
<h2><?php echo __('Semi Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($semiProduct['SemiProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($semiProduct['Item']['name'], array('controller' => 'items', 'action' => 'view', $semiProduct['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($semiProduct['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Production'); ?></dt>
		<dd>
			<?php echo h(($semiProduct['SemiProduct']['service_production'] == 0) ? 'Yes' : 'No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($semiProduct['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $semiProduct['MaterialStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($semiProduct['SemiProduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($semiProduct['SemiProduct']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Semi Product'), array('action' => 'edit', $semiProduct['SemiProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Semi Product'), array('action' => 'delete', $semiProduct['SemiProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $semiProduct['SemiProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Semi Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semi Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
