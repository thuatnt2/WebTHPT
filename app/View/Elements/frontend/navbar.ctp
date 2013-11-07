<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo Router::url('/') ?>"><span class="glyphicon glyphicon-home"></span>&nbspTrang Chủ</a></li>
            <li  class="dropdown">
                <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Giới thiệu <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Lịch sử phát triển</a></li>
                    <li><a href="#">Sứ mệnh tầm nhìn</a></li>
                    <li><a href="#">Cơ cấu tổ chức</a></li>
                    <li><a href="#">Cơ sở vật chất</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin tức <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Bản tin trường</a></li>
                    <li><a href="#">Đoàn Thanh Niên</a></li>
                    <li><a href="#">Bản tin Internet</a></li>
                </ul>
            </li>
          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lịch công tác <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thời khóa biểu</a></li>
                    <li><a href="#">Lịch công tác</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài nguyên điện tử <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Giáo án điện tử</a></li>
                    <li><a href="#">Sách điện tử</a></li>
                    <li><a href="#">Bộ đề kiểm tra</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tuyển sinh <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Tuyển sinh khối 10</a></li>
                    <li><a href="#">Tuyển sinh ĐH - CĐ</a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tổ chức đoàn thể <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Hội khuyến học</a></li>
                    <li><a href="#">Hội phụ huynh</a></li>
                </ul>
            </li>
            <li><a href="#">Hình ảnh</a></li>
            <li><?php echo $this->Html->link('Video', array('plugin' => null, 'controller' => 'videos', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><a href="#" style="padding-right:35px">Liên hệ</a></li>
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