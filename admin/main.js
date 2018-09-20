///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////** Document ready start

  
$(document).ready(function () {
    
///////////////////////////// -------------------------------- login and logout admin -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\

/****************************************  login ****************************************/
  $(function() {
    $( ".pagespanel2 ul" ).sortable({ connectWith: ".pagespanel2 ul" });
    $( ".pagespanel2 ul" ).disableSelection();
  });   
$('#loginadmin').validate({
    rules: {user: {required: true},p: {required: true}},
    submitHandler: function(form) {
        $.ajax({url: 'login.php',data: $(form).serialize(),type: 'POST',
                success: function(resp) {
                if(resp == 'success'){                    
                    $(".errorlogin").remove();
                    $("#submit").attr("disabled", "disabled");
                    $(".successlogin").empty();
                    $('.successlogin').append( "You have successfuly loged in .. Redirecting" );
                    $('.successlogin').fadeIn(2000);$('.successlogin').delay(1000);
                    setTimeout(function() {window.location.href = "index.php";}, 3000);}
                else if(resp == 'error'){
                    $(".login-panel").effect( "shake", {times:4}, 1000 );
                    $(".errorlogin").empty();
                    $('.errorlogin').append( "Sorry, Username or/and password is invalid !" );
                    $('.errorlogin').fadeIn(2000);$('.errorlogin').delay(1000);$('.errorlogin').fadeOut(1500);
                }else if(resp == 'checkbrute'){
                    $(".login-panel").effect( "shake", {times:4}, 1000 );
                    $(".errorlogin").empty();
                    $('.errorlogin').append( "<i class='glyphicon glyphicon-remove'></i> Too many invalid login!" );
                    $('.errorlogin').fadeIn(2000);$('.errorlogin').delay(1000);
                }else if(resp == 'noperm'){
                    $(".login-panel").effect( "shake", {times:4}, 1000 );
                    $(".errorlogin").empty();
                    $('.errorlogin').append( "<i class='glyphicon glyphicon-remove'></i> You don't have permissions to this page!" );
                    $('.errorlogin').fadeIn(2000);
                    $('.errorlogin').delay(1000);
}}});}});

/****************************************  Logout ****************************************/
$(function(){
    $('a#logout').click(function(event){event.preventDefault();
        if(confirm('Are you sure to logout?')) {$.ajax({url: 'logout.php',
            success: function(resp) {
            if(resp=='success'){
            $("body").append($("<div>").css({position: "fixed",width: "100%",height: "100%","background-color": "#000",opacity: 0.6,"z-index": 654654,top: 0,left: 0
            }).attr("id","page-cover"));
                $("#output3").empty();
                $('#output3').append( "You have successfuly loged Out! <br><br> <a href='login.php'>Back to Admin panel</a>");
                $('#output3').fadeIn(1000);$('#output3').delay(5000);
}}});}});});

///////////////////////////// -------------------------------- Settings -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\

/****************************************  Update settings ****************************************/

$('#updatesettings').validate({rules: {name: {required: true,minlength: 5},email: {required: true,email: true},user: {required: true,}},
    submitHandler: function(form) {
        $.ajax({url: 'settings.php?act=edit',data: $(form).serialize(),type: 'POST',
        success: function(resp) {
            if(resp == 'success'){   
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Updating your settings ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly updated your settings!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 5000)
                    }
               else if(resp == 'missingfields'){   
                   	$("#output2").empty();
                   	window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "<i class='glyphicon glyphicon-info-sign'></i> Ooops; there is missing fields, check it back" );
                    $('#output2').fadeIn(500);$('#output2').delay(3000);$('#output2').fadeOut(2000);
                    }
               else if(resp == 'nothingtobeedited'){   
                   	$("#output2").empty();
                   	window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "<i class='glyphicon glyphicon-info-sign'></i> Sorry, you didn't choose which languages to be edited !!" );
                    $('#output2').fadeIn(500);$('#output2').delay(3000);$('#output2').fadeOut(2000);
                    }
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});

/*$('#updatesettings2').validate({rules: {name: {required: true,minlength: 5},email: {required: true,email: true},user: {required: true,}},
    submitHandler: function(form) {
    				$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Updating your settings ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
        $.ajax({url: 'settings.php?act=edit',data: $(form).serialize(),type: 'POST',success: function(resp) {
          if(resp == 'success'){   
                    
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly updated your settings!" );}, 3000);
                    $('#output').fadeOut(1500);}
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});*/
                               
///////////////////////////// -------------------------------- Users -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\
    
/**************************************** Update user data ****************************************/

$('#updateuser').validate({rules: {name: {required: true,minlength: 5},email: {required: true,email: true},user: {required: true,}},
    submitHandler: function(form) {$.ajax({url: 'users.php?act=edituser',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Updating ..." );
                    $('#output').fadeIn(1000);
                    $('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly updated user data!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 5000)
                    }
                    else if (resp=='emailalreadyexist'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( "The email address you have entered is already exist" );
	                $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
	            	}
	            	else if (resp=='useralreadyexist')
	            	{
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( "The user you have entered is already exist");
	                $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
	            	}
	                else
	                {
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
}}});}});

/**************************************** Add new user ****************************************/

$('#addnewuser').validate({rules: {name: {required: true,minlength: 5},email: {required: true,email: true},user: {required: true,}},
    submitHandler: function(form) {$.ajax({url: 'users.php?act=doadd',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){ 
                	console.log(resp);                   
                    $( "#submit" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Adding user ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly added new user!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "users.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
}}});}});

/**************************************** Change user group ****************************************/

$('#changeusergroup').validate({rules: {aa: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'users.php?act=changegroup',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $(".changegrdiv").empty();
                    //window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $(".changegrdiv").append( "<img src='img/loader.gif'>" );
                    $(".changegrdiv").fadeIn(1000);$(".changegrdiv").delay(1000);
                    setTimeout(function() {$(".changegrdiv").empty();}, 1500);
                    setTimeout(function() {$(".changegrdiv").append( "Done!" );}, 1500);
                    //setTimeout(function() {location.reload();}, 6000)
                    }
                else
                	{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
}}});}});

/**************************************** Change user avator ****************************************/

$('#changeavator').validate({rules: {aa: {required: true,minlength: 3}},
    submitHandler: function(form) {
    	var formData = new FormData($(form)[0]);
        $.ajax({url: 'users.php?act=changeavator',data: formData,type: 'POST',async: false,
            success: function(resp) {
                if(resp == 'success')
                	{
                	$( "#submit5" ).remove();         
                    $(".changeres").empty();
                    $(".changeres").append( "<img src='img/loader.gif'>" );
                    $(".changeres").fadeIn(1000);$(".changeres").delay(1000);
                    setTimeout(function() {$(".changeres").empty();}, 1500);
                    setTimeout(function() {$(".changeres").append( "Done!" );}, 1500);
                    setTimeout(function() {location.reload();}, 4000)
                    }
                 else if (resp=='maxsize'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( "The image you trying to upload is too large");
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	            }
	            else if (resp=='invalidfile'){
	                $("#output2").empty();
	                $("html, body").animate({ scrollTop: 0 }, "slow");
	                $('#output2').append( "The image you trying to upload is not valid");
	                $('#output2').fadeIn(2000);
	                $('#output2').delay(3000);
	                $('#output2').fadeOut(2000);
	                
	            }
                else
                	{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
			}},
	        cache: false,
	        contentType: false,
	        processData: false

});}});

/**************************************** Delete user ****************************************/
$(function(){
    $('a#delbutton').click(function(event){event.preventDefault();
        if(confirm('Are you sure to delete?')) {
            $.ajax({Type: "POST",url: 'users.php?act=dodel',data: 'userid=' + $(this).data('id'),
            success: function(resp) {
             if(resp == 'success'){                    
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting User ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the user!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "users.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

///////////////////////////// -------------------------------- Contact Center and forms -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\
                           
/**************************************** Change form status ****************************************/
/*
$('#editformst').validate({rules: { },
    submitHandler: function(form) {
        $.ajax({url: 'forms.php?act=changestatus',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit" ).remove();$("#output").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output').append( "<img src='img/loader.gif'><br><br>Updating ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly updated user data!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "users.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});*/
                               
/**************************************** Change form status ****************************************/

$(function(){
    $('a#formstatuschange').click(function(event){event.preventDefault();
            var id = $(this).data('id');var status = $(this).data('status');
        if (status == '0') {if(confirm('Are you sure you want to disable this form?')) {
            $.ajax({Type: "POST",url: 'forms.php?act=changeformstatus',data: {'id' : id, 'status': status},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deactivating ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly deactivated this form!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "forms.php?act=list";}, 6000)}
                else {
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                }}});}}
        else if (status == '1') {if(confirm('Are you sure you want to activate this form?')) {
            $.ajax({Type: "POST",url: 'forms.php?act=changeformstatus',data: {'id' : id, 'status': status},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Activating ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly activated this form!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "forms.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                }
}});}}});});

/**************************************** Change message status ****************************************/
$(function(){
    $('a#changemessagestatus').click(function(event){event.preventDefault();
            var id = $(this).data('id');var status = $(this).data('status');var formid = $(this).data('formid');
        if (status == '0') {$.ajax({Type: "POST",url: 'forms.php?act=changemessagestatus',data: {'id' : id, 'status': status, 'formid' : formid},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Changing status ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly changed the message status!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 4500)}
                else {
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);}
            }});}
        else if (status == '1') {$.ajax({Type: "POST",url: 'forms.php?act=changemessagestatus',data: {'id' : id, 'status': status, 'formid' : formid},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Changing status ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly changed the message status!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 4500)}
                else {
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
}}});}});});
/**************************************** Add reply ****************************************/

$('#addreply').validate({rules: {reply: {required: true,minlength: 5}  },
    submitHandler: function(form) {
        $.ajax({url: 'forms.php?act=submitreply',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit" ).remove();
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Submit reply ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly replied to this message!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 4500)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});
    
/**************************************** Delete message ****************************************/
$(function(){
    $('a#dellmessage').click(function(event){event.preventDefault();
            var id = $(this).data('id');var formid = $(this).data('formid');
        if(confirm('Are you sure to delete?')) {$.ajax({Type: "POST",url: 'forms.php?act=dellmessage',data: {'id' : id, 'formid' : formid},
            success: function(resp) {
             if(resp == 'success'){                     
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting message ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the message!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

///////////////////////////// -------------------------------- Plugins -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\
                               
/**************************************** Plugins change status ****************************************/
$(function(){
    $('a#actionplugin').click(function(event){event.preventDefault();
            var type = $(this).data('type');var filename = $(this).data('filename');
        if (type == 'deactivate') {if(confirm('Are you sure you want to deactivate this Plugin?')) {
            $.ajax({Type: "POST",url: 'pluginsmanager.php?act=edit',data: {'type' : type, 'filename': filename},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deactivating ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly deactivated this plugin!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "pluginsmanager.php?act=list";}, 6000)}
                else {
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}}
        else if (type == 'activate') {if(confirm('Are you sure you want to activate this Plugin?')) {
            $.ajax({Type: "POST",url: 'pluginsmanager.php?act=edit',data: {'type' : type, 'filename': filename},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Activating ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly activated this plugin!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "pluginsmanager.php?act=list";}, 6000)
                }else {
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
}}});}}});});

///////////////////////////// -------------------------------- Menus maker -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\
                               
/**************************************** Add new menu ****************************************/

$('#addnewmenu').validate({rules: {menutitle: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'menus.php?act=doadd',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Adding menu ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly added new menu!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "menus.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
}}});}});

/**************************************** Add new child ****************************************/

$('#addmenuchild').validate({rules: {childname: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'menus.php?act=addmenuchild',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit3" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Adding link ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly added new link!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
}}});}});

/**************************************** Edit menu ****************************************/
/*$(document).on("click", ".editmenu", function (e) {e.preventDefault();

		var id = $(this).data('id');
	    var linkname = $(this).data('name');
	    var url = $(this).data('url');
	    var parent = $(this).data('parent');
	    var type = $(this).data('type');
	    var place = $(this).data('place');
	    var order = $(this).data('order');
	    var status = $(this).data('status');
	    
	    $("#id").val(id);
	    $("#childname").val(linkname);
	    $("#url").val(url);
	    $("#parent").val(parent);
	    $("#type").val(type);
	    $("#place").val(place);
	    $("#order").val(order);
	    $("#status").val(status);
	
	    $($(this).attr('href')).modal('show');
});*/

$('#editmenu').validate({rules: {menutitle: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'menus.php?act=doeditmenu',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit3" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Editing menu ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly edited the menu!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "menus.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
}}});}});

/**************************************** Edit child ****************************************/
$(document).on("click", ".editlink", function (e) {e.preventDefault();

		var id = $(this).data('id');
	    var linkname = $(this).data('name');
	    var url = $(this).data('url');
	    var parent = $(this).data('parent');
	    var order = $(this).data('order');
	    var status = $(this).data('status');
	    
	    $("#id").val(id);
	    $("#childname").val(linkname);
	    $("#url").val(url);
	    $("#parent").val(parent);
	    $("#order").val(order);
	    $("#status").val(status);
	
	    $($(this).attr('href')).modal('show');
});

$('#editmenuchild').validate({rules: {childname: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'menus.php?act=editmenuchild',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit2" ).remove();$("#modelactionedit").empty();
                    $('#modelactionedit').append( "<img src='img/loader.gif'><br>Editing link ..." );
                    $('#modelactionedit').fadeIn(1000);$('#modelactionedit').delay(1000);
                    setTimeout(function() {$("#modelactionedit").empty();}, 1500);
                    setTimeout(function() {$('#modelactionedit').append( "Done!" );}, 1500);
                    
                    setTimeout(function() {location.reload();}, 3000)}
                else{
                    $("#modelactionedit").empty();
                    $('#modelactionedit').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#modelactionedit').fadeIn(1000);$('#modelactionedit').delay(2000);$('#modelactionedit').fadeOut(1000);
}}});}});

/**************************************** Delete menu ****************************************/

$(function(){
    $('a#delbuttonmenu').click(function(event){event.preventDefault();
        if(confirm('Are you sure to delete?')) {$.ajax({Type: "POST",url: 'menus.php?act=dodel',data: 'menuid=' + $(this).data('id'),
            success: function(resp) {
             if(resp == 'success'){                     
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting menu ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the menu!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "menus.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

/**************************************** Delete child ****************************************/

$(function(){
    $('a#delbuttonchild').click(function(event){event.preventDefault();
        if(confirm('Are you sure to delete?')) {$.ajax({Type: "POST",url: 'menus.php?act=delchild',data: 'childid=' + $(this).data('id'),
            success: function(resp) {
             if(resp == 'success'){                     
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting link ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the link!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

/**************************************** Changestatus ****************************************/
$(function(){
    $('a#menuschangest').click(function(event){event.preventDefault();
            var id = $(this).data('id');var status = $(this).data('status');var type = $(this).data('type');
        if (status == '0') {$.ajax({Type: "POST",url: 'menus.php?act=menuschangest',data: {'id' : id, 'status': status, 'type' : type},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Changing status ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly changed menu status!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 4500)}
                else {
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);}
            }});}
        else if (status == '1') {$.ajax({Type: "POST",url: 'menus.php?act=menuschangest',data: {'id' : id, 'status': status, 'type' : type},
            success: function(resp) {
             if(resp == 'success'){
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Changing status ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly changed menu status!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 4500)}
                else {
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);
                    $('#output2').delay(2000);
                    $('#output2').fadeOut(1000);
}}});}});});

///////////////////////////// -------------------------------- languages -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\

/**************************************** Add new languages ****************************************/

$('#addnewlang').validate({rules: {name: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'languages.php?act=addlang',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit3" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Adding language ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly added new language!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)
                    }
                    else if(resp == 'filenotexist'){                    
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "The language file you entered is not exist" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    }else if(resp == 'langalreadyexist'){                    
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "The language you are trying to add is already exist" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    }
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
}}});}});

/**************************************** Update lang ****************************************/

$(function(){
    $('a#updatelang').click(function(event){event.preventDefault();
      {$.ajax({Type: "POST",url: 'languages.php?act=updatelang',data: 'filename=' + $(this).data('filename'),
            success: function(resp) {
             if(resp == 'success'){                     
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Updating language ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the language!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});


/**************************************** Delete lang ****************************************/

$(function(){
    $('a#delbuttonlang').click(function(event){event.preventDefault();
        if(confirm('By deleting the language you will delete all content be, Are you sure to delete?')) 
        {$.ajax({Type: "POST",url: 'languages.php?act=dodel',data: 'langcode=' + $(this).data('langcode'),
            success: function(resp) {
             if(resp == 'success'){                     
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting language ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the language!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

/**************************************** Change language status ****************************************/

$(".changelangst").on("change", function() {
	var id = $(this).data('id');
	var form = $(this).parents('form:first');
    $.ajax({url: 'languages.php?act=changelangst',data: form.serialize(),type: 'POST',
        success: function(resp) {
                 if(resp == 'success'){                    
                    $("#"+id).empty();
                    //window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $("#"+id).append( "<img src='img/loader.gif'>" );
                    $("#"+id).fadeIn(1000);$("#"+id).delay(1000);
                    setTimeout(function() {$("#"+id).empty();}, 1500);
                    setTimeout(function() {$("#"+id).append( "Done!" );}, 1500);
                    setTimeout(function() {location.reload();}, 6000)
                    }
                else
                	{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}
        }
    });
});

///////////////////////////// -------------------------------- User groups -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\
                               
/**************************************** Change permssions ****************************************/

$(".changeperm").on("change", function() {
	var shortname = $(this).data('shortname');
	var form = $(this).parents('form:first');
    $.ajax({url: 'usergroups.php?act=changeperm',data: form.serialize(),type: 'POST',
        success: function(resp) {
                 if(resp == 'success'){                    
                    $("#"+shortname).empty();
                    //window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $("#"+shortname).append( "<img src='img/loader.gif'>" );
                    $("#"+shortname).fadeIn(1000);$("#"+shortname).delay(1000);
                    setTimeout(function() {$("#"+shortname).empty();}, 1500);
                    setTimeout(function() {$("#"+shortname).append( "Done!" );}, 1500);
                    //setTimeout(function() {location.reload();}, 6000)
                    }
                else
                	{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}
        }
    });
});

/**************************************** Edit Group ****************************************/

$('#editgroup').validate({rules: {groupname: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'usergroups.php?act=doeditgroup',data: $(form).serialize(),type: 'POST',
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit3" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Editing group ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly edited this group!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "usergroups.php?act=list";}, 6000)
                    }
                else
                	{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    
}}});}});

/**************************************** Add Group ****************************************/

$('#addgroup').validate({rules: {groupname: {required: true,minlength: 3}},
    submitHandler: function(form) {
        $.ajax({url: 'usergroups.php?act=doaddgroup',data: $(form).serialize(),type: 'POST',
        success:function(resp)
                  	{
                  	var shortname = resp;
                    $( "#submit" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Adding group ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly added new group!" );}, 3000);
                    $('#output').fadeOut(1500);
                    $("<input type='hidden' class='groupn' name='group'/>").appendTo('.formt');
                    $('.groupn').val(shortname);
                    setTimeout(function() {$("#groupdata").toggleClass('col-lg-6 col-lg-3');}, 3100);
                    setTimeout(function() {$("#permdata").toggleClass('col-lg-6 col-lg-9');}, 3200);
                    setTimeout(function() {$("#layer").fadeOut('slow', function() {$("#layer").removeClass("diablelayer");});}, 3300);
                   	},
        error: function(error)
                    {
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
                    } 
});}});

/**************************************** Delete group ****************************************/
$(function(){
    $('a#delbuttongroup').click(function(event){event.preventDefault();
        if(confirm('Are you sure to delete?')) {
            $.ajax({Type: "POST",url: 'usergroups.php?act=dodel',data: 'groupid=' + $(this).data('id'),
            success: function(resp) {
             if(resp == 'success'){                    
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting group ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the group!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "usergroups.php?act=list";}, 6000)
                    }
                    else if(resp == 'groupcontainsusers') 
                    {
                	$("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Sorry .. You cannot delete group contains users" );
                    setTimeout(function() {$('#output2').append( "<br><br>Change users groups first!" );},1500);
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(3000);
                	}
                else
                	{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

///////////////////////////// -------------------------------- Pages mangager -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\
                               
/**************************************** Add new page ****************************************/

$('#addnewpage').validate({rules: {pagetitle: {required: true,minlength: 5},pagecontent: {required: true},  },
    submitHandler: function(form) {
    	var formData = new FormData($(form)[0]);
        $.ajax({url: 'pagemanager.php?act=doadd',type: 'POST',data: formData,async: false,
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit" ).remove();$("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Adding page ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly added new page!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "pagemanager.php?act=list";}, 6000)
                    }
                else if(resp == 'nothingtobeadded'){
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Sorry, you didn't choose which languages to add!!" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
				}else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}
}
,
            cache: false,
	        contentType: false,
	        processData: false
});}});
    
/**************************************** Edit page ****************************************/

$('#editpage').validate({rules: {pagetitle: {required: true,minlength: 5},pagecontent: {required: true},  },
    submitHandler: function(form) {
    	var formData = new FormData($(form)[0]);
        $.ajax({url: 'pagemanager.php?act=editpage',type: 'POST',data: formData,async: false,
            success: function(resp) {
                if(resp == 'success'){                    
                    $( "#submit" ).remove();
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Editing page ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly edited the page!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "pagemanager.php?act=list";}, 6000)
                    }else if(resp == 'nothingtobeedited'){
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Sorry, you didn't choose which languages to be edited !!" );
                    $('#output2').fadeIn(2000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
					}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}
,
            cache: false,
	        contentType: false,
	        processData: false
});}});
                               
/**************************************** Delete Page ****************************************/

$(function(){
    $('a#delbuttonpage').click(function(event){event.preventDefault();
        if(confirm('Are you sure to delete?')) {$.ajax({Type: "POST",url: 'pagemanager.php?act=dodel',data: 'pageid=' + $(this).data('id'),
            success: function(resp) {
             if(resp == 'success'){                     
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting page ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the page!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {window.location.href = "pagemanager.php?act=list";}, 6000)}
                else{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

/**************************************** Change language status ****************************************/

$(".changepagest").on("change", function() {
	var id = $(this).data('id');
	var form = $(this).parents('form:first');
    $.ajax({url: 'pagemanager.php?act=changepagest',data: form.serialize(),type: 'POST',
        success: function(resp) {
                 if(resp == 'success'){                    
                    $("#"+id).empty();
                    //window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $("#"+id).append( "<img src='img/loader.gif'>" );
                    $("#"+id).fadeIn(1000);$("#"+id).delay(1000);
                    setTimeout(function() {$("#"+id).empty();}, 1500);
                    setTimeout(function() {$("#"+id).append( "Done!" );}, 1500);
                    setTimeout(function() {location.reload();}, 6000)
                    }
                else
                	{
                    $("#output2").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}
        }
    });
});

///////////////////////////// -------------------------------- Other -------------------------------- \\\\\\\\\\\\\\\\\\\\\\\\\\

/**************************************** Delete Log ****************************************/
$(function(){
    $('a#delbuttonlog').click(function(event){event.preventDefault();
        if(confirm('Are you sure to delete?')) {
        	var id = $(this).data('id');var logtable = $(this).data('logtable');
            $.ajax({Type: "POST",url: 'logs.php?log=dodel',
            data : {'id' : id, 'logtable': logtable},
            success: function(resp) {
             if(resp == 'success'){                    
                    $("#output").empty();
                    window.parent.$("body").animate({scrollTop:0}, 'slow');
                    $('#output').append( "<img src='img/loader.gif'><br><br>Deleting log ..." );
                    $('#output').fadeIn(1000);$('#output').delay(3000);
                    setTimeout(function() {$('#output').append( "<br><br>You have successfuly Deleted the log!" );}, 3000);
                    $('#output').fadeOut(1500);
                    setTimeout(function() {location.reload();}, 6000)}
                else{
                    $("#output2").empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#output2').append( "Ooops; Something gose wrong, Kindly try again" );
                    $('#output2').fadeIn(1000);$('#output2').delay(2000);$('#output2').fadeOut(1000);
}}});}});});

/**************************************** Equal height ****************************************/

function equalHeight(group) {tallest = 0;group.each(function() {thisHeight = $(this).height();
        if(thisHeight > tallest) {tallest = thisHeight;}});
group.height(tallest);}
$(document).ready(function(){equalHeight($(".EqHeightDiv"));});

/**************************************** Admin menu side links ****************************************/

$(document).ready(function () {$("#sidelinks").click(function () {var url = $(this).attr('href');$("#tframe").attr('src', url);});});
                               
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////** Document ready end
});

/**************************************** tinymce editor ****************************************/

for (i = 0; i < 5; i++) { 
    

tinymce.init({
    selector: "#textareatiny" + [i],
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
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
}



/**************************************** Iframe ****************************************/

function resizeIframe(obj) {obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';scroll(0, 0);};

/**************************************** Tables ****************************************/

$(function () {$('#hover, #striped, #condensed').click(function () {
				var classes = 'table';
				if ($('#hover').prop('checked')) {classes += ' table-hover';}
				if ($('#condensed').prop('checked')) {classes += ' table-condensed';}
				$('#table-style').bootstrapTable('destroy').bootstrapTable({classes: classes,striped: $('#striped').prop('checked')
});});});
				function rowStyle(row, index) {var classes = ['active', 'success', 'info', 'warning', 'danger'];
						if (index % 2 === 0 && index / 2 < classes.length) {
						            return {classes: classes[index / 2]};}
					        return {};}