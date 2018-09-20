<?php

$lng = array();
$js_phrases = array();

//-------------------------- language info ----------------------------//
$lng['langname'] = 'German';
$lng['langcode'] = 'de';
$lng['dir'] = 'ltr';

//---------------------------------------------------------------------//

$lng['registertit'] = 'Register';
$lng['logintit'] = 'Login';

$lng['welcometit'] = 'Welcome';
$lng['advtit'] = 'System adv';

$lng['noplugins'] = 'Ooops, No Plugins enabled!';

$lng['home'] = 'Home';

//-------------------------- User phrases ----------------------------//

$lng['maininfo'] = 'Main information';
$lng['profile'] = 'Profile';
$lng['settings'] = 'Settings';

$lng['name'] = 'Name';
$lng['email'] = 'Email';
$lng['username'] = 'Username';
$lng['displayname'] = 'Display name';
$lng['gender'] = 'Gender';
$lng['male'] = 'Male';
$lng['female'] = 'Female';

$lng['password'] = 'Password';
$lng['cpassword'] = 'Confirm Password';
$lng['country'] = 'Country';
$lng['citystate'] = 'City/State';
$lng['refresh'] = 'Refresh';
$lng['tos'] = 'Terms of services " also you can see this ';
$lng['link'] = 'link';
$lng['tosagree'] = 'Agree terms of services';

$lng['biography'] = 'Biography';
$lng['profilepic'] = 'Profile Picture';
$lng['profileedit'] = 'Edit profile';
$lng['registerdate'] = 'Registration date';
//-------------------------- Social ----------------------------//
$lng['facebook'] = 'Facebook';
$lng['twitter'] = 'Twitter';
$lng['google+'] = 'Google+';
$lng['linkedin'] = 'Linkedin';
$lng['website'] = 'Website';
$lng['skype'] = 'Skype';
$lng['yahoo'] = 'Yahoo';


//-------------------------- Menus ----------------------------//

$lng['hello'] = 'Hello,';
$lng['editprofilesettings'] = 'Edit profile & settings';
$lng['editpasswordemail'] = 'Edit Password & Email';
$lng['usercp'] = 'User control panel';
$lng['logout'] = 'Logout';

$lng['notifications'] = 'Notifications';
$lng['messages'] = 'Messages';

//-------------------------- Buttons ----------------------------//
$lng['submitregister'] = 'Register';
$lng['submitedit'] = 'Edit';
$lng['reset'] = 'Reset';

//-------------------------- Js response phrases ----------------------------//
//login
$js_phrases['successlogin'] = 'You have sucessfuly loged in!';
$js_phrases['checkbruteforce'] = 'Too many invalid login!';
$js_phrases['errorlogin'] = 'The username and/or password is wrong, kindly try again';
$js_phrases['logoutsuccess'] = 'You have successfuly loged Out! <br><br> Redirecting .... !';

$js_phrases['error'] = 'Ooops; Something gose wrong, Kindly try again!';

//Register and profile
$js_phrases['successregister'] = 'You have successfuly registered !';
$js_phrases['notvalidemail'] = 'The email address you have entered is not valid';
$js_phrases['passlenth'] = 'The password you have entered is too short';
$js_phrases['passismissing'] = 'The password you have entered is not valid';
$js_phrases['passdonotmatch'] = 'The password you have entered don\'t match the confirm password';
$js_phrases['notvalidusername'] = 'The username you have entered is not valid';
$js_phrases['emailalreadyexist'] = 'The email address you have entered is already exist<br><br>If you forgot your password, <a href=\'forgetpass.php\'>Clik here</a>';
$js_phrases['useralreadyexist'] = 'The user you have entered is already exist<br><br>If you forgot your password, <a href=\'forgetpass.php\'>Clik here</a>';
$js_phrases['maxsize'] = 'The image you trying to upload is too large';
$js_phrases['invalidfile'] = 'The image you trying to upload is not valid';
$js_phrases['databaseerror'] = 'Database error';
$js_phrases['missingfields'] = '<i class=\'glyphicon glyphicon-info-sign\'></i> Ooops; there is missing fields, check it back';


$js_phrases['updateprofile'] = 'Updating your profile ...';
$js_phrases['updateprofilesuccess'] = '<br><br>You have successfuly updated your profile!';

//header

$lng['menuheader'] = 'Main menu';

?>