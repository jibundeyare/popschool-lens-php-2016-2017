<?php

/*
id   name        active
42   John Doe    true
123  Lorem Ipsum false
255  Foo Bar     true
*/

$users = [
	[
		'id' => 42,
		'name' => 'John Doe',
		'active' => true,
	],
	[
		'id' => 123,
		'name' => 'Lorem Ipsum',
		'active' => false,
	],
	[
		'id' => 255,
		'name' => 'Foo Bar',
		'active' => true,
	],
];

// affichez la liste de tous les users
// sous la forme "Id : Nom User (actif)" si actif
// et "Id : Nom User (désactivé)" si pas actif
// en utilisant une boucle for

// version recommandée
for ($i = 0; $i < count($users); $i++) {
	if ($users[$i]['active']) {
		$actif = 'actif';
	} else {
		$actif = 'désactivé';
	}

	// affichage des valeurs par concaténation
	//echo $users[$i]['id'] . ' : ' . $users[$i]['name'] . ' (' . $actif . ")\n";

	// affichage des valeurs par interpolation
	echo "{$users[$i]['id']} : {$users[$i]['name']} ($actif)\n";
}

// version alternative mais difficile à maintenir
for ($i = 0; $i < count($users); $i++) {
	if ($users[$i]['active']) {
		echo $users[$i]['id'] . ' : ' . $users[$i]['name'] . " (actif)\n";
	} else {
		echo $users[$i]['id'] . ' : ' . $users[$i]['name'] . " (désactivé)\n";
	}
}

// version alternative et plus facile à maintenir
for ($i = 0; $i < count($users); $i++) {
	echo $users[$i]['id'] . ' : ' . $users[$i]['name'];

	if ($users[$i]['active']) {
		echo " (actif)\n";
	} else {
		echo " (désactivé)\n";
	}
}

