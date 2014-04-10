<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<link rel="shortcut icon" href="<?php echo $this->Html->webroot('img/favicon.ico') ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo $this->Html->webroot('img/favicon.ico') ?>" type="image/x-icon">
        <title><?php echo $title_for_layout ?></title>
		<?php
		echo $this->Html->css(array(
			'vendor/bootstrap.min',
			'style',
		));

		?>
		<?php
		echo $this->Html->script(array(
			'vendor/jquery-1.10.2.min'
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
        <div class="container" id="main-wrap">
            <div class="row" id="content-wrapper">
				<?php
				echo $this->element('frontend/banner');

				?>
                <!--<begin navbar>-->
				<?php
				echo $this->element('frontend/navbar');

				?>
                <!--<end navbar>-->
                <div id="content">
                    <div id="content-top">
                        <div class="col-lg-9">
                            <!--<begin slider>-->
							<?php
							echo $this->element('frontend/slider');

							?>
                            <!--<end slider>-->
                        </div>
                        <div class="col-lg-3">
                            <div class="row column-right">
                                <div id="search-bar"> 
                                    <form class="form-horizontal">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>

                                <div style="clear: both"></div>
                                <div class="panel panel-primary" id="portal-links">
                                    <div class="panel-heading">
                                        LIÊN KẾT PORTAL MỚI
                                    </div>
                                    <div class="panel-body" >
                                        <ul>
                                            <li>
												<?php
												echo $this->Html->link($this->Html->image('submenu/calendar.png') . 'Thời khóa biểu', array(
													'controller' => 'schedules',
													'action' => 'listSchedules',
													'id' => 4,
														//'slug'=>$this->Common->vnit_change_string(Inflector::slug($v)),
														), array('escape' => false));

												?>                                          
                                            </li>
											<li>
												<?php
												echo $this->Html->link($this->Html->image('submenu/lichcongtac.png') . 'Lịch công tác', array(
													'controller' => 'schedules',
													'action' => 'listSchedules',
													'id' => 2,
														//'slug'=>$this->Common->vnit_change_string(Inflector::slug($v)),
														), array('escape' => false));

												?>  
                                            </li>
											<li>
                                                <a href="#">
                                                    <img src="/img/submenu/tracuu.png"/>
                                                    Tra Cứu Điểm
                                                </a>
                                            </li>
											<li>
                                                <a href="#">
                                                    <img src="/img/submenu/vanphong.png"/>
                                                    Văn Phòng Trực Tuyến
                                                </a>
                                            </li>
											<li>
                                                <a href="#">
                                                    <img src="/img/submenu/hoidap.png"/>
                                                    Hỏi Đáp
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 

                            </div>
                        </div>

                        <div style="clear:both"> </div>
                        <div id="content-bottom">
                            <div class="col-lg-9">
                                <div class="row column-left">
                                    <div class="panel panel-primary" id="tab-content">
                                        <div class="panel-heading">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tabs-news-content" id="tab-news" data-toggle="tab">Tin tức chung</a></li>
                                                <li><a href="#tabs-blog" data-toggle="tab">Blog giáo viên</a></li>
                                                <li><a href="#tab-confidential-content" id="tab-confidential" data-toggle="tab">Tâm sự thầy trò</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-body" style="">
                                            <!--<begin information>-->
											<?php
											echo $this->fetch('content');

											?>
                                            <!--<end information>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php echo $this->element('frontend/right_sidebar') ?>
                        </div>
                    </div>

                </div>
                <div style="clear: both"></div>
				<?php echo $this->element('frontend/footer'); ?>
            </div>
        </div> <!-- .container -->
		<?php
		echo $this->Html->script(array(
			'vendor/bootstrap.min',
		));
		echo $this->fetch('scriptBottom');

		?>
		<script type="text/javascript">
			$('.carousel').carousel();
		</script>

    </body>
</html>