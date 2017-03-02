<?php

// var_dump($_POST);

// traitement des données :
// - créer la session
// - affectez des messages flashs

session_start();

$_SESSION['infos'] = [
	'Bonjour ' . $_POST['login'],
];

// renvoyer vers la home page
$url = 'session-06-exo-corrigé-home.php';
header('location: ' . $url, true, 302);
exit();
