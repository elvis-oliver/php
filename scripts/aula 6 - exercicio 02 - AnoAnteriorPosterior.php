<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> ano anterior e posterior </title>
	</head>
	<body>
			<?php
			$ano = $_GET["a"];
			$anoA = $ano - 1;
			$anoP = $ano + 1;
			echo "O ano atual é: ".$ano;
			echo "<br/>O ano posterior é: ".$anoP;
			echo "<br/>O ano anterior é: ".$anoA;
			?>
	</body>
</html>