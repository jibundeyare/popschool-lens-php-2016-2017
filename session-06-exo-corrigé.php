<?php

// je veux une page de login
// et que quand je suis connecté
// un message flash "Bonjour Utilisateur" s'affiche

// - une page html simple qui envoie les données
//   vers un script php
// - un script php qui lit les données,
//   créé le message flash dans la variable de session
//   et renvoie vers un autre script php (la home)
// - un script php (la home) qui affiche le message flash
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <form action="session-06-exo-corrigé-script.php" method="post" enctype="multipart/form-data">
      <input type="text" name="login" placeholder="login" />
      <input type="submit" value="se connecter" />
    </form>

  </body>
</html>
