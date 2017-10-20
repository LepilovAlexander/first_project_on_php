<? 
	$errorPass = "";
	
	if (!empty($_POST)){
		var_dump($_POST);
		$isReg = true;
		
		if ($_POST['pass']!=$_POST['pass2']){
			$isReg = false;
			$errorPass = "Пароли должны совпадать";
		}
	}
	
	//$_GET
// Registration
	$title = "Регистрация";
	$descr = "Регистрация ....";
	$contentView = "registrationView.php";
	$active = "registration";
    require_once "../views/mainTemplate.php";
?>
