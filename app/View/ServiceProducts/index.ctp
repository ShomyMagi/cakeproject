<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Service Product'), array('action' => 'save')); ?></li>
            <li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="serviceProducts index">
	<h2><?php echo __('Service Products'); ?></h2>
	<?php
	   echo $this->Form->create('ServiceProduct', array('url' => array('controller' => 'serviceProducts', 'action' => 'search')));
	   echo $this->Form->input('ServiceProduct.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('item_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('pid'); ?></th>
                    <th><?php echo $this->Paginator->sort('hts_number'); ?></th>
                    <th><?php echo $this->Paginator->sort('tax_group'); ?></th>
                    <th><?php echo $this->Paginator->sort('release date'); ?></th>
                    <th><?php echo $this->Paginator->sort('for_distributors'); ?></th>
                    <th><?php echo $this->Paginator->sort('project'); ?></th>
                    <th><?php echo $this->Paginator->sort('material_status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($serviceProducts as $serviceProduct): ?>
	<tr>
		<td><?php echo h($serviceProduct['ServiceProduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceProduct['Item']['name'], array('controller' => 'items', 'action' => 'view', $serviceProduct['Item']['id'])); ?>
		</td>
		<td><?php echo h($serviceProduct['Item']['code']); ?>&nbsp;</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['pid']); ?>&nbsp;</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['hts_number']); ?>&nbsp;</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['tax_group']); ?>&nbsp;</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['release_date']); ?>&nbsp;</td>
		<td><?php echo h(($serviceProduct['ServiceProduct']['for_distributors'] == 0) ? 'No' : 'Yes'); ?>&nbsp;</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['project']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceProduct['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $serviceProduct['MaterialStatus']['id'])); ?>
		</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['created']); ?>&nbsp;</td>
		<td><?php echo h($serviceProduct['ServiceProduct']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceProduct['ServiceProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $serviceProduct['ServiceProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceProduct['ServiceProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceProduct['ServiceProduct']['id']))); ?>
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
