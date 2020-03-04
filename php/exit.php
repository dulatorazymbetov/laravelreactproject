<?php
	unset($_COOKIE['user_id']);
	unset($_COOKIE['username']);
	setcookie('user_id', '', -1, '/');
	setcookie('username', '', -1, '/');
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$home_url = 'index.php';
	header("Location: http://$host$uri/$home_url");
?>