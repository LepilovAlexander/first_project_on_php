<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 	<?
	$day = 5;

	if ($day == 1){
   	echo "Понедельник";
	}
	elseif ($day == 2) {
		echo "Вторник";	
	}
	elseif ($day == 3) {
			echo "Среда";
	}
	elseif ($day == 4) {
			echo "Четверг";
	}
	elseif ($day == 5) {
			echo "Пятница";
	}
	elseif ($day == 6) {
			echo "Суббота";
	}
	elseif ($day == 7) {
			echo "Воскресенье";
	}
	else {
			echo "Неверно указан день недели";
	}



	?> -->
<!-- <?
$day = 5;
switch ($day ) {
	case 1: echo "Понедельник";break;
	case 2: echo "Вторник";break;
	case 3: echo "Среда";break;
	case 4: echo "Четверг";break;
	case 5: echo "Пятница";break;
	case 6: echo "Суббота";break;
	case 7: echo "Воскресенье"; break;
	default: echo "Неверно указан день недели"; break;
	
		
}





?>
 -->

 <!-- Тернарный оператор -->
<!--  <?
 $age = 26;
 $phrase = ($age > 18) ? "Hello" : "Access denided";
 echo $phrase;

 ?> -->
 <?
 $date = "1990-11-04";
 $year =  $date{0}.$date{1}.$date{2}.$date{3};
 $mounth = $date{5}.$date{6};
 $day = $date{8}.$date{9};
 $today_year = 2017;
 
 switch ($mounth) {
 		case 01: $mounth = "Января";break;
 		case 02: $mounth = "Февраля";break;
 		case 03: $mounth = "Марта";break;
 		case 04: $mounth = "Апреля";break;
 		case 05: $mounth = "Мая";break;
 		case 06: $mounth = "Июня";break;
 		case 07: $mounth = "Июля";break;
 		case 08: $mounth = "Августа";break;
 		case 09: $mounth = "Сентября";break;
 		case 10: $mounth = "Октября";break;
 		case 11: $mounth = "Ноября";break;
 		case 12: $mounth = "Декабря";break;
 		
 	
 	default:
 		echo "Данные неверны";break;
 		
 }

 echo "Мне: ".$today_year-$year."Лет"."</br>"."Я родился: ".$day." ".$mounth;
 ?>





</body>
</html>