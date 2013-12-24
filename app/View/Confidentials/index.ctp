<button type="button" id="btn-add-confidential" class="btn btn-primary">Đăng tâm sự</button>
<div id="confidential-content" style="display: none">
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control input-sm" name="data[Confidential][email]" placeholder="Nhập email">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Tiêu đề</label>
			<div class="col-sm-10">
				<input type="text" class="form-control input-sm" name="data[Confidential][title]"  placeholder="Nhập tiêu đề">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nội dung</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="data[Confidential][content]" rows="10"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="form-actions col-lg-offset-2 col-lg-3">
				<button class="btn btn-danger">Hủy</button>
				<button class="btn btn-primary">Đồng ý</button>
			</div>
		</div>

	</form>

</div>