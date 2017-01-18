<?php

$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];

// boucle sur un tableau de tableaux
for ($i = 0; $i < count($lignes); $i++) {
	// accès direct aux éléments d'un sous-tableau
	$nombre = $lignes[$i][0];
	$texte = $lignes[$i][1];
	echo $nombre . ' ' . $texte . "\n";
}
