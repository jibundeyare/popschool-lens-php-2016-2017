<?php

echo 'namespace : ' . __NAMESPACE__ . "\n";

// le chemin du fichier php
echo 'chemin : ' . __FILE__ . "\n";

// le nom du fichier php
echo 'nom : ' . basename(__FILE__) . "\n";

// le dossier du fichier php
echo 'dossier : ' . __DIR__ . "\n";

echo 'ligne : ' . __LINE__ . "\n";

function uneFonction() {
	echo 'fonction : ' . __FUNCTION__ . "\n";
}

uneFonction();
