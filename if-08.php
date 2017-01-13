<?php

$i = random_int(1, 10);
$j = random_int(1, 10);

// "condition A" ou "condition B"
if ($i >= 5 || $j >= 5) {
	echo "i ou j est plus grand ou égal à 5\n";
} else {
	echo "ni i, ni j ne sont plus grands ou égaux à 5\n";
}
