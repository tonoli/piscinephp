#!/usr/bin/php
<?php
	if ($argc > 1){
		$array =  array_filter(array_map("trim", explode(' ', $argv[1])), 'strlen');
		$firstWord = array_values($array)[0];
		$endArray = array_slice($array, 1);
		array_push($endArray, $firstWord);
		$str = implode (' ', $endArray);
		echo $str."\n";
	}
?>
