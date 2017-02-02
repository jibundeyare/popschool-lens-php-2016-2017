<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$erreurs = [];

if ($_POST) {
  if (!isset($_POST['nom']) || empty(trim($_POST['nom']))) {
    $erreurs[] = "Vous devez renseigner le champ nom";
  } elseif (strlen($_POST['nom']) <= 3) {
    $erreurs[] = "Vous devez renseigner un nom de plus de 3 caractères";
  }
}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <div class="erreur">
    <?php
    foreach ($erreurs as $erreur) {
      echo $erreur . "<br />\n";
    }
    ?>
    </div>

    <form action="<?php echo basename(__FILE__); ?>" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name="nom" value="" placeholder="le nom du joueur" />
        </div>
        <div>
            <input type="submit" value="chercher" />
        </div>
    </form>

  </body>
</html>
