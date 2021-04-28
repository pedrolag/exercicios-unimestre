<?php

/**
 * Pág 28 - Exercícios de Fixação - Número 6
 */

/**
 * Classe TestaOperadoresRelacionais
 */
class TestaOperadoresRelacionais 
{
    /** @var int $varA valor inicial */
    public $varA = 1;

    /** @var int $varB valor inicial */
    public $varB = 2;
}

// Criando uma instância da classe "TestaOperadoresRelacionais"
$objTestaOperadoresRelacionais = new TestaOperadoresRelacionais();

// A > B
$res = $objTestaOperadoresRelacionais->varA > $objTestaOperadoresRelacionais->varB;
var_dump($res);  // Output: false
echo("<br />");

// A >= B
$res = $objTestaOperadoresRelacionais->varA >= $objTestaOperadoresRelacionais->varB;
var_dump($res);  // Output: false
echo("<br />");

// A < B
$res = $objTestaOperadoresRelacionais->varA < $objTestaOperadoresRelacionais->varB;
var_dump($res);  // Output: true
echo("<br />");

// A <= B
$res = $objTestaOperadoresRelacionais->varA <= $objTestaOperadoresRelacionais->varB;
var_dump($res);  // Output: true
echo("<br />");

// A == B
$res = $objTestaOperadoresRelacionais->varA == $objTestaOperadoresRelacionais->varB;
var_dump($res);  // Output: false
echo("<br />");

// A != B
$res = $objTestaOperadoresRelacionais->varA != $objTestaOperadoresRelacionais->varB;
var_dump($res);  // Output: true
echo("<br />");