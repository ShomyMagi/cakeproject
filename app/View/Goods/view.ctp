<div class="goods view">
<h2><?php echo __('Good'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($good['Good']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($good['Item']['name'], array('controller' => 'items', 'action' => 'view', $good['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($good['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($good['Good']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hts Number'); ?></dt>
		<dd>
			<?php echo h($good['Good']['hts_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Group'); ?></dt>
		<dd>
			<?php echo h($good['Good']['tax_group']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eccn'); ?></dt>
		<dd>
			<?php echo h($good['Good']['eccn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Date'); ?></dt>
		<dd>
			<?php echo h($good['Good']['release_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('For Distributors'); ?></dt>
		<dd>
			<?php echo h(($good['Good']['for_distributors'] == 0) ? 'Yes' : 'No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($good['ProductStatus']['status'], array('controller' => 'product_statuses', 'action' => 'view', $good['ProductStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($good['Good']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($good['Good']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Good'), array('action' => 'edit', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Good'), array('action' => 'delete', $good['Good']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $good['Good']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
