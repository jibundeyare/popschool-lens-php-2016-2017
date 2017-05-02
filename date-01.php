<?php

function usage() {
    echo "usage: \n";
    echo basename(__FILE__) . " [jj/mm/aaaa]\n";
}

if ($argc != 2) {
    usage();
    exit();
}

$dateFr = $argv[1];

$date = explode('/', $dateFr);

if (count($date) != 3) {
    echo "vous devez renseigner une date au format jj/mm/aaaa\n";
    exit();
} else {
    $jour = $date[0];
    $mois = $date[1];
    $annee = $date[2];

    if (strlen($jour) != 2 || strlen($mois) != 2 || strlen($annee) != 4) {
        echo "vous devez renseigner une date au format jj/mm/aaaa\n";
        exit();
    } elseif (!checkdate((int) $mois, (int) $jour, (int) $annee)) {
        echo "vous devez renseigner une date valide\n";
        exit();
    }
}

$dateSql = date('Y-m-d', mktime(0, 0, 0, $mois, $jour, $annee));
$dateEn = date('d/m/Y', mktime(0, 0, 0, $mois, $jour, $annee));

echo "date fr : $dateFr\n";
echo "date en : $dateEn\n";
echo "date sql : $dateSql\n";

