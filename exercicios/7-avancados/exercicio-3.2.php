<?php

/**
 * 3) Criar conceito de pilha - usando classes
 * criar os métodos push, pop e lenght
 * Inserir 5 valores na pilha, usar o length e depois usar o pop para exibir os valores na tela
 */

class Node {
    public $data;
    public $next;
} 

class Stack {
    private $stackPointer;

    function __construct() {
        $this->stackPointer = null;
    }

    function push($data) {
        $previousNode = new Node();
        $previousNode->data = $data;
        $previousNode->next = $this->stackPointer;
        $this->stackPointer = $previousNode;
    }

    function pop() {

        // pega o node mais acima
        $node = $this->stackPointer;

        // recupera a informação que precisa
        $removedNodeData = $node->data;

        // removendo o node atual
        $this->stackPointer = $node->next;

        return $removedNodeData;
    }

    function length() {
        $length = 0;
        $node = $this->stackPointer;

        while ($node != null) {
            $length += 1;
            $node = $node->next;
        }

        return $length;
    }

    function getData() {
        return $this->stackPointer;
    }
}

$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

print_r($stack->length());

print_r($stack->pop());

print_r($stack->length());
