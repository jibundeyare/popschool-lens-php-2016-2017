<?php

require __DIR__ . '/doctrine-dbal-connect.php';

$sql = 'SELECT * FROM joueurs';

try {
	$stmt = $conn->query($sql);
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}

while ($row = $stmt->fetch()) {
	echo $row['id'] . ' ' . $row['nom'] . "<br />\n";
}
