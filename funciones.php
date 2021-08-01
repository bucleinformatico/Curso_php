<?php
//Funciones en php, un código que nos per
/* 
int numero;
count();//contar 
sort();// ordenar arrays
rsort(); // ordenar arrays 
var_dump();//indican valores y tipo de valor 
print_r();//indican valores y tipo de valor 

function saludo ($nombre){
return "Saludo!!, $nombre";

}
saludo("Alejandro");


function sumar ($numero1,$numero2){
$resultado =$numero1+$numero2;
return $resultado; 
}

echo sumar(10,15);
*/
function calcular_area_triangulo($base,$altura){

    $resultado = ($base*$altura)/2;
    return $resultado;
}
$frasecalculo="El área del triángulo después de la multiplicación entre base por altura ya la división entre dos es:  ";
echo  $frasecalculo .  calcular_area_triangulo(20,22);


?>