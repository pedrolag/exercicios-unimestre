<?php

/**
 * 3) Criar conceito de pilha - usando classes
 * criar os métodos push, pop e lenght
 * Inserir 5 valores na pilha, usar o length e depois usar o pop para exibir os valores na tela
 */

class Pilha 
{
    private $pilha = "";
    private $limite = 0;
    private $topo = 0;

    function __construct($limite)
    {
        $this->limite = $limite;
    }

    function push($valor)
    {
        if ($this->topo >= $this->limite) {
            echo("A pilha está cheia");
            return null;
        }

        $this->pilha .= "|" . strval($valor);
        $this->topo += 1;
    }

    function pop()
    {
        if ($this->topo == 0) {
            echo("A pilha está vazia");
            return null;
        }

        $this->pilha = substr_replace($this->pilha, "", strrpos($this->pilha, "|"));
        $this->topo -= 1;
    }

    function get()
    {
        return $this->pilha;
    }

    function length()
    {
        return $this->topo;
    }

}

$pilha = new Pilha(5);

$pilha->push(123);
$pilha->push("abc");
$pilha->push(456);
$pilha->push("def");
$pilha->push(789);

print_r($pilha->get());

print_r("<br>" . $pilha->length());

$pilha->pop();

print_r("<br>" . $pilha->get());

print_r("<br>" . $pilha->length());

$pilha->pop();

print_r("<br>" . $pilha->get());