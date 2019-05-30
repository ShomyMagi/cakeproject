<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Consumable'), array('action' => 'save')); ?></li>
            <li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>

<div class="consumables index">
	<h2><?php echo __('Consumables'); ?></h2>
	<?php
	   echo $this->Form->create('Consumable', array('url' => array('controller' => 'consumables', 'action' => 'search')));
	   echo $this->Form->input('Consumable.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('item_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('recommended_rating_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('material_status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($consumables as $consumable): ?>
	<tr>
		<td><?php echo h($consumable['Consumable']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consumable['Item']['name'], array('controller' => 'items', 'action' => 'view', $consumable['Item']['id'])); ?>
		</td>
		<td><?php echo h($consumable['Item']['code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consumable['RecommendedRating']['rating'], array('controller' => 'recommended_ratings', 'action' => 'view', $consumable['RecommendedRating']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consumable['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $consumable['MaterialStatus']['id'])); ?>
		</td>
		<td><?php echo h($consumable['Consumable']['created']); ?>&nbsp;</td>
		<td><?php echo h($consumable['Consumable']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consumable['Consumable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $consumable['Consumable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consumable['Consumable']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $consumable['Consumable']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>