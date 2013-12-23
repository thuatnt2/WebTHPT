<?php
/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí bài viết</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('User', array('action' => 'editUser')); ?>
				<fieldset>
					<legend>Nhập thông tin người dùng</legend>
					<div class="row">
						<div class="span5">
							<div class="control-group checkbox-group">
								<label class="control-label">Chọn danh mục được phép đăng</label>
								<div class="checkbox">
									<?php //debug($categories) ?>
									<?php foreach ($categories as $category) : ?>
										<div class="root-category">
											<label class="label-root-category">
												<input type="checkbox"/>
												<?php echo $category['Category']['name'] ?>
											</label>
											<div class="child-category">
												<?php foreach ($category['ChildCategory'] as $child): ?>
													<label>
														<input
															type="checkbox" 
															name="data[Category][]"
															value="<?php echo $child['id'] ?>"
															<?php if (in_array($child['id'], $allow)):

																?>
																checked="checked"
																<?php
															endif;

															?>
															/>
															<?php echo $child['name'] ?>
													</label>
												<?php endforeach; ?>
											</div>

										</div>
									<?php endforeach; ?>

								</div>
							</div>
						</div>	
					</div>
					<div class="form-actions">
						<?php echo $this->Form->submit('Đồng ý', array('class' => 'btn btn-large btn-primary', 'div' => false)) ?>
					</div>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Html->script('admin/add-user', array('block' => 'scriptBottom')) ?>