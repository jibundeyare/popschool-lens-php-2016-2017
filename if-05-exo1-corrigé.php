<?php

$i = random_int(1, 10);

echo "i == $i\n";

// déterminez si $i est :
// - égal à 5
// - plus grand que 5
// - se trouve dans le dernier cas (dite lequel)

if ($i == 5) {
	echo "i == 5\n";
} elseif ($i > 5) {
	echo "i > 5\n";
} else {
	echo "i < 5\n";
}
