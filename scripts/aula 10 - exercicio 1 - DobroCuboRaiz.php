<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> dobro, cubo ou raiz </title>
	</head>
	<body>
			<?php
				$n = isset($_GET["num"])?$_GET["num"]:1;
				$o = isset($_GET["op"])?$_GET["op"]:1;
				switch($o){
					case 1:
						$r = $n * 2;
						break;
					case 2:
						$r = pow($n, 3);
						break;
					case 3:
						$r = sqrt($n);
				}
				echo "O número: $n";
				echo "<br/>A opção: $o";
				echo "<br/>O resultado: $r";
			?>
			<br/><a href="aula 10 - exercicio 1 - DobroCuboRaiz.html">Voltar</a>
	</body>
</html>