  
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de courses</title>
  </head>
  <body>
    
 
  <?php 

    #monCode
    $courses = 
            [
                '3kg'   => 'de pommes',
                '6kg'   => 'de fromages blanc',
                '5kg'   => 'de courgettes',
                '1'     => 'de chocolat noir',
                '10kg'  => 'de pates'      
            ];

            foreach ($courses as $poids => $produits) {
                echo "<br>$poids $produits";
                
            }

      #correction
    $liste = [
            'pommes' => '3kg',
            'fromage blanc' => '6 yaourts',
            'courgettes'    => '5kg',
            'chocolat noir' => '1 plaque',
            'pates' => '10 kg'
    ];

    foreach($liste as $aliment => $quantite) {
        echo "<br><B>$quantite</b> de <B>$aliment</b>";
    }
    ?>

     </body>
  </html>