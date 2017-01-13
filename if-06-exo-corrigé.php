<?php

$i = random_int(0, 50);

echo "i == $i\n";

// si $i est compris entre 0 et 9, affichez "i est plus petit que 10"
// si $i est compris entre 10 et 19, affichez "i est plus petit que 20"
// si $i est compris entre 20 et 29, affichez "i est plus petit que 30"
// si $i est compris entre 30 et 39, affichez "i est plus petit que 40"
// sinon "i est plus grand ou égal à 40"

if ($i < 10) {
	echo "i < 10\n";
} elseif ($i < 20) {
	echo "i < 20\n";
} elseif ($i < 30) {
	echo "i < 30\n";
} elseif ($i < 40) {
	echo "i < 40\n";
} else {
	echo "i >= 40\n";
}
