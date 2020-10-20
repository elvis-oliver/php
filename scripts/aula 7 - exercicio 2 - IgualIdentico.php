<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> igual ou identico </title>
	</head>
	<body>
			<?php
			$a = 5;
			$b = "5";
			$r1 = ($a == $b) ? "SIM" : "NÃO";
			$r2 = ($a === $b) ? "SIM" : "NÃO";
			echo "A é igual a B? $r1";
			echo "<br/>A é identico a B? $r2";
			?>
	</body>
</html>