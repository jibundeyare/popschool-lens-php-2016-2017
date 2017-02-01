<?php

function bonjour() {
	// variable locale de la fonction
	$texte = 'bonjour';
	echo $texte . "\n";
}

// variable locale de l'espace de global
$texte = 'lorem ipsum';

// test de portée des variables

echo $texte . "\n"; // lorem ipsum
bonjour(); // bonjour
echo $texte . "\n"; // lorem ipsum
