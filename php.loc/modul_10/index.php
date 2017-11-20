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
 	$countOnPage = 15;
 	$numPages = (int) ($countPublishers / $countOnPage);
 	$numPages = ($countPublishers % $countOnPage !=0) ? $numPages + 1 : $numPages;
 


	if(isset($_GET["page"])){
		$page =$_GET['page'];
	} else{
		$page = 1;
	}

	if(isset($_GET["order"])){
		$order = $_GET['order'];
	} else{
		$order = "asc";
	}

	
	$from = ($page-1)*$countOnPage;	
	$result = mysqli_query($link, "
		SELECT * FROM publishers 
		ORDER BY publisherTitle {$order} 
		LIMIT {$from}, {$countOnPage}") 
		or die(mysqli_error($link));
	$publishers = mysqli_fetch_all($result, MYSQL_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TITLE</title>
	<style>
	table{
		border-collapse: collapse;
		margin: 0 auto;
	}
	th{
	background: #333;
	color: #fff;
}
td, th{
	border: 1px solid black;
	padding: 10px;
}
		.pagination{
			text-align: center;
			margin: 10px 0;

		}
		.pagination a{
			display: inline-block;
			padding: 10px;
			text-align: center;
			border: 1px solid #333;
			background-color: #333;
			margin: 0 5px;
			color: #fff;
			text-decoration: none;
		}
		.pagination .active{
			background: #999;
			border: 2px solid #999;
		}
	</style>
</head>
<body>
<a href="http://localhost/php.loc/modul_10/?order=asc">По алфавиту</a>
<a href="http://localhost/php.loc/modul_10/?order=desc">В обратном порядке</a>

	<div>
		<table>
		<thead>
			<tr>
				 <th>#</th>
				<th>Издательство</th>
				
			</tr>
		</thead>

		<tbody>
			<?foreach($publishers AS $publisher):?>
			<tr>
				<td><?=$publisher["publisherID"]?></td>
				<td><?=$publisher["publisherTitle"]?></td>
				
			</tr>
			<?endforeach?>
		</tbody>
		</table>
	</div>
	<div class="pagination">
		<?
			for ($i=1; $i <= $numPages; $i++) { 
				$class = ($page = $i) ? "active" : "";
				echo "<a href='http://localhost/php.loc/modul_10/?page={$i}&order={$order}' class='{$class}'>{$i}</a>";
			}
		?>

	</div>
</body>
</html>