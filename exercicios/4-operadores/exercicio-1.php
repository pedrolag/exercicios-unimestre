<?php

/**
 * Classe TestaOperadoresAritmeticos
 */
class TestaOperadoresAritmeticos 
{
    /** @var int $varA soma */
    public $varA = 1 + 1;

    /** @var int $varB subtração */
    public $varB = 10 - 2;

    /** @var int $varC multiplicação */
    public $varC = 2 * 3;

    /** @var int $varD divisão */
    public $varD = 25 / 5;

    /** @var int $varE módulo */
    public $varE = 10 % 4;
}

// Criando uma instância da classe "TestaOperadoresAritmeticos"
$objTestaOperadoresAritmeticos = new TestaOperadoresAritmeticos();

echo($objTestaOperadoresAritmeticos->varA . "<br />");
echo($objTestaOperadoresAritmeticos->varB . "<br />");
echo($objTestaOperadoresAritmeticos->varC . "<br />");
echo($objTestaOperadoresAritmeticos->varD . "<br />");
echo($objTestaOperadoresAritmeticos->varE);