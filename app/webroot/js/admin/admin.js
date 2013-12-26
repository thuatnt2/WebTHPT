function openKCFinder_singleFile(div) {
	//alert('click');return false;
	window.KCFinder = {
		callBack: function(url) {
			window.KCFinder = null;
			div.innerHTML = '<div style="margin:5px">Đang tải ảnh...</div>';
			var img = new Image();
			img.src = url;
			img.onload = function() {
				base_url_str = url.replace(base_url + 'app/webroot', '');
				div.innerHTML = '<img id="img" src="' + base_url_str + '" />';
				//$("#image_path").val(base_url_str);
				var thumbnail = document.getElementById('post-thumbnail');
				thumbnail.value = base_url_str;
				var img = document.getElementById('img');
				img.style.visibility = "visible";
			};
		}
	};
	window.open(base_url + 'app/webroot/js/ckeditor/kcfinder/browse.php?type=images&dir=images',
			'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
			'directories=0, resizable=1, scrollbars=0, width=800, height=600'
			);
}
//posts filter
$("#admin-posts-filter").on("change", function() {
	$("#admin-form-posts-filter").submit();
});