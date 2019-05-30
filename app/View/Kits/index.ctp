<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Kit'), array('action' => 'save')); ?></li>
            <li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="kits index">
	<h2><?php echo __('Kits'); ?></h2>
	<?php
	   echo $this->Form->create('Kit', array('url' => array('controller' => 'kits', 'action' => 'search')));
	   echo $this->Form->input('Kit.search_key');
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
                    <th><?php echo $this->Paginator->sort('eccn'); ?></th>
                    <th><?php echo $this->Paginator->sort('kit_release_date'); ?></th>
                    <th><?php echo $this->Paginator->sort('for_distributors'); ?></th>
                    <th><?php echo $this->Paginator->sort('product_status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($kits as $kit): ?>
	<tr>
		<td><?php echo h($kit['Kit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($kit['Item']['name'], array('controller' => 'items', 'action' => 'view', $kit['Item']['id'])); ?>
		</td>
		<td><?php echo h($kit['Item']['code']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['pid']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['hts_number']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['tax_group']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['eccn']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['kit_release_date']); ?>&nbsp;</td>
		<td><?php echo h(($kit['Kit']['for_distributors'] == 0) ? 'Yes' : 'No'); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($kit['ProductStatus']['id'], array('controller' => 'product_statuses', 'action' => 'view', $kit['ProductStatus']['id'])); ?>
		</td>
		<td><?php echo h($kit['Kit']['created']); ?>&nbsp;</td>
		<td><?php echo h($kit['Kit']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($kit['Item']['name'], array('controller' => 'items', 'action' => 'view', $kit['Item']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kit['Kit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $kit['Kit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kit['Kit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kit['Kit']['id']))); ?>
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
