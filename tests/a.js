$(document).ready(function() {
	
	$("form#formup").submit(function(){
		
    var formData = new FormData($(this)[0]);
    
						$("#submit").remove();
						$("#res").empty();
						$('#res').append("<img src='img/loader.gif'><br><br>Uploading");
	    $.ajax({
	        url: 'upload.php',
	        type: 'POST',
	        data: formData,
	        async: false,
	        success: function (data) {
	            	alert(formData);
						setTimeout(function() {
							$("#res").empty();
						});
						setTimeout(function() {
							$('#res').append("Done!");
						});
	        },
	        cache: false,
	        contentType: false,
	        processData: false
	    });
	
	    return false;
	});



});
