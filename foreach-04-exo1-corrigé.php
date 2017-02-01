<?php

/*
affectez à la variable $user le tableau suivant
en utilisant l'entête comme clé alphanumérique

id   name        active
42   John Doe    true
*/

$user = [
	'id' => 42,
	'name' => 'John Doe',
	'active' => true,
];

// affichez tous les champs à l'aide d'un boucle foreach

foreach ($user as $key => $value) {
	echo $key . ' : ' . $value . "\n";
}
