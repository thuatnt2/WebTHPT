<?php
if (empty($resources)) {
	echo 'Tài liệu đang cập nhật . . . ';
}

?>

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