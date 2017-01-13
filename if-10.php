<?php

$i = random_int(1, 10);
$j = random_int(1, 10);

echo "i == $i\n";
echo "j == $j\n";

// structures de contrôle "if else" imbriquées
if ($i > 5) {
	if ($j > 5) {
		echo "i et j sont plus grands que 5\n";
	} else {
		echo "i est plus grand que 5 et j est plus petit ou égal à 5\n";
	}
} else {
	if ($j > 5) {
		echo "i est plus petit ou égal à 5 et j est plus grand que 5\n";
	} else {
		echo "i et j sont plus petits ou égaux à 5\n";
	}
}
