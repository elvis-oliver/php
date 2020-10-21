<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> titulo </title>
	</head>
	<body>
			<?php
				$n1 = isset($_GET["n1"])?$_GET["n1"]:0;
				$n2 = isset($_GET["n1"])?$_GET["n2"]:0;
				$m = ($n1+$n2)/2;
				
				if ($m < 3) {
					echo "Sua média foi: $m e você esta REPROVADO!";
				}
				elseif (($m > 3)&&($m < 7)){
					echo "Sua média foi: $m e você esta em RECUPERAÇÃO!";
				}
				else {
					echo "Sua média foi: $m e você esta APROVADO!";
				}
			?>
			<br/>
			<a href="aula 9 - exercicio 2 - SituaçãoAluno.html">Voltar</a>
	</body>
</html>