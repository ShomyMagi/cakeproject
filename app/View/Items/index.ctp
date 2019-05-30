<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Item Types'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Measurment Units'), array('controller' => 'measurment_units', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Measurment Units'), array('controller' => 'measurment_units', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>

<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<?php
	   echo $this->Form->create('Item', array('url' => array('controller' => 'items', 'action' => 'search')));
	   echo $this->Form->input('Item.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
        <thead>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('description'); ?></th>
                    <th><?php echo $this->Paginator->sort('weight'); ?></th>
                    <th><?php echo $this->Paginator->sort('deleted'); ?></th>
                    <th><?php echo $this->Paginator->sort('item_types_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('measurment_units_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
        </thead>
	<tbody>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['code']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['name']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['weight']); ?>&nbsp;</td>
		<td><?php echo h(($item['Item']['deleted'] == 0) ? 'No' : 'Yes'); ?></td>
		<td>
			<?php echo $this->Html->link($item['ItemType']['name'], array('controller' => 'item_types', 'action' => 'view', $item['ItemType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['MeasurmentUnit']['name'], array('controller' => 'measurment_units', 'action' => 'view', $item['MeasurmentUnit']['id'])); ?>
		</td>
		<td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
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
