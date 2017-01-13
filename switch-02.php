<?php

$i = random_int(1, 10);

echo "i == $i\n";

switch (true) {
	case $i > 5;
		echo "i > 5\n";
		break;
	default:
		echo "i <= 5\n";
}
