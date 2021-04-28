<?php

/**
 * Pág 12 - Exercícios de Fixação - Número 2
 */

// Criando a classe "TestaVariavel"
class TestaVariavel {

    // Propriedade "$nr_idade"
    private $nr_idade;

    // Método "setNrIdade()"
    // Aplica um novo valor para a idade
    // @params int $nr_idade
    function setNrIdade($nr_idade = 0) {
        $this->nr_idade = $nr_idade;
    }

    // Método "getNrIdade()"
    // Retorna o valor da idade
    // @return int $nr_idade
    function getNrIdade() {
        return $this->nr_idade;
    }

}

// Criando uma instância da classe "TestaVariavel"
$objTestaVariavel = new TestaVariavel();

// Atribuindo um valor para a variável $nr_idade
$objTestaVariavel->setNrIdade(27);

// Buscando o valor da variável $nr_idade
$nr_idade = $objTestaVariavel->getNrIdade();

// Imprimindo o valor buscado
echo($nr_idade);