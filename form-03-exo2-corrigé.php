<?php

// créez un formulaire pour pouvoir modifier le nom du joueur dont l'id == 3

require __DIR__ . '/doctrine-dbal-connect.php';

$stmt = null;
$erreurs = [];

if (!isset($_GET['id']) || empty($_GET['id'])) {
  $id = 0;
} else {
  $id = $_GET['id'];
}

if ($_POST) {
  if (!isset($_POST['nom']) || empty(trim($_POST['nom']))) {
    $erreurs[] = "Vous devez renseigner le champ nom";
  } elseif (strlen(trim($_POST['nom'])) <= 3) {
    $erreurs[] = "Vous devez renseigner un nom de plus de 3 caractères";
  }

  if (!$erreurs) {
    try {
      $conn->update('joueurs', array(
        'nom' => trim($_POST['nom']),
      ), array(
        'id' => $id,
      ));
    } catch (Exception $e) {
      echo $e->getMessage();
      exit();
    }
  }
}

$sql = "SELECT * FROM joueurs WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue('id', $id);

try {
  $stmt->execute();
} catch (Exception $e) {
  echo $e->getMessage();
  exit();
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

    <form action="<?php echo basename(__FILE__); ?>?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <?php
        if ($row = $stmt->fetch()) {
        ?>
        <div>
            <input type="text" name="nom" value="<?php echo htmlentities($row['nom']); ?>" placeholder="le nom du joueur" />
        </div>
        <?php
        }
        ?>
        <div>
            <input type="submit" value="chercher" />
        </div>
    </form>

  </body>
</html>
