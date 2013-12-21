<?php
if (empty($schedules)) {
	echo 'Tài liệu đang cập nhật . . . ';
}

?>

<ul>
	<?php
	foreach ($schedules as $row):

		?>
		<li>
			<?php
			echo $this->Html->link($row['Schedule']['title'], array(
				'controller' => 'schedules',
				'action' => 'view',
				'id' => $row['Schedule']['id'],
			));

			?>
		</li>
		<?php
	endforeach;

	?>
</ul>
<ul class="pagination pagination-sm">
	<?php
	echo $this->Paginator->prev('Trước', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
	echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
	echo $this->Paginator->next('Tiếp', array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));

	?>
</ul>