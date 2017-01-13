<?php

// tirez un mot au hasard parmi : foo, bar, baz, lorem ou ipsum
// à l'aide d'un switch, affichez la phrase :
// vous avez dit [mot] ?

$t = ['foo', 'bar', 'baz', 'lorem', 'ipsum'];

$i = random_int(0, count($t) - 1);
$mot = $t[$i];

echo $mot . "\n";

switch ($mot) {
	case 'foo':
		echo "vous avez dit foo ?\n";
		break;
	case 'bar':
		echo "vous avez dit bar ?\n";
		break;
	case 'baz':
		echo "vous avez dit baz ?\n";
		break;
	case 'lorem':
		echo "vous avez dit lorem ?\n";
		break;
	case 'ipsum':	
		echo "vous avez dit ipsum ?\n";
		break;
}
