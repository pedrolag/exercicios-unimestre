<?php

/**
 * Classe TestaOperadoresLogicos
 */
class TestaOperadoresLogicos 
{
    /** @var int $varA valor inicial */
    public $varA = 1;

    /** @var int $varB valor inicial */
    public $varB = 2;

    /** @var int $varC valor inicial */
    public $varC = 3;

    /** @var int $varD valor inicial */
    public $varD = 4;
}

// Criando uma instância da classe "TestaOperadoresLogicos"
$objTestaOperadoresLogicos = new TestaOperadoresLogicos();

// A > B || C < D
$res = $objTestaOperadoresLogicos->varA > $objTestaOperadoresLogicos->varB
    || $objTestaOperadoresLogicos->varC < $objTestaOperadoresLogicos->varD;
var_dump($res);  // Output: true
echo("<br />");

// A > B && C < D
$res = $objTestaOperadoresLogicos->varA > $objTestaOperadoresLogicos->varB
    || $objTestaOperadoresLogicos->varC < $objTestaOperadoresLogicos->varD;
var_dump($res);  // Output: false
echo("<br />");
