<?php 
	$mysql = new mysqli('localhost','root','root','auth_from_lern');
	$login = $_COOKIE['user'];
	$result = $mysql -> query("SELECT war,who_war FROM acounts WHERE name_user = '$login';");
	$mysql->close();

	$result = $result->fetch_assoc();
	// print_r($result);
	echo "вызов есть ли: ".$result["war"]."<br>";
	echo "тот , кто хочет пиздюлей: ".$result["who_war"];
	// echo $result['who_war'];
	// if () {}
 ?>


 				<?php/*
					foreach ($result as $users) {
						echo "<div>";
			   			foreach ($users as $userName) {
							if ($userName == $_COOKIE['user']) {
								continue;
							}?>
					   		<span>имя пользователя : <?=$userName?></span>
					   		<input type="radio" name='war' value="<?=$userName?>">
							<?php
						}
						echo "</div>";
					}
				*/?>