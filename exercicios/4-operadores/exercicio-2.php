<?php

/**
 * Classe TestaOperadoresDeAtribuicao
 */
class TestaOperadoresDeAtribuicao 
{
    /** @var int $varA valor inicial */
    public $varA = 1;
}

// Criando uma instância da classe "TestaOperadoresDeAtribuicao"
$objTestaOperadoresDeAtribuicao = new TestaOperadoresDeAtribuicao();

// Incremento
$objTestaOperadoresDeAtribuicao->varA += 2;
echo($objTestaOperadoresDeAtribuicao->varA . "<br />");  // Output: 3

// Decremento
$objTestaOperadoresDeAtribuicao->varA -= 1;
echo($objTestaOperadoresDeAtribuicao->varA . "<br />");  // Output: 2

// Multiplicação
$objTestaOperadoresDeAtribuicao->varA *= 3;
echo($objTestaOperadoresDeAtribuicao->varA . "<br />");  // Output: 6

// Divisão
$objTestaOperadoresDeAtribuicao->varA /= 2;
echo($objTestaOperadoresDeAtribuicao->varA . "<br />");  // Output: 3

// Módulo
$objTestaOperadoresDeAtribuicao->varA %= 2;
echo($objTestaOperadoresDeAtribuicao->varA . "<br />");  // Output: 1