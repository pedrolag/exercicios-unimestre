<?php

/**
 * 1) Faça um programa que leia 100 valores randomicos (de 1 a 10000) e no final, escreva o maior e o menor valor lido.
 */

$arrNumerosAleatorios = [];
$nr_maior_valor = 0;
$nr_menor_valor = 10000;

for ($x = 0; $x < 100; $x ++) {

    $nr_aleatorio = mt_rand(0, 10000);
    array_push($arrNumerosAleatorios, $nr_aleatorio);

}

foreach ($arrNumerosAleatorios as $nr_aleatorio) {
    
    if ($nr_aleatorio > $nr_maior_valor) $nr_maior_valor = $nr_aleatorio;

    if ($nr_aleatorio < $nr_menor_valor) $nr_menor_valor = $nr_aleatorio;

}

echo("<br/>Maior valor: " . $nr_maior_valor);
echo("<br/>Menor valor: " . $nr_menor_valor);   

// echo("<br/>Maior valor: " . max($arrNumerosAleatorios));
// echo("<br/>Menor valor: " . min($arrNumerosAleatorios));   