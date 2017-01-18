<?php

// déclarer un tableau avec 5 strings
// effectuez une boucle for avec count()
// et affichez chaque élément du tableau

$tableau = [
	'foo',
	'bar',
	'baz',
	'lorem',
	'ipsum',
];

for ($i = 0; $i < count($tableau); $i++) {
	echo $tableau[$i] . "\n";
}
