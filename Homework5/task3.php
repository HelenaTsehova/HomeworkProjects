<?php

	$str = 'I have 5 apples, 6 pears, 15 bananas, 3 watermelons and 1 orange';
	preg_match_all('/[0-9-\\.]+/', $str, $matches);
	$summ = 0;

	foreach($matches[0] as $match)
	$summ += (int) $match;
	echo $summ;
?>