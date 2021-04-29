<?php

/**
 * Pág 57 - Exercícios de Fixação - Número 6
 */ 

function imprimirArray($nome, $array) {
    echo("$nome <br />");
    for ($x = 0; $x < count($array); $x ++) {
        $aux = $x + 1 == count($array) ? "" : ", ";
        echo("$array[$x]$aux");
    }
    echo("<hr />");
}

$arrNumeros = [];

// Preencher o array com 10 valores aleatórios de 0-100
for ($x = 0; $x < 10; $x ++) {
    array_push($arrNumeros, mt_rand(1, 100));
}

// Imprimir o array original
imprimirArray("Array original", $arrNumeros);

// Bubble sort
for ($i = count($arrNumeros); $i >= 1; $i --) {

    for ($j = 1; $j < $i; $j ++) {

        if ($arrNumeros[$j - 1] > $arrNumeros[$j]) {

            $aux = $arrNumeros[$j];

            $arrNumeros[$j] = $arrNumeros[$j - 1];
            $arrNumeros[$j - 1] = $aux;

        }

    }

}

// Imprimir o array modificado
imprimirArray("Array modificado", $arrNumeros);