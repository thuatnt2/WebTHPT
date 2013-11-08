
<h4><?php echo $resource['Resource']['title'] ?></h4>
<p>Người đăng : <?php echo $resource['Resource']['user_create'] ?></p>
<p>Ngày đăng : <?php echo date('d/m/Y',  strtotime($resource['Resource']['user_create'])) ?></p>
<iframe width="100%" height="700" src="<?php echo $resource['Resource']['view_link'] ?>">

</iframe>

<h5>Các tài liệu liên quan</h5>
<ul>
	<?php
	foreach ($resources as $row):

		?>
		<li>
			<?php
			echo $this->Html->link($row['Resource']['title'], array(
				'controller' => 'resources',
				'action' => 'view',
				'id' => $row['Resource']['id'],
				'slug' => $row['Resource']['alias'],
			));

			?>
		</li>
		<?php
	endforeach;

	?>
</ul>
