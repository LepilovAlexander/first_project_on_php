<?
	$phones = array(
		0 => array(
			"id" => 1002,
        	"productName" => "Xiaomi Redmi 4 Prime 3/32GB Gold",
        	"priceUAH" => 4349,
        	"brandName" => "Xiaomi",
        	"countProducts" => 3,
        	"operationSystem" => "Android",
        	"numSimCard" => 2,
        	"productRate" => 5,
        	"countViews" => 5236
		),
		1 => array(
			"id" => 1003,
        	"productName" => "Xiaomi Redmi 4X 2/16GB Black",
        	"priceUAH" => 3699,
        	"brandName" => "Xiaomi",
        	"countProducts" => 1,
        	"operationSystem" => "Android",
        	"numSimCard" => 2,
        	"productRate" => 4.5,
        	"countViews" => 785
		),
		2 => array(
			"id" => 1004,
        	"productName" => "Xiaomi Redmi 4X 3/32GB Gold",
        	"priceUAH" => 4199,
        	"brandName" => "Xiaomi",
        	"countProducts" => 0,
        	"operationSystem" => "Android",
        	"numSimCard" => 2,
        	"productRate" => 4.8,
        	"countViews" => 453
		),

		3 => array(
			"id" => 1005,
        	"productName" => "Samsung Galaxy J1 2016 SM-J120H",
        	"priceUAH" => 2799,
        	"brandName" => "Samsung",
        	"countProducts" => 3,
        	"operationSystem" => "Android",
        	"numSimCard" => 2,
        	"productRate" => 3,
        	"countViews" => 1230
		),

		4 => array(
			"id" => 1006,
        	"productName" => "Samsung Galaxy J7 J700H/DS Black",
        	"priceUAH" => 4999,
        	"brandName" => "Samsung",
        	"countProducts" => 2,
        	"operationSystem" => "Android",
        	"numSimCard" => 1,
        	"productRate" => 4,
        	"countViews" => 4532
		),

		5 => array(
			"id" => 1007,
        	"productName" => "Samsung Galaxy J5 Prime G570F/DS",
        	"priceUAH" => 5199,
        	"brandName" => "Samsung",
        	"countProducts" => 2,
        	"operationSystem" => "Android",
        	"numSimCard" => 2,
        	"productRate" => 4.1,
        	"countViews" => 1287
		),

		6 => array(
			"id" => 1008,
        	"productName" => "Apple iPhone 7 Plus 128GB Black",
        	"priceUAH" => 28999,
        	"brandName" => "Apple",
        	"countProducts" => 1,
        	"operationSystem" => "iOS",
        	"numSimCard" => 1,
        	"productRate" => 4.1,
        	"countViews" => 1222
		),
		7 => array(
			"id" => 1009,
        	"productName" => "Apple iPhone 7 256GB Jet Black",
        	"priceUAH" => 26999,
        	"brandName" => "Apple",
        	"countProducts" => 2,
        	"operationSystem" => "iOS",
        	"numSimCard" => 2,
        	"productRate" => 4.4,
        	"countViews" => 999
		),
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWorkPHP</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->
	<style>
	body{
		background-image: url(img/bg2.jpg);
		background-attachment: fixed;
	}
	.wrap{
		width: 80%;
		margin: 0 auto;
		padding: 1rem;
		border-left: 2px solid #152d41;
		border-right: 2px solid #152d41;
		background-color: rgba(255, 255, 255, 0.1);
		
		
	}
		.phoneBlock{
			margin: 0 auto;
			padding: 2.5rem;
			border-radius: 5px;
			border: 2px solid #38a2ff;
			height: 75rem;
			width: 50rem;
			margin-bottom: 2.5rem;
			color: #093051;
			background-color: rgba(255, 255, 255, 1);
		}
		.phoneBlock h2{
			padding-bottom: 1rem;
			color: #38a2ff;
			text-shadow: #152d41 2px 1px 3px;
			font-size: 25px;
		}
		.phoneBlock span.gold_color{
			color: gold;
			font-size: 22px;
			text-shadow: #152d41 1px 0 3px;
		}
		.phoneBlock span.prise_color{
		color: #38a2ff;
		font-size: 18px;
		font-weight: bold;
		}

		.phoneBlock h3{
			font-size: 20px;
			color: #47a2ff;
		}
		.phoneBlock a:hover{
		text-decoration: none;
		}
	</style>
</head>
<body>
  <div class="wrap">
	<div class="container">
		<div class="row">
		<?foreach($phones as $phone):?>
        	<div class="col-lg-6 col-sm-12">
                <div class="phoneBlock">
                        <h2><?=$phone['productName']?></h2>
                        <img src="http://world-shoping.com.ua/img/phones/<?=$phone['id']?>.jpg" />
                        <h4>ID: <?=$phone['id']?></h4>
                        <h4>Product Name: <?=$phone['productName']?></h4>
                        <h4>Prise: <span class="prise_color"><?=$phone['priceUAH']?></span>  <span class="gold_color" >&#8372</span></h4>
                        <h4>Brand: <?=$phone['brandName']?></h4>
                        <h4>Count Products: <?=$phone['countProducts']?></h4>
                        <h4>OS: <?=$phone['operationSystem']?></h4>
                        <h4>Sim Card: <?=$phone['numSimCard']?></h4>
                        <h4>Product Rate: <?=$phone['productRate']?></h4>
                        <h4>Count Views: <?=$phone['countViews']?></h4>
                        <a href="#"><h3>Купить</h3></a>
                </div>
        	</div>
        <?endforeach?>
        </div>
    </div> 
  </div>
    <!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>