<?php

// un tableau de tableaux
$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];

var_dump($lignes);

// affectation à une variable du premier tableau
$ligne = $lignes[0];

var_dump($ligne);

// affectation à une variable du dernier tableau
$ligne = $lignes[count($lignes) - 1];

var_dump($ligne);
