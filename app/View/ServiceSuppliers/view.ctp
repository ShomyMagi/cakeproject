<div class="serviceSuppliers view">
<h2><?php echo __('Service Supplier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceSupplier['ServiceSupplier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceSupplier['Item']['name'], array('controller' => 'items', 'action' => 'view', $serviceSupplier['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($serviceSupplier['Item']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recommended Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceSupplier['RecommendedRating']['id'], array('controller' => 'recommended_ratings', 'action' => 'view', $serviceSupplier['RecommendedRating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceSupplier['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $serviceSupplier['MaterialStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($serviceSupplier['ServiceSupplier']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($serviceSupplier['ServiceSupplier']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Supplier'), array('action' => 'edit', $serviceSupplier['ServiceSupplier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Supplier'), array('action' => 'delete', $serviceSupplier['ServiceSupplier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceSupplier['ServiceSupplier']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Suppliers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Supplier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
	</ul>
</div>
