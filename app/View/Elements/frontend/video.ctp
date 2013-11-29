<?php
$videos = $this->requestAction('videos/recentVideo');
//debug($videos);

?>
<div class="panel-body">
    <iframe  src="http://youtube.com/embed/<?php echo $videos['Default']['Video']['youtube_id'] ?>" width="100%" height="160" frameborder="0"></iframe>
    <div class="col-lg-12">
		<?php
		echo $this->Html->link($videos['Default']['Video']['title'], array(
			'action' => 'view',
			'id' => $videos['Default']['Video']['id'],
			'slug' => $videos['Default']['Video']['alias'],
				), array('class' => 'text-center'))

		?>
    </div>
	<?php
	for ($i = 0; $i < 3; $i++) {

		?>

		<div class="col-lg-4">
			<div class="thunmail thunmail-1 pull-left">
				<?php
				echo $this->Html->link($this->Html->image('http://img.youtube.com/vi/' . $videos[$i]['Video']['youtube_id'] . '/0.jpg', array('class' => 'thumbnail','heigh'=>80,'width'=>75)), array(
					'controller' => 'videos',
					'action' => 'view',
					'id' => $videos[$i]['Video']['id'],
					'slug' => $videos[$i]['Video']['alias'],
						), array('escape' => false))

				?>
			</div>
		</div>
		<?php
	}

	?>
    <br>
    <div class="col-lg-12">
        <a href="<?php echo $this->Html->url('/videos')?>" class="pull-right">
            [Xem thêm] 
        </a>
    </div>

</div>