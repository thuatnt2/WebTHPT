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
    <?php $i = 1;?>
    <?php foreach ($otherArticle as $row):?>
    <div class="col-lg-12">
<!--        1)&nbsp;&nbsp;<a href="#">11111111111111111111111111111111111111</a>-->
          <?php
            echo $i++.')&nbsp;&nbsp;'.$this->Html->link($row['Post']['title'], array(
                'controller' => 'index',
                'action' => 'view',
                'id' => $row['Post']['id'],
                'slug' => $row['Post']['alias']), array('escape' => false));
            ?>
    </div>
    <?php endforeach;?>
</div>
