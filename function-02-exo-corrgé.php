<?php

// définissez une fonction qui calcule le volume d'un parallélipipède
// appelez cette fonction en passant des variables en paramètres
// et stockez le résultat dans une variable

function  volume($l, $h, $p) {
	return $l * $h * $p;
}

$largeur = 10;
$hauteur = 20;
$profondeur = 30;

$volume = volume($largeur, $hauteur, $profondeur);

var_dump($volume);
