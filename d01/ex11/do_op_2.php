#!/usr/bin/php
<?php
if ($argc !== 2)
	exit("Incorrect Parameters\n");
else {
	$opper = ['+','-','*','/','%'];
	$array = array_filter(explode('', $argv[1])));
	foreach ($array as $key => $elem) {
		if (!ctype_digit($elem) &&	!in_array($elem, $opper)){
			exit("Incorrect Parameters");
		}
		if (in_array($elem, $opper)){

		}
	}

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
