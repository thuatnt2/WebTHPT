<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí bài viết</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Category'); ?>
				<fieldset>
					<legend>Thêm mới danh bài viết</legend>
					<div class="control-group">
						<label class="control-label">Chọn danh mục cha</label>
						<div class="controls">
							<?php
							echo $this->Form->input('parent_id', array(
								'label' => false,
								'div' => false,
								'class' => 'input-xxlarge',
								'type' => 'select',
								'options' => $parentCategories,
								//'empty' => '--Là danh mục cha--',
								'required' => false,
							));

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Tên danh mục</label>
						<div class="controls">
							<?php echo $this->Form->input('name', array('class' => 'input-xxlarge', 'div' => false, 'label' => false)) ?>
						</div>
					</div>	


					<div class="form-actions">
						<?php echo $this->Form->submit('Nhập', array('class' => 'btn-large btn-primary', 'div' => false)) ?>
					</div>
					<?php echo $this->Form->hidden('thumbnail', array('id' => 'post-thumbnail')) ?>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>