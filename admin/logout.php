<?php
include '../includes/minative.class.php';

$minative -> sec_session_start();

$_SESSION = array();
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
		unset($_SESSION['sec_session_user']);

exit('success');
?>