<div class="pull-right">
    <?php echo $this->Html->image('frontend/facebook.png', array('alt="Facebook"')) ?>
    <?php echo $this->Html->image('frontend/google.png', array('alt="Google"')) ?>
    <?php echo $this->Html->image('frontend/tiwin.png', array('alt="Twitter"')) ?>
</div>
<span class="spanTime">Ngày Đăng:
    <?php
    $date = new DateTime($article['Post']['modified']);
    echo ' ' . $date->format('d-m-Y');
    ?>
</span>
<h3 class="text-center"><?php echo $article['Post']['title'] ?></h3>
<p>
    <?php
    echo $article['Post']['content'];
    ?>
</p>
<p class="pull-right" style="font-weight: bold">
    Người đăng: <?php echo ' ' . $article['User']['first_name'] ?>
</p>
<br>
<div>
    <h4 class="pull-left">Các tin đã đăng:</h4>
    <div class="clearfix"></div>
    <div class="col-lg-12">1)&nbsp;&nbsp;<a href="#">11111111111111111111111111111111111111</a></div>
    <div class="col-lg-12">2)&nbsp;&nbsp; <a href="#">22222222222222222222222222222222222222</a></div>
    <div class="col-lg-12">3)&nbsp;&nbsp; <a href="#">33333333333333333333333333333333333333</a></div>
    <div class="col-lg-12"> 4)&nbsp;&nbsp; <a href="#">44444444444444444444444444444444444444</a></div>
    <div class="col-lg-12"> 5)&nbsp;&nbsp; <a href="#">555555555555555555555555555555555555555</a></div>
</div>
