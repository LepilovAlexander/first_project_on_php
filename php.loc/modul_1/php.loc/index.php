<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - modul 1</title>
<script>
	var str = "Alexander";
	var str = `Hello ${name}!`;
	сщтые PI = 3.1415;

</script>
</head>
<body>
	
	<?php
	   echo " <h1>PHP - 1 modul</h1>";
       print " <h2> Hello, world</h2>";
       print ("<h2> Hello, again</h2> ");

       echo "Hello "."world";

       // Переменные!!!!!!!!
       // Любая переменная должна начинаться сщ знака $
       // $str1 = "Hello";
        ///$str2 = "world";
        //echo "<h2>".$str1." ".$str."!</h2>";

       $name = "Alexander";
       $str = "<h2>Hello, \"{$name}\"!</h2>";
       echo $str;
       //Константа объявления через define
       //Константа с большой буквы
       define("PI", 3.1415, true);//Если true, то регистр не важен!По умолчанию = false
       define("COLOR", "#e1e1e1");

		define("TRUE", false, true);
		define("FALSE", false, true);

       echo PI;


       //Типы данных
       //1.Числа
       $num  = 10;
       $num2  = -10;
       $num3  = 10.44;
       $num4 = $num * $num3; // 104.4
       $num5 = 3e2;
       echo $num5;


       //2 Строки
       $str = "Hello world";
       echo $str;

       //3 Булевой тип
       $isAdmi = true; //false
       echo $isAdmin;

       //4. Массивы (ассоциативные массивы)

       $arr = array(12, 33, 44, 234, 3432);
       echo "<pre>";
       print_r($arr);
       var_dump($arr);

	?>
</body>
</html>