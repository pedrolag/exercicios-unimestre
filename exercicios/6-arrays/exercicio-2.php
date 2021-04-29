<?php

/**
 * Pág 56 - Exercícios de Fixação - Número 4
 */ 

$arrNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function imprimirArray($nome, $array) {
    echo("$nome <br />");
    for ($x = 0; $x < count($array); $x ++) {
        $aux = $x + 1 == count($array) ? "" : ", ";
        echo("$array[$x]$aux");
    }
    echo("<hr />");
}

imprimirArray("Array original", $arrNumeros);

for ($x = 0; $x < 10; $x ++) {
    $nr_aleatorio_1 = mt_rand(0, 9);
    $nr_aleatorio_2 = mt_rand(0, 9);

    $vl_temp = $arrNumeros[$nr_aleatorio_1];
    $arrNumeros[$nr_aleatorio_1] = $arrNumeros[$nr_aleatorio_2];
    $arrNumeros[$nr_aleatorio_2] = $vl_temp;
}

imprimirArray("Array modificado x10", $arrNumeros);