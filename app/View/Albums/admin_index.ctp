<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Quản lí albums</div>
        </div>
        <div class="block-content collapse in">
			<?php echo $this->Session->flash() ?>
            <div class="albums index">
				<div class="actions" style="text-align: center; margin-bottom: 20px">
					<a href="/admin/albums/add" class="btn btn-primary">Tạo album mới</a>
				</div>
				<table class="table-data table table-striped table-bordered dataTable" >
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Ngày tạo</th>
                        <th>Số lượng ảnh</th>
                        <th>Thao tác</th>
                    </tr>
					<?php foreach ($albums as $album): ?>
						<tr>
							<td><?php echo $this->Html->link($album['Album']['name'], array('action' => 'view', $album['Album']['id'])); ?></td>
							<td><?php echo h($album['Album']['created_at']); ?>&nbsp;</td>
							<td><?php echo h(count($album['Photo'])); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link('Xem', array('action' => 'view', $album['Album']['id'])); ?>
								<?php echo $this->Html->link('Sửa', array('action' => 'edit', $album['Album']['id'])); ?>
								<?php echo $this->Form->postLink('Xóa', array('action' => 'delete', $album['Album']['id']), null, __('Are you sure you want to delete # %s?', $album['Album']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
                </table>
            </div>           
        </div>
    </div>
</div>