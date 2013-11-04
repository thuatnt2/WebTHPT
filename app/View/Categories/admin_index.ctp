<div class="row">
	<h4>Danh mục bài viết</h4>
	<div class="block">
		<?php echo $this->Html->link('Thêm danh mục',$this->Html->url('/admin/them-danh-muc'), array('class' => 'btn btn-primary'))?>
		
		<?php
		$columns = array(
			'Category.name' => 'Tên Danh mục',
			'ParentCategory.name' => 'Danh mục cha',
			'Category.is_active' => 'Trạng thái',
			'Category.created' => 'Ngày tạo',
		);
		echo $this->Table->render($categories, $columns);

		?>
	</div>

</div>