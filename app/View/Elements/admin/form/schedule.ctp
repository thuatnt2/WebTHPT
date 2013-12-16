<div class="row-fluid">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí tài liệu</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Schedule'); ?>
				<fieldset>
					<legend>Thêm mới thời khóa biểu</legend>
					<div class="control-group">
						<label class="control-label">Tiêu đề</label>
						<div class="controls">
							<?php
							echo $this->Form->input('title', array(
								'label' => false,
								'div' => false,
								'class' => 'input-xxlarge',
								'required' => false,
							));

							?>	
						</div>
					</div>
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
						<div class="span3" id="schedule-input-result">
							<div id="schedule-upload-result" style="display: none">
								<div class="thumbnail post-thumnail">
									<img id="schedule-uploaded-icon" src=""/>
								</div>
								<button id="schedule-btn-remove-uploaded" class="btn btn-primary">Hủy</button>
							</div>
							<input type="file" name="data[Schedule][file]" id="schedule-input-file" data-url="<?php echo $this->Html->url(array('controller' => 'schedules', 'action' => 'upload')) ?>"/>
						</div>
						<div class="span8"> 
							<div id="schedule-alert" class="alert" style="display: none">
								<button class="close">×</button>
								<span></span>
							</div>
							<div id="schedule-file-uploaded-info" style="display: none">
								<div>Tên file : <span id="schedule-result-file-name"></span></div>
								<div>Dung lượng : <span id="schedule-result-file-size"></span></div>
							</div>
							<div id="schedule-upload-progress" class="row-fluid" style="display: none">
								<div class="span10">
									<div class="progress progress-striped progress-success active">
										<div class="bar" style="width: 0%;"></div>
									</div>
								</div>
								<div class="span2">
									<a id="schedule-btn-cancel" href="javascript:void(0)" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="form-actions">
					<button class="btn btn-primary" id="schedule-upload-submit">Nhập</button>
				</div>
			</div>
		</div>
	</div>

</div>
<?php echo $this->Html->script('admin/upload/vendor/jquery.ui.widget', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('admin/upload/jquery.iframe-transport', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('admin/upload/jquery.fileupload', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('admin/schedule', array('block' => 'scriptBottom')); ?>