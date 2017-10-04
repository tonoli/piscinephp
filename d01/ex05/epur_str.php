#!/usr/bin/php
<?php
		$array = array_filter(array_map("trim", explode(' ', $argv[1])), 'strlen');
		$str = implode (' ', $array);
		echo $str."\n";
?>
