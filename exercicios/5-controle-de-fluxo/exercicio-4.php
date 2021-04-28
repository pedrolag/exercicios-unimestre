<?php

/**
 * Pág 41 - Exercícios de Fixação - Número 8
 */

/**
 * Classe LoremIpsum
 */
class LoremIpsum 
{
    /** @var int $ds_lorem_ipsum valor de lorem ipsum */
    public $ds_lorem_ipsum = "Lorem ipsum dolor sit amet";

    function repetir($nr_vezes) {
        for ($x = 0; $x < $nr_vezes; $x ++) {
            echo("Lorem ipsum dolor sit amet <br />");
        }
    }
}

// Criando uma instância da classe "LoremIpsum"
$objLoremIpsum = new LoremIpsum();

// Imprimindo "Lorem ipsum" 5x
$objLoremIpsum->repetir(5);