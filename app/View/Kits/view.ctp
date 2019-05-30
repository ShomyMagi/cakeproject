<div class="kits view">
<h2><?php echo __('Kit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kit['Item']['name'], array('controller' => 'items', 'action' => 'view', $kit['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($kit['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hts Number'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['hts_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Group'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['tax_group']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kit Release Date'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['kit_release_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('For Distributors'); ?></dt>
		<dd>
			<?php echo h(($kit['Kit']['for_distributors'] == 0) ? 'Yes' : 'No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kit['ProductStatus']['status'], array('controller' => 'product_statuses', 'action' => 'view', $kit['ProductStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($kit['Kit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kit'), array('action' => 'edit', $kit['Kit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kit'), array('action' => 'delete', $kit['Kit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kit['Kit']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Kits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
