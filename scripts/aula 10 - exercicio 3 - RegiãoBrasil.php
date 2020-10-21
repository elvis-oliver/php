<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> regiões do brasil </title>
	</head>
	<body>
			<?php
				$est = isset($_GET["estado"])?$_GET["estado"]:"pb";
				switch($est){
					case "pb":
					case "pe":
					case "ba":
						echo"REGIÃO NORDESTE";
						break;
					case "pr":
					case "rs":
					case "sc":
						echo"REGIÃO SUL";
						break;
					case "sp":
					case "rj":
					case "es":
						echo"REGIÃO SUDESTE";
						break;
					case "mt":
					case "go":
						echo"REGIÃO CENTRO-OESTE";
						break;
					case "pa":
					case "am":
					case "ac":
						echo"REGIÃO NORTE";
				}
			?>
			<a href="aula 10 - exercicio 3 - RegiãoBrasil.html">Voltar</a>
	</body>
</html>