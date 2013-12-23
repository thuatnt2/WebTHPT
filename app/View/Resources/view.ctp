<ol class="breadcrumb">
	<li><?php echo $this->Html->link('Trang chủ', '/'); ?></li>
	<li>Tài nguyên điện tử</li>
	<li><?php echo $resource_type; ?></li>
	<li><?php echo  $resource['Resource']['title'] ?></li>
</ol>
<div class="list-page-wrapper"> 
	<div class="text-center"> 
        <p class="item-title"><?php echo $resource['Resource']['title'] ?></p>
    </div>
	<p>Người đăng : <?php echo $resource['Resource']['user_create'] ?></p>
	<p>Ngày đăng : <?php echo date('d/m/Y', strtotime($resource['Resource']['created'])) ?></p>
	<iframe width="100%" height="700" src="<?php echo $resource['Resource']['view_link'] ?>">

	</iframe>

	<h5>Các tài liệu liên quan</h5>
	<div class="list-wrapper"> 
		<ul class="list">
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
	</div>
</div>