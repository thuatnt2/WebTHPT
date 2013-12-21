
<h4><?php echo $schedule['Schedule']['title'] ?></h4>
<p>Người đăng : <?php echo $schedule['Schedule']['user_create'] ?></p>
<p>Ngày đăng : <?php echo date('d/m/Y',  strtotime($schedule['Schedule']['created'])) ?></p>
<iframe src="http://docs.google.com/viewer?url=<?php echo  $schedule['Schedule']['file_path'] ?>&embedded=true" width="100%" height="980" style="border: none;"></iframe>

