<?php

/*

ETIQUETAS:

</br> : Salto de linea

*/

//Imprimir en pantalla

/*
echo "Hola mundo </br>";

print("Hola Luis </br>");
*/

//Variables = espacio reservado en el DD

$n = 1; // entero
$altura = 1.9; //flotante

//cadena
$str = "cadena $n"; //cadena
$str2 = 'cadena con comilla sencilla $n';

//boolean : true, false
$bool = false;
$bool2 = true;

//////////// Array ///////////////////////

$array = array('nombre'=> "Luis </br>",
                'edad' => "24 </br>",
                'estatura'=> "1.48");

$paises = array('Mexico','Chile','Colombia');

$array['nombre'];

$paises[1];

//echo $paises[2];

//print_r($array);

///////// Sentencias if y switch ///////////7

/*
CONDICIONES:
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
== igual
=== si es mismo valor y mismo tipo de variable
!= diferente
*/

//// IF-ELSE //////////////////

/*
$edad = 23;

if ($edad <= 2) {
    echo "Es un bebe";
} else if ($edad >= 3 && $edad <= 12) {
    echo "Es un niño";
} else if ($edad >= 13 && $edad <= 17) {
    echo "Es un adolescente";
} else {
    echo "Es un adulto";
}
*/

/////////// SWITCH ///////////

/*
$dia = 7;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;    
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Error de dia semanal";
        break;
}
*/

////////// Tablas de multiplicar con while ////////////

$n = 1;

while ($n <= 10) {
    echo "Las tablas de multiplicar del $n </br> </br>";
    $m = 1;
    while ($m <= 10) {
        echo "$n * $m = ", $n * $m, "</br>";
        if($m==10){
            echo "</br>";
        }
        $m++;
    }
    $n++;
}
echo "</br></br>";

echo "Numeros pares del 0 al 50: </br>";
$num = 0;

while($num <=50){

    if($num % 2 == 0){
        echo " ",$num;
    }
    $num++;
}


?>