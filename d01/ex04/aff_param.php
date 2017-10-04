#!/usr/bin/php
<?php
	if ($argc != 1){
		foreach ($argv as $key => $elem) {
			if ($key != 0)
				echo "$elem\n";
		}
	}
?>
