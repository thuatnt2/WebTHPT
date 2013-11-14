<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

        <title><?php echo $title_for_layout ?></title>
        <?php
        echo $this->Html->css(array(
            'vendor/bootstrap.min',
            'style',
        ));
        ?>
        <?php
        echo $this->Html->script(array(
            'vendor/jquery-1.10.2.min',
        ))
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                                <form class="form-horizontal">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                    </div>
				</form>
                                <div style="clear: both"></div>
                                <div class="col-lg-6"  id="portal-col-left">
                                    <div class="row" >
                                        <?php echo $this->Html->image('frontend/lichcongtacthangmoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                        <?php echo $this->Html->image('frontend/hoidaptructuyenmoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                        <?php echo $this->Html->image('frontend/congbotructuyenvbccmoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6" id="portal-col-right">
                                    <div class="row">
                                        <?php echo $this->Html->image('frontend/lichcongtactuanmoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                        <?php echo $this->Html->image('frontend/hoidaptructuyenmoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                        <?php echo $this->Html->image('frontend/dieuchinhtructuyenvbccmoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="office-online">
                                    <div class="row">
                                           <?php echo $this->Html->image('frontend/oofficemoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                    </div>
                                </div>
                                 <div class="col-lg-12" id="search-examination-result">
                                    <div class="row">
                                           <?php echo $this->Html->image('frontend/tracuudiemthimoi.png', array('alt="lichcongtacthangmoi"')) ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div id="content-middle" style="display: none">
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
                                            <li class="active"><a href="#tabs2-pane1" data-toggle="tab">Tin mới nhất</a></li>
                                            <li><a href="#tabs2-pane2" data-toggle="tab">Tin xem nhiều</a></li>
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
                                    <?php echo $this->element('frontend/video') ?>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Thư viện ảnh</div>
                                    <?php echo $this->element('frontend/photo') ?>
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
                <div style="clear: both"></div>
                <div id="footer">
                    <div class="col-lg-8">
                        <div class="footer-content">
                            <p class="text-center"><span style="font-weight: bold">TRANG THÔNG TIN ĐIỆN TỬ TRƯỜNG TRUNG HỌC PHỔ THÔNGTIỂU LA</span><br>
                                Địa chỉ: 01 Vũ Văn Dũng, Huyện Thăng Bình, Tỉnh Quảng Nam<br/>  Điện thoại: 0511.3944844 - Fax: 0511.3944936
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

                                                jQuery(document).ready(function() {
                                                    jQuery('.carousel').carousel({
                                                        interval: 2000,
                                                        pause: 'hover',
                                                    });
                                                    jQuery(".mostNews").jCarouselLite({
                                                        vertical: true,
                                                        hoverPause: true,
                                                        visible: 2,
                                                        auto: 5000,
                                                        speed: 1000
                                                    });
//                                                    $(".moreNews").jCarouselLite({
//                                                        vertical: true,
//                                                        hoverPause: true,
//                                                        visible: 2,
//                                                        auto: 5000,
//                                                        speed: 1000
//                                                    });
                                                });
        </script>
    </body>
</html>