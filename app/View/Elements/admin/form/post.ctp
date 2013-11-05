<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí bài viết</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Post'); ?>
				<fieldset>
					<legend>Nhập nội dung bài viết</legend>
					<div class="control-group">
						<label class="control-label">Chọn danh mục</label>
						<div class="controls">
							<?php
							echo $this->Form->input('category_id', array(
								'label' => false,
								'div' => false,
								'class' => 'input-xxlarge',
								'type' => 'select',
								'options' => $categories,
								'required' => false,
							));

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Tiêu đề</label>
						<div class="controls">
							<?php echo $this->Form->input('title', array('class' => 'input-xxlarge', 'div' => false, 'label' => false)) ?>
						</div>
					</div>
					<div class="control-group">
						<label>Ảnh</label>
						<div class="controls">
							<?php
							if (!empty($this->request->data['Post']['thumbnail'])) {

								?>
								<div class="img_news" onclick="openKCFinder_singleFile(this)"><img src="<?php echo $this->Html->webroot('/') . $this->request->data['Post']['thumbnail'] ?>"/></div>
								<?php
							} else {
								echo $this->Html->tag('div', 'Click để chọn hình.', array('class' => 'thumbnail post-thumnail', 'onclick' => 'openKCFinder_singleFile(this)'));
							}

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Tóm tắt</label>
						<div class="controls">
							<?php echo $this->Form->input('sumary', array('div' => false, 'label' => false, 'class' => 'input-xxlarge textarea wysihtml5-editor')); ?>
						</div>
					</div>
					<div class="control-group">
						<label>Nội dung</label>
						<div class="controls">
							<?php
							echo $this->Form->input('content', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));
							echo $this->TvFck->create('full_text', array('toolbar' => 'extra'), 'full_text');

							?>
						</div>
					</div>
					<div class="form-actions">
						<?php echo $this->Form->submit('Nhập', array('class' => 'btn btn-primary', 'div' => false)) ?>
					</div>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>