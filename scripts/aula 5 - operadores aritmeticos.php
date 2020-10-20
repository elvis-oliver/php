<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> operações aritmeticas </title>
	</head>
	<body>
			<?php
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$s = $n1 + $n2;
			echo "A soma entre $n1 e $n2 é igual a: ".($n1+$n2);
			echo "<br/>A subtração entre $n1 e $n2 é igual a: ".($n1-$n2);
			echo "<br/>A multiplicação entre $n1 e $n2 é igual a: ".($n1*$n2);
			echo "<br/>A divisão entre $n1 e $n2 é igual a: ".($n1/$n2);
			echo "<br/>A módulo da divisão entre $n1 e $n2 é igual a: ".($n1%$n2);
			echo "<br/>---------------------------------------------------------";
			echo "<br/>O valor absoluto de $n1 é: ".abs($n1);
			echo "<br/>O valor de $n1<sup>$n2</sup> é: ".pow($n1, $n2);
			echo "<br/>O valor de $n1 arredondado é: ".round($n1); //floor e ceal
			echo "<br/>A parte inteira de $n1 é: ".intval($n1);
			echo "<br/>O valor $n1 em moeda é: ".number_format($n1, 2, ",", ".");
			
			?>
	</body>
</html>