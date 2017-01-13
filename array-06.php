<?php

$tableau = [];

$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo bar baz';
$tableau[] = true;

// affectation du nombre d'éléments contenus dans le tableau
$elements = count($tableau);

var_dump($tableau);

echo "nombre d'éléments dans le tableau : $elements\n";
