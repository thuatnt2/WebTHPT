<?php
if (empty($posts)):
    echo 'Nội dung đang cập nhật . . .';
else:
    foreach ($posts as $row):
        ?>
        <div style="padding:2px 4px 2px 4px">
            <h4 class="">
                <?php
                echo $this->Html->link($row['Post']['title'], array(
                    'controller' => 'index',
                    'action' => 'view',
                    'id' => $row['Post']['id'],
                    'slug' => $row['Post']['alias']), array('escape' => false));
                ?>
            </h4>
            <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
            <p><?php echo $row['Post']['sumary'] . '...' ?></p>
            <?php
            echo $this->Html->link('Xem thêm...', array(
                'controller' => 'index',
                'action' => 'view',
                'id' => $row['Post']['id'],
                'slug' => $row['Post']['alias']), array('style' => "float: right", 'escape' => false));
            ?>
        </div>
        <hr>
        <?php
    endforeach;
endif;
?>
