<? 
	//подключение к серверу базы данных:
	$link = mysqli_connect("localhost", 'root', '', "sys"); 

	//Вывод сообжения об ошибке подключения:
	if(!$link){
		echo mysqli_connect_error();
	}
	
	//подключение к другой базе данных:
	mysqli_select_db($link, "db_lib");

 	//Решение проблем с кодировкой
 	mysqli_query($link, "SET names 'utf8'");
 	
 	//Посылаем запрос на выборку. Результат object/false
 	$result = mysqli_query($link, 
 		"SELECT 
 			readers.lastName, 
 			readers.firstName, 
 			readers.middleName, 
 			readers.gender,
			DATE_FORMAT(readers.bDate, '%d.%m.%Y') AS bDate,
 			readers.email, cities.city
 			FROM readers
 			LEFT JOIN cities ON cities.cityID = readers.bornCityID
 			") or die(mysqli_error($link));


 	$resultS = mysqli_query($link, 
 		"SELECT 
 			services.service,
			services.priceUAH
			FROM services
 			") or die(mysqli_error($link));

 	//Полная выборка: массив массивов
 	$readers = mysqli_fetch_all($result, MYSQL_ASSOC);
 	$services = mysqli_fetch_all($resultS, MYSQL_ASSOC);

 	// foreach ($readers AS $reader) {
 	// 	echo $reader['fullName'] . ":". " ". $reader['bDate'] . "<hr />";
 	// }

 	// var_dump($services);




	//закрытие сервера
	mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Читатели</title>
	<style>
		
table{
	border-collapse: collapse;
}
th{
	background: #333;
	color: #fff;
}
td, th{
	border: 1px solid black;
	padding: 10px;
}
tr.m{
	background-color: lightblue;

}
tr.w{
	background-color: pink;
}

	</style>
</head>
<body>
	<table>
		<thhead>
			<tr>
				 <th>#</th>
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Отчество</th>
				<th>em@il</th>
				<th>Город рождения</th>
				<th>Дата рождения</th>
			</tr>
		</thhead>

		<tbody>
			<?$i=0;foreach($readers AS $reader):$i++?>
			<tr class="<?if($reader['gender']=='м'):?>m<?else:?>w<?endif?>">
				<td><?=$i?></td>
				<td><?=$reader["lastName"]?></td>
				<td><?=$reader["firstName"]?></td>
				<td><?=$reader["middleName"]?></td>
				<td><?=$reader["email"]?></td>
				<td><?=$reader["city"]?></td>
				<td><?=$reader["bDate"]?></td>
			</tr>
			<?endforeach?>
		</tbody>



	</table>

	<table>
		<thhead>
			<tr>
				<th>Услуга</th>
				<th>Стоимость, грн</th>
							</tr>
		</thhead>

		<tbody>
			<?foreach($services AS $service):?>
			<tr>
				<td><?=$service["service"]?></td>
				<td><?=$service["priceUAH"]?> ₴</td>
			
			</tr>
			<?endforeach?>
		</tbody>



	</table>
</body>
</html>