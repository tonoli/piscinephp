<?php
	function ft_is_sort($arg){
		$sortArg = $arg;
		sort($sortArg);
		if ($sortArg === $arg){
			return (true);
		}
		else {
			return (false);
		}
	}
?>
