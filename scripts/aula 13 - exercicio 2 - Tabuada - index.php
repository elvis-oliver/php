<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> tabuada index </title>
	</head>
	<body>
		<form method="get" action="aula 13 - exercicio 2 - Tabuada.php">
			Tabuada:
			<select name="num">
				<?php
					for ($c = 1; $c <= 10; $c++){
						echo"<option>$c</option>";
					}
				?>
			</select>
			<input type="submit" value="Enviar">
		</form>
			<?php

			?>
	</body>
</html>