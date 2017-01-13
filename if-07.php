<?php

$i = random_int(0, 50);

echo "i == $i\n";

if ($i >= 0 && $i <= 9) {
	echo "i est compris entre 0 et 9\n";
} elseif ($i >= 10 && $i <= 19) {
	echo "i est compris entre 10 et 19\n";
} elseif ($i >= 20 && $i <= 29) {
	echo "i est compris entre 20 et 29\n";
} elseif ($i >= 30 && $i <= 39) {
	echo "i est compris entre 30 et 39\n";
} else {
	echo "i est plus grand ou égal à 40\n";
}
