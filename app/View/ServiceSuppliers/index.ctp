<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Service Supplier'), array('action' => 'save')); ?></li>
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
<div class="serviceSuppliers index">
	<h2><?php echo __('Service Suppliers'); ?></h2>
	<?php
	   echo $this->Form->create('ServiceSupplier', array('url' => array('controller' => 'serviceSuppliers', 'action' => 'search')));
	   echo $this->Form->input('ServiceSupplier.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('item_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('recommended rating_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('material status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($serviceSuppliers as $serviceSupplier): ?>
	<tr>
		<td><?php echo h($serviceSupplier['ServiceSupplier']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceSupplier['Item']['name'], array('controller' => 'items', 'action' => 'view', $serviceSupplier['Item']['id'])); ?>
		</td>
		<td><?php echo h($serviceSupplier['Item']['code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceSupplier['RecommendedRating']['rating'], array('controller' => 'recommended_ratings', 'action' => 'view', $serviceSupplier['RecommendedRating']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($serviceSupplier['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $serviceSupplier['MaterialStatus']['id'])); ?>
		</td>
		<td><?php echo h($serviceSupplier['ServiceSupplier']['created']); ?>&nbsp;</td>
		<td><?php echo h($serviceSupplier['ServiceSupplier']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceSupplier['ServiceSupplier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $serviceSupplier['ServiceSupplier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceSupplier['ServiceSupplier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceSupplier['ServiceSupplier']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	</div>
</div>
</div>
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
