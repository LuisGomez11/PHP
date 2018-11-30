<?php

// function operaciones ($n, $m, $operaciones){
//     if ($operaciones == "suma") {
//         return $n + $m;
//     }
//     if ($operaciones == "resta") {
//         return $n - $m;
//     }
//     if ($operaciones == "multiplicacion") {
//         return $n * $m;
//     }
// }

// echo operaciones(3,4,"multiplicacion");

$numeros = array(1,2,3,4,5);

$media = media ($numeros);

echo $media;

function media ($num){
    $n=0;
    foreach ($num as $key) {
        $n = $n + $key;        
    }
    $n = $n / 5;
    return $n;
}

?>