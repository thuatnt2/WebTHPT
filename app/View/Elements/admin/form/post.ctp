<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<h4 class="muted pull-left">Thêm bài viết</h4>
		</div>
		<div class="block-content collapse in">
			<div class="form-container">
				<?php echo $this->Form->create('Post'); ?>
				<label class="control-label" >Chọn danh mục</label>
				<?php
				echo $this->Form->input('category_id', array(
					'label' => false,
					'div' => false,
					'class' => 'form-control',
					'type' => 'select',
					'options' => $categories,
					'required' => false,
				));

				?>
				<div class="form-control">
					<label>Tiêu đề bài viết</label>
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'div' => false, 'label' => false)) ?>
				</div>

				<div class="form-control">
					<label>Ảnh</label>
					<?php
					if (!empty($this->request->data['Post']['thumbnail'])) {

						?>
	                    <div class="img_news" onclick="openKCFinder_singleFile(this)"><img src="<?php echo $this->Html->webroot('/') . $this->request->data['Post']['thumbnail'] ?>"/></div>
						<?php
					} else {
						echo $this->Html->tag('div', 'Click để chọn hình.', array('class' => 'img_news', 'onclick' => 'openKCFinder_singleFile(this)'));
					}

					?>

				</div>

				<div class="form-control">
					<label>Tóm tắt</label>
					<?php
					echo $this->Form->input('sumary', array('div' => false, 'label' => false));

					?>
				</div>

				<div class="form-control">
					<?php
					echo $this->Form->input('content', array('div' => FALSE, 'label' => false, 'id' => 'full_text'));
					echo $this->TvFck->create('full_text', array('toolbar' => 'extra'), 'full_text');

					?>

				</div>

				<div class="form-control">
				<?php echo $this->Form->submit('Nhập', array('class' => 'btn btn-primary', 'div' => false)) ?>
				</div>


<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>