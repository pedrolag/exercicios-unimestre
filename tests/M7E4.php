<?php

use PHPUnit\Framework\TestCase;

include "exercicios/7-avancados/exercicio-4.php";

class M7E4 extends TestCase
{
    private $list;

    public function setUp(): void
    {
        $this->list = new DoublyLinkedList();
    }

    public function testVerificarOTamanhoDaLista()
    {
        // The empty list should have length == 0
        $this->assertEquals(
            0,
            $this->list->length()    
        );

        // Adding a new value should change the length to 1
        $this->list->insertEnd("A");

        $this->assertEquals(
            1,
            $this->list->length()    
        );

        // Adding another new value should change the length to 2
        $this->list->insertEnd("B");

        $this->assertEquals(
            2,
            $this->list->length()    
        );
    }

    public function testAdicionarUmValorNaUltimaPosicaoDaLista() 
    {
        // The empty list should have length == 0
        $this->assertEquals(
            0,
            $this->list->length()
        );

        $this->list->insertAfter(0, "A");

        $this->assertEquals(
            1,
            $this->list->length()
        );
    }

    public function testAdicionarUmValorDepoisDeUmaPosicaoEspecificaDaLista()
    {
        // Add the first value after null (will be inserted as position 0) and check if it modified the list
        $this->list->insertAfter(0, "A");

        // List should have 1 node
        $this->assertEquals(
            1,
            $this->list->length()
        );

        // The node's value at position 0 should be "A"
        $this->assertEquals(
            "A",
            $this->list->getData(0)
        );

        // Add the second value - after position 0 (1) and check if it modified the list
        $this->list->insertAfter(0, "B");

        // List should have 2 nodes now
        $this->assertEquals(
            2,
            $this->list->length()
        );

        // The node's value at position 1 should be "B"
        $this->assertEquals(
            "B",
            $this->list->getData(1)
        );

        // Add the third value - after position 0 (1 again) and check if it modified the list
        $this->list->insertAfter(0, "C");

        // List should have 3 nodes now
        $this->assertEquals(
            3,
            $this->list->length()
        );

        // The node's value at position 1 now should be "C"
        $this->assertEquals(
            "C",
            $this->list->getData(1)
        );

        // The whole list's data should be "|A|C|B|"
        $this->assertEquals(
            "|A|C|B|",
            $this->list->getAllData()
        );
    }

    public function testRetornarTodosOsValoresDaListaCorretamente()
    {
        // Add the first value after null (will be inserted as position 0) and check if it modified the list
        $this->list->insertAfter(0, "A");

        // Add the second value - after position 0 (1) and check if it modified the list
        $this->list->insertAfter(0, "B");

        // Add the third value - after position 0 (1 again) and check if it modified the list
        $this->list->insertAfter(0, "C");

        // The whole list's data should be "|A|C|B|"
        $this->assertEquals(
            "|A|C|B|",
            $this->list->getAllData()
        );
    }

    public function testAdicionarUmValorNoInicioDaLista()
    {
        $this->list->insertEnd("A");

        $this->list->insertBeginning("B");

        $this->assertEquals(
            2,
            $this->list->length()
        );

        $this->assertEquals(
            "B",
            $this->list->getData(0)
        );
    }

    /**
     * @dataProvider listsProvider
     */
    public function testRemoverUmValorEspecificoDaLista(DoublyLinkedList $list)
    {
        $this->assertEquals(
            3,
            $list->length()
        );

        $list->remove(1);

        $this->assertEquals(
            2,
            $list->length()
        );

        $this->assertEquals(
            "A",
            $list->getData(0)
        );

        $this->assertEquals(
            "C",
            $list->getData(1)
        );
    }

    public function listsProvider()
    {
        $listWithoutValues = new DoublyLinkedList();

        $listWithOneValue = new DoublyLinkedList();
        $listWithOneValue->insertEnd("A");

        $listWithMultipleValues = new DoublyLinkedList();
        $listWithMultipleValues->insertEnd("A");
        $listWithMultipleValues->insertEnd("B");
        $listWithMultipleValues->insertEnd("C");

        return [
            // "list-without-values" => [$listWithoutValues],
            // "list-with-one-value" => [$listWithOneValue],
            "list-with-multiple-values" => [$listWithMultipleValues]
        ];
    }

}