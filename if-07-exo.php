<?php

$age = random_int(12, 25);
$abonne = random_int(0, 1);

// déterminez si un utilisateur a droit ou non d'accéder à une ressource :
// - non si l'utilisateur a moins de 16 ans
// - non si l'utilisateur a 16 ou plus mais qu'il n'est pas abonné
// - oui si l'utlisateur a 16 ou plus et qu'il est abonné
