<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> desconto em produto </title>
	</head>
	<body>
			<?php
			$preco = $_GET["p"];
			echo "Preço do produto = R$".number_format($preco, 2, ",", ".");
			$preco += ($preco*10/100);
			echo "<br/>Preço do produto com desconto de 10% = R$".number_format($preco, 2, ",", ".");
			?>
	</body>
</html>