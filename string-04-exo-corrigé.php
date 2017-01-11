<?php

// affichez la variable $lorem en l'entourant de guillemets doubles
// et en utilisant une interpolation

// modifiez le contenu de la variable texte2 pour qu'à l'affichage
// on obtienne "$lorem $ipsum" (et non "foo ipsum")
// affichez la variable $texte suivie d'un saut de ligne
// en utilisant une concaténation

$lorem = 'foo';
$texte = "\$lorem \$ipsum";

echo "\"$lorem\"\n";

echo $texte . "\n";
