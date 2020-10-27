<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> numero primo </title>
	</head>
	<body>
			<?php
				$contM = 0;
				$n = isset($_POST["num"])?$_POST["num"]:1;
				print"Analisando o número $n "."</br></br>";
				for($c = 1;$c <= $n; $c++){
					if ($n % $c == 0) {
						print "Divisivel por: $c <br/>";
						$contM ++;
					}
				}
				if ($contM == 2) {
					echo"<h2> É UM NÚMERO PRIMO!</h2>";
				} else {
					echo"<h3>NÃO É UM NÚMERO PRIMO!</h3>";
				}
			?>
			<a href="aula 13 - exercicio 3 - NumeroPrimo.html">Voltar</a>
	</body>
</html>