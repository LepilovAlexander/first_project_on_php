<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3</title>
</head>
<body>
	<?
	$name = "Lepilov Alexander";
	echo strlen($name);
	echo "</hr>";
	echo $name{0}.$name{7}.$name; // первая и седьмая буква
	echo $name{0}.$name{7}.$name{strlen($name)-1}; // первая и седьмая буква


	?>



</body>
</html>