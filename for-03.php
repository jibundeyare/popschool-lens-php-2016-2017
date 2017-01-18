<?php

$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];

// boucle sur un tableau de tableaux
for ($i = 0; $i < count($lignes); $i++) {
	$ligne = $lignes[$i];
	echo $ligne[0] . "\n";
}
