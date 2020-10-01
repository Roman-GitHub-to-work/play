<?php
	/*коментарий 1*/
	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);	
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
	/*коментарий 8*/
	$password = md5($password."LastTest");

	if(mb_strlen($login) < 4 || mb_strlen($login) > 20){
		?><p>регистрация не пройдена,логин должен быть длиной от 4-х до 20-ти символов.<br>для новой попытки нажми <a href="../scriptPhp/exit.php">здесь</a></p><?php
		exit();
	}else 
	if($login == "admin"){
		echo "<h1 style='color:red'>пошел нахуй пес</h1>";
		?><p>не пезди что ты админ <br>для новой попытки нажми <a href="../scriptPhp/exit.php">здесь</a></p><?php
		/*коментарий 2*/
		exit();
	}
	/*коментарий 4*/
	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	/*коментарий 5*/
	// $mysql -> query("INSERT INTO acounts(name_user, password_user) VALUES "$login\",\"$password\");");          вполне рабочий вариант     
	$mysql -> query("INSERT INTO acounts(name_user, password_user,online,war,who_war) VALUES ('$login','$password','false','no','no');");
	/*коментарий 6*/
	$mysql->close();
	/*коментарий 9*/
	setcookie('reg', $login, time() + 60, "/");
	/*коментарий 7*/
	header('Location: / ');	
	// exit("<meta http-equiv='refresh' content='0; url= /index.php'>");
?>