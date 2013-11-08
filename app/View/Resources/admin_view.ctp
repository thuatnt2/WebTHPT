<div class="resources view">
<h2><?php echo __('Resource'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View Link'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['view_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Created'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['user_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resource Category Id'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['resource_category_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resource'), array('action' => 'edit', $resource['Resource']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resource'), array('action' => 'delete', $resource['Resource']['id']), null, __('Are you sure you want to delete # %s?', $resource['Resource']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource'), array('action' => 'add')); ?> </li>
	</ul>
</div>
