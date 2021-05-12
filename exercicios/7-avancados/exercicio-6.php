<?php

/**
 * 6) Implementar e me explicar o quicksort em PHP.. pode procurar na internet a resolução
 * @link https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-1.php
 */

class QuickSortList
{
    public function sort($my_array)
    {
        $lowerThanPivotList = array();
        $higherThanPivotList = array();

        if (count($my_array) < 2) {
            return $my_array;
        }

        $pivot_key = key($my_array);
        $pivot = array_shift($my_array);

        foreach ($my_array as $val) {
            if ($val <= $pivot) {
                $lowerThanPivotList[] = $val;
            } elseif ($val > $pivot) {
                $higherThanPivotList[] = $val;
            }
        }

        return array_merge(
            $this->sort($lowerThanPivotList), 
            array($pivot_key => $pivot), 
            $this->sort($higherThanPivotList)
        );
    }
}
