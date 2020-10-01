<?php

	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	$login = $_COOKIE['user'];
	$mysql -> query("UPDATE acounts SET online='false' WHERE name_user='$login';");
	$mysql->close();


	setcookie('user', $user['name_user'], time() - 3600, "/");
	header('Location: /');
?>