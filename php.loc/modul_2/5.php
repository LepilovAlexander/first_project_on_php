<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modul_2</title>
</head>
<body>
<!-- Условный оператор -->
<?
	$age = 456;

	if ($age < 18){
		echo "Вы несовершеннолетний";
	}  
	elseif ($age < 60){
		echo "Вы работоспособны";
	}
	elseif ($age < 100){
		echo "Вы пенсионер, или уже пора)";
	}
	else {
	 echo "Вы уже умерли, скорее всего";
	}



?>

</body>
</html>