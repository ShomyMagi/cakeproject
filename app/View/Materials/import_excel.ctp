<div class="materials index">
	<h2><?php echo __('Import Excel file'); ?></h2>
	
	<?php 
		echo $this->Form->create('Document', array('url' => array('controller' => 'materials', 'action' => 'import_excel'), 'type' => 'file'));
	 	echo $this->Form->file('Material.excel_file');
	 	echo $this->Form->end(__('Submit'));
	?>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Materials'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Material'), array('action' => 'save')); ?></li>
		<li><?php echo $this->Html->link(__('List Recommended Ratings'), array('controller' => 'recommended_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recommended Rating'), array('controller' => 'recommended_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Statuses'), array('controller' => 'material_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Status'), array('controller' => 'material_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Import Excel File'), array('action' => 'import_excel')); ?> </li>
		<li><?php echo $this->Html->link(__('Export Excel File'), array('action' => 'export_excel')); ?> </li>
	</ul>
</div>
