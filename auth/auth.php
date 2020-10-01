<?php 
	/* принимаем данные от юзера */
	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);	
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
	$password = md5($password."LastTest");
	/* проверяем данные юзера на длину и ложь */
	if(mb_strlen($login) < 4 || mb_strlen($login) > 20){
		?>
		<p>авторизация не пройдена,для новой попытки нажми <a href="../scriptPhp/exit.php">здесь</a></p>
		<?php
		exit();
	}else 
	if($login == "admin" or $login == "roma"){
		echo "<h1 style='color:red'>пошел нахуй пес</h1>";
		?>
		<p>для новой попытки нажми <a href="../scriptPhp/exit.php">здесь</a></p>
		<?php
		exit();
	}
	/* сверяем даннные юзера с данными из базы данных */
	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	$result = $mysql -> query("SELECT name_user,password_user FROM acounts WHERE name_user = '$login' AND password_user =	'$password';");
	$user = $result->fetch_assoc();
	if(count($user)==0){
		echo "<h1>пользователь не найден</h1>";
		?>
		<p>авторизация не пройдена, для новой попытки нажми <a href="../scriptPhp/exit.php">здесь</a></p>
		<?php
		exit();
	}
	// print_r($user);
	// echo "<h1>все заебись, фейс контроль пройден</h1>";
	setcookie('user', $user['name_user'], time() + 9000, "/");
	$mysql -> query("UPDATE acounts SET online='true' WHERE name_user='$login';");
	$mysql->close();
	
	exit("<meta http-equiv='refresh' content='0; url= /index.php'>");
?>
	

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="js/script.js" defer></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/yniSexStyle.css">
	<title>процес авторизации</title>
</head>
<body>
	<div class="body body_width100" >	
		<?php
			// echo "<h1>все заебись, фейс контроль пройден</h1>";
		?>	
		<h1>пустая страница авторизации</h1>
		<h3>авторизация еще не продумана</h3>

	</div>	
</body> -->