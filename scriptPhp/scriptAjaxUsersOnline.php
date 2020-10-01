<?php 
	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	$login = $_COOKIE['user'];
	$result = $mysql -> query("SELECT name_user FROM acounts WHERE online = 'true';");
	$mysql->close();
	// $result = $result->fetch_assoc();
	// print_r($result);
	// echo(json_encode($result));
	foreach ($result as $users) {
		$massiv;
		foreach ($users as $userName) {
			if ($userName == $_COOKIE['user']) {
				continue;
			}
			// print_r($userName)
			$massiv[]= $userName;
			// print_r($massiv);
		}
	}
	// print_r($massiv);
	echo(json_encode($massiv));
	/*
	$massiv;
	foreach ($result as $users) {
		foreach ($users as $userName) {
			if ($userName == $_COOKIE['user']) {
				continue;
			}
			$massiv[$users]+=$userName;
			// $result[$users]=$userName;
		}
	}
	print_r($massiv);
	*/
	// $result = $mysql -> query("SELECT name_user FROM acounts WHERE online = 'true';");
		


	
	// scriptAjaxUsersOnline
 ?>