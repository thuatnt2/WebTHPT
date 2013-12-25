<div class="row-fluid">	
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí tài liệu</div>
		</div>
		<div class="block-content collapse in">
			<?php echo $this->Session->flash() ?>
			<div class="span12">
				<?php
				$stt = 1;

				?>
				<div class="actions" style="margin-bottom: 20px">
					<a href="/admin/resources/add" class="btn btn-primary">Thêm tài liệu</a>
				</div>
				<table class="table-data table table-striped table-bordered dataTable">
					<thead>
						<tr>
							<th>Thứ tự</th>
							<th>Tiêu đề</th>
							<th>Thể loại</th>
							<th>Ngày tạo</th>
							<th>Người tạo</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
						//debug($resource_type[1]);
						foreach ($resources as $row):

							?>
							<tr>
								<td><?php echo $stt++ ?></td>
								<td><?php echo $this->Html->link($row['Resource']['title'], $row['Resource']['link'], array('target' => '_blank')); ?></td>
								<td><?php echo $resource_type[$row['Resource']['resource_type']] ?></td>
								<td><?php echo date('d/m/Y', strtotime($row['Resource']['created'])) ?></td>
								<td><?php echo $row['Resource']['user_create'] ?></td>
								<td>
									<?php
									echo $this->Html->link(
											$this->Html->image('admin/edit.png'), array('action' => 'edit', $row['Resource']['id']), array('escape' => false));
									echo $this->Form->postLink($this->Html->image('admin/delete.png'), array('action' => 'delete', $row['Resource']['id']), array('escape' => false), 'Bạn có chắc chắn muốn xóa ???')

									?>
								</td>
							</tr>
							<?php
						endforeach;

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

