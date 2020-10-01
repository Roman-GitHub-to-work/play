<?php 
$playr2 = $_POST['tvorog'];	
setcookie('playr2', $playr2, time() + 9000, "/");
// warPage.php
$file = fopen('war.php','w+');
$text='
<?php 
if (isset($_COOKIE["playr2"])) {
	print_r($_COOKIE["playr2"]);
}else{
	echo "ничего нет!";
}
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/warStyle.css">
	<title>Document</title>
</head>
<body>
	<h1>ебать, рил работает!</h1>
	<div id="div_war">
		<div id="div_war_text">
			
		</div>
		<div id="div_war_element">
			<div class="items_row">text1</div>
			<div class="items_row">text1</div>
			<div class="items_row">text1</div>
		
			<div class="items_row">text2</div>
			<div class="items_row">text2</div>
			<div class="items_row">text2</div>
			
			<div class="items_row">text3</div>
			<div class="items_row">text3</div>
			<div class="items_row">text3</div>
		</div>	
	</div>
	<script>
	/*alert("ебать, че , работает что-ли??");*/
</script>
</body>
</html>

';
fwrite($file, $text);
fclose($file);
header('Location: war.php');








 ?>