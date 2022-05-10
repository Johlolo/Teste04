<?php

$arrayList = [
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [3, 6, 5, 8, 10, 20, 15],
    [1, 1, 2, 3, 4, 4],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3]
];

$array = [1, 3, 2, 1];
// $n = count($array);

function verifica ($arrayVerify, $n) {
    $k = 1;
    $n = count($arrayVerify);
    if ($n > 1) {
        for ($i = 1; $i < $n; $i++) {
            if ($arrayVerify[$i-1] < $arrayVerify[$i]){
                $k++;
            } else {
                return false;
            }
        }
    }
    if ($k == $n){
        return true;
    }
}

foreach ($array as $key => $value) {
    $arrayTurn = $array;
    // $arrayTurned = array();
    $arrayTurn = array_splice($arrayTurn, $arrayTurn[$key]);
    // $arrayTurned = $arrayTurn;
    // var_dump($arrayTurned);
    // var_dump($arrayTurn);
    var_dump(verifica($arrayTurn, count($arrayTurn)));
    var_dump($key);
}


// A função verifica está correta, está verificando se está em ordem
// Algo está errado no foreach, não deu tempo para finalizar.
// Próximo passo iria ser para realizar o foreach de cada Array acima (linhas 4 a 22)



?>
