<?php $posts = $this->requestAction('posts/recent'); ?>
<div class="tab-content">
    <div class="tab-pane active" id="tabs2-pane1">
        <div class="mostNews" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 336px;">
            <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; height: 1008px; top: -560px;">
                <?php foreach ($posts as $row): ?>
                    <li style="overflow: hidden; float: none; height: 100px;">
                        <div class="col-lg-3">
                            <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:72px;height:70px;"')) ?>
                        </div>
                        <div class="col-lg-9 pull-left">
                            <?php
                            echo $this->Html->link($row['Post']['title'], array(
                                'controller' => 'index',
                                'action' => 'view',
                                'id' => $row['Post']['id'],
                                'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "color: #000", 'escape' => false));
                            ?>
                        </div>
                        <div class="clr"></div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="tab-pane" id="tabs2-pane2">
        <div class="moreNews" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 336px;">
            <p>aaaaaaaaaaaaaaaaaaa</p>
        </div>
    </div>
</div>