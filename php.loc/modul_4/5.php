<?
	$navMenu = array(
		0 => array(
			"title" => "Главная",
			"url" => "/"
		),
		1 => array(
			"title" => "О компании",
			"url" => "/about"
		),
		2 => array(
			"title" => "Наши услуги",
			"url" => "/services"
		),
		3 => array(
			"title" => "Наша продукция",
			"url" => "/products"
		),
		4 => array(
			"title" => "Контакты",
			"url" => "/contacts"
		)
	);
	//var_dump($navMenu);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>TITLE</title>
	<style>
		ul{
			list-style-type: none;
			}
			li{
				display: inline-block;
				background-color: maroon;
			}
			li + li{
				border-left: 1px solid #fff;
			}
			a{
				color: #fff;
				text-decoration: none;
				text-transform: uppercase;
				display: block;
				width: 89%;
				height: 100%;
				padding: 10px;
				text-align: center;
			}
			a:hover{
				color: maroon;
				background-color: #fff;
				text-align: center;
			}
	</style>
</head>
<body>
	<nav>
		<ul>
			<?foreach($navMenu as $item):?>
			<li><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
			<?endforeach?>
		</ul>
	</nav>
</body>
</html>