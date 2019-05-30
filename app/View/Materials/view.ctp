<div class="materials view">
<h2><?php echo __('Material'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($material['Material']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($material['Item']['name'], array('controller' => 'items', 'action' => 'view', $material['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($material['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Production'); ?></dt>
		<dd>
			<?php echo h(($material['Material']['service_production'] == 0) ? 'Yes' : 'No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recommended Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($material['RecommendedRating']['rating'], array('controller' => 'recommended_ratings', 'action' => 'view', $material['RecommendedRating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($material['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $material['MaterialStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($material['Material']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($material['Material']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material'), array('action' => 'edit', $material['Material']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material'), array('action' => 'delete', $material['Material']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $material['Material']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
