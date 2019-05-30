<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Item Type'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="itemTypes index">
	<h2><?php echo __('Item Types'); ?></h2>
	<?php
	   echo $this->Form->create('Post', array('url' => array('controller' => 'materials', 'action' => 'search')));
	   echo $this->Form->input('Material.search_key');
	   echo $this->Form->end(__('Submit'));
	?>
	<table>
		<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('tangible'); ?></th>
                    <th><?php echo $this->Paginator->sort('active'); ?></th>
                    <th><?php echo $this->Paginator->sort('class'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($itemTypes as $itemType): ?>
	<tr>
		<td><?php echo h($itemType['ItemType']['id']); ?>&nbsp;</td>
		<td><?php echo h($itemType['ItemType']['code']); ?>&nbsp;</td>
		<td><?php echo h($itemType['ItemType']['name']); ?>&nbsp;</td>
		<td><?php echo h(($itemType['ItemType']['tangible'] == 0) ? 'No' : 'Yes'); ?>&nbsp;</td>
		<td><?php echo h(($itemType['ItemType']['active'] == 0) ? 'No' : 'Yes'); ?>&nbsp;</td>
		<td><?php echo h($itemType['ItemType']['class']); ?>&nbsp;</td>
		<td><?php echo h($itemType['ItemType']['created']); ?>&nbsp;</td>
		<td><?php echo h($itemType['ItemType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemType['ItemType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemType['ItemType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemType['ItemType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemType['ItemType']['id']))); ?>
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
