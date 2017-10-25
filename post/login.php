<? 
	if((isset($_POST['l']) && issetisset($_POST['p'])){
		$login = $_POST['l'];
		$pass = $_POST['p'];

		if ($login == 'root' && $pass=="root") {
			echo "welcome";		
		}
		else{
			echo "no";	
		}
	}

		
?>