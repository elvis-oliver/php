<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> titulo </title>
	</head>
	<body>
			<?php
			$n1 = $_GET["n1"];
			$n2 = $_GET["n2"];
			echo "As notas inseridas foram: $n1, $n2";
			$m = ($n1 + $n2) / 2;
			$s = ($m >= 7) ? "APROVADO" : "REPROVADO";
			echo "<br/>A situação do aluno é: $s";
			?>
	</body>
</html>