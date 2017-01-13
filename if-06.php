<?php

// liste de textes
$textes = ['foo', 'bar', 'baz', 'lorem ipsum'];

/// tirage au sort d'un texte
$texte = $textes[random_int(0, 3)];

// structure de contrôle "if elseif else" avec plusieurs "elseif"
if ($texte == 'foo') {
	echo "Vous avez dit foo ?\n";
} elseif ($texte == "bar") {
	echo "Vous avez dit bar ?\n";
} elseif ($texte == "baz") {
	echo "Vous avez dit baz ?\n";	
} else {
	echo "Vous avez dit autre chose.\n";	
}
