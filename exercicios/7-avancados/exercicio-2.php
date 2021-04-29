<?php

/**
 * 2) Faça um algoritmo para ler o código e o preço de 15 produtos,
 * (usar random para valores com casa decimal de 1 a 100 reais) calcular e escrever:
 * - o maior preço lido
 * - a média aritmética dos preços dos produtos
 */

$arrProdutos = [];
$nr_maior_valor = 0;
$vl_total = 0;
$vl_media_aritmetica_valor_produtos = 0;

for ($x = 0; $x < 15; $x ++) {

    $objProduto = (object) array(
        "cd_produto" => $x,
        "vl_produto" => number_format(mt_rand(0, 10000) / 100, 2)
    );

    array_push($arrProdutos, $objProduto);

}

foreach ($arrProdutos as $objProduto) {
    
    if ($objProduto->vl_produto > $nr_maior_valor) $nr_maior_valor = number_format($objProduto->vl_produto, 2);

    $vl_total += $objProduto->vl_produto;

}

$vl_media_aritmetica_valor_produtos = number_format($vl_total / count($arrProdutos), 2);

echo("<pre>");
echo("<br>Maior valor: R$ $nr_maior_valor");
echo("<br>Média aritmética dos preços dos produtos: R$ $vl_media_aritmetica_valor_produtos");

// var_dump($arrProdutos);