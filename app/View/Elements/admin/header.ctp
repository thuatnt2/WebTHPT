<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="../" class="navbar-brand">Bootstrap</a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li>
					<a class="dropdown-toggle" data-toggle="dropdown" >Bài viết
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/danh-sach-bai-viet">Danh sách bài viết</a></li> 
						<li><a href="/them-bai-viet">Thêm mới bài viết</a></li> 
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">Danh mục
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/danh-muc">Danh sách danh mục</a></li> 
						<li><a href="/them-danh-muc">Thêm mới danh mục</a></li> 
					</ul>
				</li>
				<li>
					<a class="dropdown-toggle" data-toggle="dropdown" >Người dùng
						<span class="caret"></span>
					</a>
				</li>
			</ul>
<!--			<form class="navbar-form" role="search">
				<div class="input-group col-lg-4">
					<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>-->
			<ul class="nav navbar-nav navbar-right" id="prifile-user">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="../about">
						<div class="aui-avatar aui-avatar-small pull-left">
							<div class="aui-avatar-inner">
								<img src="<?php echo $this->Html->url('/img/admin/noavatar.jpg') ?>" alt="thuatnt2" height="33" width="33" style="margin: -5px 5px 0px 0px">
							</div>
						</div>
						thuatnt2
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Thông tin cá nhân</a></li> 
						<li><a href="#">Đổi mật khẩu</a></li> 
						<li><a href="#">Đăng xuất</a></li> 
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</header>