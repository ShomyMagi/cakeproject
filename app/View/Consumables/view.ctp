<div class="consumables view">
<h2><?php echo __('Consumable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumable['Item']['name'], array('controller' => 'items', 'action' => 'view', $consumable['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($consumable['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recommended Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumable['RecommendedRating']['rating'], array('controller' => 'recommended_ratings', 'action' => 'view', $consumable['RecommendedRating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumable['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $consumable['MaterialStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consumable'), array('action' => 'edit', $consumable['Consumable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consumable'), array('action' => 'delete', $consumable['Consumable']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $consumable['Consumable']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
