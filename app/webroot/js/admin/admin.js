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
				div.innerHTML = '<img id="img" src="'+ base_url_str + '" />';				
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

function return_article(id, title) {
	parent.document.getElementById('MenuController').value = 'articles';
	parent.document.getElementById('MenuAction').value = 'view';
	parent.document.getElementById('MenuExt').value = id;
	parent.document.getElementById('MenuLink').value = 0;
	parent.document.getElementById('MenuView').value = title;

	parent.$.fancybox.close();
}

function return_category(id, title) {
	parent.document.getElementById('MenuController').value = 'articles';
	parent.document.getElementById('MenuAction').value = 'blog';
	parent.document.getElementById('MenuExt').value = id;
	parent.document.getElementById('MenuLink').value = 0;
	parent.document.getElementById('MenuView').value = title;
	parent.$.fancybox.close();
}

function close_box() {
	parent.$.fancybox.close();
}

$(document).ready(function() {
	$('.addmenu').click(function() {

		$.fancybox({
			'padding': 0,
			'titleShow': false,
			'autoScale': false,
			'width': 900,
			'height': 520,
			'transitionIn': 'elastic',
			'transitionOut': 'elastic',
			'hideOnOverlayClick': false,
			'hideOnContentClick': false,
			'overlayShow': true,
			'opacity': false,
			'type': 'ajax',
			'href': base_url + 'menus/' + $('#menu-type').val()
					// 'href':'http://fancyapps.com/fancybox/',
		});
	});
	$('.nav-top-item').on('click', function(event) {
		$('.current').removeClass('current');
		$(this).addClass('current');
	})
});
$('.addmenu').click(function() {

	$.fancybox({
		'padding': 0,
		'titleShow': false,
		'autoScale': false,
		'width': 900,
		'height': 520,
		'transitionIn': 'elastic',
		'transitionOut': 'elastic',
		'hideOnOverlayClick': false,
		'hideOnContentClick': false,
		'overlayShow': true,
		'opacity': false,
		'type': 'ajax',
		'href': base_url + 'menus/' + $('#menu-type').val()
				// 'href':'http://fancyapps.com/fancybox/',
	});
});
