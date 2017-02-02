<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
	$conn->insert('joueurs', array(
		'nom' => 'lorem ipsum',
	));

	echo 'id du dernier élément inséré : ' . $conn->lastInsertId();
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
