<?php 

/**
 * Pág 10 - Exercícios Complementares - Número 1
 */

// Criando a classe "HelloWorld"
class HelloWorld {

    // Método "print()" da classe
    function print() {
        echo("Hello World");
    }

    // Método "printTwoLines()" da classe
    function printTwoLines() {
        echo("Hello World");
        echo("<br />");
        echo("Hello World");
    }

}

// Criando uma instância da classe "HelloWorld"
$objHelloWorld = new HelloWorld();

// Chamando o método "printTwoLines()"
$objHelloWorld->printTwoLines();