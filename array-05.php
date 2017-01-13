<?php

$tableau = [];

$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo bar baz';
$tableau[] = true;

// affectation de la valeur 0 à une variable
$i = 0;

// affichage d'un élément du tableau en utilisant une variable comme index
echo $tableau[$i] . "\n";

$i = 1;
echo $tableau[$i] . "\n";

$i = 2;
echo $tableau[$i] . "\n";

$i = 3;
echo $tableau[$i] . "\n";

// affectation de la valeur 0 à une variable
$i = 0;

// affichage d'un élément du tableau en utilisant une variable comme index
echo $tableau[$i] . "\n";

$i++; // même résultat que $i = $i + 1;
echo $tableau[$i] . "\n";

$i++;
echo $tableau[$i] . "\n";

$i++;
echo $tableau[$i] . "\n";
