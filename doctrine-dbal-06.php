<?php

require __DIR__ . '/doctrine-dbal-connect.php';

$id = 6;
$nom = 'foo bar';

$sql = "SELECT * FROM joueurs WHERE id = :id AND nom = :nom";
$stmt = $conn->prepare($sql);
$stmt->bindValue('id', $id);
$stmt->bindValue('nom', $nom);

try {
	$stmt->execute();
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}

while ($row = $stmt->fetch()) {
	echo $row['id'] . ' ' . $row['nom'] . "<br />\n";
}
