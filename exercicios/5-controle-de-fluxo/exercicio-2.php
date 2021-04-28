<?php

/**
 * Classe ADivisivelPorB
 */
class ADivisivelPorB 
{
    /** @var int $varA valor A */
    public $varA = 246;

    /** @var int $varB valor B */
    public $varB = 3;
}

// Criando uma instância da classe "ADivisivelPorB"
$objADivisivelPorB = new ADivisivelPorB();

if ($objADivisivelPorB->varA % $objADivisivelPorB->varB == 0) {

    echo("É divisível.");

} else {

    echo("Não é divisível.");

}