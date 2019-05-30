<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Material'), array('action' => 'save')); ?></li>
            <li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>

<div class="materials index">
	<h2><?php echo __('Materials'); ?></h2>
	<?php
	   echo $this->Form->create('Material', array('url' => array('controller' => 'materials', 'action' => 'search')));
	   echo $this->Form->input('Material.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
        <thead>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('item_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('service production'); ?></th>
                    <th><?php echo $this->Paginator->sort('recommended rating_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('material_status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
        </thead>
	<tbody>
	<?php foreach ($materials as $material): ?>
	<tr>
		<td><?php echo h($material['Material']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($material['Item']['name'], array('controller' => 'items', 'action' => 'view', $material['Item']['id'])); ?>
		</td>
		<td><?php echo h($material['Item']['code']); ?>&nbsp;</td>
		<td><?php echo h(($material['Material']['service_production'] == 0) ? 'No' : 'Yes'); ?>&nbsp;</td>	
		<td>
			<?php echo $this->Html->link($material['RecommendedRating']['rating'], array('controller' => 'recommended_ratings', 'action' => 'view', $material['RecommendedRating']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($material['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $material['MaterialStatus']['id'])); ?>
		</td>
		<td><?php echo h($material['Material']['created']); ?>&nbsp;</td>
		<td><?php echo h($material['Material']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $material['Material']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $material['Material']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $material['Material']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $material['Material']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
        </tbody>
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
