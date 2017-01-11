<?php

// conversion du type integer vers float
$nombreVirgule = (float) 42;

// conversion du type integer vers float avec la fonction floatval
$nombreVirgule = floatval(42);

echo $nombreVirgule . "\n";

// conversion du type float vers integer
$nombreEntier = (int) 3.14;

// conversion du type integer vers float avec la fonction intval
$nombreEntier = intval(3.14);

echo $nombreEntier . "\n";

// conversion du type float vers integer
$nombreEntier2 = (int) 2.9;

// conversion du type integer vers float avec la fonction intval
$nombreEntier2 = intval(2.9);

echo $nombreEntier2 . "\n";

// arrondir un float vers un integer en utilisant la fonction round()
$nombreEntier3 = round(2.9);

echo $nombreEntier3 . "\n";
