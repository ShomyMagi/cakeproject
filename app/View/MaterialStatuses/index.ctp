<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Material Status'), array('action' => 'add')); ?></li>
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
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="materialStatuses index">
	<h2><?php echo __('Material Statuses'); ?></h2>
	<?php
	   echo $this->Form->create('Post', array('url' => array('controller' => 'materials', 'action' => 'search')));
	   echo $this->Form->input('Material.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($materialStatuses as $materialStatus): ?>
	<tr>
		<td><?php echo h($materialStatus['MaterialStatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($materialStatus['MaterialStatus']['status']); ?>&nbsp;</td>
		<td><?php echo h($materialStatus['MaterialStatus']['created']); ?>&nbsp;</td>
		<td><?php echo h($materialStatus['MaterialStatus']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materialStatus['MaterialStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materialStatus['MaterialStatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materialStatus['MaterialStatus']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $materialStatus['MaterialStatus']['id']))); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
	</ul>
</div>
