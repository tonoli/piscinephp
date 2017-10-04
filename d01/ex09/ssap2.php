#!/usr/bin/php
<?php
	$array = [];
	$endArray = [];
	if ($argc > 1){
		foreach ($argv as $key => $elem)
		{
			if ($key != 0)
			{
				$array = array_filter(array_map("trim", explode(' ', $elem)), 'strlen');
				foreach ($array as $key => $elem) {
					array_push($endArray, $elem);
				}
			}
		}
		sort($endArray, SORT_FLAG_CASE);
		foreach ($endArray as $key => $elem) {
			if(ctype_alpha($elem[0]) === true){
				echo $elem."\n";
			}
		}
		foreach ($endArray as $key => $elem) {
			if(ctype_digit($elem[0]) === true){
				echo $elem."\n";
			}
		}
		foreach ($endArray as $key => $elem) {
			if(!ctype_digit($elem[0]) && !ctype_alpha($elem[0])){
				echo $elem."\n";
			}
		}
	}

?>
