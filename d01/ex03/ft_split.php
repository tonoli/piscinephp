<?php
	function ft_split($arg)
	{
		$array = array_filter(array_map("trim", explode(' ', $arg)), 'strlen');
		sort($array);
		return ($array);
	}
?>
