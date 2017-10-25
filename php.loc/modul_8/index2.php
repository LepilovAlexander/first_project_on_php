<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PAGE 2!!</title>
</head>
<!-- <script>
	document.write(localStorage.i);
</script> -->
<body>

	<? 
	session_start();
		if (isset($_SESSION['i'])) {
		$_SESSION['i']++;
	}
	else{
		$_SESSION['i'] = 1;
	}
	var_dump($_SESSION);
	?>






	<h1>Page 2</h1>
	<a href="index.php">Go page 1</a>
</body>
</html>