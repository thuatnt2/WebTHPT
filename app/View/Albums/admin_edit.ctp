<div class="albums form">
    <?php echo $this->Form->create('Album'); ?>
    <fieldset>
        <legend><?php echo __('Admin Edit Album'); ?></legend>
        <?php
        echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Album.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Album.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Albums'), array('action' => 'index')); ?></li>
    </ul>
</div>
