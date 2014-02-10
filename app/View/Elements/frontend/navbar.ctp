<?php
$currentMenu = $this->request['controller'];
//var_dump($currentMenu);
$menus = $this->requestAction('categories/getMainMenu');
//debug($menus);
//exit();

?>
<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
            <li class="<?php echo $currentMenu == 'index' ? 'active' : '' ?>"><a href="<?php echo Router::url('/') ?>">
                    <span class="glyphicon glyphicon-home"></span>&nbspTrang Chủ</a>
            </li>

			<?php
			foreach ($menus as $menu) {
				echo $this->Menu->buildDropdownMenu($menu);
			}

			?>
			<?php
			$resource_type = $this->requestAction('resources/getResourceType');

			?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">Kết quả học tập<b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php
					foreach ($resource_type['KQHT'] as $k => $v):

						?>
						<li>
							<?php
							echo $this->Html->link($v, array(
								'controller' => 'resources',
								'action' => 'listResources',
								'id' => $k,
									//'slug'=>$this->Common->vnit_change_string(Inflector::slug($v)),
							));

							?>
						</li>
						<?php
					endforeach;

					?>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">Tài nguyên<b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php
					foreach ($resource_type['TNDT'] as $k => $v):

						?>
						<li>
							<?php
							echo $this->Html->link($v, array(
								'controller' => 'resources',
								'action' => 'listResources',
								'id' => $k,
									//'slug'=>$this->Common->vnit_change_string(Inflector::slug($v)),
							));

							?>
						</li>
						<?php
					endforeach;

					?>
                </ul>
            </li>
			<?php $scheduleTypes = $this->requestAction('schedules/getScheduleTypes'); ?>
			<li class="dropdown <?php echo $currentMenu == 'schedules' ? 'active' : '' ?>">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">Điều hành<b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php foreach ($scheduleTypes as $k => $v): ?>
						<li>
							<?php echo $this->Html->link($v, array('controller' => 'schedules', 'action' => 'listSchedules', 'id' => $k)) ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
			<li class="dropdown <?php echo ($currentMenu == 'videos' || $currentMenu == 'albums') ? 'active' : '' ?>">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Thư viện<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link('Ảnh', array('plugin' => null, 'controller' => 'albums', 'action' => 'index'), array('escape' => false)) ?></li>
					<li><?php echo $this->Html->link('Video', array('plugin' => null, 'controller' => 'videos', 'action' => 'index'), array('escape' => false)) ?></li>
				</ul>
			</li>
            <li><a href="<?php echo $this->Html->url('/lien-he') ?>" style="padding-right:35px">Liên hệ</a></li>
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