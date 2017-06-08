#!/usr/bin/php
<?php
echo "Entrez un nombre: ";
while(($num = fgets(STDIN)) != false)
{
	$num = trim($num);
	if (is_numeric($num))
	{
		if ($num % 2 == 0)
			echo "Le chiffre ".$num." est Pair\n";
		elseif ($num % 2 != 0)
			echo "Le chiffre ".$num." est Impair\n";
	}
	else
		echo $num." n'est pas un chiffre\n";
	echo "Entrez un nombre: ";
}
echo "\n";
?>
