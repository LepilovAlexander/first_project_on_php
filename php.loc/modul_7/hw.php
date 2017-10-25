<!-- Написать программу, сколько осталось до нового года времени!

"До нового года осталось:" хх дней хх часов хх минут хх секунд -->
<? 
	$date = strtotime("1 January 2018");
	$sec = $date - time();
	$days = floor(($date - time())/86400);
	$h1 = floor($date - time()/3600);
	$m1 = floor($date - time()/60);
	$hour = floor($sec/60/60 - $days*24);
	$hours = floor($sec/60/60);
	$min = floor($sec/60 - $hours*60);
	$sec1 = floor($sec - $min*60 - $hours*60*60);


	switch (substr($days, -1)) {
	 	case 1:
	 		$o = "остался";
	 		break;
	 	
	 	case 2: case 3: case 4: case 5: case 6: case 7: case 8: case 9: case 0: 
	 		$o =  "осталось";
	 		break;
	 } 

	switch (substr($days, -2)) {
	 	case 1: 
	 		$d = "день";
	 		break;
	 	case 2: case 3: case 4: $d = "дня";
	 		break;
	 	default:
	 		$d = "дней";
	 		break;
	 } 

	switch (substr($hour, -2)) {
	 	case 1:
	 		$h = "час";
	 		break;
	 	case 2: case 3: case 4:
	 		$h = "часа";
	 		break;
	 	default:
	 		$h = "часов";
	 		break;
	 }

	 switch (substr($min, -2)) {
	 	case 1:
	 		$m = "минута";
	 		break;
	 	case 2: case 3: case 4:
	 		$m = "минуты";
	 		break;
	 	default:
	 		$m = "минут";
	 		break;
	 }


	 switch (substr($sec, -2)) {
	 	case 1:
	 		$s = "секунда";
	 		break;
	 	case 2: case 3: case 4:
	 		$s = "секунды";
	 		break;
	 	default:
	 		$s = "секунд";
	 		break;
	 } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отсчет до Нового Года!</title>
</head>
<body>
	<h3>
		<? 
			if ($sec > 0) echo 'До нового года&nbsp;'.$o.':';		 
		?>	
	</h3>
	<p><b>
		<? 
			if ($days > 0) echo $days.'&nbsp;'.$d;
		?>,
		<? 
			if ($h1 > 0) echo $hour.'&nbsp;'.$h; 
		?>,
		<? 
			if ($m1 > 0) echo $min.'&nbsp;'.$m;
		?>,
		<? 
			if ($sec > 0) echo $sec1.'&nbsp;'.$s;  
		?>
	</b></p>

	<p>	
		<? 
			if ($sec == 0) echo ("С новым годом!!!"); 
		?>
	
	</p>	


</body>
</html>