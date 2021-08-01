<?php
$meses=array ('Enero','Feberero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');


for($i = 0; $i<count($meses);$i++){

    echo "Mes de" . ": " . $meses [$i] . '<br/>';
}


$i=0;
while ($i<count($meses)){
    echo "El mes es el de: " . $meses [$i] . "<br/>";
 $i++;

}
