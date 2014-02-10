<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí tài liệu</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Resource'); ?>
				<fieldset>
					<legend>Thêm mới tài liệu</legend>
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
					<div class="control-group">
						<label>Thể loại tài liệu</label>
						<div class="controls">
							<select name="data[Resource][resource_type]" class="input-xxlarge">
								<optgroup label="Tài nguyên điện tử">
									<?php foreach ($resource_type['TNDT'] as $k => $v): ?>
										<option value="<?php echo $k ?>"><?php echo $v ?></option>
									<?php endforeach; ?>
								</optgroup>
								<optgroup label="Kết quả học tập">
									<?php foreach ($resource_type['KQHT'] as $k => $v): ?>
										<option value="<?php echo $k ?>"><?php echo $v ?></option>
									<?php endforeach; ?>
								</optgroup>
							</select>
						</div>
					</div>	

					<div class="control-group">
						<label>Link tài liệu trên Dropbox</label>
						<div class="controls">
							<?php
							echo $this->Form->input('link', array(
								'class' => 'input-xxlarge',
								'div' => false,
								'label' => false,
								'required' => false,
							));

							?>
						</div>
					</div>	

					<div class="control-group">
						<label>Mô tả</label>
						<div class="controls">
							<?php
							echo $this->Form->input('description', array(
								'type' => 'textarea',
								'class' => 'input-xxlarge',
								'div' => false,
								'label' => false,
							));

							?>
						</div>
					</div>	


					<div class="form-actions">
						<?php echo $this->Form->submit('Thêm tài liệu', array('class' => 'btn-large btn-primary', 'div' => false)) ?>
					</div>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>