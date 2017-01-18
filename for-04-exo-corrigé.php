<?php

$users = [
	[11, 'John Doe'],
	[12, 'Lorem Ipsum'],
	[13, 'Foo Bar'],
];

// affichez l'id et le nom des users
// sous la forme "Id : Nom Utilisateur"
// en utilisant une boucle for avec count()
// et en utilisant l'accès direct aux élément du sous-tableau
// c-à-d sans passer par des variables intremédiaires

for ($i = 0; $i < count($users); $i++) {
	echo $users[$i][0] . ' : ' . $users[$i][1] . "\n";
}
