<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> eleições </title>
	</head>
	<body>
			<?php
			$an = $_GET["an"];
			$idade = 2020 - $an;
			echo "Você nasceu em $an sua idade é $idade anos";
			$voto = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
			echo "<br/> Seu voto é: $voto";
			?>
	</body>
</html>