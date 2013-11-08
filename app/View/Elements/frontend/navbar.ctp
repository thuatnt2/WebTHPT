<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo Router::url('/') ?>"><span class="glyphicon glyphicon-home"></span>&nbspTrang Chủ</a></li>
            <?php
            $menus = $this->requestAction('categories/getMainMenu');
            //debug($menus);
            ?>

            <li  class="dropdown">
                <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Giới thiệu <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Lịch sử phát triển</a></li>
                    <li><a href="#">Sứ mệnh tầm nhìn</a></li>
                    <li><a href="#">Cơ cấu tổ chức</a></li>
                    <li><a href="#">Cơ sở vật chất</a></li>
                </ul>
            </li>
            <?php
            foreach ($menus as $menu):
                if ($menu['Category']['parent_id'] == null):
                    ?>
                    <li class="dropdown" id="<?php echo 'menu-id-' . $menu['Category']['id'] ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['Category']['name'] ?><b class="caret"></b></a>
                        <?php if (count($menu['ChildCategory']) > 0):
                            ?><ul class="dropdown-menu">
                                <?php
                                foreach ($menu['ChildCategory'] as $child):
                                    ?>
                                    <li>
                                        <?php
                                        echo $this->Html->link($child['name'], array(
                                            'controller' => 'posts',
                                            'action' => 'posts',
                                            'id' => $child['id'],
                                            'slug' => $child['alias']))
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

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lịch công tác <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thời khóa biểu</a></li>
                    <li><a href="#">Lịch công tác</a></li>

                </ul>
            </li>
            <li><?php echo $this->Html->link('Video', array('plugin' => null, 'controller' => 'videos', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><a href="#" style="padding-right:35px">Liên hệ</a></li>
            <li>
               
            </li>
           

        </ul>
          <div class="input-group" id="search-form-navbar">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                </div>
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