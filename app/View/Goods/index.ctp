<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Good'), array('action' => 'save')); ?></li>
            <li><?php echo $this->Html->link(__('List Product Statuses'), array('controller' => 'product_statuses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Product Status'), array('controller' => 'product_statuses', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>

<div class="goods index">
	<h2><?php echo __('Goods'); ?></h2>
	<?php
	   echo $this->Form->create('Good', array('url' => array('controller' => 'goods', 'action' => 'search')));
	   echo $this->Form->input('Good.search_key');
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
                    <th><?php echo $this->Paginator->sort('release_date'); ?></th>
                    <th><?php echo $this->Paginator->sort('for_distributors'); ?></th>
                    <th><?php echo $this->Paginator->sort('product_status_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
	<?php foreach ($goods as $good): ?>
	<tr>
		<td><?php echo h($good['Good']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($good['Item']['name'], array('controller' => 'items', 'action' => 'view', $good['Item']['id'])); ?>
		</td>
		<td><?php echo h($good['Item']['code']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['pid']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['hts_number']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['tax_group']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['eccn']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['release_date']); ?>&nbsp;</td>
		<td><?php echo h(($good['Good']['for_distributors'] == 0) ? 'Yes' : 'No'); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($good['ProductStatus']['status'], array('controller' => 'product_statuses', 'action' => 'view', $good['ProductStatus']['id'])); ?>
		</td>
		<td><?php echo h($good['Good']['created']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $good['Good']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'save', $good['Good']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $good['Good']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $good['Good']['id']))); ?>
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
