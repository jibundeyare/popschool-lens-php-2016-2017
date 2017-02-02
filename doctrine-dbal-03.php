<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
	$conn->update('joueurs', array(
		'nom' => 'foo bar',
	), array(
		'id' => 6,
	));
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
