<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> raiz quadrada </title>
	</head>
	<body>
			<?php
				$valor = $_POST["v"];
				echo "A raiz quadrada de $valor é: ".number_format(sqrt($valor), 2);
			?>
			<a href="aula 8 - exercicio 1 - RaizQuadrada.html">Voltar<a/>
	</body>
</html>