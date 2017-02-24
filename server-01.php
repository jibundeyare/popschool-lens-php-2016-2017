<?php

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

// on masque certaines données
foreach ($_SERVER as $cle => $valeur) {
	if ($cle != 'DOCUMENT_ROOT'
		&& $cle != 'SERVER_SOFTWARE'
		&& $cle != 'SCRIPT_FILENAME'
	) {
		echo "$cle => $valeur<br />\n";
	}
}

// on affiche certaines données
foreach($_SERVER as $cle => $valeur) {
	if ($cle == 'DOCUMENT_ROOT'
		|| $cle == 'SERVER_SOFTWARE'
		|| $cle == 'SCRIPT_FILENAME'
	) {
		echo "$cle => $valeur<br />\n";
	}
}
