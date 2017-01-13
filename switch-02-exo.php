<?php

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);
$bonusJoueur1 = random_int(0, 1);
$bonusJoueur2 = random_int(0, 1);

// si les deux jours ont plus de 50 points
// ou si un des deux joueur a attrapé un bonus
// ils peuvent accéder au niveau supérieur
// sinon : game over
