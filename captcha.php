<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include 'includes/minative.class.php';

$minative -> sec_session_start();

//---------------------------- Captcha Settings ----------------------------//

$captchaupleten = $minative -> getset('captchaupleten');
$caphavenumbers = $minative -> getset('captchanumen');
$captchabackcol = $minative -> getset('captchabackcol');
$captchafontcol = $minative -> getset('captchafontcol');

//---------------------------- Captcha code generating ----------------------------//

$chars = 'abcdefghijklmnopqrstuvwxyz';

if ($captchaupleten){
	$chars .='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
}
if ($caphavenumbers){
	$chars .='0123456789';
}

$randomString = '';

for ($i = 0; $i < 5; $i++) {
	$randomString .= $chars[rand(0, strlen($chars) - 1)];
}

$_SESSION['captcha'] = strtolower($randomString);

//---------------------------- Font directory ----------------------------//

$dir = 'styles/';

//---------------------------- Generating captcha image ----------------------------//

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return $rgb;
}

$captchabackcol = hex2rgb($captchabackcol);
$captchafontcol = hex2rgb($captchafontcol);

$image = imagecreatetruecolor(170, 60);
$black = imagecolorallocate($image, 0, 0, 0);

$color_back = imagecolorallocate($image, $captchabackcol['0'], $captchabackcol['1'], $captchabackcol['2']);
$color_font = imagecolorallocate($image, $captchafontcol['0'], $captchafontcol['1'], $captchafontcol['2']);

imagefilledrectangle($image, 0, 0, 399, 99, $color_back);
imagettftext($image, 20, 0, 10, 40, $color_font, $dir . "arial.ttf", $_SESSION['captcha']);

header("Content-type: image/png");
imagepng($image);

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
