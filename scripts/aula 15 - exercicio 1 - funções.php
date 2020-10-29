<?php
	function linhaP(){
		print"------------";
	}
	
	function linhaM(){
		print"------------------------";
	}
	
	function linhaG(){
		print"------------------------------------";
	}
	
	function soma2(&$a){
		$a+=2;
		return $a;
	}
	
	function multiplicação(&$a, &$b){
		$m = $a * $b;
		return $m;
	}
?>