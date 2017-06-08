#!/usr/bin/php
<?php
	$array = array_map("trim", explode(' ', $str));
	foreach ($array as $elem) {
		if ($str == '')
			$str = $elem;
		$str = $str." ".$elem;
	}
	echo $str."\n";
?>
