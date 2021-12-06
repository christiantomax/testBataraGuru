<?php
	function getDashNumber($text){
		$isGenap = false;
		$array = str_split($text);
		$result = "";
		foreach ($array as $char) {
			if ($isGenap) {
				if ($char % 2 == 0) {
					$result = $result."-".$char;
					$isGenap = true;
				}else{
					$isGenap = false;
					$result = $result.$char;
				}
			}else{
				if ($char % 2 == 0) {
					$isGenap = true;
				}else{
					$isGenap = false;
				}
				$result = $result.$char;
			}
		}
		return $result;
	}

	echo getDashNumber("2468");
?>