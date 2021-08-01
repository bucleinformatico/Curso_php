<?php
$meses = array('Enero', 'Feberero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');


sort($meses);
rsort($meses);
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
      foreach ($meses as $mes) {
        echo '<li>' . $mes . '</li>';
      }
      ?>
    </ul>


  </h1>
</body>

</html>