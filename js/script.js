//captcha
$(document).ready(function() {
$('#reload').click(function(){
    $('#captcha').attr('src','captcha.php?' + (new Date()).getTime());
});
});

//Rrg form
$(document).ready(function() {
$('form#register-form').validate({
    rules: {name: {required: true,minlength: 5},
    email: {required: true,email: true},
    user: {required: true,},
    password: {required: true,},
    cpassword: {required: true,},
    captcha: {required: true,},
    tos: {required: true,}
  },
    messages: {
    name: {minlength: jQuery.format("At least {0} characters required!")},
    tos: {required: "You did't agree to the terms of services"}
  },
    submitHandler: function(form) {
    	var formData = new FormData($(form)[0]);
        $.ajax({
            url: 'register.php',
	        type: 'POST',
	        data: formData,
	        async: false,
            success: function(resp) {
            	var $response=$(resp);
            	var res = $response.filter('#res').text();
            if(res=='success'){
                $( "#submit" ).remove();
                $("#output").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output').append( js_phrases.successregister );
                $('#output').fadeIn(2000);
                $('#output').delay(3000);
                $('#output').fadeOut(2000);
                setTimeout(function() {window.location.href = "index.php";}, 6000);
            
            }else if (res=='error'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.error );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='notvalidemail'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.notvalidemail );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='passlenth'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.passlenth );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='passismissing'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.passismissing );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='passdonotmatch'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.passdonotmatch );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='notvalidusername'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.notvalidusername );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='emailalreadyexist'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.emailalreadyexist );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='useralreadyexist'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.useralreadyexist);
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='maxsize'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.maxsize);
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='invalidfile'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.invalidfile);
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='databaseerror'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.databaseerror );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='missingfields'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.missingfields );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
            }else if (res=='captchawrong'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.captchawrong );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
            }
                
            },
            cache: false,
	        contentType: false,
	        processData: false
        });
        
        }
});
});

/*$(document).ready(function() {
$("form#register-form").submit(function(){
		
    var formData = new FormData($(this)[0]);
    
						
	    $.ajax({
	        url: 'register.php',
	        type: 'POST',
	        data: formData,
	        async: false,
	        success: function (data) {
	            	alert(formData);
				$( "#submit" ).remove();
                $("#output").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output').append( "You have successfuly registered!" );
                $('#output').fadeIn(2000);
                $('#output').delay(3000);
                $('#output').fadeOut(2000);
                //setTimeout(function() {window.location.href = "index.php";}, 6000);
	        },
	        cache: false,
	        contentType: false,
	        processData: false
	    });
	
	    return false;
	});
});*/
//Login form
$(document).ready(function() {
$('#loginf').validate({rules: {user: {required: true,},},
    messages: {user: {required: "Please enter your username"},password: {required: "Please enter your password"},},
    submitHandler: function(form) {
        $.ajax({url: 'login.php',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
            	var $response=$(resp);
            	var res = $response.filter('#res').text();
            if(res=='success'){
                $("#submit").remove();
                $("#output").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output').append( "<img src='img/loader.gif'><br><br>" + js_phrases.successlogin);
                $('#output').fadeIn(1000);
                $('#output').delay(3000);
                $('#output').fadeOut(1000);
                setTimeout(function() {window.location.href = "index.php";}, 3000);
            }else if(res == 'checkbrute'){
                    $("#output2").empty();
                    $('#output2').append( "<i class='glyphicon glyphicon-remove'></i>" + js_phrases.checkbruteforce );
                    $('#output2').fadeIn(500);
                    $('#output2').delay(1000);
            }else {
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.errorlogin );
                $('#output2').fadeIn(1000);
                $('#output2').delay(2000);
                $('#output2').fadeOut(1000);
}}});}});});

//Login form
$(document).ready(function() {
$('#loginpage').validate({rules: {user: {required: true,},},
    messages: {user: {required: "Please enter your username"},password: {required: "Please enter your password"},},
    submitHandler: function(form) {
        $.ajax({url: 'login.php',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
            	var $response=$(resp);
            	var res = $response.filter('#res').text();
            if(resp=='success'){
                $("#submit").remove();
                $("#output").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output').append( "<img src='img/loader.gif'><br><br>" + js_phrases.successlogin);
                $('#output').fadeIn(1000);
                $('#output').delay(3000);
                $('#output').fadeOut(1000);
                setTimeout(function() {window.location.href = "index.php";}, 3000);
            }else if(resp == 'checkbrute'){
                    $("#output2").empty();
                    $('#output2').append(  "<i class='glyphicon glyphicon-remove'></i>" + js_phrases.checkbruteforce  );
                    $('#output2').fadeIn(500);
                    $('#output2').delay(1000);
            }else {
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.errorlogin );
                $('#output2').fadeIn(1000);
                $('#output2').delay(2000);
                $('#output2').fadeOut(1000);
}}});}});});

//Logout
$(document).ready(function() {
    $(function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure to logout?')) {
            
            $.ajax({
            url: 'login.php?act=logout',
            success: function(resp) {
            	var $response=$(resp);
            	var res = $response.filter('#res').text();
            if(res=='success'){
                $("body").append($("<div>").css({
                position: "fixed"
                ,width: "100%"
                ,height: "100%"
                ,"background-color": "#000"
                ,opacity: 0.6
                ,"z-index": 999
                ,top: 0
                ,left: 0
            }).attr("id","page-cover"));
                $("#output3").empty();
                
                $('#output3').append( "<img src='img/loader.gif'><br><br>" + js_phrases.logoutsuccess);
                $('#output3').fadeIn(1000);
                $('#output3').delay(5000);
                $('#output3').fadeOut(1000);
                setTimeout(function() {
                  window.location.href = "index.php";
                }, 6500);
            
            }
                
            }
        });
            return true;
        }

        return false;
    });
});
    
});

//update user profile

$(document).ready(function() {
$('#updatepro').validate({
    rules: {
    name: {
      required: true,
      minlength: 5
    },
    email: {
      required: true,
      email: true
    },
    user: {
      required: true,
    }        
  },
    submitHandler: function(form) {
    	var formData = new FormData($(form)[0]);
        $.ajax({

            url: 'editprofile.php',
            type: 'POST',
	        data: formData,
	        async: false,
            success: function(result) {
            	var $response=$(result);
            	var res = $response.filter('#res').text();
                if(res == 'success')
                {                    
                    $( "#submit" ).remove();
                    $("#output").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output').append( "<img src='img/loader.gif'><br><br>" + js_phrases.updateprofile );
                    $('#output').fadeIn(1000);
                    $('#output').delay(3000);
                    
                    setTimeout(function() {
                        $('#output').append( js_phrases.updateprofilesuccess  );
                     }, 3000);
                    
                    $('#output').fadeOut(1500);
                    setTimeout(function() {
                      window.location.href = "editprofile.php?edit=profile";
                    }, 7000);
            
                }else if (res=='notvalidemail'){
                $("#output2").empty();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#output2').append( js_phrases.notvalidemail );
                $('#output2').fadeIn(2000);
                $('#output2').delay(3000);
                $('#output2').fadeOut(2000);
                
	            }else if (res=='passlenth'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.passlenth );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }else if (res=='passismissing'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.passismissing );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }else if (res=='passdonotmatch'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.passdonotmatch );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }else if (res=='emaildonotmatch'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.emaildonotmatch );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }else if (res=='notvalidusername'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.notvalidusername );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }else if (res=='emailalreadyexist'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.emailalreadyexist );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
		            }
		         else if (res=='maxsize'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.maxsize );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	            	}
	            else if (res=='invalidfile'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.invalidfile );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	            	}
	            else if (res=='useralreadyexist'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.useralreadyexist );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }else if (res=='databaseerror'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( js_phrases.databaseerror  );
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	            }
                else
                {
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( js_phrases.error  );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
                }
                    
                
            
                
            },
            cache: false,
	        contentType: false,
	        processData: false
        });}
});
});

//Submit contact

$(document).ready(function() {
$('#contactsubmit').validate({
    rules: {sname: {required: true,minlength: 5},semail: {required: true,email: true},mtitle: {required: true,},messagecont: {required: true,}},
    submitHandler: function(form) {
        $.ajax({url: 'ccenter.php?act=contactsubmit',data: $(form).serialize(),type: 'POST',
                success: function(result) {
                if(result == 'success'){                    
                    $( ".submitfor" ).remove(); 
                    $("#output").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output').append( "<img src='img/loader.gif'><br><br>Sending ..." );
                    $('#output').fadeIn(1000);
                    $('#output').delay(1000);
                    $('#output').fadeOut(1000);
                    setTimeout(function() {$('#formdiv').fadeOut(300, function() {$(this).empty().show();$('#res').fadeIn(500);
                            $("#res").append( "You have successfuly contact us!" );});}, 2000);}
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
                } 
}});}});});

//Submit Reply

$(document).ready(function() {
$('#addnewreply').validate({
    rules: {sname: {required: true,minlength: 4},semail: {required: true,email: true},mtitle: {required: true,},messagecont: {required: true,}},
    submitHandler: function(form) {
    				$( ".submitfor" ).remove(); 
                    $("#output").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output').append( "<img src='img/loader.gif'><br><br>Sending ..." );
                    $('#output').fadeIn(1000);
                    $('#output').delay(1000);
        $.ajax({url: 'ccenter.php?act=replysubmit',data: $(form).serialize(),type: 'POST',
                success: function(result) {
                if(result == 'success'){                    
                    
                    
                    setTimeout(function() {
                    $('#output').append( "<br><br>You have successfuly posting new reply!" );
                     }, 1500);
                    
                    setTimeout(function() {
                      location.reload();
                    }, 3500);
                }
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
                } 
}});}});});


//tinymce editor
tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    menubar: false,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ],
     setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
    
});

$(document).ready(function() {  
    $("a#addrep").click(function(e) { 
        e.preventDefault();
        $('.replybox .body').fadeTo('slow', 0.8, function(){$(this).css('display', 'block');}).fadeTo('slow', 1);
        $('html, body').animate({scrollTop: $(".replybox .body").offset().top}, 1000);
              
    });  
});

