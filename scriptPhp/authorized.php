<?php
if (isset($_COOKIE['user'])) {
		$tell = "<p>ну че, ".$_COOKIE['user']." , ты авторизован , поздравляю!</p>";
		$exit = "<p> <br>для выхода нажми <a href='exit.php'>здесь</a></p>";
		// $mysql = new mysqli('localhost','root','root','auth_from_lern');
		// $login = $_COOKIE['user'];
		// $result = $mysql -> query("SELECT name_user FROM acounts WHERE online = 'true';");
		// $mysql->close();
		
		// print_r($result);
		// var_dump($result);
}else{
	header('Location: / ');	
}?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/yniSexStyle.css">
	<link rel="stylesheet" type="text/css" href="../style/serching_styles.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<script src="../script/ajax.js" defer></script>
	<!-- <script src="../script/onlinePlayer.js" defer></script> -->
	<title>Document</title>
</head>
<body>
	<div class="blockSerchFrends">
		<div class="flexing">
			<div class="blockTell flexing_elem" id="flexing_elem1">
				<?=$tell?>
				<?=$exit?>
			</div>
			<div class="blockSerch flexing_elem" id="flexing_elem2">
				<h1>игроки онлайн</h1>
				<form action="sendWar.php" method="post">
					<div id="usersOnlinesJs">
						
					</div>
					<div id="displayNone"></div>
					<input type='submit' value="вызвать">
				</form>
			</div>
			<div class="blockResultSerch flexing_elem" id="flexing_elem3">
				<?php
					if(isset($_COOKIE['playr2'])){
						echo "ты бросил вызов игроку '".$_COOKIE['playr2']."' ждем ответа от него";
					}
				?>

				<div id="modalWarWindowVisible">
					<div id="vrag">
						<form action="warPage.php" method="post">
							<h1>тебе хочет дать по ебалу:</h1>
							<span id="blockResultSerch" >...</span>
							<input type="text" name="tvorog" id="tvorog" style="display: none">
							<span id="exitToJs">x</span>
							<input type='submit' name='goWarNow' id="goWarNow"value='го пиздиться'>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<!--
		<form action="GoToTheWar.php" method="post"
			<h1>тебе хочет дать по ебалу:</h1>
			<span id="blockResultSerch">...</span>
		</form>