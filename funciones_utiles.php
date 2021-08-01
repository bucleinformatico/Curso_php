<?php

$texto='<> & "" ';
$texto2='Hola        mundo!! ';
$texto3='Hola qué tal estás';
$texto4='hola mundo';
$texto5='HOLA MUNDO';
echo htmlspecialchars($texto); //evita carácteres especiales y los transforma en código html
echo '<br/>';
echo trim($texto2); //elimina los espacios 
echo '<br/>';
echo strlen($texto3); //Indica la longitud del texto incluye los espacios
echo '<br/>';
echo substr($texto3,0,4);//La primera es de dónde queremos que corte y la segunda las letras que queremos que coja
echo '<br/>';
echo strtoupper($texto4); //vuelve en mayúsculas la cadena de texto
echo '<br/>';
echo strtolower($texto5); //vuelve en minúsculas la cadena de texto
echo '<br/>';
echo strpos($texto4, 'l'); //localiza la letra indicada en la la variable String

?>