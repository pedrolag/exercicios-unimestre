<?php

/**
 * Pág 42 - Exercícios de Fixação - Número 10
 */

/**
 * Classe Imprimir
 */
class Imprimir 
{
    function imprimir100Numeros() {
        for ($x = 1; $x <= 100; $x ++) {
            echo("$x <br />");
        }
    }
}

// Criando uma instância da classe "Imprimir"
$objImprimir = new Imprimir();

// Imprimindo números de 1 à 100
$objImprimir->imprimir100Numeros();