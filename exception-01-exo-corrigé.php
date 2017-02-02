<?php

$dividende = 1;
$diviseur = random_int(0, 1);

// levez une exception si $diviseur == 0

if ($diviseur == 0) {
	throw new Exception('Le diviseur est égal à zéro');
}

$quotien = $dividende / $diviseur;
