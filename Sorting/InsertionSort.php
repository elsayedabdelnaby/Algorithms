<?php

class InsertionSort
{
    public static function sort($array = []): array
    {
        for ($i = 1; $i < count($array); $i++) {
            $current_vlaue = $array[$i];
            $current_index = $i;
            for ($j = $i - 1; $j >= 0 && $current_vlaue < $array[$j]; $j--) {
                if ($current_vlaue < $array[$j]) {
                    $array[$current_index] = $array[$j];
                    $current_index = $j;
                    $array[$current_index] = $current_vlaue;
                }
            }
        }
        return $array;
    }
}
