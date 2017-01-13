<?php

// affectation d'un tableau vide
$tableau = [];

var_dump($tableau);

// ajout de données dans le tableau
$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo bar baz';
$tableau[] = true;

var_dump($tableau);

// affectation d'un tableau avec des données
$tableau2 = [123, 3.14];

var_dump($tableau2);

// ajout de données dans le tableau
$tableau2[] = 'foo bar baz';
$tableau2[] = true;

var_dump($tableau2);
