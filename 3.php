<?php
	function checkBraces($text){
		$array = str_split($text);
		$result = "True";
		if (count($array)%2!=0) {
			return "False";
		}
		for ($x = 0, $x2 = count($array)-1; $x < count($array)/2; $x++, $x2--) {
		  if (isset($array[$x]) && isset($array[$x2])) {
		  	if (($array[$x] == "(" && $array[$x2] != ")") || ($array[$x] == "{" && $array[$x2] != "}") || ($array[$x] == "[" && $array[$x2] != "]")) {
			  	$result = "False";
			  	break;
			 }
		  }
		}
		return $result;
	}

	echo checkBraces("({[]})");
?>