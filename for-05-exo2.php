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
