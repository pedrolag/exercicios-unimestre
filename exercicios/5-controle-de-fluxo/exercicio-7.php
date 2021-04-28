<?php

/**
 * Pág 44 - Exercícios de Fixação - Número 14
 */

/**
 * Classe DivideMaiorInteiro
 */
class DivideMaiorInteiro 
{
    function dividirMaiorInteiro() {
        $numero = PHP_INT_MAX;
        while ($numero >= 100) {
            $numero /= 2;
            echo("$numero <br />");
        }
    }
}

// Criando uma instância da classe "DivideMaiorInteiro"
$objDivideMaiorInteiro = new DivideMaiorInteiro();

// Dividindo o maior integer até que o resultado seja menor que 100
$objDivideMaiorInteiro->dividirMaiorInteiro();