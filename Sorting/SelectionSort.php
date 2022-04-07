<?php

require_once __DIR__ . '/Sort.php';

class SelectionSort implements Sort
{
    public static function sort($array = []): array
    {
        $length = count($array);
        for($i = 0; $i < $length; $i++)
        {
            $min_value_index = $i;
            for($j = $i + 1; $j < $length; $j++)
            {
                if($array[$min_value_index] > $array[$j])
                {
                    $min_value_index = $j;
                }
            }
            $temp = $array[$i];
            $array[$i] = $array[$min_value_index];
            $array[$min_value_index] = $temp;
        }
        return $array;
    }
}
