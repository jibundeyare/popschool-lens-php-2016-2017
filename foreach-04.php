<?php

$user = [
	'id' => 42,
	'name' => 'Foo Bar',
	'active' => true,
];

// boucle sur toutes les valeurs d'un tableau à clés alphanumériques
foreach ($user as $key => $value) {
	echo $key . ' : ' . $value . "\n";
}
