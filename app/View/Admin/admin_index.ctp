<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="header">Quản trị nội dung trang web</div>
        </div>
        <div class="block-content collapse in shortcut-links">
            <?php echo $this->Session->flash() ?>
            <div class="row-fluid padd-bottom">
                <?php echo $this->Session->flash() ?>
                <div class="span4">
                    <a href="/admin/danh-sach-bai-viet">
                        <?php echo $this->Html->image('admin/article.png') ?> 
                        BÀI VIẾT
                    </a>
                </div>
                <div class="span4">
                    <a href="/admin/danh-muc">
                        <?php echo $this->Html->image('admin/category.png') ?> 
                        DANH MỤC
                    </a> 
                </div>
                <div class="span4">
                    <a href="/admin/tai-lieu">
                        <?php echo $this->Html->image('admin/document.png') ?> 
                        TÀI LIỆU
                    </a> 
                </div>

            </div>
            <hr />
            <div class="row-fluid padd-bottom">

                <div class="span4">

                    <a href="/admin/videos">
                        <?php echo $this->Html->image('admin/video.png') ?> 
                        VIDEO
                    </a> 

                </div>
                <div class="span4">
                    <a href="/admin/album-anh">
                        <?php echo $this->Html->image('admin/picture.png') ?> 
                        HÌNH ẢNH
                    </a> 

                </div>
                <?php if ($isAdmin): ?>
                    <div class="span4">
                        <a href="/admin/nguoi-dung">
                            <?php echo $this->Html->image('admin/user.png') ?> 
                            NGƯỜI DÙNG
                        </a> 
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

