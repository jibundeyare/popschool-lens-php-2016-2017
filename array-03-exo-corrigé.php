<?php

// affectez un tableau vide à une variable
// ensuite, ajoutez-lui 1 booléen, 1 integer et 1 string

$tab = [];

$tab[] = true;
$tab[] = 123;
$tab[] = 'foo';

var_dump($tab);

// affectez un tableau de 2 floats à une variable
// ensuite, ajoutez-lui 1 booléen, 1 integer et 1 string

$tab = [1.0, 2.0];

$tab[] = true;
$tab[] = 123;
$tab[] = 'foo';

var_dump($tab);
