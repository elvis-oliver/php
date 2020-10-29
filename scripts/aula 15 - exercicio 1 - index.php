<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> index </title>
	</head>
	<body>
			<?php
				include "aula 15 - exercicio 1 - funções.php";
				$a = 5;
				$b = 2
				$respS = soma2($a);
				$respM = multiplicação($a, $b);
				linhaG();
				echo"<br/>";
				echo"A variavel A, mais 2 é igual: <h2>$respS</h2> <br/>";
				linhaG();
				echo"<br/>";
				echo"A variavel A, dentro do index tem valor: <h2>$a</h2> <br/>";
				linhaG();
				echo"A multiplicação é igual: <h2>$respM</h2> <br/>";
				
			?>
	</body>
</html>