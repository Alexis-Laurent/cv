<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>

    <?php
      $to = "alexis.developpeur@gmail.com";
      $h  = "From: " . $to;
      $message = "";
      while (list($key, $val) = each($_POST)) {
        $message .= "$key : $val\n";
      }
      mail($to, $subject, $message, $h);
      Header("Location: formulaireOK.php");
    ?>

  </body>
</html>
