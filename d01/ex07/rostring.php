#!/usr/bin/php
<?php
	$array = array_filter(array_map("trim", explode(' ', $argv[1])));
	$firstWord = $array[0];
	$endArray = array_slice($array, 1);
	array_push($endArray, $firstWord);
	$key = 0;
	while ($key < count($endArray)){
		echo $endArray[$key]." ";
		$key++;
	}
	echo $endArray[$key]."\n";
?>
