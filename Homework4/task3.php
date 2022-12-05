<?php 

    function func($hyp) {
		return $hyp * $hyp; 
	}
	
	$result = func(2) + func(6);
	echo "Длина гипотенузы = $result";

?>