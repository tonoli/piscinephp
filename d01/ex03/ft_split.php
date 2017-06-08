#!/usr/bin/php
<?php
	function ft_split($arg)
	{
		$array = array_filter(array_map("trim", explode(' ', $arg)));
		sort($array);
		return ($array);
	}
?>
