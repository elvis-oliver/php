<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> contador </title>
	</head>
	<body>
			<?php
				for ($c = 1; $c <= 10; $c++){
					print "$c ";
				}
				print"<br/>";
				for ($c = 10; $c >= 1; $c--){
					print "$c ";
				}
				print"<br/>";
				for ($c = 0; $c <= 50; $c+=5){
					print "$c ";
				}
			?>
	</body>
</html>