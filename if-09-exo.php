<?php

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);

$bonusJoueur1 = random_int(0, 1);
$bonusJoueur2 = random_int(0, 1);

echo "joueur 1: $scoreJoueur1\n";
echo "joueur 2: $scoreJoueur2\n";
echo "bonus joueur 1: $bonusJoueur1\n";
echo "bonus joueur 2: $bonusJoueur2\n";

// si les deux joueurs ont plus de 50 points
// ou  si un des deux joueurs a attrapé un bonus
// ils peuvent passer au niveau supérieur
// sinon : game over

if (($scoreJoueur1 > 50 && $scoreJoueur2 > 50)
	|| $bonusJoueur1 == 1
	|| $bonusJoueur2 == 1
) {
	echo "level++ :)\n";
} else {
	echo "game over :(\n";
}
