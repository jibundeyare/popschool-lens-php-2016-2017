<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
	$conn->insert('joueurs', array(
		'nom' => 'lorem ipsum',
	));
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
