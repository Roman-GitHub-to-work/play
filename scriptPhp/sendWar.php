<?php
	$iCallPlayr2 = $_POST['war'];
	$login = $_COOKIE['user'];

	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	// $result = $mysql -> query("SELECT name_user FROM acounts WHERE online = 'true';");
	$mysql -> query("UPDATE acounts SET war='yes', who_war='$login' WHERE name_user = '$playr2';");
	// $mysql -> query("UPDATE acounts SET online='true' WHERE name_user='$login';");
	$mysql -> close();
	// setcookie('user', $user['name_user'], time() + 3600, "/");

	setcookie('iCallPlayr2',$iCallPlayr2, time()+10000,/*"authorized.php","war.php","warPage.php"*/"/");
	// echo $_COOKIE['playr2'];
	header('Location: authorized.php');
?>