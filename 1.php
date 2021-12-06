<?php
	function getFactorial($n){
		$result = 1;
		for ($x = 1; $x <= $n; $x++) {
		  $result *= $x;
		}
		return $result;
	}

	echo getFactorial(4);
?>
