<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//---------------------------- Filter input function ** Single value ** ----------------------------//

function clean_input_gpc($type = '', $value = '', $option = '') {
	switch ($type) {
		case 'g' :
			$type = "INPUT_GET";
			break;
		case 'p' :
			$type = "INPUT_POST";
			break;
		case 'c' :
			$type = "INPUT_COOKIE";
			break;
		case 's' :
			$type = "INPUT_SERVER";
			break;
		case 'e' :
			$type = "INPUT_ENV";
			break;
	}

	// Optine may be ( EMAIL - URL - STRING  and so on  - http://www.w3schools.com/php/php_ref_filter.asp)

	$input = filter_input(constant($type), $value, constant('FILTER_SANITIZE_' . $option));

	return $input;

}

//---------------------------- Filter input function ** Array ** ----------------------------//

function clean_input_array($array = '', $type = '') {
	switch ($type) {
		case 'g' :
			$type = "INPUT_GET";
			break;
		case 'p' :
			$type = "INPUT_POST";
			break;
		case 'c' :
			$type = "INPUT_COOKIE";
			break;
		case 's' :
			$type = "INPUT_SERVER";
			break;
		case 'e' :
			$type = "INPUT_ENV";
			break;
	}

	$input = filter_input(constant($type), $array, FILTER_SANITIZE_STRING);

	return $input;

}

//---------------------------- Filter input Validation  ----------------------------//

function var_validate($value = '', $type = '') {
	switch ($type) {
		case 'email' :
			$type = "FILTER_VALIDATE_EMAIL";
			break;
		case 'int' :
			$type = "FILTER_VALIDATE_INT";
			break;
		case 'ip' :
			$type = "FILTER_VALIDATE_IP";
			break;
		case 'url' :
			$type = "FILTER_VALIDATE_URL";
			break;
	}

	if (!filter_var($value, constant($type)) === false) {$validate = 'TRUE';
	} else
		$validate = 'FALSE';

	return $validate;

}

//---------------------------- Generate Hash ----------------------------//

function gen_hash() {
	$hash = bin2hex(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM));
	return $hash;
}

//---------------------------- Check if value is blank ----------------------------//

function check_blank_value($var) {
	if ($var == null) {
		return TRUE;
	} else {
		return;
	}
}

//---------------------------- Check password ----------------------------//

function check_password($password) {

	$pattern = "/^.*";

	global $minative;
	if ($minative -> getset('passlett')) {
		$pattern .= "(?=.*[a-z])";
	}

	if ($minative -> getset('passuplett')) {
		$pattern .= "(?=.*[A-Z])";
	}
	if ($minative -> getset('passnum')) {
		$pattern .= "(?=.*[0-9])";
	}
	if ($minative -> getset('passsym')) {
		$pattern .= "(?=.*[\W]+)";
	}
	$pattern .= ".*$/";

	if (preg_match($pattern, $password)) {
		return TRUE;
	} else
		return;

}

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
