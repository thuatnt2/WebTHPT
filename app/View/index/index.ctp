<div class="tab-content">
    <div class="tab-pane active" id="tabs1-pane1">
        <!--        <div style="padding:2px 4px 2px 4px">
                    <h4 class="">
                        <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" title="Chung kết giải thưởng Holcim Prize năm 2013">Chung kết giải thưởng Holcim Prize năm 2013</a>
                    </h4>
                    <a href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198" class=" tleft fleft" title="Chung kết giải thưởng Holcim Prize năm 2013">
                        <img class="nsp_image tleft fleft" src="http://www.dut.edu.vn/modules/mod_news_pro_gk4/cache/stories.holcim2013_1nsp_137.jpg" alt="Chung kết giải thưởng Holcim Prize năm 2013" title="Chung kết giải thưởng Holcim Prize năm 2013" style="width:150px;height:100px;margin:3px 5px 3px 5px;float: left">
                    </a>
                    <p class="" >Trong 2 ngày 25 và 26 tháng 10 năm 2013, tại Trường Đại học Khoa học Xã hội và nhân văn Tp.HCM đã diễn ra Vòng chung kết Giải thưởng Holcim Prize năm 2013. Vòng Chung kết gồm có 07 đề tài xuất sắc nhất đại diện cho 7 trường Đại học của cả nước: Trường ĐH KHXH và NV Tp.HCM, Trường ĐH Kiến trúc Tp.HCM, trường ĐH SPKT Tp.HCM,...</p>
                    <a style="float: right"class="" href="/index.php?option=com_content&amp;view=article&amp;id=906:chung-kt-gii-thng-holcim-prize-nm-2013&amp;catid=81:tin-tc-trng-hbk&amp;Itemid=198">Xem thêm...</a>
                </div>
                <hr>-->
        <?php foreach ($action_events as $row): ?>
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
                <?php echo $this->Html->image($row['Post']['thumbnail'], array('style="width:150px;height:100px;margin:3px 5px 3px 5px;border: 1px solid #eee;float: left"'))?>
                <p><?php echo $row['Post']['sumary'] . '...' ?></p>
                <?php
                echo $this->Html->link('Xem thêm...', array(
                    'controller' => 'index',
                    'action' => 'view',
                    'id' => $row['Post']['id'],
                    'slug' => $this->Common->vnit_change_string(Inflector::slug($row['Post']['title']))), array('style'=>"float: right",'escape' => false));
                ?>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
    <div class="tab-pane" id="tabs1-pane2">
        <p>Hello Profile</p>
    </div>
    <div class="tab-pane" id="tabs1-pane3">
        <p>Hello Message</p>
    </div>
    <div class="tab-pane" id="tabs1-pane4">
        <p>Hello Gương mặt tiêu biểu</p>
    </div>
    <div class="tab-pane" id="tabs1-pane5">
        <p>Hello Tâm sự thầy trò</p>
    </div>
</div>