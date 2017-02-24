<?php

$users = [
	'lorem',
	'ipsum',
	'foo',
	'bar',
	'baz',
];

// affichez cette liste de users dans une balise <ul>
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
	<ul>
<?php
// démarrage boucle
foreach ($users as $user) {
?>
		<li><?php echo $user; ?></li>
<?php
// fin boucle
}
?>
	</ul>
  </body>
</html>
