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
			books.bookTitle,
			genres.genreTitle,
			`authors`.author
		FROM
			lending_books
		INNER JOIN readers ON lending_books.readerID = readers.readerID
		INNER JOIN books ON lending_books.bookID = books.bookID
		INNER JOIN genres ON books.genreID = genres.genreID
		INNER JOIN `authors` ON books.authorID = `authors`.authorID

 			") or die(mysqli_error($link));


 	//Полная выборка: массив массивов
 	$lending_books = mysqli_fetch_all($result, MYSQL_ASSOC);

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
	background: #22381B;
	color: #fff;
}
td, th{
	border: 1px solid black;
	padding: 10px;
}

	</style>
</head>
<body>
	<table>
		<thhead>
			<tr>
				 <th>№</th>
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Отчество</th>
				<th>Название книги</th>
				<th>Жанр</th>
				<th>Автор</th>
			</tr>
		</thhead>

		<tbody>
			<?$i=0;foreach($lending_books AS $lBook):$i++?>
			<tr>
				<td><?=$i?></td>
				<td><?=$lBook["lastName"]?></td>
				<td><?=$lBook["firstName"]?></td>
				<td><?=$lBook["middleName"]?></td>
				<td><?=$lBook["bookTitle"]?></td>
				<td><?=$lBook["genreTitle"]?></td>
				<td><?=$lBook["author"]?></td>
			</tr>
			<?endforeach?>
		</tbody>



	</table>


</body>
</html>