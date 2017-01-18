<?php

$users = [
	[11, 'John Doe'],
	[12, 'Lorem Ipsum'],
	[13, 'Foo Bar'],
];

// affichez l'id et le nom des users
// sous la forme "Id : Nom Utilisateur"
// en utilisant une boucle for avec count()

for ($i = 0; $i < count($users); $i++) {
	$user = $users[$i];
	echo $user[0] . ' : ' . $user[1] . "\n";
}
