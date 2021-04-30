<?php

use PHPUnit\Framework\TestCase;

include "exercicios/7-avancados/exercicio-3.2.php";

class M7E3 extends TestCase
{
    public function testPushAndLength()
    {
        $stack = new Stack();

        $stack->push("teste");

        $this->assertEquals(
            1,
            $stack->length()    
        );

    }

    public function testPop()
    {
        $stack = new Stack();

        $stack->push("teste");

        $this->assertEquals(
            "teste",
            $stack->pop()    
        );

        $this->assertEquals(
            0,
            $stack->length()    
        );

    }
}