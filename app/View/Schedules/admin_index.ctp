<div class="row-fluid">	
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí thời khóa biểu</div>
		</div>
		<div class="block-content collapse in">
			<?php echo $this->Session->flash() ?>
			<div class="span12">
				<div class="dataTables_wrapper form-inline" role="grid">
					<div  class="row">
						<div class="span6">
							<?php echo $this->Html->link('Nhập thời khóa biểu', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
						</div>
					</div>

					<?php
					$stt = 1;

					?>
					<table class="table table-striped table-bordered dataTable">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Tiêu đề</th>
								<th>Ngày tạo</th>
								<th>Người tạo</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
							//debug($resources);
							foreach ($resources as $row):

								?>
								<tr>
									<td><?php echo $stt++ ?></td>
									<td><?php echo $row['Schedule']['title']; ?></td>
									<td><?php echo date('d/m/Y', strtotime($row['Schedule']['created'])) ?></td>
									<td><?php echo $row['Schedule']['user_create'] ?></td>
									<td>
										<?php
										echo $this->Html->link(
												$this->Html->image('admin/edit.png'), array('action' => 'edit', $row['Schedule']['id']), array('escape' => false));
										echo $this->Form->postLink($this->Html->image('admin/delete.png'), array('action' => 'delete', $row['Schedule']['id']), array('escape' => false), 'Bạn có chắc chắn muốn xóa ???')

										?>
									</td>
								</tr>
								<?php
							endforeach;

							?>
						</tbody>
					</table>
					<div class="row">
						<div class="span6"></div>
						<div class="span6">
							<div class="dataTables_paginate paging_bootstrap pagination">
								<ul>
									<?php
									echo $this->Paginator->prev('Trước', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
									echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
									echo $this->Paginator->next('Tiếp', array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));

									?>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
