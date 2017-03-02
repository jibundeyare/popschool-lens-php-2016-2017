<?php

// le type hinting "array" empêche de transmettre autre chose qu'un array en paramètre
function afficherTout(array $tableau) {
	foreach ($tableau as $element) {
		echo $element . "\n";
	}
}

$t = [
	'foo',
	'bar',
	'baz',
];

// ça passe
afficherTout($t);

// provoque une erreur
afficherTout(123);
