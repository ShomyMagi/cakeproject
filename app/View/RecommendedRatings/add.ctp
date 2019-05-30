<div class="recommendedRatings form">
<?php echo $this->Form->create('RecommendedRating'); ?>
	<fieldset>
		<legend><?php echo __('Add Recommended Rating'); ?></legend>
	<?php
		echo $this->Form->input('rating');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('controller' => 'consumables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
	</ul>
</div>
