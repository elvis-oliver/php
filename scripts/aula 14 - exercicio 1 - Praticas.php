<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8"/>
		<title> praticas </title>
	</head>
	<body>
			<?php
				/*
				function divisão($a, $b) {
					$d = $a / $b;
					print $d;
				}
				divisão(2,10);
				*/
				
				/*
				function divisão($a, $b) {
					$d = $a / $b;
					return $d;
				}
				$res = divisão(5, 50);
				print $res;
				*/
				
				function soma() {
					$p = func_get_args();
					$tot = func_num_args();
					$s = 0;
					for ($i=0; $i<$tot; $i++){
						$s += $p[$i];
					}
					return $s;
				}
				$res = soma(1,2,3,4,5);
				print "O soma é: $res";
				

			?>
	</body>
</html>