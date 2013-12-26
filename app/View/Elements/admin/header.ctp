<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <a href="<?php echo $this->Html->url('/') ?>" target="_blank" class="brand">Trang chủ</a> 
                <a class="brand">|</a>
                <a href="<?php echo Router::url('/dashboard') ?>" class="brand">Trang quản trị</a>
                <?php
                $user = $this->Session->read('UserAuth');
                if (!empty($user)):
                    ?>
                    <ul class="nav pull-right">

                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $user['User']['first_name'] ?> <i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo Router::url('/admin/doi-mat-khau') ?>">Đổi mật khẩu</a></li> 
                                <li><a href="<?php echo Router::url('/logout') ?>">Đăng xuất</a></li> 
                            </ul>
                        </li>
                    </ul>
                    <?php
                endif;
                ?>

                <ul class="nav">
                    <li><a href="/admin/danh-sach-bai-viet">Bài viết</a></li> 
                    <li><a href="/admin/danh-muc">Danh mục</a></li>
                    <li>
                        <a href="/admin/schedules">Thời khóa biểu</a>
                    </li>
                    <li><a href="/admin/videos">Video</a></li> 
                    <li>
                        <a href="/admin/album-anh">Album ảnh</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/') . 'admin/tai-lieu' ?>">Tài liệu</a>
                    </li>
<?php
if (isset($user['UserGroup']['id']) && $user['UserGroup']['id'] == ADMIN_GROUP_ID):
    ?>

                        <li><a href="/admin/nguoi-dung">Danh sách người dùng</a></li> 
                        <?php
                    endif;
                    ?>
                    <li>
                        <a href="<?php echo $this->Html->url('/admin/cau-hinh-site') ?>">Nội dung khác</a>
                    </li>                      

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>