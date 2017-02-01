<?php

// str_replace($search, $replace, $subject)

// définissez une fonction qui prend 3 paramètres :
// - $search
// - $replace
// - $subject

// mais $search est optionnel, sa valeur par défaut est 'foo'

// appelez la fonction avec des variables
// et stockez le résultat dans une variable

function remplace($replace, $subject, $search = 'foo') {
	return str_replace($search, $replace, $subject);
}

$texte = 'foo bar baz';
$texte2 = remplace('lorem', $texte);

var_dump($texte2);
