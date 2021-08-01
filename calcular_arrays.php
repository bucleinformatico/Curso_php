<?php
$meses= array ('Enero','Feberero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
//echo count($meses); 
$ultimo_mes = count($meses)-1;
echo $meses[$ultimo_mes];
?>

<!DOCTYPE html>
<html>

  <head>

      <title>Test PHP</title>

  </head>

  <body>

    <h1>
    <ul>
     <?php 
     foreach($meses as $mes){
         echo'<li>'. $mes .'</li>';
     }
?>
    </ul>


    </h1>
  </body>
</html>