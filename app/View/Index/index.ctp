<div class="tab-content">
    <div class="tab-pane active" id="tabs1-pane1">
        <?php if (isset($actionEvents) && $actionEvents != null): ?>
            <?php foreach ($actionEvents as $row): ?>
                <div style="padding:2px 4px 2px 4px">
                    <h4 class="">
                        <?php
                        echo $this->Html->link($row['Post']['title'], array(
                            'controller' => 'index',
                            'action' => 'view',
                            'id' => $row['Post']['id'],
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));
                        ?>
                    </h4>
                    <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
                    <p><?php echo $row['Post']['sumary'] . '...' ?></p>
                    <?php
                    echo $this->Html->link('Xem thêm...', array(
                        'controller' => 'index',
                        'action' => 'view',
                        'id' => $row['Post']['id'],
                        'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "float: right", 'escape' => false));
                    ?>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php
            else:
            echo "<p>Không có bài đăng</p>";
        endif;
        ?>
    </div>
    <div class="tab-pane" id="tabs1-pane2">
        <?php if (isset($generalNews) && $generalNews != null): ?>
            <?php foreach ($generalNews as $row): ?>
                <div style="padding:2px 4px 2px 4px">
                    <h4 class="">
                        <?php
                        echo $this->Html->link($row['Post']['title'], array(
                            'controller' => 'index',
                            'action' => 'view',
                            'id' => $row['Post']['id'],
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));
                        ?>
                    </h4>
                    <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
                    <p><?php echo $row['Post']['sumary'] . '...' ?></p>
                    <?php
                    echo $this->Html->link('Xem thêm...', array(
                        'controller' => 'index',
                        'action' => 'view',
                        'id' => $row['Post']['id'],
                        'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "float: right", 'escape' => false));
                    ?>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php
        else:
            echo "<p>Không có bài đăng</p>";
        endif;
        ?>
    </div>
    <div class="tab-pane" id="tabs1-pane3">
        <?php if (isset($groupNews) && $groupNews != null): ?>
            <?php foreach ($groupNews as $row): ?>
                <div style="padding:2px 4px 2px 4px">
                    <h4 class="">
                        <?php
                        echo $this->Html->link($row['Post']['title'], array(
                            'controller' => 'index',
                            'action' => 'view',
                            'id' => $row['Post']['id'],
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));
                        ?>
                    </h4>
                    <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
                    <p><?php echo $row['Post']['sumary'] . '...' ?></p>
                    <?php
                    echo $this->Html->link('Xem thêm...', array(
                        'controller' => 'index',
                        'action' => 'view',
                        'id' => $row['Post']['id'],
                        'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "float: right", 'escape' => false));
                    ?>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php
        else:
            echo "<p>Không có bài đăng</p>";
        endif;
        ?>
    </div>
    <div class="tab-pane" id="tabs1-pane4">
        <?php if (isset($typicalFaces) && $typicalFaces != null): ?>
            <?php foreach ($typicalFaces as $row): ?>
                <div style="padding:2px 4px 2px 4px">
                    <h4 class="">
                        <?php
                        echo $this->Html->link($row['Post']['title'], array(
                            'controller' => 'index',
                            'action' => 'view',
                            'id' => $row['Post']['id'],
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));
                        ?>
                    </h4>
                    <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
                    <p><?php echo $row['Post']['sumary'] . '...' ?></p>
                    <?php
                    echo $this->Html->link('Xem thêm...', array(
                        'controller' => 'index',
                        'action' => 'view',
                        'id' => $row['Post']['id'],
                        'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "float: right", 'escape' => false));
                    ?>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php
        else:
            echo "<p>Không có bài đăng</p>";
        endif;
        ?>
    </div>
    <div class="tab-pane" id="tabs1-pane5">
        <?php if (isset($confidentials) && $confidentials != null): ?>
            <?php foreach ($confidentials as $row): ?>
                <div style="padding:2px 4px 2px 4px">
                    <h4 class="">
                        <?php
                        echo $this->Html->link($row['Post']['title'], array(
                            'controller' => 'index',
                            'action' => 'view',
                            'id' => $row['Post']['id'],
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('escape' => false));
                        ?>
                    </h4>
                    <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"')) ?>
                    <p><?php echo $row['Post']['sumary'] . '...' ?></p>
                    <?php
                    echo $this->Html->link('Xem thêm...', array(
                        'controller' => 'index',
                        'action' => 'view',
                        'id' => $row['Post']['id'],
                        'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style' => "float: right", 'escape' => false));
                    ?>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php
        else:
            echo "<p>Không có bài đăng</p>";
        endif;
        ?>
    </div>
</div>