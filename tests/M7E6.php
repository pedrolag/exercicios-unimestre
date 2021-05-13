<?php

use PHPUnit\Framework\TestCase;

include "exercicios/7-avancados/exercicio-6.php";

class M7E6 extends TestCase
{
    public function testQuickSort()
    {
        $quickSortList = new QuickSortList;

        $sortedList = $quickSortList->sort(array(7, 98, 14, 4, 47));

        $this->assertEquals(
            $sortedList,
            array(4, 7, 14, 47, 98)
        );
    } 
}