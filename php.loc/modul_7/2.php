<? 
	$login = "root";
	$password = "megaP@sswrd" ;
	$email = "ivan@petrov.ru";

	echo ucfirst($login)."<hr />";
	echo str_replace("@", "", $password)."<hr />";
	echo !strpos($email, "@") ? "have" : "does't have";

?>