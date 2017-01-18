<?php

$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];

// affichez le premier élément de chaque tableau
// en vous servant des indexes

$ligne = $lignes[0];
echo $ligne[0] . "\n";

$ligne = $lignes[1];
echo $ligne[0] . "\n";

$ligne = $lignes[count($lignes) - 1];
echo $ligne[0] . "\n";
