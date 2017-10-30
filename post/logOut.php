<? 
	session_start();
	session_destroy(); 
	header("Location: ".$_SERVER['HTTP_REFERER']); //Переадресация на исходную страницу с которой был запрошен логаут


?>