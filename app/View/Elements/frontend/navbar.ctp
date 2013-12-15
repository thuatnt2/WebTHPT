<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="<?php echo ($current_menu_id == 0 ? 'active' : '') ?>"><a href="<?php echo Router::url('/') ?>">
                    <span class="glyphicon glyphicon-home"></span>&nbspTrang Chủ</a>
            </li>
            <?php
            $menus = $this->requestAction('categories/getMainMenu');
            ?>
            <li class="dropdown <?php echo ($current_menu_id == 1 ? 'active' : '') ?>">
                <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Giới thiệu<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo Router::url(array('controller' => 'pages', 'action' => 'view', 'page_name' => 'lich-su-phat-trien')) ?>">Lịch sử phát triển</a>
                    </li>
                      <li>
                        <a href="<?php echo Router::url(array('controller' => 'pages', 'action' => 'view', 'page_name' => 'su-menh-tam-nhin')) ?>">Sứ mệnh tầm nhìn</a>
                    </li>
                      <li>
                        <a href="<?php echo Router::url(array('controller' => 'pages', 'action' => 'view', 'page_name' => 'co-cau-to-chuc')) ?>">Cơ cấu tổ chức</a>
                    </li>
                      <li>
                        <a href="<?php echo Router::url(array('controller' => 'pages', 'action' => 'view', 'page_name' => 'co-so-vat-chat')) ?>">Lịch sử phát triển</a>
                    </li>
                </ul>
            </li>	
            <?php
            $resource_type = $this->requestAction('resources/getResourceType');
            //debug($resource_type);
            ?>
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài nguyên điện tử <b class="caret"></b></a>
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
                            ))
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
                    <?php // debug($current_menu_id) ?>
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

            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lịch công tác <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thời khóa biểu</a></li>
                    <li><a href="#">Lịch công tác</a></li>
                </ul>
            </li>
            <li><?php echo $this->Html->link('Album ảnh', array('plugin' => null, 'controller' => 'albums', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><?php echo $this->Html->link('Video', array('plugin' => null, 'controller' => 'videos', 'action' => 'index'), array('escape' => false)) ?></li>
            <li>
            </li>
        </ul>
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
