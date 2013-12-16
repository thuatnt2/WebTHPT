<div class="row-fluid">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí tài liệu</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Resource'); ?>
				<fieldset>
					<legend>Thêm mới tài liệu</legend>
					<label>Tiêu đề</label>
					<?php
					echo $this->Form->input('title', array(
						'label' => false,
						'div' => false,
						'class' => 'input-xxlarge',
						'required' => false,
					));

					?>
					<label>Thể loại tài liệu</label>
					<?php
					echo $this->Form->input('resource_type_id', array(
						'class' => 'input-xxlarge',
						'options' => $resource_types,
						'div' => false,
						'label' => false
					));

					?>						
				</fieldset>
				<?php
				echo $this->Form->hidden('file_path');
				echo $this->Form->hidden('file_name');
				echo $this->Form->hidden('file_absolute_path');
				echo $this->Form->hidden('size');
				echo $this->Form->hidden('ext');

				?>
				<?php echo $this->Form->end(); ?>



				<div class="control-group">
					<label>Chọn file</label>
					<div class="row-fluid">
						<div class="span3" id="resource-input-result">
							<div id="resource-upload-result" style="">
								<div class="thumbnail post-thumnail">
									<img id="resource-uploaded-icon" src="<?php echo $this->Html->webroot('/img/admin/icons/' . $file_icons[$this->request->data['Resource']['ext']]) ?>"/>
								</div>
								<button id="resource-btn-remove-uploaded" class="btn btn-primary">Hủy</button>
							</div>
							<input style="display: none" type="file" name="data[Resource][file]" id="resource-input-file" data-url="<?php echo $this->Html->url(array('controller' => 'resources', 'action' => 'upload')) ?>"/>
						</div>
						<div class="span8"> 
							<div id="resource-alert" class="alert" style="display: none">
								<button class="close">×</button>
								<span></span>
							</div>
							<div id="resource-file-uploaded-info">
								<div>Tên file : <span id="resource-result-file-name"><?php echo $this->request->data['Resource']['file_name'] ?></span></div>
								<div>Dung lượng : <span id="resource-result-file-size"><?php echo $this->request->data['Resource']['size'] ?></span></div>
							</div>
							<div id="resource-upload-progress" class="row-fluid" style="display: none">
								<div class="span10">
									<div class="progress progress-striped progress-success active">
										<div class="bar" style="width: 0%;"></div>
									</div>
								</div>
								<div class="span2">
									<a id="resource-btn-cancel" href="javascript:void(0)" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="form-actions">
					<button class="btn btn-primary" id="resource-upload-edit-submit">Nhập</button>
				</div>
			</div>
		</div>
	</div>

</div>
<?php echo $this->Html->script('admin/upload/vendor/jquery.ui.widget', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('admin/upload/jquery.iframe-transport', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('admin/upload/jquery.fileupload', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('admin/resource_upload', array('block' => 'scriptBottom')); ?>
