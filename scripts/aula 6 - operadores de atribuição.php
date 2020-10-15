<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> operadores de atribuição </title>
	</head>
	<body>
			<?php
			$a = 3;
			$b = &$a;
			$b += 9;
			echo "o A vale: ".$a;
			echo "<br>o B vale: ".$b;
			
			$x = "abc";
			$$x = "123";
			echo "<br>a variavel 'x' tem valor: ".$x;
			echo "<br>a variavel 'adc' tem valor: ".$abc;
			?>
	</body>
</html>