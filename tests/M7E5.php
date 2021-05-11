<?php

use PHPUnit\Framework\TestCase;

include "exercicios/7-avancados/exercicio-5.php";

class M7E5 extends TestCase
{
    private $tree;

    public function setUp(): void
    {
        $this->tree = new OrderedBinaryTree();
    }

    public function testInsertValuesInTheTreeInTheCorrectBranches()
    {
        $this->tree->insert(4);
        $this->tree->insert(3);
        $this->tree->insert(5);
        $this->tree->insert(1);
        $this->tree->insert(2);

        $this->assertEquals(
            $this->tree->mainNode->value,
            4
        );

        $this->assertEquals(
            $this->tree->mainNode->branchLeft->value,
            3
        );

        $this->assertEquals(
            $this->tree->mainNode->branchRight->value,
            5
        );

        $this->assertEquals(
            $this->tree->mainNode->branchLeft->branchLeft->value,
            1
        );

        $this->assertEquals(
            $this->tree->mainNode->branchLeft->branchLeft->branchRight->value,
            2
        );
    }
}