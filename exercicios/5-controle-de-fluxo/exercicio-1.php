<?php

/**
 * Pág 33 - Exercícios de Fixação - Número 2
 */

/**
 * Classe PrecoProduto
 */
class PrecoProduto 
{
    /** @var float $precoDoProduto1 preço do produto 1 */
    public $precoDoProduto1 = 5325.12;

    /** @var float $precoDoProduto2 preço do produto 2 */
    public $precoDoProduto2 = 4366.34;
}

// Criando uma instância da classe "PrecoProduto"
$objPrecoProduto = new PrecoProduto();

if ($objPrecoProduto->precoDoProduto1 < $objPrecoProduto->precoDoProduto2) {

    echo("O produto 2 é o mais caro.");

} else if ($objPrecoProduto->precoDoProduto2 < $objPrecoProduto->precoDoProduto1) {

    echo("O produto 1 é o mais caro.");

}