<? 
	// echo date("Y-m-d H:i:s");
	// $now = getdate();
	// var_dump($now);
	// echo $now[0]."<hr />";
	// echo time()."<hr />";
	$bd =  mktime(0, 0, 0, 11, 4, 1990);
	$now = time();
	$diff = $now - $bd;
	echo round($diff/60/60/24);

?>