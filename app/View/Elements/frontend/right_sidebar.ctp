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
			<?php
			$links = $this->requestAction('links/getLinks');
			//var_dump($links);

			?>
			<?php foreach ($links as $link): ?>
				<div class="rows" style="margin-bottom: 10px">
					<select class="form-control" onchange="openpage(this.options[this.selectedIndex].value);">
						<option value="">-- <?php echo $link['type'] ?> --</option>
						<?php foreach ($link['links'] as $row): ?>
							<option value="<?php echo $row['Link']['link'] ?>"><?php echo $row['Link']['title'] ?></option>
						<?php endforeach; ?>

					</select>
				</div>
			<?php endforeach; ?>

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
                    <a href='#' id='lnolt_' class="user-online-counter">
                        <script language='JavaScript' src='http://blogutils.net/olct/online.php?site=webthpt-thuatnguyen.rhcloud.com&interval=600'></script>
                    </a>
                </li>
                <li>Lượt truy cập: 
                    <img id="hit-counter"src="http://www.reliablecounter.com/count.php?page=webthpt-thuatnguyen.rhcloud.com&digit=style/plain/10/&reloads=1">
                </li>
            </ul>

        </div>
    </div>
</div>
<script type='text/javascript'>
	function openpage(link) {
		if(link!=='')
			window.open(link, '_blank');
	}

</script>