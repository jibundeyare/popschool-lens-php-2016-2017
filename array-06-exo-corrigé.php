<?php

$tableau = [];

$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo bar baz';
$tableau[] = true;

$elements = count($tableau);

var_dump($tableau);
var_dump($elements);

// affichez le dernier élément du tableau en vous servant de la variable $elements
echo $tableau[$elements - 1] . "\n";
