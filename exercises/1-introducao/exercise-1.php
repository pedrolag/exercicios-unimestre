<?php 

// Criando a classe "HelloWorld"
// Creating the "HelloWorld" class
class HelloWorld {

    // Método "print()" da classe
    // Class method "print()"
    function print() {
        echo("Hello World");
    }

    // Método "printTwoLines()" da classe
    // Class method "printTwoLines()"
    function printTwoLines() {
        echo("Hello World");
        echo("<br />");
        echo("Hello World");
    }

}

// Criando uma instância da classe "HelloWorld"
// Creating an instance of the "HelloWorld" class
$objHelloWorld = new HelloWorld();

// Chamando o método "printTwoLines()"
// Calling the "printTwoLines()" method
$objHelloWorld->printTwoLines();