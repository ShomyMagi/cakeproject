<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Measurment Unit'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="measurmentUnits index">
	<h2><?php echo __('Measurment Units'); ?></h2>
	<?php
	   echo $this->Form->create('Post', array('url' => array('controller' => 'materials', 'action' => 'search')));
	   echo $this->Form->input('Material.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('symbol'); ?></th>
                    <th><?php echo $this->Paginator->sort('active'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($measurmentUnits as $measurmentUnit): ?>
	<tr>
		<td><?php echo h($measurmentUnit['MeasurmentUnit']['id']); ?>&nbsp;</td>
		<td><?php echo h($measurmentUnit['MeasurmentUnit']['name']); ?>&nbsp;</td>
		<td><?php echo h($measurmentUnit['MeasurmentUnit']['symbol']); ?>&nbsp;</td>
		<td><?php echo h(($measurmentUnit['MeasurmentUnit']['active'] == 0) ? 'No' : 'Yes'); ?>&nbsp;</td>
		<td><?php echo h($measurmentUnit['MeasurmentUnit']['created']); ?>&nbsp;</td>
		<td><?php echo h($measurmentUnit['MeasurmentUnit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $measurmentUnit['MeasurmentUnit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $measurmentUnit['MeasurmentUnit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $measurmentUnit['MeasurmentUnit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $measurmentUnit['MeasurmentUnit']['id']))); ?>
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
