<?php
$currentMenu = $this->request['controller'];
//var_dump($currentMenu);

?>
<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="<?php echo $currentMenu == 'index' ? 'active' : '' ?>"><a href="<?php echo Router::url('/') ?>">
                    <span class="glyphicon glyphicon-home"></span>&nbspTrang Chủ</a>
            </li>
			<?php
			$menus = $this->requestAction('categories/getMainMenu');
//                        debug($menus);

			?>
			<?php
			$firstMenuItem = $this->requestAction('categories/firstMenuItem');
			//debug($ firstMenuItem);

			?>
            <li  class="dropdown <?php echo ($current_menu_id == 1 ? 'active' : '') ?>">
                <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><?php echo $firstMenuItem['Category']['name'] ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php
					foreach ($firstMenuItem['posts'] as $post):

						?>
						<li>
							<?php
							echo $this->Html->link($post['Post']['title'], array(
								'controller' => 'posts',
								'action' => 'view',
								'id' => $post['Post']['id'],
								'slug' => $post['Post']['alias']), array('escape' => false));

							?>
						</li>
						<?php
					endforeach;

					?> 
                </ul>
            </li>        
			<?php
			foreach ($menus as $menu):
				if ($menu['Category']['parent_id'] == null):

					?>
					<?php // debug($current_menu_id)     ?>
					<li class="dropdown <?php echo ($current_menu_id == $menu['Category']['id'] ? 'active' : '') ?>" id="<?php echo 'menu-id-' . $menu['Category']['id'] ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['Category']['name'] ?><b class="caret"></b></a>
						<?php if (count($menu['ChildCategory']) > 0):

							?><ul class="dropdown-menu">
								<?php
								foreach ($menu['ChildCategory'] as $child):

									?>
									<li>
										<?php
										if ($child['is_tab'] != 1) {
											echo $this->Html->link($child['name'], array(
												'controller' => 'posts',
												'action' => 'posts',
												'id' => $child['id'],
												'slug' => $child['alias']));
										}

										?>
									</li>
									<?php
								endforeach;

								?> </ul>
						<?php endif;

						?>
					</li>
					<?php
				endif;
			endforeach;

			?>
			<?php
			$resource_type = $this->requestAction('resources/getResourceType');

			?>
            <li class="dropdown <?php echo $currentMenu == 'resources' ? 'active' : '' ?>">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">Tài nguyên điện tử <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php
					foreach ($resource_type as $k => $v):

						?>
						<li>
							<?php
							echo $this->Html->link($v, array(
								'controller' => 'resources',
								'action' => 'listResources',
								'id' => $k,
									//'slug'=>$this->Common->vnit_change_string(Inflector::slug($v)),
							))

							?>
						</li>
						<?php
					endforeach;

					?>
                </ul>
            </li>
			<?php $scheduleTypes = $this->requestAction('schedules/getScheduleTypes'); ?>
			<li class="dropdown <?php echo $currentMenu == 'schedules' ? 'active' : '' ?>">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">Lịch làm việc <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php foreach ($scheduleTypes as $k => $v): ?>
						<li>
							<?php echo $this->Html->link($v, array('controller' => 'schedules', 'action' => 'listSchedules', 'id' => $k)) ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
            <li class="<?php echo $currentMenu == 'albums' ? 'active' : '' ?>"><?php echo $this->Html->link('Album ảnh', array('plugin' => null, 'controller' => 'albums', 'action' => 'index'), array('escape' => false)) ?></li>
            <li class="<?php echo $currentMenu == 'videos' ? 'active' : '' ?>"><?php echo $this->Html->link('Video', array('plugin' => null, 'controller' => 'videos', 'action' => 'index'), array('escape' => false)) ?></li>
            <!--<li><a href="#" style="padding-right:35px">Liên hệ</a></li>-->
            <li>
            </li>
        </ul>
        <!--        <form>
                                <div class="input-group" id="search-form-navbar">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                </div>
                        </form>-->
    </div><!-- /.navbar-collapse -->
</nav>
<script type="text/javascript">
	$(function() {
		$('li.dropdown').mouseover(function() {
			$(this).addClass('open');
		});
		$('li.dropdown').mouseleave(function() {
			$(this).removeClass('open');
		});
	});
</script>