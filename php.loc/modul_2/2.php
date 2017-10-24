<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?
	$name = "Alexander";
	$age = "426";
	$phrase = "Привет меня зовут {$name}. Мне {$age} лет";
	?>

	<h3>Меня зовут: <?=$name;?></h3>
	<h3>Мой возраст: <?=$age;?> лет</h3>

	<p><?=$phrase?></p>

	

</body>
</html>