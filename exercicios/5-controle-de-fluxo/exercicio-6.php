<?php

/**
 * Pág 43 - Exercícios de Fixação - Número 12
 */

/**
 * Classe Imprimir
 */
class Imprimir 
{
    function imprimirApenasNaoMultiplosDe3() {
        for ($x = 1; $x <= 100; $x ++) {
            if ($x % 3 != 0) {
                echo("$x <br />");
            }
        }
    }
}

// Criando uma instância da classe "Imprimir"
$objImprimir = new Imprimir();

// Imprimindo números de 1 à 100 que não são múltiplos de 3
$objImprimir->imprimirApenasNaoMultiplosDe3();