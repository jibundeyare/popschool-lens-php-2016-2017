<?php

function aire($largeur, $hauteur) {
	return $largeur * $hauteur;
}

$l = 20;
$h = 30;

$aire = aire($l, $h);

echo "aire : $aire\n";
