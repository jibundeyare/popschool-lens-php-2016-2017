<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
	$conn->delete('joueurs', array(
		'id' => 7,
	));
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
