<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> if </title>
	</head>
	<body>
			<?php
				$anoN = isset($_GET["anoN"])?$_GET["anoN"]:1900;
				
				$idade = date("Y") - $anoN;
				
				if ($idade < 16) {
					echo "Você nasceu em $anoN, tem $idade anos";
					echo "<br/>Você NÃO PODE VOTAR";
				}
				elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
					echo "Você nasceu em $anoN, tem $idade anos";
					echo "<br/>Seu voto é OPCIONAL";
				}
				else {
					echo "Você nasceu em $anoN, tem $idade anos";
					echo "<br/>Seu voto é OBRIGATORIO";
				}
			?>
			<br/>
			<a href="aula 9 - exercicio 1 - Voto.html"> Voltar </a>
	</body>
</html>