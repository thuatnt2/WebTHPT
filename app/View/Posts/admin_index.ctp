<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Quản lí bài viết</div>
        </div>
        <div class="block-content collapse in">
			<?php echo $this->Session->flash() ?>
            <div class="span12">
				<div class="actions" style="text-align: center; margin-bottom: 20px">
					<a href="/admin/posts/add" class="btn btn-primary">Đăng bài viết</a>
				</div>
				<table class="table-data table table-striped table-bordered dataTable" >
					<thead>
						<tr>
							<th>TT</th>
							<th>Tên bài viết</th>
							<th>Danh mục</th>
							<th>Trạng thái</th>
							<th>Ngày tạo</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
						//debug($categories);
						$stt = 1;
						foreach ($posts as $row):

							?>
							<tr>
								<td><?php echo $stt++ ?></td>
								<td><?php echo $row['Post']['title'] ?></td>
								<td><?php echo $row['Category']['name'] ?></td>
								<td>
									<?php
									if ($row['Post']['is_active'] == 0) {
										echo "<span class='icon'><a href='" . $this->Html->url('/categories/makeActive/' . $row['Post']['id'] . '/1') . "'><img src='" . $this->Html->url('/') . "img/admin/dis-approve.png' border='0'></a></span>";
									} else {
										echo "<span class='icon'><a href='" . $this->Html->url('/categories/makeActive/' . $row['Post']['id'] . '/0') . "'><img src='" . $this->Html->url('/') . "img/admin/approve.png' border='0'></a></span>";
									}

									?>

								</td>
								<td>
									<?php echo date('d/m/Y', strtotime($row['Post']['created'])) ?>
								</td>
								<td>
									<?php
									echo $this->Html->link($this->Html->image('admin/edit.png'), array('action' => 'edit', $row['Post']['id']), array('escape' => false));
									echo $this->Form->postLink(
											$this->Html->image('admin/delete.png'), array('action' => 'delete', $row['Post']['id']), array('escape' => false), 'Bạn có chắc chắn muốn xóa ?'
									);

									?>

								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>					
				</table>
            </div>
        </div>
    </div>
</div>

