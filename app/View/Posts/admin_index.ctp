<div class="row">
	<h4>Danh sách bài viết</h4>
	<div class="block">
		<?php echo $this->Html->link('Đăng bài viết',$this->Html->url('/admin/them-bai-viet'), array('class' => 'btn btn-primary'))?>
		
		<?php
		$columns = array(
			'Post.title' => 'Tên Danh mục',
			'Category.name' => 'Danh mục',
			'Post.is_active' => 'Trạng thái',
			'Post.created' => 'Ngày tạo',
		);
		echo $this->Table->render($posts, $columns);

		?>
	</div>

</div>
