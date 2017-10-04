#!/usr/bin/php
<?php
	$array = [];
	$endArray = [];
	foreach ($argv as $key => $elem){
		if ($key != NULL || $key != FALSE || $key != "") {
			$array = array_filter(array_map("trim", explode(' ', $elem)), 'strlen');
			foreach ($array as $key => $elem) {
				array_push($endArray, $elem);
			}
		}
	}
	sort($endArray, SORT_STRING);
	foreach ($endArray as $key => $elem) {
	echo $elem."\n";
	}
?>
