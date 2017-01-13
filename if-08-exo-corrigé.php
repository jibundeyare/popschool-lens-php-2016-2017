<?php

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);

echo "joueur 1 : $scoreJoueur1\n";
echo "joueur 2 : $scoreJoueur2\n";

// si au moins un des deux joueurs a un score plus grand que 50
// les joueurs peuvent passer au niveau supérieur
// sinon : game over

if ($scoreJoueur1 > 50 || $scoreJoueur2 > 50) {
	echo "level++ :)\n";
} else {
	echo "game over :(\n";
}
