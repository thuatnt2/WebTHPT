<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <a href="<?php echo $this->Html->url('/') ?>" target="_blank" class="brand">Đến Website</a>
                <a href="/dashboard" class="brand">Trang quản trị</a>
                <?php
                $user = $this->Session->read('UserAuth');
                if (!empty($user)):
                    ?>
                    <ul class="nav pull-right">

                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $user['User']['first_name'] ?> <i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $this->Html->url('/admin/thong-tin-ca-nhan/' . $user['User']['id']) ?>">Thông tin cá nhân</a></li> 
                                <li><a href="<?php echo Router::url('/admin/doi-mat-khau') ?>">Đổi mật khẩu</a></li> 
                                <li><a href="<?php echo Router::url('/logout') ?>">Đăng xuất</a></li> 
                            </ul>
                        </li>
                    </ul>
                    <?php
                endif;
                ?>

                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Bài viết <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/danh-sach-bai-viet">Danh sách bài viết</a></li> 
                            <li><a href="/admin/them-bai-viet">Thêm mới bài viết</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Danh mục <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/danh-muc">Danh sách danh mục</a></li> 
                            <li><a href="/admin/them-danh-muc">Thêm mới danh mục</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Video<i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/videos">Danh sách video</a></li> 
                            <li><a href="/admin/them-video">Thêm mới video</a></li> 
                        </ul>
                    </li>
                    <?php
                    if (isset($user['UserGroup']['id']) && $user['UserGroup']['id'] == ADMIN_GROUP_ID):
                        ?>

                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Người dùng <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/admin/nguoi-dung">Danh sách người dùng</a></li> 
                                <li><a href="/admin/them-nguoi-dung">Thêm mới người dùng</a></li> 
                            </ul>
                        </li>
                        <?php
                    endif;
                    ?>
                    <li>
                        <a href="/admin/album-anh">Album ảnh</a>
                    </li>
					<li>
						<a href="<?php echo $this->Html->url('/').'admin/tai-lieu'?>">Tài liệu</a>
					</li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>