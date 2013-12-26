<legend>Cấu hình trang web</legend>
<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Liên kết websites</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
				<div class="actions" style="margin-bottom: 20px">
					<a href="/admin/links/add" class="btn btn-primary">Thêm liên kết web</a>
				</div>
				<?php echo $this->Session->flash() ?>
				<table class="table table-striped table-bordered" >
					<thead>
						<tr>
							<th>TT</th>
							<th>Tiêu đề</th>
							<th>Liên kết</th>
							<th>Danh mục</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
						//debug($categories);
						$stt = 1;
						foreach ($links as $row):

							?>
							<tr>
								<td><?php echo $stt++ ?></td>
								<td><?php echo $row['Link']['title'] ?></td>
								<td><?php echo $this->Html->link($row['Link']['link'], $row['Link']['link'],array('target'=>'_blank')) ?></td>
								<td><?php echo $linkTypes[$row['Link']['type']] ?></td>
								<td>
									<?php
									echo $this->Html->link($this->Html->image('admin/edit.png'), array('controller' => 'links', 'action' => 'edit', $row['Link']['id']), array('escape' => false));
									echo $this->Form->postLink(
											$this->Html->image('admin/delete.png'), array('controller' => 'links', 'action' => 'delete', $row['Link']['id']), array('escape' => false), 'Bạn có chắc chắn muốn xóa ?'
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

