<div class="tab-content">
    <div class="tab-pane" id="tabs1-pane1">
		<?php if (isset($actionEvents)): ?>
			<?php foreach ($actionEvents as $row): ?>
				<div>
					<div style="padding:2px 4px 2px 4px">
						<h4 class="">
							<?php
							echo $this->Html->link($row['Post']['title'], array(
								'controller' => 'posts',
								'action' => 'posts',
								'id' => $row['Post']['id'],
								'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));

							?>
						</h4>
						<?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
						<p><?php echo $row['Post']['sumary'] . '...' ?></p>
						<?php
						echo $this->Html->link('Xem thêm...', array(
							'controller' => 'posts',
							'action' => 'posts',
							'id' => $row['Post']['id'],
							'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));

						?>
					</div>
					<hr />

				</div>
				<br />
				<div style="clear:both"></div>

			<?php endforeach; ?>
			<?php
		else:
			echo "<p>Không có bài đăng</p>";
		endif;

		?>
    </div>
    <div class="tab-pane active" id="tabs1-pane2">
		<?php if (isset($generalNews) && $generalNews != null): ?>
			<?php foreach ($generalNews as $row): ?>
				<div style="padding:2px 4px 2px 4px"  class="new-preview">
					<h4 class="">
						<?php
						echo $this->Html->link($row['Post']['title'], array(
							'controller' => 'posts',
							'action' => 'view',
							'id' => $row['Post']['id'],
							'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));

						?>
					</h4>
					<?php
					if (isset($row['Post']['thumbnail']) && $row['Post']['thumbnail'] != null) {
						echo $this->Html->image($row['Post']['thumbnail'], array('style="width:120px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"'));
					} else {
						echo $this->Html->image('frontend/no-images.jpg', array('style="width:120px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"'));
					}

					?>
					<p><?php echo $row['Post']['sumary'] . '...' ?></p>
					<?php
					echo $this->Html->link('Xem thêm...', array(
						'controller' => 'posts',
						'action' => 'view',
						'id' => $row['Post']['id'],
						'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "float: right", 'escape' => false));

					?>
				</div>
				<div class="clearfix"></div>
				<hr>
			<?php endforeach; ?>
			<?php
		else:
			echo "<p>Không có bài đăng</p>";
		endif;

		?>
    </div>
    <div class="tab-pane" id="tabs1-pane3">
        <div class="users-list">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <th>Họ tên</th>
                <th>Địa chỉ email</th>
                <th>Số bài viết</th>
                </thead>
                <tbody>
					<?php foreach ($teachers as $user) : ?>
						<tr>
							<td>
								<?php $user_slug = $this->Common->vnit_change_string(Inflector::slug($user['User']['username'])) ?>
								<?php
								echo $this->Html->link($user['User']['username'], array(
									'controller' => 'blogs',
									'action' => 'index',
									'bloger_id' => $user['User']['id'],
									'slug' => $user_slug)
								)

								?>
							</td>
							<td>
								<?php echo $user['User']['email'] ?>
							</td>
							<td>
								<?php echo count($user['Article']) ?>
							</td>
						</tr>
					<?php endforeach; ?>
                </tbody>
            </table>



        </div>
    </div>
    <div class="tab-pane" id="tabs1-pane4">
		<?php if (isset($typicalFaces) && $typicalFaces != null): ?>
			<?php foreach ($typicalFaces as $row) { ?>
				<div style="padding:2px 4px 2px 4px">
					<?php
					$link = Router::url(array(
								'controller' => 'index',
								'action' => 'view',
								'id' => $row['Post']['id'],
								'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false))

					?>
					<h4 class="">
						<a href="<?php echo $link ?>"><?php echo $row['Post']['title'] ?></a>
					</h4>
					<?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
					<p><?php echo $row['Post']['sumary'] . '...' ?></p>
					<a href="<?php echo $link ?>">Xem thêm</a>
				</div>
				<hr>
			<?php } ?>
			<?php
		else:
			echo "<p>Không có bài đăng trong mục này.</p>";
		endif;

		?>
    </div>
    <div class="tab-pane" id="tab-confidential-content">
		<?php if (isset($confidentials) && count($confidentials)): ?>
			<?php foreach ($confidentials as $row) { ?>
				<div style="padding:2px 4px 2px 4px">
					<?php
					$link = Router::url(array(
								'controller' => 'index',
								'action' => 'view',
								'id' => $row['Post']['id'],
								'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false))

					?>
					<h4 class="">
						<a href="<?php echo $link ?>"><?php echo $row['Post']['title'] ?></a>
					</h4>
					<?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
					<p><?php echo $row['Post']['sumary'] . '...' ?></p>
					<a href="<?php echo $link ?>">Xem thêm</a>
				</div>
				<hr>
			<?php } ?>
			<?php
		else:
			echo "<p>Không có bài đăng trong mục này.</p>";
		endif;

		?>
    </div>
</div>