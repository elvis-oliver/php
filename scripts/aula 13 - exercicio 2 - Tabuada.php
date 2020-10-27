<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> tabuada </title>
	</head>
	<body>
			<?php
				$n = isset($_GET["num"])?$_GET["num"]:1;
				for ($c = 1;$c <= 10;$c++){
					print"$n x $c = ".($n*$c)."<br/>";
				}
			?>
	<br/><a href="javascript:history.go(-1)">Voltar</a>
	</body>
</html>