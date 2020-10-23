<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> fatorial </title>
	</head>
	<body>
			<?php
				$num = isset($_POST["num"])?$_POST["num"]:1;
				
				$fat = 1;
				$c = $num;
				echo"$num ! = ";
				do {
					$fat *= $c;
					echo "$c";
					$c--;
					if ($c < 1) {
						echo " = ";
					} else {
						echo " x ";
					}
				} while ($c >= 1);
				echo"$fat";
			?>
			<br/><a href="aula 12 - exercicio 2 - Fatorial.html">Voltar</a>
	</body>
</html>