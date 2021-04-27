<?php 

// Criando a classe "HelloWorld"
class HelloWorld {

    // Método "print()" da classe
    // Class method "print()"
    function print() {
        echo("Hello World");
    }

}

// Criando uma instância da classe "HelloWorld"
// Creating an instance of the "HelloWorld" class
$objHelloWorld = new HelloWorld();

// Chamando o método "print()"
// Calling the "print()" method
$objHelloWorld->print();