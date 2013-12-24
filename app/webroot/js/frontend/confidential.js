$("#tab-confidential").on('click', function() {
	$("#tab-confidential-content").html('');
	$.ajax({
		dataType: "html",
		evalScripts: true,
		url: 'confidentials/index',
		cache: true,
		success: function(data, textStatus) {
			$("#tab-confidential-content").html(data);
		},
	});

});
$("body").on('click','#btn-add-confidential',function(){
	$("#confidential-content").show();
});