<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perdre du poids</title>
</head>
<body>
    <?php 
    #monCode
    $poids = 96;
    $mois = 1;

        while ($poids >= 68) {
            echo "Poids visé dans $mois mois : $poids kg<br>";
                $mois+= 1;
                $poids-= 4;
        }   
      ?>

   <?php 
      #correction
      $poidsActuel = 96;
      $poidsVoulu = 68;
      $nombreDeMois = 1;

      While($poidsActuel > $poidsVoulu) {
        echo '<br><br><br>Poids Visé dans ' .($nombreDeMois++). ' mois : '.($poidsActuel -= 4). 'kg<br>';
          }
    ?>
</body>
</html>