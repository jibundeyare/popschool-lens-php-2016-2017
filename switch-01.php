<?php

$i = random_int(1, 3);

echo "i == $i\n";

switch ($i) {
	case 1:
		echo "i == 1\n";
		break;
	case 2:
		echo "i == 2\n";
		break;
	default:
		echo "i == 3\n";
}
