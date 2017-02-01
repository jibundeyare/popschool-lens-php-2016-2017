<?php

/*
affectez à une variable le tableau suivant
en utilisant l'entête comme clé alphanumérique

id   name        active
42   John Doe    true
*/

$user = [
	'id' => 42,
	'name' => 'John Doe',
	'active' => true,
];

echo 'id: ' . $user['id'] . "\n";
echo 'name: ' . $user['name'] . "\n";
echo 'active: ' . $user['active'] . "\n";
