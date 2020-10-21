<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> titulo </title>
	</head>
	<body>
			<?php
				$ds = isset($_POST["ds"])?$_POST["ds"]:1;
				switch($ds){
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo"DIA DE ESTUDAR!";
					break;
				case 1:
				case 7:
					echo"DIA DE DESCANSAR!";
				}
			?>
			<a href="aula 10 - exercicio 2 - DiaEstudar.html">Voltar</a>
	</body>
</html>