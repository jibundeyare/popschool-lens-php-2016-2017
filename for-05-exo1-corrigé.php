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

// affichez la liste des users actifs
// en utilisant une boucle for

for ($i = 0; $i < count($users); $i++) {
	if ($users[$i]['active']) {
		echo $users[$i]['id'] . ' : ' . $users[$i]['name'] . "\n";
	}
}
