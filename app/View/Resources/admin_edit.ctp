<div class="resources form">
<?php echo $this->Form->create('Resource'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Resource'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('link');
		echo $this->Form->input('view_link');
		echo $this->Form->input('user_created');
		echo $this->Form->input('resource_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resource.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Resource.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Resources'), array('action' => 'index')); ?></li>
	</ul>
</div>
