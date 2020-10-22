<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> contador inteligente </title>
	</head>
	<body>
			<?php
				$i = isset($_GET["inicio"])?$_GET["inicio"]:1;
				$f = isset($_GET["fim"])?$_GET["fim"]:2;
				$p = isset($_GET["passo"])?$_GET["passo"]:1;
				
				$c = $i;
				while($c <= $f){
					echo"$c"."<br/>";
					$c += $p;
				}
			?>
			<a href="aula 11 - exercicio 1 - ContadorInteligente.html">Voltar</a>
	</body>
</html>