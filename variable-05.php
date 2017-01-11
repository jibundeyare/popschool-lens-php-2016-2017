<?php

$nombreEntier = 123;
$nombreVirgule = 3.14;
$matin = true;
$aprem = false;

// conversion du type integer vers string
$resultat = (string) $nombreEntier;
$resultat = strval($nombreEntier);w

var_dump($resultat);

// conversion du type float vers string
$resultat = (string) $nombreVirgule;
$resultat = strval($nombreVirgule);

var_dump($resultat);

// conversion du type boolean vers string
$resultat = (string) $matin;
$resultat = strval($matin);

var_dump($resultat);

// conversion du type boolean vers string
$resultat = (string) $aprem;
$resultat = strval($aprem);

var_dump($resultat);
