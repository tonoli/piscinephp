#!/usr/bin/php
<?php
	if ($argc !== 4)
		exit("Incorrect Parameters\n");
	else {
		$premierNombre = intval(trim($argv[1]));
		$opp = trim($argv[2]);
		$secondNombre = intval(trim($argv[3]));
		if ($opp === '+'){
			$res = $premierNombre +	$secondNombre;
			echo $res."\n";
		}
		if ($opp === '-'){
			$res = $premierNombre -	$secondNombre;
			echo $res."\n";
		}
		if ($opp === '*'){
			$res = $premierNombre *	$secondNombre;
			echo $res."\n";
		}
		if ($opp === '/'){
			$res = $premierNombre /	$secondNombre;
			echo $res."\n";
		}
		if ($opp === '%'){
			$res = $premierNombre %	$secondNombre;
			echo $res."\n";
		}
	}
?>
