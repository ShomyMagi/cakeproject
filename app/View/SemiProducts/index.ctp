<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Semi Product'), array('action' => 'save')); ?></li>
            <li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="semiProducts index">
	<h2><?php echo __('Semi Products'); ?></h2>
	<?php
	   echo $this->Form->create('SemiProduct', array('url' => array('controller' => 'semiProducts', 'action' => 'search')));
	   echo $this->Form->input('SemiProduct.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('item_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('service_production'); ?></th>
                    <th><?php echo $this->Paginator->sort('material_status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($semiProducts as $semiProduct): ?>
	<tr>
		<td><?php echo h($semiProduct['SemiProduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($semiProduct['Item']['name'], array('controller' => 'items', 'action' => 'view', $semiProduct['Item']['id'])); ?>
		</td>
		<td><?php echo h($semiProduct['Item']['code']); ?>&nbsp;</td>
		<td><?php echo h(($semiProduct['SemiProduct']['service_production'] == 0) ? 'Yes' : 'No'); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($semiProduct['MaterialStatus']['status'], array('controller' => 'material_statuses', 'action' => 'view', $semiProduct['MaterialStatus']['id'])); ?>
		</td>
		<td><?php echo h($semiProduct['SemiProduct']['created']); ?>&nbsp;</td>
		<td><?php echo h($semiProduct['SemiProduct']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $semiProduct['SemiProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $semiProduct['SemiProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $semiProduct['SemiProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $semiProduct['SemiProduct']['id']))); ?>
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
