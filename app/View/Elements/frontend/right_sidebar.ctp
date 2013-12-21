<div class="col-lg-3"  id="right-sidebar">
    <div class="panel panel-primary">
        <div class="panel-heading">Thư viện video</div>
        <?php echo $this->element('frontend/video') ?>
    </div>
    <div class="panel panel-primary albums-preview">
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
    <div class="panel panel-primary statistics">
        <div class="panel-heading">Thống kê</div>
        <div class="panel-body">
            <ul>
                <li>Đang online: 
                    <a href='#' id='lnolt_'>
                        <script language='JavaScript' src='http://blogutils.net/olct/online.php?site=webthpt-thuatnguyen.rhcloud.com&interval=600'></script>
                    </a>
                </li>
                <li>Lượt truy cập: 
                    <img id="hit-counter"src="http://www.reliablecounter.com/count.php?page=webthpt-thuatnguyen.rhcloud.com&digit=style/plain/10/&reloads=1"></a>
                </li>
            </ul>

        </div>
    </div>
</div>