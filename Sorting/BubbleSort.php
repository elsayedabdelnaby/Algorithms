<?php

require_once __DIR__ . '/Sort.php';

class BubbleSort implements Sort
{
    public static function sort($array = []): array
    {
        $length = count($array);
        for ($i = 0; $i < $length; $i++) {
            for ($x = $i + 1; $x < $length; $x++) {
                if ($array[$i] > $array[$x]) {
                    $temp = $array[$x];
                    $array[$x] = $array[$i];
                    $array[$i] = $temp;
                }
            }
        }
        return $array;
    }
}
