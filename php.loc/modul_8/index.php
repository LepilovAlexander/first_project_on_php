<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1!</title>
</head>

<body>
<? 
	session_start();

	// $_POST
	// $_GET
	// $_SERVER
	// $GLOBALS
	if (isset($_SESSION['i'])) {
		$_SESSION['i']++;
	}
	else{
		$_SESSION['i'] = 1;
	}
	

	
	var_dump($_SESSION);


?>






	<h1>Page 1</h1>
<!-- 	<button id="btn" onclick="i++; this.innerHTML = i; localStorage.i = i;">Ok</button> -->
	<a href="index2.php">Go page 2</a>










<!-- <script>
	var i = localStorage.i ? localStorage.i : 1;
	localStorage.i = i;
	document.getElementById("btn").innerHTML = i;
</script> -->
</body>
</html>