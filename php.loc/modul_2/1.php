<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modul_2</title>
</head>
<body>
	<?php
	echo "<h1>Hello, world!<h2>";
	print("Hello");
	$title = "Моя статья";
	$link = "http://localhost:81/modul_2/1.php";
	$url = "https://static.eldorado.ru/photos/71/711/270/73/new_71127073_l_842.jpeg";

	?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, autem.</p>

	<h1><?=$title;?></h1>
	<p><a href="<?=$link;?>">Мой сайт</a></p>	
	<p><img src="<?=$url;?>" alt=""></p> 

</body>
</html>