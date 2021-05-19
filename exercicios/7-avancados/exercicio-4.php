<?php

/**
 * 4) Criar conceito de Lista encadeada - usando classes
 * Uma lista é um objeto que tem um "pai" e um "filho" aonde o pai tem a ligação com o objeto anterior, e o filho com o próximo que será criado.
 * 
 * criar os métodos:
 * add
 * getValor($posicao) <-- isso deve funcionar como se fosse um ARRAY
 * remove($posicao) <-- isso deve funcionar como se fosse um ARRAY
 * getTamanho()
 * 
 * Adicionar 5 valores na lista encadeada, exibir eles na tela, mostrar o tamanho, remover 3 valores, e exibir o tamanho e eles na tela denovo.
 * 
 * Para exibir na tela deve usar while ou for
 * 
 * [x] -> insertBeginning
 * [x] -> insertEnd
 * [x] -> insertAfter
 * [x] -> insertBefore
 * [x] -> remove
 * [x] -> length
 * [x] -> getNode
 * [x] -> getData
 * [x] -> getAllData
 * 
 */

class DoublyLinkedNode 
{
    public $data;
    public $previousNode;
    public $nextNode;
} 

class DoublyLinkedList 
{
    private $pointerToPreviousNode;

    function __construct() 
    {
        $this->pointerToPreviousNode = null;
    }

    public function insertBeginning($data)
    {
        if ($this->length() <= 0)
            return $this->insertEnd($data);

        $newNode = new DoublyLinkedNode();
        $newNode->data = $data;

        // Get the current first node
        $currentNode = $this->getNode(0);

        // Set the newNode <-> currentNode connections
        $newNode->nextNode = $currentNode;
        $currentNode->previousNode = $newNode;
    }

    public function insertEnd($data) 
    {
        $newNode = new DoublyLinkedNode();
        $newNode->data = $data;
        $newNode->previousNode = $this->pointerToPreviousNode;
        
        if ($newNode->previousNode != null)
            $newNode->previousNode->nextNode = $newNode;

        $this->pointerToPreviousNode = $newNode;
    }

    public function insertAfter(int $nodeIndex, $data)
    {
        if ($this->length() == 0)
            return $this->insertEnd($data);

        if (
            $nodeIndex < 0
            || $nodeIndex > $this->length()
        ) {
            throw new \DomainException("Error at \"insertAfter($nodeIndex)\" - The value \"$nodeIndex\" is not a valid list index.");
        }

        // Create new node
        $newNode = new DoublyLinkedNode();
        $newNode->data = $data;

        // Create the oldNode <- newNode connection
        $currentNode = $this->getNode($nodeIndex);
        $newNode->previousNode = $currentNode;

        // Create the oldNode -> newNode -> anotherNode|null connections
        $newNode->nextNode = $currentNode->nextNode;
        $currentNode->nextNode = $newNode;

        // Create the newNode <- anotherNode if it exists
        if ($newNode->nextNode != null)
            $newNode->nextNode->previousNode = $newNode;

        // Set the list pointer to the last node
        if (
            $nodeIndex == $this->length() - 1
        ) {
            $this->pointerToPreviousNode = $newNode;
        }
    }

    public function insertBefore(int $nodeIndex, $data)
    {
        if ($this->length() == 0)
            return $this->insertEnd($data);

        if (
            $nodeIndex < 0
            || $nodeIndex > $this->length()
        ) {
            throw new \DomainException("Error at \"insertBefore($nodeIndex)\" - The value \"$nodeIndex\" is not a valid list index.");
        }

        // Create new node
        $newNode = new DoublyLinkedNode();
        $newNode->data = $data;

        // Create the newNode -> currentNode connection
        $currentNode = $this->getNode($nodeIndex);
        $newNode->nextNode = $currentNode;

        // Create the anotherNode|null <- newNode <- currentNode connections
        $newNode->previousNode = $currentNode->previousNode;
        $currentNode->previousNode = $newNode;

        // Create the anotherNode -> newNode if it exists
        if ($newNode->previousNode != null)
            $newNode->previousNode->nextNode = $newNode;
    }

    public function remove(int $nodeIndex)
    {
        if (
            $nodeIndex < 0
            || $nodeIndex > $this->length()
        ) {
            throw new \DomainException("Error at \"remove($nodeIndex)\" - The value \"$nodeIndex\" is not a valid list index.");
        }

        $nodeToBeRemoved = $this->getNode($nodeIndex);

        $previousNode = $nodeToBeRemoved->previousNode;
        $nextNode = $nodeToBeRemoved->nextNode;

        if ($previousNode != null)
            $previousNode->nextNode = $nextNode;

        if ($nextNode != null)
            $nextNode->previousNode = $previousNode;

        if ($this->pointerToPreviousNode == $nodeToBeRemoved)
            $this->pointerToPreviousNode = $previousNode;

        $nodeToBeRemoved->data = null;
    }

    public function length(): int
    {
        $length = 0;
        $node = $this->pointerToPreviousNode;

        while ($node != null) {
            $length += 1;
            $node = $node->previousNode;
        }

        return $length;
    }

    public function getNode($nodeIndex): DoublyLinkedNode
    {
        $node = $this->pointerToPreviousNode;
        $currentNodeIndex = $this->length() - 1;

        if (
            $nodeIndex > $currentNodeIndex
            || $nodeIndex < 0
        ) {
            throw new \DomainException("Error at \"getNode($nodeIndex)\" - The value \"$nodeIndex\" is not a valid list index.");
        }

        while ($node != null) {
            if ($currentNodeIndex == $nodeIndex) {
                return $node;
            }

            $node = $node->previousNode;
            $currentNodeIndex -= 1;
        }
    }

    public function getData($nodeIndex) 
    {
        $node = $this->pointerToPreviousNode;
        $currentNodeIndex = $this->length() - 1;

        if (
            $nodeIndex > $currentNodeIndex
            || $nodeIndex < 0
        ) {
            throw new \DomainException("Error at \"getData($nodeIndex)\" - The value \"$nodeIndex\" is not a valid list index.");
        }

        while ($node != null) {
            if ($currentNodeIndex == $nodeIndex)
                return $node->data;

            $node = $node->previousNode;
            $currentNodeIndex -= 1;
        }
    }

    public function getAllData() 
    {
        $node = $this->pointerToPreviousNode;
        $data = "|";

        // Go back to the first node
        while ($node->previousNode != null) {
            $node = $node->previousNode;
        }

        // Append all data from first to last node
        while ($node != null) {
            $data .= $node->data . "|";
            $node = $node->nextNode;
        }

        return $data;
    }
}