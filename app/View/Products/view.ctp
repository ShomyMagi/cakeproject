<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Item']['name'], array('controller' => 'items', 'action' => 'view', $product['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($product['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($product['Product']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hts Number'); ?></dt>
		<dd>
			<?php echo h($product['Product']['hts_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Group'); ?></dt>
		<dd>
			<?php echo h($product['Product']['tax_group']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eccn'); ?></dt>
		<dd>
			<?php echo h($product['Product']['eccn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Date'); ?></dt>
		<dd>
			<?php echo h($product['Product']['release_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('For Distributors'); ?></dt>
		<dd>
			<?php echo h(($product['Product']['for_distributors'] == 0) ? 'Yes' : 'No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Production'); ?></dt>
		<dd>
			<?php echo h(($product['Product']['service_production'] == 0) ? 'Yes' : 'No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo h($product['Product']['project']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['ProductStatus']['id'], array('controller' => 'product_statuses', 'action' => 'view', $product['ProductStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
