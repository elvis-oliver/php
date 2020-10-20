<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> somar ou multiplicar </title>
	</head>
	<body>
			<?php
			$num1 = $_GET["n1"];
			$num2 = $_GET["n2"];
			$op = $_GET["op"];
			echo "Os valores passados foram: ".$num1.", ".$num2;
			$r = ($op == "s") ? $num1+$num2 : $num1*$num2;
			echo "<br/>Resultado: ".$r;
			?>
	</body>
</html>