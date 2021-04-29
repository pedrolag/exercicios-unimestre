<?php

/**
 * Pág 59 - Exercícios de Fixação - Número 8
 */ 

$arrTabuleiro = [];
$ds_divisor_linha = "<br/>---------------------------------<br/>";
$ds_divisor_coluna = "|";
$ds_peca_branca = " 0 ";
$ds_peca_vermelha = " * ";

// Criar a estrutura do tabuleiro com 64 casas
for ($x = 0; $x < 8; $x ++) {

    $arrTabuleiro[$x] = [];

    for ($y = 0; $y < 8; $y ++) {

        $arrTabuleiro[$x][$y] = "   ";

        // Peças brancas
        if (
            ($x == 0 && $y % 2 != 0)
            || ($x == 1 && $y % 2 == 0)
        ) {
            $arrTabuleiro[$x][$y] = $ds_peca_branca;
        }

        // Peças vermelhas
        if (
            ($x == 6 && $y % 2 != 0)
            || ($x == 7 && $y % 2 == 0)
        ) {
            $arrTabuleiro[$x][$y] = $ds_peca_vermelha;
        }
    
    }

}

echo("<pre>");

// Imprimir o tabuleiro
echo($ds_divisor_linha);

for ($x = 0; $x < 8; $x ++) {

    for ($y = 0; $y < 8; $y ++) {

        echo("|");
        echo($arrTabuleiro[$x][$y]);

        if ($y == 7) echo("|");

    }

    echo($ds_divisor_linha);

}

echo("</pre>");