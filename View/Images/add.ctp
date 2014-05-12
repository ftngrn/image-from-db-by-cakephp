<div class="images form">
<?php echo $this->Form->create('Image', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Image'); ?></legend>
	<?php
		echo $this->Form->input('body', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
