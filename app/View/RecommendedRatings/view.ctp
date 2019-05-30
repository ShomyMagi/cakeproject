<div class="recommendedRatings view">
<h2><?php echo __('Recommended Rating'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recommendedRating['RecommendedRating']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($recommendedRating['RecommendedRating']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($recommendedRating['RecommendedRating']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($recommendedRating['RecommendedRating']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recommended Rating'), array('action' => 'edit', $recommendedRating['RecommendedRating']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recommended Rating'), array('action' => 'delete', $recommendedRating['RecommendedRating']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $recommendedRating['RecommendedRating']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recommended Rating'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('controller' => 'consumables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consumables'); ?></h3>
	<?php if (!empty($recommendedRating['Consumable'])): ?>
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
	<?php foreach ($recommendedRating['Consumable'] as $consumable): ?>
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
	<?php if (!empty($recommendedRating['Inventory'])): ?>
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
	<?php foreach ($recommendedRating['Inventory'] as $inventory): ?>
		<tr>
			<td><?php echo $inventory['id']; ?></td>
			<td><?php echo $inventory['code']; ?></td>
			<td><?php echo $inventory['recommended_rating_id']; ?></td>
			<td><?php echo $inventory['material_status_id']; ?></td>
			<td><?php echo $inventory['created']; ?></td>
			<td><?php echo $inventory['modified']; ?></td>
			<td><?php echo $inventory['items_id']; ?></td>
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
