<div class="materialStatuses view">
<h2><?php echo __('Material Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($materialStatus['MaterialStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($materialStatus['MaterialStatus']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($materialStatus['MaterialStatus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($materialStatus['MaterialStatus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material Status'), array('action' => 'edit', $materialStatus['MaterialStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material Status'), array('action' => 'delete', $materialStatus['MaterialStatus']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $materialStatus['MaterialStatus']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('controller' => 'consumables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semi Products'), array('controller' => 'semi_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semi Product'), array('controller' => 'semi_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Products'), array('controller' => 'service_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Product'), array('controller' => 'service_products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consumables'); ?></h3>
	<?php if (!empty($materialStatus['Consumable'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Recommended Rating Id'); ?></th>
		<th><?php echo __('Material Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialStatus['Consumable'] as $consumable): ?>
		<tr>
			<td><?php echo $consumable['id']; ?></td>
			<td><?php echo $consumable['code']; ?></td>
			<td><?php echo $consumable['recommended_rating_id']; ?></td>
			<td><?php echo $consumable['material_status_id']; ?></td>
			<td><?php echo $consumable['created']; ?></td>
			<td><?php echo $consumable['modified']; ?></td>
			<td><?php echo $consumable['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consumables', 'action' => 'view', $consumable['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consumables', 'action' => 'edit', $consumable['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consumables', 'action' => 'delete', $consumable['id']), array('confirm' => __('Are you sure you want to delete # %s?', $consumable['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Inventories'); ?></h3>
	<?php if (!empty($materialStatus['Inventory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Recommended Rating Id'); ?></th>
		<th><?php echo __('Material Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialStatus['Inventory'] as $inventory): ?>
		<tr>
			<td><?php echo $inventory['id']; ?></td>
			<td><?php echo $inventory['code']; ?></td>
			<td><?php echo $inventory['recommended_rating_id']; ?></td>
			<td><?php echo $inventory['material_status_id']; ?></td>
			<td><?php echo $inventory['created']; ?></td>
			<td><?php echo $inventory['modified']; ?></td>
			<td><?php echo $inventory['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inventories', 'action' => 'view', $inventory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inventories', 'action' => 'edit', $inventory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inventories', 'action' => 'delete', $inventory['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inventory['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Materials'); ?></h3>
	<?php if (!empty($materialStatus['Material'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Service Production'); ?></th>
		<th><?php echo __('Recommended Rating Id'); ?></th>
		<th><?php echo __('Material Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialStatus['Material'] as $material): ?>
		<tr>
			<td><?php echo $material['id']; ?></td>
			<td><?php echo $material['code']; ?></td>
			<td><?php echo $material['service_production']; ?></td>
			<td><?php echo $material['recommended_rating_id']; ?></td>
			<td><?php echo $material['material_status_id']; ?></td>
			<td><?php echo $material['created']; ?></td>
			<td><?php echo $material['modified']; ?></td>
			<td><?php echo $material['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'materials', 'action' => 'view', $material['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'materials', 'action' => 'edit', $material['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'materials', 'action' => 'delete', $material['id']), array('confirm' => __('Are you sure you want to delete # %s?', $material['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Semi Products'); ?></h3>
	<?php if (!empty($materialStatus['SemiProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Service Production'); ?></th>
		<th><?php echo __('Material Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialStatus['SemiProduct'] as $semiProduct): ?>
		<tr>
			<td><?php echo $semiProduct['id']; ?></td>
			<td><?php echo $semiProduct['code']; ?></td>
			<td><?php echo $semiProduct['service_production']; ?></td>
			<td><?php echo $semiProduct['material_status_id']; ?></td>
			<td><?php echo $semiProduct['created']; ?></td>
			<td><?php echo $semiProduct['modified']; ?></td>
			<td><?php echo $semiProduct['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'semi_products', 'action' => 'view', $semiProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'semi_products', 'action' => 'edit', $semiProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'semi_products', 'action' => 'delete', $semiProduct['id']), array('confirm' => __('Are you sure you want to delete # %s?', $semiProduct['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Semi Product'), array('controller' => 'semi_products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Service Products'); ?></h3>
	<?php if (!empty($materialStatus['ServiceProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Hts Number'); ?></th>
		<th><?php echo __('Tax Group'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('For Distributors'); ?></th>
		<th><?php echo __('Project'); ?></th>
		<th><?php echo __('Material Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Items Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialStatus['ServiceProduct'] as $serviceProduct): ?>
		<tr>
			<td><?php echo $serviceProduct['id']; ?></td>
			<td><?php echo $serviceProduct['code']; ?></td>
			<td><?php echo $serviceProduct['pid']; ?></td>
			<td><?php echo $serviceProduct['hts_number']; ?></td>
			<td><?php echo $serviceProduct['tax_group']; ?></td>
			<td><?php echo $serviceProduct['release_date']; ?></td>
			<td><?php echo $serviceProduct['for_distributors']; ?></td>
			<td><?php echo $serviceProduct['project']; ?></td>
			<td><?php echo $serviceProduct['material_status_id']; ?></td>
			<td><?php echo $serviceProduct['created']; ?></td>
			<td><?php echo $serviceProduct['modified']; ?></td>
			<td><?php echo $serviceProduct['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'service_products', 'action' => 'view', $serviceProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'service_products', 'action' => 'edit', $serviceProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'service_products', 'action' => 'delete', $serviceProduct['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceProduct['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service Product'), array('controller' => 'service_products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
