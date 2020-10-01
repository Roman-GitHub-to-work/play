<?php 
	// echo var_dump($_POST);
	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	$login = $_COOKIE['user'];
	$result = $mysql -> query("SELECT name_user,who_war,online FROM acounts WHERE name_user = '$login' AND war ='yes';");
	$mysql->close();
	$result = $result->fetch_assoc();
	// $result =(
	// 	'i' => $result["name_user"],
	// 	'who' =>$result["who_war"]
	// )array
	/*
	$result = array(
		"name_user" = $result["name_user"],
		"who_war" = $result["who_war"],
		"online" = $result["online"]
	) 
	*/
	print_r(json_encode($result));
	

	/*
	echo ("я ".$result["name_user"]."<br>");
	echo ("выебывается ".$result["who_war"]);
	*/	
 ?>