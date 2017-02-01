<?php

$tableau = [123, 3.14, 'lorem ipsum', true];

// boucle sur toutes les valeurs d'un tableau à clés numériques
foreach ($tableau as $cle => $valeur) {
	echo $cle . ' : ' . $valeur . "\n";
}
