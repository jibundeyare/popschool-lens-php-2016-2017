<?php

// Affichez les clés et valeurs de la variable $_SERVER dans un tableau comme suit :
// 
// cle				valeur
// DOCUMENT_ROOT	/...
// ...
?>

<table>
	<tr>
		<th>entête (col 1)</th>
		<th>entête (col 2)</th>
	</tr>
<?php
// on masque certaines données
// démarrage de la boucle
foreach ($_SERVER as $cle => $valeur) {
	// ouverture du if
	if ($cle != 'DOCUMENT_ROOT'
		&& $cle != 'SERVER_SOFTWARE'
		&& $cle != 'SCRIPT_FILENAME'
	) {
?>
	<tr>
		<td><?php echo $cle; ?></td>
		<td><?php echo $valeur; ?></td>
	</tr>
<?php
	// fermeture du if
	}
// fin de la boucle
}
?>
</table>

<table>
	<tr>
		<th>entête (col 1)</th>
		<th>entête (col 2)</th>
	</tr>
<?php
// on affiche certaines données
// démarrage de la boucle
foreach($_SERVER as $cle => $valeur) {
	// ouverture du if
	if ($cle == 'DOCUMENT_ROOT'
		|| $cle == 'SERVER_SOFTWARE'
		|| $cle == 'SCRIPT_FILENAME'
	) {
?>
	<tr>
		<td><?php echo $cle; ?></td>
		<td><?php echo $valeur; ?></td>
	</tr>
<?php
	// fermeture du if
	}
// fin de la boucle
}
?>
</table>
