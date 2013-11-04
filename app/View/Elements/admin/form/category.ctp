<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<h4 class="muted pull-left">Thêm danh mục</h4>
		</div>
		<div class="block-content collapse in">
			<div class="form-container">
				<?php echo $this->Form->create('Category'); ?>
				<label class="control-label" >Chọn danh mục cha</label>
				<?php
				echo $this->Form->input('parent_id', array(
					'label' => false,
					'div' => false,
					'class' => 'form-control',
					'type' => 'select',
					'options' => $parentCategories,
					'empty' => '--Là danh mục cha--',
					'required' => false,
				));
				?>
				<label>Tên danh mục</label>
				<?php echo $this->Form->input('name', array('class' => 'form-control', 'div' => false, 'label' => false)) ?>
				<?php echo $this->Form->submit('Nhập', array('class' => 'btn btn-primary', 'div' => false)) ?>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>