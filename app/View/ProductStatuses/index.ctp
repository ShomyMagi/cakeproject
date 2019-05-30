<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Product Status'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Kits'), array('controller' => 'kits', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Kit'), array('controller' => 'kits', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
            <li><?php echo $this->Html->link(__('Export PDF File'), array('action' => 'export_pdf')); ?> </li>
        </ul>
</div>
<div class="productStatuses index">
	<h2><?php echo __('Product Statuses'); ?></h2>
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
	<?php foreach ($productStatuses as $productStatus): ?>
	<tr>
		<td><?php echo h($productStatus['ProductStatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($productStatus['ProductStatus']['status']); ?>&nbsp;</td>
		<td><?php echo h($productStatus['ProductStatus']['created']); ?>&nbsp;</td>
		<td><?php echo h($productStatus['ProductStatus']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productStatus['ProductStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productStatus['ProductStatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productStatus['ProductStatus']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productStatus['ProductStatus']['id']))); ?>
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
