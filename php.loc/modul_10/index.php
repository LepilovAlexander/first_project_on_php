<!-- <? 
	//if(isset($_GET["page"])){
	//	echo "Страница: ".($_GET["page"]);
	//} else{
	//	echo "GET параметров не получено!";
	//}
?>
<hr>
<a href="http://localhost/php.loc/modul_10/">0</a>


<a href="http://localhost/php.loc/modul_10/index.php?page=1">1</a>
<a href="http://localhost/php.loc/modul_10/index.php?page=2">2</a>
<a href="http://localhost/php.loc/modul_10/index.php?page=3">3</a>
<a href="http://localhost/php.loc/modul_10/index.php?page=4">4</a>
<a href="http://localhost/php.loc/modul_10/index.php?page=5">5</a> -->

<!-- --------------------------------------- -->

 <? 
 	$link = mysqli_connect("localhost", 'root', '', "db_lib"); 
 	mysqli_query($link, "SET names 'UTF8'");

 	$result = mysqli_query($link, "SELECT NULL FROM publishers") or die(mysqli_error($link));
 	//$publishers = mysqli_fetch_all($result, MYSQL_ASSOC);
 	$countPublishers = mysqli_num_rows($result);
 	$countOnPage = 25;
 	$numPages = (int) ($countPublishers / $countOnPage);
 	$numPages = ($countPublishers % $countOnPage !=0) ? $numPages + 1 : $numPages;
 	echo  $numPages;


	if(isset($_GET["page"])){
		
	} else{
		
	}
?>