<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> contador </title>
	</head>
	<body>
			<?php
				$c = 0;
				do {
					echo "$c ";
					$c += 2;
				} while($c <= 32);
			?>
	</body>
</html>