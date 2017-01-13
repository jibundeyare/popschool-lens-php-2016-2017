<?php

// affichez à rebours les nombres de 10 à 1
// en utlisant une boucle while
// indice : "$i--" est la même chose que "$i = $i - 1" (c-à-d retrancher 1 de $i)

$i = 10;

while ($i >= 1) {
	echo $i . "\n";
	$i--;
}
