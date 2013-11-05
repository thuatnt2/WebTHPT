<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title_for_layout ?></title>
        <?php
        echo $this->Html->css(array(
            'vendor/bootstrap.min',
            'style',
            'blog'
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
                <div id="content-bottom">
                    <div class="col-lg-9">
                        <?php echo $this->fetch('content') ?>
                    </div>
                    <div class="col-lg-3">
                        <div class="row column-right" style="padding-right: 5px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Bài mới nhất
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">Lịch ở đây</div>
                                <div class="panel-body" id="calendar">

                                </div>

                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">Thống kê</div>
                                <div class="panel-body">
                                    <ul>
                                        <li>Số lần ghé thăm: </li>
                                        <li>Tổng số bài viết: </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row"> 
                <div id="footer" style="">
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
        </div>
    </div> <!-- .container -->
    <?php
    echo $this->Html->script(array(
        'vendor/jquery-2.0.2.min',
        'vendor/bootstrap.min',
    ));
    ?>

</body>
</html>