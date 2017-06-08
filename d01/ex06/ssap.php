#!/usr/bin/php
<?php
	$array = [];
	$endArray = [];
	foreach ($argv as $key => $elem)
	{
		if ($key != 0)
		{
			$array = array_filter(array_map('trim', explode(' ', $elem)));
			foreach ($array as $key => $elem) {
				array_push($endArray, $elem);
			}
		}
	}
	sort($endArray);
	foreach ($endArray as $key => $elem) {
		echo $elem."\n";
	}
?>
