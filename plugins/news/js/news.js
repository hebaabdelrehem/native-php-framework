///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////** Document ready start

$(document).ready(function() {

	function successFunction(message, action, redirect) {

		$("#submit").remove();
		$("#output").empty();
		window.parent.$("body").animate({
			scrollTop : 0
		}, 'slow');
		$('#output').append("<img src='../../img/loader.gif'><br><br>" + action);
		$('#output').fadeIn(1000);
		$('#output').delay(3000);
		setTimeout(function() {
			$('#output').append(message);
		}, 3000);
		if (redirect !== null) {
			setTimeout(function() {window.location.href = redirect;}, 6000)
		} 
		else {
			$('#output').fadeOut(1500);
			setTimeout(function() {
				location.reload();
			}, 5000);
		}

	}

	function errorFunction(resp) {
		$("#output2").empty();
		window.parent.$("body").animate({
			scrollTop : 0
		}, 'slow');
		$('#output2').append(resp);
		$('#output2').fadeIn(1000);
		$('#output2').delay(4000);
		$('#output2').fadeOut(1000);
	}

	/**************************************** Add new section ****************************************/

	$('#addSection').validate({
		rules : {
			pagetitle : {
				required : true,
				minlength : 5
			},
			pagecontent : {
				required : true
			},
		},
		submitHandler : function(form) {
			var formData = new FormData($(form)[0]);
			$.ajax({
				url : 'news.admin.php?act=doAddSection',
				type : 'POST',
				data : formData,
				async : false,
				success : function(resp) {
					if (resp == 'success') {
						successFunction('<br><br>You have successfuly added new section!', 'Adding section ...','news.admin.php?act=sections');
					} else {
						errorFunction(resp);
					}
				},
				cache : false,
				contentType : false,
				processData : false
			});
		}
	});

	/**************************************** Edit section ****************************************/

	$('#editSection').validate({
		rules : {
			pagetitle : {
				required : true,
				minlength : 5
			},
			pagecontent : {
				required : true
			},
		},
		submitHandler : function(form) {
			var formData = new FormData($(form)[0]);
			$.ajax({
				url : 'news.admin.php?act=doEditSection',
				type : 'POST',
				data : formData,
				async : false,
				success : function(resp) {
					if (resp == 'success') {
						successFunction('<br><br>You have successfuly edited the section!', 'Editing section ...',' ');
					} else {
						errorFunction(resp);
					}
				},
				cache : false,
				contentType : false,
				processData : false
			});
		}
	});

	/**************************************** Delete sections ****************************************/

	$(function() {
		$('a#delSection').click(function(event) {
			event.preventDefault();
			if (confirm('Are you sure to delete?')) {
				$.ajax({
					Type : "POST",
					url : 'news.admin.php?act=delSection',
					data : 'secId=' + $(this).data('id'),
					success : function(resp) {
						if (resp == 'success') {
							successFunction('<br><br>You have successfuly Deleted the section!', 'Deleteing section ...',' ');
						} else {
							errorFunction(resp);
						}
					}
				});
			}
		});
	});

	/**************************************** Add content ****************************************/

	$('#addContent').validate({
		rules : {
			newsTitle : {
				required : true,
				minlength : 5
			},
			newsContent : {
				required : true
			},
		},
		submitHandler : function(form) {
			var formData = new FormData($(form)[0]);
			$.ajax({
				url : 'news.admin.php?act=doAddContent',
				type : 'POST',
				data : formData,
				async : false,
				success : function(resp) {
					if (resp == 'success') {
						successFunction('<br><br>You have successfuly added new content!', 'Adding content ...','news.admin.php?act=sections');
					} else {
						errorFunction(resp);
					}
				},
				cache : false,
				contentType : false,
				processData : false
			});
		}
	});

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////** Document ready end
});
