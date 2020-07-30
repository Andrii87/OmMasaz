<!doctype html>
<html lang=pl>
	<head>
		<title><?php include './_title.txt'; ?></title>
		<meta charset='utf-8'>
		<meta name='author' content='Andrii Vlasow'>
		<meta name='keywords' content='<?php include "./_keywords.txt"; ?>'>
		<meta name='description' content='<?php include "./_description.txt"; ?>'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel=stylesheet href='./../../_moduly/_css.css'>
		<script src='./../../_moduly/_js/jquery-3.2.1.min.js'></script>
	</head>
	<body>
		<h1 class=ukryj>Studio Masażu OM - Pomaga poczuć się lepiej!</h1>
		<div id=strona>
			<?php include './../../_moduly/_wersje_jezykowe/jezyki.php';?>
			<?php include './../../_moduly/_naglowek/naglowek.php';?>
			<?php include './../../_moduly/_menu/menu.php';?>
			<?php include './main.php'; ?>
			<?php include './../../_moduly/_stopka/stopka.php';?>
		</div>
		<script>
			$('#strona').slideDown();
		</script>
	</body>
</html> 