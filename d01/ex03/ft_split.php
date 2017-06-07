#!/usr/bin/php
<?php

	function ft_split($arg)
	{
		$array = explode(' ', $arg);
		foreach ($array as $elem) {
			$elem = trim($elem);
		}
		$sortArray = sort($array);
		return ($sortArray)
	}
?>
