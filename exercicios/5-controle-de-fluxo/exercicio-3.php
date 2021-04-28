<?php

/**
 * Pág 35 - Exercícios de Fixação - Número 6
 */

/**
 * Classe Saudacao
 */
class Saudacao 
{
    /** @var int $nr_hora hora atual */
    public $nr_hora = 22;
}

// Criando uma instância da classe "Saudacao"
$objSaudacao = new Saudacao();

if ($objSaudacao->nr_hora >= 0 && $objSaudacao->nr_hora < 12) {

    echo("Bom dia");

} else if ($objSaudacao->nr_hora >= 12 && $objSaudacao->nr_hora < 18) {

    echo("Boa tarde");

} else if ($objSaudacao->nr_hora >= 18 && $objSaudacao->nr_hora < 24) {

    echo("Boa noite");

} else {

    echo("Unibanco 30 horas :P");

}