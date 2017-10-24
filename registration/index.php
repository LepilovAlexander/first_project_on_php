<? 
	$errorPass = "";
	$email = "";
	$emailsFromBD = array('i@com.ua', 'a@gmail.com');
	$emailError = "";

	if (!empty($_POST)){
		// var_dump($_POST);
		$isReg = true;
		
		if ($_POST['pass']!=$_POST['pass2']){
			$isReg = false;
			$errorPass = "Пароли должны совпадать";
			
		}
		elseif (strlen($_POST['pass']) < 5) {
			$isReg = false;
			$errorPass = "Длина пароля должна быть не менее 5 символов";
		}
		
		if (in_array($_POST['email'], $emailsFromBD)) {
			$isReg = false;
			$emailError = "Пользователь с таким email уже зарегестрирован";
		}

		if (!$isReg) {
			$email = $_POST['email'];
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
