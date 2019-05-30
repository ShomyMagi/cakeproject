<div class="productStatuses view">
<h2><?php echo __('Product Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productStatus['ProductStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($productStatus['ProductStatus']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productStatus['ProductStatus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productStatus['ProductStatus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Status'), array('action' => 'edit', $productStatus['ProductStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Status'), array('action' => 'delete', $productStatus['ProductStatus']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productStatus['ProductStatus']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kits'), array('controller' => 'kits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kit'), array('controller' => 'kits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Goods'); ?></h3>
	<?php if (!empty($productStatus['Good'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Hts Number'); ?></th>
		<th><?php echo __('Tax Group'); ?></th>
		<th><?php echo __('Eccn'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('For Distributors'); ?></th>
		<th><?php echo __('Product Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productStatus['Good'] as $good): ?>
		<tr>
			<td><?php echo $good['id']; ?></td>
			<td><?php echo $good['code']; ?></td>
			<td><?php echo $good['pid']; ?></td>
			<td><?php echo $good['hts_number']; ?></td>
			<td><?php echo $good['tax_group']; ?></td>
			<td><?php echo $good['eccn']; ?></td>
			<td><?php echo $good['release_date']; ?></td>
			<td><?php echo $good['for_distributors']; ?></td>
			<td><?php echo $good['product_status_id']; ?></td>
			<td><?php echo $good['created']; ?></td>
			<td><?php echo $good['modified']; ?></td>
			<td><?php echo $good['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'goods', 'action' => 'view', $good['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'goods', 'action' => 'edit', $good['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'goods', 'action' => 'delete', $good['id']), array('confirm' => __('Are you sure you want to delete # %s?', $good['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Kits'); ?></h3>
	<?php if (!empty($productStatus['Kit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Hts Number'); ?></th>
		<th><?php echo __('Tax Group'); ?></th>
		<th><?php echo __('Kit Release Date'); ?></th>
		<th><?php echo __('For Distributors'); ?></th>
		<th><?php echo __('Hide Kit Content'); ?></th>
		<th><?php echo __('Product Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productStatus['Kit'] as $kit): ?>
		<tr>
			<td><?php echo $kit['id']; ?></td>
			<td><?php echo $kit['status']; ?></td>
			<td><?php echo $kit['pid']; ?></td>
			<td><?php echo $kit['hts_number']; ?></td>
			<td><?php echo $kit['tax_group']; ?></td>
			<td><?php echo $kit['kit_release_date']; ?></td>
			<td><?php echo $kit['for_distributors']; ?></td>
			<td><?php echo $kit['hide_kit_content']; ?></td>
			<td><?php echo $kit['product_status_id']; ?></td>
			<td><?php echo $kit['created']; ?></td>
			<td><?php echo $kit['modified']; ?></td>
			<td><?php echo $kit['items_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'kits', 'action' => 'view', $kit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'kits', 'action' => 'edit', $kit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'kits', 'action' => 'delete', $kit['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kit['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Kit'), array('controller' => 'kits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($productStatus['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Hts Number'); ?></th>
		<th><?php echo __('Tax Group'); ?></th>
		<th><?php echo __('Eccn'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('For Distributors'); ?></th>
		<th><?php echo __('Service Production'); ?></th>
		<th><?php echo __('Project'); ?></th>
		<th><?php echo __('Product Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productStatus['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['pid']; ?></td>
			<td><?php echo $product['hts_number']; ?></td>
			<td><?php echo $product['tax_group']; ?></td>
			<td><?php echo $product['eccn']; ?></td>
			<td><?php echo $product['release_date']; ?></td>
			<td><?php echo $product['for_distributors']; ?></td>
			<td><?php echo $product['service_production']; ?></td>
			<td><?php echo $product['project']; ?></td>
			<td><?php echo $product['product_status_id']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td><?php echo $product['items_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
