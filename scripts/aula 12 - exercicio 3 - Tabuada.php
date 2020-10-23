<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> tabuada </title>
	</head>
	<body>
			<?php
				$num = isset($_GET["num"])?$_GET["num"]:1;
				
				$c = 1;
				do {
					echo "$c x $num = ".$num*$c."<br/>";
					$c++;
				} while ($c <= 10);
			?>
			<br/><a href="aula 12 - exercicio 3 - Tabuada.html">Voltar</a>
	</body>
</html>