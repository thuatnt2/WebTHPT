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
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div id="banner">
                    <div class="row">
                        <div class="col-lg-4">
                            <?php echo $this->Html->image('frontend/logo.png', array('style="height:120px"')) ?>
                        </div>
                        <div class="col-lg-8">
                            <?php echo $this->Html->image('frontend/bannerright.jpg', array('class="pull-right" style="height:120px",width="auto"')) ?>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-default" role="navigation">
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>&nbspTrang Chủ</a></li>
                            <li  class="dropdown">
                                <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Giới thiệu<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Lịch sử phát triển</a></li>
                                    <li><a href="#">Sứ mệnh tầm nhìn</a></li>
                                    <li><a href="#">Cơ cấu tổ chức</a></li>
                                    <li><a href="#">Cơ sở vật chất</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin tức<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Thông báo</a></li>
                                    <li><a href="#">Hoạt động sự kiên</a></li>
                                    <li><a href="#">Tin tức chung</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Học đường <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tài nguyên</a></li>
                                    <li><a href="#">Đoàn thanh niên</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lịch công tác<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Thời khóa biểu</a></li>
                                    <li><a href="#">Lịch công tác</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tổ chuyên môn<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tổ toán</a></li>
                                    <li><a href="#">Tổ lý</a></li>
                                    <li><a href="#">Tổ lý</a></li>
                                    <li><a href="#">Tổ Sinh</a></li>
                                    <li><a href="#">Tổ Tin</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tuyển sinh<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tuyển sinh khối 10</a></li>
                                    <li><a href="#">Tuyển sinh ĐH - CĐ</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog giáo viên</a></li>
                            <li><a href="#">Album</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#" style="padding-right:35px">Liên hệ</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
                <!--<div class="row">-->

                <!--</div>-->
                <div id="content">
                    <div id="content-top">
                        <div class="col-lg-8">
                            <div class="row">
                                <div id="carousel-example-generic" class="carousel slide">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <?php echo $this->Html->image('slider/00.jpg', array('alt="00.jpg"')) ?>
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <?php echo $this->Html->image('slider/01.jpg', array('alt="01.jpg"')) ?>
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <?php echo $this->Html->image('slider/02.jpg', array('alt="02.jpg"')) ?>
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <?php echo $this->Html->image('slider/03.jpg', array('alt="03.jpg"')) ?>
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <?php echo $this->Html->image('slider/04.jpg', array('alt="04.jpg"')) ?>
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="10" direction="up" loop="infinite" height="200">

                                            <p align="justify"><img border="0" src="img/bl4.gif">
                                                <a href="?655=5&amp;658=39&amp;657=1496&amp;654=4">
                                                    Thông báo Ngày hội sáng tạo Ngành Giáo dục thành phố Đà Nẵng 2013</a>

                                                <br><br>
                                            </p><p align="justify"><img border="0" src="img/bl4.gif">
                                                <a href="?655=5&amp;658=39&amp;657=1466&amp;654=4">
                                                    Phương án tuyển sinh lớp 10 năm học 2013-2014 Trường THPT chuyên Lê Quý Đôn Đà Nẵng  </a>

                                                <br><br>
                                            </p><p align="justify"><img border="0" src="img/bl4.gif">
                                                <a href="?655=5&amp;658=39&amp;657=1454&amp;654=4">
                                                    Thông báo nộp Bản kế hoạch cá nhân năm học 2012 - 2013</a>

                                                <br><br>
                                            </p><p align="justify"><img border="0" src="img/bl4.gif">
                                                <a href="?655=5&amp;658=39&amp;657=1426&amp;654=4">
                                                    HƯỚNG DẪN VIẾT SÁNG KIẾN KINH NGHIỆM NĂM HỌC 20112- 2013</a>

                                                <br><br>
                                            </p><p align="justify"><img border="0" src="img/bl4.gif">
                                                <a href="?655=5&amp;658=39&amp;657=1425&amp;654=4">
                                                    Thi sáng tác Logo cho Olympic Sinh học quốc tế năm 2016 tại Việt Nam</a>

                                                <br><br></p></marquee>
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
                                            <div class="item-list">
                                                <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrollamount="4">

                                                    <a href="http://hn-ams.edu.vn/content/tb-truong-cambridge-tutors-college-vuong-quoc-anh-chuc-ki-thi-tuyen-hoc-bong-cho-khoa-hoc-le">TB: Trường Cambridge Tutors College, Vương Quốc Anh tổ chức kì thi tuyển học bổng cho khóa học A-Level  năm 2014</a>        

                                                    <a href="http://hn-ams.edu.vn/content/ke-hoach-cong-tac-tuan-5-thang-102013-tuan-tu-2810-den-03112013">Kế hoạch công tác tuần 5 tháng 10/2013 (tuần từ 28/10 đến 03/11/2013)</a>        

                                                    <a href="http://hn-ams.edu.vn/content/thoi-khoa-bieu-so-4-thuc-hien-tu-2810-nam-hoc-2013-2014">Thời khóa biểu số 4 thực hiện từ 28/10 năm học 2013 -2014</a>        

                                                    <a href="http://hn-ams.edu.vn/content/trai-nghiem-mot-tuan-o-adelaide-cuoc-thi-viet-bai-luan-bang-tieng-anh-chi-danh-cho-hoc-sinh-">Trải nghiệm một tuần ở Adelaide (cuộc thi viết bài luận bằng tiếng Anh chỉ dành cho học sinh lớp 11&amp;12)</a>        

                                                    <a href="http://hn-ams.edu.vn/content/ke-hoach-cong-tac-thang-102013-tuan-tu-2110-den-27102013">Kế hoạch công tác tháng 10/2013 (tuần từ 21/10 đến 27/10/2013)</a>        

                                                    <a href="http://hn-ams.edu.vn/content/ke-hoach-cong-tac-thang-102013-tuan-tu-1410-den-20102013">Kế hoạch công tác tháng 10/2013 (tuần từ 14/10 đến 20/10/2013)</a>        

                                                    <a href="http://hn-ams.edu.vn/content/lich-nhan-don-phuc-khao-va-mau-don-phuc-khao-thi-hoc-sinh-gioi-thanh-pho-lop-12-nam-hoc-2013">Lịch nhận đơn phúc khảo và mẫu đơn phúc khảo thi học sinh giỏi Thành Phố lớp 12 năm học 2013 - 2014</a>        

                                                    <a href="http://hn-ams.edu.vn/content/ke-hoach-cong-tac-thang-102013-tuan-tu-0710-den-13102013">Kế hoạch công tác tháng 10/2013 (tuần từ 07/10 đến 13/10/2013)</a>        

                                                    <a href="http://hn-ams.edu.vn/content/ke-hoach-cong-tac-thang-102013-tuan-tu-30092013-den-06102013">Kế hoạch công tác tháng 10/2013 (Tuần từ 30/09/2013 đến 06/10/2013)</a>        

                                                    <a href="http://hn-ams.edu.vn/content/thong-tin-giao-vien-cap-nhat">Thông tin giáo viên (cập nhật)</a>        
                                                </marquee>
                                            </div>  
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
                                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
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
                                            <li class="active"><a href="#">Hoạt động sự kiện</a></li>
                                            <li><a href="#">Tin tức chung</a></li>
                                            <li><a href="#">Đoàn thanh niên</a></li>
                                            <li><a href="#">Gương mặt tiêu biểu</a></li>
                                            <li><a href="#">Tâm sự thầy trò</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div style="padding:2px 4px 2px 4px">
                                            <h4 class="">
                                                <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" title="Chung kết giải thưởng Holcim Prize năm 2013">Chung kết giải thưởng Holcim Prize năm 2013</a>
                                            </h4>
                                            <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" class=" tleft fleft" title="Chung kết giải thưởng Holcim Prize năm 2013">
                                                <img class="nsp_image tleft fleft" src="http://www.dut.edu.vn/modules/mod_news_pro_gk4/cache/stories.holcim2013_1nsp_137.jpg" alt="Chung kết giải thưởng Holcim Prize năm 2013" title="Chung kết giải thưởng Holcim Prize năm 2013" style="width:150px;height:100px;margin:3px 5px 3px 5px;float: left">
                                            </a>
                                            <p class="" >Trong 2 ngày 25 và 26 tháng 10 năm 2013, tại Trường Đại học Khoa học Xã hội và nhân văn Tp.HCM đã diễn ra Vòng chung kết Giải thưởng Holcim Prize năm 2013. Vòng Chung kết gồm có 07 đề tài xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH và NV Tp.HCM, Trường ĐH Kiến trúc Tp.HCM, trường ĐH SPKT Tp.HCM,...</p>
                                            <a style="float: right"class="" href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198">Xem thêm...</a>
                                        </div>
                                        <hr>
                                        <div style="padding:2px 4px 2px 4px">
                                            <h4 class="">
                                                <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" title="Chung kết giải thưởng Holcim Prize năm 2013">Chung kết giải thưởng Holcim Prize năm 2013</a>
                                            </h4>
                                            <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" class=" tleft fleft" title="Chung kết giải thưởng Holcim Prize năm 2013">
                                                <img class="nsp_image tleft fleft" src="http://www.dut.edu.vn/modules/mod_news_pro_gk4/cache/stories.holcim2013_1nsp_137.jpg" alt="Chung kết giải thưởng Holcim Prize năm 2013" title="Chung kết giải thưởng Holcim Prize năm 2013" style="width:150px;height:100px;margin:3px 5px 3px 5px;float: left">
                                            </a>
                                            <p class="" >Trong 2 ngày 25 và 26 tháng 10 năm 2013, tại Trường Đại học Khoa học Xã hội và nhân văn Tp.HCM đã diễn ra Vòng chung kết Giải thưởng Holcim Prize năm 2013. Vòng Chung kết gồm có 07 đề tài xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH và NV Tp.HCM, Trường ĐH Kiến trúc Tp.HCM, trường ĐH SPKT Tp.HCM,...</p>
                                            <a style="float: right"class="" href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198">Xem thêm...</a>
                                        </div>
                                        <hr>
                                        <div style="padding:2px 4px 2px 4px">
                                            <h4 class="">
                                                <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" title="Chung kết giải thưởng Holcim Prize năm 2013">Chung kết giải thưởng Holcim Prize năm 2013</a>
                                            </h4>
                                            <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" class=" tleft fleft" title="Chung kết giải thưởng Holcim Prize năm 2013">
                                                <img class="nsp_image tleft fleft" src="http://www.dut.edu.vn/modules/mod_news_pro_gk4/cache/stories.holcim2013_1nsp_137.jpg" alt="Chung kết giải thưởng Holcim Prize năm 2013" title="Chung kết giải thưởng Holcim Prize năm 2013" style="width:150px;height:100px;margin:3px 5px 3px 5px;float: left">
                                            </a>
                                            <p class="" >Trong 2 ngày 25 và 26 tháng 10 năm 2013, tại Trường Đại học Khoa học Xã hội và nhân văn Tp.HCM đã diễn ra Vòng chung kết Giải thưởng Holcim Prize năm 2013. Vòng Chung kết gồm có 07 đề tài xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH và NV Tp.HCM, Trường ĐH Kiến trúc Tp.HCM, trường ĐH SPKT Tp.HCM,...</p>
                                            <a style="float: right"class="" href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198">Xem thêm...</a>
                                        </div>
                                        <hr>
                                        <div style="padding:2px 4px 2px 4px">
                                            <h4 class="">
                                                <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" title="Chung kết giải thưởng Holcim Prize năm 2013">Chung kết giải thưởng Holcim Prize năm 2013</a>
                                            </h4>
                                            <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" class=" tleft fleft" title="Chung kết giải thưởng Holcim Prize năm 2013">
                                                <img class="nsp_image tleft fleft" src="http://www.dut.edu.vn/modules/mod_news_pro_gk4/cache/stories.holcim2013_1nsp_137.jpg" alt="Chung kết giải thưởng Holcim Prize năm 2013" title="Chung kết giải thưởng Holcim Prize năm 2013" style="width:150px;height:100px;margin:3px 5px 3px 5px;float: left">
                                            </a>
                                            <p class="" >Trong 2 ngày 25 và 26 tháng 10 năm 2013, tại Trường Đại học Khoa học Xã hội và nhân văn Tp.HCM đã diễn ra Vòng chung kết Giải thưởng Holcim Prize năm 2013. Vòng Chung kết gồm có 07 đề tài xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH và NV Tp.HCM, Trường ĐH Kiến trúc Tp.HCM, trường ĐH SPKT Tp.HCM,...</p>
                                            <a style="float: right"class="" href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198">Xem thêm...</a>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row column-right">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a href="#">Tin mới nhất</a></li>
                                            <li><a href="#">Tin xem nhiều</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="jcarouse" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 336px;">
                                            <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; height: 1008px; top: -560px;"><li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh08.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/php-mysql/tao-form-login-hoan-chinh-bang-ky-thuat-ajax-va-validate-jquery-12-36.html">Form login hoàn chỉnh với Ajax</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li><li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh09.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/php-mysql/huong-dan-cai-dat-va-su-dung-xampp-server-12-10.html">Hướng dẫn cài đặt và sử dụng Xampp - 2Cwebvn</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li><li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh10.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/php-mysql/co-ban-ve-form-trong-php-12-26.html">Cơ bản về Form cho người bắt đầu</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li><li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh11.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/illustrator-indesign/16-bai-huong-dan-tao-hieu-ung-chu-bang-illustrator-3-66.html">Cùng học Illus với 2Cwebvn nào.. :)</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li><li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh12.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/jquery-javascript/lam-the-nao-de-tao-menu-accordion-an-tuong-voi-jquery-va-css3-11-67.html">Menu phong cách 2C</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh01.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/html-css/16-kieu-shadows-ma-ban-khong-the-bo-qua-10-23.html">16 kiểu shadow bạn cần phải biết.</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>

                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh02.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/illustrator-indesign/doc-dao-voi-bo-suu-tap-thiet-ke-cv-danh-cho-dan-designer-3-58.html">CV độc cho dân thiết kế</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh03.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/graphic-design/sang-tao-cung-bo-suu-tap-font-handmade-ngo-nghinh-cua-hmf-6-46.html">Bộ font Handmade ngộ nghĩnh</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh04.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/html-css/tao-tooltip-don-gian-khong-can-javascript-10-24.html">Tạo Tooltip không cần Javascript</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh05.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/jquery-javascript/dung-mootools-tao-thu-vien-trung-bay-anh-voi-hieu-ung-dep-mat-11-37.html">Zoom ảnh cùng hiệu ứng đẹp mắt với Mootool </a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh06.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/graphic-design/bo-suu-tap-nhung-tac-pham-tuyet-dep-cua-charis-tsevis-6-11.html">Những bức hình ấn tượng mà bạn không thể quên</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh07.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/search-engine-optimization-seo/lam-the-nao-index-bai-viet-website-len-cac-cong-cu-tim-kiem-29-53.html">Index bài viết lên các bộ máy tìm kiếm</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh08.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/php-mysql/tao-form-login-hoan-chinh-bang-ky-thuat-ajax-va-validate-jquery-12-36.html">Form login hoàn chỉnh với Ajax</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh09.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/php-mysql/huong-dan-cai-dat-va-su-dung-xampp-server-12-10.html">Hướng dẫn cài đặt và sử dụng Xampp - 2Cwebvn</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh10.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/php-mysql/co-ban-ve-form-trong-php-12-26.html">Cơ bản về Form cho người bắt đầu</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh11.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/illustrator-indesign/16-bai-huong-dan-tao-hieu-ung-chu-bang-illustrator-3-66.html">Cùng học Illus với 2Cwebvn nào.. :)</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh12.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/jquery-javascript/lam-the-nao-de-tao-menu-accordion-an-tuong-voi-jquery-va-css3-11-67.html">Menu phong cách 2C</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li>
                                                <li style="overflow: hidden; float: none; width: 320px; height: 50px;">
                                                    <div class="thumb">
                                                        <img src="./[Demo] jQuery và jCarousel Lite - Tạo thanh cuộn ấn tượng cho website tin tức - 2Cwebvn_files/hinh01.jpg">
                                                    </div>
                                                    <div class="info">
                                                        <a href="http://2cweb.vn/news/html-css/16-kieu-shadows-ma-ban-khong-the-bo-qua-10-23.html">16 kiểu shadow bạn cần phải biết.</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </li></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Thư viện video</div>
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Thư viện ảnh</div>
                                    <div class="panel-body">
                                        Panel content
                                    </div>
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
            'vendor/jquery-2.0.2.min',
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