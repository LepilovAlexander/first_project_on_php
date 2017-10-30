<? 
	if(  isset($_POST['l']) && isset($_POST['p']) ){
		

		$login = $_POST['l'];
		$pass = $_POST['p'];

		if ($pass=="root") { // && $login == 'root' - убрано
			session_start();
			$_SESSION['isLogin'] = true;
			$_SESSION['login'] = $login;
			echo "0";	
			

		}
		else{
			echo "Неверный логин или пароль";	
		}
	}

?>