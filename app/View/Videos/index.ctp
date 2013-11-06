<?php //debug($videos)           ?>
<ul class="thumbnails">
	<?php
	foreach ($videos as $video):

		?>
		<li  class="span3">
			<div>
				<?php
				echo $this->Html->link($this->Html->image('http://img.youtube.com/vi/'.$video['Video']['youtube_id'].'/0.jpg',array('class'=>'thumbnail')), array(
					'action' => 'view',
					'id' => $video['Video']['id'],
					'slug' => $video['Video']['alias'],
				),array('escape'=>false))

				?>
				<?php
				echo $this->Html->link($video['Video']['title'], array(
					'action' => 'view',
					'id' => $video['Video']['id'],
					'slug' => $video['Video']['alias'],
						)
				);

				?>
			</div>

		</li>
		<?php
	endforeach;

	?>
</ul>