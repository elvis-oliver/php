<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> formularios </title>
	</head>
	<body>
			<?php
				$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[sem nome]";
				$anoN = isset($_GET["anoN"]) ? $_GET["anoN"] : 0;
				$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
				$idade = 2020 - $anoN;
				echo "$nome é $sexo e tem idade de $idade anos"
			?>
			<a href="aula 8 - exercicio 2 - Formularios.html">Voltar</a>
	</body>
</html>