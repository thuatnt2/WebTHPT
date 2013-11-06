<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title_for_layout ?></title>
        <?php
        echo $this->Html->css(array(
            'vendor/bootstrap.min',
            'style',
        ));
        ?>
        <?php
        echo $this->Html->script(array(
            'vendor/jquery-2.0.2.min'))
        ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div id="banner">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $this->Html->image('frontend/banner_new.jpg') ?>
                        </div>

                    </div>
                </div>
                <!--<begin navbar>-->
                <?php
                echo $this->element('frontend/navbar');
                ?>
                <!--<end navbar>-->
                <div id="content">
                    <div id="content-top">
                        <div class="col-lg-8">
                            <!--<begin slider>-->
                            <?php
                            echo $this->element('frontend/slider');
                            ?>
                            <!--<end slider>-->
                        </div>
                        <div class="col-lg-4">
                            <div class="row column-right">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#">Thông báo</a></li>
                                            <li><a href="#">Tin Học sinh</a></li>
                                            <li><a href="#">Tin Giáo viên</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <!--<begin event>-->
                                        <?php
                                        echo $this->element('frontend/event');
                                        ?>
                                        <!--<end event>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content-middle">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="col-lg-2 col-lg-offset-0"> Danh ngôn</div>
                                        <div class="col-lg-10">
                                            <!--<begin quotations>-->
                                            <?php
                                            echo $this->element('frontend/quotations');
                                            ?>
                                            <!--<end quotations>-->
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4">
                            <div class="row column-right">
                                <div class="input-group" id="form-search" >
                                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                    <div id="content-bottom">
                        <div class="col-lg-8">
                            <div class="row column-left">
                                <div class="panel panel-primary" id="tab-content">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tabs1-pane1" data-toggle="tab">Hoạt động sự kiện</a></li>
                                            <li><a href="#tabs1-pane2" data-toggle="tab">Tin tức chung</a></li>
                                            <li><a href="#tabs1-pane4" data-toggle="tab">Gương mặt tiêu biểu</a></li>
                                            <li><a href="#tabs1-pane3" data-toggle="tab">Blog giáo viên</a></li>
                                            <li><a href="#tabs1-pane5" data-toggle="tab">Tâm sự thầy trò</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body" style="height: 1363px;">
                                        <!--<begin information>-->
                                        <?php
                                        echo $this->fetch('content');
                                        ?>
                                        <!--<end information>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row column-right">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a href="#">Tin mới nhất</a></li>
                                            <li><a href="#">Tin xem nhiều</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <!--<begin information>-->
                                        <?php
                                        echo $this->element('frontend/information');
                                        ?>
                                        <!--<end information>-->
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Thư viện video</div>
                                    <?php echo $this->element('frontend/video')?>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Thư viện ảnh</div>
                                    <?php echo $this->element('frontend/photo')?>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Liên kết Website</div>
                                    <div class="panel-body">
                                        <div class="rows">
                                            <select class="form-control" onchange="openpage(this.options[this.selectedIndex].value);">
                                                <option value="">-- Website giáo dục --</option>
                                                <option value="http://www.moet.gov.vn">Bộ Giáo dục và Đào tạo</option>
                                                <option value="http://www.vnu.edu.vn">Đại học Quốc gia Hà Nội</option>
                                                <option value="http://www.vnuhcm.edu.vn">Đại học Quốc gia TPHCM</option>
                                                <option value="http://hueuni.edu.vn">Đại học Huế</option>
                                            </select>
                                        </div>
                                        <div class="rows" style="margin-top: 10px">
                                            <select class="form-control" onchange="openpage(this.options[this.selectedIndex].value);">
                                                <option value=""> -- Liên kết khác --</option>							

                                                <option value="http://danang.gov.vn">Thành phố Đà Nẵng</option>							

                                                <option value="http://chinhphu.vn">Cổng thông tin Chính phủ</option>							

                                                <option value="http://dhtp.vn/vie/">Khu công nghệ cao Đà Nẵng</option>							
                                            </select>
                                        </div>

                                        <div class="pull-right" style="margin-top: 10px">
                                            <?php echo $this->Html->image('frontend/facebook.png', array('alt="Facebook"')) ?>
                                            <?php echo $this->Html->image('frontend/google.png', array('alt="Google"')) ?>
                                            <?php echo $this->Html->image('frontend/tiwin.png', array('alt="Twitter"')) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Thống kê</div>
                                    <div class="panel-body">
                                        <ul>
                                            <li>Đang truy cập: </li>
                                            <li>Hôm qua: </li>
                                            <li>Hôm nay: </li>
                                            <li>Tông số: </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="footer">
                    <div class="col-lg-8">
                        <div class="footer-content">
                            <p class="text-center"><span style="font-weight: bold">TRANG THÔNG TIN ĐIỆN TỬ TRƯỜNG TRUNG HỌC PHỔ THÔNGTIỂU LA</span><br>
                                Địa chỉ: 01 Vũ Văn Dũng, Huyện Thăng Bình, Tỉnh Quảng Nam<br/>  Điện thoại: 0511.3944844 - Fax: 0511.3944936
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <p class="text-center">Website đươc thiết kế và xây dựng bởi Thuật Nguyễn<br/>
                                Email: thuatnt2@gmail.com - ĐT: 01642906837
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .container -->
        <?php
        echo $this->Html->script(array(
            'vendor/bootstrap.min',
            'vendor/jquery.marquee',
            'vendor/jcarousellite_1.0.1c4',
        ));
//        echo $this->fetch('scriptBottom');
        ?>
        <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('.carousel').carousel({
                                                        interval: 5000,
                                                        pause: 'hover',
                                                    });
                                                    $(".jcarouse").jCarouselLite({
                                                        vertical: true,
                                                        hoverPause: true,
                                                        visible: 3,
                                                        auto: 500,
                                                        speed: 1000
                                                    });
                                                });
        </script>
    </body>
</html>