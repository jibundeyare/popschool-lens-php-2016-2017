<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

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
