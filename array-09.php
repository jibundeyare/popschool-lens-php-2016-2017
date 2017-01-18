<?php

// affectation d'un tableau avec des clés alphanumériques à une variable
$tableau = [
	'nombre_entier' => 123,
	'nombre_virgule' => 3.14,
	'texte' => 'lorem ipsum',
	'valeur_booleenne' => true,
];

echo $tableau['nombre_entier'] . "\n";
echo $tableau['nombre_virgule'] . "\n";
echo $tableau['texte'] . "\n";
echo $tableau['valeur_booleenne'] . "\n";
