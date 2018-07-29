<?php
$foot = 21;
 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice6</title>
   </head>
   <body>
     <p>
<?php
//On recule d'un pas de 20 à 0
while($foot > 0){
  $foot--;
  echo $foot . ' C\'est presque bon'. '<br/>';
}
 ?>
     </p>
   </body>
 </html>
