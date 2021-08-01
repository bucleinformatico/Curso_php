<?php
$numero=10;
$numero2=5;

$resultado= $numero + $numero2; //Suma
$resultado1= $numero - $numero2; //Resta
$resultado2= $numero / $numero2; //División
$resultado3= $numero * $numero2; //Multiplicación
$resultado4= $numero % $numero2; //Módulo (la diferencia que hay en una división)

echo 'El resultado con cada operador, son los siguientes:' . '<br/>' . '<br/>';

echo 'El resultado de la suma es: '. $resultado . '<br/>';
echo 'El resultado de la resta es: '.$resultado1. '<br/>';
echo 'El resultado de la división es: ' .$resultado2 . '<br/>';
echo 'El resultado de la multiplicación es: '. $resultado3 . '<br/>';
echo 'El resultado del módulo: '. $resultado4 . '<br/>';

?>