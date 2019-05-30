<div class="warehouseLocations view">
<h2><?php echo __('Warehouse Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['default']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Types'); ?></dt>
		<dd>
			<?php echo $this->Html->link($warehouseLocation['ItemTypes']['name'], array('controller' => 'item_types', 'action' => 'view', $warehouseLocation['ItemTypes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($warehouseLocation['WarehouseLocation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Warehouse Location'), array('action' => 'edit', $warehouseLocation['WarehouseLocation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Warehouse Location'), array('action' => 'delete', $warehouseLocation['WarehouseLocation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $warehouseLocation['WarehouseLocation']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Warehouse Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Warehouse Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Types'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
